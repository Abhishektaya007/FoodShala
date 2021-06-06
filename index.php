<?php
session_start();
?>

<html>

  <head>
    <title>  </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body,html {
  height: 100%;
}

body {
  padding-top: 50px;
}


#myBtn{
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: green;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}
#myBtn:hover {
  background-color: darkgreen;
  color: white;
}

.wide {
  width:100%;
  height:100%;
  
  background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
  background-size:cover; }

.wide img {
  width:100%;
  border-radius: 10px;

}

.tagline {
  text-align: center;
  font-size: 50px;
  color: white;
  text-shadow: 2px 2px 5px darkgrey;
font-family: "Cursive", "Cursive", monospace;
  transform: translate(-50%, -50%);
  position: absolute;
  top: 55%;
  left: 50%;
}

.logo {
  color:#fff;
  font-weight:800;
  font-size:14pt;
  padding:25px;

  text-align:center;
}

.line {
  padding-top:20px;
  white-space:no-wrap;
  overflow:hidden;
  text-align:center;
  padding: 10px;
  border-width: 10px;
}

.orderblock{
  border-radius: 25px;
  border: 2px solid #73AD21;
  padding: 20px;
  margin-left: 5%;
  width: 90%;
  height: 200px;
  text-align: center;
  background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
}

.paragraph1{
  text-align: center;
  padding: 60px;
  font-family: "Times Roman New";
  font-size: 20px;
  background-color: black;
  color: white;
}




.wide2{
  width:100%;
  height: 100%;
  height:calc(100% - 1px);
}
.box{
  top: 10px;
  color:black;
    text-align:center;

}

.tickicon{
  color: green;
}



.bg-4{
  background-color: #2f2f2f;
  color: #ffffff;

}

footer{
  display: block;
}
  </style>
  <body>

    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Food-Shala</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="foodlist.php">Menu</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>
       </div>

      </div>
    </nav>

    <div class="wide">
      	<div class="col-xs-5 line"><hr></div>
        <div class="col-xs-2 logo"><img src="images/LogoImage1.jpg"></div>
        <div class="col-xs-5 line"><hr></div>
        <div class="tagline">Want a delicious meal, but no time we will deliver it hot and yummy.</div>
    </div>
    <br>
    <div class="orderblock">
    <h2>Feeling Hungry?</h2>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Now </a></center>
    </div>

    
  
</body>
</html>