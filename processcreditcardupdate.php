<?php
include ("header.php");
include ("bodyheader.php");
include("connection.php");
$ID=$_POST['IDMember'];
$CCNumber=$_POST['CCNumber'];
$EDate=$_POST['EDate'];
$CVV=$_POST['CVV'];
$NameCC=$_POST['NameCC'];
$BAddress=$_POST['BAddress'];
$State=$_POST['State'];
$City=$_POST['City'];
$ZipCode=$_POST['ZCode'];
$sql="UPDATE tblcredcardinfo SET CustomerId='$ID', CCNumber='$CCNumber', BillingName='$NameCC', BillingZipCode='$ZipCode', BillingState='$State', BillingCity='$City'
WHERE CustomerId='$ID'";
if (mysqli_query($connection,$sql)){
        echo "<div class='container'>";
        echo "<p>Record edited succesfully</p>";
        echo "<a class='btn btn-primary' href='membermanagement.php'>Go Back</a>";
        echo "</div>";
}else{
    echo"Error: " .$sql."<br>".mysqli_error($connection);
}
mysqli_close($connection);
?>