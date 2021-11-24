<?php 
//echo "we are on footer page..";

    $name = $_REQUEST['name'];
    $mailForm = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $whatsapp = $_REQUEST['whatsapp'];
    

    $mailTo = "maitrihpatel@gmail.com";
    $headers = "From: ".$mailForm;
   
    $txt = "You Have Receive New Mail.\n Name : ".$name.".\n Email : ".$mailForm. ".\n Phone : ".$phone." \n whatsapp :".$whatsapp;

    mail($mailTo,"New Request for one day trial : $name", $txt, $headers);
   //header("location:index.html");
   
   //$htmlContent = file_get_contents("mail.html");
   $returnMessage = 'Thank you so much for signing with Csquare! We’re thrilled to have you join us on our adventure to get the best opportunities for kids willing to learn. Your admission registration has been confirmed. We’ll be in touch as soon as possible with an additional details related to your further journey towards your goal. \n\n
   Thank you \n
   Csquare Coaching Institute';
   
   $body =  "Greetings Mr/Mrs : ".$name. " \n ". $returnMessage;
  
   
   
   mail($mailForm,"Thank you very much . ",$body,"From:info@csquare.org.in");


?>




<script language="javascript">
    window.open("index.html","_self");
</script>