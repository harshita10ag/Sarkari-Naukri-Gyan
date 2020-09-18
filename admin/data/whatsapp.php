
<?php 
include('../database.php');
if(isset($_POST['b1'])){
            $id=$_REQUEST['b1'];
            $query="delete from whatsapp where id=$id";
            mysqli_query($conn,$query) or die(mysql_error());
          }

         elseif(isset($_POST['sid'])){
            $id=$_REQUEST['sid'];
            $query1=mysqli_query($conn,"select * from whatsapp where id=$id");
            $row=mysqli_fetch_object($query1);
            if($row->status==0){
            $query="update whatsapp set status=1 where id=$id";
            mysqli_query($conn,$query) or die(mysql_error());
            }
            else{
            $query="update whatsapp set status=0 where id=$id";
            mysqli_query($conn,$query) or die(mysql_error()); 
            }
          }
          elseif(isset($_REQUEST['id'])){
           $id=$_REQUEST['id'];

           $link=$_REQUEST['link'];
           $name=$_REQUEST['name'];
           $category=$_REQUEST['category'];
           if($id==""){
           $query="insert into whatsapp (link,status,category,name) values('$link',0,'$category','$name')";
           echo $query;
           mysqli_query($conn,$query) or die(mysql_error()); 
           header("Location: ../addwhatsapp.php");
           }
           else{
           	$query="update whatsapp set link='$link',category='$category',name='$name' where id=$id";
            
           	mysqli_query($conn,$query) or die(mysql_error());
           	header("Location: ../whatsapp.php");
           }

}

?>
      