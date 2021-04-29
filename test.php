<?php
    if(isset($_POST['presses']))
    {
        $presses = $_POST['presses'];
    }
    else
    {
        $presses = 0;
        header("Location: /test.php?presses=" . $presses);
    }
?>

<form action="test.php" method="post">
    <input type="submit" name="response" value="Go!" />
    <input type="hidden" id="presses" name="presses" value="<?php echo $_GET['presses'];?>"/>
</form>

<?php


    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['response']))
    {
        buttonPress();
    }

    function buttonPress()
    {

        switch($_POST['presses'])
        {
            case 0:
                echo "ayeeee gg you pressed the button";
                $presses++;
                header("Location: /test.php?presses=" . $_POST['presses'] + 1);
                break;
            case 1:
                echo "You clicked it again! How...cool?";
                $presses++;
                header("Location: /test.php?presses=" . $_POST['presses'] + 1);
                break;
            case 2:
                echo "You clicked it again? Okay...";
                $presses++;
                header("Location: /test.php?presses=" . $_POST['presses'] + 1);
                break;
            case 3:
                echo "Why are you doing this to yourself?";
                $presses++;
                header("Location: /test.php?presses=" . $_POST['presses'] + 1);
                break;
            default:
                echo "Okay, I'm done. Have fun..?";
                break;
        }
    }

?>