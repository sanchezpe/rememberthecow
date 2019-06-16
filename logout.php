<?php
/**
 * Pablo Sanchez
 * Description: Log out from todolist.php
 * Features: End session and go back to index.php
 */

//Call $_SESSION[]
session_start();

//Go back to index.php
header("Location: index.php");

//End session
//Empty $_SESSION[]
session_destroy();