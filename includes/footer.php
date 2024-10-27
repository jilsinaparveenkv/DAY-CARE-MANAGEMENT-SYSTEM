<?php
include('includes/config.php');
session_start();
error_reporting(0);

if(isset($_POST['sub']))
  {
   
    $email=$_POST['email'];
 
     
    $query=mysqli_query($con, "insert into tblsubscriber(Email) value('$email')");
    if ($query) {
   echo "<script>alert('Your subscribe successfully!.');</script>";
echo "<script>window.location.href ='index.php'</script>";
  }
  else
    {
       echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
  ?>  
 <footer class="py-3">
    <!-- subscribe -->
     
      </section>
         <div class="copy-bottom-txt text-center py-3">
            <p> 
               © <?php echo date('Y');?> Day Care Management System.
            </p>
         </div>


       
      </footer>