<?php
session_start();
// echo "sunny";die;

if (isset($_POST['submit'])) {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $mobile = trim($_POST["number"]);
    $address = trim($_POST["address"]);
    $message = trim($_POST["message"]);


    $to = "support@yssteps.com";
    $subject = "Enquiry From $email";
    $headers =  'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: YourSuccessSteps' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $full_message = "<html>
                        <head><title>Enquiry Data</title></head>
                        <body>
                        <table>
                            <tr>
                            <td>Name</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $name</td>
                            </tr>
                            <tr>
                            <td>Email Id</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $email</td>
                            </tr>
                            <tr>
                            <td>Mobile No</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $mobile</td>
                            </tr>
                             <tr>
                            <td>Address</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $address</td>
                            </tr>
                            <tr>
                            <td>Message</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $message</td>
                            </tr>
                           
                        </table>
                        </body>
                        </html>";
    $user = $email;
    $user_subject = "Thank You $name";
    $user_headers = 'From: YourSuccessSteps' . "\r\n";
    $user_message = "Dear $name.\nWelcome to  YourSuccessSteps\n We have got your query.We will reach you soon.\nThank You!";   
   
        if (mail($to, $subject, $full_message, $headers)) {
            mail($user, $user_subject, $user_message, $user_headers);
            $_SESSION["response"] = "<h5>Dear <span class='text-danger'>$name</span>,</h5><p>We have got your query. We will contact you soon.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone px-2 '></i><span> xxxxxxxxx</span></span></p>
                <p>Thank You!</p>";
        } else {
            echo $name . $mobile . $whatsapp . $email . $need . $message;
            $_SESSION["response"] = "<h5>Dear <span class='text-danger'>$name</span>,</h5><p>Something is wrong. It seems like internet is not working well.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone px-2 '></i><span> xxxxxxx</span></span></p>
                <p>Please, try again!</p><p>Thank You!</p>";
        }
   
    header("Location:thankyou.php");
   
}
