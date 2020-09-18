
<?php 
include('../database.php');
if(isset($_POST['b1'])){
            $id=$_REQUEST['b1'];
            $query="delete from schoolboard where id=$id";
            mysqli_query($conn,$query) or die(mysql_error());
          }

         elseif(isset($_POST['sid'])){
            $id=$_REQUEST['sid'];
            $query1=mysqli_query($conn,"select * from schoolboard where id=$id");
            $row=mysqli_fetch_object($query1);
            if($row->status==0){
            $query="update schoolboard set status=1 where id=$id";
            mysqli_query($conn,$query) or die(mysql_error());
            }
            else{
            $query="update schoolboard set status=0 where id=$id";
            mysqli_query($conn,$query) or die(mysql_error()); 
            }
          }
          elseif(isset($_REQUEST['board'])){
           
           $id=$_REQUEST['id'];
           $board=$_REQUEST['board'];
           if($id==""){
           $query="insert into schoolboard (board,status) values('$board',0)";
           // echo $query;
           mysqli_query($conn,$query) or die(mysql_error()); 
           header("Location: ../addschoolboard.php");
           }
           else{
            // echo 3;
           	$query="update schoolboard set board='$board' where id=$id";
           	mysqli_query($conn,$query) or die(mysql_error());
           	header("Location: ../schoolboard.php");
           }

}

?>
      