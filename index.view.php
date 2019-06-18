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
        <?php if ($task['completed']) : ?>
            <h2>Task completed.</h2>
        <?php endif ?>
    </ul>
</body>
</html>