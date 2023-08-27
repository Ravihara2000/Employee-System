<html>
  <head>
    <link rel="stylesheet" href="Index.css" />
  </head>
  <body>
    <div class="login-box">
      <h2>Employee Records System</h2>
      <form action="emp_data.php" action="POST">
        <div class="user-box">
          <input type="number" name="eid" />
          <label>Employee ID</label>
        </div>
        <div class="user-box">
          <input type="text" name="ename" />
          <label>Employee Name </label>
        </div>
        <div class="user-radio">
          <label>Gender</label><br /><br />
          <input type="radio" id="male" name="gender" value="Male" />
          <label for="male">Male</label><br />
          <input type="radio" id="female" name="gender" value="Female" />
          <label for="female">Female</label><br /><br />
        </div>

        <div class="user-dropdown">
          <label>Location</label>
          <select name="location" id="location">
            <option value="india">India</option>
            <option value="australia">Australia</option>
            <option value="singapore">Singapore</option>
            <option value="canada">Canada</option>
          </select>
          <br /><br /><br />
          <br />
        </div>
        <div class="user-box">
          <input type="number" name="eage" />
          <label>Age</label>
        </div>
        <div class="user-box">
          <input type="text" name="bgroup" />
          <label>Blood Group</label>
        </div>
        <button type="submit" class="custom-button">Submit</button>
        <button type="reset" class="custom-button">Reset</button>
      </form>
    </div>
  </body>
</html>
