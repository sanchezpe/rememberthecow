<?php
/**
 * Pablo Sanchez
 * Description: Main page for Remember the Cow
 * Features: Login form, error message if session is invalid
 */
include "shared.php";

//Print header
top();
?>
    <div id="main">
        <p>
            The best way to manage your tasks. <br/>
            Never forget the cow (or anything else) again!
        </p>

        <p>
            Log in now to manage your to-do list:
        </p>

        <form id="loginform" action="login.php" method="post">
            <div><input id="name" name="name" type="text" size="12" autofocus="autofocus"/> <strong>User Name</strong>
            </div>
            <div><input id="password" name="password" type="password" size="12"/> <strong>Password</strong></div>
            <div><input id="submitbutton" type="submit" value="Log in"/></div>
        </form>

        <?php
        // Display error message if login fails
        //Start session
        session_start();

        //Verify if login has failed by checking if dummy value exists
        if (isset($_SESSION["failed"])) {
            ?>

            <!--Print error message-->
            <div id="error">
                Incorrect user name / password. Please try again.
            </div>

            <?php
            //Empty $_SESSION[]
            session_destroy();
        } ?>
    </div>

<?php
//print footer
bottom();
?>