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
        <?php
            foreach ($person as $trait => $val) {
                echo "<li><strong>{$trait}</strong> {$val}</li>";
            }
        ?>
    </ul>
</body>
</html>