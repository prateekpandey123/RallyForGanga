<?php
    $con=mysqli_connect('localhost','root','','rallyfortree');
    if (isset($_POST['payment']) && $_POST['amt'] >=99) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $amount=$_POST['amt'];
        $tree = $_POST['tree'];
        $pay_to='Dharti Foundation(Rally For Ganga).';
        include 'instamojo/Instamojo.php';
        $api = new Instamojo\Instamojo('test_3fca8eebb469e6292a0003326f6', 'test_69ae86fc88c4fccf0809d1641df', 'https://test.instamojo.com/api/1.1/');
        try {
            $response = $api->paymentRequestCreate(array(
                "purpose" => $pay_to,
                "user_name" => $name,
                "email" => $email,
                "phone" => $phone,
                "amount" => $amount,
                "no_of_tree"=>$tree,
                "send_email" => true,
                "allow_repeated_payments" => false,
                "redirect_url" => "http://rallyforganga.org/Payment/thankyou.php",
                // "webhook" => "http://rallyforganga.org/webhook.php",
            ));
            $url=$response['longurl'];
            header("location:$url");
        }
        catch (Exception $e) {
            print('Error: ' . $e->getMessage());
        }
        $query="INSERT INTO transaction (name,email,phone,amount,no_of_tree,pay_to) VALUES ('$name','$email','$phone','$amount', '$tree','$pay_to')";
        
            $run=mysqli_query($con,$query);
    }
?>