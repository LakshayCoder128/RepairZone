<?php include 'header.php';?>
    <div class="container">        
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">&nbsp;</div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" id="background">
            
                <br><h2 id="logo">Contact Us</h2><br/>
                <!-- <div id=logo><img src ="images/student_icon.png"><br/></div> -->
                <form name="sturegForm" id="sturegForm"  method="post">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Customer Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?php //echo $input_error1;?>" id="staticName" name="sname" value="<?php //echo $name;?>">
                            <span class="error"><?php //echo $nameErr;?></span>
                        </div>
                    </div>         
 
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Contact No.</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?php //echo $input_error5;?>" id="staticPhone" value="<?php //echo $phone;?>" name="sphone">
                                <span class="error"><?php //echo $phoneErr;?></span>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Feedback</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <textarea class="form-control <?php //echo $input_error6;?>" id="staticAddress"  name="saddress"><?php //echo $address;?></textarea>
                                    <span class="error"><?php //echo $addressErr;?></span>
                                </div>
                            </div>
                    </div>
     
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control <?php //echo $input_error7;?>" id="staticEmail" placeholder="email@example.com" name="semail" value="<?php //echo $email;?>">
                                <!-- <span class="error"></span> -->
                                <small id="emailHelp" class="form-text text-dark">We'll never share your email with anyone else.</small>
                                <span class="error"><?php //echo $emailErr;?></span>
                            </div>
                    </div>
                 
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="exampleFormControlSelect1">Model Name</label>
                        <div class="col-sm-10">
                            <select class="form-control <?php //echo $input_error10;?>" id="exampleFormControlSelect1" name="scountry">
                                <option value="">Select your Model</option>
                                <option value="Iphone 4" <?php //echo ($country=='Australia')? 'selected="selected"':'';?>>Iphone 4</option>
                                <option value="IPhone 5" <?php //echo ($country=='China')? 'selected="selected"':'';?>>IPhone 5</option>
                                <option value="IPhone 5S" <?php //echo ($country=='India')? 'selected="selected"':'';?>>IPhone 5S</option>
                                <option value="IPhone 6" <?php //echo ($country=='Japan')? 'selected="selected"':'';?>>IPhone 6</option>
                                <option value="IPhone 6 Plus" <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPhone 6 Plus</option>
                                <option value="IPhone 7" <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPhone 7</option>
                                <option value="IPhone 7 Plus" <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPhone 7 Plus</option>
                                <option value="IPhone 8 " <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPhone 8 </option>
                                <option value="IPhone 8 Plus" <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPhone 8 Plus</option>
                                <option value="IPhone 11 " <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPhone 11 </option>
                                <option value="IPhone 11 Mini " <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPhone 11 Mini </option>
                                <option value="IPhone 11 Pro " <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPhone 11 Pro </option>
                                <option value="IPhone 12 " <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPhone 12 </option>
                                <option value="IPhone 12 Mini" <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPhone 12 Mini</option>
                                <option value="IPhone 12 Max" <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPhone 12 Max</option>
                                <option value="IPhone 13" <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPhone 13</option>
                                <option value="IPhone 13 Mini" <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPhone 13 Mini</option>
                                <option value="IPhone 13 Pro" <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPhone 13 Pro</option>
                                <option value="IPhone 13 Pro Max" <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPhone 13 Pro Max</option>
                                <option value="IPhone X" <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPhone X</option>
                                <option value="IPhone Xr" <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPhone Xr</option>
                                <option value="IPad Air" <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPad Air</option>
                                <option value="IPad Mini" <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPad Mini</option>
                                <option value="IPad Mini 5" <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPad Mini 5</option>
                                <option value="IPad Mini 6" <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPad Mini 6</option>
                                <option value="IPad Pro" <?php //echo ($country=='US')? 'selected="selected"':'';?>>IPad Pro</option>
                            </select>
                            <span class="error"><?php //echo $countryErr;?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="exampleFormControlSelect2">Service</label>
                        <div class="col-sm-10">
                            <select class="form-control <?php //echo $input_error10;?>" id="exampleFormControlSelect2" name="sservice" >
                             <option value="">Select your Service</option>
                                <option value="Screen Repair" <?php //echo ($country=='Australia')? 'selected="selected"':'';?>>Screen Repair</option>
                                <option value="Battery Repair" <?php //echo ($country=='China')? 'selected="selected"':'';?>>Battery Repair</option>
                                <option value="Camera Repair" <?php //echo ($country=='India')? 'selected="selected"':'';?>>Camera Repair</option>
                                <option value="Jack Repair" <?php //echo ($country=='Japan')? 'selected="selected"':'';?>>Jack Repair</option>
                                <option value="Power ButtonRepair" <?php //echo ($country=='US')? 'selected="selected"':'';?>>Power ButtonRepair</option>
                                </select>
                            <span class="error"><?php //echo $countryErr;?></span>
                        </div>
                    </div><br><br>
                   
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="sterms" <?php //echo ($terms=='1')? 'checked="checked"':'';?> />
                                <label class="form-check-label" for="defaultCheck1">I have read and accept the <a href="#" class="text-warning">Terms and Conditions</a></label>
                                <span class="error"><?php //echo $termsErr;?></span>
                            </div>
                        </div>
                    </div><br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <div class="form-check">
                                <button type="button" class="btn btn-success " id="insert" onclick="validateForm()">Submit</button>
                                <button type="button"  class="btn btn-success "><a href="http://127.0.0.1:5500/Home.html" class="text-light" >Home</a></button>
                                <!-- <button type="button" class="btn btn-warning" id="update">Update</button> -->
                                <!-- <button type="button" class="btn btn-danger" id="delete">Delete</button> -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="message"></div>
            </div>
        </div>
    </div>    
    <section id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d391.9022848813447!2d77.1885636028624!3d28.64801561502166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d029933ce44f9%3A0xb4785f3742abb07b!2sFixMyMobile!5e0!3m2!1sen!2sin!4v1638620668339!5m2!1sen!2sin" width="100%" height="500px" style="border: 0;" allowfullscreen="" loading="lazy"></iframe>
