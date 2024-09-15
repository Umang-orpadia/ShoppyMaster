<html>
<body>
        
    <?php
 session_start();

$username=$_SESSION["username"];
$firstname=$_POST["fname"];
$firstname=$_POST["fname"];
$lastname=$_POST["lname"];
$mobile=$_POST["mn"];
$email=$_POST["email"];
$address=$_POST["add"];

$tcon=mysqli_connect('localhost','root','root','shoppymaster');
if(mysqli_connect_errno()){
    die('coud not connect'.mysqli_connect_errno());
}
// $sql="insert into try1 (fname,lname,mn,email,address) values ('$firstname','$lastname','$mobile','$email','$address')";
// $sql="update try1 set(fname,lname,mn,email,address)values('$firstname','$lastname','$mobile','$email','$address') where username='$username'";
$sql="update user_details set fname='$firstname',lname='$lastname',mn='$mobile',email='$email',address='$address' where username='$username'";

$res=$tcon->query($sql);

if($res==false){
    die("Query fail");
}
header("Location: User_page.php");
?>
<!-- <form action="trynext.php" method="post">
    username <input type="text" name="umname">
    <input type="submit">

</form> -->

</body>
</html>
