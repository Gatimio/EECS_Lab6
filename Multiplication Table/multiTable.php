<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="header.css">
    <header>
            <ul>
                <li><a href="/index.html">Homepage</a></li>
                <li><a href="/multiTable.php">Multiplication Table</a></li>
                <li><a href="/quiz.html">Quiz</a></li>
                <li><a href="/slideShow.html">Web Store</a></li>
            </ul>
        </header>
</head>
<body>
    <table border="2">
        <?php for($row=1;$row<=100;$row++){ ?>
            <tr>
            <?php for($col=1;$col<=100;$col++){ 
                $result = $row*$col;?>
                <td><?php echo $result ?></td>
            <?php } ?>
            <tr>
        <?php } ?>
    </table>
</body>
</html>