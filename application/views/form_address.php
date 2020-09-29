<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="work" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>ข้อมูลที่อยู่ปัจจุบัน</p>
    <hr>

    <label for="email"><b>บ้านเลขที่</b></label>
    <input type="text" placeholder="บ้านเลขที่" name="email" id="email" required>

    <label for="psw"><b>ตำบล</b></label>
    <input type="text" placeholder="ตำบล" name="psw" id="psw" required>

    <label for="psw-repeat"><b>จังหวัด </b></label>
    <input type="text" placeholder="จังหวัด" name="psw-repeat" id="psw-repeat" required>

    <label for="psw"><b>ไปรษณีย์</b></label>
    <input type="text" placeholder="ไปรษณีย์" name="psw" id="psw" required>

    <hr>


    <button type="submit" class="registerbtn">ไปต่อ</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

</body>
</html>