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
                echo "ayeeee gg you pressed the button";
                header("Location: /test.php?presses=" . $_SESSION['presses']++);
                break;
            case 1:
                echo "You clicked it again! How...cool?";
                header("Location: /test.php?presses=" . $_SESSION['presses']++);
                break;
            case 2:
                echo "You clicked it again? Okay...";
                header("Location: /test.php?presses=" . $_SESSION['presses']++);
                break;
            case 3:
                echo "Why are you doing this to yourself?";
                header("Location: /test.php?presses=" . $_SESSION['presses']++);
                break;
            default:
                echo "Okay, I'm done. Have fun..?";
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