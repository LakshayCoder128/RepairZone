<?php include "db.php"?>
<?php
if(isset($_SESSION['user'])){
    header('Location: http://localhost/corewebsite/account.php');
}
?>

<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){    
    
    //sql to select table    
    $query = "SELECT * FROM student WHERE (dbemail='".$_POST["email"]."' OR dbphone='".$_POST["email"]."') AND dbpwd='".$_POST["password"]."'";
    $result = $conn->query($query);

    if($result->num_rows > 0){
        // if username and password exist in database
        while($row = $result->fetch_assoc()){            
            $user = $row;
        }
        
        if($user){
            $_SESSION['user'] = $user;
            // print_r($_SESSION['user']);exit;
            header('Location: http://localhost/corewebsite/account.php');
        } 
    }else{
        header('Location: http://localhost/corewebsite/login.php?message=Incorrect email or password');
    }
    exit;
}
?>    

<?php include 'header.php';?>

<!-- <script type='text/javascript'>
    jQuery(function(){            
        //  alert("Username or Password doesn't exist in database");    // Be careful about using "" '' in single line
        alert("Incorrect email or password");
    });        
</script> -->
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="c1">&nbsp;</div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="c2">
            <form name = "myForm" action ="" method="POST" id= "loginform">
                <div class="imgcontainer">
                    <img src="images/img_avatar.png" alt="Avatar" class="avatar">
                </div>   
                <div class="container">                    
                    <div id=logo><img src ="images/logo.png"><br/></div>
                    <input type="text" class="form-control" placeholder="Email or Phone Number" name="email" required>
                    <input type="password" class="form-control" placeholder="Password" name="password" id="inputPassword"required>
                    <img src="images/772420-200.png" width="18" height="18" id="show" onclick= "showpassword()">            
                    <button type="submit" class="login">Login</button>
                    <?php if(isset($_GET['message'])){?>
                        <div class="text-danger"><?php echo $_GET['message']?></div>
                    <?php }?>                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1"> Remember me</label>
                    </div>                    
                    <!-- <input type="checkbox" checked="checked" name="remember"> Remember me                     -->
                </div>                
            </form>
            <div class="bottom_container">
                <span class="psw"><a href="#">Forgot Password?</a></span>                
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="c3">&nbsp;</div>
    </div>
</div>

<script type="text/javascript">
function showpassword() {
    var x = document.getElementById("inputPassword");
    if (x.type === "password") {
        x.type = "text";
    }else{
        x.type = "password";
    }
}
</script>

<?php include 'footer.php';?>