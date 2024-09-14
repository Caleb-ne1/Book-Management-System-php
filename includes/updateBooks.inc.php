<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $Title = $_POST["Title"];
    $Author = $_POST["Author"];
    $Published_year = $_POST["Published_year"];
    $Genre = $_POST["Genre"];

    try {
        require_once("./dbconn.inc.php");

        $query = "UPDATE books SET Title = :Title, Author = :Author, Published_year = :Published_year, Genre = :Genre WHERE Title = :Title";

        $smt = $pdo->prepare($query);
        $smt->bindParam(":Title", $Title);
        $smt->bindParam(":Author", $Author);
        $smt->bindParam(":Published_year", $Published_year);
        $smt->bindParam(":Genre", $Genre);

        $smt->execute();
        header("Location: ../index.php");
    } catch(PDOException $e) {
        echo "Query failed: ". $e->getMessage();
    }
} else {
    header("Location: ../index.php");
}
