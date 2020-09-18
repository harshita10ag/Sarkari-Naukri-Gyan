<?php include('database.php');
$username = $_REQUEST['username'];  
    $password = $_REQUEST['password']; 
    echo "dc".$username;
?>

<!doctype html>
<html lang="en">
<head>
    <title>Login Sarkarinuakrigyan.com</title>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


	<style>body{padding-top: 60px;}</style>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />

	<link href="assets/css/login-register.css" rel="stylesheet" />
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/login-register.js" type="text/javascript"></script>

</head>
<body>
    <div class="container">


		 <div class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login with</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                             <div class="content">
                                <!-- <div class="error"></div> -->
                                <div class="form loginBox">
                                    <form method="post" action="data/login.php" name="f1"  onsubmit="return validation();">
                                    <input id="username" class="form-control" type="text" placeholder="Email" name="username">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                    <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                                    </form>
                                </div>
                             </div>
                        </div>
                    </div>
    		      </div>
		      </div>
		  </div>
    </div>
<script type="text/javascript">
    $(document).ready(function(){
        alert(1);
        openLoginModal();
    });
    $(function(){
alert(2);
 var id=$("#username").val();
 alert(id);
                var ps=document.f1.password.value
$.ajax({
           type:"POST",
           url:"data/login.php",
           data:{id:id,ps:ps},
            success: function(html){
                alert(1);
             $("#sp_del").prepend(html);
         }

    });
});

     function validation()  
            {  
                alert(2);
 var id=$("#username").val();
 alert(id);
                var ps=document.f1.password.value
$.ajax({
           type:"POST",
           url:"data/login.php",
           data:{id:id,ps:ps},
            success: function(html){
                alert(1);
             $("#sp_del").prepend(html);
         }

    });
                var id=document.f1.username.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
</script>


</body>
</html>
