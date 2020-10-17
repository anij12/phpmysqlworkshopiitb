<html>
    <form action='mail.php' method='POST'>
        TO : <input type="email" name='toemail'><br /><br />
        SUBJECT : <input type="text" name='subject'><br /><br />
        WRITE YOUR FEEDBACK HERE : <textarea name="message"></textarea><br /><br />
        <input type="submit" name='submit' value='Send Mail'>
    </form>
</html>

<?php
    require 'PHPMailerAutoload.php';
    if($_POST['submit'])
    {
        $toemail = $_POST['toemail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if($toemail && $message)
            send_mail($toemail,$subject,$message);
        else
            die("You must enter a proper email and message");
    }
function send_mail($toemail,$subject,$message)
{
    $mail = new PHPMailer;
    $mail->IsSMTP();

    $mail->SMTPDebug  = 0;
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "joshianium18ce@student.mes.ac.in";
    $mail->Password   = "******";

    $mail->IsHTML(true);
    $mail->AddAddress($toemail);
    $mail->SetFrom("joshianium18ce@student.mes.ac.in", "******");
    $mail->Subject = $subject;
    $mail->Body = $message;

    if(!$mail->Send()) {
        echo "Error while sending Email.";
        echo "Mailer Error: ".$mail->ErrorInfo;
    }
    else 
    {
        echo "Email sent successfully";
    }
}
?>
