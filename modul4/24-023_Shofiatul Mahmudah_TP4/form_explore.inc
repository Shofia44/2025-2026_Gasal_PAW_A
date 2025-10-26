<form method="post" action="ProcessData_Explore.php">
    <label>Username (5–15 chars, no space):</label><br>
    <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>"><br><br>

    <label>City (will be converted to UPPERCASE):</label><br>
    <input type="text" name="city" value="<?php if(isset($_POST['city'])) echo htmlspecialchars($_POST['city']); ?>"><br><br>

    <label>Website URL:</label><br>
    <input type="text" name="website" value="<?php if(isset($_POST['website'])) echo htmlspecialchars($_POST['website']); ?>"><br><br>

    <label>GPA (floating-point number):</label><br>
    <input type="text" name="gpa" value="<?php if(isset($_POST['gpa'])) echo htmlspecialchars($_POST['gpa']); ?>"><br><br>

    <label>Age (numeric only):</label><br>
    <input type="text" name="age" value="<?php if(isset($_POST['age'])) echo htmlspecialchars($_POST['age']); ?>"><br><br>

    <label>Birth Date (day / month / year):</label><br>
    <input type="text" name="day" size="2"> /
    <input type="text" name="month" size="2"> /
    <input type="text" name="year" size="4"><br><br>

    <input type="submit" value="Validate">
</form>
