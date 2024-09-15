

<?php 
session_start();
$username=$_SESSION["username"];
echo $username ."<br>";
$tcon=mysqli_connect('localhost','root','root','shoppymaster');
if(mysqli_connect_errno()){
    die('coud not connect'.mysqli_connect_errno());
}
$sql="delete from user_details where username='$username'";
$res = mysqli_query($tcon,$sql);

if($res){
    header("Location: index.html");
    exit();
    //echo "<a href='https://www.google.com'>hello</a>";
}
else {
    echo "Query Fail";
    exit;
}
mysqli_free_result($res);
?>