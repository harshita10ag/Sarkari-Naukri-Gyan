<?php 
include('../database.php');
          if(isset($_POST['b1'])){
            $id=$_REQUEST['b1'];
            $query="delete from jobs where id=$id";
            mysqli_query($conn,$query) or die(mysql_error());
          }
          

         elseif(isset($_POST['sid'])){
          	$id=$_REQUEST['sid'];
          	$query1=mysqli_query($conn,"select * from jobs where id=$id");
          	$row=mysqli_fetch_object($query1);
          	if($row->status==0){
          	$query="update jobs set status=1 where id=$id";
          	mysqli_query($conn,$query) or die(mysql_error());
          	}
          	else{
          	$query="update jobs set status=0 where id=$id";
          	mysqli_query($conn,$query) or die(mysql_error());	
          	}
          }
          
          elseif(isset($_REQUEST['id'])){
  $postname =$_REQUEST['postname'];
    $startdate = $_REQUEST['startdate'];
    $sinfo=$_REQUEST['sinfo'];
    $lastdate=$_REQUEST['lastdate'];
    $lastexamfee=$_REQUEST['lastexamfee'];
    $id=$_REQUEST['id'];
    $website=$_REQUEST['website'];
    $generalobc=$_REQUEST['generalobc'];
    $scst=$_REQUEST['scst'];
    $examdate=$_REQUEST['examdate'];
    $admitdate=$_REQUEST['admitdate'];
    $applyonline=$_REQUEST['applyonline'];
    $board=$_REQUEST['board'];
    $minage=$_REQUEST['minage'];
    $maxage=$_REQUEST['maxage'];
    $advt=$_REQUEST['advt'];
    $file=$_REQUEST['notification'];
    $cform=$_REQUEST['cform'];
    $rform=$_REQUEST['rform'];
    $rupload=$_REQUEST['rupload'];
    $video=$_REQUEST['video'];
    $tvacancy=$_REQUEST['tvacancy'];
    $eligibility=$_REQUEST['eligibility'];
      $generalobc=$_REQUEST['generalobc'];
    $scst=$_REQUEST['scst'];
    $minage=$_REQUEST['minage'];
    $maxage=$_REQUEST['maxage'];
    $tvacancy=$_REQUEST['tvacancy'];
    
    if($id==""){
        $query="insert into jobs(postname,postdate,startdate,lastdate,lastexamfee,sinfo,applyonline,website,notification,generalobc,scst,examdate,admitdate,minage,maxage,board,advt,cform,rform,video,rupload,status,`default`,mdefault,tvacancy,result_id,answer_id,syllabus_id,admit_id,eligibility)values('$postname',now(),'$startdate','$lastdate','$lastexamfee','$sinfo','$applyonline','$website','$file','$generalobc','$scst','$examdate','$admitdate','$minage','$maxage','$board','$advt','$cform','$rform','$video','$rupload',0,0,0,'$tvacancy',0,0,0,0,'$eligibility')";
  // echo $query;
    mysqli_query($conn,$query) or die(mysql_error());
    // $last_id = mysqli_insert_id($conn);
    // move_uploaded_file($file,"../../notification/".$last_id.$ex);
    header("Location: ../addjobs.php");

}

else{
    
        $query="update jobs set postname='$postname', postupdate=now(),startdate='$startdate', lastdate='$lastdate',lastexamfee='$lastexamfee', sinfo='$sinfo',applyonline='$applyonline', website='$website',generalobc='$generalobc', scst='$scst',examdate='$examdate', admitdate='$admitdate', minage='$minage', maxage='$maxage', board='$board', advt='$advt',notification='$file',cform='$cform',rform='$rform',video='$video',rupload='$rupload', tvacancy='$tvacancy',eligibility='$eligibility'  where id=$id";
        // echo $query;
    mysqli_query($conn,$query) or die(mysql_error());
     header("Location: ../jobs.php");
    
  }
}
        
?>
      