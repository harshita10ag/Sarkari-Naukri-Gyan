<?php 
include('../database.php');
       
          if(isset($_POST['b1'])){
            $id=$_REQUEST['b1'];
            $query="delete from result where id=$id";
            mysqli_query($conn,$query) or die(mysql_error());
          }

         elseif(isset($_POST['sid'])){
            $id=$_REQUEST['sid'];
            $query1=mysqli_query($conn,"select * from result where id=$id");
            $row=mysqli_fetch_object($query1);
            if($row->status==0){
            $query="update result set status=1 where id=$id";
            mysqli_query($conn,$query) or die(mysql_error());
            }
            else{
            $query="update result set status=0 where id=$id";
            mysqli_query($conn,$query) or die(mysql_error()); 
            }
          }
          elseif(isset($_REQUEST['id'])){
  $board =$_REQUEST['board'];
    $postname = $_REQUEST['postname'];
    $sinfo=$_REQUEST['sinfo'];
    $xdate=$_REQUEST['xdate'];
    $xredate=$_REQUEST['xredate'];
    $xiidate=$_REQUEST['xiidate'];
    $xiiredate=$_REQUEST['xredate'];
    $category=$_REQUEST['category'];
    $reeval=$_REQUEST['reeval'];
    $examcond=$_REQUEST['examcond'];
    $lastyear=$_REQUEST['lastyear'];
    $resultdate=$_REQUEST['resultdate'];
    $resultlink=$_REQUEST['resultlink'];
    $jobid=$_REQUEST['jobid'];
    $id=$_REQUEST['id'];
    $applylink=$_REQUEST['applylink'];
    $ffvideo=$_REQUEST['ffvideo'];
    $xreslink=$_REQUEST['xreslink'];
    $xiireslink=$_REQUEST['xiireslink'];
    $checkvideo=$_REQUEST['checkvideo'];
    $official=$_REQUEST['official'];
    $notification=$_REQUEST['notification'];
    if($id==""){
      if($category=="school"){
      for($i=1;$i<=$lastyear;$i++){ 
        $lastyears=$_REQUEST['lastyears'.$i];
        $last=$lastyears.','.$last;
        $percentage=$_REQUEST['percentage'.$i];
        $perc=$percentage.','.$perc;
      }
      $last = substr($last, 0, -1);
      $perc = substr($perc, 0, -1);
     $query="insert into result(category,board,postname,sinfo,xdate,xredate,xiidate,xiiredate,reeval,examcond,noofyears,lastyears,percentage,applylink,ffvideo,xreslink,xiireslink,checkvideo,official,notification,postdate,`default`,status)values('$category','$board','$postname','$sinfo','$xdate','$xredate','$xiidate','$xiiredate','$reeval','$examcond','$lastyear','$last','$perc','$applylink','$ffvideo','$xreslink','$xiireslink','$checkvideo','$official','$notification',now(),0,0)";
     // echo $query;
  mysqli_query($conn,$query) or die(mysql_error());
  header("Location: ../addresult.php");
}
elseif ($category=="govtexam") {
  $query="insert into result (category,jobid,resultdate,resultlink,postdate,`default`,status) values('$category','$jobid','$resultdate','$resultlink',now(),0,0)";
    
    mysqli_query($conn,$query) or die(mysql_error());
    $last_id = mysqli_insert_id($conn);
    $query1="update jobs set result_id='$last_id' where id=$jobid";
    mysqli_query($conn,$query1) or die(mysql_error());
   // echo $query;
  header("Location: ../addresult.php");
}
}

else{
    if($category=="school"){
      for($i=1;$i<=$lastyear;$i++){ 
        $lastyears=$_REQUEST['lastyears'.$i];
        $last=$lastyears.','.$last;
        $percentage=$_REQUEST['percentage'.$i];
        $perc=$percentage.','.$perc;
      }
      $last = substr($last, 0, -1);
      $perc = substr($perc, 0, -1);
    $query="update result set category='$category',board='$board', postname='$postname', sinfo='$sinfo', xdate='$xdate', xredate='$xredate', xiidate='$xiidate', xiiredate='$xiiredate',reeval='$reeval',examcond='$examcond',noofyears='$lastyear', lastyears='$last',percentage='$perc',applylink='$applylink',ffvideo='$ffvideo',xreslink='$xreslink',xiireslink='$xiireslink', checkvideo='$checkvideo', official='$official',notification='$notification', postupdate=now() where id=$id";
    mysqli_query($conn,$query) or die(mysql_error());
      header("Location: ../result.php");
  }
  else{
    $query="update result set category='$category',jobid='$jobid',resultdate='$resultdate',resultlink='$resultlink' where id=$id";
    mysqli_query($conn,$query) or die(mysql_error());
    $query1="update jobs set result_id='$id' where id=$jobid";
    mysqli_query($conn,$query1) or die(mysql_error());
     header("Location: ../result.php");
   }
}
}
?>
      