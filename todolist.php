<?php
/**
 * Pablo Sanchez
 * Description: To-do list of user
 * Features:
 */
include "shared.php";

//Call $_SESSION[]
session_start();

//Verify if login failed
if (!isset($_SESSION["username"])) {

    //Content will not be displayed if login fails
    //Go back to index.php
    header("Location: index.php");
}

//Print header
top();
?>

    <div id="main">
        <h2><?= $_SESSION["username"] ?> To-Do List</h2>

        <ul id="todolist"></ul>

        <div id="buttons">
            <input id="itemtext" type="text" size="30" autofocus="autofocus"/>
            <button id="add">Add to Bottom</button>
            <button id="delete">Delete Top Item</button>
        </div>

        <ul>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </div>

<?php
//Print footer
bottom();
?>