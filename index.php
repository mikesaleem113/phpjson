<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * from student";
    $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($connection));

        //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    
    echo str_replace(array('[', ']'), '', htmlspecialchars(json_encode($emparray), ENT_NOQUOTES));;
    
//echo "Connected successfully";
?>
       
    </body>
</html>
