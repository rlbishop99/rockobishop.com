<header>
<div class="TopBar">
<button type="button">Click me!</button>



<div class="welcome-site">
    <p>Welcome to my site!</p>
</div>

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
    background-color: black;
}
</style>

<?php 
    echo '<body style="background-color: DarkSlateGray">';
    echo ' <center><img src="testphp.png"/></center>';
?>