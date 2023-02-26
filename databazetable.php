sql
CREATE TABLE registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    modified_by VARCHAR(255),
    modified_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  );
  function log_new_record($user_id, $table_name, $record_id) {
    $action = "New record added to " . $table_name;
    $details = "Record ID: " . $record_id;
    $timestamp = date("Y-m-d H:i:s");
    
    // Insert log into database
    $conn = mysqli_connect("localhost", "username", "password", "database_name");
    $sql = "INSERT INTO logs (action, user_id, timestamp, details) 
            VALUES ('$action', '$user_id', '$timestamp', '$details')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
  }
  
  // Call the function when a new record is added
  $user_id = $_SESSION['user_id'];
  $table_name = "orders";
  $record_id = 123;
  log_new_record($user_id, $table_name, $record_id);
  
  
  
  ose krejt me ni ven
  // Connect to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
  // Check if the user is logged in
  session_start();
  if (!isset($_SESSION['user_id'])) {
      header('Location: login.php');
      exit();
  }
  
  // Add information
  if (isset($_POST['add_info'])) {
      $info = $_POST['info'];
      $user_id = $_SESSION['user_id'];
      $timestamp = date('Y-m-d H:i:s');
      $action = 'add';
  
      $sql = "INSERT INTO information (info, user_id, timestamp, action) VALUES ('$info', '$user_id', '$timestamp', '$action')";
      if ($conn->query($sql) === TRUE) {
          echo "Information added successfully";
      } else {
          echo "Error adding information: " . $conn->error;
      }
  }
  
  // Modify information
  if (isset($_POST['modify_info'])) {
      $id = $_POST['id'];
      $info = $_POST['info'];
      $user_id = $_SESSION['user_id'];
      $timestamp = date('Y-m-d H:i:s');
      $action = 'modify';
  
      $sql = "UPDATE information SET info='$info', user_id='$user_id', timestamp='$timestamp', action='$action' WHERE id=$id";
      if ($conn->query($sql) === TRUE) {
          echo "Information modified successfully";
      } else {
          echo "Error modifying information: " . $conn->error;
      }
  }
  
  // Display information
  $sql = "SELECT information.*, users.username FROM information JOIN users ON information.user_id = users.id";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          echo "Info: " . $row['info'] . "<br>";
          echo "User: " . $row['username'] . "<br>";
          echo "Timestamp: " . $row['timestamp'] . "<br>";
          echo "Action: " . $row['action'] . "<br>";
          echo "<hr>";
      }
  } else {
      echo "No information found";
  }
  
  // Close the connection
  $conn->close();
  -
  
  

