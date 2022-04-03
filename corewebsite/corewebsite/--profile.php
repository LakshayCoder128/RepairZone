<h1>Welcome</h1>
<?php
// echo "User Name: ".$_POST["uname"];
// echo "<br>";
// echo "Password: ".$_POST["password"];
// echo "<br><br>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "Connection failed<br />";
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected successfully<br />";
}

//sql to select table
// $query = "SELECT * FROM student where dbname='".$_POST["uname"]."' and dbpwd='".$_POST["password"]."' ";
$query = "SELECT * FROM student WHERE dbname='".$_POST["uname"]."' AND dbpwd='123456' ";
$result = $conn->query($query);
if($result->num_rows > 0){
    // exist
    while($row = $result->fetch_assoc()){
        $user = $row;
    }
    session_start();
    $_SESSION['user'] = $user;
    header('Location: http://localhost/corewebsite/account.php');
}else{
    // does not exist
    header('Location: http://localhost/corewebsite/login.php?er=1');
}
$conn->close();
?>