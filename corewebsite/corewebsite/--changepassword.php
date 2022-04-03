<?php include 'db.php';?>
<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    function changePassword($conn){

        $dbemail = $_SESSION['user']['dbemail'];

        $curr_password=$_POST['current_password'];
        $new_password=$_POST['new_password'];
        $con_password=$_POST['confirm_password'];
        $password_query = "SELECT dbpwd FROM student WHERE dbemail='".$dbemail."'";
        $result = $conn->query($password_query);

        $password = '';
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){            
                $password = $row['dbpwd'];
            }
        }

        $message = '';
        if($password != ''){
            if($password == $curr_password){
                if($new_password == $con_password){
                    $update_pwd = "UPDATE student SET dbpwd='$new_password' WHERE dbemail='".$dbemail."'";
                    $conn->query($update_pwd);

                    $message = "Password updated successfully";        
                }else{
                    $message = "New password and confirm password didn't match";        
                }
            }else{
                $message = "Current password is incorrect";
            }
        }else{
            $message = "Email id or Password not available for current user";
        }
        header("Location: http://localhost/corewebsite/changepassword.php?message=".$message);
        exit;
    }
 
    changePassword($conn);
}    
?>
<?php include 'header.php';?>

<div class="container">
    <div class="row">
        <?php include 'list.php';?>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="dashboard">
            <div id="changepassword_container">
                <form name="changepwdForm" id="changepwdForm" method="post">
                    <div class="form-group row">
                        <?php if(isset($_GET['message'])){?>
                            <div class="text-danger"><?php echo $_GET['message'];?></div>
                        <?php }?>
                    </div>
                    <div class="form-group row">    
                        <!-- <label for="inputPassword" class="col-sm-2 col-form-label">Old Password</label> -->
                        <div class="col-sm-12">
                            <input type="password" class="form-control" id="_current_password" placeholder="Current Password" name="current_password" value="" required>
                            <span class="error"></span>
                        </div>                    
                    </div>
                    <div class="form-group row">    
                        <!-- <label for="inputPassword" class="col-sm-2 col-form-label">New Password</label> -->
                        <div class="col-sm-12">
                            <input type="password" class="form-control" id="_new_password" placeholder="New Password" name="new_password" value="" required>
                            <span class="error"></span>
                        </div>                    
                    </div>
                    <div class="form-group row">    
                        <!-- <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label> -->
                        <div class="col-sm-12">
                            <input type="password" class="form-control" id="_confirm_password" placeholder="Confirm Password" name="confirm_password" value="" required>
                            <span class="error"></span>
                        </div>                    
                    </div>
                    <button type="submit" class="btn btn-success" id="update_password">Save</button>                    
                </form>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">&nbsp;</div>
    </div>
</div>



<!-- <script type="text/javascript">

    function changePassword(){

        var x = document.getElementsByClassName("error");
        var err_count = 0;

        var currpwd = document.forms["changepwdForm"]["current_password"].value;
        if(currpwd == ""){
            document.getElementById("_current_password").className += " input-error";
            x[0].innerHTML = "*Current password cannot be empty.";
            err_count = err_count + 1;
        }else{
            x[0].innerHTML = " ";
            document.getElementById("_current_password").classList.remove("input-error");
        }

        var newpwd = document.forms["changepwdForm"]["new_password"].value;
        if(newpwd == ""){
            document.getElementById("_new_password").className += " input-error";
            x[1].innerHTML = "*New password cannot be empty.";
            err_count = err_count + 1;
        }else{
            x[1].innerHTML = " ";
            document.getElementById("_new_password").classList.remove("input-error");
        }

        var oldpwd = document.forms["changepwdForm"]["confirm_password"].value;
        if(oldpwd == ""){
            document.getElementById("_confirm_password").className += " input-error";
            x[2].innerHTML = "*Confirm password cannot be empty.";
            err_count = err_count + 1;
        }else{
            x[2].innerHTML = " ";
            document.getElementById("_confirm_password").classList.remove("input-error");
        }
        if(err_count > 0){
            return false;
        }else{
            jQuery(function(){
                jQuery("#update_password").on('click', function(e){
                    // _data = jQuery('#sturegForm').serialize();

                    jQuery.ajax({
                        type:'POST',
                        url:"ajax.php",
                        data: {type:'update_password', data:_data, id:32},
                        dataType:'html',
                        success:function(a){
                            jQuery('.message').html('<div class="alert alert-success alert-dismissible" role="alert">'+a+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
                        }
                    });
                    e.preventDefault();
                });
            });
        }
        return false;
    }
</script> -->


<?php include 'footer.php';?>