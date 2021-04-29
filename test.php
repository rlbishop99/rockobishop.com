<?php
session_start();


if(!isset($_SESSION['presses'])) {
    $_SESSION['presses'] = 0;
}
?>

<form action="test.php" method="post">
    <input type="submit" name="response" value="Go!" />
</form>

<?php


    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['response']))
    {
        showMessage();
        buttonPress();
    }

    function buttonPress()
    {

        switch($_SESSION['presses'])
        {
            case 0:
                header("Location: /test.php?presses=" . $_SESSION['presses']++);
                break;
            case 1:
                header("Location: /test.php?presses=" . $_SESSION['presses']++);
                break;
            case 2:
                header("Location: /test.php?presses=" . $_SESSION['presses']++);
                break;
            case 3:
                header("Location: /test.php?presses=" . $_SESSION['presses']++);
                break;
            default:
                session_destroy();
                header("Location: /test.php?presses=0");
                break;
        }
    }

    function showMessage()
    {
        switch($_SESSION['presses'])
        {
            case 0:
                echo "ayeeee gg you pressed the button";
                break;
            case 1:
                echo "You clicked it again! How...cool?";
                break;
            case 2:
                echo "You clicked it again? Okay...";
                break;
            case 3:
                echo "Why are you doing this to yourself?";
                break;
            default:
                echo "Okay, I'm done. Have fun..?";
                break;
        }
    }

?>