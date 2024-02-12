<?php
// Connect to MySQL
$conn = mysqli_connect("localhost", "root", "", "views");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Increment the visit count
mysqli_query($conn, "UPDATE counter SET count = count + 1");

// Retrieve the updated count
$result = mysqli_query($conn, "SELECT count FROM counter");
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Close connection
mysqli_close($conn);

// Output the count
echo $count;
?>
