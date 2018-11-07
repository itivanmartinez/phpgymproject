<?php
include("header.php");
include("connection.php");

?>
<?php
include("bodyheader.php");
$ClassID=$_POST['ClassId'];
$ClassName=$_POST['ClassName'];
$ClassDescription=$_POST['ClassDescription'];
$ClassLocation=$_POST['ClassLocation'];
$ClassDay=$_POST['ClassDay'];
$ClassTime=$_POST['ClassTime'];
$Classinstructor=$_POST['Classinstructor'];
$ClassMaxSignUps=0;
if ($ClassLocation==1){
    $ClassMaxSignUps=15;
}
if ($ClassLocation==2){
    $ClassMaxSignUps=20;
}
if ($ClassLocation==3){
    $ClassMaxSignUps=15;
}
$sqlLookClass="SELECT c.location, c.id ,cd.id,cd.days,cd.time FROM tblclassesdays  cd LEFT JOIN tblclasses c  on c.id=cd.id
                WHERE c.location='$ClassLocation' AND cd.days='$ClassDay' AND cd.time='$ClassTime'";
$resultLook=mysqli_query($connection,$sqlLookClass);
if (!$resultLook){
    echo "error $sql <br> ".mysqli_error($connection);
}
if (mysqli_num_rows($resultLook)>0){
    echo "There is a classes on that location and time";
    echo "<p>Please try another time</p>";
    mysqli_close($connection);
    exit();
    
}
$sql= "UPDATE tblclasses SET Name='$ClassName',Description='$ClassDescription', Location='$ClassLocation', Instructor='$Classinstructor', MaxSignUps='$ClassMaxSignUps' WHERE id=$ClassID";
if (mysqli_query($connection,$sql)){
    $lastid = mysqli_insert_id($connection);
    $sql2="UPDATE tblclassesdays SET days='$ClassDay',time='$ClassTime' WHERE id=$ClassID";
    if (mysqli_query($connection,$sql2)){
        echo "Record Updated successfully";
        echo "<a class='btn btn-primary' href='showallclassesform.php'>Go Back</a>";
    }else{
        echo "There was an error inserting time to classes";
    }
    
}else{
    echo "error $sql <br> ".mysqli_error($connection);
}
mysqli_close($connection);
?>