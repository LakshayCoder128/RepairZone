<?php include "db.php"?>
<?php
if(!isset($_SESSION['user'])){
    header('Location: http://localhost/corewebsite/login.php');
}
?>
<?php include 'header.php';?>

<div class="container">
    <div class="row">
        <?php include 'list.php';?>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" id="dashboard">
            <div class="imgcontainer2">
                <img src="images/img_avatar2.png" class="avatar2">
            </div>
            <?php
            

                $servername = "localhost";
                $username = "root";
                $password = "";
            
                //Create connection
                $conn = new mysqli($servername, $username, $password, 'mydb');
            
                //Check connection
                if($conn->connect_error){
                    echo "Connection failed<br />";
                    die("Connection failed: " . $conn->connect_error);
                }else{
                    //echo "Connected successfully<br />";
                    $id = $_SESSION['user']['id'];
                    $sql_select_table = "SELECT id, dbname, dbroll, dbage, dbdob, dbphone, dbaddress, dbgender, dbpref, dbemail, dbpwd, dbwebsite, dbcountry FROM student WHERE id = '$id'";
                    $result = $conn->query($sql_select_table);
            
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $name = $_SESSION['user']['dbname'];
                            $id = $_SESSION['user']['id'];
                            echo "<div style='font-size: 35px;font-weight: bold;text-align:center;text-transform: capitalize;'>welcome ".$name."</div>";
                            echo "<br>";
                            echo "ID: ".$id;
                            echo "<br>";
                            echo "Roll No: ".$row['dbroll'];
                            echo "<br>";
                            echo "Age: ".$row['dbage'];
                            echo "<br>";                            
                            echo "DOB: ".$row['dbdob'];
                            echo "<br>";
                            echo "Phone: ".$row['dbphone'];
                            echo "<br>";
                            echo "Address: ".$row['dbaddress'];
                            echo "<br>";
                            echo "Gender: ".$row['dbgender'];
                            echo "<br>";
                            echo "Preference: ".$row['dbpref'];
                            echo "<br>";
                            echo "Email: ".$row['dbemail'];
                            echo "<br>";
                            // echo "Password: ".$row['dbpwd'];
                            // echo "<br>";
                            echo "Website: ".$row['dbwebsite'];
                            echo "<br>";
                            echo "Country: ".$row['dbcountry'];
                        }
                    } else {
                        echo "0 results";
                    }
                }          
            
            // print_r($_SESSION['user']);              // to print all fields (array)
            ?>            
        </div>
    </div>
</div>
<?php include 'footer.php';?>