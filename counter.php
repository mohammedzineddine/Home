<?php
// Connect to MySQL
$conn = mysqli_connect("localhost", "username", "password", "views");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Increment the visit count
mysqli_query($conn, "UPDATE visit_count SET count = count + 1");

// Retrieve the updated count
$result = mysqli_query($conn, "SELECT count FROM visit_count");
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Close connection
mysqli_close($conn);

// Output the count
echo $count;
?>
