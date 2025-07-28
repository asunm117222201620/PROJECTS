<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital Study Materials</title>
  <link rel="stylesheet" href="work.css">
</head>
<body>
  <header>
    <div class="logo">Digital Study Materials</div>
    <nav>
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#materials">Materials</a></li>
        <li><a href="#quiz">Quiz</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="index.php">Login</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="home" class="hero-section">
      <h1>Welcome to Digital Study Materials</h1>
      <p>Explore a world of knowledge at your fingertips. Access study materials and test your skills with interactive quizzes!</p>
      <button id="get-started">Get Started</button>
    </section>

    <section id="about">
      <h2>About This Project</h2>
      <p>This platform provides digital study materials specifically designed for Computer Science students. Enhance your learning experience with curated PDFs and engaging quizzes.</p>
    </section>

    <section id="materials">
      <h2>Study Materials</h2>
      <p>Access high-quality, topic-specific PDFs to master key concepts. From programming languages to algorithms, we’ve got you covered!</p>
      <a href="material.php"><button>View Materials</button></a>
    </section>

    <section id="quiz">
      <h2>Take a Quiz</h2>
      <p>Challenge yourself with quizzes based on the study materials. Test your understanding and track your progress!</p>
      <a href="quizes.php"><button>Start Quiz</button></a>
    </section>

    <section id="contact">
      <h2>Contact Us</h2>
      <p>Have questions or feedback? Reach out to us!</p>
      <form>
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Your Email" required>
        <textarea placeholder="Your Message" required></textarea>
        <button type="submit">Submit</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Digital Study Materials. All rights reserved.</p>
  </footer>

<style>
/* Reset and global styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
  color: #333;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  background-color: #4caf50;
  color: #fff;
}

header .logo {
  font-size: 24px;
  font-weight: bold;
}

.nav-links {
  list-style: none;
  display: flex;
  gap: 15px;
}

.nav-links a {
  color: #fff;
  text-decoration: none;
}

.hero-section {
  text-align: center;
  padding: 50px 20px;
  background: linear-gradient(to right, #4facfe, #00f2fe);
  color: #fff;
}

.hero-section h1 {
  font-size: 2.5rem;
  margin-bottom: 15px;
}

.hero-section p {
  font-size: 1.2rem;
  margin-bottom: 20px;
}

button {
  padding: 10px 20px;
  background-color: #fff;
  border: none;
  cursor: pointer;
  font-size: 1rem;
  color: #333;
}

button:hover {
  background-color: #ddd;
}

section {
  padding: 20px;
  text-align: center;
}

footer {
  text-align: center;
  padding: 10px;
  background-color: #4caf50;
  color: #fff;
}
</style>
<script>
    function toggleSubModules(id) {
  const element = document.getElementById(id);
  const button = element.previousElementSibling.querySelector('.toggle-btn');
  
  if (element.classList.contains('hidden')) {
    element.classList.remove('hidden');
    button.textContent = '-';
  } else {
    element.classList.add('hidden');
    button.textContent = '+';
  }
}
</script>
</body>
</html>