<?php session_start(); ?>
 <html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="the sparks foundation internship certificate, donation, the sparks foundation internship, grip at the sparks foundation, grip at the sparks foundation internship, the sparks foundation grip, the sparks foundation github, the sparks foundation internship web development, the sparks foundation internship, the sparks foundation linkedin, the sparks foundation network, the sparks foundation singapore, the sparks foundation tasks, the sparks foundation web development internship, tsf, tsf at grip, grip, tsf grip, Graduate Rotational Internship Program, Payment gateway integration, task Payment gateway integration">
<meta name="author" content="Bhavjot Singh">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/030c849e74.js" crossorigin="anonymous"></script>
<link rel = "icon" href ="images/logo.png" type = "image/x-icon">
<title>Passbook | Bank-TSF</title>
<style>
body {
margin:0;
padding:0;
border: 0;
overflow-x: hidden;
font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
background-color:white;
}

/*--Header Div--*/
.header {
margin:0;
width:100%;
height: 100px;
position:relative;
background-color: rgba(0,0,0, 0.4);
}

.header-left {
max-width: 25%;
height: auto;
}

.header-left-logo {
width: 130px;
height: auto;
margin: -2% 0 0 5%;
} 

/*--Header Right Lists--*/
.header-right { 
margin: -70px 40px 0 0;
font-size:20px;
float:right;
}

.header-right .header-right-links{ 
display:inline;
padding: 0 30px;
text-decoration:none;
color: white;
font-weight: bold;
transition: 0.6s;
}

.header .header-right .header-right-links:hover { 
text-decoration:underline;
letter-spacing: 2.5px;
}

/*--Responsive Header Hamburger Icon--*/
.header .header-right-icon {
display: none;
font-size: 35px;
float: right;
color: white;
position: absolute;
top: 30%;
right: 5%;
}

/*--Responsive Header Close Icon--*/
.header .header-right-close-icon {
display: none;
font-size: 35px;
float: right;
color: white;
position: absolute;
top: 30%;
right: 5%;
z-index: 999;
}

/*--Header Responsive Query--*/
@media (max-width: 880px) {
.header {
	font: bold 14px sans-serif;
	width: 100%;
	}

.header .header-right .header-right-links {
	display: none;
	}

.header .header-right-icon {
	display: block;
  }

  .header .header-right-close-icon {
    display: block;
    opacity: 0;
  }

.header .Responsive-SlideDown {
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    height: 100vh;
    width: 100%;
    position: fixed;
    left: 0%;
    top: -4.6%;
    z-index: 1;
    overflow-y: hidden;
    transition: 0.5s ease-in-out;
	}
 
.header .Responsive-SlideDown .header-right-links {
    display: block;
    text-align: center;
    font-size: 26px;
    padding: 40px;
    transform: translate(0%, 125%);
    color: white;
  }
}

.fixed-header {
background-color: lightcoral;
height: 50px;
line-height: 45px;
width: 100%;
text-align: center;
z-index: 999;
}

.fixed-header .fixed-header-links {
color: black;
padding: 0 22px;
font-size: 25px;
margin: 0 0 0 4%;
transition: 0.3s;
position: relative;
left: 15%;
}

.fixed-header .fixed-header-links:hover {
letter-spacing: 3px;
}

.sticky-fixed-header {
position: fixed;
top: 0;
width: 100%;
z-index: 999;
}

.sticky-fixed-header .fixed-header-links {
left: 0;
}

@media (max-width: 1200px) {
    .fixed-header {
        height: auto;
    }

    .fixed-header .fixed-header-links {
        width: 100%;
        padding: 0;
        text-align: justify;
    }
}

@media (max-width: 880px) {
    .fixed-header {
        height: auto;
    }

    .fixed-header .fixed-header-links {
        width: 100%;
        padding: 0;
        text-align: justify;
        margin: 0% 29% 0% 0%;
    }
}

