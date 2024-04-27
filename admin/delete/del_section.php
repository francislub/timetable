<?php
require_once '../../includes/config.php';

// Assuming you have established a database connection and stored it in the $conn variable

  // Get the course id from the URL
  $id = $_GET['id'];
   // Delete the course from the database
   $sql = "DELETE FROM sections WHERE id = $id";

   if ($db_conn->query($sql) === TRUE) {
     // Redirect back to the course.php page
     header("Location: ../admin/section.php");
     exit;
   } else {
     echo "Error deleting record: " . $db_conn->error;
   }

// Close the database connection
$db_conn->close();
?>
