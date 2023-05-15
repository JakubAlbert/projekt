<?php
require('../database.php');
$db = new Database();
if (isset($_POST['appointment'])) {
    $data = [
        'first_name' => $_POST["first_name"],
        'last_name' => $_POST["last_name"],
        'email' => $_POST["email"],
        'phone_number' => $_POST["phone_number"],
        'book_date' => $_POST["book_date"],
        'leave_message' => $_POST["leave_message"]
    ];
    try {
        $query = "INSERT INTO appointment (first_name, last_name, phone_number, email, book_date, leave_message) VALUES (:first_name, :last_name, :phone_number, :email, :book_date, :leave_message)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
        header("Location: http://localhost/projekt/index.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "F";
}
?>
