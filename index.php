<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Dziennik</h1>
    </header>
    <main>
        <?php
            echo '<main>';
            echo '<div style="text-align: center;">';
            echo '<h1>Matematyka</h1>';
            $login = mysqli_connect('localhost', 'root', '', 'szkola');
            $result = mysqli_query($login, 'SELECT ID, Imie, Nazwisko, Ocena FROM uczniowie');
            echo "<table>";
            echo "<tr>";
            echo "<th>id</th>"; 
            echo "<th>imie</th>";
            echo "<th>nazwisko</th>";
            echo "<th>ocena</th>";
            echo "</tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['Imie'] . "</td>";
                echo "<td>" . $row['Nazwisko'] . "</td>";
                echo "<td>" . $row['Ocena'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo '</div>';
            echo '</main>';
            ?>
    </main>
    <aside>
        <ul>
            <li>Matematyka</li>
            <li>J.Polski</li>
            <li>J.Niemiecki</li>
        </ul>
    </aside>

    <footer>
        ZSZ Bobowa
    </footer>
</body>
</html>