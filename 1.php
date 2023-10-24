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
<h1>Създаване на CV</h1>
<form action="" method="post" >
    <!-- Name -->
    <input type="text" name="first_name" placeholder="Име..." required ><br>
    <input type="text" name="second_name"placeholder="Презиме..." required ><br>
    <input type="text" name="last_name" placeholder="Фамилия..." required><br>
    <!-- Date of Birth -->
    <label for="">Дата на раждане:</label><input type="date" name="date_of_birth" required ><br>
    <!-- University -->
    <label for="">Уневерситет:</label><br>
    <select name="university" required>
        <option value="" select hidden>Изберете или добавете</option>
        <option value="VVMU">Висше военноморско училище „Н. Й. Вапцаров“</option>
        <option value="VSU">Варненски свободен университет "Черноризец Храбър"</option>
        <option value="TУ-София">Технически университет - София</option>
        <option value="СУ">Софийски университет</option>
        <option value="ПУ">Пловдивски университет "Паисий Хилендарски"</option>
        <option value="ВТУ">Варненски технически университет</option>
        <option value="НБУ">Нов български университет</option>
        <option value="АУЕР">Американски университет в България</option>

    </select>
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
<label for="">Умения:</label><br>
<select name="skills" id="skillsSelect" required>
    <option value="" select hidden>Изберете или добавете</option>
    <option value="Python">Python</option>
    <option value="C++">C++</option>
    <option value="Python">Python</option>
    <option value="C++">C++</option>
    <option value="JavaScript">JavaScript</option>
    <option value="Java">Java</option>
    <option value="Ruby">Ruby</option>
    <option value="PHP">PHP</option>
    <option value="HTML/CSS">HTML/CSS</option>
    <option value="SQL">SQL</option>
    <option value="Swift">Swift</option>
    <option value="C#">C#</option>
    <option value="R">R</option>
    <option value="Shell scripting">Shell scripting</option>
    <option value="Machine Learning">Machine Learning</option>
    <option value="Data Analysis">Data Analysis</option>
    <option value="DevOps">DevOps</option>
    <option value="Mobile App Development">Mobile App Development</option>
    <option value="Web Development">Web Development</option>
</select>

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
        const option = document.createElement("option");
        option.text = newSkillName;
        option.value = newSkillName;
        skillsSelect.appendChild(option);
        skillsPopup.style.display = "none";
    });
</script><br>


    <button type="submit" name="submit">Запас на CV</button>

</form>
</body>
</html>