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
            echo "Welcome to my site!";
            break;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['response']))
    {
        buttonPress();
    }

    function buttonPress()
    {

        switch($_SESSION['presses'])
        {
            case 0:
                $_SESSION['presses']++;
                header("Location: /test.php?presses=" . $_SESSION['presses']);
                break;
            case 1:
                $_SESSION['presses']++;
                header("Location: /test.php?presses=" . $_SESSION['presses']);
                break;
            case 2:
                $_SESSION['presses']++;
                header("Location: /test.php?presses=" . $_SESSION['presses']);
                break;
            case 3:
                $_SESSION['presses']++;
                header("Location: /test.php?presses=" . $_SESSION['presses']);
                break;
            default:
                session_destroy();
                header("Location: /test.php?presses=0");
                break;
        }
    }
?>

<iframe src="https://itch.io/embed-upload/2621668?color=f7eaa1" allowfullscreen="" width="1300" height="808" frameborder="0">
<a href="https://plasmalot.itch.io/the-great-eggscape">Play The Great Eggscape on itch.io</a></iframe>