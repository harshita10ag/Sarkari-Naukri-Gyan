<?php 
include('../database.php');
       
          if(isset($_POST['b1'])){
            $id=$_REQUEST['b1'];
            $query="delete from vacancy where id=$id";
            mysqli_query($conn,$query) or die(mysql_error());
          }

         elseif(isset($_POST['sid'])){
            $id=$_REQUEST['sid'];
            $query1=mysqli_query($conn,"select * from vacancy where id=$id");
            $row=mysqli_fetch_object($query1);
            if($row->status==0){
            $query="update vacancy set status=1 where id=$id";
            mysqli_query($conn,$query) or die(mysql_error());
            }
            else{
            $query="update vacancy set status=0 where id=$id";
            mysqli_query($conn,$query) or die(mysql_error()); 
            }
          }
          if(isset($_REQUEST['id'])){
           
            $postnumber=$_REQUEST['postnumber'];
            $id=$_REQUEST['id'];
            $jobid=$_REQUEST['jobid'];
            $category=$_REQUEST['category'];
            $categorywise=$_REQUEST['categorywisepost'];
            $mheightg=$_REQUEST['mheightg'];
            $mheightsc=$_REQUEST['mheightsc'];
            $mheightebc=$_REQUEST['mheightebc'];
            $fheight=$_REQUEST['fheight'];
            $mchestg=$_REQUEST['mchestg'];
            $mchestsc=$_REQUEST['mchestsc'];
            $mchestebc=$_REQUEST['mchestebc'];
            $fchest=$_REQUEST['fchest'];
            $mwalk=$_REQUEST['mwalk'];
            $fwalk=$_REQUEST['fwalk'];
            $peligible=$_REQUEST['peligible'];
            $gff=$_REQUEST['gff'];
            $gfm=$_REQUEST['gfm'];
            $fhjump=$_REQUEST['fhjump'];
            $mhjump=$_REQUEST['mhjump'];
            $mljump=$_REQUEST['mljump'];
            $fljump=$_REQUEST['fljump'];
            $rm100=$_REQUEST['rm100'];
            $rf100=$_REQUEST['rf100'];
            $rm800=$_REQUEST['rm800'];
            $rf800=$_REQUEST['rf800'];
            $smput=$_REQUEST['smput'];
            $branch=$_REQUEST['branch'];
            $sectorwise=$_REQUEST['sectorwise'];
            if($categorywise==""){ $categorywise=0;}else{
             for($i=1;$i<=$categorywise;$i++){
               $cpostnames=$_REQUEST['cpostname'.$i];
               $cpostname=$cpostnames.','.$cpostname;
              $generals=$_REQUEST['general'.$i];
              $general=$generals.','.$general;
              $obcs=$_REQUEST['obc'.$i];
              $obc=$obcs.','.$obc;
              $scs=$_REQUEST['sc'.$i];
              $sc=$scs.','.$sc;
              $sts=$_REQUEST['st'.$i];
              $st=$sts.','.$st;
              $ewse=$_REQUEST['ews'.$i];
              $ews=$ewse.','.$ews;
              $bcs=$_REQUEST['bc'.$i];
              $bc=$bcs.','.$bc;
              $cages=$_REQUEST['cage'.$i];
              $cage=$cages.','.$cage;
              $bcf=$_REQUEST['bcfemale'.$i];
              $bcfemale=$bcf.','.$bcf;
              $ebcs=$_REQUEST['ebc'.$i];
              $ebc=$ebcs.','.$ebcs;
              $obcf=$_REQUEST['obcfemale'.$i];
              $obcfemale=$obcf.','.$obcf;



            }
          }
          if($sectorwise==""){ $sectorwise=0;}else{
             for($i=1;$i<=$sectorwise;$i++){
               $sectornames=$_REQUEST['sectorname'.$i];
               $sectorname=$sectornames.','.$sectorname;
              $sectorposts=$_REQUEST['sectorpost'.$i];
              $sectorpost=$sectorposts.','.$sectorpost;
            }
          }
          if($id==""||$id==" "){
           
            for($i=1;$i<=$postnumber;$i++){  //same as totalpost
              $postname=$_REQUEST['postname'.$i];
              $totalpost=$_REQUEST['totalpost'.$i];
              $eligibility=$_REQUEST['eligibility'.$i];
              $age=$_REQUEST['age'.$i];
             
              // echo "insert into vacancy(jobid,postname,totalpost,eligibility,category,cpostname,general,obc,sc,st)values('$jobid','$postname','$totalpost','$eligibility','$category','$cpostname','$general','$obc','$sc','$st')";
              $query= "insert into vacancy(jobid,postname,totalpost,eligibility,category,cpostname,general,obc,sc,st,postnumber,ews,bc,categorywise,mheightg,mheightsc,mheightebc,fheight,mchestg,mchestsc,mchestebc,fchest,mwalk,fwalk,peligible,gff,gfm,fhjump,mhjump,mljump,fljump,rm100,rf100,rm800,rf800,smput,sfput,sectorname,sectorpost,sectorwise, age,branch,cage,ebc,bcfemale,obcfemale)values('$jobid','$postname','$totalpost','$eligibility','$category','$cpostname','$general','$obc','$sc','$st','$postnumber','$ews','$bc','$categorywise','$mheightg','$mheightsc','$mheightebc','$fheight','$mchestg','$mchestsc','$mchestebc','$fchest','$mwalk','$fwalk','$peligible','$gff','$gfm','$fhjump','$mhjump','$mljump','$fljump','$rm100','$rf100','$rm800','$rf800','$smput','$sfput','$sectorname','$sectorpost','$sectorwise','$age','$branch','$cage','$ebc','$bcfemale','$obcfemale')";
              // echo $query;
              mysqli_query($conn,$query) or die(mysql_error());
            }
            header("Location: ../addvacancy.php");
          }

else{
        for($i=1;$i<=$postnumber;$i++){  //same as totalpost
              $postname=$_REQUEST['postname'.$i];
              $totalpost=$_REQUEST['totalpost'.$i];
              $eligibility=$_REQUEST['eligibility'.$i];
              $age=$_REQUEST['age'.$i];
             
    $query="update vacancy set jobid='$jobid', postname='$postname', totalpost='$totalpost', eligibility='$eligibility',category='$category',cpostname='$cpostname',general='$general',obc='$obc',sc='$sc',st='$st',postnumber='$postnumber',ews='$ews',bc='$bc', categorywise='$categorywise',mheightg='$mheightg',mheightsc='$mheightsc',mheightebc='$mheightebc',fheight='$fheight', mchestg='$mchestg', mchestsc='$mchestsc', mchestebc='$mchestebc',fchest='$fchest', mwalk='$mwalk',fwalk='$fwalk',peligible='$peligible',gff='$gff',gfm='$gfm',fhjump='$fhjump',mhjump='$mhjump',mljump='$mljump',fljump='$fljump' ,rm100='$rm100', rf100='$rf100',rm800='$rm800', rf800='$rf800', smput='$smput', sfput='$sfput', sectorname='$sectorname',sectorpost='$sectorpost', sectorwise='$sectorwise',age='$age', branch='$branch',cage='$cage',ebc='$ebc', bcfemale='$bcfemale',obcfemale='$obcfemale' where id=$id";
    // echo $query;
    mysqli_query($conn,$query) or die(mysql_error());
 }   
 header("Location: ../vacancy.php");
}
}
?>
      