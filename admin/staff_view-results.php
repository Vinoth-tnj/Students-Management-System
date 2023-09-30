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
	if(isset($_REQUEST['vr'])){
		$stid = $_REQUEST['vr'];
		$name = $_REQUEST['vn'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<style>
    /*Table desing for view info*/
/*page desing*/
hr{<height:3></height:3>px;color:#ddd;margin:0;}
table.att_tab{
	border:3px solid #ddd;
}
table.att_tab tr,td,th{
	border:2px solid #ddd;
	border-collapse:collapse;
	padding:8px;
}

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

		<?php

		//custom function check credit hour and grade point
		function credit_hour($x){
			if($x == "English Communication-1") return 3;
			elseif($x == "Matrices & Calculus") return 5;
			elseif($x == "Financial Accounting") return 5;
			elseif($x == "Basics of Computing") return 4;
			elseif($x == "Programming in C") return 4;
			elseif($x == "Programming in C Lab") return 1;
			elseif($x == "Office Automation Lab") return 1;
			elseif($x == "Ethics-1") return 1;
			elseif($x == "Personality Development -1") return 1;
			elseif($x == "English Communication-II") return 3;
			elseif($x == "Inferential Discrete Mathematics") return 5;
			elseif($x == "Management Accounting") return 5;
			elseif($x == "Digital Logic Circuit & Microprocessors") return 4;
			elseif($x == "Programming in C++") return 4;
			elseif($x == "Digital Logic Circuit & Microprocessors Lab") return 1;
			elseif($x == "Programming in C++ Lab") return 1;
			elseif($x == "Ethics-II") return 1;
			elseif($x == "Personality Development -II") return 1;
			elseif($x == "English Communication-III") return 3;
			elseif($x == "Numerical Methods for Computer Applications") return 5;
			elseif($x == "Computer Organization & Architecture") return 5;
			elseif($x == "Fundamentals of Data Structure & Algorithms") return 5;
			elseif($x == "OS Concepts") return 4;
			elseif($x == "Fundamentals of Data Structure & Algorithms Lab") return 1;
			elseif($x == "OS Concepts Lab") return 1;
			elseif($x == "Personality Development -III") return 1;
			elseif($x == "English Communication-IV") return 3;
			elseif($x == "OOAD") return 5;
			elseif($x == "Computer Networks") return 5;
			elseif($x == "Fundamentals of Relational DBMS") return 5;
			elseif($x == "Visual Programming") return 4;
			elseif($x == "Fundamentals of Relational DBMS Lab") return 2;
			elseif($x == "Visual Programming Lab") return 2;
			elseif($x == "Personality Development -IV") return 1;
			elseif($x == "Java Programming") return 4;
			elseif($x == "Basics of Software Engineering") return 5;
			elseif($x == "Web Technology") return 4;
			elseif($x == "Elective -I") return 4;
			elseif($x == "Web Technology Lab") return 2;
			elseif($x == "Java Programming Lab") return 2;
			elseif($x == "Environmental Studies") return 2;
			elseif($x == "English Communication-V") return 3;
			elseif($x == "Ecommerce") return 4;
			elseif($x == "Computer Graphics & Multimedia") return 4;
			elseif($x == "C# & .Net Technologies") return 4;
			elseif($x == "Elective -II") return 4;
			elseif($x == "Computer Graphics & Multimedia Lab") return 2;
			elseif($x == "C# & .Net Technologies Lab") return 2;
			elseif($x == "Mini Project") return 5;
		}
		function grade_point($gd){
			if($gd<50) return 2;
			elseif($gd>=50 && $gd<=54) return 5;
			elseif($gd>=55 && $gd<=65) return 6;
			elseif($gd>=66 && $gd<=74) return 7;
			elseif($gd>=75 && $gd<=85) return 8;
			elseif($gd>=86 && $gd<=90) return 9;
			elseif($gd>=91 && $gd<=100) return 10;
		}
		?>
	<!--Infomation of student-->
		<div>
	<p style="text-align:center;color:#fff;background:#181824;margin:0;padding:8px;"><?php echo "Name: ".$name."<br>Student ID: " . $stid; ?></p>
	</div>	
	<div>
	<p style="float:left;margin:0 0 5px 0;width:100%;text-align:center;"><a href="staff_view-cgpa.php?vr=<?php echo $stid; ?>&vn=<?php echo $name; ?>"><button class="editbtn">View cgpa & completed course</button></a></p>
	</div>
	
	<form action="" method="post" style="width:23%;margin:0 auto;padding-bottom:5px;">
		<select name="seme" id="">
			<option value="1st">1st semester</option>
			<option value="2nd">2nd semester</option>
			<option value="3rd">3rd semester</option>
            <option value="4th">4th semester</option>
            <option value="5th">5th semester</option>
            <option value="6th">6th semester</option>
		</select>
		<input type="submit" value="view Result" />

	</form>
	<?php
	//select semester
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$semester = $_POST['seme'];
			
			$i=0;
			$ch = 0;
			$gp = 0;
				
			
				//$get_result = $user->show_marks();
				
				$get_result = show_marks($stid,$semester);
				if($get_result){
			?>
				<p><?php echo "<p style='text-align:center;background:#ddd;color:#01C3AA;padding:5px;width:85%;margin:0 auto'>".$semester." Semester Result"?></p>
				<table class="tab_two" style="text-align:center;width:85%;margin:0 auto">
					<th>Subject</th>
					<th>Marks</th>
					<th>Grade</th>
					<th>Credit hr.</th>
					<th>Status</th>
		<?php		
				while($rows = $get_result->fetch_assoc()){
				$i++;
				//count total credit hour;	
				$ch = $ch + credit_hour($rows['sub']);

		?>
			<tr>
				<td><?php echo $rows['sub'];?></td>
				<td><?php echo $rows['marks'];?></td>
				<td>
				<?php 
				//set grade for individual subject
					$mark = $rows['marks'];
					if($mark<50){echo "F";}
					elseif($mark>=50 && $mark<=54){echo "D";}
					elseif($mark>=55 && $mark<=65){echo "C";}
					elseif($mark>=66 && $mark<=74){echo "B";}
					elseif($mark>=75 && $mark<=85){echo "A";}
					elseif($mark>=86 && $mark<=90){echo "A+";}
					elseif($mark>=91 && $mark<=100){echo "S";}
					
					//total grade point
					$gp = $gp + (credit_hour($rows['sub']) * grade_point($rows['marks']));
					
				?>
				</td>
				<td><?php echo credit_hour($rows['sub']); ?></td>
				<td>
				<?php
					$stat = $rows['marks'];
					if($stat<50){
						echo "<span style='background:red;padding:3px 11px;color:#fff;'>Fail</span>";
					}else{
						echo "<span style='background:green;padding:3px 6px;color:#fff;'>Pass</span>";
					}
				?>
				</td>
				
				
			</tr>
			<?php } ?>
			<tr>
				<td colspan="2">SGPA : </td>
				<td colspan="2">
				<?php
				$sg = $gp/$ch;
				$sgpa = round($sg,2);
				echo "<span style='color:green;padding:3px 6px;font-size:20px'>" . round($sg,2) . "</span>"; ?>
				</td>
				<td>
					<?php
						if($sg>=10){
							echo "<span style='background:purple;padding:3px 6px;color:#fff;'>Outstanding";
						}elseif($sg>=9 && $sg<10){
							echo "<span style='background:green;padding:3px 6px;color:#fff;'>Excellent";
						}elseif($sg>=8 && $sg<9){
							echo "<span style='background:green;padding:3px 6px;color:#fff;'>Very Good";
						}elseif($sg>=7 && $sg<8){
							echo "<span style='background:green;padding:3px 6px;color:#fff;'>Good";
						}elseif($sg>=6 && $sg<7){
							echo "<span style='background:green;padding:3px 6px;color:#fff;'>Satisfactory";
						}elseif($sg>=5 && $sg<6){
							echo "<span style='background:gray;padding:3px 6px;color:#fff;'>Pass";
						}else{
							echo "<span style='background:red;padding:3px 6px;color:#fff;'>Fail";
						}
					?>
				</td>
			</tr>
		</table>
		
		<?php 
			}
			else{
				echo  "<p style='color:red;text-align:center'>Nothing Found</p>";
				}
		?>
			<p style="float:left; text-align:right;margin:20px 0;width:49%"><a href="staff_result-update.php?ar=<?php echo $stid?>&seme=<?php echo $semester?>&vn=<?php echo $name?>"><button class="editbtn">Edit Result</button></a></p>
		<?php 
				}
		?>
		
			<p style="float:right;text-align:left;margin:20px 0;width:49%"><a href="staff_view-allstudents.php"><button class="editbtn">Back to list</button></a></p>

</div>
        </div>
        <!-- main-panel ends -->

<?php
    if(true){
        $res = add_sgpa($stid,$name,$sgpa,$semester);
        if($res){
            // echo "<h3 style='color:green;margin:0;padding:0;text-align:center'>Marks successfully inserted!</h3>";
        }else{
            // echo  "<p style='color:red;text-align:center'>$stid $name $cgpa Failed to insert data</p>";
        }
    }

?>
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