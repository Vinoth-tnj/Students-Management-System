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
?>