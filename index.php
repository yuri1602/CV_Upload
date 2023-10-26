<?php

@include 'save_cv.php'; 

if (isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $last_name = $_POST['last_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $university = $_POST['university'];
    $skills = $_POST['skills'];



    $query = "INSERT INTO candidates VALUES('', '$first_name', '$second_name', '$last_name' , ' $date_of_birth', '$university' , '$skills')";
    mysqli_query($conn, $query);
    echo"
    <script> alert('Успешно Запазено')</script>
    ";
} 

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <title>CV</title>
</head>
<body>
<h1>Създайте своето CV</h1>
<form action="" method="post" >
    <!-- Name -->
    <input type="text" name="first_name" placeholder="Име..." required ><br>
    <input type="text" name="second_name"placeholder="Презиме..." required ><br>
    <input type="text" name="last_name" placeholder="Фамилия..." required><br>
    <!-- Date of Birth -->
    <input type="date" name="date_of_birth" required ><br>

    <!-- University -->
<?php    
    $sql1 = "SELECT university_name FROM universities";

    $result = mysqli_query($conn, $sql1);

    if (!$result) {
    die("Грешка при заявката: " . mysqli_error($conn));
    }

     
    echo '<label for=""> Университет:</label><br>'; 
    echo '<select name="university">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="" select hidden>Изберете или добавете</option>';
        echo '<option value="' . $row['university_name'] . '">' . $row['university_name'] . '</option>';
    }
    echo '</select>';
?>
     <!-- Popup uni -->
    <button id="openUniversityPopup" >Добави нов Уневерситет</button>
<div id="universityPopup" class="hidden">
    <input type="text" id="newUniversity" placeholder="Въведете нов университет">
    <button id="saveUniversity">Запази</button>
</div>

<script>
    const openUniversityPopupButton = document.getElementById("openUniversityPopup");
    const universityPopup = document.getElementById("universityPopup");
    const newUniversityField = document.getElementById("newUniversity");
    const saveUniversityButton = document.getElementById("saveUniversity");

    openUniversityPopupButton.addEventListener("click", () => {
        universityPopup.style.display = "block";
    });

    saveUniversityButton.addEventListener("click", () => {
        const newUniversityName = newUniversityField.value;
        // Add new Uni
        const universitySelect = document.querySelector("select[name='university']");
        const option = document.createElement("option");
        option.text = newUniversityName;
        option.value = newUniversityName;
        universitySelect.add(option);
        universityPopup.style.display = "none";
    });
</script><br>


   
  
<!-- Skills -->
<?php    
    $sql1 = "SELECT skill_name FROM skills";

    $result = mysqli_query($conn, $sql1);

    if (!$result) {
    die("Грешка при заявката: " . mysqli_error($conn));
    }
    echo '<label for=""> Умения:</label><br>'; 
    echo '<select name="skills">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="" select hidden>Изберете или добавете</option>';
        echo '<option value="' . $row['skill_name'] . '">' . $row['skill_name'] . '</option>';
    }
    echo '</select>';


  
?>

<button id="openSkillsPopup">Добави други опции</button>
<div id="skillsPopup" class="hidden">
    <input type="text" id="newSkill" placeholder="Въведете ново умение">
    <button id="saveSkill">Запази</button>
</div>

<script>
    const openSkillsPopupButton = document.getElementById("openSkillsPopup");
    const skillsPopup = document.getElementById("skillsPopup");
    const newSkillField = document.getElementById("newSkill");
    const saveSkillButton = document.getElementById("saveSkill");
    const skillsSelect = document.getElementById("skillsSelect");

    openSkillsPopupButton.addEventListener("click", () => {
        skillsPopup.style.display = "block";
    });

    saveSkillButton.addEventListener("click", () => {
        const newSkillName = newSkillField.value;
        // Add New skills
        const skillsSelect = document.querySelector("select[name='skills']");
        const option = document.createElement("option");
        option.text = newSkillName;
        option.value = newSkillName;
        skillsSelect.appendChild(option);
        skillsPopup.style.display = "none";
    });
</script><br>

    <button type="submit" name="submit">Запази CV</button>

</form>
</body>
</html>