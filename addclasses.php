<!DOCTYPE html>
    <?php
    include("header.php");
    ?>
    <script>
        
    </script>
</head>
<body>
    <?php
    include("menu.php");
    include("bodyheader.php");
    ?>
    <br><br>
    <div class="container">
        <form action="processclasses.php" method="post" name="frmclasses">
            <div class="form-row">
                <div class="col-2"></div>
                <div class="col-4">
                    <legend>Add A Class</legend>
                    <hr>
                </div>
            </div>
            <div class="form-row mb-4">
                <div class="col-2"></div>
                <div class="col-4">
                    <label>Name</label>
                    <input type="text" placeholder="Enter Class Name" name="ClassName" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="col-2"></div>
                <div class="col-4">
                    <label>Description</label>
                    <textarea rows=4 placeholder="Enter a description for the class" name="ClassDescription" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="col-2"></div>
                <div class="col-4">
                    <label>Class Location</label>
                    <select name="ClassLocation" class="form-control">
                        <option selected>Choose Class Location</option>
                        <option value="1">Yoga Room (Max 15)</option>
                        <option value="2">Pool      (Max 20)</option>
                        <option value="3">Studio    (Max 15)</option>
                    </select>
                </div>
         
            </div>
            <div class="form-row">
                <div class="col-2"></div>
                <div class="col-4">
                    <label>Day</label>
                    <select name="ClassDay" class="form-control">
                        <option selected>Choose a Day</option>
                        <option value="mon">Monday</option>
                        <option value="tue">Tuesday</option>
                        <option value="wed">Wednesday</option>
                        <option value="thu">Thursday</option>
                        <option value="fri">Friday</option>
                        <option value="sat">Saturday</option>
                        <option value="sun">Sunday</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-2"></div>
                <div class="col-4">
                    <label>Instructor Name</label>
                    <input type="text" name="Classinstructor" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="col-2"></div>
                <div class="col-4">
                    <label>Time</label>
                    <select class="form-control" name="ClassTime">
                        <option selected>Choose Time</option>
                        <option value="8a">8:00 am</option>
                        <option value="9a">9:00 am</option>
                        <option value="10a">10:00 am</option>
                        <option value="11a">11:00 am</option>
                        <option value="12p">12:00 pm</option>
                        <option value="1p">1:00 pm</option>
                        <option value="2p">2:00 pm</option>
                        <option value="3p">3:00 pm</option>
                        <option value="4p">4:00 pm</option>
                        <option value="5p">5:00 pm</option>
                        <option value="6p">6:00 pm</option>
                        <option value="7p">7:00 pm</option>
                        <option value="8p">8:00 pm</option>
                        
                    </select>
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col-2"></div>
                <div class="col-2">
                    <button class="btn btn-primary form-control mr-1" type="submit">Add Class</button>
                </div>
                <div class="col-2">
                    <button class="btn btn-primary form-control ml-1" type="reset">Reset</button>
                </div>
            </div>
        </form>
        <br><br>
     </div>
    
            
        
    
<?php
include("footer.php");
?>