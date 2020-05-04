<?php
	include 'layouts/link.php';
	$con=mysqli_connect("localhost","root","","rallyfortree") or die(mysqli_error());
	if((isset($_POST['submit'])))
	{
		$name = $con->real_escape_string($_POST['name']);
		$phone = $con->real_escape_string($_POST['phone']);
		$email = $con->real_escape_string($_POST['email']);
		$message = $con->real_escape_string($_POST['message']);
		$sql="INSERT INTO contact (name, phone, email, message) VALUES('".$name."','".$phone."', '".$email."', '".$message."')";
		if($result = $con->query($sql))
		{
			?>
              <script>
                sweetAlert(
                  {
                      title: "Welcome to Contact!",
                      text: "Just wait for the email!",
                      type: "success"
                  },

                  function () {
                      window.location.href = 'index.php';
                  });
              </script>
            <?php
        }
		else
		{
			?>
              <script>
                swal("Incorrect Code", "You clicked the button!", "error");
              </script>
            <?php
		}		
	}
?>