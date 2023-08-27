<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="userInterface.css" />
</head>
<body>
  <div class="login-box">
    <h2>Employee Records System</h2>
    <form action="emp_data.php" method="POST">
      <div class="user-box">
        <input type="number" name="id"  required='true' />
        <label>Employee ID</label>
      </div>
      <div class="user-box">
        <input type="text" name="name" required='true' />
        <label>Employee Name</label>
      </div>
      <div class="user-radio">
        <label>Gender</label><br /><br />
        <input type="radio" id="male" name="gender" value="Male" required='true'/>
        <label for="male">Male</label><br />
        <input type="radio" id="female" name="gender" value="Female" required='true'/>
        <label for="female">Female</label><br /><br />
      </div>
      <div class="user-dropdown">
        <label>Location</label>
        <select name="location" id="location" required='true'>
          <option value="india">India</option>
          <option value="australia">Australia</option>
          <option value="singapore">Singapore</option>
          <option value="canada">Canada</option>
        </select>
        <br /><br /><br /><br />
      </div>
      <div class="user-box">
        <input type="number" name="age" required='true'/>
        <label>Age</label>
      </div>
      <div class="user-box">
        <input type="text" name="bgroup" />
        <label>Blood Group</label>
      </div>
      <button type="submit" class="custom-button" value= submit>Submit</button>
      <button type="reset" class="custom-button">Reset</button>
      <button class="custom-button" onclick="window.location.href='view_data.php'">View Data</button>

    </form>
  </div>
</body>
</html>
