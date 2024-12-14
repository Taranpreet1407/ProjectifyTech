<?php

$name= $_REQUEST['name'];
$mobile = $_REQUEST['mobile'];
$email= $_REQUEST['email'];
$_message= $_REQUEST['message'];

if(empty(name) || empty(email) || empty(mobile) || empty(message))
{
    echo "Kindly fill all the details to submit the form";

}
else
{
    mail("contact.us.projectify@gmail.com", "Projectify Notification" , $message , $mobile, "FROM: $name < $email>");
    echo "<script type='text/javascript'">alert('Message Delivered Succesfully')
    </script>;
    
}


?>

