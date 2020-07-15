<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['uname']; // Get Name value from HTML Form
        $email_id = $_POST['email']; // Get Email Value
        $msg = $_POST['msg']; // Get Message Value
         
        $to = "sunilthewiseman@gmail.com"; // You can change here your Email
        $subject = "'$name' has submited a form"; // This is your subject
         
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: Admin <sunilthewiseman@gmail.com>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id
         
        if(mail($to,$subject,$msg,$headers)){
            // Message if mail has been sent
            header("Location: ./thank_you.html");
        }
 
        else{
            // Message if mail has been not sent
            header("Location: ./404.html");
        }
    }
?>