<!DOCTYPE html>
    <html>
        <?php
        include ("header.php");
        include("connection.php");
        ?>
        <script>
            
        </script>
        </head>
        <body>
            <?php
            include ("menu.php");
            include ("bodyheader.php");
            $id=intval($_GET['id']);
            $sqlquery="SELECT m.id, m.FirstName, m.LastName, c.BillingName, c.CCNumber, c.BillingAddress, c.BillingZipCode,  c.BillingState, c.BillingCity
            FROM tblcredcardinfo c LEFT JOIN tblmember m ON c.customerId=m.id
            WHERE c.customerId=$id";
            $result=mysqli_query($connection,$sqlquery);
            $row=mysqli_fetch_array($result);
            $numRows=mysqli_num_rows($result);
            echo $numRows;
            if ($numRows==0){
                header("Location: addcreditcard.php?id=$id");
            }
            if (!$row){
                echo (mysqli_error($connection));
                exit;
            }
            $id=$row['id'];
            $FirstName=$row['FirstName'];
            $LastName=$row['LastName'];
            $BillingName=$row['BillingName'];
            $CCNumber=$row['CCNumber'];
            $BillingAddress=$row['BillingAddress'];
            $BillingZipCode=$row['BillingZipCode'];
            $BillingState=$row['BillingState'];
            $BillingCity=$row['BillingCity'];
            
            ?>
            <br/><br/>
            <div class="container">
                <form action="processcreditcardupdate.php" method="post" name=frmCreditCard">
                    <div class="form-row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <legend>Credit Card Information</legend>
                            <hr>
                        </div>
                    </div>
                    <div class="form-row mb-4" >
                        <div class="col-2"></div>
                        <div class="col-2">
                            <label>Id</label>
                            <input type="text" class="form-control" placeholder="Id" name="IDMember" value="<?php echo $id;?>" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col-2"></div>
                        <div class="col-4">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" name="FName" value="<?php echo $FirstName;?>" readonly="readonly">
                        </div>
                        <div class="col-4">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name" name="LName" value="<?php echo $LastName ?>" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col-2"></div>
                        <div class="col-4">
                            <label>Card Number</label>
                            <input type="text" class="form-control" placeholder="Credit Card Number" name="CCNumber" value="<?php echo $CCNumber;?>">
                        </div>
                        <div class="col-2">
                            <label>Expiration Date</label>
                            <input type="text" class="form-control" placeholder="Expiration Date" name="EDate">
                        </div>
                        <div class="col-2">
                            <label>CVV</label>
                            <input type="text" class="form-control" placeholder="CVV" name="CVV">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col-2"></div>
                        <div class="col-3">
                            <label>Name on Credit Card</label>
                            <input type="text" class="form-control" placeholder="Name on Credit Card" name="NameCC" value="<?php echo $BillingName;?>">
                        </div>
                        <div class="col-5">
                            <label>Billing Address</label>
                            <input type="text" class="form-control" placeholder="Billing Address" name="BAddress" value="<?php echo $BillingAddress;?>">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col-2"></div>
                        <div class="col-2">
                            <label>State</label>
                            <input type="text" class="form-control" placeholder="State" name="State" value="<?php echo $BillingState;?>">
                        </div>
                        <div class="col-2">
                            <label>City</label>
                            <input type="text" class="form-control" placeholder= "City" name="City" value="<?php echo $BillingCity;?>">
                        </div>
                        <div class="col-2">
                            <label>Zip Code</label>
                            <input type="text" class="form-control" placeholder="Zip Code" name="ZCode" value="<?php echo $BillingZipCode;?>">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col-3">
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-primary col mr-2" name="btnCCUpdate">Save</button>
                        </div>
                        <div class="col-3">
                            <button type="Reset" class="btn btn-primary col mr-2" name= "btnCCReset">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </body>
    </html>