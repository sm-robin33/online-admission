<?php
    session_start();

	if(isset($_SESSION['email']))
	{
        //function this
        $email = $_SESSION['email'];
        include 'variables.php';
        $mysqli = new mysqli($databaseHost,$databaseUsername,$databasePassword,$databaseName);
        //
        $query = "SELECT * FROM student_data WHERE email = '{$_SESSION['email']}'"; 
        $result = $mysqli->query($query) or die($mysqli->error);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                foreach($row as $val) {
                    $details[] = $val;
                }
            }   
        }

        $db_data= mysqli_query($link,"SELECT * FROM `student_data` WHERE  EMAIL = '$email'");
        $db_row = mysqli_fetch_assoc($db_data);
        $id=$db_row['ID'];

?>
<?php include 'home-menu.php'; ?>
    <?php include 'user-side-menu.php'; ?>
        <div class="container">
            <div class="col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg"> <h3 class="panel-title"><b>Basic Information</b></h3> </div>
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Fullname</label>
                                            <input type="text" name="fullname" class="form-control" value= "<?php echo $details[1]; ?> " disabled>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Image</label> <br>
                                            <img src="<?php echo '../' . $details[7];?>" height="200" width="200">
                                            </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Apply Unit :<?php
                                            
                                            $db_datas= mysqli_query($link,"SELECT `coursename` FROM `selected_courses` WHERE  ID = '$id'");
                                            while($row=mysqli_fetch_array($db_datas)){
                                                ?>
                                             <tr>
                                                         <td><?= $row['coursename'];?> </td>
                                             
                                             </tr>
                                        <?php    }
                                        ?>
                                             </h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Gender</label>
                                            <input list="gender" name="gender" class="form-control" value= "<?php echo $details[2]; ?> " disabled>
                                        </div>
                                       
                                   

                                       <!-- <div class="col-sm-3 form-group">
                                            <label>Date of Birth</label>
                                            <input type="text" name="pnumber" class="form-control" value= "<?php echo $details[12]; ?> " disabled>
                                        </div>
    -->
                                        

                                      
                             
                                    <div class="col-sm-6 form-group">
                                        <label>Phone Number</label>
                                        <input type="text" name="pnumber" class="form-control" value= "<?php echo $details[3]; ?> " disabled>
                                    </div>

                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" class="form-control" value= "<?php echo $details[4]; ?> " disabled>
                                    </div>

                                    <div class="form-group">
                                        <label>Registration Date</label>
                                        <input type="text" name="reg_date" class="form-control" value= "<?php echo $details[6]; ?> " disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
    
<?php } else { ?>
<?php  					echo "<script language='javascript'>alert('You are not logged in');
			window.location.href='/Admission/';
			 </script>";; } ?>