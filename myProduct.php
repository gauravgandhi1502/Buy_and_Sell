<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>

#hide{

  display: none;
}
img{

width: 30%;

height: 30%;

padding : 20px;
}

.card{

display: flex;
flex-direction: row;


align-items: center;

justify-content: center;

margin: 10px;

}

button{
  margin: 10px;

  background-color: red !important;
  color: white;
}

.carditems{
display: flex;
flex-direction: column;

padding: 30px;
font-size : bolder;

font-weight: bolder;




}

#display{

align-items: center;

justify-content: center;
}

</style>
<link rel="stylesheet" href="/Project/Home.css">
<body>
<?php

session_start();

$server = "localhost";
    $username = "root";
    $password = "";
    $db = "BuySell";

    $conn = new mysqli($server, $username, $password, $db);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

    <nav class="navbar">
        <div class="buyNsell">
          IITG Buy and Sell
        </div>


        <div class="content">
          <ul class="items">
            <li class = "home">
              <a href="/Project/index.php"> Home </a>
            </li>
            <li class="sell">
              <a class="nav-link" href="/Project/dropdown.html">Sell</a>
            </li>

           
       
            <li class="contactus">
                <a class="nav-link" href="/Project/connect.html">Contact us</a>
            </li>
         
           
          </ul>
        </div>


    </nav>



    <section>

     <div id="display">
          <?php
          $query = "SELECT * FROM vehicle";

          $result = mysqli_query($conn, $query);

          while($data = mysqli_fetch_assoc($result))
          {
            
            
            if($data['email']!=$_SESSION['User_id'])
              continue;
            ?>
            <div class = "card">
              <img src="./Upload/<?php echo $data['Image'];?>" >
              <div class="carditems">
              <div class="productName">Product Name : <?php echo $data['Product_Name'];?></div>
              <div class="company">Company : <?php echo $data['Company'];?></div>
              <div class="Price">Price : <?php echo $data['Price'];?></div>
              <div class="Desciption">Description : <?php echo $data['Description'];?></div>

              <form action="delete_record.php" method = "post">
              <button name="deleteButton">Delete</button>
              <input type="text" id="hide" name= "Product_Name" value=<?php echo $data['Product_Name'];?>></input>
              <input type="text" id="hide" name= "Category" value="vehicle"></input>

              </form>
              </div>


            </div>
            <?php
          }
          ?>

<?php
          $query = "SELECT * FROM electronics";

          $result = mysqli_query($conn, $query);

          while($data = mysqli_fetch_assoc($result))
          {
            
            
            if($data['email']!=$_SESSION['User_id'])
              continue;
            ?>
            <div class = "card">
              <img src="./Upload/<?php echo $data['Image'];?>" >
              <div class="carditems">
              <div class="productName">Product Name : <?php echo $data['Product_Name'];?></div>
              <div class="company">Company : <?php echo $data['Company'];?></div>
              <div class="Price">Price : <?php echo $data['Price'];?></div>
              <div class="Desciption">Description : <?php echo $data['Description'];?></div>

              <form action="delete_record.php" method = "post">
              <button name="deleteButton">Delete</button>
              <input type="text" id="hide" name= "Product_Name" value=<?php echo $data['Product_Name'];?>></input>
              <input type="text" id="hide" name= "Category" value="vehicle"></input>

              </form>
              </div>


            </div>
            <?php
          }
          ?>


<?php
          $query = "SELECT * FROM others";

          $result = mysqli_query($conn, $query);

          while($data = mysqli_fetch_assoc($result))
          {
            
            
            if($data['email']!=$_SESSION['User_id'])
              continue;
            ?>
            <div class = "card">
              <img src="./Upload/<?php echo $data['Image'];?>" >
              <div class="carditems">
              <div class="productName">Product Name : <?php echo $data['Product_Name'];?></div>
              <div class="company">Company : <?php echo $data['Company'];?></div>
              <div class="Price">Price : <?php echo $data['Price'];?></div>
              <div class="Desciption">Description : <?php echo $data['Description'];?></div>

              <form action="delete_record.php" method = "post">
              <button name="deleteButton">Delete</button>
              <input type="text" id="hide" name= "Product_Name" value=<?php echo $data['Product_Name'];?>></input>
              <input type="text" id="hide" name= "Category" value="vehicle"></input>

              </form>
              </div>


            </div>
            <?php
          }
          ?>
 <?php
          $query = "SELECT * FROM books";

          $result = mysqli_query($conn, $query);

          while($data = mysqli_fetch_assoc($result))
          {
            
            
            if($data['email']!=$_SESSION['User_id'])
              continue;
            ?>
            <div class = "card">
              <img src="./Upload/<?php echo $data['Image'];?>" >
              <div class="carditems">
              <div class="productName">Product Name : <?php echo $data['Product_Name'];?></div>
              <div class="company">Company : <?php echo $data['Company'];?></div>
              <div class="Price">Price : <?php echo $data['Price'];?></div>
              <div class="Desciption">Description : <?php echo $data['Description'];?></div>

              <form action="delete_record.php" method = "post">
              <button name="deleteButton">Delete</button>
              <input type="text" id="hide" name= "Product_Name" value=<?php echo $data['Product_Name'];?>></input>
              <input type="text" id="hide" name= "Category" value="vehicle"></input>

              </form>
              </div>


            </div>
            <?php
          }
          ?>
 <?php
          $query = "SELECT * FROM furniture";

          $result = mysqli_query($conn, $query);

          while($data = mysqli_fetch_assoc($result))
          {
            
            
            if($data['email']!=$_SESSION['User_id'])
              continue;
            ?>
            <div class = "card">
              <img src="./Upload/<?php echo $data['Image'];?>" >
              <div class="carditems">
              <div class="productName">Product Name : <?php echo $data['Product_Name'];?></div>
              <div class="company">Company : <?php echo $data['Company'];?></div>
              <div class="Price">Price : <?php echo $data['Price'];?></div>
              <div class="Desciption">Description : <?php echo $data['Description'];?></div>

              <form action="delete_record.php" method = "post">
              <button name="deleteButton">Delete</button>
              <input type="text" id="hide" name= "Product_Name" value=<?php echo $data['Product_Name'];?>></input>
              <input type="text" id="hide" name= "Category" value="vehicle"></input>

              

              </form>
              </div>


            </div>
            <?php
          }
          ?>


</div>


  </div>
    </section>
   
</body>
</html>