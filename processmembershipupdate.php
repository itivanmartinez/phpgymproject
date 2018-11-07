<?php
include("header.php");
include ("bodyheader.php");
include("connection.php");
$id=$_POST['id'];
$Name=$_POST['name'];
$Price=$_POST['price'];
$Description=$_POST['description'];
$sql="UPDATE tblmemberships SET  Name='".$Name."',Price='".$Price."',Description='".$Description."' WHERE id='".$id."'";
if (mysqli_query($connection,$sql)){
        echo "<div class='container'>";
        echo "<p>Record edited succesfully</p>";
        echo "<a class='btn btn-primary' href='showallmembershipsform.php'>Go Back</a>";
        echo "</div>";
    
    }else{
        echo "<p>There was an error updating membership</p>";
    }

mysqli_close($connection);
?>