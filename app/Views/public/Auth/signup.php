<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="app/Views/public_assets/css/signup.css">
</head>
<body>
    <div class="signup-container">
        <h1>Sign Up</h1>
        <form action="UserSignup" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="userType">Account Type</label>
                <select id="userType" name="userType">
                    <option value="user" selected>User</option>
                    <option value="company">Company</option>
                </select>
            </div>

            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>