<?php 
include('../database.php');
       
          if(isset($_POST['b1'])){
            $id=$_REQUEST['b1'];
            $query="delete from admission where id=$id";
            mysqli_query($conn,$query) or die(mysql_error());
          }

         elseif(isset($_POST['sid'])){
          	$id=$_REQUEST['sid'];
          	$query1=mysqli_query($conn,"select * from admission where id=$id");
          	$row=mysqli_fetch_object($query1);
          	if($row->status==0){
          	$query="update admission set status=1 where id=$id";
          	mysqli_query($conn,$query) or die(mysql_error());
          	}
          	else{
          	$query="update admission set status=0 where id=$id";
          	mysqli_query($conn,$query) or die(mysql_error());	
          	}
          }
          elseif(isset($_REQUEST['id'])){
          // print_r($_REQUEST);
  $postname =$_REQUEST['postname'];
    $startdate = $_REQUEST['startdate'];
    $lastdate=$_REQUEST['lastdate'];
    $sinfo=$_REQUEST['sinfo'];
    $id=$_REQUEST['id'];
    $category=$_REQUEST['category'];
    $fname=$_REQUEST['fname'];
    $sdate=$_REQUEST['sdate'];
    $merit=$_REQUEST['merit'];
    $counselling=$_REQUEST['counselling'];
    $eligibility=$_REQUEST['eligibility'];
    $nocourse=$_REQUEST['nocourse'];
    $cutoff=$_REQUEST['cutoff'];
    $general=$_REQUEST['general'];
    $scst=$_REQUEST['scst'];
    $nocutoff=$_REQUEST['nocutoff'];
    $minage=$_REQUEST['minage'];
    $maxage=$_REQUEST['maxage'];
    $apply=$_REQUEST['apply'];
    $ffvideo=$_REQUEST['ffvideo'];
    $notification=$_REQUEST['notification'];
    $official=$_REQUEST['official'];
    $payfee=$_REQUEST['payfee'];
    $part=$_REQUEST['part'];
    $cname=$_REQUEST['cname'];
    $examdate=$_REQUEST['examdate'];
    $admit=$_REQUEST['admit'];
    $result=$_REQUEST['result'];
    $brochure=$_REQUEST['brochure'];
    $complete=$_REQUEST['complete'];
    $hard=$_REQUEST['hard'];
    $district=$_REQUEST['district'];
    $document=$_REQUEST['document'];
    $courseav=$_REQUEST['courseav'];
    $districtdate=$_REQUEST['districtdate'];
    $lgeneral=$_REQUEST['lgeneral'];
    $lscst=$_REQUEST['lscst'];
    $resultlink=$_REQUEST['resultlink'];
    $answerkey=$_REQUEST['answerkey'];
    $resultvideo=$_REQUEST['resultvideo'];
    $admitcard=$_REQUEST['admitcard'];
  $admitvideo=$_REQUEST['admitvideo'];
  $districtlink=$_REQUEST['districtlink'];
  $districtlinkvideo=$_REQUEST['districtlinkvideo'];
    if($id=="" && $category=="college"){
      for($i=1;$i<=$nocourse;$i++){ 
        $course=$_REQUEST['course'.$i];
         $course1=$course.'@'.$course1;
        $duration=$_REQUEST['duration'.$i];
         $duration1=$duration.'@'.$duration1;
        $celigible=$_REQUEST['celigible'.$i];
         $celigibility=$celigible.'@'.$celigibility;
      }
      
      for($i=1;$i<=$nocutoff;$i++){ 
        $ncutoff=$_REQUEST['ncutoff'.$i];
        $ncutoff1=$ncutoff.'@'.$ncutoff1;
      }
      $query="insert into admission(postname,postdate,startdate,lastdate,payfee,sinfo,category,cname,merit,counselling,eligibility,nocourse,course,duration,celigible,cutoff,nocutoff,ncutoff,general,scst,minage,maxage,apply,ffvideo,notification,official,status,part,examdate,admit,result,brochure,resultlink,answerkey, districtdate,lgeneral,lscst,resultvideo,admitcard,admitvideo,districtlink,districtlinkvideo,district,document)values('$postname',now(),'$startdate','$lastdate','$payfee','$sinfo','$category','$cname','$merit','$counselling','$eligibility','$nocourse','$course1','$duration1','$celigibility','$cutoff','$nocutoff','$ncutoff1','$general','$scst','$minage','$maxage','$apply','$ffvideo','$notification','$official',0,'$part','$examdate','$admit','$result','$brochure','$resultlink','$answerkey','$districtdate','$lgeneral','$lscst','$resultvideo','$admitcard','$admitvideo','$districtlink','$districtlinkvideo','$district','$document')";
      // echo $query;
      mysqli_query($conn,$query) or die(mysql_error());
      header("Location: ../addadmission.php");
    }
      elseif($id=="" && $category=="school"){
       
  $query="insert into admission(postname,postdate,startdate,lastdate,sinfo,category,fname,sdate,general,scst,minage,maxage,apply,ffvideo,notification,official,status,complete,hard,eligibility,document,courseav,districtdate,resultlink,answerkey,admitcard,districtlink,districtlinkvideo,resultvideo,admitvideo,examdate,admit,result)values('$postname',now(),'$startdate','$lastdate','$sinfo','$category','$fname','$sdate','$general','$scst','$minage','$maxage','$apply','$ffvideo','$notification','$official',0,'$complete','$hard','$eligibility','$document','$courseav','$districtdate','$resultlink','$answerkey','$admitcard','$districtlink','$districtlinkvideo','$resultvideo','$admitvideo','$examdate','$admit','$result')";
  // echo $query;
    mysqli_query($conn,$query) or die(mysql_error());
      header("Location: ../addadmission.php");
}
else{
    if($category=="college"){
      for($i=1;$i<=$nocourse;$i++){ 
        $course=$_REQUEST['course'.$i];
         $course1=$course.'@'.$course1;
        $duration=$_REQUEST['duration'.$i];
         $duration1=$duration.'@'.$duration1;
        $celigible=$_REQUEST['celigible'.$i];
         $celigibility=$celigible.'@'.$celigibility;
      }
      
      for($i=1;$i<=$nocutoff;$i++){ 
        $ncutoff=$_REQUEST['ncutoff'.$i];
        $ncutoff1=$ncutoff.'@'.$ncutoff1;
      }
    $query="update admission set postname='$postname', startdate='$startdate',lastdate='$lastdate',postupdate=now(), sinfo='$sinfo', category='$category',payfee='$payfee',cname='$cname', merit='$merit', counselling='$counselling',eligibility='$eligibility',nocourse='$nocourse',course='$course1', duration='$duration1',celigible='$celigibility',cutoff='$cutoff',nocutoff='$nocutoff',ncutoff='$ncutoff1',general='$general', scst='$scst', minage='$minage', maxage='$maxage', apply='$apply', ffvideo='$ffvideo', notification='$notification',official='$official',part='$part', examdate='$examdate', admit='$admit',result='$result',brochure='$brochure', districtdate='$districtdate', lgeneral='$lgeneral', lscst='$lscst', resultvideo='$resultvideo', admitcard='$admitcard', admitvideo='$admitvideo', districtlink='$districtlink', districtlinkvideo='$districtlinkvideo',resultlink='$resultlink',answerkey='$answerkey',district='$district', document='$document' where id=$id";
    // echo $query;
    mysqli_query($conn,$query) or die(mysql_error());
    header("Location: ../admission.php");
}
  elseif($category=="school"){
    $query="update admission set postname='$postname', startdate='$startdate',lastdate='$lastdate',postupdate=now(), sinfo='$sinfo', category='$category',fname='$fname', sdate='$sdate',general='$general', scst='$scst', minage='$minage', maxage='$maxage', apply='$apply', ffvideo='$ffvideo', notification='$notification',official='$official',complete='$complete',hard='$hard',courseav='$courseav',document='$document',eligibility='$eligibility', districtdate='$districtdate',resultlink='$resultlink',answerkey='$answerkey',admitcard='$admitcard', districtlink='$districtlink',districtlinkvideo='$districtlinkvideo', resultvideo='$resultvideo', admitvideo='$admitvideo', examdate='$examdate',admit='$admit',result='$result' where id=$id";
    // echo $query;
    mysqli_query($conn,$query) or die(mysql_error());
    header("Location: ../admission.php");
  }
}
}
?>
      