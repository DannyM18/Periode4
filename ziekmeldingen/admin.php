<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        table, th, td {
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
        <h2>beheren van ziekmeldingen</h2>
        <nav>
            <ul>
                <li><a href="admin.php">admin</a></li>
                <li><a href="index.php">leerling</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Admin panel</h2>
        <h4><a href="addziekmelding.php">Ziekmelding toevoegen</a></h4>

        <?php
        include 'functies/toonziekadmin.php';

        toonziekadmin();
        ?>

    </main>
</body>
</html>