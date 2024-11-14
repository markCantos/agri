



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGRIbongs - Login</title>
    <link rel="stylesheet" href="user-login.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="agriLogo.png" alt="AGRI Logo">
            </div>
           
            <div class="nav-links">
                <a href="#home">HOME</a>
                <a href="#contact">CONTACT US</a>
                <a href="#privacy">PRIVACY AND POLICY</a>
            </div>
            <div class="menu-icon" aria-label="Toggle menu">☰</div>
        </nav>
    </header>


    <main>
        <div class="login-container">
            <h1>Welcome!</h1>
            <form id="loginForm" action="login-process.php" method="post" >
                <input type="email" id="email" name="email" placeholder="Your Email" required>
                <input type="password" id="password" name="password" placeholder="Your Password" required>
                <button type="submit" name="login">LOGIN</button>
            </form>
           
    <footer>
        <p>&copy; 2024 agri. All Rights Reserved.</p>
    </footer>
        </div>
        <img src="DeWatermark.ai_1730980802331.png" class="right" alt="">
    </main>




   
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const menuIcon = document.querySelector('.menu-icon');
    const navLinks = document.querySelector('.nav-links');


    menuIcon.addEventListener('click', function() {
        navLinks.classList.toggle('active');
       
        // Toggle aria-expanded attribute
        const isExpanded = navLinks.classList.contains('active');
        menuIcon.setAttribute('aria-expanded', isExpanded);
    });


    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!navLinks.contains(event.target) && !menuIcon.contains(event.target)) {
            navLinks.classList.remove('active');
            menuIcon.setAttribute('aria-expanded', 'false');
        }
    });


    // Handle form submission (prevent default for this example)
    const loginForm = document.getElementById('loginForm');
    loginForm.addEventListener('submit', function(event) {
        // Add your login logic here
    });
});
    </script>
</body>
</html>

