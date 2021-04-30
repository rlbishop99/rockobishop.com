
<div class="welcome-site">
    <p><center>Welcome to my site!</center></p>
</div>

<style>
.welcome-site {
  display: inline-block;
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
</style>

<?php 
    //echo '<b><center> <span style="color: green; font-size: 50px;">Welcome to my site! </center></b>';
    echo '<body style="background-color: DarkSlateGray">';
    echo ' <center><img src="testphp.png"/></center>';
?>