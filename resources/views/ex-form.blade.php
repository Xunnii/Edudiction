<html>

<head>
    <title>Login Page</title>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('https://amymhaddad.s3.amazonaws.com/morocco-blue.png') no-repeat center center fixed;
            background-size: cover;
        }

        .login-container {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
            color: white;
        }

        .login-container h2 {
            margin-bottom: 20px;
        }

        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-bottom: 1px solid #ccc;
            background: transparent;
            color: white;
        }

        .login-container input[type="checkbox"] {
            margin-right: 10px;
        }

        .login-container label {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin: 10px 0;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #fff;
            border: none;
            border-radius: 5px;
            color: black;
            font-size: 16px;
            cursor: pointer;
        }

        .login-container a {
            color: #ccc;
            text-decoration: none;
            font-size: 14px;
        }

        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form>
            <input type="email" placeholder="Enter your email" required>
            <input type="password" placeholder="Enter your password" required>
            <label>
                <input type="checkbox"> Remember me
                <a href="#">Forgot password?</a>
            </label>
            <button type="submit">Log In</button>
        </form>
        <p>Don't have an account? <a href="#">Register</a></p>
    </div>
</body>

</html>
