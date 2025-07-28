<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1: Programming</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1, h2 {
            text-align: center;
        }
        .category-container {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1> Technical Quiz </h1>
    <h1>Programming Language</h1>
    <div class="category-container">
        <h2>Select a Category</h2>
        <button onclick="redirectToQuiz('html')">HTML</button>
        <button onclick="redirectToQuiz('css')">CSS</button>
        <button onclick="redirectToQuiz('javascript')">JavaScript</button>
        <button onclick="redirectToQuiz('python')">Python</button>
        <button onclick="redirectToQuiz('c')">C</button>
        <button onclick="redirectToQuiz('cpp')">C++</button>
    </div>

      <h1>Advanced Technology </h1>
    <div class="category-container">
        <h2>Select a Category</h2>
        <button onclick="redirectToQuiz('Artificial Intelligent')">Artificial Intelligence</button>
        <button onclick="redirectToQuiz('Data Science')">Data Science</button>
        <button onclick="redirectToQuiz('Mobile Computing')">Mobile Computing</button>
        <button onclick="redirectToQuiz('Computer Network')">Computer network</button>
        <button onclick="redirectToQuiz('Cloud Computing')">Cloud Computing</button>
        <button onclick="redirectToQuiz('Software Engineering')">Software Engineering</button>
    </div>
    <h1>Framework</h1>
    <div class="category-container">
        <h2>Select a Category</h2>
        <button onclick="redirectToQuiz('Django')">Django</button>
        <button onclick="redirectToQuiz('Flask')">Flask</button>
    </div>
    <h1>Database</h1>
    <div class="category-container">
        <h2>Select a Category</h2>
        <button onclick="redirectToQuiz('Mysql')">Mysql</button>
        <button onclick="redirectToQuiz('vb.net')">vb.net</button>
    </div>
    <h1>interview question </h1>
    <div class="category-container">
        <h2>Select a Category</h2>
        <button onclick="redirectToQuiz('artificial_intelligent')">Artificial Intelligence</button>
        <button onclick="redirectToQuiz('Data Science')">Data Science</button>
        <button onclick="redirectToQuiz('Mobile Computing')">Mobile Computing</button>
        <button onclick="redirectToQuiz('computer_network')">Computer network</button>
        <button onclick="redirectToQuiz('Cloud_Computing')">Cloud Computing</button>
        <button onclick="redirectToQuiz('Software Engineering')">Software Engineering</button>
    </div>
    <script>
        function redirectToQuiz(category) {
            window.location.href = `quiz.php?category=${category}`;
        }
    </script>
</body>
</html>