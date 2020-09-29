<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Experience</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
body {
  background-color: lightblue;
}
</style>
</head>
<body>
<br>
<br>
<div class="container">
  <h2>ประวัติการทำงาน</h2>
  <form action="./welcome/home" method="POST">
  <div class="form-group">
      <label for="name">สถานที่เคยทำงาน:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">ประสบการทำงานจำนวน(ปี):</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> ยินยอม
      </label>
    </div>
    <button type="submit" class="btn btn-primary">ยืนยัน</button>
    <button type="button" class="btn btn-secondary">ยกเลิก</button>
  </form>
</div>

</body>
</html>
