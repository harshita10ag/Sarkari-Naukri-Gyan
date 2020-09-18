<?php include('database.php');
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from result where id=$id");
$row=mysqli_fetch_object($query);
$query2=mysqli_query($conn,"select * from schoolboard where id=$row->board");
$row2=mysqli_fetch_object($query);
?>
<html>
<head>
<title>
<?php echo $row->postname;?></TITLE>

<meta name="description" content="<?php echo $row->postname;?>" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="canonical" href="https://sarkarinaukrigyan.com/resultmanual.php">
<meta http-equiv="content-language" content="en" />
<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<script type="4b22f2532ed4366357160fd4-text/javascript">
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
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.sarkarinaukrigyan.com/<?php echo $row->postname;?>"
  },
  "headline": "<?php echo $row->postname;?>",
  "description": "<?php echo $row2->board;?> will release its high school class 10th Senior Secondary Re Evaluations, Re Checking, Scrutiny and Evaluated Answer books Online Application Form 2020",
  "image": "https://www.sarkarinaukrigyan.com/images/SARKARI NAUKRI GYAN.png",  
  "author": {
    "@type": "Organization",
    "name": "SARKARINAUKRIGYAN"
  },  
  "publisher": {
    "@type": "Organization",
    "name": "SARKARI NAUKRI GYAN",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.sarkarinaukrigyan.com/images/SARKARI NAUKRI GYAN.png"
    }
  },
  "datePublished": "2020-07-14",
  "dateModified": "2020-07-18"
}
</script>
<!-- <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "When will the result of CBSE Board 2020 be released?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The result of CBSE Board Annual Secondary Class 10 2020 will be released on 15 July 2020."
    }
  },{
    "@type": "Question",
    "name": "What is the official website of CBSE Board CBSEResults?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The official website of CBSE Board is www.cbse.nic.in"
    }
  },{
    "@type": "Question",
    "name": "How to check CBSE Board CBSE class 10th result 2020?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "You can check the result by going to this cbseresults.nic.in."
    }
  },{
    "@type": "Question",
    "name": "What was the percentage of the result of the previous year CBSE Annual Secondary board?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Previous years percentage of high school last year's percentage:
•	CBSE Board High School Exam 2018 : 86.70% Total Result.
•	CBSE  Board High School Exam 2019 : 91.10% Total Result."
    }
  },{
    "@type": "Question",
    "name": "How to download the  certificate and marksheet of the CBSE board?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "A few days after the CBSE Board 2020 results are released, you can Collect to Board Office OR Enrolled Schools OR Digilocker."
    }
  },{
    "@type": "Question",
    "name": "Is the marksheet of CBSE board valid for jobs and admission?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, this time the marksheet and certificate with will be issued in 2020 will be valid in both admission and recruitment."
    }
  }]
}
</script> -->
</head>
<body style="background-color:#FFFFFF">

<meta name="viewport" content="width=device-width, initial-scale=0.4, maximum-scale=1.5">
<div align="center">
<div style="height:auto; width:1000px; margin:0">
<div id="header" onClick="if (!window.__cfRLUnblockHandlers) return false; " style="cursor: pointer;" data-cf-modified-4b22f2532ed4366357160fd4-="">
<div id="head-title">
<div id="logo">
<img style="float:left" src="../images/SARKARI NAUKARI GYAN.png" alt="SarkariNaukriGyan" height="92px" width="90px">
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
<script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt" type="4b22f2532ed4366357160fd4-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-9222595088627935" data-ad-slot="8266234849"></ins>
<script type="4b22f2532ed4366357160fd4-text/javascript">
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
<td valign="top" align="left" style="font-weight:bold; color:#FF0033">Post Date :</td>
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
</table>
<!-- <center> <script src="../../images.dmca.com/Badges/DMCABadgeHelper.min.js" type="4b22f2532ed4366357160fd4-text/javascript"></script>
<a href="https://www.dmca.com/Protection/Status.aspx?ID=c81d92e5-9e14-4471-b080-8d86f5167345" title="DMCA.com Protection Status" class="dmca-badge"> <img src="../../images.dmca.com/Badges/_dmca_premi_badge_403f5.png?ID=c81d92e5-9e14-4471-b080-8d86f5167345" alt="DMCA.com Protection Status" /></a></center> -->
</h2>
<table border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td colspan="4" valign="top" width="757">
<h1 align="center"><span style="color: #ff00ff;"><b><?php echo $row->postname;?> </b></span><b></b></h1>
</td>
</tr>
<tr>
<td colspan="4" valign="top" width="757">
<p align="center"><span style="color: #008000;"><b><?php $query1=mysqli_query($conn,"select * from schoolboard where id=$row->board");
$row1=mysqli_fetch_object($query1);
echo $row1->board;
 $string = $row1->board;
