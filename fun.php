<?php 
function con($host,$user,$pass,$db)
{
	mysqli_connect($host,$user,$pass,$db) or die ("Error in connection username:$user, password:$pass, hostname:$host,database:$db");
}


function msg($msg)
{
    echo "<script>alert('$msg')</script>";
}

function sendto($loca)
{
  echo "<script>location='$loca'</script>";

}


?>