<!DOCTYPE html>
<html lang="en">
<head>
<title>Rocko Bishop | Showcase</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  width: 100%;
  min-height: 100%;
}

/* Style the header */
.header {
  background: url("images/ocean.png");
  background-size:100% 100%;
  padding: 40px;
  text-align: center;
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
  background-color: #2d2d2d;
  color: #c8c8c8;
  padding: 20px;
  width: 100%;
}

/* Main column */
.main {   
  flex: 70%;
  background-color: #292929;
  color: #c8c8c8;
  padding: 20px;
  width: 100%;
}

/* Footer */
.footer {
  padding: 10px;
  background: #ddd;
  background-color: #333;
  overflow: hidden;
}

.footer a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.footer a.right {
  float: right;
}

.photo{
  background-size: 100% 100%;
}

.embeddedPhoto{
  object-fit: contain;
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

@media screen and (max-width: 500px) {
  .embeddedPhoto {
    width: 375px;
  }
}

@media screen and (max-width: 400px) {
  .embeddedPhoto {
    width: 325px;
  }
}

@media screen and (max-width: 300px) {
  .embeddedPhoto {
    width: 250px;
  }
}
</style>
</head>
<body>

<div class="navbar">
  <a href="">Rocko Bishop | Showcase</a>
  <a href="#" class="right">More</a>
  <a href="#" class="right">Projects</a>
</div>

<div class="header">
  <h1>Rocko Bishop | Showcase</h1>
  <p>Your next employee of the month.</p>
  <!-- <div class="photo"><img src="images/ocean.png"/></div> -->
</div>

<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <img src="images/testphp.png" class="embeddedPhoto"/>
    <p>I'm a Senior at the University of North Texas, studying to graduate with a degree in Computer Science. I enjoy development, but I'm not sure what I want to focus on yet. 
    I enjoy video game development, and am currently learning HTML, PHP, and CSS. You can click
    <a target="_blank" href="resume.pdf" download="resume.pdf">here</a> 
    to view my Resume.</p>
    <h3>Career Interests</h3>
    <p>I'm currently interested in video game design and software development. I hope to work in a team of knowledgeable people to make games or
       programs that have an impact.</p>
    <h2>I'm eager to get started!</h2>
  </div>
  <div class="main">
    <h2>Skills and Tools</h2>
    <h5>General Knowledge:</h5>
    <ul>
      <li>Computer Hardware/Building</li>
      <li>Unity</li>
      <li>Aesprite</li>
      <li>Adobe Premiere Pro</li>
    </ul>
    <p>I've been researching and building computers for over 7 years. I use my current build to practice my game development skills using the Unity 
       engine, and Aesprite to make my pixel art assets. I used to make small-scale low budget short 'films' and edited them with Adobe Premiere Pro.
       I'm constantly trying to learn new things, and I hope to expand this section with more concrete skills soon!
    </p>
    <h5>Software Development:</h5>
    <ul>
      <li>C#</li>
      <li>C++</li>
      <li>Some Java</li>
      <li>Some Python</li>
      <li>Git</li>
    </ul>
    <p>I use Unity to do game development, so I believe I'm most proficient with the C# programming language. I've studied C++ the most throughout
       my college career, so I have a solid understanding of the syntax and logic that comes with the language. I have minor experience with Java
       and Python, and am working on developing those skills to one day be marketable. I use Git to host my major projects - becoming more
       familiar with version control has been incredibly helpful as I've undergone my programming education.
    </p>
    <h5>Web Development:</h5>
    <ul>
      <li>HTML</li>
      <li>CSS</li>
      <li>PHP</li>
      <li>SSH</li>
    </ul>
    <p>I'm quite new to Web Development. This website has been my first real project since I've begun learning. I primarily format my websites using
       HTML and CSS. I'm trying to learn how to best integrate PHP functionality into my websites, but it is an ongoing process. I host my websites on
       a Raspberry Pi, so I use SSH and Git to make sure my remote repositories are in sync with the local repositories on the Pi. 
       Controlling my Pi from anywhere in the world means I can do Web Development anywhere, which is amazing.
    </p>
    <br>
  </div>
</div>

<div class="footer">
  <a>© rockobishop.com - All rights reserved.</a>
  <a href="/index.php" class="right">Go Home</a>
</div>

</body>
</html>
