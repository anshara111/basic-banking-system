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
<title>Transaction | Bank-TSF</title>
<style>
body {
margin:0;
padding:0;
border: 0;
height: auto;
overflow-x: hidden;
font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
background-color: tomato;
}

.background {
height: 110vh;
width: 100%;
position: fixed;
top: 0;
bottom: 0;
z-index: 0;
background: peachpuff;
clip-path: circle(62% at 100%);
z-index: -9999;
}

/*--Header Div--*/
.header {
margin:0;
width:100%;
height: 100px;
position:relative;
background-color: rgba(0,0,0, 0.5);
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
  .background {
      display: none;
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

.page-content h1 {
text-align: center;
font-size: 45px;
margin: 2% 0 0 35%;
width: 30%;
border-radius: 25px;
padding: 25px 0;
color: silver;
background-color: rgba(0,0,0, 0.8);
}

@media (max-width: 880px) {
    .page-content h1 {
        font-size: 25px;
    }
}

.page-content .sender-details-bg {
float: left;
margin: 5% 0 0 20%;
background-image: url("images/bg.png");
background-size: cover;
filter: blur(2px);
width: 25%;
height: 200px;
border-radius: 25px;
}

.page-content .sender-details .heading {
position: absolute;
top: 47%;
left: 29.5%;
color: black;
font-size: 25px;
} 

.page-content .sender-details .name {
position: absolute;
top: 57%;
left: 22%;
font-weight: 600;
font-size: 20px;
}

.page-content .sender-details .mail {
position: absolute;
top: 63%;
left: 22%;
font-weight: 600;
font-size: 20px;
}

.page-content .sender-details .cb {
position: absolute;
top: 69%;
left: 22%;
font-weight: 600;
font-size: 20px;
}

@media (max-width: 880px) {
    .page-content .sender-details-bg {
        float: none;
        margin: 10% 0 0 5%;
        width: 90%;
    }

    .page-content .sender-details .heading {
        position: relative;
        top: -200px;
        left: 125px;
        margin: 0% 0 0 0;
    }

    .page-content .sender-details .name {
        position: relative;
        top: -200px;
        left: 50px;
    }

    .page-content .sender-details .mail {
        position: relative;
        top: -200px;
        left: 50px;
        font-size: 18px;
    }

    .page-content .sender-details .cb {
        position: relative;
        top: -200px;
        left: 50px;
        font-size: 18px;
    }
}

.page-content .receiver-details-bg {
float: right;
margin: 5% 20% 0 0;
background-image: url("images/bg.png");
background-size: cover;
filter: blur(2px);
width: 25%;
height: 200px;
border-radius: 25px;
}

.page-content .receiver-details .heading {
position: absolute;
top: 47%;
right: 29.5%;
color: black;
font-size: 25px;
}

.page-content .receiver-details .name {
position: absolute;
top: 57%;
right: 27.5%;
font-weight: 600;
font-size: 20px;
}

.page-content .receiver-details .name select {
width: 100%;
text-align: center;
padding: 5px;
position: relative;
left: 35%;
top: -26px;
border: none;
border-radius: 10px;
color: white;
font-size: 18px;
background-color: #333333;
}

.page-content .receiver-details .name option {
width: 100%;
text-align: center;
padding: 5px;
border: none;
color: white;
font-size: 17px;
font-weight: 600;
}

.page-content .receiver-details .amount {
position: absolute;
top: 69%;
right: 18.5%;
font-weight: 600;
font-size: 20px;
}

.page-content .receiver-details .amount i {
position: absolute;
z-index: 9;
color: white;
padding: 8px;
}

.page-content .receiver-details .amount input[type = text] {
width: 50%;
text-align: center;
padding: 5px;
position: relative;
left: 0%;
top: 0px;
border: none;
border-radius: 10px;
color: white;
font-size: 18px;
background-color: #333333;
}

@media (max-width: 880px) {
    .page-content .receiver-details-bg {
        float: none;
        margin: 10% 0 0 5%;
        width: 90%;
    }

    .page-content .receiver-details .heading {
        position: relative;
        top: -225px;
        left: 120px;
    }

    .page-content .receiver-details .name {
        position: relative;
        top: -250px;
        left: 50px;
    }

    .page-content .receiver-details .name select {
        top: 10%;
        left: 0%;
        width: 50%;
    }

    .page-content .receiver-details .amount {
        position: relative;
        left: 50px;
        top: -250px;
    }

    .page-content .receiver-details .amount input[type = text] {
        width: 40%;
    }
}

.send-button {
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
margin: 5px;
position: relative;
left: 24%;
top: 270px;
}

.send-button .send-button-span {
cursor: pointer;
display: inline-block;
position: relative;
transition: 0.5s;
}

.send-button .send-button-span:after {
content: '\203A';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.send-button:hover .send-button-span {
padding-right: 15px;
}

.send-button:hover .send-button-span:after {
opacity: 1;
right: 0;
}

@media (max-width: 880px) {
    .send-button {
        left: 30%;
        top: -150px;
    }
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
margin: 5px;
position: relative;
top: 219px;
left: 13%;
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

@media (max-width: 880px) {
    .back-button {
        left: -5%;
        top: -90px;
    }
}
</style>
</head>
<body>


    <div class="background"></div>

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
             
    <!--Script for header-->
    <script>
    function ResponsiveFunction()
    {  
        var nav = document.getElementById("header-right");
        var closeIcon = document.getElementById("closeIcon");
                  
        if (nav.className === "header-right")
        {
            nav.className += " Responsive-SlideDown";
            closeIcon.style.opacity = "1";
        }
        else
        {
            nav.className = "header-right";
            closeIcon.style.opacity = "0";
        }
    }       
    </script>  
    <!--End of Script for header-->
                
    <!---Start of sticky header script-->
    <script>
    window.onscroll = function() {myFunction()};
        var header = document.getElementById("fixed-header");
        var sticky = header.offsetTop;
                
        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky-fixed-header");
            }
            else
            {
                header.classList.remove("sticky-fixed-header");
            }
        }
    </script>
    <!---End of sticky Header-->

    <section class="page-content">
        <h1>Transfer Money</h1>
        <div class="sender-details-bg"></div>
        <div class="sender-details">
            <h4 class="heading">Sender</h4>
            <p class="name">Name : <span id="current-user-name" style="font-weight: 900; font-family: cursive;"></span></p>
            <p class="mail">Email  : <span id="current-user-email" style="font-weight: 900; font-family: cursive;"></span></p>
            <p class="cb">Current-Balance : <i class="fas fa-rupee-sign"> <span id="current-user-balance" style="font-weight: 900; font-family: cursive;"></span></i></p>
        </div>

        <div class="receiver-details-bg"></div>
        <div class="receiver-details">
            <h4 class="heading">Receiver</h4>
            	
<?php	
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

$sql = $conn -> query("select * from customer ");
?>
		<p class="name">Name : <select name="name" id="receiverName"  onChange="return setMail()">
		<option data-mail="0" value="0" selected="selected">Select User</option>
		<?php
		// output data of each row
		  while($row = $sql->fetch_assoc()) {
			echo "<option data-mail='".$row["id"]."' value='".$row["name"]."'>".$row["name"]."</option>";
			
		  }
		  ?>	
		</select></p>
  

                
                <p class="amount">Amount : <i class="fas fa-rupee-sign"></i><input id="amountToBeSent" type="text" required></p>           
                <button class="send-button" onclick="validationOnSend()"><span class="send-button-span">Send </span></button> 
                <button class="back-button" onclick="window.history.back()"><span class="back-button-span"> Back</span></button>      
        </div>
    </section>

    <script>

	document.getElementById("current-user-name").innerHTML = sessionStorage.getItem("name");
	document.getElementById("current-user-email").innerHTML = sessionStorage.getItem("email");
	document.getElementById("current-user-balance").innerHTML = sessionStorage.getItem("balance");
	var currentUserBalance =sessionStorage.getItem("balance");
	
	function validationOnSend() {
		var senderName = document.getElementById("current-user-name").innerHTML;
        var receiverName = document.getElementById("receiverName").value;
		
		var amountToBeSent = document.getElementById("amountToBeSent").value;
		alert("sender : "+senderName+"\nreceiver : "+receiverName +"\namount to be sent: "+amountToBeSent);
		
		if (amountToBeSent > currentUserBalance){
	
			alert("Amount to be transfered should be less than Current Balance.");
			window.location="transaction.php";
	
			
		}else{
			if (senderName == receiverName){
			var x = document.getElementById("receiverName");
				for (var i=1;i<=x.length;i++){
					if (senderName	 == x[i].value){
						alert("Cannot send to same account as logged in  : "+x[i].value +" removing value from list");
						x[i].remove();
						exit;
					}
					
				}
				window.location="Customers.php";
			}else{
				//Balance calculation
			
				var finalCurrentSenderBalance = parseFloat(currentUserBalance) - parseFloat(amountToBeSent);
				document.getElementById("current-user-balance").innerHTML = finalCurrentSenderBalance;
				
				window.location="DBUpdate.php?senderName="+senderName+"&senderBalance="+finalCurrentSenderBalance+"&receiverName="+receiverName+"&amountToBeSent="+amountToBeSent;
			}
		}
		
		
		
	}
        
    </script>
</body>
</html>