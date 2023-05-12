<?php
session_start();
$itemname1 = $_SESSION['itemname1']; //檢索 item1 的名稱
$itemname2 = $_SESSION['itemname2']; //檢索 item2 的名稱
$itemname3 = $_SESSION['itemname3']; //檢索 item3 的名稱

if (isset($_POST['selected_item'])) {
    $_SESSION['selected_item'] = $_POST['selected_item'];
    header('Location: count.php');
    exit;
}

$itemname = $_SESSION['selected_item'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Confirmation Page</title>
</head>
<body>
	<h2>Confirmation Page</h2>
	<p>You have selected the following items:</p>
	<ul>
		<li>Item Name: <?php echo $itemname1; ?></li>
		<li>Item Name: <?php echo $itemname2; ?></li>
		<li>Item Name: <?php echo $itemname3; ?></li>
	</ul>
	<p>If this information is correct, please click the "Confirm" button to proceed.</p>
	<form action="confirm.php" method="post">
    <?php 
    $selected_items = $itemname1 . "," . $itemname2 . "," . $itemname3;
    ?>

<input type="hidden" name="selected_item" value="<?php echo $selected_items; ?>">

		<input type="submit" name="confirm" value="Confirm">
	</form>
	<p>If you want to make changes, please click the "Back" button to return to the previous page.</p>
	<form action="item.php" method="post">
		<input type="submit" name="back" value="Back">
	</form>
</body>
</html>
