<?php 
$username1=$_POST["Username"];
$Password=$_POST["Password"];
echo $username1 ."<br>";
$tcon=mysqli_connect('localhost','root','root','shoppymaster');
if(mysqli_connect_errno()){
    die('coud not connect'.mysqli_connect_errno());
}
$sql="select * from user_details where username='$username1' and password='$Password'";
$res = mysqli_query($tcon,$sql);
session_start();
//$_SESSION["username"]="$username1";
while($row=mysqli_fetch_row($res))
{
    $username=$row[0];
    $_SESSION["username"]="$username";
    $password=$row[1];
    $_SESSION["password"]="$password";
    $fname=$row[2];
    $_SESSION["fname"]="$fname";
    $lname=$row[3];
    $_SESSION["lname"]="$lname";
    $mn=$row[4];
    $_SESSION["mn"]="$mn";
    $email=$row[5];
    $_SESSION["email"]="$email";
    $address=$row[6];
    $_SESSION["address"]="$address";
}
if($res->num_rows == 1){
    header("Location: User_page.php");
    exit();
    //echo "<a href='https://www.google.com'>hello</a>";
}
else {
    echo "Incorrect username or password";
    exit;
}
mysqli_free_result($res);
?>