<head>
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

.TopBar{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:60px;
    background-color: darkgrey;
}

.TopBar a {
  float: right;
  font-size: 16px;
  color: Black;
  text-align: center;
  background-color: green;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown{
  float: right;
  overflow: hidden;
}

.dropown .dropbtn{
  font-size: 16px;
  border: none;
  color: black;
  padding: 14px 16px;
  background-color: green;
  font-family: inherit;
  margin: 0;
}

.button
{
    border: none;
    background-color: forestgreen;
    padding: 14px 28px;
    font-size: 25px;
    cursor: pointer;
    display: inline-block;
}

.btn:hover {background: green;}
</style>
</head>
<body>

<div class="TopBar"></div>
  <a href="#about">About</a>
  <a href="#projects">Projects</a>
  <div class="dropdown">
    <button class="dropbtn">More
      <i class="fa fa-caret-down"></i>
    </button>;
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
</div>

<div class="welcome-site">
    <p>Welcome to my site!</p>
</div>



<?php 
    echo '<body style="background-color: DarkSlateGray">';
    echo ' <center><img src="images/testphp.png"/></center>';
?>

</body>