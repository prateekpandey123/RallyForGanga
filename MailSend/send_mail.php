<?php
       if (isset($_POST['mail'])) {

         $mailto = $_POST['mail_to'];
         // $mailSub = $_POST['mail_sub'];
         $mailMsg = $_POST['mail_msg'];

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
         $mail ->Body = $mailMsg;
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
                    window.location.href = 'index.html';
                });
            </script>
          <?php
         }
    }

    ?>