<header>
<div class="TopBar"></div>
<button class="button">About</button>;

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

<div class="welcome-site">
    <p>Welcome to my site!</p>
</div>

<?php 
    echo '<body style="background-color: DarkSlateGray">';
    echo ' <center><img src="testphp.png"/></center>';
?>