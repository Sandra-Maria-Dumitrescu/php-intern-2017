<?php 

include 'connectDb.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<br>";
	$counter = 0;
	while($row = $result->fetch_assoc()) {
		$counter ++;
		echo '<div class="product">';
		echo '<img src="images/demo/80x80.gif" alt=""> ';
		echo '<div style="clear:both;"></div>';
		echo "<span> " . $row["name"] ."</span>";
		echo "</div>";
	}
	echo '<div style="clear:both;"></div>';		
} else {
	echo "nothing to display";
}

// Close the database connection
mysqli_close($conn);

?>