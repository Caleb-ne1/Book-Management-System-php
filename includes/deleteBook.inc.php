<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInput = $_POST["userInput"];

    try {
        require_once"./dbconn.inc.php";

        $delBook_query = "DELETE FROM books WHERE id = $userInput";
        $pdo->exec($delBook_query);

        header("Location: ../index.php");
    } catch (PDOException $e) {
        echo "Query failed". $e->getMessage();
    }
} else {
    header("Location: ../index.php");
}
