<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.welcome-site {
  text-align: center;
  -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color: black;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 50px;
  color: DarkGray;
  animation: fadeIn linear 2.5s;
  -webkit-animation: fadeIn linear 2.5s;
  -moz-animation: fadeIn linear 2.5s;
  -o-animation: fadeIn linear 2.5s;
  -ms-animation: fadeIn linear s;
}

@keyframes fadeIn {
  0% {opacity:0;}
  100% {opacity:1;}
}

@-moz-keyframes fadeIn {
  0% {opacity:0;}
  100% {opacity:1;}
}

@-webkit-keyframes fadeIn {
  0% {opacity:0;}
  100% {opacity:1;}
}

@-o-keyframes fadeIn {
  0% {opacity:0;}
  100% {opacity:1;}
}

@-ms-keyframes fadeIn {
  0% {opacity:0;}
  100% {opacity:1;}
}

.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
  top: 0;
  left: 0;
  width: 100%;
  height: 80px;
  position: fixed;
}

.dropdown {
  float: right;
  overflow: hidden;
}
.navbar a {
  float: right;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">More 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <a href="#home">Home</a>
  <a href="#news">News</a>
</div>








<div class="welcome-site">
    <p>Welcome to my site!</p>
</div>

<?php 
    echo '<body style="background-color: DarkSlateGray">';
    echo ' <center><img src="testphp.png"/></center>';
?>

</body>
</html>
