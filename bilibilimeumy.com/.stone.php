<?php 
header('Content-type:text/html;charset=utf8');
$conn = @ mysqli_connect("localhost","root","Ldc123456","danmu") or die("datebase can`t been connected");
//mysqli_select_db($conn, "danmu");
mysqli_query($conn,"set names 'utf8'"); //

// function htmtocode($content) {
// 	$content = str_replace("\n", "<br>", str_replace(" ", "&nbsp;", $content));
// 	return $content;
// }

// // $c=$_GET['c'];
// if($c =="insert"){




// }
// elseif($c=="query") {

// $P="SELECT * FROM `danmu` ";
// $queryp=mysql_query($P);
// }
// else {


// }

$danmu=$_POST['danmu'];
//$sql="INSERT INTO `danmu` VALUES ('".$danmu."')";
$sql="INSERT INTO `danmu`(`danmu`) VALUES ('".$danmu."')";
//echo $sql;
$query=mysqli_query($conn,$sql); 
//echo $danmu;
//echo $danmu;

?>
