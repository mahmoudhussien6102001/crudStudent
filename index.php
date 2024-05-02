
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
    .form-container input[type="email"],
    .form-container textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    /* Form submit button */
    .form-container input[type="submit"] {
      background-color:red;
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
  <h1 style="text-align:center;color:green">Enter data ya Student</h1>
  <div class="form-container">
    <form  method="POST" action="Save_student.php">
      <label for="name">Name:</label>
      <input type="text" id="name" placeholder="Your name" name="name">
      
      <label for="age">Age:</label>
      <input type="text" id="age" placeholder="Your age" name="age">
      <label for="course">Course:</label>
      <input type="text" id="course" placeholder="Your course" name="course">
      
      
      <label for="address">Address:</label>
      <textarea id="address" placeholder="Your address" name="address"></textarea>
      
      <input type="submit" value="Submit" name="submit">
    </form>
  </div>
</body>
</html>