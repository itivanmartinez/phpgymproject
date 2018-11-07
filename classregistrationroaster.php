<!DOCTYPE html>
<html>
<?php
include("header.php");
include("connection.php")
?>
</head>
<body>
<?php
include ("menu.php");
include ("bodyheader.php");
$DayArray=array("all"=>"Show All","mon"=>"Monday","tue"=>"Tuesday","wed"=>"Wedenesday","thu"=>"Thursday","fri"=>"Friday","sat"=>"Saturday", "sun"=>"Sunday");
$TimeArray=array("8a"=>"8:00 A.M","9a"=>"9:00 A.M","10a"=>"10:00 A.M","11a"=>"11:00 A.M","12p"=>"12:00 P.M","1p"=>"1:00 P.M","2p"=>"2:00 P.M","3p"=>"3:00 P.M","4p"=>"4:00 P.M","5p"=>"5:00 P.M","6p"=>"6:00 P.M","7p"=>"7:00 P.M","8p"=>"8:00 P.M");
$ClassId=$_GET['classid'];
if ($ClassId==1){
    $classlimit=15;
}
if ($ClassId==2){
    $classlimit=20;
}
if ($ClassId==3){
    $classlimit=15;
}
$sqlclassinfo="SELECT * FROM tblclasses cl JOIN tblclassesdays cd ON cd.id=cl.id WHERE cd.id=$ClassId";
$resultclassinfo=mysqli_query($connection,$sqlclassinfo);
$rowclass=mysqli_fetch_array($resultclassinfo);
#Class info
$classid=$rowclass['id'];
$classname=$rowclass['Name'];
$classdescription=$rowclass['Description'];
$classlocation=$rowclass['Location'];
$classinstructor=$rowclass['Instructor'];
$classday=$DayArray[$rowclass['days']];
$classtime=$TimeArray[$rowclass['time']];
   if ($classlocation==1){
      $classlocation="Yoga Room";
   }
   if ($classlocation==2){
      $classlocation='Pool';
   }
   if ($classlocation==3){
      $classlocation="Studio";
   }
?>
<div class="container">
    <div class="row">
        <legend class='h2'>Class Information</legend>
 
    <div class="col">
           <hr>
    </div>
    </div>

<div class="row">
    <div class="col-4">
        <label class="h5">ID Class: </label><span><?php echo " ".$classid; ?></span>
    </div>
    <div class="col-8">
        <label class="h5">Name: </label><span><?php echo " ".$classname; ?></span>
    </div>
    <div class="col-5">
        <label class="h5">Description: </label><span><?php echo " ".$classdescription; ?></span>
    </div>
</div>
<div class="row">
    <div class="col-4">
      <label class="h5">Instructor: </label><span><?php echo " ".$classinstructor; ?></span>    
    </div>
    <div class="col">
        <label class="h5">Location: </label><span><?php echo " ".$classlocation; ?></span>
    </div>
</div>
<div class="row">
    <div class="col-4">
      <label class="h5">Day: </label><span><?php echo " ".$classday; ?></span>    
    </div>
    <div class="col">
        <label class="h5">Time: </label><span><?php echo " ".$classtime; ?></span>
    </div>
</div>
<hr>
    <div class="float-right col-2">
    <p><button type="button" class="btn btn-primary col d-print-none" onclick="window.print();">Print</button></p>
    <p><a type="button" class="btn btn-primary col d-print-none" href="classregistration.php?classid=<?php echo $ClassId ?>">Go Back</a></p>
    </div>
</div>


<br>
<div class="container">
    <div class= "col-8">
    <table class="table table-striped">
    <thead>
        <tr>
            <th>Member ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php
    $sqlsearch="SELECT * FROM tblclassregistration WHERE classId=$ClassId ORDER BY memberId";
    $resultsearch=mysqli_query($connection,$sqlsearch);
    while ($rowclassroaster=mysqli_fetch_array($resultsearch)){
        $memberID=$rowclassroaster['memberId'];
        $sqlmemberinfo="SELECT * FROM tblmember WHERE id = $memberID";
        $resultmember=mysqli_query($connection,$sqlmemberinfo);
        $rowmember=mysqli_fetch_array($resultmember);
        $MemberID=$rowmember['id'];
        $MemberLasName=$rowmember['LastName'];
        $MemberFirstName=$rowmember['FirstName'];
         echo "<tr>";
         echo "<td>$MemberID</td>";
         echo "<td>$MemberLasName</td>";
         echo "<td>$MemberFirstName</td>";
         echo "<td><a class=\"btn btn-danger d-print-none\" href=\"dropclass.php?memberid=$MemberID&classid=$classid\">Drop</td>";
         echo "</tr>";

    }
    ?>
        </tbody>
        
    </table>


<?php
mysqli_close($connection);
include ("footer.php");
?>