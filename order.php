<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['customerName'];
    $phone = $_POST['customerPhone'];
    $clothes = isset($_POST['clothes']) ? implode(", ", $_POST['clothes']) : "No clothes selected";

    // WhatsApp Message Format
    $message = "New Laundry Order:\nName: $name\nPhone: $phone\nClothes: $clothes";

    // Email Configuration (Optional)
    $to = "your-email@example.com";  // Yahan apna email dalen
    $subject = "New Laundry Order";
    $headers = "From: noreply@yourdomain.com";

    // Send Email
    mail($to, $subject, $message, $headers);

    // Order Confirmation Response
    echo "Order received successfully!";
} else {
    echo "Invalid Request!";
}
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['customerName'];
    $phone = $_POST['customerPhone'];
    $clothes = isset($_POST['clothes']) ? implode(", ", $_POST['clothes']) : "No clothes selected";

    // Check if fields are empty
    if (empty($name) || empty($phone)) {
        echo "Error: Name and Phone are required!";
        exit();
    }

    // Debugging Output
    echo "Received Order:<br>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Phone: " . htmlspecialchars($phone) . "<br>";
    echo "Clothes: " . htmlspecialchars($clothes) . "<br>";
} else {
    echo "Invalid Request!";
}
?>