<?php
$E_name=$_POST['name'];
$E_email= $_POST['email'];
$E_phone= $_POST['phone'];
$E_message= $_POST['message'];


$url= $_SERVER['HTTP_REFERER'];
 
$to = "prabhanshu.mca.1989@gmail.com, info@go2ways.com, ajay@go2ways.com, vikash@go2ways.com";
$subject = "Enquiry Mail from :Go2ways";
 

$message ="Name:-                     :$E_name\n";
$message.="Email:-                     :$E_email\n";
$message.="Phone:-                  :$E_phone\n";
$message.="Message:-                :$E_message\n";
$message.="URL:-                       :$url\n"; 


$from = "noreply@demo.itscenario.in";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
//echo "Mail Sent.";


	
    echo "<script language=\"JavaScript\">\n";
    echo "<!-- hide from old browser\n\n";
    
    echo "function redirect() {\n";
    echo "window.location = \"" . "index.php" . "\";\n";
    echo "}\n\n";

    echo "timer = setTimeout('redirect()', '" . ($seconds*300) . "');\n\n";

    echo "-->\n";
    echo "</script>\n"; 

?>
