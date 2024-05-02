<?php
$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "Schools";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM student WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $name = $row['name'];
            $age = $row['age'];
            $address = $row['address'];
            $course = $row['course'];
        }
    } else {
        header('Location: getData_student.php');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
    <style>
        /* Form container */
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Form fields */
        .form-container input[type="text"],
        .form-container textarea {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Form submit button */
        .form-container input[type="submit"] {
            background-color: blue;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Form submit button on hover */
        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="form-container">
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="name">Name:</label>
        <input type="text" id="name" placeholder="Your name" name="name" value="<?php echo $name; ?>">

        <label for="age">Age:</label>
        <input type="text" id="age" placeholder="Your age" name="age" value="<?php echo $age; ?>">

        <label for="course">Course:</label>
        <input type="text" id="course" placeholder="Your course" name="course" value="<?php echo $course; ?>">

        <label for="address">Address:</label>
        <textarea id="address" placeholder="Your address" name="address"><?php echo $address; ?></textarea>

        <input type="submit" value="Save" name="save">
    </form>
</div>
</body>
</html>

<?php
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $course = $_POST['course'];
    $sql = "UPDATE student SET name='$name', age='$age', course='$course', address='$address' WHERE id='$id'";
    $result = $conn->query($sql);
    if ($result === TRUE) {
        echo "Record updated successfully.";
        header('Location: getData_student.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
