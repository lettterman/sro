<?php
if(isset($_POST['submit']))
{
$name = $_POST['tel']; // Get Name value from HTML Form

$to = "vlasov_anvar_t@mail.ru"; // You can change here your Email
$subject = "'$name' has been sent a mail"; // This is your subject

// HTML Message Starts here
$message ="
<html>
<body>
<table style='width:600px;'>
<tbody>
<tr>
<td style='width:150px'><strong>tel: </strong></td>
<td style='width:400px'>$name</td>
</tr>
</tbody>
</table>
</body>
</html>
";
// HTML Message Ends here

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Admin <admin@websapex.com>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id

if(mail($to,$subject,$message,$headers)){
// Message if mail has been sent
echo "<script>
alert('Mail has been sent Successfully.');
</script>";
}

else{
// Message if mail has been not sent
echo "<script>
alert('EMAIL FAILED');
</script>";
}
}
?>
