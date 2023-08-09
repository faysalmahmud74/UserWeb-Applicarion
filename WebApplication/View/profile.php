<?php  
include '../Controller/header.php';
require_once '../MOdel/db.php';
session_start();
$username = $_SESSION["username"];
//$username = $_POST['username'];
/*
// Execute a query to retrieve data from a table
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

// Display the data in an HTML table

echo "<table border='3'>";
echo "<tr><th>Name</th><th>Phone</th><th>Email</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["name"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["email"] . "</td></tr>";
}
echo "</table>";

// Close the connection to the database
mysqli_close($conn);*/

//__________________________AJAX Post method__________________________

$sql = "SELECT name, phone, email FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

//echo json_encode($data);
mysqli_close($conn);
?>

<html lang="en">
<title>Profile Information</title>
<head>
<style>
.back-button {
  padding: 10px 20px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

.back-button:hover {
    background-color: #0056b3;
}

table {
  border-collapse: collapse;
  width: 50%;
  max-width: 800px;
  margin: auto;
  background: white;
  padding: 10px;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<center><h3>Profile Information</h3></center>
<div class = "t_container">
<?php
echo '<table>';
echo '<thead><tr><th> Name </th><th> Contact Number </th><th> Email </th></tr></thead>';
echo '<tbody>';
foreach ($data as $item) {
    echo '<tr>';
    echo '<td>' . $item['name'] . '</td>';
    echo '<td>' . $item['phone'] . '</td>';
    echo '<td>' . $item['email'] . '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';
?>
<br><br><br><br>
<center><button class="back-button" onclick="history.back()">Back</button></center>
</div>
</body>
</html>

<?php include '../Controller/footer.php'; ?>