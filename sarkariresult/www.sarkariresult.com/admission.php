<?php include('database.php');?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="canonical" href="https://www.sarkarinaukrigyan.com/admission.php">
<title>Latest Admission Online Form 2020 - Sarkari Naukri Gyan </title>
<meta name="description" content="Find admission online form. Applicants can apply for admissions form after complete 10th, 12th, diploma, graduate, post graduate. ✔ Frequently Updated " />
<meta name="keywords" content="Kanpur University, Admission, JEECUP, UPBED, NTA, AKTU, DBRAU, Allahabad University, Manipal University, SRMJEE, NATA, GPAT, ASU, VITEE, IERT, BHU, AIIMS" />
<meta name="rating" content="general" />
<meta http-equiv="content-language" content="en" />
<meta name="distribution" content="global" />
<meta name="robots" content="index, follow" />
<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "EducationalOrganization",
"name": "Sarkarinaukrigyan",
"url": "https://www.sarkarinaukrigyan.com/"
}
</script>
</head>
<link href="edit/style.css" rel="stylesheet" type="text/css" media="screen">
<body align="center">
<div align="center">
<div id="header">
<div id="head-title">SARKARI NAUKRI GYAN<br /></div>
<font size="+1" color="#ffffff"><b>WWW.SARKARINAUKRIGYAN.COM</b></font>
</div>
<div id="wrap">
<ul class="navbar">
<li><a href="index.php">Home</a></li>
<li><a href="answerkey.php">Answer Key</a></li>
<li><a href="latestjob.php">Latest Jobs</a></li>
<li><a href="admitcard.php">Admit Card</a></li>
<li><a href="result.php">Results</a></li>
<!-- <li><a href="contactus.php">Contact Us</a></li> -->
<!-- <li><a href="#">Apps</a>
<ul class="navbar">
<li><a href="https://play.google.com/store/apps/details?id=com.app.app14f269771c01">Android App</a></li>
<li><a href="https://itunes.apple.com/us/app/sarkari-result/id1051363935?ls=1&mt=8">Apple IOS App</a></li>
<li><a href="https://www.microsoft.com/en-us/store/apps/sarkari-result/9nblggh6cm69">Window App</a></li>
</ul>
</li> -->
<!-- <li><a href="#">More</a>
<ul class="navbar">
<li><a href="https://www.sarkariresult.com/upsssc.php">UPSSSC</a></li>
<li><a href="https://www.sarkariresult.com/ibpsall.php">IBPS</a></li>
<li><a href="https://www.sarkariresult.com/sscall.php">SSC</a></li>
<li><a href="https://www.sarkariresult.com/upscall.php">UPSC</a></li>
<li><a href="https://www.sarkariresult.com/railwayall.php">Railway</a></li>
<li><a href="https://www.sarkariresult.com/uppscall.php">UPPCS</a></li>
<li><a href="https://www.sarkariresult.com/tetall.php">TET</a></li>
<li><a href="https://www.sarkariresult.com/boardall.php">All Board Exams</a></li>
<li><a href="https://www.sarkariresult.com/policeall.php">Police Vacancy</a></li>
</ul>
</li> -->
</ul>
<ul class="breadcrumb">
<span class="bread">You are here > <a href="index.php">Home</a> > Admission </span>
</ul>
<br><br>
</div>
<style>
.breadcrumb {
    margin-top: 60px;
    float: left;
    color: #000;
    padding-left: 1px;
    font-weight: bold;
    margin-bottom: 15px;
    width: 100%;
    text-align: left;
}
.adv{ margin-top:15px;}

@media (max-width:1200px){
    .navbar li {width: 90px;}
}
</style></div>
<br><br>
<div align="center">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="8f47931d32521091df686276-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-9222595088627935" data-ad-slot="5658090624"></ins>
<script type="8f47931d32521091df686276-text/javascript">
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<br><br>
<div align="center"><font size="+3"><b><a href="https://www.sarkarinaukrigyan.com/">Click Here to Visit SarkariNaukriGyan.com Home Page</a></b></font></div>
<table width="75%" align="center">
<tr>
<td style="width:50%; background-color:#ffffff; border:1px; border-color:#000000; border-style:solid" valign="top">
<h1 align="center" id="heading">Admission</h1>
<div id="post">
	<?php 
  $query="select * from admission order by id desc";
  $result = mysqli_query($conn,$query);
  while($row = mysqli_fetch_assoc($result)) {
    if($row['category']=="school"){
    ?>
    <ul><li><a href="https://sarkarinaukrigyan.com/schooladmission.php?id=<?php echo $row['id'].'&'.str_replace(' ', '-', $row['postname']);?>" target=_blank><?php echo $row['postname'];?></a> </li></ul>
  <?php }else{?>
      <ul><li><a href="https://sarkarinaukrigyan.com/collegeadmission.php?id=<?php echo $row['id'].'&'.str_replace(' ', '-', $row['postname']);?>" target=_blank><?php echo $row['postname'];?></a> </li></ul>
   <?php }} ?>
</div>
</td>
<td width="25%" valign="top">
<div>
<iframe src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/sarkarinaukriupdate9&amp;width=292&amp;height=170&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=false" scrolling="no" frameborder="1" style="border:1px; overflow:hidden; width:232px; height:258px" allowTransparency="true"></iframe>
</div>
<div>
<iframe id="webbuttonwidget" class="center" file="webbuttonwidget" src="https://telegrambutton.com/webbuttonwidget.php?chat_id=Sarkarinaukri01/1&showchatid=true&showmembercount=true&showmembercount=true&color=&pulse=false&textcolor=white&shadowval=&textval=VIEW IN TELEGRAM" border="1" style="border:20px;height: 125px;" width="240px"></iframe>

</div>
<div align="center">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="8f47931d32521091df686276-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:160px;height:600px" data-ad-client="ca-pub-9222595088627935" data-ad-slot="8951738566"></ins>
<script type="8f47931d32521091df686276-text/javascript">
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div align="left">
<center><script type="8f47931d32521091df686276-text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></center>
<script type="8f47931d32521091df686276-text/javascript">
var infolinks_pid = 295107;
var infolinks_wsid = 2;
</script>
</div>
</td>
</tr>
</table>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="8f47931d32521091df686276-|49" defer=""></script></body>
</html>