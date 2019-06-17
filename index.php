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
    <header>
        <h1>
            <?php       
                // URL: http://localhost:8000/?name=%3Ca%20href=%22https://ericmarty.dev%22%3EEric%3C/a%3E          
                echo "Hello, " . htmlspecialchars($_GET['name']);
            ?>
        </h1>
    </header>
</body>
</html>