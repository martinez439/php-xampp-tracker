<?php
require 'create4.php';
include_once 'config2.php';
require 'add.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
       
        <div class="topnav">
            <h2>
                <span class="icon-nav">
                    <i class="fas fa-home"></i>
                </span>
            </h2>
        </div>
       

        <div class="wrapper">
           
        <!--profile image & text-->
        <div class="sidebar">
         
           <div class="profile">
            <img src="assets/logo_self.jpg" alt="profile_picture">
            <h3>Michael Martinez</h3>
            <p>Developer</p>
        </div>
            <!--menu item-->
            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">People</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">Perfomance</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">Development</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">Reports</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="item">Admin</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </div>

    <!--Main Dashboard Area-->
    <div class="layout">
    <div class="card">
        <div class="corner-img1"><span class="icon-corner"><i class="fas fa-home"></i></span></div>
        <img src="assets/pencil-agenda.png" alt="Avatar" style="width:100%">
        <div class="container">
            <hr>
          <h4><b>John Doe</b></h4> 
          <p>Architect & Engineer</p> 
        </div>
        </div>

        <div class="card">
            <div class="corner-img2"><span class="icon-corner"><i class="fas fa-home"></i></span></div>
        <img src="assets/pencil-agenda.png" alt="Avatar" style="width:100%">
        <div class="container">
        <hr>
          <h4><b>John Doe</b></h4> 
          <p>Architect & Engineer</p> 
        </div>
      </div>


          
      <div class="card">
        <div class="corner-img3"><span class="icon-corner"><i class="fas fa-home"></i></span></div>
        <img src="assets/pencil-agenda.png" alt="Avatar" style="width:100%">
        <div class="container">
            <hr>
          <h4><b>John Doe</b></h4> 
          <p>Architect & Engineer</p> 
        </div>
      </div>

    </div>

  
    </div>
   

    </div>


<div class="w3">
  <form action="create4.php">
    <label for="user">User</label>
    <input type="text" id="user" name="user" placeholder="Your name..">

    <label for="location">Location</label>
    <input type="text" id="location" name="location" placeholder="Location">

    <label for="description">Description</label>
    <input type="text" id="description" name="description" placeholder="Description">
<!--
    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
-->
  
    <input type="submit" value="Submit">
  </form>
</div>

<div id="add">
<form action="add.php" method="post">
<label>Student Name :</label>
<input type="text" name="user" id="user" required="required" placeholder="Please Enter Name"/><br /><br />
<label>Student Email :</label>
<input type="text" name="location" id="location" required="required" placeholder="john123@gmail.com"/><br/><br />
<label>Student City :</label>
<input type="text" name="description" id="description" required="required" placeholder="Please Enter Your City"/><br/><br />
<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>
<!--
<div id="add">
<form action="" method="post">
<label>Student Name :</label>
<input type="text" name="stu_name" id="name" required="required" placeholder="Please Enter Name"/><br /><br />
<label>Student Email :</label>
<input type="email" name="stu_email" id="email" required="required" placeholder="john123@gmail.com"/><br/><br />
<label>Student City :</label>
<input type="text" name="stu_city" id="city" required="required" placeholder="Please Enter Your City"/><br/><br />
<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>
-->
</body>
</html>
