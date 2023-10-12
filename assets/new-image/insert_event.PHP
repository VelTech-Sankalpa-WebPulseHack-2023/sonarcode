<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_database";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Get form data
$event_name = $_POST['event-name'];
$event_date = $_POST['event-date'];
$event_time = $_POST['event-time'];
$event_location = $_POST['event-location'];
$event_description = $_POST['event-description'];
// Insert data into the database
$sql = "INSERT INTO events (event_name, event_date, event_time, event_location, event_description)
VALUES ('$event_name', '$event_date', '$event_time', '$event_location', '$event_description')";
if ($conn->query($sql) === TRUE) {
  echo "Event created successfully";
} else {
  echo "Error: " . $conn->error;
}
$conn->close();
?>