<?php include('database.php');
$id=$_GET['id'];
if(isset($_GET['id'])){
$query=mysqli_query($conn,"select * from jobs where id=$id");
$row=mysqli_fetch_object($query);
}
$strword=str_word_count($row->postname);
if($strword>=9){
  $posts=preg_match("/\S*\s\S*\s\S*\s\S*\s\S*\s\S*\s\S*/", $row->postname, $result);
}else{
  $posts=$row->postname;
}

?>
<html>
<head>
<title><?php echo $row->postname;?></title>

<meta name="description" content="Apply Online <?php echo $posts[0];?>. Check Post, Syllabus Notification, Age Limit, Eligibility, How to Apply." />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="content-language" content="en" />
<link rel="canonical" href="https://sarkarinaukrigyan.com/jobdetail.php">
<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
<link rel="icon" sizes="192x192" href="/icon.png">
<link rel="shortcut icon" href="favicon.ico" />

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-73415672-1" type="41353eefa4fa59fe909863f6-text/javascript"></script>
<script type="41353eefa4fa59fe909863f6-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-73415672-1');
</script>
<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "EducationalOrganization",
"name": "Sarkarinaukrigyan",
"url": "https://www.sarkarinaukrigyan.com/"
}
</script>
</head>
<body style="background-color:#FFFFFF">

<meta name="viewport" content="width=device-width, initial-scale=0.3, maximum-scale=1">
<div align="center">
<div style="height:auto; width:1000px; margin:0">
<div id="header" onClick="if (!window.__cfRLUnblockHandlers) return false; " style="cursor: pointer;" data-cf-modified-41353eefa4fa59fe909863f6-="">
<div id="head-title">
<div id="logo">
<img style="float:left" src="images/SARKARI NAUKARI GYAN.png" alt="SarkariNaukriGyan" height="92px" width="90px">
</div>
<font size=+4>SARKARI NAUKRI GYAN</font>
<br>
<font size = +2>WWW.SARKARINAUKRIGYAN.COM</font>
</div>
</div>
<div id="hmenu">
<ul class="hmenu">
<li>
<a href="../index.php" class="parent">
<span>Home</span>
</a>
</li>
<li>
<a href="../result.php" class="parent">
<span>Result</span>
</a>
</li>
<li>
<a href="../admitcard.php" class="parent">
<span>Admit Card</span>
</a>
</li>
<li>
<a href="../latestjob.php" class="parent">
<span>Latest Jobs</span>
</a>
</li>
<li>
<a href="../syllabus.php" class="parent">
<span>Syllabus</span>
</a>
</li>
<li>
<a href="../answerkey.php" class="parent">
<span>Answer Key</span>
</a>
</li>
<!-- <li>
<a href="https://play.google.com/store/apps/details?id=com.app.app14f269771c01" class="parent">
<span>Android App</span>
</a>
</li>
<li>
<a href="https://itunes.apple.com/us/app/sarkari-result/id1051363935?ls=1&amp;mt=8" class="parent">
<span>Apple IOS App</span>
</a>
</li>
<li>
<a href="https://www.microsoft.com/en-us/store/apps/sarkari-result/9nblggh6cm69" class="parent">
<span>Window App</span>
</a>
</li> -->
</ul>
</div>
<script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt" type="41353eefa4fa59fe909863f6-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-9222595088627935" data-ad-slot="8266234849"></ins>
<script type="41353eefa4fa59fe909863f6-text/javascript">
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<style>
table h1 {
    display: block;
    font-size: 22px;
    color: #0F3063;
    margin-left: 0;
    margin-right: 0;
}
td { font-size: 20px;}
    h2 { font-size: 28px;}
     li{ font-size: 21px;
        margin-left: 10px;
    }
@media (max-width: 991px){
    td { font-size: 28px;}
     h2 { font-size: 25px;}
    }
@media (max-width: 767px){
     h2 { font-size: 32px;}
    td { font-size: 30px;}
    ul li{ font-size: 30px;}
}
@media (max-width: 550px) {
 td { font-size: 22px;}
     h2 { font-size: 20px;}
 

}

@media (max-width: 300px) {
  td { font-size: 18px;}
     h2 { font-size: 15px;}
}
</style>
<table width="100%" align="center" />
<tr valign="top" />
<td>
<div align="left" />
<h2><table align="center" style="margin-left:10px" />
<tr>
<td valign="top" align="left" style="font-weight:bold; color:#FF0033">Name of Post: </td>
<td valign="top" align="left"><?php echo $row->postname;?></td>
</tr>
<tr>
<td valign="top" align="left" style="font-weight:bold; color:#FF0033;">Post Date :</td>
<td valign="top" align="left"><?php $datetime= $row->postdate; 
echo $datetime;
?></td>
</tr>
<?php if($row->postupdate==""){} else{
?><tr>
<td valign="top" align="left" style="font-weight:bold; color:#FF0033;">Post Update Date :</td>
<td valign="top" align="left"><?php echo $datetime= $row->postupdate; 
// list($date,$time)= split(' ',$datetime); 
// echo $date.'|'.$time;

?></td>
</tr>
<?php }?>
<?php $query2=mysqli_query($conn,"select  * from board where id=$row->board");
    $row3=mysqli_fetch_object($query2);
    if($row3->board==""){}else{$row3->board;}
    ?>
<tr>
<td valign="top" align="left" style="font-weight:bold; color:#FF0033">Short Information : </td>
<td valign="top" align="left"><?php echo $row->sinfo;?>
</td>
</tr>
</table>

