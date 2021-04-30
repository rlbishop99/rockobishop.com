
<div class="welcome-site">
    <p>Welcome to my site!</p>
</div>

.welcome-site {
  display: inline-block;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 150px;
  color: black;
  animation: fadeIn linear 7s;
  -webkit-animation: fadeIn linear 7s;
  -moz-animation: fadeIn linear 7s;
  -o-animation: fadeIn linear 7s;
  -ms-animation: fadeIn linear 7s;
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

<?php 
    //echo '<b><center> <span style="color: green; font-size: 50px;">Welcome to my site! </center></b>';
    echo '<body style="background-color: DarkSlateGray">';
    echo ' <center><img src="testphp.png"/></center>';
?>