$pieces = explode(' ', $string);
$last_word = array_pop($pieces);

$lastw= str_replace('(','', $last_word);
$board= str_replace(')','', $lastw);?>    
</b></span></p>
<p align="center"><span style="color: #ff00ff;"><b><?php echo $row1->board;?> Short Details of Notification</b></span></p>
<p align="center"><span style="color: #ff0000;"><b><a title="Sarkari Naukri Gyan Official Website Check CBSE Results 2020" href="https://www.sarkarinaukrigyan.com" target="_blank"><span style="color: #ff0000;">WWW.SARKARINAUKRIGYAN.COM</span></a></b></span></p>
</td>
</tr>
<tr>
<td colspan="2" valign="top" width="403">
<p align="center"><span style="color: #008000;"><b>Important Dates</b></span></p>
<ul>
 <?php if($row->xdate=="" || $row->xdate=="0000-00-00"){}else{?>
<li><?php echo $board;?> X<sup>th</sup> Exam Date : <b><?php echo $row->xdate;?></b></li>
<?php } if($row->xredate=="" || $row->xredate=="0000-00-00"){}else{?>
<li>Class X<sup>th</sup> Result Declared <b>: <?php echo $row->xredate;?></b> <b> </b></li>
<?php } if($row->xiidate=="" || $row->xiidate=="0000-00-00"){}else{?>
<li><?php echo $board;?> XII<sup>th</sup> Exam Date : <b><?php echo $row->xiidate;?></b></li>
<?php } if($row->xiiredate=="" || $row->xiiredate=="0000-00-00"){}else{?>
<li>Class XII<sup>th</sup> Result Declared <b>: <?php echo $row->xiiredate;?></b></li>
<?php } if($row->reeval=="" || $row->reeval=="0000-00-00"){}else{ ?>

<li>Re Evaluation Online Form <b>: <?php echo $row->reeval;?></b> <b> </b></li>
<?php } ?>
</ul>
</td>
<td colspan="2" valign="top" width="354">
<p align="center"><span style="color: #008000;"><b>Exam Conducted By</b></span></p>
<ul>
<li><?php echo $row->examcond;?></li>
</ul>
</td>
</tr>
<tr>
<td colspan="4" valign="top" width="757">
  <?php 
  $lastyears=explode(",",$row->lastyears);
  $percentage=explode(",", $row->percentage);
  $noofyears=$row->noofyears;
  ?>
<p align="center"><span style="color: #008000;"><b><?php echo $board;?> Board High School Last Year’s <?php echo $lastyears[0].'-'.$lastyears[$noofyears-1];?> Result Percentages</b></span><b> </b></p>
<ul>
  <?php
 
  for($i=0;$i<$noofyears;$i++){
    $arr=$lastyears[$i];
    $per=$percentage[$i];
   echo "<li> $board Board Class 10 Exam ".$arr." Result : <b>".$per. "Percentage</b></li>";
  }

  ?>

