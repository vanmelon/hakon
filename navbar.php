<!DOCTYPE html>
<html>
    <head>
        <title>Navigation Bar with Login Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="topnav">
            <a class="active" href="#home">Home</a>
            <a id="soke_felt">
                <input type="text" id="searchInputID" placeholder="Søk etter blomst">
                <button id="searchButtonID">Søk</button>
            </a>
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

#soke_felt {
    position: fixed;
    left: 45%;
    margin-left: -100px;
    width: 250px;
    margin-top: -4px;
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
 </style>
    </body>
</html>