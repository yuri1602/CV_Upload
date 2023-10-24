<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles1.css">
    <title>Администраторски панел за качени CV-та</title>
    <script>
        function validateForm() {
            var startDate = document.getElementById("startDate").value;
            var endDate = document.getElementById("endDate").value;
            if (startDate === "" || endDate === "") {
                alert("Моля, изберете начална и крайна дата.");
                return false;
            }
        }
    </script>
</head>
<body>
    <h1>Справка за CV</h1>
    <form method="post" onsubmit="return validateForm();">
        <label for="startDate">Начална дата:</label>
        <input type="date" id="startDate" name="startDate" required>
        <label for="endDate">Крайна дата:</label>
        <input type="date" id="endDate" name="endDate" required>
        <input type="submit" value="Извлечи CV-та и агрегация">
    </form>
</body>
</html

<?php
@include 'save_cv.php'; 

if (!$conn) {
    die("Грешка при връзка с базата данни: " . mysqli_connect_error());
}


if (isset($_POST['startDate']) && isset($_POST['endDate'])) {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];


    $cvSql = "SELECT * FROM candidates WHERE date_of_birth BETWEEN '$startDate' AND '$endDate'";
    $cvResult = mysqli_query($conn, $cvSql);

    $aggregateSql = "SELECT
                        DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(date_of_birth)), '%Y') + 0 AS age,
                        GROUP_CONCAT(skills) AS skills
                    FROM candidates
                    WHERE date_of_birth BETWEEN '$startDate' AND '$endDate'
                    GROUP BY age";

    $aggregateResult = mysqli_query($conn, $aggregateSql);

    echo "<h2>CV-та на кандидати родени между $startDate и $endDate:</h2>";

    if (mysqli_num_rows($cvResult) > 0) {
        echo "<h3>CV-та:</h3>";
        echo "<table border='1'>";
        echo "<tr>
                <th>Първо име</th>
                <th>Презиме</th>
                <th>Фамилия</th>
                <th>Дата на раждане</th>
                <th>Години</th>
                <th>Университет</th>
                <th>Умения</th>
              </tr>";

        while ($row = mysqli_fetch_assoc($cvResult)) {

            $birthDate = new DateTime($row["date_of_birth"]);
            $currentDate = new DateTime();
            $age = $currentDate->diff($birthDate)->y;

            echo "<tr>
                    <td>" . $row["first_name"] . "</td>
                    <td>" . $row["second_name"] . "</td>
                    <td>" . $row["last_name"] . "</td>
                    <td>" . $row["date_of_birth"] . "</td>
                    <td>" . $age . "</td>
                    <td>" . $row["university"] . "</td>
                    <td>" . $row["skills"] . "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Няма намерени CV-та за избрания период.</p>";
    }

    if (mysqli_num_rows($aggregateResult) > 0) {
        echo "<h3>Допълнителна информация :</h3>";
        echo "<table border='1'>";
        echo "<tr>
                <th>Възраст</th>
                <th>Умения</th>
              </tr>";

        while ($row = mysqli_fetch_assoc($aggregateResult)) {
            echo "<tr>
                    <td>" . $row["age"] . "</td>
                    <td>" . $row["skills"] . "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Няма намерени данни за избрания период.</p>";
    }
}

mysqli_close($conn);
?>


