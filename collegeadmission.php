<?php include('database.php');
$id=$_REQUEST['id'];
$query=mysqli_query($conn,"select * from admission where id=$id");
$row=mysqli_fetch_object($query);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>
<?php echo $row->postname;?> </title>
<meta name="description" content="Apply Online <?php echo $row->postname;?>. Check Notification, Merit List, Age Limit, Course List, Eligibile Candidate Apply Online.">
<meta http-equiv="content-language" content="en" />
<link rel="canonical" href="https://sarkarinaukrigyan.com/collegeadmission.php"> </head>
<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "EducationalOrganization",
"name": "Sarkarinaukrigyan,
"url": "https://www.sarkarinaukrigyan.com/"
}
</script>
<!-- <script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "HowTo", 
  "name": "Uttar Pradesh ITI SCVT VPPUP Online Form 2020",
  "description": "UPITI Admission 2020 Online Form - UP ITI Admissions.",
  "image": "https://www.sarkariresult.com/images/logo-new.png",
  "totalTime": "PT10M",
  "estimatedCost": {
    "@type": "MonetaryAmount",
    "currency": "INR",
    "value": ""
  },
  "step": [{
    "@type": "HowToStep",
    "text": "To fill the online application, click on the link given below.",
    "image": "https://www.sarkariresult.com/images/logo-new.png",
    "name": "Step : 1",
    "url": "https://www.sarkariresult.com/2020/up-iti-admission-2020.php"
  },{
    "@type": "HowToStep",
    "text": "Before the last date of online application, first fill the online application on this link.",
    "image": "https://www.sarkariresult.com/images/logo-new.png",
    "name": "Step : 2",
    "url": "https://www.sarkariresult.com/2020/up-iti-admission-2020.php"
  },{
    "@type": "HowToStep",
    "text": "Complete all the information sought in the online application, including your personal details, contact details, qualification related and other information, after that pay the application and complete your form.",
    "image": "https://www.sarkariresult.com/images/logo-new.png",
    "name": "Step : 3",
    "url": "https://www.sarkariresult.com/2020/up-iti-admission-2020.php"
  },{
    "@type": "HowToStep",
    "text": "After the completion of the online application, it must be printed out, if you are filling that application from mobile or you do not have a printer, then save the application in PDF or take a screen shot or take a photo of the form.",
    "image": "https://www.sarkariresult.com/images/logo-new.png",
    "name": "Step : 4",
    "url": "https://www.sarkariresult.com/2020/up-iti-admission-2020.php"
  },{
    "@type": "HowToStep",
    "text": "After the form is completed, now you continue to visit this page for the admit card / merit list / Result / Hall Ticket / Any new information.",
    "image": "https://www.sarkariresult.com/images/logo-new.png",
    "name": "Step : 5",
    "url": "https://www.sarkariresult.com/2020/up-iti-admission-2020.php"
  }]    
}
</script> -->
<!-- <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "When will the application for the Admission of UPITI 2020 start?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The application for Admission of SCVT UP ITI for Govt. and Private Institute starts from 30 July 2020 and the eligible candidates can fill it online."
    }
  },{
    "@type": "Question",
    "name": "What is the last date for online application of UP ITI Admission in 2020?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The last date for the Admission of 2020 online application in UPITI is 23 August 2020."
    }
  },{
    "@type": "Question",
    "name": "Admission of SCVT VPPUP in Government and Private ITI College. What is the age limit of 2020?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "In this Admission, the age of the age is Minimum 14 years, which will be Calculated from 01 August 2020."
    }
  },{
    "@type": "Question",
    "name": "What is the minimum qualification in UPITI Admission ? To apply online.",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The minimum qualification prescribed in this Admission is Class 8 OR Class 10."
    }
  },{
    "@type": "Question",
    "name": "What is the mode of Admission of UP I T I 2020  online or offline?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "UP ITI Admission 2020 application can be filled online only."
    }
  }]
}
</script> -->
</head>
<body style="background-color:#FFFFFF">
<meta name="viewport" content="width=device-width, initial-scale=0.3, maximum-scale=1">
<div align="center">
<div style="height:auto; width:1000px; margin:0">
<div id="header" onClick="if (!window.__cfRLUnblockHandlers) return false; " style="cursor: pointer;" data-cf-modified-338251fd663927f2aec18187-="">
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
<a href="https://www.sarkarinaukrigyan.com" class="parent" target="_blank">
<span>Home</span>
</a>
</li>
<li>
<a href="https://www.sarkarinaukrigyan.com/result.php" class="parent" target="_blank">
<span>Result</span>
</a>
</li>
<li>
<a href="https://www.sarkarinaukrigyan.com/admitcard.php" class="parent" target="_blank">
<span>Admit Card</span>
</a>
</li>
<li>
<a href="https://www.sarkarinaukrigyan.com/latestjob.php" class="parent" target="_blank">
<span>Latest Jobs</span>
</a>
</li>
<li>
<a href="https://www.sarkarinaukrigyan.com/syllabus.php" class="parent" target="_blank">
<span>Syllabus</span>
</a>
</li>
<li>
<a href="https://www.sarkarinaukrigyan.com/answerkey.php" class="parent" target="_blank">
<span>Answer Key</span>
</a>
</li>
<!-- <li>
<a href="http://play.google.com/store/apps/details?id=com.app.app14f269771c01" class="parent">
<span>Android App</span>
</a>
</li>
<li>
<a href="http://itunes.apple.com/us/app/sarkari-result/id1051363935?ls=1&amp;mt=8" class="parent">
<span>Apple IOS App</span>
</a>
</li>
<li>
<a href="http://www.microsoft.com/en-us/store/apps/sarkari-result/9nblggh6cm69" class="parent">
<span>Window App</span>
 </a>
