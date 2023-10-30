<!DOCTYPE html>
<html>

<head>
    <h1>Multiplication Table</h1>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $size = isset($_POST["size"]) ? intval($_POST["size"]) : 0;

        if ($size > 0) {
            echo "<h2>Multiplication Table (1 to $size)</h2>";
            echo "<table border='1'>";
            echo "<tr><th>&nbsp;</th>";
            for ($col = 1; $col <= $size; $col++) {
                echo "<th>$col</th>";
            }
            echo "</tr>";

            for ($row = 1; $row <= $size; $row++) {
                echo "<tr>";
                echo "<th>$row</th>";
                for ($col = 1; $col <= $size; $col++) {
                    echo "<td>" . ($row * $col) . "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Please enter a valid number to generate the multiplication table.";
        }
    }
    ?>
</body>

</html>
