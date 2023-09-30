<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <?php
         $aid= $_SESSION['sturecmsaid'];
$sql="SELECT * from tblstaff where id=:aid";

$query = $dbh -> prepare($sql);
$query->bindParam(':aid',$aid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                  <p class="profile-name"><?php  echo htmlentities($row->staff_name);?></p>
                  <p class="designation"><?php  echo htmlentities($row->email);?></p><?php $cnt=$cnt+1;}} ?>
                </div>
               
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="staff_dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
                <span class="menu-title">Students</span>
                <i class="icon-people menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="staff_manage-students.php">Manage Students</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">Academics</span>
                <i class="icon-notebook menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="staff_view-allstudent.php">Add Results</a></li>
                  <li class="nav-item"> <a class="nav-link" href="staff_view-allstudents.php">View Results</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth1" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">SGPA Graph</span>
                <i class="icon-doc menu-icon"></i>
              </a>
              <div class="collapse" id="auth1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="sgpa1_mark-graph.php">SEM-1 Graph View</a></li>
                  <li class="nav-item"> <a class="nav-link" href="sgpa2_mark-graph.php">SEM-2 Graph View</a></li>
                  <li class="nav-item"> <a class="nav-link" href="sgpa3_mark-graph.php">SEM-3 Graph View</a></li>
                  <li class="nav-item"> <a class="nav-link" href="sgpa4_mark-graph.php">SEM-4 Graph View</a></li>
                  <li class="nav-item"> <a class="nav-link" href="sgpa5_mark-graph.php">SEM-5 Graph View</a></li>
                  <li class="nav-item"> <a class="nav-link" href="sgpa6_mark-graph.php">SEM-6 Graph View</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cgpa_mark-graph.php">
                <span class="menu-title">CGPA Graph</span>
                <i class="icon-notebook menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Semester Wise Pass %</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="sem1_pass_perc.php">Semester 1</a></li>
                  <li class="nav-item"> <a class="nav-link" href="sem2_pass_perc.php">Semester 2</a></li>
                  <li class="nav-item"> <a class="nav-link" href="sem3_pass_perc.php">Semester 3</a></li>
                  <li class="nav-item"> <a class="nav-link" href="sem4_pass_perc.php">Semester 4</a></li>
                  <li class="nav-item"> <a class="nav-link" href="sem5_pass_perc.php">Semester 5</a></li>
                  <li class="nav-item"> <a class="nav-link" href="sem6_pass_perc.php">Semester 6</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>