</h2>
<table width="687" border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td colspan="20" valign="top" width="687">
<h1 align="center"><span style="color: #ff00ff;"><b><?php echo $row->postname;?></b></span><b></b></h1>
</td>
</tr>
<tr>
<td colspan="20" valign="top" width="687">
<p align="center"><b>
<span style="color: #ff00ff;"> <?php echo $row3->board;?></span></b></p>
<p align="center"><span style="color: #008000;"><b><?php if($row->advt==""){}else{ echo "Advt No. : ".$row->advt;}?> Short Details of Notification</b></span></p>
<p align="center"><span style="color: #ff0000;"><b><a title="Sarkari Naukri Gyan Official Website Apply Online Bihar Van Rakshak Online Form 2020" href="https://www.sarkarinaukrigyan.com" target="_blank"><span style="color: #ff0000;">WWW.SARKARINAUKRIGYAN.COM</span></a></b></span></p>
</td>
</tr>
<?php $query6=mysqli_query($conn,"select * from admit_card where jobid=$id");
  $row7=mysqli_fetch_object($query6);
    $query4=mysqli_query($conn,"select * from answerkey where jobid=$id");
    $row5=mysqli_fetch_object($query4);
  ?>

<tr>
<td colspan="10" valign="top" width="320">
<p align="center"><span style="color: #008000;"><b>Important Dates</b></span></p>
<ul>
<li>Application Begin : <b><?php $date= $row->startdate; echo date("d/m/Y", strtotime($date));?></b></li>
<li>Last Date for Apply Online : <span style="color: #ff0000;"><b><?php $date= $row->lastdate; echo date("d/m/Y", strtotime($date));?> </b></span></li>
<?php if($row->lastexamfee==""||$row->lastexamfee=="0000-00-00"){}else{?>
<li>Last Date for Pay Exam Fee : <b><?php $date= $row->lastexamfee; echo date("d/m/Y", strtotime($date));?></b></li>
<?php } ?>
<li>Exam Date: <b><?php if($row->examdate==""||$row->examdate=="0000-00-00"){echo "Notified Soon";}else{ echo $row->examdate; }?></b></li>

<li>Admit Card Available : <b><?php if($row7->admitdate==""){ if($row->admitdate==""){} else{echo $row->admitdate;}} else{$date= $row7->admitdate; echo date("d/m/Y", strtotime($date)); } ?></b></li>
<?php if($row->cform==""||$row->cform==0){}else{echo "<li>Last Date Completed Form : <b>".$row->cform."</b></li>";}
if($row->rupload==""||$row->rupload==0){}else{echo "<li>Re Upload Photo / Sign : <b>".$row->rupload."</b></li>";}
if($row->rform==""||$row->rform==0){}else{echo "<li>Receipt Form Last Date : : <b>".$row->rform."</b></li>";} 
if($row5->answer_date==""||$row5->answer_date==0){}else{echo "<li>Answer Key Availaable : <b>".$row5->answer_date."</b></li>";}
?>
</ul>
<?php $query5=mysqli_query($conn,"select * from result where jobid=$id");
      $row6=mysqli_fetch_object($query5);
        // print_r($row6);
      ?>
 <ul> <li>Result Available : <b><?php if($row6->resultdate==""||$row6->resultdate=="0000-00-00"){echo "Notified Soon";}else{ $date= $row6->resultdate; echo date("d/m/Y", strtotime($date));}?></b></li>
</ul>

</td>
<td colspan="10" valign="top" width="368">
<p align="center"><span style="color: #008000;"><b>Application Fee</b></span></p>
<ul>
<li>General / OBC / EWS : <b><?php echo $row->generalobc;?>/-</b></li>
<li>SC / ST : <b><?php echo $row->scst;?>/-</b></li>
<li>Pay the Examination Fee Through Debit Card, Credit Card, Net Banking or Pay Offline Through SBI E Challan Fee Mode</li>
</ul>
</td>
</tr>
<?php if($row->eligibility==""){}else{?>
<tr>
<td colspan="20" valign="top" width="687">
<p align="center"><span style="color: #008000;"><b>Eligibility </b>
<ul>
<li><?php echo $row->eligibility;?></li>
</ul>
</td>
</tr>
<?php } ?>
<?php if($row->minage==0 || $row->maxage==0){}else{?>
<tr>
<td colspan="20" valign="top" width="687">
<p align="center"><span style="color: #008000;"><b>Age Limit as on </b><span style="color: #ff00ff;"><b>01/01/2020</b></span></span></p>
<ul>
<li>Minimum Age <b>: <?php echo $row->minage;?> Years.</b></li>
<li>Maximum Age <b>: <?php echo $row->maxage;?> Years.</b></li>
<li>Age Relaxation Extra as per Recruitment Rules.</li>
</ul>
</td>
</tr>
<?php } ?>
<tr>
    <?php $query1="select * from vacancy where jobid =$row->id";
