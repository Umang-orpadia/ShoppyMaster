<html>
<body>
<?php
$username1=$_POST["Username"];
$password1=$_POST["Password"];
$firstname=$_POST["fname"];
$lastname=$_POST["lname"];
$mobile=$_POST["mn"];
$email=$_POST["email"];
$address=$_POST["add"];

echo $firstname ."<br>";
echo $lastname ."<br>";
echo $mobile ."<br>";
echo $email ."<br>";
echo $address ."<br>";


$tcon=mysqli_connect('localhost','root','root','shoppymaster');
if(mysqli_connect_errno()){
    die('coud not connect'.mysqli_connect_errno());
}
$sql="insert into user_details(username,password,fname,lname,mn,email,address) values ('$username1','$password1','$firstname','$lastname','$mobile','$email','$address')";
$res=$tcon->query($sql);
header ("Location:index.html");
if($res==false){
    die("Query fail");
}
// $last_id=$tcon->insert_id;
// $_REQUEST['id']=$last_id;
// echo $_REQUEST['id'];
// exit;
// header("Location: personaldetail.php");

 ?>
</body>
</html> 


