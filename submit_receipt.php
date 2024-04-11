<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    include_once "db_connection.php";

    // Get form data and sanitize inputs
    $accountName = mysqli_real_escape_string($conn, $_POST["account_name"]);
    $gcashNumber = mysqli_real_escape_string($conn, $_POST["gcash_number"]);
    $receiptMobileNumber = mysqli_real_escape_string($conn, $_POST["receipt_mobile_number"]);
    $amount = mysqli_real_escape_string($conn, $_POST["amount"]);

    // File upload handling
    $uploadDir = "uploads/"; // Directory where uploads will be saved
    $receiptAttachment = $uploadDir . basename($_FILES["receipt_attachment"]["name"]);
    move_uploaded_file($_FILES["receipt_attachment"]["tmp_name"], $receiptAttachment);

    // Insert data into database
    $sql = "INSERT INTO receipt_info (account_name, gcash_number, receipt_mobile_number, amount, receipt_attachment)
            VALUES ('$accountName', '$gcashNumber', '$receiptMobileNumber', '$amount', '$receiptAttachment')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Receipt information added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
} else {
    // Redirect back to the form if accessed directly
    header("Location: index.php");
    exit();
}
?>
