
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz with Add Question Feature</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .quiz-container, .add-question-container {
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
        .result {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div id="quiz-container" class="quiz-container">
        <h1>Loading Quiz...</h1>
    </div>

    <div class="add-question-container">
        <h2>Add a New Question</h2>
        <form id="add-question-form">
            <label for="category">Category:</label>
            <select id="category" required>
                <option value="html">HTML</option>
                <option value="css">CSS</option>
                <option value="javascript">JavaScript</option>
                <option value="Python">Python</option>
                <option value="C">C</option>
                <option value="C++">C++</option>
                <option value="Artificial intelligence">Artificial Intelligence </option>
                <option value="Mobile Computing">Mobile Computing </option>
                <option value="Cloud Computing">Cloud Computing </option>
                <option value="Computer Network">Computer Network</option>
                <option value="MySQL">MySQL</option>
                <option value="Flask">Flask</option>
                <option value="Django">Django</option>
                <option value="vb.net">vb.net</option>
            </select>
            <br><br>
            <label for="question">Question:</label>
            <input type="text" id="question" required><br><br>

            <label for="option1">Option 1:</label>
            <input type="text" id="option1" required><br><br>

            <label for="option2">Option 2:</label>
            <input type="text" id="option2" required><br><br>

            <label for="option3">Option 3:</label>
            <input type="text" id="option3" required><br><br>

            <label for="option4">Option 4:</label>
            <input type="text" id="option4" required><br><br>

            <label for="correct">Correct Option (1-4):</label>
            <input type="number" id="correct" min="1" max="4" required><br><br>

            <button type="button" onclick="addQuestion()">Add Question</button>
        </form>
    </div>

    <script>
        const quizzes = {
             html: [
                { question: "What does HTML stand for?", options: ["Hyper Text Markup Language", "High Text Machine Language", "Hyper Tool Markup Language"], correct: 0 },
                { question: "Which tag is used to define a hyperlink?", options: ["link", "a", "href"], correct: 1 },
                {question: "css language which tag to connect a html?", options: ["a","link","h1","br"], correct: 2 },
                {question: "which of the Following is used to define a navigation block in HTML5?", options:["header","nav","section","footer"],correct:2},
                {question: "which HTML element is used to Display image on a web page?",options:["img","picture","image","media"],correct:1},
                {question: "what is the correct HTML tag for inserting a line break?",options:["break","br","newline","lb"],correct:2},
            ],
            css: [
                { question: "What does CSS stand for?", options: ["Cascading Style Sheets", "Computer Style Sheets", "Creative Style Sheets"], correct: 0 },
            ],
            javascript: [
               
    {
      question: "Which of the following is used to declare a variable in JavaScript?",
      options: ["var", "let", "const", "All of the above"],
      correct: 3
    },
    {
      question: "Which is javsript framewok?",
      options: ["js", "jsx", "script", "react"],
      correct: 3
    },
    {
      question: "What will be the output of console.log(typeof null);?",
      options: ["null", "undefined", "object", "string"],
      correct: 2
    },
    {
      question: "Which function is used to convert a string to an integer in JavaScript?",
      options: ["parseInt()", "parseFloat()", "Number()", "Math.round()"],
      correct: 0
    },
    
  ],

  c: [
        {
            question: "Which keyword is used to declare a constant variable in C?",
            options: ["constant", "final", "const", "var"],
            correct: 2
        },
        {
            question: "Which operator is used to access the address of a variable in C?",
            options: ["*", "&", "@", "#"],
            correct: 1
        },
        {
            question: "Which data type is used to store a single character in C?",
            options: ["char", "string", "int", "double"],
            correct: 0
        },

        {
            question: "Which function is used to read input from the user in C?",
            options: ["input()", "cin>>", "get()", "scanf()"],
            correct: 3
        },

    ],

    cpp: [
        {
            question: "Which of the following is used to define a class in C++?",
            options: ["class", "struct", "object", "define"],
            correct: 0
        },
        {
            question: "Which concept allows multiple functions with the same name but different parameters in C++?",
            options: ["Encapsulation", "Abstraction", "Polymorphism", "Inheritance"],
            correct: 2
        },
        {
            question: "Which operator is used for dynamic memory allocation in C++?",
            options: ["malloc", "calloc", "new", "allocate"],
            correct: 2
        },
        {
            question: "Which of the following is the correct way to define a constructor in C++?",
            options: [
                "void Constructor(){}",
                "class_name(){}",
                "constructor(){}",
                "int Constructor(){}"
            ],
            correct: 1
        }
    ],

    artificial_intelligent: [
        {
            question: "Which of the following is a type of Artificial Intelligence?",
            options: ["Narrow AI", "General AI", "Super AI", "All of the above"],
            correct: 3
        },
        {
            question: "Which algorithm is commonly used in AI for decision making?",
            options: ["Dijkstra’s Algorithm", "A* Algorithm", "Prim’s Algorithm", "Kruskal’s Algorithm"],
            correct: 1
        },
        {
            question: "Which branch of AI deals with enabling machines to understand human language?",
            options: ["Neural Networks", "Natural Language Processing", "Robotics", "Expert Systems"],
            correct: 1
        },
        {
            question: "Which of the following is an AI search algorithm?",
            options: ["Breadth-First Search", "Depth-First Search", "A* Algorithm", "All of the above"],
            correct: 3
        }
    ], 

    mobile_computing: [
        {
            question: "Which of the following is a characteristic of mobile computing?",
            options: ["Portability", "Wired Connection", "Static Network", "Limited Power"],
            correct: 0
        },
        {
            question: "Which wireless technology is commonly used in mobile devices?",
            options: ["Ethernet", "Wi-Fi", "Fiber Optics", "DSL"],
            correct: 1
        },
        {
            question: "What does GPS stand for in mobile computing?",
            options: ["Global Positioning System", "General Processing Software", "Geo Processing System", "Global Programming Software"],
            correct: 0
        }
    ],

    computer_network: [
        {
            question: "What is the full form of IP in networking?",
            options: ["Internet Protocol", "Internal Process", "Integrated Programming", "Information Protocol"],
            correct: 0
        },
        {
            question: "Which device is used to connect multiple networks?",
            options: ["Switch", "Router", "Hub", "Modem"],
            correct: 1
        },
        {
            question: "Which layer of the OSI model is responsible for data encryption?",
            options: ["Physical", "Network", "Transport", "Presentation"],
            correct: 3
        }
    ],

    Computer_Network: [
        {
            question: "What is the full form of IP in networking?",
            options: ["Internet Protocol", "Internal Process", "Integrated Programming", "Information Protocol"],
            correct: 0
        },
        {
            question: "Which device is used to connect multiple networks?",
            options: ["Switch", "Router", "Hub", "Modem"],
            correct: 1
        },
        {
            question: "Which layer of the OSI model is responsible for data encryption?",
            options: ["Physical", "Network", "Transport", "Presentation"],
            correct: 3
        }
    ],

    Django: [
        {
            question: "Which language is used to develop Django?",
            options: ["Java", "C++", "Python", "PHP"],
            correct: 2
        },
        {
            question: "Which command is used to start a new Django project?",
            options: ["django new project", "django-admin startproject", "django runserver", "django createapp"],
            correct: 1
        },
        {
            question: "Which of the following is the default database used in Django?",
            options: ["MySQL", "PostgreSQL", "SQLite", "Oracle"],
            correct: 2
        }
    ],
    Flask: [
        {
            question: "Flask is based on which programming language?",
            options: ["Python", "Java", "C#", "Ruby"],
            correct: 0
        },
        {
            question: "Which function is used to start a Flask application?",
            options: ["flask.start()", "app.run()", "flask.execute()", "start_flask()"],
            correct: 1
        },
        {
            question: "Flask is a _ web framework.",
            options: ["Full-stack", "Micro", "Monolithic", "Serverless"],
            correct: 1
        }
    ],
    Mysql: [
        {
            question: "Which command is used to retrieve data from a MySQL database?",
            options: ["SELECT", "FETCH", "GET", "RETRIEVE"],
            correct: 0
        },
        {
            question: "Which data type is used to store large text in MySQL?",
            options: ["VARCHAR", "TEXT", "STRING", "LONGTEXT"],
            correct: 3
        },
        {
            question: "Which clause is used to filter results in MySQL?",
            options: ["WHERE", "HAVING", "FILTER", "SORT"],
            correct: 0
        }
    ],
    Vb_net: [
        {
            question: "Which keyword is used to declare a variable in VB.NET?",
            options: ["let", "var", "dim", "const"],
            correct: 2
        },
        {
            question: "Which function is used to display a message box in VB.NET?",
            options: ["Message.Show()", "MsgBox()", "Alert()", "Console.Write()"],
            correct: 1
        },
        {
            question: "Which operator is used for string concatenation in VB.NET?",
            options: ["+", "&", ".", "*"],
            correct: 1
        }
    ],
  

python: [
              { question:"who introduced python?", options:["marking jackson","guido van rossum","Bjarne stroustrup","brendan Eich"],correct:0},
              {question: "What is the difference between static and dynamic typing in Python?",
options: ["Static typing is used for variables, dynamic typing is used for functions", "Static typing is used for functions, dynamic typing is used for variables", "Python uses static typing", "Python uses dynamic typing"],
correct: 3
},
{
question: "How do you handle errors in Python?",
options: ["Using try-except blocks", "Using if-else statements", "Using for loops", "Using while loops"],
correct: 0
},
{
question: "What is the purpose of the 'self' parameter in Python classes?",
options: ["To refer to the instance of the class", "To refer to the class itself", "To refer to the parent class", "To refer to the child class"],
correct: 0
},
            ]

        };
            
           

        const urlParams = new URLSearchParams(window.location.search);
        const category = urlParams.get("category");

        function renderQuiz(category) {
            if (category && quizzes[category]) {
                const quiz = quizzes[category];
                let html = `<h2>${category.toUpperCase()} Quiz</h2>`;
                quiz.forEach((q, i) => {
                    html += `<div>
                        <h3>${i + 1}. ${q.question}</h3>
                        ${q.options
                            .map((opt, index) => `<label><input type="radio" name="q${i}" value="${index}"> ${opt}</label><br>`)
                            .join("")}
                    </div>`;
                });
                html += `<button onclick="submitQuiz('${category}')">Submit Quiz</button>`;
                document.getElementById("quiz-container").innerHTML = html;
            } else {
                document.getElementById("quiz-container").innerHTML = `<h2>Invalid Category</h2>`;
            }
        }

        function submitQuiz(category) {
            const quiz = quizzes[category];
            let score = 0;
            quiz.forEach((q, i) => {
                const selected = document.querySelector(`input[name="q${i}"]:checked`);
                if (selected && parseInt(selected.value) === q.correct) {
                    score++;
                }
            });
            const result = `You scored ${score} out of ${quiz.length}!`;
            document.getElementById("quiz-container").innerHTML += `<div class="result">${result}</div>`;
        }

        function addQuestion() {
            const category = document.getElementById("category").value;
            const question = document.getElementById("question").value;
            const options = [
                document.getElementById("option1").value,
                document.getElementById("option2").value,
                document.getElementById("option3").value,
                document.getElementById("option4").value,
            ];
            const correct = parseInt(document.getElementById("correct").value) - 1;

            if (category && question && options.length === 4 && !isNaN(correct)) {
                quizzes[category].push({ question, options, correct });
                alert("Question added successfully!");
                document.getElementById("add-question-form").reset();
                renderQuiz(category);
            } else {
                alert("Please fill out all fields correctly.");
            }
        }

        if (category) renderQuiz(category);
    </script>
</body>
</html>
