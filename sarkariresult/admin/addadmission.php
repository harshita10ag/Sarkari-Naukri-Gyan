<?php 
include('database.php');
if(isset($_REQUEST['ids'])){
  $id=$_REQUEST['ids'];
$query=mysqli_query($conn,"select * from admission where id=$id");
  // echo $query;
  $row=mysqli_fetch_object($query);
  $postname=$row->postname;
  $startdate=$row->startdate;
  $lastdate=$row->lastdate;
  $sinfo=$row->sinfo;
  $fname=$row->fname;
  $cname=$row->cname;
  $sdate=$row->sdate;
  $merit=$row->merit;
  $counselling=$row->counselling;
  $eligibility=$row->eligibility;
  $nocutoff=$row->nocutoff;
  $nocourse=$row->nocourse;
  $cutoff=$row->cutoff;
  $payfee=$row->payfee;
  $course=$row->course;
  $duration=$row->duration;
  $celigible=$row->celigible;
  $ncutoff=$row->ncutoff;
  $general=$row->general;
  $scst=$row->scst;
  $minage=$row->minage;
  $maxage=$row->maxage;
  $ffvideo=$row->ffvideo;
  $apply=$row->apply;
  $notification=$row->notification;
  $official=$row->official;
  $examdate=$row->examdate;
  $admit=$row->admit;
  $result=$row->result;
  $part=$row->part;
  $brochure=$row->brochure;
  $complete=$row->complete;
  $hard=$row->hard;
  $courseav=$row->courseav;
  $document=$row->document;
  $districtdate=$row->districtdate;
  $lgeneral=$row->lgeneral;
  $lscst=$row->lscst;
  $answerkey=$row->answerkey;
  $resultlink=$row->resultlink;$resultvideo=$row->resultvideo;$admitcard=$row->admitcard;
  $admitvideo=$row->admitvideo;$districtlink=$row->districtlink;$districtlinkvideo=$row->districtlinkvideo;
}
else{
  $postname="";
  $cname="";
  $startdate="";
  $lastdate="";
  $sinfo="";
  $fname="";
  $sdate="";
  $general="";
  $scst="";
  $minage="";
  $maxage="";
  $ffvideo="";
  $apply="";
  $notification="";
  $official="";
  $merit="";
  $counselling="";
  $eligibility="";
  $nocutoff="";
  $nocourse="";
  $cutoff="";
  $payfee="";
  $course="";
  $duration="";
  $celigible="";
  $ncutoff="";
  $examdate="";
  $admit="";
  $result="";
  $part="";
  $brochure="";
  $complete="";
  $hard="";
  $courseav="";
  $document="";
  $districtdate="";$answerkey="";$resultlink="";$resultvideo="";$admitcard="";
  $admitvideo="";$districtlink="";$districtlinkvideo="";
}
?>
<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="./index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="./jobs.php">
              <i class="material-icons">Jobs</i>
              <p>Jobs</p>
            </a>
          </li>
          <li class="nav-item   ">
            <a class="nav-link" href="./result.php">
              <i class="material-icons">Result</i>
              <p>Result</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="./admit_card.php">
              <i class="material-icons">Admit</i>
              <p>Admit Card</p>
            </a>
          </li>
          <li class="nav-item   ">
            <a class="nav-link" href="./syllabus.php">
              <i class="material-icons">Syllabus</i>
              <p>Syllabus</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="./answerkey.php">
              <i class="material-icons">Answerkey</i>
              <p>Answer Key</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="./admission.php">
              <i class="material-icons">Admission</i>
              <p>Admission</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./vacancy.php">
              <i class="material-icons">Vacancy</i>
              <p>Vacancy</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./selectedboard.php">
              <i class="material-icons">person</i>
              <p>Selected Board</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./schoolboard.php">
              <i class="material-icons">content_paste</i>
              <p>School Board</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="./whatsapp.php">
              <i class="material-icons">Whatsapp</i>
              <p>Whatsapp Group</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.html">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./tables.html">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./rtl.html">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Latest Admission</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"><?php if($id==""){ echo "Add Admission";} else{ echo "Edit Admission";}?></h4>
                </div>
                <div class="card-body">
                  <form name="form" method="post" action="data/admission.php" id="form">
                    <input type="hidden" name="id" value="<?php echo $id;?>" id="id">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">                          
                          <input type="radio" name="category" id="college" value="<?php if($category==""){echo "college";}else{$category;}?>">
                          <label class="control-label">College</label>&nbsp;&nbsp;
                          <input type="radio" name="category" id="school" value="<?php if($category==""){echo "school";}else{$category;}?>">                          
                          <label class="control-label">School</label>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Name of Post</label>
                          <input type="text" class="form-control" id="postname" name="postname" value="<?php echo $postname;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Short Information</label>
                          <input type="text" class="form-control" id="sinfo" value="<?php echo $sinfo;?>" name="sinfo">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Application Begin</label>
                          <input type="date" class="form-control" id="startdate" name="startdate" value="<?php echo $startdate;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Last Date for Apply</label>
                          <input type="date" class="form-control" id="lastdate" name="lastdate" value="<?php echo $lastdate;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Eligibility</label>
                          <input type="text" class="form-control" id="eligibility" name="eligibility" value="<?php echo $eligibility;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Participating</label>
                          <input type="text" class="form-control" id="part" name="part" value="<?php echo $part;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Exam Date</label>
                          <input type="text" class="form-control" id="examdate" name="examdate" value="<?php echo $examdate;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Admit Date</label>
                          <input type="text" class="form-control" id="admit" name="admit" value="<?php echo $admit;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Result Date</label>
                          <input type="text" class="form-control" id="result" name="result" value="<?php echo $result;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Brochure</label>
                          <input type="url" class="form-control" id="brochure" name="brochure" value="<?php echo $brochure;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Last Date Change Exam District :</label>
                          <input type="text" class="form-control" id="districtdate" name="districtdate" value="<?php echo $districtdate;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Document Required </label>
                          <input type="text" class="form-control" id="document" value="<?php echo $document;?>" name="document">
                        </div>
                      </div>
                    </div>
                      <div id="post" class="row" style="display: none;">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">School Name / Board Name </label>
                          <input type="text" class="form-control" id="fname" value="<?php echo $fname;?>" name="fname">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Selected Candidates List Available</label>
                          <input type="date" class="form-control" id="sdate" value="<?php echo $sdate;?>" name="sdate">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Last Date Complete Form </label>
                          <input type="text" class="form-control" id="complete" value="<?php echo $complete;?>" name="complete">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Last Date Submit Hard Copy </label>
                          <input type="text" class="form-control" id="hard" value="<?php echo $hard;?>" name="hard">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Course Available </label>
                          <input type="text" class="form-control" id="courseav" value="<?php echo $courseav;?>" name="courseav">
                        </div>
                      </div>
                      
                    </div>

                    <div id="post1" class="row" style="display: none;">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Last Date Pay Exam fee</label>
                          <input type="date" class="form-control" id="payfee" name="payfee" value="<?php echo $payfee;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">College Name</label>
                          <input type="text" class="form-control" id="cname" name="cname" value="<?php echo $cname;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Merit List Issued Date</label>
                          <input type="date" class="form-control" id="merit" name="merit" value="<?php echo $merit;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Counselling Begin Date</label>
                          <input type="text" class="form-control" id="counselling" name="counselling" value="<?php echo $counselling;?>">
                        </div>
                      </div>
                      
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Examination District</label>
                          <input type="text" class="form-control" id="district" name="district" value="<?php echo $district;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">No of Courses</label>
                          <input type="number" class="form-control" id="nocourse" name="nocourse" value="<?php echo $nocourse;?>">
                        </div>
                      </div>
                      <div id="couse1" class="row"></div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">CutOff Issued</label>
                          <input type="radio" class="form-control" id="cutoff" name="cutoff" style="margin-top: -32px;" value="<?php if($cutoff==""){echo "cutoff";}else{$cutoff;}?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Late Fee General/ OBC</label>
                          <input type="number" class="form-control" id="lgeneral" name="lgeneral" value="<?php echo $lgeneral;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Late Fee SC/ ST</label>
                          <input type="number" class="form-control" id="lscst" name="lscst" value="<?php echo $lscst;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Result Link</label>
                          <input type="url" class="form-control" id="resultlink" name="resultlink" value="<?php echo $resultlink;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Answer Key Link</label>
                          <input type="url" class="form-control" id="answer" name="answerkey" value="<?php echo $answerkey;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Result Video</label>
                          <input type="url" class="form-control" id="resultvideo" name="resultvideo" value="<?php echo $resultvideo;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Admit Card</label>
                          <input type="url" class="form-control" id="admitcard" name="admitcard" value="<?php echo $admitcard;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Admit Card Video</label>
                          <input type="url" class="form-control" id="admitvideo" name="admitvideo" value="<?php echo $admitvideo;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Change Exam District Link</label>
                          <input type="url" class="form-control" id="districtlink" name="districtlink" value="<?php echo $districtlink;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Change District Video</label>
                          <input type="url" class="form-control" id="districtlinkvideo" name="districtlinkvideo" value="<?php echo $districtlinkvideo;?>">
                        </div>
                      </div>
                    </div>
                    <div class="row" id="post2" style="display: none;">
                     <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Number of CutOff Issued</label>
                          <input type="number" class="form-control" id="nocutoff" name="nocutoff" value="<?php echo nocutoff;?>">
                        </div>
                      </div> 
                    </div>

                      <div id="cut" class="row"></div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Application fee &nbsp;&nbsp;General / OBC</label>
                          <input type="number" class="form-control" id="general" value="<?php echo $general;?>" name="general">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Application fee &nbsp;&nbsp;SC / ST</label>
                          <input type="number" class="form-control" id="scst" value="<?php echo $scst;?>" name="scst">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Minimum Age</label>
                          <input type="number" class="form-control" id="minage" value="<?php echo $minage;?>" name="minage">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Maximum Age</label>
                          <input type="number" class="form-control" id="maxage" value="<?php echo $maxage;?>" name="maxage">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Apply Online Link</label>
                          <input type="url" class="form-control" id="apply" value="<?php echo $apply;?>" name="apply">
                          <br><span style="background-color: #9c27b0;color: white;padding: 3px;">Use comma (,) separated by two links (registration and login) </span>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Fill Form Video</label>
                          <input type="url" class="form-control" id="ffvideo" value="<?php echo $ffvideo;?>" name="ffvideo">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Notification</label>
                          <input type="url" class="form-control" id="notification" value="<?php echo $notification;?>" name="notification">
                        </div>
                      </div> 
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Official Website</label>
                          <input type="url" class="form-control" id="official" value="<?php echo $official;?>" name="official">
                        </div>
                      </div> 
                    </div>
                    <input type="hidden" id="hidecat" name="hidecat">
                    <button type="submit" class="btn btn-primary pull-right" name="Add"><?php if($id==""){ echo "Add";} else{ echo "Edit";}?></button>
                    <div class="col-md-6"><?php echo $status;?></div>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
      <script>
          $("input[type='radio']").change(function(){
         var a6=$(this).val();
   if($(this).val()=="school")
   {
      $("#post").show();
      $("#post1").hide();
      $("#hidecat").val(a6);
   }
   else if($(this).val()=="college")
   {
       $("#post1").show();
       $("#post").hide();
        $("#hidecat").val(a6);
   }
   else{
    $("#post2").show();
    $("#post1").show();
    $("#post").hide();
   }

});   
$('#nocutoff').on('change keyup',function(){
  let inputs = '';
  let value = parseInt($(this).val());
  for(let i = 0;i<value;i++){
    inputs += `<div class="col-md-3"><div class="form-group"><label class="control-label">${i} Cut Off</label><input type="date" class="form-control" id="ncutoff${i+1}" name="ncutoff${i+1}" value="<?php echo $ncutoff;?>"></div></div>`;
  }
  $('#cut').html(inputs);

});   
$('#nocourse').on('change keyup',function(){
  let inputs = '';
  let value = parseInt($(this).val());
  for(let i = 0;i<value;i++){
    inputs += `<div class="col-md-4"><div class="form-group"><label class="control-label">Course Name</label><input type="text" class="form-control" id="course${i+1}" name="course${i+1}" value="<?php echo $course;?>"></div></div><div class="col-md-4"><div class="form-group"><label class="control-label">Duration</label><input type="number" class="form-control" id="duration${i+1}" name="duration${i+1}" value="<?php echo $duration;?>"></div></div><div class="col-md-4"><div class="form-group"><label class="control-label">Eligibility</label><input type="text" class="form-control" id="celigible${i+1}" name="celigible${i+1}" value="<?php echo $celigible;?>"></div></div>`;
  }
  $('#couse1').html(inputs);

});   
        //      $('form').on('submit',(function (e){
        //     var a1=$("#postname").val();
        //     var a2=$("#startdate").val();
        //     var a4=$("#lastdate").val();
        //     var a3=$("#sinfo").val();
        //      var a5 = $("#hidecat").val();
        //      var a6=$("#fname").val();
        //      var a7=$("#sdate").val();
        //      var a8=$("#general").val();
        //      var a9=$("#scst").val();
        //      var a10=$("#minage").val();
        //      var a11=$("#maxage").val();
        //      var a12=$("#apply").val();
        //      var a13=$("#ffvideo").val();
        //      var a14=$("#notification").val();
        //      var a15=$("#official").val();
        //      alert(a5);
        //     var id=$("#id").val();
        //     if(a1==""){
        //       alert("Please Post Name");
        //       // e.preventDefault();
        //       }<!--end if a1-->
        //   else{
        //   $.ajax({
        //     type:"POST",
        //     url:"data/admission.php",
        //     data:{a1:a1,a2:a2,a3:a3,a4:a4,id:id,a5:a5,a6:a6,a7:a7,a8:a8,a9:a9,a10:a10,a11:a11,a12:a12,a13:a13,a14:a14,a15:a15},
        //     success: function(html){
        //     $("#sp_del").prepend(html);
        //     $("#postname").val("");
        //     $("#lastdate").val("");
        //     $("#sinfo").val("");
        //     $("#id").val("");
        //     $("#fname").val("");
        //     $("#sdate").val("");
        //     $("#general").val("");
        //     $("#scst").val("");
        //     $("#minage").val("");
        //     $("#maxage").val("");
        //     $("#apply").val("");
        //     $("#ffvideo").val("");
        //     $("#notification").val("");
        //     $("#official").val("");
        //     }

        //   });
        // }
      
        // }));
        // }

      </script>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>