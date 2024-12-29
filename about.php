<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Cause</title>
    <style>
        /* Global Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            transition: background-color 0.3s ease;
        }

        /* Header Styling */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #fff;
            z-index: 10;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: top 0.3s ease;
        }

        .home-button {
            font-size: 18px;
            font-weight: bold;
            color: #e94e77;
            text-decoration: none;
            padding: 8px 20px;
            border-radius: 5px;
            background-color: #fef2f2;
            transition: background-color 0.3s ease;
        }

        .home-button:hover {
            background-color: #e94e77;
            color: white;
        }

        nav {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        nav a {
            font-size: 18px;
            color: #777;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 16px;
            position: relative;
            transition: color 0.3s, transform 0.3s;
        }

        nav a:hover {
            color: #e94e77;
            transform: translateY(-4px);
        }

        nav a.active {
            color: #e94e77;
            font-weight: bold;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #e94e77;
            visibility: hidden;
            transition: visibility 0s 0.3s, opacity 0.3s ease;
        }

        nav a.active::after {
            visibility: visible;
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        /* Section Styling */
        section {
            padding: 60px 20px; 
            min-height: 100vh;
            transition: background-color 0.3s ease;
        }

        section h2 {
            font-size: 32px; 
            margin-bottom: 12px;
            color: #333;
        }

        section p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
            max-width: 900px;
            margin: 0 auto;
        }

        #cause {
            background-color: #fef2f2;
        }

        #who-we-are {
            background-color: #e0f7fa;
        }

        #location {
            background-color: #d9fbe7;
        }

        #contact {
            background-color: #fff9c4;
        }

        /* WhatsApp Icon */
        #whatsapp-button {
            display: none;
            position: fixed;
            right: 16px;
            bottom: 16px;
            background-color: #25D366;
            color: #fff;
            font-size: 24px;
            border-radius: 50%;
            padding: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 20;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #whatsapp-button:hover {
            background-color: #128C7E;
        }

        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-color: #888;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #555;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            header {
                flex-direction: row;
                align-items: center;
                position: fixed;
                width: 100%;
                top: 0;
            }

            .home-button {
                margin-right: 20px;
            }

            /* Hamburger menu style */
            .hamburger-menu {
                display: block;
                font-size: 30px;
                color: #e94e77;
                background: none;
                border: none;
                cursor: pointer;
                padding: 8px;
            }

            nav {
                display: none; /* Initially hide the menu on mobile */
                flex-direction: column;
                position: absolute;
                left: 0;
                top: 60px;
                background-color: #fff;
                width: 100%;
                padding: 10px 0;
                align-items: center;
            }

            nav a {
                font-size: 16px;
                padding: 12px;
                width: 100%;
                text-align: center;
                border-top: 1px solid #ddd;
            }

            nav.show {
                display: flex; /* Show the menu when active */
            }

            /* Section padding for mobile */
            section {
                padding: 40px 20px;
            }

            #whatsapp-button {
                display: block; /* Show WhatsApp button on mobile */
                bottom: 16px;
                right: 16px;
            }
        }
    </style>
</head>
<body>

    <header id="header">
        <a href="index.php" class="home-button">Home</a>
        <!-- Hamburger Menu Icon -->
        <button class="hamburger-menu" onclick="toggleNav()">&#9776;</button>
        <nav id="nav-menu">
            <a href="#cause" id="menu-cause" onclick="closeMenu()">Cause</a>
            <a href="#who-we-are" id="menu-who-we-are" onclick="closeMenu()">Who We Are</a>
            <a href="#location" id="menu-location" onclick="closeMenu()">Location We Serve</a>
            <a href="#contact" id="menu-contact" onclick="closeMenu()">Contact Us</a>
        </nav>
    </header>

    <section id="cause">
        <h2>Our Cause</h2>
        <p>We are dedicated to making the world a better place by [briefly describe your mission or cause]. Every contribution matters in helping us fulfill our goals and create a positive impact.</p>
    </section>

    <section id="who-we-are">
        <h2>Who We Are</h2>
        <p>We are a team of passionate individuals committed to [describe your team's purpose, values, and mission]. Our team believes in working together to achieve real change in the world.</p>
    </section>

    <section id="location">
        <h2>Location We Serve</h2>
        <p>We serve communities in [list the geographic regions or cities where you operate]. Our outreach programs are designed to bring support where it's needed most.</p>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>If you have any questions or want to get involved, please reach out to us. You can email us at <strong>info@yourorganization.com</strong> or call us at <strong>(123) 456-7890</strong>.</p>
    </section>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/9133235454" target="_blank" id="whatsapp-button" title="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script>
        // Toggle Navigation Menu on Mobile
        function toggleNav() {
            document.getElementById('nav-menu').classList.toggle('show');
        }

        // Close Menu when an item is clicked
        function closeMenu() {
            document.getElementById('nav-menu').classList.remove('show');
        }

        // Menu hide on scroll up and show on scroll down
        let lastScrollTop = 0;
        const header = document.getElementById('header');

        window.addEventListener('scroll', () => {
            let scrollPosition = window.scrollY;

            if (scrollPosition > lastScrollTop) {
                header.style.top = "-80px"; // Hide header when scrolling down
            } else {
                header.style.top = "0"; // Show header when scrolling up
            }

            lastScrollTop = scrollPosition <= 0 ? 0 : scrollPosition;

            // Show the WhatsApp button after scrolling down
            if (scrollPosition > 300) {
                document.getElementById('whatsapp-button').style.display = 'block';
            } else {
                document.getElementById('whatsapp-button').style.display = 'none';
            }
        });
    </script>

    <!-- Add FontAwesome for WhatsApp icon -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>
</html>
