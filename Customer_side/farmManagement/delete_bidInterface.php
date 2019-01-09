<?php
$mysqli = new mysqli("localhost", "root", '', "fmsmy");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "DELETE FROM auction WHERE Item_code='$_GET[code]' ";

if ($mysqli->query($query) === TRUE) {
    echo "<hr>Auction delete successfully<br>";
    echo "<a href='AuctionHomeFarmer.php'>Click Here to AuctionHome</a>";
} else {
    echo "Error: " . $query . "<br>" . $mysqli->error;
}

$mysqli->close();

?>