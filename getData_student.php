<?php
$servername = "localhost";
$username = "root";
$pass = "rootroot";
$dbname = "schools";

$conn = new mysqli($servername, $username, $pass, $dbname);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>

    <!DOCTYPE html>
    <html>
    <head>
      <title>HTML Table with CSS</title>
      <style>
        table {
          border-collapse: collapse;
          width: 100%;
        }
        
        th, td {
          padding: 8px;
          text-align: left;
          border-bottom: 1px solid #ddd;
        }
        
        th {
          background-color: orange;
        }
        
        tr:hover {
          background-color:lightgrey;
        }
      </style>
    </head>
    <body>
      
      <h2 style="text-align:center;color:green">Information student</h2>
      
      <table>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Age</th>
          <th>Address</th>
          <th>Course</th>
          <th>Actions</th>
        </tr>
        
        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['age']; ?></td>
              <td><?php echo $row['address']; ?></td>
              <td><?php echo $row['course']; ?></td>
              <td ><a href="DeleteStudent.php?<?php echo 'id='.$row['id']?>"><button style="background-color:red;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer"> Delete</button></a>
              <a href="EditStudent.php?<?php echo 'id='.$row['id'] ?>"><button style="background-color:green;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer"> Edit</button></a></td>
            </tr>
            <?php
        }
        ?>
        
      </table>
      
    </body>
    </html>
    
    <?php
} else {
    echo "No records found.";
}

$conn->close();
?>