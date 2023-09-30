<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsaid']==0)) {
  header('location:staff_logout.php');
  } else{
   if(isset($_POST['submit']))
  {
 $cname=$_POST['cname'];
 $section=$_POST['section'];
$sql="insert into tblclass(ClassName,Section)values(:cname,:section)";
$query=$dbh->prepare($sql);
$query->bindParam(':cname',$cname,PDO::PARAM_STR);
$query->bindParam(':section',$section,PDO::PARAM_STR);
 $query->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Class has been added.")</script>';
echo "<script>window.location.href ='add-class.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
  ?>
<!DOCTYPE html>
<html lang="en">
<style>
    /*Table desing for view info*/
/*page desing*/

table.tab_one{
	width:100%;
}
table.tab_one th{
	background:#38ce3c;
	padding:10px;
	font-weight:bold;
	text-align:left;
}
table.tab_one td{
	border:1px solid #ddd;
	padding:8px;
	
}
table.tab_one td a{
	text-decoration:none;
}
table.tab_one tr:nth-child(odd){
	background:#ddd;
}
table.tab_one tr:nth-child(even){
	background:#ecf0f1;
}
</style>
<?php 
$pageTitle = "Student Result";
require_once "functions.php";
?>
  <head>
   
    <title>Student  Results</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css" />
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     <?php include_once('includes/staff_header.php');?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <?php include_once('includes/staff_sidebar.php');?>
        <!-- partial -->
        <div class="main-panel">
        <div class="all_student fix">
		
		<table class="tab_one" style="text-align:center;">
			<tr>
				<th style="text-align:center;">SL</th>
				<th style="text-align:center;">Name</th>
				<th style="text-align:center;">ID</th>
				<th style="text-align:center;">view Result</th>
				
			</tr>
			<?php 
            function getstu(){
            $aid = $_SESSION['sturecmsaid'];
            $conn = new mysqli("localhost", "root", "" , "studentmsdb");
            $sql="SELECT * from tblstaff ts,tblstudent WHERE ts.class_handle=StudentClass AND ts.id=$aid";
            $query = $conn->query($sql);
            return $query;
            }
			$i=0;
				$alluser = getstu();
				
				while($rows = $alluser->fetch_assoc()){
				$i++;
		?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $rows['StudentName'];?></td>
				<td><?php echo $rows['StuID'];?></td>
				<td><a href="staff_view-results.php?vr=<?php echo $rows['StuID']; ?>&vn=<?php echo $rows['StudentName'];?>">View Result</a></td>
			</tr>
			<?php } ?>
	
		</table>

		
</div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/select2/select2.min.js"></script>
    <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/typeahead.js"></script>
    <script src="js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html><?php }  ?>

