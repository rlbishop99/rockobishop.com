include 'index.php';

<form action="test.php" method="post">
    <input type="button" name="response" value="Go!" />
    <input type="button" name="response2" value="Back!" />
</form>

<?php

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