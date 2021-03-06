<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=, initial-scale=1.0" />

    <!--Title-->
    <title>Student Details</title>

    <!--Stylesheet-->
    <link href="form.css" rel="stylesheet" />

    <!--Script file-->
    <script src="form.js"></script>
  </head>

  <body>
    <header>
      <h1>Student Details</h1>
    </header>

    <div class="student-form">
      <form name="form" method="post" action="form.php" id="form" onsubmit="submitForm()">
        
        <label>First Name: </label>
        <input type="text" name="firstName" id="firstName" />

        <br />
        <br />

        <label>Last Name: </label>
        <input type="text" name="lastName" id="lastName" />

        <br />
        <br />

        <label>E-mail: </label>
        <input type="email" name="email" id="email" />

        <br />
        <br />

        <label>Password: </label>
        <input type="password" name="password" id="password" />

        <br />
        <br />

        <label>Semester: </label>
        <input type="number" name="semester" id="semester" />

        <br />
        <br />

        <label for="dept">Department: </label>
        <input list="depts" name="dept" id="dept" />
        <datalist id="depts">
          <option value="Aerospace Engineering" />
          <option value="Civil Engineering" />
          <option value="Mechanical Engineering" />
          <option value="Electrical and Electronics Engineering" />
          <option value="Electronics and Communication Engineering" />
          <option value="Industrial Engineering and Management" />
          <option value="Computer Science and Engineering" />
          <option value="Electronics and Telecommunication Engineering" />
          <option value="Information Science and Engineering" />
          <option value="Electronics and Instrumentation Engineering" />
          <option value="Medical Electronics Engineering" />
          <option value="Chemical Engineering" />
          <option value="Bio Technology" />
          <option value="Machine Learning" />
          <option value="AI and Machine Learning" />
        </datalist>

        <br />
        <br />

        <button type="submit" id="form-submit">Submit</button>
      </form>
    </div>
    
    <footer><small>safirangi ?? 2022</small></footer>
  </body>
</html>
