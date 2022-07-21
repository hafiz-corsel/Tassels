//<?php

// if(isset($_POST)){
  
    //Email information
  //$admin_email = "digital.tasselsinteriors@gmail.com";  
//  $admin_email = "starsiteindia@gmail.com";  
//  $email_from = $_POST['email']; 
//  $name = $_POST['name']; 
//  $phone = $_POST['phone'];   
//  $email = $_POST['email']; 
//  $address = $_POST['address'];
//  $product = $_POST['product'];  
  //$comment = $_POST['message']; 
  
//	    $email_message = "Name: ".$name."\n";  
//      $email_message .= "Email: ".$email."\n";
//      $email_message .= "Phone: ".$phone."\n";
//      $email_message .= "Street Address: ".$address."\n";
//      $email_message .= "Desired Product: ".$product."\n";    
  
//  $headers = 'From: '.$email_from."\r\n". 
 
//'Reply-To: '.$email_from."\r\n" .
 
//'X-Mailer: PHP/' . phpversion();
  //send email
//  mail($admin_email, "Contact Request", $email_message, "From:" . $email);
//  header('Location: '.$_SERVER['HTTP_REFERER']);

// header("Location: thank-you.html");
 
 
//exit;
//  }
  


  <?php 
                        
                            if($_POST['send']!=""){
                             
                                $admin_email = "starsiteindia@gmail.com";  
                                $email_from = $_POST['email']; 
                                $name = $_POST['name']; 
                                $phone = $_POST['phone'];   
                                $email = $_POST['email']; 
                                $address = $_POST['address'];
                                $product = $_POST['product'];  
                                
                                
                                $subject= 'Have Question?';
                                $to='starsiteindia@gmail.com';
                                $message="Name : ".$name."\n"."Mobile : ".$phone."\n"."Email : ".$email."\n"."Address : ".$address."\n"."Product : ".$product."\n";
                                
                                if(mail($to,$subject,$message)){
                                  //  $succ_message = 'Your Request is received. Our team will contact you shortly'; 
                                    header('Location: '.$_SERVER['HTTP_REFERER']);
                                   header("Location: thank-you.html");
                                }
                            }
                            
                        ?>  
  