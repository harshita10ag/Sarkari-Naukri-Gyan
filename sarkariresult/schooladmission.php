<?php include('database.php');
$id=$_REQUEST["id"];
$query=mysqli_query($conn,"select * from admission where id=$id");
$row=mysqli_fetch_object($query);
?>
<html>
<head>
<title>
<?php echo $row->postname;?></TITLE>

<meta name="description" content="Apply Online <?php echo $row->postname;?> Various Schools in India, Age Limit, How to Apply Online." />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="content-language" content="en" />
<link rel="canonical" href="https://sarkarinaukrigyan.com/schooladmission.php">
<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
<link rel="icon" sizes="192x192" href="/icon.png">
<link rel="shortcut icon" href="favicon.ico" />
<script type="91ca2617d3e8f2e77c95acf5-text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73415672-1', 'auto');
  ga('send', 'pageview');

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
<div id="header" onClick="if (!window.__cfRLUnblockHandlers) return false; " style="cursor: pointer;" data-cf-modified-91ca2617d3e8f2e77c95acf5-="">
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
<a href="index.php" class="parent">
<span>Home</span>
</a>
</li>
<li>
<a href="result.php" class="parent">
<span>Result</span>
</a>
</li>
<li>
<a href="admitcard.php" class="parent">
<span>Admit Card</span>
</a>
</li>
<li>
<a href="latestjob.php" class="parent">
<span>Latest Jobs</span>
</a>
</li>
<li>
<a href="syllabus.php" class="parent">
<span>Syllabus</span>
</a>
</li>
<li>
<a href="answerkey.php" class="parent">
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
<script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt" type="91ca2617d3e8f2e77c95acf5-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-9222595088627935" data-ad-slot="8266234849"></ins>
<script type="91ca2617d3e8f2e77c95acf5-text/javascript">
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
<td valign="top" align="left" style="font-weight:bold; color:#FF0033" >Post Date :</td>
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
<td valign="top" align="left"><?php echo $row->sinfo;?> </td>
</tr>
</table>
<!-- <center> <script src="../../images.dmca.com/Badges/DMCABadgeHelper.min.js" type="91ca2617d3e8f2e77c95acf5-text/javascript"></script>
<a href="https://www.dmca.com/Protection/Status.aspx?ID=c81d92e5-9e14-4471-b080-8d86f5167345" title="DMCA.com Protection Status" class="dmca-badge"> <img src="../../images.dmca.com/Badges/_dmca_premi_badge_403f5.png?ID=c81d92e5-9e14-4471-b080-8d86f5167345" alt="DMCA.com Protection Status" /></a></center> -->
</h2>
<table border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td colspan="5" valign="top" width="616">
<h1 align="center"><span style="color: #ff00ff;"><b><?php echo $row->postname;?></b></span></h1>
</td>
</tr>
<tr>
<td colspan="5" valign="top" width="616">
<p align="center"><span style="color: #ff00ff;"><span style="color: #008000;"><b><?php echo $row->fname;?></b></span><b></b></span></p>
<p align="center"><span style="color: #ff00ff;"><b>Short Details of Notification</b><b></b></span></p>
<p align="center"><span style="color: #ff0000;"><b><a title="Apply Online <?php echo $row->postname;?>" href="index.php" target="_blank"><span style="color: #ff0000;">WWW.SARKARINAUKRIGYAN.COM</span></a></b></span><b></b></p>
</td>
</tr>
<tr>
<td colspan="3" valign="top" width="309">
<p align="center"><span style="color: #008000;"><b>Important Dates</b></span><b></b></p>
<ul>
<li>Application Begin : <b><?php $date= $row->startdate; echo date("d/m/Y", strtotime($date));?></b></li>
<li>Last Date for Apply Online : <b><span style="color: #ff0000;"><?php $date= $row->lastdate; echo date("d/m/Y", strtotime($date));?></span> </b></li>
<?php if($row->sdate==""){}else{?>
<li>Selected Candidates List Available <b>: <?php $date= $row->sdate; echo date("d/m/Y", strtotime($date));?></b></li>
<?php } if($row->complete==""){}else{ ?>
  <li>Last Date Complete Form <b>: <?php echo $row->complete;?></b></li>
<?php } if($row->hard==""){}else{  ?>
<li>Last Date Submit Hard Copy to Institution <b>: <?php echo $row->hard; ?></b></li>
<?php } if($row->districtdate==""){}else{
  echo "<li>Change Exam Center Last Date <b>: $row->districtdate </b></li>";
} if($row->examdate==""){}else{
  echo "<li>Exam Date Online <b>: $row->examdate</b></li>";
}if($row->admit==""){}else{
echo "<li>Admit Card Available <b>: $row->admit</b></li>";
} if($row->result==""){}else{
  echo "<li>Result Available <b>: $row->result</b></li>";
}
 ?>




