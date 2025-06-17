<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>User Registration</h2>
        <form method="POST" action="insert_user.php">
            <label for="matric">Matric:</label>
            <input type="text" name="matric" required>

            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="role">Role:</label>
            <select name="role" required>
                <option value="">Please select</option>
                <option value="student">Student</option>
                <option value="lecturer">Lecturer</option>
            </select>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
