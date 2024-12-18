<?php
    ini_set("display_errors",1);
    include('smtp/class.phpmailer.php');
    $name= $_POST['name'];
    $email= 'rajneshwarthakur@gmail.com';
    $msg = "<html>
<head>
<title>Rajneshwar Singh</title>
</head>
<body>
<table width='50%' border='0' align='center' cellpadding='0' cellspacing='0'>
  <tr>
    <td colspan='2' align='center' valign='top'><img src='https://rajneshwar.com/images/logo.png' width='140' height='140'></td>
  </tr>
  <tr>
    <td width='50%' align='right'>&nbsp;</td>
    <td align='left'>&nbsp;</td>
  </tr>
  <tr>
    <td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Name:</td>
    <td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$_POST['name']."</td>
  </tr>
  <tr>
    <td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Email:</td>
    <td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$_POST['email']."</td>
  </tr>
  <tr>
    <td align='right' valign='top' style='border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Message:</td>
    <td align='left' valign='top' style='border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$_POST['message']."</td>
  </tr>
</table>
</body>
</html>
";
    //$msg= "<p> You got the message from ".$_POST['email']." . The message is : ".$_POST['message'] . ". </p>";
    $subject= "Contact info from profile website";

    $mail = new PHPMailer(true); 
    $mail->IsSMTP();                           
    $mail->SMTPAuth   = false;                 
    $mail->Port       = 25;                    
    $mail->Host       = "localhost"; 
    $mail->Username   = "contact@rajneshwar.com";   
    $mail->Password   = "Serialkiller@63";            
    $mail->IsSendmail();  
    $mail->From       = "rajneshwarthakur@gmail.com";
    $mail->FromName   = "Rajneshwar";
    $mail->AddAddress($email);
    $mail->Subject  = $subject;
    $mail->WordWrap   = 80; 
    $mail->MsgHTML($msg);
    $mail->IsHTML(true); 
         
    if($mail->Send()){
        echo "Thank you for sending message. I will join you soon.";
    }else{
        echo $mail->ErrorInfo;
    } 
?>