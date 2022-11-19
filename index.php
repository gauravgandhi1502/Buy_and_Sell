<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>
<link rel="stylesheet" href="/Project/Home.css">
<style>

  #hide{
    display: none;
  }

.card button{
  margin: 10px;

  background-color: green !important;
  color: white;
}
.dropbtn {
  background-color: #3498DB;
  color: white;
  
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  
  display: inline-block;
}

.dropdown-content {
  display: none;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
/* 
.drop{
  display: flex;
  justify-content: center;
  flex-direction: column;
  margin-top: 150px;
  align-items: center;
} */

.dropbtn{
  width: 200px;
  height: 50px;
  background-color: white;
  color: black;
  font-weight: bolder;
  border:2px solid black;
}

.dropbtn:hover{
 
  width: 200px;
  height: 50px;
  background-color: black;
  color: white;
  font-weight: bolder;
  border: 2px solid white;
}
#myDropdown{
  width: 200px;
  height: 150px;

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
<body>

<?php
$server = "localhost";
    $username = "root";
    $password = "";
    $db = "BuySell";

    $conn = new mysqli($server, $username, $password, $db);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
    <center>
        <header>

          <nav class="navbar">
            <div class="buyNsell">
              IITG Buy and Sell
            </div>


            <div class="content">
              <ul class="items">
                <li class="sell">
                  <a class="nav-link" href="/Project/dropdown.html">Sell</a>
                </li>

               
                <li class="sell">
                  <a class="nav-link" href="/Project/myProduct.php">My Product</a>
                </li>
                <li class="contactus">
                  <a class="nav-link" href="/Project/connect.html">Contact us</a>
                </li>
               
                <div class="drop">
                    <h2></h2>


                      <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">- - - Select Category - - - </button>
                        <div id="myDropdown" class="dropdown-content">
                          <a href="/Project/electronics1.php">Electronics</a>
                          <a href="/Project/vehicle1.php">Vehicle</a>
                          <a href="/Project/furniture1.php">Furniture</a>
                          <a href="/Project/stationary1.php">Stationary</a>
                          <a href="/Project/others1.php">Others</a>
                        </div>
                      </div>
                    </div>
                    <script>
                    /* When the user clicks on the button,
                    toggle between hiding and showing the dropdown content */
                    function myFunction() {
                      document.getElementById("myDropdown").classList.toggle("show");
                    }

                    // Close the dropdown if the user clicks outside of it
                    window.onclick = function(event) {
                      if (!event.target.matches('.dropbtn')) {
                        var dropdowns = document.getElementsByClassName("dropdown-content");
                        var i;
                        for (i = 0; i < dropdowns.length; i++) {
                          var openDropdown = dropdowns[i];
                          if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                          }
                        }
                      }
                    }
                    </script>


                                  
               
              </ul>
            </div>


        </nav>


        </header>

        <main>
          <section>

            <div id="display">
              <?php
              $query = "SELECT * FROM `electronics`";

              $result = mysqli_query($conn, $query);

              while($data = mysqli_fetch_assoc($result))
              {
                ?>
                <div class = "card">
                  <img src="./Upload/<?php echo $data['Image'];?>" >
                  <div class="carditems">
                  <div class="productName">Product Name : <?php echo $data['Product_Name'];?></div>
                  <div class="company">Company : <?php echo $data['Company'];?></div>
                  <div class="Price">Price : <?php echo $data['Price'];?></div>
                  <div class="Desciption">Description : <?php echo $data['Description'];?></div>
                  </div>

                  <form action="Show_details.php" method="post">

                    <input type="text" id="hide" name= "emailss" value=<?php echo $data['email'];?>></input>
                    <button name="btn">BUY</button>
              
                  </form>
                  


                </div>
                <?php
              }
              ?>
              <div id="display">
                <?php
                $query = "SELECT * FROM `vehicle`";

                $result = mysqli_query($conn, $query);

                while($data = mysqli_fetch_assoc($result))
                {
                  ?>
                  <div class = "card">
                    <img src="./Upload/<?php echo $data['Image'];?>" >
                    <div class="carditems">
                    <div class="productName">Product Name : <?php echo $data['Product_Name'];?></div>
                    <div class="company">Company : <?php echo $data['Company'];?></div>
                    <div class="Price">Price : <?php echo $data['Price'];?></div>
                    <div class="Desciption">Description : <?php echo $data['Description'];?></div>
                    </div>
                  

                    <form action="Show_details.php" method="post">

                    <input type="text" id="hide" name= "emailss" value=<?php echo $data['email'];?>></input>
                    <button name="btn">BUY</button>
              
                  </form>

                  </div>
                  <?php
                }
                ?>

    </div>
    <div id="display">
                <?php
                $query = "SELECT * FROM `furniture`";

                $result = mysqli_query($conn, $query);

                while($data = mysqli_fetch_assoc($result))
                {
                  ?>
                  <div class = "card">
                    <img src="./Upload/<?php echo $data['Image'];?>" >
                    <div class="carditems">
                    <div class="productName">Product Name : <?php echo $data['Product_Name'];?></div>
                    <div class="company">Company : <?php echo $data['Company'];?></div>
                    <div class="Price">Price : <?php echo $data['Price'];?></div>
                    <div class="Desciption">Description : <?php echo $data['Description'];?></div>
                    </div>

                    <form action="Show_details.php" method="post">

                    <input type="text" id="hide" name= "emailss" value=<?php echo $data['email'];?>></input>
                    <button name="btn">BUY</button>
              
                  </form>
                  </div>
                  <?php
                }
                ?>

    </div>
    <div id="display">
                <?php
                $query = "SELECT * FROM `books`";

                $result = mysqli_query($conn, $query);

                while($data = mysqli_fetch_assoc($result))
                {
                  ?>
                  <div class = "card">
                    <img src="./Upload/<?php echo $data['Image'];?>" >
                    <div class="carditems">
                    <div class="productName">Product Name : <?php echo $data['Product_Name'];?></div>
                    <div class="company">Company : <?php echo $data['Company'];?></div>
                    <div class="Price">Price : <?php echo $data['Price'];?></div>
                    <div class="Desciption">Description : <?php echo $data['Description'];?></div>
                    </div>
                    <form action="Show_details.php" method="post">

                    <input type="text" id="hide" name= "emailss" value=<?php echo $data['email'];?>></input>
                    <button name="btn">BUY</button>
              
                  </form>

                  </div>
                  <?php
                }
                ?>

    </div>
    <div id="display">
                <?php
                $query = "SELECT * FROM `others`";

                $result = mysqli_query($conn, $query);

                while($data = mysqli_fetch_assoc($result))
                {
                  ?>
                  <div class = "card">
                    <img src="./Upload/<?php echo $data['Image'];?>" >
                    <div class="carditems">
                    <div class="productName">Product Name : <?php echo $data['Product_Name'];?></div>
                    <div class="company">Company : <?php echo $data['Company'];?></div>
                    <div class="Price">Price : <?php echo $data['Price'];?></div>
                    <div class="Desciption">Description : <?php echo $data['Description'];?></div>
                    </div>

                    <form action="Show_details.php" method="post">
                    
                    <input type="text" id="hide" name= "emailss" value=<?php echo $data['email'];?>></input>
                    <button name="btn">BUY</button>
              
                  </form>
                  </div>
                  <?php
                }
                ?>

    </div>


        </div>
                
          </section>


        </main>
    


    </center>
</body>
</html>