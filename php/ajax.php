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
        }
    $conn->close();
?>        
