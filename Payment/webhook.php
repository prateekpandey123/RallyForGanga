<?php
    $con=mysqli_connect('localhost','root','','rallyfortree');
    $data = $_POST;
    $mac_provided = $data['mac']; 
    unset($data['mac']);
    $ver = explode('.', phpversion());
    $major = (int) $ver[0];
    $minor = (int) $ver[1];
    if($major >= 5 and $minor >= 4){
         ksort($data, SORT_STRING | SORT_FLAG_CASE);
    }
    else{
         uksort($data, 'strcasecmp');
    }
    $mac_calculated = hash_hmac("sha1", implode("|", $data), "c45bca3af4ee429fa92b5ec200a17cdf");
    if($mac_provided == $mac_calculated){
        if($data['status'] == "Credit"){

            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $amount=$_POST['amt'];

            $query="INSERT INTO transaction (name,email,phone,amount,pay_to) VALUES ('$name','$email','$phone','$amount','$pay_to')";
        
            $run=mysqli_query($con,$query);
        }
        else{
           
        }
    }
    else{
        echo "MAC mismatch";
    }
?>