$result1 = mysqli_query($conn,$query1);
$total=0;
while($row2 = mysqli_fetch_assoc($result1)) {
    $total+=$row2['totalpost'];
    $cpostname1=explode(',',$row2['cpostname']);
    $eligibility=$row2['eligibility'];
    $post=$row2['postname'];
    $age=$row2['age'];
    $branch = $row2['branch'];
    $general = preg_split('/,/', $row2['general'], -1, PREG_SPLIT_NO_EMPTY);
    $cage = preg_split('/,/', $row2['cage'], -1, PREG_SPLIT_NO_EMPTY);
    $ews = preg_split('/,/', $row2['ews'], -1, PREG_SPLIT_NO_EMPTY);
    $ebc = preg_split('/,/', $row2['ebc'], -1, PREG_SPLIT_NO_EMPTY);
    $bcfemale = preg_split('/,/', $row2['bcfemale'], -1, PREG_SPLIT_NO_EMPTY);
    $obcfemale = preg_split('/,/', $row2['obcfemale'], -1, PREG_SPLIT_NO_EMPTY);
    $bc = preg_split('/,/', $row2['bc'], -1, PREG_SPLIT_NO_EMPTY);
    $sc = preg_split('/,/', $row2['sc'], -1, PREG_SPLIT_NO_EMPTY);
    $st = preg_split('/,/', $row2['st'], -1, PREG_SPLIT_NO_EMPTY);
    $obc = preg_split('/,/', $row2['obc'], -1, PREG_SPLIT_NO_EMPTY);


} 
?>
<td colspan="20" valign="top" width="687">
<p align="center"><span style="color: #ff00ff;"><b>Vacancy Details</b><span style="color: #008000;"><b> Total : <?php $total; if($total=="" | $total==0){echo $row->tvacancy;}else{ echo $total; }?> Post</b></span></span><b> </b></p>
</td>
</tr>
  <?php 
  $po=""; $to="";$el="";$ag="";$br="";
  if($post!=""){
  if($total=="" & $total=="0" & $branch=="" & $age==""){ $po='<td colspan="10" valign="top" width="240">';$el='<td colspan="10" valign="top" width="240">';}
  elseif($eligibility=="" & $branch=="" & $age==""){ $po='<td colspan="10" valign="top" width="240">';$to='<td colspan="10" valign="top" width="240">';}
    elseif ($branch=="" & $age=="") {
      $po='<td colspan="7" valign="top" width="240">';$el='<td colspan="9" valign="top" width="240">';$to='<td colspan="4" valign="top" width="240">';
    }
    elseif($total=="" & $total=="0" & $branch=="" & $eligibility==""){$po='<td colspan="10" valign="top" width="240">';$ag='<td colspan="10" valign="top" width="240">';}
    elseif($total=="" & $total=="0" & $branch==""){  $po='<td colspan="7" valign="top" width="240">';$el='<td colspan="9" valign="top" width="240">';$ag='<td colspan="4" valign="top" width="240">';}
    elseif($branch=="" & $eligibility==""){ $po='<td colspan="10" valign="top" width="240">';$ag='<td colspan="5" valign="top" width="240">';$to='<td colspan="5" valign="top" width="240">';}
    elseif($branch==""){$po='<td colspan="5" valign="top" width="240">';$ag='<td colspan="5" valign="top" width="240">';$to='<td colspan="5" valign="top" width="240">';$el='<td colspan="5" valign="top" width="240">';}
    elseif($total=="" & $total=="0" & $eligibility=="" & $age==""){ $po='<td colspan="10" valign="top" width="240">';$br='<td colspan="10" valign="top" width="240">';}
    elseif ($total=="" & $total=="0" & $age=="") { 
      $po='<td colspan="7" valign="top" width="240">';$el='<td colspan="9" valign="top" width="240">';$br='<td colspan="4" valign="top" width="240">';
    }elseif ($eligibility=="" & $age=="") {
      $po='<td colspan="7" valign="top" width="240">';$to='<td colspan="9" valign="top" width="240">';$br='<td colspan="4" valign="top" width="240">';
    }elseif ($age=="") { 
      $po='<td colspan="5" valign="top" width="240">';$el='<td colspan="5" valign="top" width="240">';$br='<td colspan="5" valign="top" width="240">';$to='<td colspan="5" valign="top" width="240">';
    }elseif($total=="" & $total=="0" & $eligibility==""){ $po='<td colspan="7" valign="top" width="240">';$ag='<td colspan="9" valign="top" width="240">';$br='<td colspan="4" valign="top" width="240">';}

    elseif($total=="" & $total=="0"){$po='<td colspan="5" valign="top" width="240">';$ag='<td colspan="5" valign="top" width="240">';$br='<td colspan="5" valign="top" width="240">';$el='<td colspan="5" valign="top" width="240">';}
    elseif($eligibility==""){$po='<td colspan="5" valign="top" width="240">';$ag='<td colspan="5" valign="top" width="240">';$br='<td colspan="5" valign="top" width="240">';$to='<td colspan="5" valign="top" width="240">';}
    elseif($total=="" & $total=="0" & $branch=="" & $age=="" & $eligibility==""){$po='<td colspan="20" valign="top" width="240">';}
  else{
    $po='<td colspan="5" valign="top" width="240">';$ag='<td colspan="3" valign="top" width="240">';$br='<td colspan="4" valign="top" width="240">';$to='<td colspan="3" valign="top" width="240">';$el='<td colspan="5" valign="top" width="240">';} 
    echo '<tr>';
    if($post==""){}else{
  echo $po;
echo '<p align="center"><b>Post Name</b></p>
</td>';
}if($total=="" || $total==0){}else{ 
  echo $to;
echo '<p align="center"><b>Total Post </b></p>
</td>';
}
if($branch==""){}else{
  echo $br;
  echo '<p align="center"><b>Branch</b></p>
</td>';
 }if($age==""){}else{
  echo $ag;
  echo '<p align="center"><b>Age Limit</b></p>
</td>';
 }  if($eligibility==""){ }else{ 
  echo $el;
echo '<p align="center"><b>Eligibility</b></p>
</td>';
 } 
 ?>
</tr>

<?php $query1="select * from vacancy where jobid =$row->id";
$result1 = mysqli_query($conn,$query1);
while($row1 = mysqli_fetch_assoc($result1)) {
  echo "<tr>";
if($post==""){}else{
  echo $po;
echo '<p align="center">'.$row1['postname'].'</p></td>';
}if($total=="" || $total==0){}else{ 
  echo $to;
echo '<p align="center">'.$row1['totalpost'].'</p></td>';
}
if($branch==""){}else{
  echo $br;
  echo '<p align="center">'.$row1['branch'].'</p></td>';
}if($age==""){}else{
  echo $ag;
  echo '<p align="center">'.$row1['age'].'</p></td>';
}if($eligibility==""){}else{
  echo $el;
echo '<p align="center">'.$row1['eligibility'].'</p></td>';
 } ?>
</tr>
<?php $cat=$row1['category']; $categorywisepost=$row1['categorywise']; $physical=$row1['peligible'];$sectorwise=$row1['sectorwise']; }  

if($total=="" | $total==0){}else{
?>

<tr>

<?php echo $po;?>
<p align="center"><b>Total</b></p>
</td>
<?php echo $to;echo '<p align="center"><b>'.$total.'</b></p></td>';?>
<td colspan="14" valign="top" width="447"></td>
</tr>
<?php 
}
}
if($cat=="categorywise"){ ?>
<tr>
<td colspan="20" valign="top" width="706">
    
<p align="center"><span style="color: #ff00ff;"><b><?php echo $row3->board;?> Category Wise Vacancy Details</b></span></p>
</td>
</tr>
<tr>
<?php $gn=0;
if($cpostname1=="" | $cpostname1==","){}else{?>
<td valign="top" width="158" colspan="3">
<p align="center"><b>Post Name</b></p>
</td>
<?php } if($cage[0]==""){$gn+=2;}else{
echo '<td colspan="2" valign="top" width="130">
<p align="center"><b>Age</b></p>
</td>';
}if($general[0]==""){}else{

  echo '<td colspan="2" valign="top" width="130">
<p align="center"><b>General</b></p>
</td>';}
if($ews[0]==""){$gn+=2;}else{
echo '<td colspan="2" valign="top" width="130">
<p align="center"><b>EWS</b></p>
</td>';
}if($ebc[0]==""){$gn+=2;}else{
echo '<td colspan="2" valign="top" width="130">
<p align="center"><b>EBC</b></p>
</td>';
}if($bc[0]==""){$gn+=1;}else{
echo '<td colspan="1" valign="top" width="130">
<p align="center"><b>BC</b></p>
</td>';
}if($bcfemale[0]==""){$gn+=1;}else{
echo '<td colspan="1" valign="top" width="130">
<p align="center"><b>BC Female</b></p>
</td>';
}if($obc[0]==""){$gn=2;}else{
echo '<td colspan="2" valign="top" width="82">
<p align="center"><b>OBC</b></p>
</td>';
}if($obcfemale[0]==""){$gn+=1;}else{
echo '<td colspan="1" valign="top" width="130">
<p align="center"><b>OBC Female</b></p>
</td>';
}if($sc[0]==""){$gn+=1;}else{
echo '<td colspan="1" valign="top" width="81">
<p align="center"><b>SC</b></p>
</td>';
}if($st[0]==""){$gn+=1;}else{
  echo '<td valign="top" width="62" colspan="1">
<p align="center"><b>ST</b></p>
</td>';
}  $gn+=2;?>
<td valign="top" width="193" colspan="<?php echo $gn;?>">
<p align="center"><b>Total</b></p>
</td>


</tr>

<?php $query1="select * from vacancy where jobid =$row->id limit 1";
$result1 = mysqli_query($conn,$query1);

while($row1 = mysqli_fetch_assoc($result1)) {
  for($i=0;$i<$categorywisepost;$i++){
    ?>
  
<tr>
  <?php  if($cpostname1=="" | $cpostname1==","){}else{
$cage1= explode(',',$row1['cage']);
$general1= explode(',',$row1['general']); 
$ews1= explode(',',$row1['ews']); 
$ebc1= explode(',',$row1['ebc']);  
$bc1= explode(',',$row1['bc']);  
$bcfemale1= explode(',',$row1['bcfemale']);  
$obcfemale1= explode(',',$row1['obcfemale']); 
$obc1= explode(',',$row1['obc']);  
$sc1= explode(',',$row1['sc']);  
$st1= explode(',',$row1['st']);  
    ?>
<td valign="top" width="158" colspan="3">
<p align="center"><b><?php $cpostname= explode(',',$row1['cpostname']); echo $cpostname[$i];?></b></p>
</td>
<?php }if($cage[0]==""){}else{
echo '<td colspan="2" valign="top" width="130">
<p align="center">';
if($cage1[$i]==""){}else{echo $cage1[$i]; }
echo '</p></td>';
}
 if($general[0]=="" ){}else{
echo '<td colspan="2" valign="top" width="130">
<p align="center">';
if($general1[$i]==""){echo "00";}else{echo $general1[$i];}
echo '</p></td>';
}if($ews[0]==""){}else{
echo '<td colspan="2" valign="top" width="130">
<p align="center">';
if($ews1[$i]==""){echo "00";}else{echo $ews1[$i];}
echo'</p></td>';
}if($ebc[0]=="" | $ebc[0]==","){}else{
echo '<td colspan="2" valign="top" width="130">
<p align="center">';
if($ebc1[$i]==""){echo "00";}else{echo $ebc1[$i];}
echo'</p></td>';
}if($bc[0]=="" | $bc[0]==","){}else{
echo '<td colspan="1" valign="top" width="130">
<p align="center">';
if($bc1[$i]==""){echo "00";}else{echo $bc1[$i];}
echo '</p></td>';
}if($bcfemale[0]=="" | $bcfemale[0]==","){}else{
echo '<td colspan="1" valign="top" width="130">
<p align="center">';
if($bcfemale1[$i]==""){echo "00";}else{echo $bcfemale1[$i];}
echo '</p></td>';
}if($obc[0]=="" | $obc[0]==","){}else{
echo '<td colspan="2" valign="top" width="130">
<p align="center">';
if($obc1[$i]==""){echo "00";}else{echo $obc1[$i];}
echo '</p></td>';
}if($obcfemale[0]=="" | $obcfemale[0]==","){}else{
echo '<td colspan="1" valign="top" width="130">
<p align="center">';
if($obcfemale1[$i]==""){echo "00";}else{echo $obcfemale1[$i];}
echo '</p></td>';
}if($sc[0]=="" | $sc[0]==","){}else{
echo '<td colspan="1" valign="top" width="130">
<p align="center">';
if($sc1[$i]==""){echo "00";}else{echo $sc1[$i];}
echo '</p></td>';
}if($st[0]=="" | $st[0]==","){}else{
echo '<td colspan="1" valign="top" width="130">
<p align="center">';
if($st1[$i]==""){echo "00";}else{echo $st1[$i];}
echo '</p></td>';
}?>
<td valign="top" width="193" colspan="<?php echo $gn;?>">
<p align="center"><?php echo $general1[$i]+$ews1[$i]+$bc1[$i]+$obc1[$i]+$sc1[$i]+$st1[$i]+$bcfemale1[$i]+$obcfemale1[$i]+$ebc1[$i];?></p>
</td>
</tr>
<?php  }}}  if($physical=="physical"){ $query1="select * from vacancy where jobid =$row->id limit 1";
$result1 = mysqli_query($conn,$query1);
while($row1 = mysqli_fetch_assoc($result1)) { ?>
<tr>
<td colspan="20" valign="top" width="687">
<h2 align="center"><span style="color: #008000;"><b>Physical Eligibility</b></span><b> </b></h2>
</td>
</tr>
<tr>
<td rowspan="2" colspan="3" valign="top" width="163">
<p align="center"><b>Category</b></p>
</td>
<td colspan="14" valign="top" width="366">
<p align="center"><b>Male</b></p>
</td>
<td rowspan="2" colspan="3" valign="top" width="159">
<p align="center"><b>Female</b></p>
</td>
</tr>
<tr>
<td colspan="5" valign="top" width="118">
<p align="center"><b>Gen/OBC</b></p>
</td>
<td colspan="5" valign="top" width="118">
<p align="center"><b>SC/ST</b></p>
</td>
<td colspan="4" valign="top" width="130">
<p align="center"><b>EBC</b></p>
</td>
</tr>
<tr>
<td colspan="3" valign="top" width="163">
<p align="center"><b>Height</b></p>
</td>
<td colspan="5" valign="top" width="118">
<p align="center"><?php echo $row1['mheightg'];?></p>
</td>
<td colspan="5" valign="top" width="118">
<p align="center"><?php echo $row1['mheightsc'];?></p>
</td>
<td colspan="4" valign="top" width="130">
<p align="center"><?php echo $row1['mheightebc'];?></p>
</td>
<td colspan="3" valign="top" width="159">
<p align="center"><?php echo $row1['fheight'];?></p>
</td>
</tr>
<tr>
<td colspan="3" valign="top" width="163">
<p align="center"><b>Chest</b></p>
</td>
<td colspan="5" valign="top" width="118">
<p align="center"><?php echo $row1['mchestg'];?></p>
</td>
<td colspan="5" valign="top" width="118">
<p align="center"><?php echo $row1['mchestsc'];?></p>
</td>
<td colspan="4" valign="top" width="130">
<p align="center"><?php echo $row1['mchestebc'];?></p>
</td>
<td colspan="3" valign="top" width="159">
<p align="center"><?php echo $row1['fchest'];?></p>
</td>
</tr>
<tr>
<td colspan="3" valign="top" width="163">
<p align="center"><b>Walking / Running</b></p>
</td>
<td colspan="14" valign="top" width="366">
<p align="center"><?php echo $row1['mwalk'];?></p>
</td>
<td colspan="3" valign="top" width="159">
<p align="center"><?php echo $row1['fwalk'];?></p>
</td>
</tr>
<?php if($row1['mhjump']==""| $row1['mhjump']==","){}else{ 
echo '<tr> <td colspan="3" valign="top" width="163"><p align="center"><b>High Jump</b></p>
</td>
<td colspan="14" valign="top" width="366">
<p align="center">'.$row1['mhjump'].'</p>
</td>';
}
if($row1['fhjump']==""| $row1['fhjump']==","){}else{ 
echo '<td colspan="3" valign="top" width="159">
<p align="center">'.$row1['fhjump'].'</p>
</td>
</tr>';
}
if($row1['mljump']==""| $row1['mljump']==","){}else{ 
  echo '<tr> <td colspan="3" valign="top" width="163"><p align="center"><b> Long Jump</b></p> 
  </td>
<td colspan="14" valign="top" width="366">
<p align="center">'.$row1['mljump'].'</p>
</td>';
}
if($row1['fljump']==""| $row1['fljump']==","){}else{ 
echo '<td colspan="3" valign="top" width="159">
<p align="center">'.$row1['fljump'].'</p>
</td>
</tr>';
}
if($row1['gfm']==""| $row1['gfm']==","){}else{ 
  echo '<tr> <td colspan="3" valign="top" width="163"><p align="center"><b> Gola Fek </b></p> 
  </td>
<td colspan="14" valign="top" width="366">
<p align="center">'.$row1['gfm'].'</p>
</td>';
}
if($row1['gff']==""| $row1['gff']==","){}else{ 
echo '<td colspan="3" valign="top" width="159">
<p align="center">'.$row1['gff'].'</p>
</td>
</tr>';
}
 if($row1['rm100']==""| $row1['rm100']==","){}else{ 
echo '<tr> <td colspan="3" valign="top" width="163"><p align="center"><b>100 Meter Race</b></p>
</td>
<td colspan="14" valign="top" width="366">
<p align="center">'.$row1['rm100'].'</p>
</td>';
}
if($row1['rf100']==""| $row1['rf100']==","){}else{ 
echo '<td colspan="3" valign="top" width="159">
<p align="center">'.$row1['rf100'].'</p>
</td>
</tr>';
}
if($row1['rm800']==""| $row1['rm800']==","){ }else{ 
echo '<tr> <td colspan="3" valign="top" width="163"><p align="center"><b>800 Meter Race</b></p>
</td>
<td colspan="14" valign="top" width="366">
<p align="center">'.$row1['rm800'].'</p>
</td>';
}
if($row1['rf800']==""| $row1['rf800']==","){}else{ 
echo '<td colspan="3" valign="top" width="159">
<p align="center">'.$row1['rf800'].'</p>
</td>
</tr>';
}
 if($row1['smput']==""| $row1['smput']==","){}else{ 
echo '<tr> <td colspan="3" valign="top" width="163"><p align="center"><b>Shot Put</b></p>
</td>
<td colspan="14" valign="top" width="366">
<p align="center">'.$row1['smput'].'</p>
</td>';
}
if($row1['sfput']==""| $row1['sfput']==","){}else{ 
echo '<td colspan="3" valign="top" width="159">
<p align="center">'.$row1['sfput'].'</p>
</td>
</tr>';
}

 } } if($sectorwise==0 | $sectorwise==""){}else{
 
  ?>
  <tr>
<td colspan="12" valign="top" width="765">
<h2 align="center"><span style="color: #008000;"><b>Sector Wise Vacancy Details</b></span></h2>
</td>
</tr>
<tr>
<td valign="top" width="269" colspan="4">
<p align="center"><b>Sector Name</b></p>
</td>
<td colspan="6" valign="top" width="236">
<p align="center"><b>Work Center</b></p>
</td>
<td valign="top" width="260" colspan="2">
<p align="center"><b>Total Post</b></p>
</td>
</tr>
<tr>
  <?php  $query1="select * from vacancy where jobid =$row->id limit 1";
$result1 = mysqli_query($conn,$query1);
  while($row1 = mysqli_fetch_assoc($result1)) {
   for($i=0;$i<$sectorwise;$i++){
    $sectorname= explode(',',$row1['sectorname']);
    $sector=explode('-', $sectorname[$i]); ?>
<td colspan="4" valign="top" width="269">
<p align="center"><?php echo $sector[0];?></p>
</td>
<td colspan="6" valign="top" width="236">
<p align="center"><?php echo $sector[1];?></p>
</td>
<td valign="top" width="260" colspan="2">
<p align="center"><?php $sectorpost=explode(',',$row1['sectorpost']); echo $sectorpost[$i];?></p>
</td>
</tr>
 <?php }} } ?>
<tr>
<td colspan="20" valign="top" width="687">
<p align="center"><span style="color: #008000;"><b>How to Fill Form</b></span></p>
<ul>
<li><?php echo $row3->board;?> Candidate Can Apply Between <b><?php $date= $row->startdate; echo date("d/m/Y", strtotime($date));?> to <?php $date= $row->lastdate; echo date("d/m/Y", strtotime($date));?></b></li>
<li>Candidate Read the Notification Before Apply the Recruitment Application Form in <?php echo $row->postname;?><?php echo $row1->postname;?></li>
<li>Kindly Check and College the All Document - Eligibility, ID Proof, Address Details, Basic Details.</li>
<li>Kindly Ready Scan Document Related to Recruitment Form - Photo, Sign, ID Proof, Etc.</li>
<li>Before Submit the Application Form Must Check the Preview and All Column Carefully.</li>
<li>If Candidate Required to Paying the Application Fee Must Submit. If You have Not the Required Application Fees Your Form is Not Completed.</li>
<li>Take A Print Out of Final Submitted Form.<b> </b></li>
</ul>
</td>
</tr>
<tr>
<td colspan="20" valign="top" width="687">
<p align="center"><span style="color: #ff00ff;"><b>Interested Candidates Can Read the Full Notification Before Apply Online.</b></span><b> </b></p>
</td>
</tr>
<tr>
<td colspan="20" valign="top" width="687">
<center> <script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt" type="41353eefa4fa59fe909863f6-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-9222595088627935" data-ad-slot="1698571817"></ins>
<script type="41353eefa4fa59fe909863f6-text/javascript">
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></center>
<!-- <p align="center"><span style="color: #008000;"><b>Download Mobile Apps for the Latest Updates</b></span><b> </b></p> -->
</td>
</tr>
<!-- <tr>
<td colspan="4" valign="top" width="198">
<p align="center"><b><a href="https://play.google.com/store/apps/details?id=com.app.app14f269771c01" target="_blank">Android Apps</a></b></p>
</td>
<td colspan="10" valign="top" width="215">
<p align="center"><b><a href="https://itunes.apple.com/us/app/sarkari-result/id1051363935?ls=1&amp;mt=8" target="_blank">Apple IOS Apps</a></b></p>
</td>
<td colspan="6" valign="top" width="274">
<p align="center"><b><a href="https://www.microsoft.com/en-us/store/apps/sarkari-result/9nblggh6cm69" target="_blank">Window Apps</a></b></p>
</td>
</tr> -->
<tr>
<td colspan="20" valign="top" width="687">
<h2 align="center"><span style="color: #008000;"><b>Some Useful Important Links</b></span><b></b></h2>
</td>
</tr>
<tr>
<td colspan="9" valign="top" width="310">
<h2 align="center"><span style="color: #ff00ff;"><b>Apply Online</b></span><b></b></h2>
</td>
<td colspan="11" valign="top" width="378">
  <?php $link=explode(',',$row->applyonline);
  if($link[1]==""){ ?>
    <h2 align="center"><a title="<?php echo $row->postname;?>" href="<?php echo $row->applyonline;?>" target="_blank"><b>Click Here</b></a></h2>
  <?php }else{?>
    <h2 align="center"><a title="<?php echo $row->postname;?>" href="<?php echo $link[0];?>" target="_blank"><b>Register |<a title="<?php echo $row->postname;?>" href="<?php echo $link[1];?>" target="_blank"> Login</b></a></h2>
  <?php }
  ?>
</td>
</tr>

<?php 
    $query3=mysqli_query($conn,"select * from syllabus where jobid=$id");
    $row4=mysqli_fetch_object($query3);
    if($row4->syllabus==""){}else{
    ?>
<tr>
<td colspan="9" valign="top" width="310">
<h2 align="center"><span style="color: #ff00ff;"><b>Download Syllabus</b></span><b> </b></h2>
</td>
<td colspan="11" valign="top" width="378">
<h2 align="center"><b><a title="Download Syllabus for <?php echo $row->postname;?> Post Syllabus in PDF" href="<?php echo $row4->syllabus;?>" target="_blank">Click Here</a></b></h2>
</td>
</tr>
<?php } 
    if($row5->answer_date==""){}else{
    ?>
<tr>
<td colspan="9" valign="top" width="310">
<h2 align="center"><span style="color: #ff00ff;"><b>Download Answer Key</b></span><b> </b></h2>
</td>
<td colspan="11" valign="top" width="378">
<h2 align="center"><b><a title="Download Answer Key for <?php echo $row->postname;?> Post Answer Key in PDF" href="<?php echo $row5->answerkey;?>" target="_blank">Click Here</a></b></h2>
</td>
</tr>
<?php }
 if($row6->resultdate=="" || $row6->resultdate=="0000-00-00"){} else{?>
<tr>
<td colspan="9" valign="top" width="310">
<h2 align="center"><span style="color: #ff00ff;"><b>Download Result</b></span><b> </b></h2>
</td>
<td colspan="11" valign="top" width="378">
  <?php $link=explode(',',$row6->resultlink);
  if($link[1]==""){ ?>
    <h2 align="center"><a title="<?php echo $row->postname;?>" href="<?php echo $row6->resultlink;?>" target="_blank"><b>Click Here</b></a></h2>
  <?php }else{?>
    <h2 align="center"><a title="<?php echo $row->postname;?>" href="<?php echo $link[0];?>" target="_blank"><b>Server 1 |<a title="<?php echo $row->postname;?>" href="<?php echo $link[1];?>" target="_blank"> Server 2</b></a></h2>
  <?php }?>
</td>
</tr>
<?php } 
 if($row7->admitdate=="" || $row7->admitdate=="0000-00-00"){} else{?>
<tr>
<td colspan="9" valign="top" width="310">
<h2 align="center"><span style="color: #ff00ff;"><b>Download AdmitCard</b></span><b> </b></h2>
</td>
<td colspan="11" valign="top" width="378">
<h2 align="center"><b><a title="Download AdmitCard for <?php echo $row->postname;?> Post AdmitCard in PDF" href="<?php echo $row7->admitcardlink;?>" target="_blank">Click Here</a></b></h2>
</td>
</tr>
<?php } 
?>
<tr>
<td colspan="9" valign="top" width="310">
<h2 align="center"><span style="color: #ff00ff;"><b>Download Notification</b></span><b> </b></h2>
</td>
<td colspan="11" valign="top" width="378">
<h2 align="center"><b><a title="Download Notification for <?php echo $row->postname;?> Post Notification in PDF" href="<?php echo $row->notification;?>" target="_blank">Click Here</a></b></h2>
</td>
</tr>
<?php if($row->video==""){} else{ ?>
<tr>
<td colspan="9" valign="top" width="310">
<h2 align="center"><span style="color: #ff00ff;"><b>How to Fill Form</b></span><b></b></h2>
</td>
<td colspan="11" valign="top" width="378">
<h2 align="center"><b><a title="<?php echo $row->postname;?>" href="<?php echo $row->video;?>" target="_blank">Click Here </a></b></h2>
</td>
</tr>
<?php } ?>
<tr>
<td colspan="9" valign="top" width="310">
<h2 align="center"><span style="color: #ff00ff;"><b>Official Website</b></span><b></b></h2>
</td>
<td colspan="11" valign="top" width="378">
<h2 align="center"><b><a title="<?php echo $row->postname;?>" href="<?php echo $row->website;?>" target="_blank">Click Here </a></b></h2>
</td>
</tr>
</tbody>
</table>
<table width="687" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
 <tr>
    <td colspan="20" valign="top" width="687">
      <h2 align="center">
      <span style="color: #008000;"><b style="font-weight: bold;">WHATSAPP GROUP LINK</b></span> </h2></td>
    
  </tr>
  <tr>
    <td colspan="20" valign="top" width="687">
      <h2 align="center">
      <span style="color: #008000;"><b style="font-weight: bold;">Job Wise Group</b></span> </h2></td>
    
  </tr>
  <?php $query7=mysqli_query($conn,"select * from whatsapp where category='job' and status=0 order by name asc");
          while($row8=mysqli_fetch_assoc($query7)){
              $link=explode(',', $row8['link']);
               if($j%3==0){
                    echo '<tr>';
                }
                $j++;
              ?>   

        <td><h4 style="font-size: 19px;"><span style="color: #008080;"><strong style="font-weight: bold;">&nbsp;&nbsp;<?php echo $row8['name'];?></strong></span></h4></td>
        <?php foreach($link as $i =>$key) {
          $i >0;
          ?>
            <td><h4 style="font-size: 19px;"><span style="color: #4db2ec;"><strong style="font-weight: bold;"><a href="<?php echo $key;?>">Group <?php echo $i+1;?></a> </strong></span></h4></td>
          <?php }
                 if($j%3==0){
                    echo '</tr>';
                    $j = 0;
                }
               } 
             ?>
<tr>
    <td colspan="20" valign="top" width="687">
      <h2 align="center">
      <span style="color: #008000;"><b style="font-weight: bold;">State Wise Group</b></span> </h2></td>
    
  </tr>
           <?php $query8=mysqli_query($conn,"select * from whatsapp where category='state' and status=0 order by name asc");
          while($row9=mysqli_fetch_assoc($query8)){
              $link=explode(',', $row9['link']);
                if($j%3==0){
                    echo '<tr>';
                }
                $j++;
              ?>   
        <td><h4 style="font-size: 19px;"><span style="color: #008080;"><strong style="font-weight: bold;">&nbsp;&nbsp;<?php echo $row9['name'];?></strong></span></h4></td>
        <?php foreach($link as $i =>$key) {
          $i >0;
          ?>
            <td><h4 style="font-size: 19px;"><span style="color: #4db2ec;"><strong style="font-weight: bold;"><a href="<?php echo $key;?>">Group <?php echo $i+1;?></a> </strong></span></h4></td>
          <?php }
                if($j%3==0){
                    echo '</tr>';
                    $j = 0;
                }
               } 
            ?>
  
  </table>
&nbsp;
</div>
</td>
<td>
<div>
<iframe src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/sarkarinaukriupdate9&amp;width=292&amp;height=170&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=false" scrolling="no" frameborder="1" style="border:1px; overflow:hidden; width:232px; height:258px" allowTransparency="true"></iframe>
</div>
<div>
<iframe id="webbuttonwidget" class="center" file="webbuttonwidget" src="https://telegrambutton.com/webbuttonwidget.php?chat_id=Sarkarinaukri01/1&showchatid=true&showmembercount=true&showmembercount=true&color=&pulse=false&textcolor=white&shadowval=&textval=VIEW IN TELEGRAM" border="1" style="border:20px;height: 125px;" width="240px"></iframe>

</div>
<?php if($row->video==""){}else{?>
<div>
  <iframe width="292" height="170" src="<?php echo $row->video;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"  allowfullscreen></iframe>
  </div>
<?php } ?>
<div>
<script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt" type="41353eefa4fa59fe909863f6-text/javascript"></script>

<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9222595088627935" data-ad-slot="6017499547" data-ad-format="auto" data-full-width-responsive="true"></ins>
<script type="41353eefa4fa59fe909863f6-text/javascript">
     (adsbygoogle = window.adsbygoogle || []).push({});
</script> </div>
</td>
</tr>
</table>

</div>
<div id="footer" align="center">
  
<tr>
<td align="center" width="100%">
<div id="footer" align="center">
<script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt" type="41353eefa4fa59fe909863f6-text/javascript"></script>
<ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed" data-ad-client="ca-pub-9222595088627935" data-ad-slot="1105930124"></ins>
<script type="41353eefa4fa59fe909863f6-text/javascript">
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script type="41353eefa4fa59fe909863f6-text/javascript">
var infolinks_pid = 295107;
var infolinks_wsid = 2;
</script>
<script type="41353eefa4fa59fe909863f6-text/javascript" src="../../resources.infolinks.com/js/infolinks_main.js"></script>
<div id="copy"> © Copyright 2020-2021 at www.sarkarinaukrigyan.com
<br />For advertising in this website contact us naukrigyansarkari@gmail.com</a><br><br></div></br>
<div align="center" style="margin-bottom:10px"><font size="-1" color="#FF0000"><b>Disclaimer : </b>The Examination Results / Marks published in this Website is only for the immediate Information to the Examinees an does not to be a constitute to be a Legal Document. While all efforts have been made to make the Information available on this Website as Authentic as possible. We are not responsible for any Inadvertent Error that may have crept in the Examination Results / Marks being published in this Website nad for any loss to anybody or anything caused by any Shortcoming, Defect or Inaccuracy of the Information on this Website.</font></div>
</div>
</td>
</tr>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="41353eefa4fa59fe909863f6-|49" defer=""></script></body>

</html>