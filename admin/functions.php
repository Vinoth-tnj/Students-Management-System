<?php
//db conn
global $conn;
	$conn = new mysqli("localhost", "root", "" , "studentmsdb");

//fetch all students
function get_all_student(){
		global $conn;
		$sql = "select * from tblstudent order by StuID ASC";
		$query = $conn->query($sql);
		return $query;
}

//grading system
function add_marks($stid,$subject,$semester,$marks){
    global $conn;
    $qry = "select * from result where st_id='$stid' and sub='$subject' and semester='$semester' ";
    $query = $conn->query($qry);
    $count = $query->num_rows;
    if($count>0){
        return false;
    }else{
    $sql = "insert into result(st_id,marks,sub,semester) values('$stid','$marks','$subject','$semester')";
    $result = $conn->query($sql);
    return $result;
    }
}
//show marks
function show_marks($stid,$semester){
    global $conn;
    $result = $conn->query("select * from result where st_id='$stid' and semester='$semester' ");
    $count = $result->num_rows;
    if($count>0){
        return $result;
    }else{
        return false;
    }
    
}
//update student result
function update_result($stid,$subject = array(),$semester){
    global $conn;
    foreach($subject as $key =>$mark ){
        $sql = "update result set marks='$mark' where st_id='$stid' and semester='$semester' and sub='$key' ";
            $result = $conn->query($sql);	
    }
    if($result){
        return true;
    }else{
        return false;
    }
}
function view_cgpa($stid){
    global $conn;
    $sql = "select * from result where st_id='$stid'";
    $result = $conn->query($sql);
    return $result;
}

//adding cgpa
function add_cgpa($stid,$stuname,$cgpa){
    global $conn;
    $qry = "select * from cgpa where st_id='$stid' ";
    $query = $conn->query($qry);
    $count = $query->num_rows;
    if($count>0){
        $sql = "update cgpa set cgpa='$cgpa' where st_id='$stid' ";
        $result = $conn->query($sql);
        return false;
    }else{
    $sql = "insert into cgpa(st_id,stu_name,cgpa) values('$stid','$stuname','$cgpa')";
    $result = $conn->query($sql);
    return $result;
    }
}

//adding staff_stu
function add_staff_stu($stid,$class,$sec,$staffid){
    global $conn;
    $qry = "select * from staff_stu ' ";
    $query = $conn->query($qry);
    $count = $query->num_rows;
    if($count>0){
        return false;
    }else{
    $sql = "insert into staff_stu(staff_id,st_id,student_class,section) values('$staffid','$stid','$class','$sec')";
    $result = $conn->query($sql);
    return $result;
    }
}

//adding sgpa
function add_sgpa($stid,$stuname,$sgpa,$semester){
    if($semester=="1st"){
    global $conn;
    $qry = "select * from semsgpa where st_id='$stid' ";
    $query = $conn->query($qry);
    $count = $query->num_rows;
    if($count>0){
        $sql = "update semsgpa set sem1_sgpa='$sgpa' where st_id='$stid' ";
        $result = $conn->query($sql);
        return false;
    }else{
    $sql = "insert into semsgpa(st_id,stu_name,sem1_sgpa) values('$stid','$stuname','$sgpa')";
    $result = $conn->query($sql);
    return $result;
    }
    }
    else if($semester=="2nd"){
        global $conn;
        $qry = "select * from semsgpa where st_id='$stid' ";
        $query = $conn->query($qry);
        $count = $query->num_rows;
        if($count>0){
            $sql = "update semsgpa set sem2_sgpa='$sgpa' where st_id='$stid' ";
            $result = $conn->query($sql);
            return false;
        }else{
        $sql = "insert into semsgpa(st_id,stu_name,sem2_sgpa) values('$stid','$stuname','$sgpa')";
        $result = $conn->query($sql);
        return $result;
        }
    }
    else if($semester=="3rd"){
        global $conn;
        $qry = "select * from semsgpa where st_id='$stid' ";
        $query = $conn->query($qry);
        $count = $query->num_rows;
        if($count>0){
            $sql = "update semsgpa set sem3_sgpa='$sgpa' where st_id='$stid' ";
            $result = $conn->query($sql);
            return false;
        }else{
        $sql = "insert into semsgpa(st_id,stu_name,sem3_sgpa) values('$stid','$stuname','$sgpa')";
        $result = $conn->query($sql);
        return $result;
        }
    }
    else if($semester=="4th"){
        global $conn;
        $qry = "select * from semsgpa where st_id='$stid' ";
        $query = $conn->query($qry);
        $count = $query->num_rows;
        if($count>0){
            $sql = "update semsgpa set sem4_sgpa='$sgpa' where st_id='$stid' ";
            $result = $conn->query($sql);
            return false;
        }else{
        $sql = "insert into semsgpa(st_id,stu_name,sem4_sgpa) values('$stid','$stuname','$sgpa')";
        $result = $conn->query($sql);
        return $result;
        }
    }
    else if($semester=="5th"){
        global $conn;
        $qry = "select * from semsgpa where st_id='$stid' ";
        $query = $conn->query($qry);
        $count = $query->num_rows;
        if($count>0){
            $sql = "update semsgpa set sem5_sgpa='$sgpa' where st_id='$stid' ";
            $result = $conn->query($sql);
            return false;
        }else{
        $sql = "insert into semsgpa(st_id,stu_name,sem5_sgpa) values('$stid','$stuname','$sgpa')";
        $result = $conn->query($sql);
        return $result;
        }
    }
    else if($semester=="6th"){
        global $conn;
        $qry = "select * from semsgpa where st_id='$stid' ";
        $query = $conn->query($qry);
        $count = $query->num_rows;
        if($count>0){
            $sql = "update semsgpa set sem6_sgpa='$sgpa' where st_id='$stid' ";
            $result = $conn->query($sql);
            return false;
        }else{
        $sql = "insert into semsgpa(st_id,stu_name,sem6_sgpa) values('$stid','$stuname','$sgpa')";
        $result = $conn->query($sql);
        return $result;
        }
    }

}
?>