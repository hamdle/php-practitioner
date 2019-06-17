<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        header {
            background: gray;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <ul>

        <?php foreach($names as $n)  : ?>
                <li><?= $n; ?></li>
        <?php endforeach; ?>

        <?php
            foreach($names as $n) {
                echo "<li>{$n}</li>";
            }
        ?>
    </ul>
</body>
</html>