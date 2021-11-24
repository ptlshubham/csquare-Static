<?php 
//echo "we are on footer page..";

    $name = $_REQUEST['name'];
    $mailForm = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $whatsapp = $_REQUEST['whatsapp'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];
    //$phone = $_REQUEST['contact-phone'];
    

    $mailTo = "maitrihpatel@gmail.com";
    $headers = "From: ".$mailForm;
   
    $txt = "You Have Receive New Mail.\n Name : ".$name.".\n Email : ".$mailForm.".\n Phone : ".$phone.".\n Whatsapp : ".$whatsapp. ".\n Subject : ".$subject." \n Message :".$message;

    mail($mailTo,"New Request for one day trial : $name", $txt, $headers);
   //header("location:index.html");
   
   //$htmlContent = file_get_contents("mail.html");
   
   
   $returnMessage = "Thank you for emailing us with your queries. We’ll get in contact with you as fast as we can with the best possible answer for you, getting you back on track. \n\n
   Thank you \n
   Csquare Coaching Institute ";

   $body =  "Greetings Mr/Mrs : ".$name. " \n " . $returnMessage;
  
   
   mail($mailForm,"Thank you very much . ",$body,"From:info@csquare.org.in");
?>


<script language="javascript">
    window.open("index.html","_self");
</script>