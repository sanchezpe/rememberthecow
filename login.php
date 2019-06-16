<?php
/**
 * Pablo Sanchez
 * Description: Log into todolist.php if credentials are correct
 * Features: Create session, assign username, determine if session is valid
 */

//Default user and password
//Input from form must match these values to log in
$username = "user";
$password = "password";

//$_REQUEST can retrieve $_POST, $_GET, $_COOKIE
//Verify if username and passwords matches
if ($_REQUEST["name"] == $username && $_REQUEST["password"] == $password) {

    //Log into todolist.php
    header("Location: todolist.php");

    //Create session
    session_start();

    //Store username of current session
    //This variable will be used to verify if login was successful in todolist.php
    $_SESSION["username"] = $_REQUEST["name"];

} else {
    //Go to index.php
    header("Location: index.php");

    //Create session
    session_start();

    //Create dummy value to verify if login failed
    //Any value can be assigned, not necessarily a boolean
    $_SESSION["failed"] = true;
}