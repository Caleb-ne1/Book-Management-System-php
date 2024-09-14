<?php
include("./includes/dbconn.inc.php");
require_once("./includes/dbconn.inc.php");

$list_query = "SELECT * FROM books";
$smt = $pdo->prepare($list_query);
$smt->execute();
$results = $smt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Library Book Management</title>
</head>
<body>
<header>
    <div>
        <h2>📚Library Book management</h2>
    </div>
    <div class="actions-container">
        <p>Actions:</p>
        <button id="btn-insert" onclick="toggleAddForm()">Insert</button>
        <button id="btn-update" onclick="toggleUpdateForm()">Update</button>
        <button id="btn-delete" onclick="toggleDeleteForm()">Delete</button>
    </div>
    <div>
        <form action="./includes/addBook.inc.php" method="post" id="add-form-container">
            <div class="group">
            <div class="input-group">
                <input type="text" name="Title" placeholder="Title">
                <input type="number" name="Published_year" placeholder="Published Year">
            </div>
            <div class="input-group">
                <input type="text" name="Author" placeholder="Author">
                <input type="text" name="Genre" placeholder="Genre">
            </div>
            </div>
            <button type="submit" class="add-btn" id="btn-insert">Add Book</button>
        </form>

        <form action="./includes/updateBooks.inc.php" method="post" id="update-form-container"</form>
            <div class="group">
            <div class="input-group">
                <input type="text" name="Title" placeholder="Title">
                <input type="number" name="Published_year" placeholder="Published Year">
            </div>
            <div class="input-group">
                <input type="text" name="Author" placeholder="Author">
                <input type="text" name="Genre" placeholder="Genre">
            </div>
            </div>
            <button type="submit" id="btn-update">Update</button>
        </form>

        <form action="./includes/deleteBook.inc.php" method="post" id="dlt-form">
            <input type="text" name="userInput" placeholder="Enter book id, title, or author">
            <button type="submit" id="btn-delete">Delete</button>
        </form>
    </div>
</header>
<hr>
<div class="collection-container">
    <h2>All books</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Published Year</th>
            <th>Genre</th>
        </tr>
        <?php
            foreach ($results as $row) {
                echo "<tr>";
                echo "<td>". htmlspecialchars( $row["id"] ) . "</td>";
                echo "<td>". htmlspecialchars( $row["Title"] ) . "</td>";
                echo "<td>". htmlspecialchars( $row["Author"] ) . "</td>";
                echo "<td>". htmlspecialchars( $row["Published_year"] ) . "</td>";
                echo "<td>". htmlspecialchars( $row["Genre"] ) . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</div>
<script src="./js/script.js"></script>
</body>
</html>
