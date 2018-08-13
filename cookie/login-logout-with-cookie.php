<?php 
//Cookies Create

setcookie("email", $emaila, time()+3600); 		//'email' is the cookie name/varibale
setcookie("token", md5($emaila), time()+3600);	//'token' is the cookie name/varibale


//Cookies ECHO  with variable

echo $_COOKIE["email"];
echo $_COOKIE["token"];


//Cookies Destroy

setcookie("token", NULL, time()-3600, '/');
setcookie("email", NULL, time()-3600, '/');



//Sample condition
//For logout and 22 is login page ID which is redirected by LOGOUT button

global $post;
if( $post->ID == 22 ) : 
	setcookie("token", NULL, time()-3600, '/');
	setcookie("email", NULL, time()-3600, '/');
else : 
endif;


//Login SQL and Create Cookie
/
if(isset($_POST['submit'])){
	global $wpdb;
	$table_name	= "user_contact_info";
	$emaila 	= $_POST['email'];
	$password 	= $_POST['password'];
	$password 	= md5($password);

	$login = $wpdb->get_results( "SELECT * FROM $table_name WHERE user_email = '$emaila' AND user_pass = '$password'");

	if ($login) {
		$_SESSION["token"] = md5($emaila);
		$_SESSION["email"] = $emaila;

		//echo "Password match";

		setcookie("email", $emaila, time()+3600);
		setcookie("token", md5($emaila), time()+3600);

		echo "<script>window.location.href = '".$homeurl."dashboard/';</script>";
		
	}else{
		echo "<script>alert('Password not matched!');</script>";
	}
}