<?php
require_once '../config/auth.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
redirectIfNotAuthenticated('login.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Book - Library Management System</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="centered">
    <div class="addbook-container">
        <h2>Add Book</h2>
        <form id="addBookForm" method="POST" action="add_book.php">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required><br>
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" required><br>
            <label for="isbn">ISBN:</label>
            <input type="text" id="isbn" name="isbn" required><br>
            <label for="publication_year">Publication Year:</label>
            <input type="number" id="publication_year" name="publication_year" required><br>
            <label for="available_copies">Available Copies:</label>
            <input type="number" id="available_copies" name="available_copies" required><br>
            <button type="submit">Add Book</button>
        </form>
        <div id="addBookMessage">
            <?php
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
            ?>
        </div>
        <a href="index.php" class="button">Back to Home</a>
    </div>
</body>
</html>
