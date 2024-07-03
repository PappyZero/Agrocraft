<?php
session_start();
include("../Includes/db.php");

// Check if the user is logged in
if (!isset($_SESSION['courier_phone'])) {
    header("location: Delivery_Dashboard.php");
    exit();
}

// Fetch logged-in user's courier information from the database
$phoneNumber = $_SESSION['courier_phone'];
$query = "SELECT * FROM courierregistration WHERE courier_phone = '$phoneNumber'";
$result = mysqli_query($con, $query);

if (!$result) {
    die('Query Failed: ' . mysqli_error($con));
}

$row = mysqli_fetch_assoc($result);
$courierName = $row ? $row['courier_name'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
          * {
               margin: 0;
               box-sizing: border-box;
          }


          .header {
               position: sticky;
               z-index: 100;
               top: 0rem;
               height: 69px;
               width: 100%;
               background-color: #00b300;
          }

          .select_element {
               width: 20px;
               background-color: transparent;
               border: none;
               text: none;
          }


          #logo {
               height: 66px;
               width: 100px;
               text-align: left;
               float: left;
          }

          .search_input {
               float: left;
               margin-left: 50px;
               margin-top: 20px;

          }

          .proicon {
               float: right;
               margin-right: 10px;
               margin-top: 20px;
          }

          .dropdown {
               float: right;
               margin-right: 35px;
               margin-top: 20px;

          }

          .options {
               color: yellow;
               margin-left: 20px;
               /* width: 25px; */
               margin-right: 50px;
               display: inline;
          }

          .icon2 {
               float: right;
               margin-right: 10px;
               margin-top: 20px;

          }

          .loginz {
               /* float: right; */
               margin-right: 20px;
               margin-left: 20px;
               margin-top: 10px;
          }

          .headerdown {
               margin-left: 15%;
               height: 50px;
               width: 80%;
          }

          .makeitgreen {
               color: #00b300;
          }

          .sel1 {
               color: green;
               float: left;
               margin-top: 3px;
          }

          .sel2 {
               border-color: green;
               color: green;
               float: left;
               margin-left: 600px;
               margin-top: 3px;
          }

          .sel3 {
               font-size: 20px;
               margin-top: 3px;
               float: right;
               margin-right: 5px;
          }



          #input1 {
               width: 220px;
               border: none;
          }


          #input1:active {
               background-color: tomato;
          }


          .wrapper {
               display: grid;
               grid-template-columns: 20% 20% 20% 20%;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               margin-left: 30px;
          }

          .inputwrapper {
               float: left;
               border-style: double;
               text-align: center;
               margin-left: 80px;
               width: 280px;
               margin-bottom: 20px;
               clear: auto;
          }


          .inputwrapper:last-child {
               margin-right: 30px;
          }

          .addtocart {
               background-color: #FFD700;
          }

          .numberinput {
               width: 35px;
          }

          .content_item {
               text-align: center;
               justify-content: center;
          }

          .etc {
               margin-left: -40px;
               min-width: 90px;
               font-size: 20px;
          }

          .crop_items {
               color: green;
          }

          .footer {
               height: 70px;
               width: 100%;
               clear: both;
          }

          .payment {
               float: left;
               margin-left: 520px;
               font-size: 20px;
               margin-top: 25px;
          }

          .cash {
               float: left;
               margin-top: 0px;
               margin-left: 20px;
               margin-right: 20px;
          }

          .paytm {
               float: left;
          }

          h3 {
               width: 100%;
               text-align: center;
               border-bottom: 1px solid #000;
               line-height: 0.1em;
               margin: 10px 0 20px;
          }

          h3 span {
               background: #fff;
               padding: 0 10px;
          }

          .morefooter {
               height: 100px;
               width: 100%;
               background-color: white;

          }

          .call {
               float: left;
               font-size: 20px;
               margin-left: 150px;
               margin-top: 25px;
          }

          .gmail {
               margin-top: 10px;
               float: right;
               margin-right: 150px;

          }

          .instagram {
               margin-top: 10px;
               float: left;
               margin-left: 420px;
          }

          .instaid {
               height: 10px;
               width: 100%;

          }

          .text {
               float: left;
               margin-left: 735px;
               margin-top: -50px;
          }

          .gmailid {
               float: right;
               margin-right: 80px;
               margin-top: -60px;
          }

          .copy {
               float: left;
               margin-top: -65px;
          }

          body {
               margin: 0;
               padding: 0;
               font-family: sans-serif;
               background-size: cover;
               background-position: center;
               box-sizing: border-box;
          }

          .wrapper {
               background-image: 100px;
          }

          .add_button {
               float: right;
               text-align: center;
          }


          h1 {
               font-family: 'Times New Roman', Times, serif;
               color: white;

          }

          .lost {
               /* <font-fam></font-fam>; */
               color: black;
               text-align: center;
               height: 8%;
               margin-top: 150px;
               border-radius: 30px;
               font-size: 30px;
               /* margin-top: 5em; */
               background-color: olive;
               margin-top: 120px;
               margin: auto;
          }

          .new {
               text-align: center;
          }

          .button {
               position: relative;
               float: right;
          }

          h2 {
               color: white;
               margin-top: 3em;
               text-align: center;

          }

          .hii {
               float: right;
               margin-right: 5em;
          }

          .ribbon {
               position: relative;
               top: -16px;
               right: -706px;
               float: left;
               top: 0px;
               left: 0px;
               height: 74px;
               background-color: green;
          }

          .over {
               background-color: green;
               border: 1px;
               width: 100%;
               white-space: nowrap;
               height: 70px;


          }

          .subtract {
               float: right;
               border-color: olive;
               margin-top: 2%;
               text-align: center;
               border-radius: 25px;
          }


          .wrapper {
               background-image: 100px;
          }

          .add_button {
               float: right;
               text-align: center;
          }


          h1 {
               font-family: 'Times New Roman', Times, serif;
               color: white;

          }

          .lost {
               font-family: Verdana, Geneva, Tahoma, sans-serif;
               color: black;
               text-align: center;
               margin-top: 220px;
               margin: auto;
          }


          .new {
               text-align: center;
          }

          .button {
               position: relative;
               float: right;
          }

          h2 {
               color: black;
               margin-top: 3em;
               text-align: center;

          }

          .hii {
               float: right;
               margin-right: 5em;
          }

          .ribbon {
               position: relative;
               top: -16px;
               right: -706px;
               float: left;
               top: 0px;
               left: 0px;
               height: 74px;
               background-color: green;
          }

          .over {
               background-color: green;
               border: 1px;
               width: 100%;
               white-space: nowrap;
               height: 70px;


          }

          .subtract {
               float: right;
               border-color: olive;
               margin-right: 12%;
               background-color: #00b300;
               text-align: center;
               /* border-radius: 25px; */
               width: 9%;
               height: 8%;
               margin-top: -5%;
               padding: 5px;

          }

          .items {
               width: 100%;
               margin: auto;
               height: auto;
          }

          .productbox {
               float: left;
               margin: 15px;
               margin-left: 30px;
               padding: 15px;
               border-style: outline;
               border: 2px solid;
               border-color: green;
               border-radius: 10px;
          }

          .productbox:hover {
               float: left;
               margin: 25px;
               margin-left: 30px;
               padding: 20px;
               border-style: outline;
               border: 2px solid;
               border-color: green;
               border-radius: 5px;
               font-weight: bolder;
               height: 325px;
               width: 240px;

          }

          .slideshow {
               margin-top: 10px;
               margin-left: 100px;
               margin-bottom: 20px;
               float: left;
               border-style: solid;
          }

          #navbar {

               padding: 20px;
               color: green;
               text-decoration: none;
               margin: 20px;
               font-size: 25px;
               padding-top: 10px;
          }

          #navbar:hover {
               padding: 20px;
               color: green;
               text-decoration: underline;
               margin: 15px;
               font-size: 25px;
               font-weight: bolder;
               padding-top: 10px;
          }

          #navbar i {
               padding-right: 1%;
          }

          .time {
               background-color: red;
               /* margin-left: 20px; */
          }

          .whats {
               text-align: center;
               margin-left: 30%;
          }

          .f1 {
               float: left;
               background-color: #fff;
               border: 1px solid red;
               height: 200px;
               border-radius: 50%;
               width: 200px;
               padding-top: 20px;
               border-style: solid;
               background-image: url("../Images/Website/f2.jpg");
               background-size: 200px 200px;
               background-repeat: no-repeat;
               border-color: #000;
               /* opacity: 5%; */
          }

          .t1 {
               padding-top: 70px;
               text-align: center;
               justify-items: center;
               color: black;
               font-weight: bold;
          }

          .t5 {
               margin-top: -13px;
          }

          .t4 {
               margin-top: -13px;

          }

          .whatsnew {
               /* background-image: url("../Images/Website/back.jpeg"); */

               background-color: red;

          }

          .f2 {
               margin-left: 130px;
               margin-right: 150px;
          }

          .f3 {
               margin-right: 150px;

          }

          .f4 {
               margin-right: 150px;
          }

          .pictus {
               margin-top: 200px;
               /* background-color: red; */
          }

          .pictus>img {
               height: 100px;

               width: 150px;
          }

          .imag1 {
               margin-top: 20px;
               margin-left: 180px;
          }

          .imag2 {
               margin-top: 20px;

               margin-left: 340px;

          }

          .imag3 {
               margin-top: 20px;

               margin-left: 350px;

          }

          .imag1_under {
               max-width: 250px;
               width: 100%;
               min-height: 100px;
               margin-left: 100px;
               text-align: center;
               font-size: 20px;

          }

          .imag2_under {
               max-width: 250px;
               width: 100%;
               min-height: 100px;
               margin-left: 290px;
               margin-top: 20px;
               text-align: center;
               font-size: 20px;
          }

          .imag3_under {
               max-width: 250px;
               width: 100%;
               font-size: 20px;

               min-height: 100px;
               margin-left: 290px;
               text-align: center;
          }

          .image {
               max-width: 200px;
          }

          .aligncenter {
               text-align: center;
          }

          .myfooter {
               background-color: #292b2c;
               color: goldenrod;
               margin-top: 15px;
          }

          a {
               color: goldenrod;
          }

          .navbar-inverse {
               background: #00cc00;
               color: black;
          }

          .navbar-inverse .navbar-brand,
          .navbar-inverse a {
               color: black;
          }

          .navbar-inverse .navbar-nav>li>a {
               color: clack;
          }

          .caros {
               margin-top: 30px;

          }

          hr {
               border: 0;
               height: 0.5px;
               clear: both;
               display: block;
               width: 99%;
               background-color: black;
               margin-left: 0.5em;
          }

          img {
               max-width: 100%;
               display: inline-block;
          }

          * {
               margin: 0;
               padding: 0;
               box-sizing: border-box;
          }

          nav {
               background-color: #292b2c;
          }

          .navbar-custom {
               background-color: #292b2c;
          }

          /* change the brand and text color */
          .navbar-custom .navbar-brand,
          .navbar-custom .navbar-text {
               background-color: #292b2c;
          }

          .navbar-custom .navbar-nav .nav-link {
               background-color: #292b2c;
          }

          .navbar-custom .nav-item.active .nav-link,
          .navbar-custom .nav-item:hover .nav-link {
               background-color: #292b2c;
          }

          .firstimage {
               height: 500px;
               width: 100%;
          }

          .mybtn {
               border-color: green;
               border-style: solid;
          }

          .card {
               width: 100%;
               height: 100%;
               margin: 10px;
          }

          .right {
               display: flex;
          }

          .left {
               display: none;
          }

          .cart {
               /* margin-left:10px; */
               margin-right: -9px;
          }

          .profile {
               margin-right: 2px;

          }

          .login {
               margin-right: -2px;
               margin-top: 12px;
               display: none;
          }

          .searchbox {
               width: 60%;
          }

          .lists {
               display: inline-block;
          }

          .moblists {
               display: none;
          }

          .logins {
               text-align: center;
               margin-right: -30%;
               margin-left: 35%;
          }

          .tab {
               width: 100%;

               border-style: solid;
               border-width: 2px;
               padding: 2px;

          }

          /* th {
               border-color: white;
               border-style: solid;
               border-width: 2px;
               padding: 2px;

          }

          .tableyhead {

               color: red;

          }

          .thy {
               background-color: #555;
               color: white;

          }

          .trow {
               align-content: center;
          } */

          body {
               margin: 0;
               padding: 0px;
               font-family: sans-serif;
          }

          * {
               box-sizing: border-box;
          }

          .table {
               width: 100%;
               border-collapse: collapse;
          }

          .table td,
          .table th {
               padding: 12px 15px;
               border: 0px solid #ddd;
               text-align: center;
               font-size: 16px;
          }

          .table th {
               background-color: #292b2c;
               color: goldenrod;
          }

          .table tbody tr:nth-child(even) {
               background-color: #f5f5f5;
          }

          /* For medium devices (e.g. tablets) */
          /* @media (min-width: 420px) {
               img {
               max-width: 48%;
               }
          } */
          /* For large devices (e.g. desktops) */
          @media (min-width: 760px) {
               .resizing {
                    height: 500px;
               }
          }

          @media only screen and (min-device-width:320px) and (max-device-width:480px) {
               .image {
                    max-width: 48%;
               }

               .firstimage {
                    height: auto;
                    width: 90%;
               }

               .card {
                    width: 80%;
                    margin-left: 10%;
                    margin-right: 10%;

               }

               .col {
                    margin-top: 20px;
               }

               .right {
                    display: none;
                    background-color: #ff5500;
               }

               .table thead {
                    display: none;
               }

               .table,
               .table tbody,
               .table tr,
               .table td {
                    display: block;
                    width: 100%;
               }

               .table tr {
                    margin-bottom: 15px;
               }

               .table td {
                    text-align: right;
                    padding-left: 50%;
                    text-align: right;
                    position: relative;
               }

               .table td::before {
                    content: attr(data-label);
                    position: absolute;
                    left: 0;
                    width: 50%;
                    padding-left: 15px;
                    font-size: 15px;
                    font-weight: bold;
                    text-align: left;
               }

               .left {
                    display: flex;
               }

               .moblogo {
                    display: none;
               }

               .logins {
                    text-align: center;
                    margin-right: 35%;
                    padding: 15px;
               }

               .searchbox {
                    width: 95%;
                    margin-right: 5%;
                    margin-left: 0%;
               }

               .moblists {
                    display: inline-block;
                    text-align: center;
                    width: 100%;
               }


          }

          .welcome-message {
               background-color: #292B2C; /* Same color as the header */
               color: white;
               text-align: center;
               padding: 20px; /* Adjust padding as needed */
               margin-top: 20px; /* Adjust margin as needed */
               border-radius: 10px; /* Rounded corners for the container */
               animation: fadeIn 1s ease-in-out; /* Animation */
          }

          @keyframes fadeIn {
          from {
               opacity: 0;
          }
          to {
               opacity: 1;
          }
          }

          </style>