</section>

    <script type="text/javascript">

    function validateForm(){
        var x = document.getElementsByClassName("error");
        var err_count = 0;

        var name = document.forms["sturegForm"]["sname"].value;
        if(name == ""){
            document.getElementById("staticName").className += " input-error";
            x[0].innerHTML = "*Student name cannot be empty.";
            err_count = err_count + 1;                
        }else if(!isNaN(name)){
            document.getElementById("staticName").className += " input-error";
            x[0].innerHTML = "*Please enter characters only.";
            err_count = err_count + 1;
        }else{
            x[0].innerHTML = " ";
            document.getElementById("staticName").classList.remove("input-error");
        }

        // var roll = document.forms["sturegForm"]["sroll"].value;
        // if(roll == ""){
        //     document.getElementById("staticRollno").className += " input-error";
        //     x[1].innerHTML = "*Roll No cannot be empty.";
        //     err_count = err_count + 1;
        // }else if(isNaN(roll)){
        //     document.getElementById("staticRollno").className += " input-error";
        //     x[1].innerHTML = "*Please enter numbers only.";  
        //     err_count = err_count + 1;
        // }else{
        //     x[1].innerHTML = " ";
        //     document.getElementById("staticRollno").classList.remove("input-error");
        // }

        // var age = document.forms["sturegForm"]["sage"].value;
        // if(age == ""){
        //     document.getElementById("staticAge").className += " input-error";
        //     x[2].innerHTML = "*Age cannot be empty.";
        //     err_count = err_count + 1;
        // }else if(isNaN(age)){
        //     document.getElementById("staticAge").className += " input-error";
        //     x[2].innerHTML = "*Please enter valid age.";  
        //     err_count = err_count + 1;
        // }else{
        //     x[2].innerHTML = " ";
        //     document.getElementById("staticAge").classList.remove("input-error");
        // }

        // var dob = document.forms["sturegForm"]["sdob"].value;
        // if(dob == ""){
        //     document.getElementById("staticDOB").className += " input-error";
        //     x[3].innerHTML = "*DOB cannot be empty.";
        //     err_count = err_count + 1;
        // }/*else if(isNaN(dob)){
        //     document.getElementById("staticDOB").className += " input-error";
        //     x[3].innerHTML = "*Please enter numbers only.";  
        //     err_count = err_count + 1;
        // }*/else{
        //     x[3].innerHTML = " ";
        //     document.getElementById("staticDOB").classList.remove("input-error");
        // }
        
        var phone = document.forms["sturegForm"]["sphone"].value;
        if(phone == ""){
            document.getElementById("staticPhone").className += " input-error";
            x[1].innerHTML = "*Phone number cannot be empty.";
            err_count = err_count + 1;
        }else if(isNaN(phone) || (phone.length != 10)){
            document.getElementById("staticPhone").className += " input-error";
            x[1].innerHTML = "*Please enter a valid 10-digit phone number.";
            err_count = err_count + 1;
        }
        else{
            x[1].innerHTML = " ";
            document.getElementById("staticPhone").classList.remove("input-error");
        }

        var address = document.forms["sturegForm"]["saddress"].value;
        if(address == ""){
            document.getElementById("staticAddress").className += " input-error";
            x[2].innerHTML = "*Address cannot be empty.";
            err_count = err_count + 1;
        }else{
            x[2].innerHTML = " ";
            document.getElementById("staticAddress").classList.remove("input-error");
        }

        // var gender = document.getElementsByName("sgender");
        // if((gender[0].checked == false) && (gender[1].checked == false) && (gender[2].checked == false)){
        //     //document.getElementById("inlineRadio1").className += " input-error";
        //     x[6].innerHTML = "*Please select gender.";
        //     err_count = err_count + 1;
        // }else{
        //     x[6].innerHTML = " ";            
        // }

        
        // var pref = [];            
        // var _spref_checked = false;
        // // var count_checked = 0;
        // $(".spref").each(function(){
        //     if($(this).is(':checked')){
        //         _spref_checked = true;
        //         // count_checked = count_checked + 1;
        //     }
        // });

        // if(count_checked >= 2){
        //     alert('ok');
        // }
        // if(!_spref_checked){
        //     x[7].innerHTML = "*Please select preference.";
        // }else{
        //     x[7].innerHTML = "";
        // }
        
        var email = document.forms["sturegForm"]["semail"].value;
        if(email == ""){
            document.getElementById("staticEmail").className += " input-error";
            x[3].innerHTML = "*Email address cannot be empty.";
            err_count = err_count + 1;
        }/*else if(email.indexOf('@') < 1 || email.indexOf('.') < 1){
            document.getElementById("staticEmail").className += " input-error";
            x[8].innerHTML = "*Please enter valid Email address.";
            err_count = err_count + 1;
        }*/else{
            x[3].innerHTML = " ";
            document.getElementById("staticEmail").classList.remove("input-error");
        }

        // var pwd = document.forms["sturegForm"]["spassword"].value;
        // if(pwd == ""){
        //     document.getElementById("inputPassword").className += " input-error";
        //     x[9].innerHTML = "*Password cannot be empty.";
        //     err_count = err_count + 1;
        // }else if((pwd.length < 8) || (pwd.length > 20)){
        //     document.getElementById("inputPassword").className += " input-error";
        //     x[9].innerHTML = "*Password should atleast 8-20 characters.";
        //     err_count = err_count + 1;
        // }else{
        //     x[9].innerHTML = " ";
        //     document.getElementById("inputPassword").classList.remove("input-error");
        // }

        // var website = document.forms["sturegForm"]["swebsite"].value;
        // if(website == ""){
        //     document.getElementById("inputWebsite").className += " input-error";
        //     x[10].innerHTML = "*Website cannot be empty.";
        //     err_count = err_count + 1;
        // }else{
        //     x[10].innerHTML = " ";
        //     document.getElementById("inputWebsite").classList.remove("input-error");
        // }

        /*var country = document.getElementById("exampleFormControlSelect1");            
        var strUser = country.options[country.selectedIndex].value;
        alert(strUser);*/

        var country = document.forms["sturegForm"]["scountry"].value;
        if(country == ""){
            document.getElementById("exampleFormControlSelect1").className += " input-error";
            x[4].innerHTML = "*Please select country";
            err_count = err_count + 1;
        }else{
            x[4].innerHTML = " ";
            document.getElementById("exampleFormControlSelect1").classList.remove("input-error");
        }

        var service = document.forms["sturegForm"]["sservice"].value;
        if(service == ""){
            document.getElementById("exampleFormControlSelect2").className += " input-error";
            x[5].innerHTML = "*Please select country";
            err_count = err_count + 1;
        }else{
            x[5].innerHTML = " ";
            document.getElementById("exampleFormControlSelect2").classList.remove("input-error");
        }
        
        var terms = document.getElementsByName("sterms");
        if (terms[0].checked == false){
            x[6].innerHTML = "*Accept terms & conditions.";
            err_count = err_count + 1;
        }else{
            x[6].innerHTML = " ";
            // document.getElementById("defaultCheck1").classList.remove("input-error");
        }
        if(err_count > 0){
            return false;
        }else{
            jQuery(function(){
                jQuery("#insert").on('click', function(e){
                _data = jQuery('#sturegForm').serialize();
                _data = _data + '&type=insert';

                jQuery.ajax({
                    type:'POST',
                    url:"ajax.php",
                    data: _data,
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

    // jQuery(function(){
    //     jQuery('.calendar').datetimepicker({
    //         format: 'DD-MM-YYYY'            
    //     });
    // });
    
    

    // jQuery(function(){
    //     jQuery("#update").on('click', function(e){
    //         _data = jQuery('#sturegForm').serialize();

    //         jQuery.ajax({
    //             type:'POST',
    //             url:"ajax.php",
    //             data: {type:'update', data:_data, id:32},
    //             dataType:'html',
    //             success:function(a){
    //                 jQuery('.message').html('<div class="alert alert-success alert-dismissible" role="alert">'+a+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
    //             }
    //         });
    //         e.preventDefault();
    //     });
    // });

    // jQuery(function(){
    //     jQuery("#delete").on('click', function(e){
    //         _data = jQuery('#sturegForm').serialize();

    //         jQuery.ajax({
    //             type:'POST',
    //             url:"ajax.php",
    //             data: {type:'delete', data:_data, id:34},
    //             dataType:'html',
    //             success:function(a){
    //                 jQuery('.message').html('<div class="alert alert-success alert-dismissible" role="alert">'+a+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
    //             }
    //         });
    //         e.preventDefault();
    //     });
    // });

    // function showpassword() {
    //     var x = document.getElementById("inputPassword");
    //     if (x.type === "password") {
    //         x.type = "text";
    //     } else {
    //         x.type = "password";
    //     }
    // } 
    </script>
<?php include 'footer.php';?>