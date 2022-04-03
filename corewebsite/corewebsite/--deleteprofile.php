<?php include 'header.php';?>
<?php include "db.php";?>
<?php    
    $id = $_SESSION['user']['id'];
    $sql_select_table = "SELECT id, dbname, dbroll, dbage, dbdob, dbphone, dbaddress, dbgender, dbpref, dbemail, dbpwd, dbwebsite, dbcountry FROM student WHERE id = '$id'";
    $result = $conn->query($sql_select_table);

    $data = array();                        // $data = []; same thing
    if($result->num_rows > 0){
        $data = $result->fetch_assoc();
    }   
?>

<div class="container">        
        <div class="row">
            <?php include 'list.php';?>
            <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"> -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="background">
                <!-- <h2 id="logo">Edit Profile</h2><br/> -->
                <!-- <div id=logo><img src ="images/student_icon.png"><br/></div> -->
                <form name="sturegForm" id="sturegForm" method="post">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?php //echo $input_error1;?>" id="staticID" name="sid" value="<?php echo $data['id'];?>" disabled>
                            <span class="error"><?php //echo $nameErr;?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?php //echo $input_error1;?>" id="staticName" name="sname" value="<?php echo $data['dbname'];?>" disabled>
                            <span class="error"><?php //echo $nameErr;?></span>
                        </div>
                    </div>         
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Roll No</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?php //echo $input_error2;?>" id="staticRollno" value="<?php echo $data['dbroll'];?>" name="sroll" disabled>
                            <span class="error"><?php //echo $rollErr;?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Age</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?php //echo $input_error3;?>" id="staticAge" value="<?php echo $data['dbage'];?>" name="sage" minlength="2" maxlength="3" disabled>
                            <span class="error"><?php //echo $ageErr;?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">DOB</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="text" class="form-control calendar <?php //echo $input_error4;?>" id="staticDOB" name="sdob" placeholder="DD-MM-YYYY" value="<?php echo $data['dbdob'];?>" disabled/>
                                <span class="error"><?php //echo $dobErr;?></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Contact No.</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?php //echo $input_error5;?>" id="staticPhone" value="<?php echo $data['dbphone'];?>" name="sphone" disabled>
                                <span class="error"><?php //echo $phoneErr;?></span>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <textarea class="form-control <?php //echo $input_error6;?>" id="staticAddress" rows="2" name="saddress"disabled><?php echo $data['dbaddress'];?></textarea>
                                    <span class="error"><?php //echo $addressErr;?></span>
                                </div>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input sgender" type="radio" name="sgender" id="inlineRadio1" value="Male" <?php echo ($data['dbgender']=='Male')? 'checked="checked"':'';?> disabled/>
                                    <label class="col-form-label form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input sgender" type="radio" name="sgender" id="inlineRadio2" value="Female" <?php echo ($data['dbgender']=='Female')? 'checked="checked"':'';?> disabled/>
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input sgender" type="radio" name="sgender" id="inlineRadio3" value="Other" <?php echo ($data['dbgender']=='Other')? 'checked="checked"':'';?> disabled/>
                                    <label class="form-check-label" for="inlineRadio3">Other</label>
                                </div>
                                <div class="error"><?php //echo $genderErr;?></div>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Choose preference</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input spref" type="checkbox" id="inlineCheckbox1" value="Science" name="spref[]" <?php //echo (in_array('Science', $pref))? 'checked="checked"':'';?> disabled/>
                                    <label class="col-form-label form-check-label" for="inlineCheckbox1">Science</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input spref" type="checkbox" id="inlineCheckbox2" value="Commerce" name="spref[]" <?php //echo (in_array('Commerce', $pref))? 'checked="checked"':'';?> disabled/>
                                    <label class="form-check-label" for="inlineCheckbox2">Commerce</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input spref" type="checkbox" id="inlineCheckbox3" value="Arts" name="spref[]" <?php //echo (in_array('Arts', $pref))? 'checked="checked"':'';?> disabled/>
                                    <label class="form-check-label" for="inlineCheckbox3">Arts</label>
                                </div>
                                <div class="error"><?php //echo $prefErr;?></div>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">E-Mail</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control <?php //echo $input_error7;?>" id="staticEmail" placeholder="email@example.com" name="semail" value="<?php echo $data['dbemail'];?>" disabled>
                                <!-- <span class="error"></span> -->
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                <span class="error"><?php //echo $emailErr;?></span>
                            </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control <?php //echo $input_error8;?>" id="inputPassword" placeholder="Password" name="spassword" value="<?php //echo $password;?>">
                                <img src="images/772420-200.png" width="17" height="17" id="show" onclick= "showpassword()">
                                <span class="error"><?php //echo $pwdErr;?></span>
                            </div>
                    </div> -->
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Website</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?php //echo $input_error9;?>" id="inputWebsite" placeholder="Website" name="swebsite" value="<?php echo $data['dbwebsite'];?>" disabled>
                                <span class="error"><?php //echo $websiteErr;?></span>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="exampleFormControlSelect1">Country</label>
                        <div class="col-sm-10">
                            <select class="form-control <?php //echo $input_error10;?>" id="exampleFormControlSelect1" name="scountry" disabled>
                                <option value="">Select your country</option>
                                <option value="Australia" <?php echo ($country=='Australia')? 'selected="selected"':'';?>>Australia</option>
                                <option value="China" <?php echo ($country=='China')? 'selected="selected"':'';?>>China</option>
                                <option value="India" <?php echo ($country=='India')? 'selected="selected"':'';?>>India</option>
                                <option value="Japan" <?php echo ($country=='Japan')? 'selected="selected"':'';?>>Japan</option>
                                <option value="US" <?php echo ($country=='US')? 'selected="selected"':'';?>>US</option>
                            </select>
                            <span class="error"><?php //echo $countryErr;?></span>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="sterms" <?php //echo ($terms=='1')? 'checked="checked"':'';?> />
                                <label class="form-check-label" for="defaultCheck1">I have read and accept the <a href="#">Terms and Conditions</a></label>
                                <span class="error"><?php //echo $termsErr;?></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row"> -->
                        <div class="col-sm-10">
                            <div class="form-check">
                                <button type="button" class="btn btn-danger" id="delete">Delete</button>                                
                                <!-- <button type="button" class="btn btn-warning" id="update">Update</button> -->
                                <!-- <button type="button" class="btn btn-danger" id="delete">Delete</button> -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="message"></div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
    jQuery(function(){
        jQuery("#delete").on('click', function(e){
            _data = jQuery('#sturegForm').serialize();
            _data = _data + '&type=delete&id=195';

            jQuery.ajax({
                type:'POST',
                url:"ajax.php",
                // data: {type:'delete', data:_data, id:193},
                data: _data,
                dataType:'html',
                success:function(a){
                    jQuery('.message').html('<div class="alert alert-success alert-dismissible" role="alert">'+a+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
                }
            });
            e.preventDefault();
        });
    });
    </script>
    <?php include 'footer.php';?>