
<?php 
include("register.php");
global $database_conn;
$data = "SELECT * FROM users";
$result = $database_conn->query($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    <title>Table</title>
</head>
<body>
    <style>
       table{
            color: black;
            border: 1px solid black;
            margin: 0 auto;
            width: 30%;
            text-align: center;
        }
        th{
            border: 1px solid black;
        }
        
    </style>
            <!-- fetch the data from the database in this table , from the users table -->
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>action</th>
  </tr>
  <?php
        // Fetch and display data in the table
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo '<td><a href="#" class="btn btn-primary">edit</a> <a href="#" class="btn btn-danger">delete</a></td>';
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No data found</td></tr>";
        }
        ?>
</table>
<?php
    ?>
</body>
</html>

<!-- select * FROM users -->