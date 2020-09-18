<?php 
include('../examples/database.php');
       
          if(isset($_POST['b1'])){
            $id=$_REQUEST['b1'];
            $query="delete from syllabus where id=$id";
            mysqli_query($conn,$query) or die(mysql_error());
          }

         elseif(isset($_POST['sid'])){
          	$id=$_REQUEST['sid'];
          	$query1=mysqli_query($conn,"select * from syllabus where id=$id");
          	$row=mysqli_fetch_object($query1);
          	if($row->status==0){
          	$query="update syllabus set status=1 where id=$id";
          	mysqli_query($conn,$query) or die(mysql_error());
          	}
          	else{
          	$query="update syllabus set status=0 where id=$id";
          	mysqli_query($conn,$query) or die(mysql_error());	
          	}
          }
          elseif(isset($_REQUEST['id'])){
  
    $jobid=$_REQUEST['jobid'];
    $id=$_REQUEST['id'];
    $file=$_REQUEST['file'];
    if($id==""){
  $query="insert into syllabus(jobid,postdate,syllabus,status)values($jobid,now(),'$file',0)";
// echo $query;
    mysqli_query($conn,$query) or die(mysql_error());
     $last_id = mysqli_insert_id($conn);
    $query1="update jobs set syllabus_id='$last_id' where id=$jobid";
    mysqli_query($conn,$query1) or die(mysql_error());
    header("Location: ../addsyllabus.php");

}

else{
  $jobid=$_REQUEST['jobid'];
    $id=$_REQUEST['id'];
    $file=$_REQUEST['file'];
 
    $query="update syllabus set jobid='$jobid', postupdate=now(),syllabus='$file' where id=$id";

    mysqli_query($conn,$query) or die(mysql_error());
    $query1="update jobs set admit_id='$id' where id=$jobid";
    mysqli_query($conn,$query1) or die(mysql_error());
    
    header("Location: ../syllabus.php");
}

}

?>
      