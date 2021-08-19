<?php

use Jenssegers\Blade\Blade;
require "phpmailer/class.phpmailer.php"; //include phpmailer class


// Add base route (startpage)
Route::add('/',function(){
     $blade = new Blade('views', 'cache');

echo $blade->make('home', ['page_title' => 'Home']);
   
   
});



Route::add('/p1',function(){
     $blade = new Blade('views', 'cache');
    

echo $blade->make('press_release1', ['page_title' => 'Press Release']);
   
   
});


Route::add('/p2',function(){
     $blade = new Blade('views', 'cache');
    

echo $blade->make('press_release2', ['page_title' => 'Press Release']);
   
   
});

Route::add('/p3',function(){
     $blade = new Blade('views', 'cache');
    

echo $blade->make('press_release3', ['page_title' => 'Press Release']);
   
   
});

Route::add('/p4',function(){
     $blade = new Blade('views', 'cache');
    

echo $blade->make('press_release4', ['page_title' => 'Press Release']);
   
   
});






















Route::add('/contact-us',function(){
     $blade = new Blade('views', 'cache');
     $status = $_GET['status'];

echo $blade->make('contact', ['page_title' => 'Contact Us', 'status' => $status]);
   
   
});


Route::add('/about-us',function(){
   $blade = new Blade('views', 'cache');

echo $blade->make('about-us', ['page_title' => 'About Us']);
   
    
},'get');



Route::add('/corporate-travel',function(){
   $blade = new Blade('views', 'cache');

echo $blade->make('corporate-travel', ['page_title' => 'Corporate Travel']);
   
    
},'get');




Route::add('/corporate-traveler',function(){
   $blade = new Blade('views', 'cache');

echo $blade->make('corporate-traveler', ['page_title' => 'Corporate Traveler']);
   
    
},'get');



Route::add('/customer-travel',function(){
   $blade = new Blade('views', 'cache');

echo $blade->make('customer-travel', ['page_title' => 'Customer Travel']);
   
    
},'get');



Route::add('/finch-affiliates',function(){
   $blade = new Blade('views', 'cache');

echo $blade->make('finch-affiliates', ['page_title' => 'Finch Affiliates']);
   
    
},'get');



Route::add('/finch-connect',function(){
   $blade = new Blade('views', 'cache');

echo $blade->make('finch-connect', ['page_title' => 'Finch connect']);
   
    
},'get');



Route::add('/flight-deals',function(){
   $blade = new Blade('views', 'cache');

echo $blade->make('flight-deals', ['page_title' => 'Flight deals']);
   
    
},'get');



Route::add('/services',function(){
   $blade = new Blade('views', 'cache');

echo $blade->make('services', ['page_title' => 'Services']);
   
    
},'get');



Route::add('/trade-partner-plus',function(){
   $blade = new Blade('views', 'cache');

echo $blade->make('trade-partner-plus', ['page_title' => 'Trade Partner Plus']);
   
    
},'get');


Route::add('/press-release',function(){
   $blade = new Blade('views', 'cache');

echo $blade->make('press-release', ['page_title' => 'Press Release']);
   
    
},'get');


Route::add('/finchglow_travels_hosts_4th_trade_partners_forum_in_lagos',function(){
   $blade = new Blade('views', 'cache');

echo $blade->make('finchglow_travels_hosts_4th_trade_partners_forum_in_lagos', ['page_title' => 'Forum in Lagos']);
   
    
},'get');










// Post route
Route::add('/contact-form',function(){
    $my_db = Database::instance();

if(
$my_db->insert(
	'newsletter', [
	'name'=>$_POST['name'],
'email'=>$_POST['email'],
 
	]
))
{





$_SESSION['contact_status'] = 'success ';

header('Location:'.$_POST['URL_REF']);



}
else
{
$_SESSION['contact_status'] = 'fail';

}
    
     
},'post');


// Post route
Route::add('/contact',function(){
    
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$body = $_POST['message'];
	$message = "
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <div style='text-align: left'>
    <h4>Dear Finchglow,</h4>
    </div>
    <div style='width:100%'>
    <p>".$body."</p>
    </div>
    <div style='width:100%; margin-top: 2rem'>
    <p>Regards,</p>
    <p>".$name."</p>
    <p>".$email."</p>
    </div>
    </body>
    </html>
    ";
	
	
	// Instantiate Class
    $username = "ephylogistics@gmail.com";
    $password = "honxayregnpumfec";
    
    $mail = new PHPMailer();
    
    // Set up SMTP
    $mail->IsSMTP();                // Sets up a SMTP connection
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication
    $mail->Username   = $username; // Your full Gmail address
    $mail->Password   = $password; // Your Gmail password
    
    // Compose
    $mail->SetFrom($email, $name);
    $mail->AddReplyTo($email, "Re: ".$subject);
    $mail->Subject = $subject;      // Subject (which isn't required)
    $mail->MsgHTML($message);
    
    // Send To
    $mail->AddAddress($username, "Finchglow Travels"); // Where to send it - Recipient
    $result = $mail->Send();		// Send!
    $message = $result ? 'Successfully Sent!' : 'Sending Failed!';
    unset($mail);
    
    if($message == 'Successfully Sent!') {
        header('Location: /contact-us?status=success');
    }
    
    if($message == 'Sending Failed!'){
        header('Location: /contact-us?status=failed');
    }
    

    exit();
    
     
},'post');















// Post route
Route::add('/get-quote',function(){
    $my_db = Database::instance();
    $ref = $_POST['URL_REF'];
    $whole_post = $_POST;
    unset($whole_post['URL_REF']);
//the form fileds are named according to db column names
if($my_db->insert('trip_requests', $whole_post))

{

 

$_SESSION['contact_status'] = 'success';


 

header('Location:'.$ref);



}
else
{
$_SESSION['contact_status'] = 'fail';

}
    
     
},'post');




























