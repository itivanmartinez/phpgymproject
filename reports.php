<!DOCTYPE html>
<html>
<?php
include("header.php");

?>
</head>
<body>
<?php
include ("menu.php");
include ("bodyheader.php");
?>
<br><br>
<div class="container">
    <div class="row">
    <div class="col-2"></div>
    <div class="col text-primary">
        <h1>Management Report Center</h1>
    </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row bg-white">
        <div class="col-2"></div>
        <div class="col bg-primary text-white">
            <legend>Members Reports</legend>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col bg-primary">
            <a class="btn bg-white text-primary col-3" href="rptallmembers.php">All Members</a>
            <a class="btn bg-white text-primary col-3" href="rptnewmembers.php">New Members</a>
            <a class="btn bg-white text-primary col-3" href="rptallmemberscancellations.php">Memberships Cancelations</a>
            <br><br>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row bg-white">
        <div class="col-2"></div>
        <div class="col bg-primary text-white">
            <legend>Class Reports</legend>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col bg-primary">
            <a class="btn bg-white text-primary col-3" href="rptclassregistration.php">All Classes</a>
            <br><br>
        </div>
    </div>
</div>



<?php
include ("footer.php");
?>