</li> -->
</ul>
</div>
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="338251fd663927f2aec18187-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-9222595088627935" data-ad-slot="8266234849"></ins>
<script type="338251fd663927f2aec18187-text/javascript">
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
</style>
<table width="100%" align="center">
<tr valign="top">
<td>
<div align="left">
<table align="center" style="margin-left:10px">
<tr>
<td valign="top" align="left" style="font-weight:bold; color:#FF0033">Name of Post: </td>
<td valign="top" align="left"><h1><?php echo $row->postname;?></h1></td>
</tr>
<tr>
<td valign="top" align="left" style="font-weight:bold; color:#FF0033">Post Date : </td>
<td valign="top" align="left"><?php $datetime= $row->postdate; 
echo $datetime;?></td>
</tr>
<?php if($row->postupdate==""){} else{
?>
<tr>
<td valign="top" align="left" style="font-weight:bold; color:#FF0033" >Post Update Date :</td>
<td valign="top" align="left"><?php echo $datetime= $row->postupdate; ?></td>
</tr>
<?php }?>
<tr>
<td valign="top" align="left" style="font-weight:bold; color:#FF0033">Short Information : </td>
<td valign="top" align="left"><?php echo $row->sinfo;?></td>
</tr>
</table><!-- 
<center>
<script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js" type="338251fd663927f2aec18187-text/javascript"></script>
<a href="https://www.dmca.com/Protection/Status.aspx?ID=c81d92e5-9e14-4471-b080-8d86f5167345" title="DMCA.com Protection Status" class="dmca-badge">
<img src="//images.dmca.com/Badges/_dmca_premi_badge_4.png?ID=c81d92e5-9e14-4471-b080-8d86f5167345" alt="DMCA.com Protection Status" />
</a>
</center> -->
<table border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td colspan="8" valign="top" width="638">
<h2 align="center"><span style="color: #ff00ff;"><b><?php echo $row->postname;?>
</b></span></h2>
<h2 align="center"><span style="color: #008000;"><b><?php echo $row->cname;?>
</b></span></h2>
<h2 align="center"><span style="color: #ff00ff;"><b> Short Details of Notification</b></span></h2>
<h2 style="text-align: center;"><span style="color: #ff0000;"><a title="<?php echo $Row->postname?> through Sarkari Naukri Gyan" href="https://www.sarkarinaukrigyan.com/" target="_blank"><span style="color: #ff0000;"><strong>WWW.SARKARINAUKRIGYAN.COM</strong></span></a></span></h2>
</td>
</tr>
<tr>
<td colspan="5" valign="top" width="319">
<h2 align="center"><span style="color: #008000;"><b>Important Dates</b></span></h2>
<ul>
<li>Application Begin : <strong><?php $date= $row->startdate; echo date("d/m/Y", strtotime($date));?></strong></li>
<li><b>Last Date for Apply Online : <span style="color: #ff0000;"><?php $date= $row->lastdate; echo date("d/m/Y", strtotime($date));?></span></b></li>
<li>Last Date Pay Exam Fee :<strong> <?php $date= $row->payfee; echo date("d/m/Y", strtotime($date));?>
</strong></li>
 <?php if($row->merit=="" || $row->merit=="0000-00-00"){}else{
echo "<li>Merit List Issued : <strong>$row->merit</strong></li>";
} 
if($row->districtdate==""){}else{ echo "<li>Last Date Change Exam District :<strong>$row->districtdate</strong></li>";}
if($row->counselling=="" || $row->counselling=="0000-00-00"){}else{
echo "<li>Counseling Begin : <strong>$row->counselling</strong></li>";
} 
if($row->examdate=="" || $row->examdate=="0000-00-00"){}else{
echo "<li>Exam Date : <strong>$row->examdate</strong></li>";
}
if($row->admit=="" || $row->admit=="0000-00-00"){}else{
echo "<li>AdmitCard Available : <strong>$row->admit</strong></li>";
}
if($row->result=="" || $row->result=="0000-00-00"){}else{
echo "<li>Result Available : <strong>$row->result</strong></li>";
}

