

<?php
$servername = "localhost";
$username = "root";
$pass = "rootroot";
$dbname = "schools";

$conn = new mysqli($servername, $username, $pass, $dbname);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
} else {
    echo "Database connected successfully";
}


if (isset($_GET['id'])) {
    $delete_id = $_GET['id'];
    
    
    $sql = "DELETE FROM student WHERE id = $delete_id";
    
    if ($conn->query($sql) === TRUE) {
        
        header("Location: getData_student.php");
        exit();
    } else {
        echo "Error deleting item: " . $conn->error;
    }
}
?>