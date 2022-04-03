<?php

// $pref = ($_POST['spref']);
// $spref = implode(",", $spref);
// $pref = json_encode($pref);                 
// echo $pref;
// echo "<br />";
// $pref = json_decode($pref);
// print_r($pref);
// exit;

include "db.php";        

        function insert_data($conn, $name='', $phone='', $address='', $email='', $country='', $service=''){
            if(($name !='') && ($phone !='') && ($address !='') && ($email !='') && ($country !='') && ($service !='')){
                //sql to insert data
                $sql_insert_table = "INSERT INTO student (dbname, dbphone, dbfeedback, dbemail, dbmodelname, dbservice) VALUES ('$name', '$phone', '$address', '$email', '$country', '$service')";
                if ($conn->query($sql_insert_table) === TRUE) {
                    echo "You have successfully registered! Our Expert will Contact You Soon!!";
                }else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
               }
            }
        }

        function update_data($conn, $id=false, $name='', $roll='', $age='', $dob='', $phone='', $address='', $gender='', $pref = '', /*$email = '',*/ $website='', $country=''){              // we comment or remove $email here so that it will not take null(blank) value while update bcoz we dont need to update email
            if(!$id){
                echo "Please enter a valid ID";
            }else{
            //sql to update data
            $sql_update_table = "UPDATE student SET dbname='".$name."', dbroll=$roll, dbage=$age, dbdob='".$dob."', dbphone='".$phone."', dbfeedback='".$address."', dbgender='".$gender."', dbpref='".$pref."', dbwebsite='".$website."', dbmodelname='".$country."' WHERE id=".$id;

                if ($conn->query($sql_update_table) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
            }
        }

        

        function delete_data($conn, $id=false){
            if(!$id){
                echo "Please enter a valid ID";
            }else{
            // sql to delete a record
            $sql_delete_table = "DELETE FROM student WHERE id=".$id;
                if ($conn->query($sql_delete_table) === TRUE) {
                    echo "Record deleted successfully";
                } else {
                    echo "Error deleting record: " . $conn->error;
                }
            }
        }

        $name = '';
        
        $phone = '';
        $address = '';
       
        $email = '';
        
        $country = '';
        $service = '';

        if(isset($_POST["sname"])){
            $name = trim(urldecode($_POST["sname"]));
        }
        
        if (isset($_POST["sphone"])){
            $phone = trim(urldecode($_POST["sphone"]));
        }
        if(isset($_POST["saddress"])){
            $address = trim(urldecode($_POST["saddress"]));
        }
               
        if(isset($_POST["semail"])){
            $email = trim(urldecode($_POST["semail"]));
        }
        
        if(isset($_POST["scountry"])){
            $country = trim(urldecode($_POST["scountry"]));
        }
        if(isset($_POST["sservice"])){
            $service = trim(urldecode($_POST["sservice"]));
        }


        if($_POST['type'] == 'insert'){
            insert_data($conn, $name, $phone, $address, $email, $country, $service);
        }elseif($_POST['type'] == 'update_profile' && isset($_POST['id'])){
            $id = $_POST['id'];
            update_data($conn, $id, $name, $phone, $address, $email, $country, $service);
        }elseif($_POST['type'] == 'delete' && isset($_POST['id'])){
            $id = $_POST['id'];
            delete_data($conn, $id);
        }
    $conn->close();
?>        
