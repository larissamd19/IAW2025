<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["method"] == "GET") {
        $query = http_build_query($_POST);  
        header("Location: order_process.php?$query"); 
        exit();
    }

    $data = $_POST;
} else {
    $data = $_GET;
}

$customer_name = $data["customer_name"] ?? "Unknown";
$baguettes = $data["baguettes"] ?? 0;
$rolls = $data["rolls"] ?? 0;
$sandwich_bread = $data["sandwich_bread"] ?? 0;

echo "<h2>Order Summary</h2>";
echo "Nombre: " . htmlspecialchars($customer_name) . "<br>";
echo "Baguettes: " . htmlspecialchars($baguettes) . "<br>";
echo "Rolls: " . htmlspecialchars($rolls) . "<br>";
echo "Sandwich Bread: " . htmlspecialchars($sandwich_bread) . "<br>";
echo "<br><strong>Order successfully placed. Thank you!</strong>";
?>
