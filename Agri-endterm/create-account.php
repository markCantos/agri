<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGRIbongs</title>
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
        </nav>
    </header>


    <main>
        <div class="login-container">
            <h1>Welcome!</h1>
         
            <form id="loginForm" action="create-account-process.php" method="post">
                <input type="email" id="email" name="email" placeholder="Your Email" required>
                <input type="text" id="username" name="username" placeholder="Choose a Username" required>
                <input type="password" id="password" name="password" placeholder="Choose a Password" required>

                <button type="submit" name="submit">CREATE AN ACCOUNT</button>
            </form>

            <div class="login-link">
                <a href="logIn.html">Already Have an Account</a>
            </div>
        </div>
        <img src="DeWatermark.ai_1730980802331.png" alt="">
    </main>


    <footer>
        <p>&copy; 2024 agri. All Rights Reserved.</p>
    </footer>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('loginForm');
            const inputs = form.querySelectorAll('input');
            const hamburger = document.querySelector('.hamburger');
            const navLinks = document.querySelector('.nav-links');
            const navLinksItems = document.querySelectorAll('.nav-links a');


            function toggleMenu() {
                hamburger.classList.toggle('active');
                navLinks.classList.toggle('active');
            }


            hamburger.addEventListener('click', toggleMenu);


            navLinksItems.forEach(item => {
                item.addEventListener('click', (e) => {
                    e.preventDefault();
                    const targetId = item.getAttribute('href').slice(1);
                    console.log(`Navigating to: ${targetId}`);
               
                    if (window.innerWidth < 850) {
                        toggleMenu();
                    }
                });
            });


            inputs.forEach((input, index) => {
                input.style.opacity = '0';
                input.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    input.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    input.style.opacity = '1';
                    input.style.transform = 'translateY(0)';
                }, 100 * (index + 1));
            });


        });
    </script>
</body>
</html>
