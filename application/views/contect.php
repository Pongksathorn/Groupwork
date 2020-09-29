<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 35%;
  background-color: #FF0000;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #FFCCFF;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<center>
<h1>การติดต่อ</h1>
</center>

<div>
  <form action="<?php echo site_url('Home/show') ?>"method="POST">
  
    <label for="adress">บ้านเลขที่</label>
    <input type="text" id="adress" name="adress" placeholder="">

    <label for="district">ตำบล</label>
    <input type="text" id="district" name="district" placeholder="">

    <label for="city">อำเภอ</label>
    <input type="text" id="city" name="city" placeholder="">

    <label for="province">จังหวัด</label>
    <input type="text" id="province" name="province" placeholder="">

    <label for="pcode">รหัสไปรษณีย์</label>
    <input type="text" id="pcode" name="pcode" placeholder="">

    <label for="email">E-mail</label>
    <input type="text" id="email" name="email" placeholder="">

    <label for="pnum">เบอร์โทรศัพท์</label>
    <input type="text" id="pnum" name="pnum" placeholder="">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
