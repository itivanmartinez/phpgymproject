<?php
if (isset($_SESSION['PrivilegeID'])){
	$privilege=$_SESSION['PrivilegeID'];
}
else{
	echo" You have to log in";
	exit();
}
?>
<div id="cbody" class="container">
	<div class="space"></div><div class="space"></div>
	<div id="forms" class="jumbotron bg-primary p-2 <?php //if ($privilege==1) { echo "d-none";} ?>">
		<span class="h3 text-white">Member Management</span>
		<div class="d-flex ">
		<a  href="membermanagement.php" class="col-sm-3 col-xl-2 col-lg-2 <?php if ($privilege==1) { echo "d-none";} ?>" >
			<div class="card mr-1">
			<img class="card-img-top" src="pictures/addmember.png">
			<span class="card-title h5">Member Management</span>
			</div>
		</a>
		<a  href="editmember.php" class="col-sm-3 col-xl-2 col-lg-2 <?php if ($privilege==1) { echo "d-none";} ?>">
			<div class="card mr-1">
			<img class="card-img-top" src="pictures/editmember.png">
			<span  class="card-title  h5">Edit Member</span >
			</div>
		</a>
		<a  href="editcreditcard.php" class="col-sm-3 col-xl-2 col-lg-2 <?php if ($privilege==1) { echo "d-none";} ?>">
			<div class="card mr-1">
			<img class="card-img-top" src="pictures/editcc.png">
			<span  class="card-title  h5">Edit Credit Card</span >
			</div>
		</a>
		</div>
	</div>
	<div id="classReg" class="jumbotron bg-primary p-2">
		<span class="h3 text-white">Class Registration</span>
		<div class="d-flex">
			<a  href="classregistration.php" class="col-sm-3 col-xl-2 col-lg-2">
				<div class="card mr-1">
				<img class="card-img-top" src="pictures/bookclass.png">
				<span class="card-title h5">Class Registration</span>
				</div>
			</a>
		</div>
	</div>
	<div id="reports" class="jumbotron bg-primary p-2 <?php if ($privilege==1) { echo "d-none";}  if ($privilege==2){echo "d-none";}?>">
		<span class="h3 text-white">Management Corner</span>
		<div class="d-flex">
			<a  href="showallclassesform.php" class="col-sm-3 col-xl-2 col-lg-2 <?php if ($privilege==1) { echo "d-none";}  if ($privilege==2){echo "d-none";}?>">
				<div class="card mr-1">
				<img class="card-img-top" src="pictures/addclass.png">
				<span class="card-title h5">Add Classes</span>
				</div>
			</a>
			<a  href="showallmembershipsform.php" class="col-sm-3 col-xl-2 col-lg-2 <?php if ($privilege==1) { echo "d-none";}  if ($privilege==2){echo "d-none";}?>">
				<div class="card mr-1">
				<img class="card-img-top" src="pictures/addmembership.png">
				<span class="card-title h5">Add Memberships</span>
				</div>
			</a>
			<a  href="reports.php" class="col-sm-3 col-xl-2 col-lg-2 <?php if ($privilege==1) { echo "d-none";}  if ($privilege==2){echo "d-none";}?>">
				<div class="card mr-1">
				<img class="card-img-top" src="pictures/reports.png">
				<span class="card-title h5">Reports</span>
				</div>
			</a>
		</div>
	</div>
	<div class="space"></div>
	
</div>
