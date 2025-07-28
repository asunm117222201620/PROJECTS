<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital Study Material</title>
</head>
<body>
  <header>
    <h1>Digital Study Material</h1>
  </header>

  <!-- Main Modules -->
  <section class="main-modules">
    <h2>Course Files</h2>

    <!-- Program Module -->
    <div class="module">
      <div class="module-header" onclick="toggleModule('programSubModules')">
        <span>Program</span>
        <button class="toggle-btn" id="programBtn">+</button>
      </div>
      <ul id="programSubModules" class="hidden">
        <li onclick="toggleModule('htmlSubTopics')">
        <a href="pdf/html_tutorial.pdf">HTML</a></li>
      <li><a href="pdf/css_tutorial.pdf">CSS</a></li>
      <li><a href="pdf/script.pdf">Javascript</a> </li>
      <li><a href="pdf/python_tutorial (1).pdf">Python</a></li>
      <li><a href="pdf/java_tutorial.pdf">JAVA</a></li>
      <li><a href="pdf/c_quick_guide.pdf">C Language</a></li>
      <li><a href="pdf/cpp_tutorial.pdf">C++</a></li>
       
        </li>
      </ul>
    </div>
    <!-- Syllabus Module -->
    <div class="module">
      <div class="module-header" onclick="toggleModule('syllabusSubModules')">
        <span>Advance Topic</span>
        <button class="toggle-btn" id="syllabusBtn">+</button>
      </div>
      <ul id="syllabusSubModules" class="hidden">
      <li><a href="PDF/artificial_intelligence_tutorial.pdf">Artifical Intelligence</a></li>
      <li><a href="PDF/Data science.pdf">Data Science</a></li>
      <li><a href="PDF/software_engineering_tutorial (1).pdf">software Engineering</a></li>
      <li><a href="PDF/cloud_computing_tutorial.pdf">Cloud Computing</a></li>
      <li><a href="PDF/mobile computing.pdf">Mobile Computing</a></li>
      <li><a href="PDF/Computer Network.pdf">computer Network</a></li>
      </ul>
    </div>


  <div class="module">
    <div class="module-header" onclick="toggleModule('frameworkSubModules')">
      <span>FRAMEWORK</span>
      <button class="toggle-btn" id="frameworkBtn">+</button>
    </div>
    <ul id="frameworkSubModules" class="hidden">
    <li><a href="PDF/Django.pdf">Django</a></li>
    <li><a href="PDF/flask_tutorial.pdf">Flask </a></li>
    </ul>
  </div>



<div class="module">
  <div class="module-header" onclick="toggleModule('databaseSubModules')">
    <span>DATABASE</span>
    <button class="toggle-btn" id="databaseBtn">+</button>
  </div>
  <ul id="databaseSubModules" class="hidden">
  <li><a href="pdf/mysql_tutorial.pdf">MySQL</a></li>
  <li><a href="PDF/vb.pdf">Visual basics lab</a></li>
  </ul>
</div>

<div class="module">
      <div class="module-header" onclick="toggleModule('interviewquizSubModules')">
        <span>Interview Questions</span>
        <button class="toggle-btn" id="interviewquizBtn">+</button>
      </div>                                                                   
      <ul id="interviewquizSubModules" class="hidden">
      <li><a href="PDF/Artificial-Intelligence-IQ.pdf">Artificial Intelligence</a></li>
      <li><a href="PDF/data_science_interview_questions.pdf">Data Science</a></li>
      <li><a href="pdf/software_engineering_interview_questions (1).pdf">software Engineering</a></li>
      <li><a href="pdf/VI_Sem_IT6601_TM.pdf">Mobile Computing</a></li>
      <li><a href="pdf/Computer Networking viva IT-3.pdf">computer Network</a></li>
      </ul>
    </div>
</section>
 </body>
 <style>
  /* General Reset */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f5f5f5;
}

header {
  background-color: #4CAF50;
  color: white;
  text-align: center;
  padding: 20px 0;
}

h1, h2 {
  margin: 0;
}

h2 {
  padding: 20px 0;
  text-align: center;
}

/* Modules */
.main-modules {
  width: 90%;
  max-width: 800px;
  margin: 0 auto;
}

.module {
  margin-bottom: 20px;
  background-color: white;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.module-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px;
  background-color: #f0f0f0;
  cursor: pointer;
}

.module-header:hover {
  background-color: #e0e0e0;
}

.hidden {
  display: none;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

ul li {
  padding: 10px 15px;
  border-top: 1px solid #ddd;
  cursor: pointer;
}

ul li:hover {
  background-color: #f9f9f9;
}

.toggle-btn {
  background: none;
  border: none;
  font-size: 16px;
  cursor: pointer;
  outline: none;
  color: #333;
}
</style>
<script>
  // Function to toggle visibility of modules or subtopics
function toggleModule(id) {
  const element = document.getElementById(id);
  const button = document.querySelector(`#${id}Btn`) || element.previousElementSibling.querySelector('.toggle-btn');

  if (element.classList.contains('hidden')) {
    element.classList.remove('hidden');
    if (button) button.textContent = '-';
  } else {
    element.classList.add('hidden');
    if (button) button.textContent = '+';
  }
}
 </script>
</body>
</html>
