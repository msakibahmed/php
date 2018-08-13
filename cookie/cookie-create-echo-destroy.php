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
