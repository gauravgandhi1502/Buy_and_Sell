<?php
  if(isset($_POST['emailss'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "BuySell";

    $conn = new mysqli($server, $username, $password, $db);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $email = $_POST['emailss'];
    
    // // SQL QUERY
    $query = "SELECT * FROM `user`;";
    
    // // FETCHING DATA FROM DATABASE
    $result = $conn->query($query);
    
    
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            if($row["email"] == $email ) {
                echo "Email : " ;
                echo $email;
                echo "<br><br>";
                echo "Name :" ;
                echo $row['fname'];
                echo " ";
                echo $row['lname'];

                echo "<br><br>";
                echo "Phone number :" ;
                echo $row['phone'];

                
            }

        }
        
    
    } 




    $conn->close();
}

?> 