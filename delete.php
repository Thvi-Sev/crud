<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Validate ID
    if (!is_numeric($id)) {
        die("Invalid ID");
    }

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "database";

    // Create a connection
    $connection = new mysqli($server, $username, $password, $database);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Prepare the SQL statement
    $stmt = $connection->prepare("DELETE FROM clients WHERE id = ?");
    $stmt->bind_param("i", $id); // "i" indicates that the parameter is an integer

    // Execute the statement and check for success
    if ($stmt->execute()) {
        // Record deleted successfully
        // You might want to set a success message here or log the action
    } else {
        // Handle error
        echo "Error deleting record: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $connection->close();
}

// Redirect to the index page
header("Location: /crud/index.php");
exit;
?>