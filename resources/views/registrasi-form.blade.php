<html>

<head>
    <title>
        Register - Edudicition
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
</head>

<body>
    <div class="container">
        <div class="left">
        </div>
        <div class="right">
            <h1>
                Register
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

            @if (session('success'))
                <div class="alert alert-success text-center">{{ session('success') }}</div>
            @elseif (session('error'))
                <div class="alert alert-danger text-center">{{ session('error') }}</div>
            @endif

            <form action="{{ route('registrasi') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" type="text" value="" />
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat"></textarea>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input name="tanggalLahir" type="date" value="" />
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input name="username" type="text" value="" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="password" type="password" value="" />
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input name="konfir" type="password" value="" />
                </div>

                <button class="btn" type="submit">
                    Register
                </button>
            </form>
            <div class="signin">
                <p class="align-left">
                    Already have an account?
                <p class="login-link">Sudah punya akun? <a href="{{ route('formlogin') }}">Login!</a></p>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
