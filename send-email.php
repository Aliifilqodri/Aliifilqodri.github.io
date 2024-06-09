<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Alamat email tujuan
    $to = "aleevtugung@gmail.com"; // Ganti dengan alamat emailmu

    // Subject email
    $subject = "Pesan dari Situs Web: Kontak Formulir";

    // Isi pesan email
    $body = "Nama: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Pesan:\n$message";

    // Header email
    $headers = "From: $email";

    // Kirim email menggunakan fungsi mail()
    if (mail($to, $subject, $body, $headers)) {
        // Jika pengiriman berhasil
        echo "<p>Thank you for your message. We will contact you shortly.</p>";
    } else {
        // Jika terjadi kesalahan dalam pengiriman
        echo "<p>Sorry, there was an error sending your message.</p>";
    }
}
?>