</ul>
</td>

<td colspan="2" valign="top" width="307">
<p align="center"><span style="color: #008000;"><b>Application Fee</b></span><b></b></p>
<ul>
<li>General / OBC : <b><?php echo $row->general;?>/-.</b></li>
<li>SC / ST / PH / Female : <b><?php echo $row->scst;?>/-</b></li>
<?php if($row->general==0 && $row->scst==0){?>
<li>No Application Fee For the All Category Candidates in <?php echo $row->postname;?> Eligible Candidates</li>
<?php } ?>
 <li>Can Only Filled the Online Application Form and Submit for the Registered School.</li>
</ul>
</td>
</tr>
<?php  if($row->maxage!="" | $row->minage!=""){?>
<tr>
<td colspan="5" valign="top" width="616">
<p align="center"><span style="color: #008000;"><b><?php echo $row->postname;?> Age Limit <!-- as on 31/03/2020 (Eligibility) -->
</b></span></p>
<ul>
  <?php if($row->minage==""){}else{?>
<li>Minimum Age : <?php echo $row->minage;?> Years.</li>
<?php } if($row->maxage==""){}else{?>
<li>Maximum Age : <?php echo $row->maxage;?> Years.</li>
<?php } ?>
<!-- <li><b>Note</b> If Candidates Date of Birth is <b>01 April</b> <?php echo $row->fname;?> Also Consider the Following Candidates to Admission Process <?php  echo date('Y').'-'.date('Y', strtotime('+1 years'));?>. <strong>
</strong></li> -->
</ul>
</td>
</tr>
<?php }else{} ?>
<?php if($row->courseav==""){ }else{?>
<tr>
<td colspan="3" valign="top" width="309">
<p align="center"><span style="color: #008000;"><b>Course Available
</b></span></p>
<ul>
<li><?php echo $row->courseav;?></li>
</ul>
</td>
<?php }  if($row->eligibility==""){} else{
if($row->courseav==""){echo '<tr><td colspan="8" valign="top" width="309">';}else{
echo '<td colspan="2" valign="top" width="307">';}?>
<p align="center"><span style="color: #008000;"><b>Eligibility
</b></span></p>
<ul>
<li><?php echo $row->eligibility;?></li>
</ul>
</td>
</tr>
<?php } if($row->document==""){}else{?>
<tr>
<td colspan="5" valign="top" width="616">
<p align="center"><span style="color: #008000;"><b>Document Required Fresh Candidates
</b></span></p>
<ul>
<li><?php echo $row->document;?></li>
</ul>
</td>
</tr>
<?php }?>

<tr>
<td colspan="5" valign="top" width="616">
<p align="center"><span style="color: #008000;"><b>How to Filled the Application Form</b></span><b></b></p>
<ul>
<li>Aadhar Card is Compulsory in <?php echo $row->fname;?> Admission <?php  echo date('Y').'-'.date('Y', strtotime('+1 years'));?>.</li>
<li><b>Step 1 :</b> Candidates Must be Read the Detailed Notification Before Apply Online Form in Any Class</li>
<li><b>Step 2 :</b> Click on the Apply Online Link and Choose Your Apply School, Enter Your All Required Details</li>
<li><b>Step 3 :</b> Uploaded the All Required Documents and Photo of Candidates and Parents</li>
<li><b>Step 4 :</b> Review Your All Details Before Submit the Online Application Form</li>
<li><b>Step 5 :</b> Take a Print out of Online Application Form and Wait for the Announced Merit List</li>
</ul>
</td>
</tr>
<tr>
<td colspan="5" valign="top" width="616">
<p align="center"><span style="color: #ff00ff;"><b>Interested Candidates Can Read the General Instruction and Notification Before Apply Online.</b><b></b></span></p>
</td>
</tr>
<tr>
<td colspan="5" valign="top" width="616">
<center> <script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt" type="91ca2617d3e8f2e77c95acf5-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-9222595088627935" data-ad-slot="1698571817"></ins>
<script type="91ca2617d3e8f2e77c95acf5-text/javascript">
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></center>
<!-- <p align="center"><span style="color: #008000;"><b>Download SarkariResult.Com Official Mobile Apps</b></span><b></b></p> -->
</td>
</tr>
<!-- <tr>
<td valign="top" width="221">
<p align="center"><b><a href="https://play.google.com/store/apps/details?id=com.app.app14f269771c01" target="_blank">Android Apps</a></b></p>
</td>
<td colspan="3" valign="top" width="199">
<p align="center"><b><a href="https://itunes.apple.com/us/app/sarkari-result/id1051363935?ls=1&amp;mt=8" target="_blank">Apple IOS Apps</a></b></p>
</td>
<td valign="top" width="196">
<p align="center"><b><a href="https://www.microsoft.com/en-us/store/p/sarkari-result/9nblggh6cm69" target="_blank">Window Apps</a></b></p>
</td>
</tr> -->
<tr>
<td colspan="5" valign="top" width="616">
<h2 align="center"><span style="color: #008000;"><b>Some Useful Important Links</b></span><b></b></h2>
</td>
</tr>
<tr>
<td colspan="2" valign="top" width="307">
<h2 align="center"><span style="color: #ff00ff;"><b>Apply Online</b></span><b></b></h2>
</td>
<td colspan="3" valign="top" width="309">
  <?php $link=explode(',',$row->apply);
  if($link[1]==""){ ?>
    <h2 align="center"><a title="<?php echo $row->postname;?>" href="<?php echo $row->apply;?>" target="_blank"><b>Click Here</b></a></h2>
  <?php }else{?>
    <h2 align="center"><a title="<?php echo $row->postname;?>" href="<?php echo $link[0];?>" target="_blank"><b>Registration |<a title="<?php echo $row->postname;?>" href="<?php echo $link[1];?>" target="_blank"> Login</b></a></h2>
  <?php }
  ?>
