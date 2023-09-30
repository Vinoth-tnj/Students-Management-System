<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsaid']==0)) {
  header('location:logout.php');
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
<?php
if(isset($_REQUEST['ar'])){
	$stid = $_REQUEST['ar'];
	$name = $_REQUEST['vn'];
	$semester = $_REQUEST['seme'];
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
/*edit button*/
.editbtn {
    background-color: #38ce3c;
    border: none;
	border-radius:5px;
    color: white;
    padding: 5px 18px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 2px 1px;
    cursor: pointer;
}
element.style {
    width: 40%;
    margin: 50px auto;
}
</style>
<?php 
$pageTitle = "update Student Result";
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
     <?php include_once('includes/header.php');?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <?php include_once('includes/sidebar.php');?>
        <!-- partial -->
        <div class="main-panel">
        <div class="all_student fix">
		<div>
		<p style="text-align:center;color:#fff;background:#181824;margin:0;padding:8px;"><?php echo "Name: ".$name."<br>ID: ".$stid."<br>Semester: " . $semester; ?></p>
		</div>
			<?php
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$subject = $_POST['umark'];
				$res = update_result($stid,$subject,$semester);
				//var_dump($res);
				if($res){
					echo "<h3 style='color:green;margin:0;padding:0;text-align:center'>Marks successfully updated!</h3>";
				}else{
					echo  "<p style='color:red;text-align:center'>Failed to update data</p>";
				}
			}
		
	
		?>

		
		<form action="" method="post">
		<table class="tab_one" style="text-align:center;">
			<tr>
				<th style="text-align:center;">Subject</th>
				<th style="text-align:center;">Marks</th>
				
			</tr>
			<?php 
			$i=0;
			
				$get_result = show_marks($stid,$semester);
				
				while($rows = $get_result->fetch_assoc()){
				$i++;
		?>
			<tr>
				<td><?php echo $rows['sub'];?></td>
				<td><input type="text" name="umark[<?php echo $rows['sub'];?>]" value="<?php echo $rows['marks'];?>"/></td>
				
			</tr>
			<?php } ?>
			<tr><td colspan="2"><input type="submit" value="Update Result" /></td></tr>
		</table>
	</form>
		<div class="back fix">
				<p style="text-align:center"><a href="view-results.php?vr=<?php echo $stid?>&vn=<?php echo $name?>"><button class="editbtn">go to result page</button></a></p>
			</div>
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