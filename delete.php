<?php 
include("connection.php");
$email=$_GET['email'];
$query = "DELETE FROM form where email='$email'";
$result = mysqli_query($conn, $query);
if ($result) {
echo"<script>alert('DATA DELETED SUCCESSFULLY');</script>";
?>
<meta http-equiv = "refresh" content = "0; url =http://localhost/crud/fetchdata.php" />
            <?php
}
else {
    echo"<script>alert('AN ERROR OCCURED');</script>";

}
 ?>