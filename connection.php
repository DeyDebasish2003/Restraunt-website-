<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "responsiveforms";
$conn =  mysqli_connect($servername, $username, $password, $dbname);
if($conn) {
   // echo "success";
}
else{
    echo"error".mysqli_connect_error(); //jo hamara mysqli_connect_error() hai it is used to detect the error at whichline so its a good practice that u should always use this 

}
?>