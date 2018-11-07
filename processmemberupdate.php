<?php
include("header.php");
include ("bodyheader.php");
include("connection.php");
$ID=$_POST['IDMember'];
$CellPhone=$_POST['CPhone'];
$AddressLine1=$_POST['AL1'];
$AddressLine2=$_POST['AL2'];
$Email=$_POST['Email'];
$City=$_POST['City'];
$State=$_POST['State'];
$ZipCode=$_POST['ZCode'];
$Password=$_POST['UPass'];
$SelMembership=$_POST['SelMembership'];
$sql="UPDATE tblmember SET Password='".$Password."', CellPhone='".$CellPhone."', AddressLine1='".$AddressLine1."', AddressLine2='".$AddressLine1."', Email='".$Email."', City='".$City."', State='".$State."', ZipCode='".$ZipCode."' WHERE id='".$ID."'";
$sql2="UPDATE tblmembershipreg SET MembershipId='".$SelMembership."' WHERE CustomerId=$ID";
if (mysqli_query($connection,$sql)){
    if (mysqli_query($connection,$sql2)){
        echo "<div class='container'>";
        echo "<p>Record edited succesfully</p>";
        echo "<a class='btn btn-primary' href='membermanagement.php'>Go Back</a>";
        echo "</div>";
    
    }else{
        echo "<p>There was an error updating membership</p>";
    }

}else{
    echo"Error: " .$sql."<br>".mysqli_error($connection);
}
mysqli_close($connection);
?>