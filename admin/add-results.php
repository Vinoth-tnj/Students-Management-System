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
     <?php include_once('includes/header.php');?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <?php include_once('includes/sidebar.php');?>
        <!-- partial -->
        <div class="main-panel">
        <div class="all_student fix">

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $subject = $_POST['subject'];
        $semester = $_POST['semester'];
        $marks = $_POST['marks'];
        $res = add_marks($stid,$subject,$semester,$marks);
        if($res){
            echo "<h3 style='color:green;margin:0;padding:0;text-align:center'>Marks successfully inserted!</h3>";
        }else{
            echo  "<p style='color:red;text-align:center'>Failed to insert data</p>";
        }
    }

//SELECT avg(marks) as sgpa from result where st_id=10 and semester="1sr"
?>
<div>
<p style="text-align:center;color:#fff;background:#181824;margin:0;padding:8px;"><?php echo "Name: ".$name."<br>Student ID: " . $stid; ?></p>
</div>	
<div style="width:40%;margin:50px auto">

<table class="tab_one" style="text-align:center;">
    <form action="" method="post">
        <table>
            <tr>
                <td>Select Subject: </td>
                <td>
                <select name="subject" id="">
                    <option value="English Communication-1">English Communication-1</option>
                    <option value="Matrices & Calculus">Matrices & Calculus</option>
                    <option value="Financial Accounting">Financial Accounting</option>
                    <option value="Basics of Computing">Basics of Computing</option>
                    <option value="Programming in C">Programming in C</option>
                    <option value="Programming in C Lab">Programming in C Lab</option>
                    <option value="Office Automation Lab">Office Automation Lab</option>
                    <option value="Ethics-1">Ethics-1</option>
                    <option value="Personality Development -1">Personality Development -1</option>

                    <option value="English Communication-II">English Communication-II</option>
                    <option value="Inferential Discrete Mathematics">Inferential Discrete Mathematics</option>
                    <option value="Management Accounting">Management Accounting</option>
                    <option value="Digital Logic Circuit & Microprocessors">Digital Logic Circuit & Microprocessors</option>
                    <option value="Programming in C++">Programming in C++</option>
                    <option value="Digital Logic Circuit & Microprocessors Lab">Digital Logic Circuit & Microprocessors Lab</option>
                    <option value="Programming in C++ Lab">Programming in C++ Lab</option>
                    <option value="Ethics-II">Ethics-II</option>
                    <option value="Personality Development -II">Personality Development -II</option>

                    <option value="English Communication-III">English Communication-III</option>
                    <option value="Numerical Methods for Computer Applications">Numerical Methods for Computer Applications</option>
                    <option value="Computer Organization & Architecture">Computer Organization & Architecture</option>
                    <option value="Fundamentals of Data Structure & Algorithms">Fundamentals of Data Structure & Algorithms</option>
                    <option value="OS Concepts">OS Concepts</option>
                    <option value="Fundamentals of Data Structure & Algorithms Lab">Fundamentals of Data Structure & Algorithms Lab</option>
                    <option value="OS Concepts Lab">OS Concepts Lab</option>
                    <option value="Personality Development -III">Personality Development -III</option>

                    <option value="English Communication-IV">English Communication-IV</option>
                    <option value="OOAD">OOAD</option>
                    <option value="Computer Networks">Computer Networks</option>
                    <option value="Fundamentals of Relational DBMS">Fundamentals of Relational DBMS </option>
                    <option value="Visual Programming">Visual Programming</option>
                    <option value="Fundamentals of Relational DBMS Lab">Fundamentals of Relational DBMS Lab</option>
                    <option value="Visual Programming Lab">Visual Programming Lab</option>
                    <option value="Personality Development -IV">Personality Development -IV</option>

                    <option value="Java Programming">Java Programming</option>
                    <option value="Basics of Software Engineering">Basics of Software Engineering</option>
                    <option value="Web Technology">Web Technology</option>
                    <option value="Elective -I">Elective -I</option>
                    <option value="Web Technology Lab">Web Technology Lab</option>
                    <option value="Java Programming Lab">Java Programming Lab</option>
                    <option value="Environmental Studies">Environmental Studies</option>
                    <option value="English Communication-V">English Communication-V</option>

                    <option value="Ecommerce">Ecommerce</option>
                    <option value="Computer Graphics & Multimedia">Computer Graphics & Multimedia</option>
                    <option value="C# & .Net Technologies">C# & .Net Technologies</option>
                    <option value="Elective -II">Elective -II </option>
                    <option value="Computer Graphics & Multimedia Lab">Computer Graphics & Multimedia Lab</option>
                    <option value="C# & .Net Technologies Lab">C# & .Net Technologies Lab</option>
                    <option value="Mini Project">Mini Project</option>
                    
                </select>
                </td>
            </tr>
            <tr>
                <td>Select Semester: </td>
                <td>
                <select name="semester" id="">
                    <option value="1st">1st semester</option>
                    <option value="2nd">2nd semester</option>
                    <option value="3rd">3rd semester</option>
                    <option value="4th">4th semester</option>
                    <option value="5th">5th semester</option>
                    <option value="6th">6th semester</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Input marks: </td>
                <td><input type="text" name="marks" placeholder="enter marks" required /></td>
            </tr>
            <tr>
                <td><input type="submit" name="sub" value="Add marks" /></td>
                <td><input type="reset" /></td>
            </tr>
        </table>
        
    </form>
</table>

</div>
<div class="back fix">
        <p style="text-align:center"><a href="view-allstudent.php"><button class="editbtn">Back to list</button></a></p>
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