if($row->cutoff==""){}else{ 
  for($i=0;$i<$row->nocutoff;$i++){
  ?>
  <li><?php echo $i+1; echo " Cut Off Issued : "?> <strong><?php $cutoff=split('@',$row->ncutoff); if($cutoff[$i]=="0000-00-00" || $cutoff==""){echo "Notified Soon";}else{echo date('d/m/y',strtotime($cutoff[$i]));}?></strong><b> </b></li>
<?php } } ?>
</ul>
</td>
<td colspan="3" valign="top" width="319">
<h2 align="center"><span style="color: #008000;"><b>Application Fee</b></span></h2>
<ul>
<li>General / OBC : <strong><?php echo $row->general;?></strong>/-</li>
<li>SC / ST : <strong><?php echo $row->scst;?></strong>/-</li>
<?php if($row->lgeneral=="" || $row->lscst==""){}else{?>
  <li><b>With Late Fees </b></li>
<li>General / OBC : <strong><?php echo $row->lgeneral;?></strong>/-</li>
<li>SC / ST : <strong><?php echo $row->lscst;?></strong>/-</li>
<?php } ?>
<li>Pay the Examination Fee Through ITI College Prepaid Coupon Mode or Through Debit Card, Credit Card or Net Banking<b> </b></li>
</ul>
</td>
</tr>
<tr>
  <?php if($row->eligibility==""){}else{?>
<td colspan="5" valign="top" width="319">
<h2 align="center"><span style="color: #008000;"><b>Eligibility</b></span></h2>
<ul>
<li><?php echo $row->eligibility;?></li>
</ul>
</td>
<?php } ?>
<?php if($row->minage=="" & $row->maxage==""){}else{ ?>
<td colspan="3" valign="top" width="319">
<h2 align="center"><span style="color: #008000;"><b>Age Limit as on 01/08/2020</b></span></h2>
<ul>
  <?php if($row->minage=="" || $row->minage=="0"){}else{?>

<li>Minimum Age : <strong><?php echo $row->minage;?></strong></li>
<?php } if($row->maxage=="" || $row->maxage=="0"){}else{?>
  <li>Maximum Age : <strong><?php echo $row->maxage;?></strong></li>
<?php } ?>
<li>Age Relaxation Extra as per Rules.</li>
</ul>
</td>
</tr>
<?php }
if($row->district==""){}else{?>
  <tr>
    <td colspan="8" valign="top" width="319">
<h2 align="center"><span style="color: #008000;"><b>Exam Center <?php echo $row->postname;?></b></span></h2>
<li><?php echo $row->district;?></li>
</td>
</tr>
<?php }


 if($row->part=="" ){}else{ ?>
  <tr>
<td colspan="8" valign="top" width="319">
<h2 align="center"><span style="color: #008000;"><b>Participating <?php echo $row->postname;?></b></span></h2>
<li><?php echo $row->part;?></li>
</td>
</tr>
<?php }  if($row->nocourse==""|| $row->nocourse==0){}else{?>
<tr>
<td colspan="8" valign="top" width="638">
<h2 align="center"><span style="color: #008000;"><b><?php echo $row->postname;?> &amp; Eligibility</b></span></h2>
</td>
</tr>
<tr>
  <?php  $duration1=explode('@', $row->duration); 
  $celigibility=explode('@', $row->celigible);
  $nocourse=$row->nocourse;
   if($duration1[0]=="" && $celigibility[0]==""){ echo  "<td valign='top' width='638' colspan='8'>"; 
}elseif($duration1[0]==""){echo '<td colspan="4" valign="top" width="318">';}
elseif($celigibility[0]==""){echo '<td colspan="4" valign="top" width="318">';}
elseif($celigibility[$nocourse-2]==""){echo '<td colspan="4" valign="top" width="318">';}
else{
 echo "<td valign='top' width='187'>";}?>
<p align="center"><b>Program Name</b></p>
</td>
<?php if($duration1[0]==""){}else{?>
<td colspan="3" valign="top" width="71">
<p align="center"><b>Duration</b></p>
</td>
<?php } if($celigibility[0]=="" && $celigibility[$nocourse-2]==""){}else{?>
<td colspan="4" valign="top" width="318">
<p align="center"><b>Eligibility</b></p>
</td>
<?php } ?>
</tr>
<?php for($i=$row->nocourse;$i>=0;$i--){ 
  $course=explode('@',$row->course);
  ?>
<tr>
 <?php if($duration1[0]=="" && $celigibility[0]==""){ echo "<td valign='top' width='638' colspan='8'>"; 
}elseif($duration1[0]==""){echo '<td colspan="4" valign="top" width="318">';}
elseif($celigibility[0]==""){echo '<td colspan="4" valign="top" width="318">';}
else{?>
<td valign="top" width="187">
<?php } ?>
<p align="center"><?php echo $course[$i];?></p>
</td>
<?php if($duration1[$i]==""| $duration1[$i]=='@'){}else{?>
<td colspan="3" valign="top" width="71">
<p align="center"><?php echo $duration1[$i];?> Year</p>
</td>
<?php } if($celigibility[$i]==""| $celigibility[$i]=='@'){}else{?>
<td colspan="4" valign="top" width="318"><?php echo $celigibility[$i];?></td>
<?php } ?>
</tr>
<?php } }?>

