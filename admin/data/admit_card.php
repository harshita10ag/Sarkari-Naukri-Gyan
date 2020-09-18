<?php 
include('../examples/database.php');
       
          if(isset($_POST['b1'])){
            $id=$_REQUEST['b1'];
            $query="delete from admit_card where id=$id";
            mysqli_query($conn,$query) or die(mysql_error());
          }

         elseif(isset($_POST['sid'])){
          	$id=$_REQUEST['sid'];
          	$query1=mysqli_query($conn,"select * from admit_card where id=$id");
          	$row=mysqli_fetch_object($query1);
          	if($row->status==0){
          	$query="update admit_card set status=1 where id=$id";
          	mysqli_query($conn,$query) or die(mysql_error());
          	}
          	else{
          	$query="update admit_card set status=0 where id=$id";
          	mysqli_query($conn,$query) or die(mysql_error());	
          	}
          }
          elseif(isset($_REQUEST['id'])){
          $jobid=$_REQUEST['jobid'];
          $admitdate=$_REQUEST['admitdate'];
          $admitlink=$_REQUEST['admitlink'];
    $id=$_REQUEST['id'];
    if($id==""){
  $query="insert into admit_card(jobid,admitdate,admitlink,postdate,`default`,status)values('$jobid','$admitdate','$admitlink',now(),0,0)";
  // echo $query;
    mysqli_query($conn,$query) or die(mysql_error());
    $last_id = mysqli_insert_id($conn);
    $query1="update jobs set admit_id='$last_id' where id=$jobid";
    mysqli_query($conn,$query1) or die(mysql_error());
    header("Location: ../addadmit_card.php");

}
else{
    
        $query="update admit_card set jobid='$jobid', admitdate='$admitdate', admitlink='$admitlink' postupdate=now() where id=$id";
    mysqli_query($conn,$query) or die(mysql_error());
    $query1="update jobs set admit_id='$id' where id=$jobid";
    mysqli_query($conn,$query1) or die(mysql_error());
    header("Location: ../admit_card.php");
     
}
}
?>
      