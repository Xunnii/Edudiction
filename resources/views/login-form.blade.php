<html>

<head>
    <title>
        Login-Edudiction
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            width: 100%;
        }

        .left {
            width: 60%;
            background: hsla(202, 94%, 86%, 1);
            background: linear-gradient(90deg, hsla(202, 94%, 86%, 1) 0%, hsla(199, 79%, 46%, 1) 100%);
            background: -moz-linear-gradient(90deg, hsla(202, 94%, 86%, 1) 0%, hsla(199, 79%, 46%, 1) 100%);
            background: -webkit-linear-gradient(90deg, hsla(202, 94%, 86%, 1) 0%, hsla(199, 79%, 46%, 1) 100%);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#BAE4FD", endColorstr="#1999D4", GradientType=1);
            background-size: cover;
            position: relative;
        }

        .right {
            width: 40%;
            padding: 50px;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .right h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .right p {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input.short {
            width: 100%;
        }

        .form-group input.error {
            border-color: #e74c3c;
            background-color: #fce4e4;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 15px;
            font-size: 16px;
            color: #fff;
            background-color: #000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            margin-bottom: 10px;
        }

        .btn:hover {
            background-color: #333;
        }

        .signup {
            text-align: center;
            font-size: 14px;
        }

        .signup p {
            text-align: left;
            margin-left: 0;
            width: 100%;
        }

        .signup a {
            color: #3498db;
            text-decoration: none;
        }

        .signup a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left">
        </div>
        <div class="right">
            <h1>
                Login
            </h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('from'))
                <div class="alert text-center">{{ session('from') }}</div>
            @endif

            @if (session('success'))
                <div class="alert alert-success text-center">{{ session('success') }}</div>
            @elseif (session('error'))
                <div class="alert alert-danger text-center">{{ session('error') }}</div>
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">username</label>
                    <input id="username" name="username" class="short" type="text" value=""
                        placeholder="username/email" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" name="password" class="short" placeholder="6+ characters" type="password" />
                </div>
                <button class="btn" type="submit">Confirm</button>
            </form>
            <p class="align-left">
            <p class="login-link">Belum punya akun? <a href="{{ route('registrasi') }}">Regis!</a></p>
            </p>


        </div>
    </div>
</body>

</html>
