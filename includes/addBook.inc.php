<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Title = $_POST["Title"];
    $Author = $_POST["Author"];
    $Published_year = $_POST["Published_year"];
    $Genre = $_POST["Genre"];

try {
    require_once"./dbconn.inc.php";

    $add_book_query = "INSERT INTO books (Title, Author, Published_year, Genre) VALUES ('$Title', '$Author', '$Published_year', '$Genre');";
    $pdo->exec($add_book_query);

    header("Location: ../index.php");
} catch (PDOException $e) {
    echo"Failed: " . $e->getMessage();
}

} else {
    header("Location: ../index.php");
}
