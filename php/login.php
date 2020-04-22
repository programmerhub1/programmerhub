<?php
include 'database.php';
$id=$_POST['id'];
$pass=$_POST['pass'];
$sql="select * from user where phno='$id' and password='$pass'";
$result=mysqli_query($db,$sql);
if(mysqli_num_rows($result)==1){
    echo "success";
}else if(mysqli_num_rows($result)==0)
    echo "wrong username or password!";
else{
    echo mysqli_error($db);
}
mysqli_close($db);
?>