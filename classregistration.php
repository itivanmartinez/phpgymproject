<?php
include("header.php");
include("connection.php");

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

    function showMemberId(str1){

        xmlhttp.onreadystatechange = function(){
            if (this.readyState==4 && this.status==200){
                document.getElementById("showmemberinfo").innerHTML=this.responseText;
            }else{
                document.getElementById("showmemberinfo").innerHTML=this.responseText;
            }
        };
        
        xmlhttp.open("GET","tblmembershowinfodropdown.php?rquest="+str1+"&page=class",true);
        xmlhttp.send();
    }
    function showInfo(str){
        
        xmlhttp.onreadystatechange = function(){
            if (this.readyState==4 && this.status==200){
                document.getElementById("showclassregistration").innerHTML=this.responseText;
            }
        };
        
        xmlhttp.open("GET","tblshowclassregistration.php?request="+str,true);
        xmlhttp.send();
    }
       function confirmreg(){
      var con=confirm("Do you want to register member for this class?");
      if (con==true){
         
      }else{
         return false;
      }
   }
</script>
</header>
<body>

<?php
include("menu.php");
include("bodyheader.php");
?>
<div class="container">
    <div class="row">
        <div class="col-4">
            <select name="classday" class="form-control" onclick="showInfo(this.value);">
            <?php
            $DayArray=array("all"=>"Show All","mon"=>"Monday","tue"=>"Tuesday","wed"=>"Wedenesday","thu"=>"Thursday","fri"=>"Friday","sat"=>"Saturday", "sun"=>"Sunday");
            foreach ($DayArray as $keyday=>$valueday){
                echo "<option value=$keyday>$valueday</option>";
            }
            ?>
            </select>
        </div>
    </div>
    <br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Location</th>
            <th>Instructor</th>
            <th>Seats Available</th>
            <th>Day</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody id="showclassregistration">

    </tbody>
    
</table>
</div>





<?php
include("footer.php");
mysqli_close($connection);
?>