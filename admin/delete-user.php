<?php

include "config.php";
$userid = $_GET['id'];

$sql = sprintf( "DELETE FROM user WHERE user_id = `%d`",$userid);

if (mysqli_query($conn,$sql)){
    // header("Location: {$hostname}/admin/users.php");
}
else{
    echo "<p>Can't delete </p>";
}
mysqli_close($conn);
?>