</head>

<body>
<nav class="navbar navbar-expand-xl navbar-custom">
    <a class="navbar-brand" href="courierHomepage.php">
        <img src="./logo.jpeg" alt="Logo" style="height:50px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="color:green;font-size:20px;"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION['courier_phone'])): ?>
                <li class="nav-item">
                <a class="nav-link" href="courier_profile.php">Profile</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="deliveries.php">Deliveries</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                <a class="nav-link" href="../auth/CourierLogin.php">Login</a>
                </li>
            <?php endif; ?>
            <li class="nav-item loginz text-success">
                <?php echo htmlspecialchars($courierName); ?>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
     <div class="row">
          <!-- Carousel -->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" style="height:800px; width:100%; object-fit:cover;">
               <div class="carousel-item active">
                    <img src="./delivery_img1.jpeg" class="d-block w-100" alt="First slide">
               </div>
               <div class="carousel-item">
                    <img src="./delivery_img2.jpeg" class="d-block w-100" alt="Second slide">
               </div>
               <div class="carousel-item">
                    <img src="./delivery_img3.jpeg" class="d-block w-100" alt="Third slide">
               </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
          </a>
          </div>
     </div>
</div>

<!-- Welcome message -->
<div class="welcome-message">
    <p>Welcome back, <?php echo htmlspecialchars($courierName); ?>! Here's your delivery dashboard.</p>
