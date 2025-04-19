<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <title>My Resume - [Your Name]</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body>
  <nav class="navbar">
    <div class="nav-container">
      <div class="brand">Mayank Tiwari</div>
      <div class="menu-toggle" id="mobile-menu">&#9776;</div>
      <ul class="nav-links" id="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>

  <section class="hero" id="home">
    <a class="login-link" href="#">Download CV</a>
    <h1>Hello, I'm Mayank</h1>
    <p>Aspiring Web Developer | Passionate Coder | Tech Enthusiast</p>
  </section>

  <section class="features-section" id="about">
    <h2>About Me</h2>
    <div class="features-grid">
      <div class="feature">
        <h3>Who I Am</h3>
        <p>I am a web development enthusiast currently learning PHP, frontend frameworks, and responsive design. My goal is to build clean and functional websites.</p>
      </div>
    </div>
  </section>

  <section class="features-section" id="skills">
    <h2>Skills</h2>
    <div class="features-grid">
      <div class="feature"><h3>HTML/CSS/JavaScript</h3></div>
      <div class="feature"><h3>PHP & MySQL</h3></div>
      <div class="feature"><h3>Responsive Design</h3></div>
      <div class="feature"><h3>Git & GitHub</h3></div>
    </div>
  </section>

  <section class="features-section" id="projects">
    <h2>Projects</h2>
    <div class="features-grid">
      <div class="feature">
        <h3>Project 1</h3>
        <p>Developed a hotel booking website using HTML, CSS, and JavaScript.</p>
      </div>
      <div class="feature">
        <h3>Project 2</h3>
        <p>Created a CRUD application with PHP and MySQL for student data.</p>
      </div>
    </div>
  </section>

  <section class="features-section" id="contact">
    <h2>Contact Me</h2>
    <div class="form-box">
      <form action="#" method="POST">
        <input class="location-input" type="text" placeholder="Your Email" required />
        <button class="get-started" type="submit">Send</button>
      </form>
    </div>
  </section>

  <script>
    // Toggle for mobile menu
    document.getElementById('mobile-menu').onclick = function () {
      document.getElementById('nav-links').classList.toggle('show');
    };
  </script>
<footer class="footer">
    <div class="footer-container">
        <div class="footer-left">
            <h4>CONTACTS</h4>
            <p class="phone">+91 9650287298</p>
            <p>IP Levin Alexey Alexandrovich</p>
          
            <p>Itsmayank743@icloud.com</p>
            <p>Contact us at: Itsmayank743@gmail.com</p>
            <p>All rights reserved, 2020</p>
            <div class="footer-links">
                <a href="#">Offer Agreement</a>
                <a href="#">User Agreement</a>
                <a href="#">Privacy Policy</a>
            </div>
            <div class="social-icons">
        <a href="#"><img src="images/vk.svg" alt="VK" /></a>
        <a href="#"><img src="images/wa.svg" alt="WhatsApp" /></a>
        <a href="#"><img src="images/tg.svg" alt="Telegram" /></a>
      </div>
    </div>

    <div class="footer-right">
      <h3>Let's build your dream<br>Born With Progessiveness</h3>
      <p>We will select a course or program based on your knowledge and goals</p>
      <form>
        <input type="text" placeholder="Enter your name" required />
        <input type="tel" placeholder="+1 123 456 7890" required />
        <label>
          <input type="checkbox" required />
          I have read the privacy policy
        </label>
        <button type="submit">Get Connect</button>
      </form>
    </div>
  </div>
  <div class="footer-bottom">
    <p>All Rights Reserved, 2025</p>
  </div>
</footer>

</body>
</html>