<tr>
<td colspan="8" valign="top" width="638">
<h2 align="center"><span style="color: #008000;"><b>For <?php echo $row->postname;?> &amp; Eligibility Details See Notification</b></span></h2>
</td>
</tr>
<tr>
<td colspan="8" valign="top" width="638">
<h2 align="center"><span style="color: #ff00ff;"><b>How to Fill <?php echo $row->postname;?></b></span></h2>
<ul>
<li><?php echo $row->cname;?>. Candidate Can Apply Online Between <b><?php echo date('d/m/yy',strtotime($row->startdate));?> to <?php echo date('d/m/yy',strtotime($row->lastdate)); ?></b></li>
<li>Candidate Read the Notification Before Apply the <?php echo $row->postname;?> in <?php echo $row->collgename; echo date('Y').'-'.date('Y', strtotime('+1 years'));?></li>
<li>Kindly Check and College the All Document - Eligibility, ID Proof, Address Details, Basic Details.</li>
<li>Kindly Ready Scan Document Related to Admission Form - Photo, Sign, ID Proof, Etc.</li>
<li>Before Submit the Application Form Must Check the Preview and All Column Carefully.</li>
<li>If Candidate Are Required to Paying the Application Fee Must Pay and Complete Your Form</li>
<li>Take A Print Out of Final Submitted Form.</li>
<li>Candidate Can Check This Page on Regularly Bases for Merit List, Re Choice Filling and More Details.</li>
</ul>
</td>
</tr>
<tr>
<td colspan="8" valign="top" width="638">
<h2 align="center"><span style="color: #ff00ff;"><b>Interested Candidates Can Read the Full Notification Before Apply Online</b></span></h2>
</td>
</tr>
<tr>
<td colspan="8" valign="top" width="638">
<center> <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="338251fd663927f2aec18187-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-9222595088627935" data-ad-slot="1698571817"></ins>
<script type="338251fd663927f2aec18187-text/javascript">
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></center>
<!-- <h1 align="center"><span style="color: #008000;"><b>Download Sarkari Result Official Mobile Apps</b></span></h1> -->
</td>
</tr>
<!-- <tr>
<td colspan="2" valign="top" width="188">
<h2 align="center"><a href="https://play.google.com/store/apps/details?id=com.app.app14f269771c01" target="_blank"><b>Android Apps</b></a></h2>
</td>
<td colspan="5" valign="top" width="246">
<h2 align="center"><a href="https://itunes.apple.com/us/app/sarkari-result/id1051363935?ls=1&amp;mt=8" target="_blank"><b>Apple IOS Apps</b></a></h2>
</td>
<td valign="top" width="204">
<h2 align="center"><a href="https://www.microsoft.com/en-us/store/apps/sarkari-result/9nblggh6cm69" target="_blank"><b>Window Apps</b></a></h2>
</td>
</tr> -->
<tr>
<td colspan="8" valign="top" width="638">
<h1 align="center"><span style="color: #008000;"><b>Some Useful Important Links</b></span></h1>
</td>
</tr>
<tr>
<td colspan="4" valign="top" width="318">
<h1 align="center"><span style="color: #ff00ff;"><b>Apply Online</b></span></h1>
</td>
<td colspan="4" valign="top" width="320">
  <?php $link=explode(',',$row->apply);
  if($link[1]==""){ ?>
    <h1 align="center"><a title="<?php echo $row->postname;?>" href="<?php echo $row->apply;?>" target="_blank"><b>Click Here</b></a></h1>
  <?php }else{?>
    <h1 align="center"><a title="<?php echo $row->postname;?>" href="<?php echo $link[0];?>" target="_blank"><b>Register |<a title="<?php echo $row->postname;?>" href="<?php echo $link[1];?>" target="_blank"> Login</b></a></h1>
  <?php }
  ?>

