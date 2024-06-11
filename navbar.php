<!DOCTYPE html>
<html>
    <head>
        <title>Navigation Bar with Login Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="topnav">
            <a class="active" href="#home">Home</a>
            <a href="#about">News</a>
            <a href="#about">Blog</a>
            <a href="#about">Gallery</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
  <div class="login-container">
    <form action="/action_page.php">
      <button type="submit">Login</button>
    </form>
    </a>
  </div>
</div>
<style>
    * {box-sizing: border-box;}
 
 body{
     margin: 0;
     padding: 0;
     font-family: Arial;
     text-transform: uppercase;
     font-weight: bold;
 }
 .topnav {
   overflow: hidden;
   background-color: #2f3a4a;
   line-height: 40px;
 }
  
 .topnav a {
   float: left;
   display: block;
   width:120px;
   color: black;
   text-align: center;
   padding: 14px 16px;
   text-decoration: none;
   font-size: 16px;
   color:#fff;
 }
  
 .topnav a:hover {
   background-color: #ddd;
   color: black;
 }
  
 .topnav a.active {
   background-color: #2196F3;
   color: white;
 }

 .img {
    width: 50% ;
    height: 50% ;
 }
  
 .topnav .login-container {
  float: right;
  margin-right: 100px;
  margin-top: 10px;
}
 
.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width: 150px; 
}
 
.topnav .login-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #2196F3;
  color:#fff;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
 
.topnav .login-container button:hover {
  background: #ccc;
}
  
 </style>
    </body>
</html>