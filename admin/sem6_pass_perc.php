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
<?php
if(isset($_REQUEST['ar'])){
    $stid = $_REQUEST['ar'];
    $name = $_REQUEST['vn'];
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
	background:#1abc9c;
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
    background-color: #01C3AA;
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
$pageTitle = "Student Result";
require_once "functions.php";
?>
  <head>
   
    <title>Student  Results Graph</title>
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
        <!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="js-graph/jquery.min.js"></script>
<script type="text/javascript" src="js-graph/Chart.min.js"></script>


</head>
<body>

<?php
$conn = mysqli_connect("localhost","root","","studentmsdb");

$sqlQuery = "SELECT * FROM result WHERE semester=6";

$result = mysqli_query($conn,$sqlQuery);

$count1_total=0;
$count1_pass=0;
$count2_total=0;
$count2_pass=0;
$count3_total=0;
$count3_pass=0;
$count4_total=0;
$count4_pass=0;
$count5_total=0;
$count5_pass=0;
$count6_total=0;
$count6_pass=0;
$count7_total=0;
$count7_pass=0;

foreach ($result as $row) {
	if($row['sub'] == "Ecommerce")
    {
        $count1_total++;
    }
    if($row['sub'] == "Ecommerce" && $row['marks']>=50)
    {
        $count1_pass++;
    }
    if($row['sub'] == "Computer Graphics & Multimedia")
    {
        $count2_total++;
    }
    if($row['sub'] == "Computer Graphics & Multimedia" && $row['marks']>=50)
    {
        $count2_pass++;
    }
    if($row['sub'] == "C# & .Net Technologies")
    {
        $count3_total++;
    }
    if($row['sub'] == "C# & .Net Technologies" && $row['marks']>=50)
    {
        $count3_pass++;
    }
    if($row['sub'] == "Elective -II")
    {
        $count4_total++;
    }
    if($row['sub'] == "Elective -II" && $row['marks']>=50)
    {
        $count4_pass++;
    }
    if($row['sub'] == "Computer Graphics & Multimedia Lab")
    {
        $count5_total++;
    }
    if($row['sub'] == "Computer Graphics & Multimedia Lab" && $row['marks']>=50)
    {
        $count5_pass++;
    }
    
    if($row['sub'] == "C# & .Net Technologies Lab")
    {
        $count6_total++;
    }
    if($row['sub'] == "C# & .Net Technologies Lab" && $row['marks']>=50)
    {
        $count6_pass++;
    }
    if($row['sub'] == "Mini Project")
    {
        $count7_total++;
    }
    if($row['sub'] == "Mini Project" && $row['marks']>=50)
    {
        $count7_pass++;
    }
}
$datas = array();
$sub = array("Ecommerce","Computer Graphics & Multimedia","C# & .Net Technologies","Elective -II","Computer Graphics & Multimedia Lab","C# & .Net Technologies Lab","Mini Project");
$datas[] = $count1_pass/$count1_total*100;
$datas[] = $count2_pass/$count2_total*100;
$datas[] = $count3_pass/$count3_total*100;
$datas[] = $count4_pass/$count4_total*100;
$datas[] = $count5_pass/$count5_total*100;
$datas[] = $count6_pass/$count6_total*100;
$datas[] = $count7_pass/$count7_total*100;
?>
    <div class="main-panel">
        <div class="all_student fix">
		
		<table class="tab_one" style="text-align:center;">
			<tr>
				<th style="text-align:center;">S.No</th>
				<th style="text-align:center;">SubjectName</th>
				<th style="text-align:center;">Pass Percentage</th>
				
			</tr>
			<?php 
				
				for($i = 0; $i <= 6; $i++){
		?>
			<tr>
				<td><?php echo $i+1;?></td>
				<td><?php echo $sub[$i];?></td>
				<td><?php echo $datas[$i];?></td>
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




