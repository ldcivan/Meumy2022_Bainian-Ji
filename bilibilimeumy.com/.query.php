<?php 
header('Content-type:text/html;charset=utf8');
$conn = @ mysqli_connect("localhost","root","Ldc123456","danmu") or die("datebase can`t been connected");
//mysqli_select_db($conn, "danmu");
mysqli_query($conn,"set names 'utf8'"); //


$sql="SELECT `danmu` FROM `danmu`";
$query=mysqli_query($conn,$sql); 
//echo $danmu;
echo "[";
$first=0;
while($row=mysqli_fetch_array($query)){
	if ($first) {
		echo ",";
		
	}
$first=1;
echo "'".$row['danmu']."'";
}
	echo "]";



?>