</div>

<div class="container mt-5">
    <h2 class="mb-4">Courier Dashboard</h2>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>Courier ID</th>
                <th>Courier Name</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Company Name</th>
                <th>Bank Account</th>
                <th>Email</th>
                <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($row): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['courier_id']); ?></td>
                    <td><?php echo htmlspecialchars($row['courier_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['courier_phone']); ?></td>
                    <td><?php echo htmlspecialchars($row['courier_address']); ?></td>
                    <td><?php echo htmlspecialchars($row['courier_company']); ?></td>
                    <td><?php echo htmlspecialchars($row['courier_bank']); ?></td>
                    <td><?php echo htmlspecialchars($row['courier_mail']); ?></td>
                    <td><?php echo htmlspecialchars($row['courier_username']); ?></td>
                </tr>
                <?php else: ?>
                <tr>
                    <td colspan="8">No courier information found.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>


<div class="container">
     <div class="row">
          <!-- <div class="card" style="width: 18rem;">
          <img src="./delivery_img4.jpeg.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                    <h5 class="card-title">Recipient: Emily Brown</h5>
                    <p class="card-text">Address: 101 Pine Street</p>s
                    <p class="card-text">Status: In Transit</p>
                    <p class="card-text">Expected Delivery: May 22, 2024</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
               </div>
          </div>    -->

          <div class="card" style="width: 18rem;">
               <img src="./delivery_img4.jpeg.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                    <h5 class="card-title">Recipient: David Johnson</h5>
                    <p class="card-text">Address: 789 Oak Boulevard</p>
                    <p class="card-text">Status: Pending</p>
                    <p class="card-text">Expected Delivery: May 25, 2024</p>
                    <a href="#" class="btn btn-primary">See details</a>
               </div>
          </div>

          <div class="card" style="width: 18rem;">
               <img src="./delivery_img5.jpeg.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                    <h5 class="card-title">Recipient: Jane Smith</h5>
                    <p class="card-text">Address: 456 Elm Avenue</p>
                    <p class="card-text">Status: Delivered</p>
                    <p class="card-text">Delivery Date: May 20, 2024</p>
                    <a href="#" class="btn btn-primary">See details</a>
               </div>
          </div>

          <div class="card" style="width: 18rem;">
          <img src="./delivery_img6.jpeg.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                    <h5 class="card-title">Recipient: John Doe</h5>
                    <p class="card-text">Address: 123 Main Street</p>
                    <p class="card-text">Status: In Transit</p>
                    <p class="card-text">Expected Delivery: May 23, 2024</p>
                    <a href="#" class="btn btn-primary">See details</a>
               </div>
          </div>
     </div>
     
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>