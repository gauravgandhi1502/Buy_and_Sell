
<?php
    // make a delete record name button
  if(isset($_POST['deleteButton'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "BuySell";

    $conn = new mysqli($server, $username, $password, $db);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    session_start();

    // set user email
    $email = $_SESSION['User_id'];
    $Product_Name = $_POST['Product_Name'];
    $Product_category = $_POST['Category'];
    
    // SQL QUERY
    $query = "DELETE FROM `$Product_category` WHERE `$Product_category`.`email` = $email AND `$Product_category`.`Product_Name` = $Product_Name";

    
    // FETCHING DATA FROM DATABASE
    $conn->query($query);
    $conn->close();

    header("Location: index.php");
    exit();
}

?> 