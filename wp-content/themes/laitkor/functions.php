<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/wp-config.php' );

//echo $wpdb->prefix;die;
	//echo "<pre>";print_r($wpdb);die;

add_theme_support( 'menus' );
	
	// function contact_us_email() {
	// 	if(isset($_POST['contact_us'])) {
	// 		//echo "<pre>";print_r($_POST);die;
	// 		$_SESSION['Error']="";
	// 		if(trim($_POST['contactName']) === '') {
	// 			$_SESSION['Error'] = '<span>Please enter your name.</span><br/>';
	// 			$_SESSION['hasError'] = true;
	// 		} else {
	// 			$name = trim($_POST['contactName']);
	// 		}

	// 		if(trim($_POST['email']) === '')  {
	// 			$_SESSION['Error'] .= '<span>Please enter your email address.</span><br/>';
	// 			$_SESSION['hasError'] = true;
	// 		} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
	// 			$_SESSION['Error'] .= '<span>You entered an invalid email address.</span><br/>';
	// 			$_SESSION['hasError'] = true;
	// 		} else {
	// 			$email = trim($_POST['email']);
	// 		}
	// 		if(trim($_POST['mobile']) === '') {
	// 			$_SESSION['Error'] .= '<span>Please enter your mobile No.</span><br/>';
	// 			$_SESSION['hasError'] = true;
	// 		} else {
	// 			$mobile = trim($_POST['mobile']);
	// 		} 
			
	// 		if($_POST['message'] === ''){
	// 			$_SESSION['Error'] .= '<span>Message Required.</span><br/>';
	// 			$_SESSION['hasError'] = true;
	// 		}
	// 		else {
	// 			$message = trim($_POST['message']);
	// 		}
	// 		if(!isset($_SESSION['hasError'])) {
				
	// 			//$emailTo = array("0"=>'Yasser.Sheikh@laitkor.com',"1"=>'shailendra@laitkor.com',"2"=>'faiz.khan@laitkor.com',"3"=>'anshu.shukla@laitkor.com');
	// 			$emailTo ="amardeep.gautam@laitkor.com";
	// 			//$emailTo ="sudahnshu.kumar@laitkor.com";
	// 			$emailFrom ="Support@design.laitkor.com";
	// 				/* if (!isset($emailTo) || ($emailTo == '') ){
	// 					$emailTo = get_option('admin_email');
	// 				} */
	// 				$subject = "  Contact Us Form from Design Laitkor";
	// 				$body = "Hi, \n\nEnquiry from Contact Us page \n\nName : $name \n\nEmail : $email \n\nMobile : $mobile \n\nMessage : $message  ";
	// 				$headers = 'From: Support <'.$emailFrom.'>' . "\r\n" . 'Reply-To: ' . $email;
					
	// 					wp_mail($emailTo, $subject, $body, $headers);
					
	// 				$emailSent = true; 
	// 				$_SESSION['Success']="Your request has been sent successfully";
	// 		}
	// 	}
	// }
	
	//add_action( 'init', 'contact_us_email' );
 	
