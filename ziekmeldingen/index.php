<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website ziekmelden</title>
        <style>
            table, th, td{
                border: 1px solid black;
                border-collapse: collapse;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
            a {
                text-decoration: none;
                color: blue;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
</head>
<body>
    <header>
        <h2>website voor ziekmeldingen</h2>
        <nav>
            <ul>
                <li><h4><a href="admin.php">admin</a></h4></li>
                <li><h4>leerling</h4></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
         include 'functies/toonziek.php';
            toonziek();
        ?>
    </main>

</body>
</html>