</td>
</tr>
<?php if($row->resultlink==""){}else{?>
<tr>
<td colspan="4" valign="top" width="318">
<h1 align="center"><span style="color: #ff00ff;"><b>Download Result</b></span></h1>
</td>
<td colspan="4" valign="top" width="320">
  <?php $link=explode(',',$row->resultlink);
  if($link[1]==""){ ?>
    <h1 align="center"><a title="<?php echo $row->postname;?>" href="<?php echo $row->resultlink;?>" target="_blank"><b>Click Here</b></a></h1>
  <?php }else{?>
    <h1 align="center"><a title="<?php echo $row->postname;?>" href="<?php echo $link[0];?>" target="_blank"><b>Server 1 |<a title="<?php echo $row->postname;?>" href="<?php echo $link[1];?>" target="_blank"> Server 2</b></a></h1>
  <?php }
  ?>

</td>
</tr>
<?php } if($row->answerkey==""){}else{?>
<tr>
<td colspan="4" valign="top" width="318">
<h1 align="center"><span style="color: #ff00ff;"><b>Download Answer Key</b></span></h1>
</td>
<td colspan="4" valign="top" width="320">
  <?php $link=explode(',',$row->answerkey);
  if($link[1]==""){ ?>
    <h1 align="center"><a title="<?php echo $row->postname;?>" href="<?php echo $row->answerkey;?>" target="_blank"><b>Click Here</b></a></h1>
  <?php }else{?>
    <h1 align="center"><a title="<?php echo $row->postname;?>" href="<?php echo $link[0];?>" target="_blank"><b>Paper 1 |<a title="<?php echo $row->postname;?>" href="<?php echo $link[1];?>" target="_blank"> Paper 2</b></a></h1>
  <?php }
  ?>

</td>
</tr>
<?php } 
if($row->resultvideo==""){}else{?> 
  <tr>
<td colspan="4" valign="top" width="318">
<h1 align="center"><span style="color: #ff00ff;"><b>How to Check Result (Video Hindi)</b></span></h1>
</td>
<td colspan="4" valign="top" width="320">
<h1 align="center"><a title="<?php echo $row->postname;?> Check Result " href="<?php echo $row->resultvideo;?>" target="_blank"><b>Click Here</b></a></h1>
</td>
</tr>
<?php } 
if($row->admitcard==""){}else{?> 
  <tr>
<td colspan="4" valign="top" width="318">
<h1 align="center"><span style="color: #ff00ff;"><b>Download Admit Card</b></span></h1>
</td>
<td colspan="4" valign="top" width="320">
<h1 align="center"><a title="<?php echo $row->postname;?>" href="<?php echo $row->admitcard;?>" target="_blank"><b>Click Here</b></a></h1>
</td>
</tr>
<?php } 
if($row->admitvideo==""){}else{?> 
  <tr>
<td colspan="4" valign="top" width="318">
<h1 align="center"><span style="color: #ff00ff;"><b>How to Download Admit Card (Video Hindi)</b></span></h1>
</td>
<td colspan="4" valign="top" width="320">
<h1 align="center"><a title="<?php echo $row->postname;?> Download Admit Card " href="<?php echo $row->admitvideo;?>" target="_blank"><b>Click Here</b></a></h1>
</td>
</tr>
<?php } 
if($row->districtlink==""){}else{?> 
  <tr>
<td colspan="4" valign="top" width="318">
<h1 align="center"><span style="color: #ff00ff;"><b>For Change Exam District</b></span></h1>
</td>
<td colspan="4" valign="top" width="320">
<h1 align="center"><a title="<?php echo $row->postname;?> " href="<?php echo $row->districtlinkvideo;?>" target="_blank"><b>Click Here</b></a></h1>
</td>
</tr>
<?php } 
if($row->districtlinkvideo==""){}else{?> 
  <tr>
<td colspan="4" valign="top" width="318">
<h1 align="center"><span style="color: #ff00ff;"><b>How to Exam Date Change District (Video Hindi)</b></span></h1>
</td>
<td colspan="4" valign="top" width="320">
<h1 align="center"><a title="<?php echo $row->postname;?>" href="<?php echo $row->districtlinkvideo;?>" target="_blank"><b>Click Here</b></a></h1>
</td>
</tr>
<?php } 

