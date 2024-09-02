<?php
include "./connect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validasi sederhana
    if (!empty($name) && !empty($email) && !empty($message)) {
        $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Hello! I am an alert box!!");</script>';
            header('Location: index.html');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    } else {
        echo "All fields are required!";
    }
} else {
    echo "Invalid request method.";
}
?>
