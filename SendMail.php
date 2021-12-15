<?php
    // if (!defined('BASEPATH')) exit('No direct script access allowed');
    use PHPMailer\PHPMailer\PHPMailer;
    require "./vendor/autoload.php";
    require "./vendor/phpmailer/phpmailer/src/PHPMailer.php";
    class SendMail
    {
        function send($user,$subject,$body,$attachments){
            $mail = new PHPMailer;
            /*$mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );*/
            //Enable SMTP debugging. 
            $mail->SMTPDebug = 0;                               
            //Set PHPMailer to use SMTP.
            $mail->isSMTP();            
            //Set SMTP host name       (gmail host:smtp.gmail.com)                   
            $mail->Host = "smtp.gmail.com";
            //Set this to true if SMTP host requires authentication to send email
            $mail->SMTPAuth = true;                          
            //Provide username and password     
            $mail->Username = "venkatnalluri21@gmail.com";
            $mail->Password = "123212212345";
            //If SMTP requires TLS encryption then set it
            $mail->SMTPSecure = "tls";      //ssl
            //Set TCP port to connect to (gmail port:587)
            $mail->Port = 587;                                   

            $mail->From = $user['fromMail']; //"test@pencaptech.com";
            $mail->FromName = $user['name'];

            $mail->addAddress($user['toMail'], 'GlobalTechnoCorp');

            if(!empty($attachments) && is_array($attachments)){
                foreach($attachments as $attachment){
                    $mail->addAttachment($attachment);
                }
            }

            $mail->isHTML(true);

            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->AltBody = "This is the plain text version of the email content";

            $mail_status = array();
            if(!$mail->send()) 
            {
                $mail_status['status'] = false;
                $mail_status['msg'] = "Mailer Error: " . $mail->ErrorInfo;
                return $mail_status;
            } 
            else 
            {
                $mail_status['status'] = true;
                $mail_status['msg'] = "Message has been sent successfully";
                $mail_status['images'] = $attachments;
                return $mail_status;
            }
        }
    }
    if(isset($_POST['name'])){
        // var_dump($_POST['message']);exit;
        extract($_POST);
        $sm = new SendMail();
        $sm->send(['name'=>$name,'fromMail'=>'venkatnalluri21@gmail.com','toMail'=>$email],'New Enquiry','<h5>Hi,</h5>'.
                                                                                                    '<h5>User Name :'.$name.'</h5>'.
                                                                                                    '<h5>Email :'.$email.'<h5>'.
                                                                                                    '<h5>Phone Number :'.$ph_number.'<h5>'.
                                                                                                    '<p>Message :<br>'.$message.'<p>',[]);
    }
    // console.log('mailer');
?>