if($row->brochure==""){}else{?> 
  <tr>
<td colspan="4" valign="top" width="318">
<h1 align="center"><span style="color: #ff00ff;"><b>Download Information Brochure</b></span></h1>
</td>
<td colspan="4" valign="top" width="320">
<h1 align="center"><a title="<?php echo $row->postname;?> Brochure " href="<?php echo $row->brochure;?>" target="_blank"><b>Click Here</b></a></h1>
</td>
</tr>
<?php } ?>

<tr>
<td colspan="4" valign="top" width="318">
<h1 align="center"><span style="color: #ff00ff;"><b>Download Notification</b></span></h1>
</td>
<td colspan="4" valign="top" width="320">
<h1 align="center"><a title="Download <?php echo $row->postname;?> Notification, Guidlines<?php echo date('Y');?>" href="<?php echo $row->notification;?>" target="_blank"><b>Click Here</b></a></h1>
</td>
</tr>
<?php if($row->ffvideo==""){}else{?> 
  <tr>
<td colspan="4" valign="top" width="318">
<h1 align="center"><span style="color: #ff00ff;"><b>How to Fill Form</b></span></h1>
</td>
<td colspan="4" valign="top" width="320">
<h1 align="center"><a title="<?php echo $row->postname;?> Fill Form " href="<?php echo $row->ffvideo;?>" target="_blank"><b>Click Here</b></a></h1>
</td>
</tr>
<?php } ?>
<tr>
<td colspan="4" valign="top" width="318">
<h1 align="center"><span style="color: #ff00ff;"><b>Official Website</b></span></h1>
</td>
<td colspan="4" valign="top" width="320">
<h1 align="center"><a title="<?php echo $row->postname;?> Official Website " href="<?php echo $row->official;?>" target="_blank"><b>Click Here</b></a></h1>
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
</div>
</td>
<td>
<div>
<iframe src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/sarkarinaukriupdate9&amp;width=292&amp;height=170&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=false" scrolling="no" frameborder="1" style="border:1px; overflow:hidden; width:232px; height:258px" allowTransparency="true"></iframe>
</div>
<div>
<iframe id="webbuttonwidget" class="center" file="webbuttonwidget" src="https://telegrambutton.com/webbuttonwidget.php?chat_id=Sarkarinaukri01/1&showchatid=true&showmembercount=true&showmembercount=true&color=&pulse=false&textcolor=white&shadowval=&textval=VIEW IN TELEGRAM" border="1" style="border:20px;height: 125px;" width="240px"></iframe>