.print-button {
border-radius: 4px;
background-color: #333;
border: none;
color: #FFFFFF;
text-align: center;
font-size: 18px;
padding: 10px;
width: 100px;
transition: all 0.5s;
cursor: pointer;
margin: 8% 0 0 20%;
}

.print-button .print-button-span {
cursor: pointer;
display: inline-block;
position: relative;
transition: 0.5s;
}

.print-button .print-button-span:after {
content: '\203A';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.print-button:hover .print-button-span {
padding-right: 15px;
}

.print-button:hover .print-button-span:after {
opacity: 1;
right: 0;
}

.back-button {
border-radius: 4px;
background-color: #333;
border: none;
color: #FFFFFF;
text-align: center;
font-size: 18px;
padding: 10px;
width: 100px;
transition: all 0.5s;
cursor: pointer;
margin: 8% 0 0 30%;
}

.back-button-span {
cursor: pointer;
display: inline-block;
position: relative;
transition: 0.5s;
}

.back-button-span:after {
content: '\2039';
position: absolute;
opacity: 0;
top: 0;
left: -20px;
transition: 0.5s;
}

.back-button:hover .back-button-span {
padding-left: 15px;
}

.back-button:hover .back-button-span:after {
opacity: 1;
left: 0;
}

table {
color: red;
border-collapse: collapse;
border: 2px solid black;
margin: 4% 0 0 10%;
}

h2 {
color: black;
font-size: 25px;
margin: 6% 0 0 35%;
}

table th {
color: white;
background-color: #333;
padding: 25px;
font-size: 20px;
border: 2px solid black;
}

table tr {
font-size: 18px;
font-weight: 600;
}
</style>
</head>
<body> 
<section class="page-header">
    <div class="header">
        <div class="header-left"> 
            <img src="images/logo1.png" class="header-left-logo">
        </div>    
        
        <div id="header-right" class="header-right">
            <a href="index.html" class="header-right-links">Home</a>
            <a href="about.html" class="header-right-links">About</a>
            <a href="contact.html" class="header-right-links">Contact</a>
        </div>
        <a href="javascript:void(0);" class="header-right-icon" onclick="ResponsiveFunction()"><i class="fa fa-bars"></i></a>
        <a href="javascript:void(0);" class="header-right-close-icon" id="closeIcon" onclick="ResponsiveFunction()"><i class="fa fa-close"></i></a>
    </div>

    <div class="fixed-header" id="fixed-header">
        <a href="customers.php" class="fixed-header-links"><i class="fas fa-user"> Customers</i></a>
        <a href="loans.html" class="fixed-header-links"><i class="fas fa-rupee-sign"> Loans</i></a>
        <a href="invest.html" class="fixed-header-links"><i class="fas fa-money-check"> Invest</i></a>
        <a href="insure.html" class="fixed-header-links"><i class="fas fa-umbrella"> Insure</i></a>    
    </div>
</section>
 <?php
 $customerName = $_GET["userName"];
	
	$servername = "localhost:3306";
	$username = "root";
	$password = "";
	$db = "bank";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$db);
	// Check connection
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}

$sql = $conn -> query("select * from transactionhistory where customerName='".$customerName."'");
	echo "<h2>Transaction Details of ".$customerName."</h2>";
	echo "<table width='80%' border='2'>";
	echo "<tr align='center'><th>Customer Name</th><th>Transaction Amount</th><th>Transaction Timestamp</th><th>Send/Receive</th></tr>";
	
// output data of each row
  while($row = $sql->fetch_assoc()) {
	

	echo "<tr>";
	echo "<td>".$row["customerName"]."</td>";
	echo "<td>".$row["transactionAmount"]."</td>";
	echo "<td>".$row["timestamp"]."</td>";
	echo "<td>".$row["sendReceive"]."</td>";
	echo "</tr>";
  }
  echo "</table>";
?>

<button class="back-button" onclick="window.history.back()"><span class="back-button-span"> Back</span></button>   
<button class="print-button" onclick="window.print()"><span class="print-button-span">Print </span></button>
</body>
</html>