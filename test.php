<form action="test.php" method="post">
    <input type="submit" name="response" value="GO" />
</form>

<?php

$presses = 0;

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['response']))
    {
        buttonPress();
    }

    function buttonPress()
    {

        switch($presses)
        {
            case 0:
                echo "ayeeee gg you pressed the button";
                $presses++;
                break;
            case 1:
                echo "You clicked it again! How...cool?";
                $presses++;
                break;
            case 2:
                echo "You clicked it again? Okay...";
                $presses++;
                break;
            case 3:
                echo "Why are you doing this to yourself?";
                $presses++;
                break;
            default:
                echo "Okay, I'm done. Have fun..?";
                break;
        }
    }

?>