<!DOCTYPE html>
<html lang="en">
<head>
    <title>Saypan Website</title>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- SIDEBAR -->
<?php include ("includes/nav.php"); ?>

<!-- MAIN CONTENT -->
<div class="main">

<header>
    <img src="images/saypan.jpg" alt="Reyven Saypan" class="profile-pic">
    <h1>REYVEN M. SAYPAN</h1>
    <h3>Bachelor of Industrial Technology<br>
    Major in Computer and Information Technology</h3>
</header>

<!-- ABOUT -->
<section id="about">
    <h2>About Me</h2>
    <p><strong>Name:</strong> Reyven M. Saypan</p>
    <p><strong>Birth Date:</strong> November 9, 2005</p>
    <p><strong>Age:</strong> 20 years old</p>
    <p><strong>Address:</strong> Phase 6, Martinez Subdivision, Block 5, Dahican, City of Mati, Davao Oriental</p>
    <p><strong>Course:</strong> Bachelor of Industrial Technology – Major in Computer and Information Technology</p>
</section>

<!-- HOBBIES -->
<section id="hobbies">
    <h2>Hobbies</h2>
    <ul>
        <li>Online Games</li>
        <li>Badminton</li>
        <li>Driving Motorcycle</li>
        <li>Volleyball</li>
        <li>Swimming</li>
        <li>Hiking</li>
    </ul>
</section>

<!-- SKILLS -->
<section id="skills">
    <h2>Skills</h2>
    <ul>
        <li>Teamwork</li>
        <li>Time Management</li>
        <li>Problem Solving</li>
    </ul>
</section>

<!-- CONTACT -->
<section id="contact">
    <h2>Contact</h2>
    <p>
        Email: saypanreyven2@gmail.com <br>
        Facebook: 
        <a href="https://www.facebook.com/reyven.m.saypan" target="_blank">
        Reyven M. Saypan</a><br>
        Phone: 0953-841-2673
    </p>
</section>

<!-- My portfolio -->
<?php include ("includes/activities.php"); ?>

<?php include ("includes/footer.php"); ?>

<!-- JAVASCRIPT -->
<script>
// Show About section by default when page loads
document.addEventListener("DOMContentLoaded", function() {
    showSection('about');
});

function showSection(sectionId) {
    var sections = document.querySelectorAll("section");
    
    sections.forEach(function(section) {
        section.style.display = "none";
    });
    
    document.getElementById(sectionId).style.display = "block";
}
</script>

</body>
</html>