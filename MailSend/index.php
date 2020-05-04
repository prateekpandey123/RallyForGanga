<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Send Mail Using Php</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.css">
        <style>
            label{
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row bg-dark">
                <div class="col-md-12 p-5">
                    <h3 class="text-white"> Send Mail Using php</h3>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <form action="#" method="post">
                                <label for="">To:</label>
                                <div class="form-group">
                                    <input type="text" name="mail_to" class="form-control" placeholder="Enter Send to mail">
                                </div>
                                <label for="">Subject:</label>
                                <div class="form-group">
                                    <input type="text" name="mail_sub" class="form-control" placeholder="Enter Send to mail">
                                </div>
                                <label for="">Massege:</label>
                                <div class="form-group">
                                    <input type="text" name="mail_msg" class="form-control" placeholder="Enter Send to mail">
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" name="mail" class="btn btn-dark">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
           if (isset($_POST['mail'])) {

               $mailto = $_POST['mail_to'];
               // $mailSub = $_POST['mail_sub'];
               // $mailMsg = $_POST['mail_msg'];

               require 'PHPMailer-master/PHPMailerAutoload.php';
               $mail = new PHPMailer();
               $mail ->IsSmtp();
               $mail ->SMTPDebug = 0;
               $mail ->SMTPAuth = true;
               $mail ->SMTPSecure = 'ssl';
               $mail ->Host = "smtp.gmail.com";
               $mail ->Port = 465; // or 578
               $mail ->IsHTML(true);
               $mail ->Username = "prateekpandey736@gmail.com";
               $mail ->Password = "Gold@8687";
               $mail ->SetFrom("prateekpandey736@gmail.com");
               $mail ->Subject = 'Message From Rally For Ganga';
               $mail ->Body = 'Thanku ';
               $mail ->AddAddress($mailto);

               if(!$mail->Send())
               {
                ?>
                    <script>
                        swal("Mail Not Send", "You clicked the button!", "error");
                    </script>
                <?php
               }
               else
               {
                  ?>
                  <script>
                    sweetAlert(
                          {
                              title: "Thanks for contact us..",
                              text: "Just wait for the email!",
                              type: "success"
                          },

                      function () {
                          window.location.href = 'index.php';
                      });
                  </script>
                <?php
               }
        }

        ?>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>