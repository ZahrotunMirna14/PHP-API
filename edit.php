<?php
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <a href="index.php">Lihat Semua Data</a>

<form method="POST" action="edit-aksi.php" id="input-form"> 
        <div>
          <h1> EDIT DATA </h1>
        </div>
        <div class="form">
          <label for="">Id</label><br>
          <input type="text" name="id" style="background-color: #f7f7f7">
        </div>
<br>
        <div class="form">
          <label for="">Username</label><br>
          <input type="text" name="username" style="background-color: #f7f7f7">
        </div>
<br>
        <div class="form">
          <label for="">Password</label><br>
          <input type="password" name="password" style="background-color: #f7f7f7">
        </div>
<br>
        <div class="form">
          <label >Level</label><br>
          <select name="level" style="background-color: #f7f7f7">
            <option> </option>
            <option> User</option>
            <option> Admin</option>
            <option> Guest</option>
          </select>
        </div>
<br>
        <div class="form">
          <label for="">Fullname</label><br>
          <input type="text" name="fullname" style="background-color: #f7f7f7" >
        </div>
<br><br>
        <div class="form">
          <input class="bg-blue" type="submit" name="submit" value="SUBMIT">
        </div>
      </form>
</body>
</html>
<?php
}
?>