</ul>
</td>
</tr>
<tr>
<td colspan="4" valign="top" width="757">
<p align="center"><span style="color: #008000;"><b>How to Check <?php echo $board." Board Result ".date("Y");?></b></span></p>
<ul>
<li><?php echo $board;?> Board Class 10 Senior Secondary SSC Annual <span style="color: #000000;"><a title="Find More Board Exam Results 2020 at Sarkari Result" href="../boardall.html" target="_blank"><span style="color: #000000;">Board Exam Result</span></a> </span>Announced on <b><?php echo $row->xredate;?> </b>Candidate Can Check the Result After Declared.</li>
<li><b>Follow 3 Easy to Step to Check <?php echo $board;?> Class Xth High School Result 2020 : </b></li>
<li><b>Step 1 :</b> Directly go to Some Useful Important Link Section and Click to Download <?php echo $board;?> Board Class Xth Result 2020.</li>
<li><b>Step 2 :</b> After the new page opens, you have to select your Exam and put the Roll Number, School No., Center No., Date of Birth and Admit Card ID click on the Submit Button with the check and See Your Result.</li>
<li><b>Step 3 :</b> Now your <?php echo $board;?> Results Senior Secondary Exam 2020 result / Marks will open, now you can print it out or you can keep a photo of the internet result.</li>
<li><b>Some other important information:</b></li>
<li>Any <?php echo $row1->board." Result ".date("Y");?> candidate who is not satisfied with their marks / result can fill the form of Re Checking / Scrutiny / Compartment Exam Online Form Will be Available Soon.</li>
<li>Candidates who are not satisfied with their result, the result of a subject has not come to their estimation or the candidate has failed in any subject, then the compartment can apply for the examination.</li>
<li>This time you can also download the <?php echo $row1->board." Result ".date("Y");?> <b>Marksheet</b>, Migration and <b>Certificate</b> and from <b>DigiLocker</b>.</li>
</ul>
</td>
</tr>
<tr>
<td colspan="4" valign="top" width="757">
<center> <script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt" type="4b22f2532ed4366357160fd4-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-9222595088627935" data-ad-slot="1698571817"></ins>
<script type="4b22f2532ed4366357160fd4-text/javascript">
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></center>
<!-- <p align="center"><span style="color: #008000;"><b>Download Mobile Apps for the Latest Updates</b></span></p> -->
</td>
</tr>
<!-- <tr>
<td valign="top" width="267">
<p align="center"><b><a href="https://play.google.com/store/apps/details?id=com.app.app14f269771c01" target="_blank">Android Apps</a></b></p>
</td>
<td colspan="2" valign="top" width="185">
<p align="center"><b><a href="https://itunes.apple.com/us/app/sarkari-result/id1051363935?ls=1&amp;mt=8" target="_blank">Apple IOS Apps</a></b></p>
</td>
<td valign="top" width="305">
<p align="center"><b><a href="https://www.microsoft.com/en-us/store/apps/sarkari-result/9nblggh6cm69" target="_blank">Window Apps</a></b></p>
</td>
</tr> -->
<tr>
<td colspan="4" valign="top" width="757">
<h2 align="center"><span style="color: #008000;"><b>Some Useful Important Links</b></span><b> </b></h2>
</td>
</tr>
<?php if($row->applylink==""){}else{ ?>
<tr>
<td colspan="2" valign="top" width="403">
<h2 align="center"><span style="color: #ff00ff;"><b>Apply Online </b></span><b></b></h2>
</td>
<td colspan="2" valign="top" width="354">
<h2 align="center"><a title="<?php echo $row->postname;?>" href="<?php echo $row->applylink;?>" target="_blank"><b>Click Here</b></a></h2>
</td>
</tr>
<?php }if($row->ffvideo==""){}else{ ?>
<tr>
<td colspan="2" valign="top" width="403">
<h2 align="center"><span style="color: #ff00ff;"><b>How to Fill Form (Video Hindi) </b></span><b></b></h2>
</td>
<td colspan="2" valign="top" width="354">
<h2 align="center"><a title="<?php echo $row->postname;?>" href="<?php echo $row->ffvideo;?>" target="_blank"><b>Click Here</b></a></h2>
</td>
</tr>
<?php }if($row->notification==""){}else{ ?>
<tr>
<td colspan="2" valign="top" width="403">
<h2 align="center"><span style="color: #ff00ff;"><b>Download Notification </b></span><b></b></h2>
</td>
<td colspan="2" valign="top" width="354">
<h2 align="center"><a title="<?php echo $row->postname;?> Notification Download" href="<?php echo $row->notification;?>" target="_blank"><b>Click Here</b></a></h2>
</td>
</tr>
<?php }  if($row->xreslink==""){ echo 1;}else{ 
  $xreslink=explode(',', $row->xreslink);
  ?>
<tr>
<td colspan="2" valign="top" width="403">
<h2 align="center"><span style="color: #ff00ff;"><b>Download Class 10th Result </b></span><b></b></h2>
</td>
<td colspan="2" valign="top" width="354">
<h2 align="center"><a title="Check <?php echo $board;?> Xth Result" href="<?php echo $xreslink[0];?>" target="_blank"><b>Server I</b></a> | <a title="Check <?php echo $board;?> Xth Result" href="<?php echo $xreslink[1];?>" target="_blank"><b>Server II</b></a></h2>
</td>
</tr>
<?php } if($row->checkvideo==""){}else{ ?>
<tr>
<td colspan="2" valign="top" width="403">
<h2 align="center"><span style="color: #ff00ff;"><b>How to Check Result (Video Hindi) </b></span><b></b></h2>
</td>
<td colspan="2" valign="top" width="354">
<h2 align="center"><a title="How to Check <?php echo $board;?> Xth Result" href="<?php echo $row->checkvideo;?>" target="_blank"><b>Click Here</b></a></h2>
</td>
</tr>
<?php }  if($row->xiireslink==""){}else{?>
<tr>
<td colspan="2" valign="top" width="403">
<h2 align="center"><span style="color: #ff00ff;"><b>Download Class 12 Result <?php echo date('Y');?></b></span><b></b></h2>
</td>
<td colspan="2" valign="top" width="354">
  <h2 align="center"><a title="Check <?php echo $board;?> XIIth Result <?php echo date('Y');?> Direct Link to Check " href="<?php echo $xiireslink[0];?>" target="_blank"><b>Server I</b></a> | <a title="Check <?php echo $board;?> Xth Result" href="<?php echo $xiireslink[1];?>" target="_blank"><b>Server II</b></a></h2>

</td>
</tr>
<?php } if($row->official==""){}else{ ?>
<tr>
<td colspan="2" valign="top" width="403">
<h2 align="center"><span style="color: #ff00ff;"><b>Official Website</b></span><b></b></h2>
</td>
<td colspan="2" valign="top" width="354">
<h2 align="center"><b><a title="<?php echo $board;?> Official Website to Check the Result and Apply Scrutiny and Compartment Form <?php echo date('Y');?>" href="<?php echo $row->official;?>" target="_blank">Click Here </a></b></h2>
</td>
</tr>
<?php } ?>
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
<iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/sarkarinaukriupdate9&amp;width=292&amp;height=170&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=false" scrolling="no" frameborder="1" style="border:1px; overflow:hidden; width:232px; height:258px" allowTransparency="true"></iframe>
</div>
<div>
<script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt" type="4b22f2532ed4366357160fd4-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:160px;height:600px" data-ad-client="ca-pub-9222595088627935" data-ad-slot="8951738566"></ins>
<script type="4b22f2532ed4366357160fd4-text/javascript">
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<script type="4b22f2532ed4366357160fd4-text/javascript" src="../../pagead2.googlesyndication.com/pagead/f.txt">
</script></center>
<script type="4b22f2532ed4366357160fd4-text/javascript">
var infolinks_pid = 295107;
var infolinks_wsid = 2;
</script>
<script type="4b22f2532ed4366357160fd4-text/javascript" src="../../resources.infolinks.com/js/infolinks_main.js"></script>
</td>
</tr>
</table>



