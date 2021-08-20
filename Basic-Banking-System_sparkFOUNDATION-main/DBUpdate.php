 <?php session_start(); ?>


<?php	


$senderName = $_GET["senderName"];
$senderBalance = $_GET["senderBalance"];
$receiverName = $_GET["receiverName"];
$amountToBeSent= $_GET["amountToBeSent"];

$date = new DateTime();
$timeStamp= date('D, d M Y H:i:s', $date->getTimestamp());


// Create connection
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
echo "UPDATE customer SET balance =".$senderBalance." where name=".$senderName;

$sqlUpdate ="UPDATE customer SET balance ='".$senderBalance."' where name='".$senderName."';";
if (mysqli_query($conn, $sqlUpdate)) {
      echo "Record updated successfully";
   } else {
      echo "Error updating record: " . mysqli_error($conn);
   }
   
	$sqlInsert ="INSERT INTO transactionhistory (customerName, transactionAmount, timestamp, sendReceive) VALUES ('".$senderName."','".$amountToBeSent."','".$timeStamp."','send');";
	if (mysqli_query($conn, $sqlInsert)) {
	  echo "Record updated successfully";
	} else {
	  echo "Error updating record: " . mysqli_error($conn);
	}
   
   
  $sql =$conn -> query("select Balance from customer where name='".$receiverName."';");
while($row = $sql->fetch_assoc()) {
	$receiverBalance= $row["Balance"];
	$receiverFinalBalance= $receiverBalance + $amountToBeSent;
		$sqlNew ="UPDATE customer SET balance ='".$receiverFinalBalance."' where name='".$receiverName."';";
		if (mysqli_query($conn, $sqlNew)) {
		  echo "Record updated successfully";
		} else {
		  echo "Error updating record: " . mysqli_error($conn);
		}
	$sqlInsert ="INSERT INTO transactionhistory (customerName, transactionAmount, timestamp, sendReceive) VALUES ('".$receiverName."','".$receiverFinalBalance."','".$timeStamp."','received');";
	if (mysqli_query($conn, $sqlInsert)) {
	  echo "Record updated successfully";
	} else {
	  echo "Error updating record: " . mysqli_error($conn);
	}

   
}


   mysqli_close($conn);
   
   
   
?>
<script>

window.location="Customers.php";
</script>