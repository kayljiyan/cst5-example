<?php
const SERVER_NAME = "localhost";
const USERNAME = "root";
const PASSWORD = "";
const DB_NAME = "phpexample";

// Create connection
$conn = new mysqli(SERVER_NAME, USERNAME, PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

// Creating data (INSERT Statement)
// $sql = "INSERT INTO accounts (username, password)
// VALUES ('jhustine', 'jhustinegwapo123')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// Reading data (SELECT statement)
// $sql = "SELECT * FROM accounts";
// // Execute the SQL query
// $result = $conn->query($sql);

// // Process the result set
// if ($result->num_rows > 0) {
//   // Output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "Username: " . $row["username"] . "<br/>";
//     // echo "id: " . $row["id"]. " - Username: " . $row["username"]. "- Password:" . " " . $row["password"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }

// Update the data (UPDATE statement)
// $sql = "UPDATE accounts SET password = 'pangit123' WHERE id = 3";

// if ($conn->query($sql) === TRUE) {
//     echo "Updated successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// Delete the data (DELETE statement)
$sql = "DELETE FROM accounts WHERE id = 1";

if ($conn->query($sql) === TRUE) {
    echo "Deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>