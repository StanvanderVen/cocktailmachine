<?php
$ver = "1.0";
$comPort = "/dev/ttyACM0";

if (isset($_POST["rcmd"])) {
    $rcmd = $_POST["rcmd"];
    switch ($rcmd) {
        case "h":
            $fp = fopen($comPort, "w");
            fwrite($fp, "h;");
            fclose($fp);
            break;
        case "o":
            $fp = fopen($comPort, "w");
            fwrite($fp, "o;");
            fclose($fp);
            break;
        default:
            die('Crap, something went wrong. The page just puked.');
    }
}
?>

<html>
    <body>
        <pre>Arduino from PHP handshake as <?php echo exec('whoami'); ?> (v.<?php echo $ver; ?>)</pre>
        <hr>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <input type="submit" value="h" name="rcmd" style="width:100px;height:100px;">
            <input type="submit" value="o" name="rcmd" style="width:100px;height:100px;">
        </form>
    </body>
</html>
