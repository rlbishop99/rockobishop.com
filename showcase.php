<!DOCTYPE html>
<html lang="en">
<head>
<title>Rocko Bishop | Showcase</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Style the header */
.header {
  padding: 80px;
  text-align: center;
  background-image: url(images/ocean.png);
  color: white;
}

/* Increase the font size of the h1 element */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover*/
.navbar a.right:hover {
  background-color: #ddd;
  color: black;
}



/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

.photo{
  background-size: 100% 100%;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width:100%;
  }
}
</style>
</head>
<body>

<div class="navbar">
  <a href="">Rocko Bishop | Showcase</a>
  <a href="#" class="right">More</a>
  <a href="#" class="right">Projects</a>
  <!-- <a href="/test.php" class="right">About</a> -->
</div>

<div class="header">
  <h1>Rocko Bishop | Showcase</h1>
  <p>Your next employee of the month. </p>
  <div class="photo"><img src="images/ocean.png"/></div>
</div>

<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <!-- <h5>Photo of me:</h5> -->
    <div class="photo"><img src="images/testphp.png"/></div>
    <p>I'm a Senior at the University of North Texas, studying to graduate with a degree in Computer Science. I enjoy development, but I'm not sure what I want to focus on yet. 
    I enjoy video game development, and am currently learning HTML, PHP, and CSS. You can click
    <a target="_blank" href="resume.pdf" download="resume.pdf">here</a> 
    to view my Resume.</p>
    <h3>More Text</h3>
    <p></p>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div>
  </div>
  <div class="main">
    <h2>TITLE HEADING</h2>
    <h5>Title description, Dec 7, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>
