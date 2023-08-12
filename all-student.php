<h1 class="text-primary"><i class="fa fa-users"></i> All Students</h1>
<ol class="breadcrumb">
    <li><a href="index.php?page=dashboard">Dashboard / </a></li>
<li class="breadcrumb-item active" aria-current="page"><i class="fa fa-tachometer-alt"></i> All Student</li>
</ol>





<div class="table-responsive">
           <table id="data" class="table table-hover table-bordered table-striped "style="width:100%">
             <thead>
               <tr>
                 <td>Id</td>
                 <td>Name</td>
                 <td>Roll</td>
                 <td>Class</td>
                 <td>City</td>
                 <td>Contact</td>
                 <td>Photo</td>
                 <td>Action</td>
               </tr>
             </thead>
             <tbody>

             <?php
              $db_info=mysqli_query($link,"SELECT * FROM `student information`");
              while($row=mysqli_fetch_assoc($db_info)){?>



               <tr>
                 <td><?php echo $row['id'];?></td>
                 <td><?php echo $row['name'];?></td>
                 <td><?php echo $row['roll'];?></td>
                 <td><?php echo $row['class'];?></td>
                 <td><?php echo $row['city'];?></td>
                 <td><?php echo $row['p-contact'];?></td>
                 <td><img src="student_images/<?php echo $row['photo']; ?>" alt=""></td>
                 <td>
                     <a href="index.php?page=update_student&id=<?php echo base64_encode($row['id']);?>" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i> Edit</a>
                     &nbsp&nbsp&nbsp&nbsp
                     <a href="delete.php?id=<?php echo base64_encode($row['id']);?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                 </td>
               </tr>
               <?php
              }
              ?>
             </tbody>
           </table>
           </div>