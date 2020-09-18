<?php 
include('../examples/database.php');
       
          if(isset($_POST['b1'])){
            $id=$_REQUEST['b1'];
            $query="delete from answerkey where id=$id";
            mysqli_query($conn,$query) or die(mysql_error());
          }

         elseif(isset($_POST['sid'])){
          	$id=$_REQUEST['sid'];
          	$query1=mysqli_query($conn,"select * from answerkey where id=$id");
          	$row=mysqli_fetch_object($query1);
          	if($row->status==0){
          	$query="update answerkey set status=1 where id=$id";
          	mysqli_query($conn,$query) or die(mysql_error());
          	}
          	else{
          	$query="update answerkey set status=0 where id=$id";
          	mysqli_query($conn,$query) or die(mysql_error());	
          	}
          }
          elseif(isset($_REQUEST['id'])){
  
    $jobid=$_REQUEST['jobid'];
    $id=$_REQUEST['id'];
    $answer_date=$_REQUEST['answer_date'];
    $pdf=$_REQUEST['file'];
    if($id==""){
  $query="insert into answerkey(jobid,postdate,answerkey,status,answer_date)values($jobid,now(),'$pdf',0,'$answer_date')";

    mysqli_query($conn,$query) or die(mysql_error());
    $last_id = mysqli_insert_id($conn);
    $query1="update jobs set answer_id='$last_id' where id=$jobid";
    mysqli_query($conn,$query1) or die(mysql_error());
   // echo $query;
  header("Location: ../addanswerkey.php");
}
else{
  
    $query="update answerkey set jobid='$jobid', postupdate=now(),answerkey='$pdf',answer_date='$answer_date' where id=$id";

    mysqli_query($conn,$query) or die(mysql_error());
    $query1="update jobs set answer_id='$id' where id=$jobid";
    mysqli_query($conn,$query1) or die(mysql_error());
   // echo $query;
  header("Location: ../answerkey.php");
    
}
}
?>
      