</td>
</tr>
<?php if($row->resultlink==""){}else{?>
  <tr>
    <td colspan="2" valign="top" width="307">
      <h2 align="center"><span style="color: #ff00ff;"><b>Download Result</b></span><b></b></h2>
</td>
<td colspan="3" valign="top" width="309">
<?php $link=explode(',',$row->resultlink);
  if($link[1]==""){ ?>
    <h2 align="center"><a title="<?php echo $row->postname;?>" href="<?php echo $row->resultlink;?>" target="_blank"><b>Click Here</b></a></h2>
  <?php }else{?>
    <h2 align="center"><a title="<?php echo $row->postname;?>" href="<?php echo $link[0];?>" target="_blank"><b>Server 1 |<a title="<?php echo $row->postname;?>" href="<?php echo $link[1];?>" target="_blank"> Server 2</b></a></h2>
  <?php } 
  ?>
</td>
  </tr>
<?php } 
if($row->resultvideo==""){}else{ ?>
<tr>
<td colspan="2" valign="top" width="307">
<h2 align="center"><span style="color: #ff00ff;"><b>How to Check result (Video Hindi)</b></span><b></b></h2>
</td>
<td colspan="3" valign="top" width="309">
<h2 align="center"><b><a title="<?php echo $row->postname;?> Kaise Dekhe, How to check result in <?php echo $row->postname;?>" href="<?php echo $row->resultvideo;?>" target="_blank">Click Here</a></b></h2>
</td>
</tr>
<?php } 
if($row->answerkey==""){}else{ ?>
<tr>

<td colspan="2" valign="top" width="307">
<h2 align="center"><span style="color: #ff00ff;"><b>Download Answer Key</b></span><b></b></h2>
</td>
<td colspan="3" valign="top" width="309">
<h2 align="center"><b><a title="<?php echo $row->postname;?>" href="<?php echo $row->answerkey;?>" target="_blank">Click Here</a></b></h2>
</td>
</tr>
 <?php }
 if($row->admitcard==""){}else{?>
  <tr>
<td colspan="2" valign="top" width="307">
<h2 align="center"><span style="color: #ff00ff;"><b>Download Admit Card</b></span><b></b></h2>
</td>
<td colspan="3" valign="top" width="309">
<h2 align="center"><b><a title="<?php echo $row->postname;?>" href="<?php echo $row->admitcard;?>" target="_blank">Click Here</a></b></h2>
</td>
</tr>
<?php } 
if($row->admitvideo==""){}else{?>
  <tr>
<td colspan="2" valign="top" width="307">
<h2 align="center"><span style="color: #ff00ff;"><b>How to download Admit Card</b></span><b></b></h2>
</td>
<td colspan="3" valign="top" width="309">
<h2 align="center"><b><a title="<?php echo $row->postname;?>" href="<?php echo $row->admitvideo;?>" target="_blank">Click Here</a></b></h2>
</td>
</tr>
<?php } 
if($row->districtlinkvideo==""){}else{?>
  <tr>
<td colspan="2" valign="top" width="307">
<h2 align="center"><span style="color: #ff00ff;"><b>For Change Center</b></span><b></b></h2>
</td>
<td colspan="3" valign="top" width="309">
<h2 align="center"><b><a title="<?php echo $row->postname;?>" href="<?php echo $row->districtlinkvideo;?>" target="_blank">Click Here</a></b></h2>
</td>
</tr>
<?php } 
  if($row->ffvideo==""){}else{ ?>
<tr>
<td colspan="2" valign="top" width="307">
<h2 align="center"><span style="color: #ff00ff;"><b>How to Fill Form (Video Hindi)</b></span><b></b></h2>
</td>
<td colspan="3" valign="top" width="309">
<h2 align="center"><b><a title="<?php echo $row->postname;?> Kaise Bhare, How to Fill Form in <?php echo $row->postname;?>" href="<?php echo $row->ffvideo;?>" target="_blank">Click Here</a></b></h2>
</td>
</tr>
<?php } if($row->notification==""){}else{?>
<tr>
<td colspan="2" valign="top" width="307">
<h2 align="center"><span style="color: #ff00ff;"><b>Download Notification</b></span><b></b></h2>
</td>
<td colspan="3" valign="top" width="309">
<h2 align="center"><b><a title="<?php echo $row->postname;?> Admission Guidlines, Procedure, How to Apply, Affidavit Format Download, Performa, Important Dates and More" href="<?php echo $row->notification;?>" target="_blank">Click Here</a></b></h2>
</td>
</tr>
<?php } ?>
<tr>
<td colspan="2" valign="top" width="307">
<h2 align="center"><span style="color: #ff00ff;"><b>Official Website</b></span><b></b></h2>
</td>
<td colspan="3" valign="top" width="309">
<h2 align="center"><b><a title="<?php echo $row->fname;?> Official Website 2020" href="<?php echo $row->official;?>" target="_blank">Click Here</a></b></h2>
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
<div>
<script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt" type="91ca2617d3e8f2e77c95acf5-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:160px;height:600px" data-ad-client="ca-pub-9222595088627935" data-ad-slot="8951738566"></ins>
<script type="91ca2617d3e8f2e77c95acf5-text/javascript">
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<script type="91ca2617d3e8f2e77c95acf5-text/javascript" src="../../pagead2.googlesyndication.com/pagead/f.txt">
</script></center>
<script type="91ca2617d3e8f2e77c95acf5-text/javascript">
var infolinks_pid = 295107;
var infolinks_wsid = 2;
</script>
<script type="91ca2617d3e8f2e77c95acf5-text/javascript" src="../../resources.infolinks.com/js/infolinks_main.js"></script>
</td>
</tr>
</table>
</div>
<div id="footer" align="center">
<tr>
<td align="center" width="100%">
<div id="footer" align="center">
<script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt" type="91ca2617d3e8f2e77c95acf5-text/javascript"></script>
<ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed" data-ad-client="ca-pub-9222595088627935" data-ad-slot="1105930124"></ins>
<script type="91ca2617d3e8f2e77c95acf5-text/javascript">
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script type="91ca2617d3e8f2e77c95acf5-text/javascript">
var infolinks_pid = 295107;
var infolinks_wsid = 2;
</script>
<script type="91ca2617d3e8f2e77c95acf5-text/javascript" src="../../resources.infolinks.com/js/infolinks_main.js"></script>
<div id="copy"> © Copyright 2020-2021 at www.sarkarinaukrigyan.com
<br />For advertising in this website contact us sarkarinaukrigyan@gmail.com<br><br></div></br>
<!-- <a href="https://www.dmca.com/Protection/Status.aspx?ID=c81d92e5-9e14-4471-b080-8d86f5167345" title="DMCA"> <img src="../../images.dmca.com/Badges/dmca_protected_sml_120e03f5.png?ID=c81d92e5-9e14-4471-b080-8d86f5167345" alt="DMCA.com" /></a> -->
<div align="center" style="margin-bottom:10px"><font size="-1" color="#FF0000"><b>Disclaimer : </b>The Examination Results / Marks published in this Website is only for the immediate Information to the Examinees an does not to be a constitute to be a Legal Document. While all efforts have been made to make the Information available on this Website as Authentic as possible. We are not responsible for any Inadvertent Error that may have crept in the Examination Results / Marks being published in this Website nad for any loss to anybody or anything caused by any Shortcoming, Defect or Inaccuracy of the Information on this Website.</font></div>
</div>
</td>
</tr>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="91ca2617d3e8f2e77c95acf5-|49" defer=""></script></body>

</html>