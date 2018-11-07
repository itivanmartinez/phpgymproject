<!DOCTYPE html>
<html>
<?php
include("header.php");
?>
<script>
        if (window.XMLHttpRequest){
        //code for ie7, firefox,chrome,opera,safari
        xmlhttp= new XMLHttpRequest();
        }
        else{
        //code for ie6,ie5
         xmlhttp=new AciveXObject("Microsoft.XMLHTTP");
        }
    function validateform(){
        var myform=document.forms.frmcreditcard;
        var CCNumber = myform.elements.CCNumber;
        var CVV = myform.elements.CVV;
        var EDate = myform.elements.EDate;
        var NameCC= myform.elements.NameCC;
        var BAddress = myform.elements.BAddress;
        var State = myform.elements.State;
        var City = myform.elements.City;
        var ZCode = myform.elements.ZCode;
        var MID=myform.elements.MID;
        var LastName=myform.elements.LastName;
        if (MID.value==""){
            alert("Please Choose a Member");
            LastName.focus();
            return false;
        }
        if (CCNumber.value==""){
            alert("Please enter Credit Card Number");
            CCNumber.focus();
            return false;
        }
        if (CVV.vaNameCClue==""){
            alert("Please enter CVV");
            CVV.focus();
            return false;
        }
        if (EDate.value==""){
            alert("Please enter Expiration Date");
            EDate.focus();
            return false;
        }
        if (NameCC.value==""){
            alert("Please enter Name on Credit Card");
            NameCC.focus();
            return false;
        }
        if (BAddress.value==""){
            alert("Please enter Billing Address");
            BAddress.focus();
            return false;
        }
        if (State.value==""){
            alert("Please enter State");
            State.focus();
            return false;
        }
        if (City.value==""){
            alert("Please enter State");
            City.focus();
            return false;
        }
        if (ZCode.value==""){
            alert("Please enter Zip Code");
            ZCode.focus();
            return false;
        }
    return true;
    }
    
    function showInfo(str){
        if (str==""){
            document.getElementById("fullName").innerHTML = "Enter Last Name";
            return;
        } else {

            xmlhttp.onreadystatechange = function(){
                if (this.readyState==4 && this.status==200){
                    document.getElementById("fullName").innerHTML=this.responseText;
                }
            };
            
            xmlhttp.open("GET","tblmembershowinfodropdown.php?rquest="+str,true);
            xmlhttp.send();
        }
    }

</script>
</head>
<body>
<?php
include ("menu.php");
include ("bodyheader.php");
?>
<br/><br/>
<div class="container">
    <form action="processcreditcard.php" method="post" name="frmcreditcard" onsubmit="return validateform();">
        <div class="form-row mb-4">
            <div class="col-2"></div>
            <div class="col-8">
                <legend>Add a Credit Card</legend>
                <hr/>
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-2"></div>
            <div class="col-1">
                <input type="text" class="form-control" id="LastName"  value="<?php
                if (isset($_GET['id'])){echo $_GET['id'];}?>" oninput="return showInfo(this.value);" onfocus="return showInfo(this.value);" autofocus readonly >
            </div>
            <div class="col-5" id="fullName">

            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-2"></div>
            <div class="col-4">
                <legend>Card Number</legend>
                <input type="text" class="form-control" placeholder="Credit Card Number" name="CCNumber">
            </div>
            <div class="col-2">
                <legend>Expiration Date</legend>
                <input type="date" class="form-control" placeholder="Expiration Date" name="EDate">
            </div>
            <div class="col-2">
                <legend>CVV</legend>
                <input type="text" class="form-control" placeholder="CVV" name="CVV">
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-2"></div>
            <div class="col-3">
                <legend>Name on Credit Card</legend>
                <input type="text" class="form-control" placeholder="Name" name="NameCC">
            </div>
            <div class="col-5">
                <legend>Billing Address</legend>
                <input type="text" class="form-control" placeholder="Billing Address" name="BAddress">
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-2"></div>
            <div class="col-2">
                <legend>State</legend>
                <input type="text" class="form-control" placeholder="State" name="State">
            </div>
            <div class="col-4">
                <legend>City</legend>
                <input type="text" class="form-control" placeholder="City" name="City">
            </div>
            <div class="col-2">
                <legend>Zip Code</legend>
                <input type="text" class="form-control" placeholder="Zip Code" name="ZCode">
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-3"></div>
            <div class="col-3">
                <button type="submit" class="btn btn-primary form-control" name="btnCCSubmit">Add</button>
            </div>
            <div class="col-3">
                <button type="reset" class="btn btn-primary form-control" name="btnCCReset">Reset</button>
            </div>

        </div>
    </form>
    <div class="">
        <a href=""
        
    </div>
    
</div>

<?php
include ("footer.php");
?>