</div>
<div>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="338251fd663927f2aec18187-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:160px;height:600px" data-ad-client="ca-pub-9222595088627935" data-ad-slot="8449782611"></ins>
<script type="338251fd663927f2aec18187-text/javascript">
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<script type="338251fd663927f2aec18187-text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
<script type="338251fd663927f2aec18187-text/javascript">
var infolinks_pid = 295107;
var infolinks_wsid = 2;
</script>
<script type="338251fd663927f2aec18187-text/javascript" src="https://resources.infolinks.com/js/infolinks_main.js"></script>
</td>
</tr>
</table>
<div id="footer" align="center">
<tr>
<td align="center" width="100%">
<div id="footer" align="center">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="338251fd663927f2aec18187-text/javascript"></script>
<ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed" data-ad-client="ca-pub-9222595088627935" data-ad-slot="1105930124"></ins>
<script type="338251fd663927f2aec18187-text/javascript">
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script type="338251fd663927f2aec18187-text/javascript">
var infolinks_pid = 295107;
var infolinks_wsid = 2;
</script>
<script type="338251fd663927f2aec18187-text/javascript" src="//resources.infolinks.com/js/infolinks_main.js"></script>
<div id="copy"> © Copyright 2020-2021 at www.sarkarinaukrigyan.com
<br />For advertising in this website contact us sarkarinaukrigyan@gmail.com<br><br></div></br>
<!-- <a href="https://www.dmca.com/Protection/Status.aspx?ID=c81d92e5-9e14-4471-b080-8d86f5167345" title="DMCA"> <img src="https://images.dmca.com/Badges/dmca_protected_sml_120e.png?ID=c81d92e5-9e14-4471-b080-8d86f5167345" alt="DMCA.com" /></a> -->
<div align="center" style="margin-bottom:10px"><font size="-1" color="#FF0000"><b>Disclaimer : </b>The Examination Results / Marks published in this Website is only for the immediate Information to the Examinees an does not to be a constitute to be a Legal Document. While all efforts have been made to make the Information available on this Website as Authentic as possible. We are not responsible for any Inadvertent Error that may have crept in the Examination Results / Marks being published in this Website nad for any loss to anybody or anything caused by any Shortcoming, Defect or Inaccuracy of the Information on this Website.</font></div>
</div>
</td>
</tr>
</div>
<!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="338251fd663927f2aec18187-|49" defer=""></script> --></body>
</html>