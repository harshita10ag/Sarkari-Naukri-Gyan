
<?php 
include('../examples/database.php');
          if(isset($_REQUEST['board'])){
           
           $id=$_REQUEST['id'];
           $board=$_REQUEST['board'];
           $query="insert into board (board) values('$board')";
           echo $query;
           mysqli_query($conn,$query) or die(mysql_error()); 
            }

// else{
//   $postname =$_REQUEST['a1'];
//     $postdate = $_REQUEST['a2'];
//     $sinfo=$_REQUEST['a3'];
//     $id=$_REQUEST['id'];

//     $query="update result set postname='$postname', postdate='$postdate', sinfo='$sinfo' where id=$id";
//     mysqli_query($conn,$query) or die(mysql_error());
// }

?>
      