</div>
<div id="footer" align="center">
<tr>
<td align="center" width="100%">    
<div id="footer" align="center">
<script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt" type="4b22f2532ed4366357160fd4-text/javascript"></script>
<ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed" data-ad-client="ca-pub-9222595088627935" data-ad-slot="1105930124"></ins>
<script type="4b22f2532ed4366357160fd4-text/javascript">
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script type="4b22f2532ed4366357160fd4-text/javascript">
var infolinks_pid = 295107;
var infolinks_wsid = 2;
</script>
<script type="4b22f2532ed4366357160fd4-text/javascript" src="../../resources.infolinks.com/js/infolinks_main.js"></script>
<div id="copy"> © Copyright 2020-2021 at www.sarkarinaukrigyan.com
<br />For advertising in this website contact us sarkarinaukrigyan@gmail.com<br><br></div></br>
<!-- <a href="https://www.dmca.com/Protection/Status.aspx?ID=c81d92e5-9e14-4471-b080-8d86f5167345" title="DMCA"> <img src="../../images.dmca.com/Badges/dmca_protected_sml_120e03f5.png?ID=c81d92e5-9e14-4471-b080-8d86f5167345" alt="DMCA.com" /></a>
 --><div align="center" style="margin-bottom:10px"><font size="-1" color="#FF0000"><b>Disclaimer : </b>The Examination Results / Marks published in this Website is only for the immediate Information to the Examinees an does not to be a constitute to be a Legal Document. While all efforts have been made to make the Information available on this Website as Authentic as possible. We are not responsible for any Inadvertent Error that may have crept in the Examination Results / Marks being published in this Website nad for any loss to anybody or anything caused by any Shortcoming, Defect or Inaccuracy of the Information on this Website.</font></div>
</div>
</td>
</tr>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="4b22f2532ed4366357160fd4-|49" defer=""></script></body>

</html>