<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="./asetdashboard/logo.png" type="image/x-icon" />
    <style>
    .input-group {
        position: relative;
        margin-bottom: 20px;
    }

    .input-group input {
        width: 100%;
        padding: 10px;
        font-size: 18px;
        border-radius: 5px;
        background-color: #ff849c;
    }

    .input-group .toggle-password {
        position: absolute;
        top: 50%;
        right: 16px;
        transform: translateY(-50%);
        cursor: pointer;
        transition: 0.3s ease-in-out;
    }

    .input-group .toggle-password:hover {
        transform: translateY(-50%) scale(1.1);
    }

    .input-group .toggle-password:focus {
        outline: none;
    }

    .input-group .toggle-password i {
        color: #999;
        font-size: 18px;
    }

    .input-group .toggle-password i:hover {
        color: #333;
    }
    </style>
    <title>Login & Sign-Up</title>
</head>

<body>

    <div class="container">
        <form action="proseslogin.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Masuk</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Kata Sandi" name="password" id="password">
                <span class="toggle-password" onclick="togglePasswordVisibility()"><i class="fa fa-eye"></i></span>
            </div>
            <div class="input-group">
                <button type="submit" class="btn" value="Login">Masuk</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Daftar</a></p>
        </form>
    </div>

    <script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var toggleIcon = document.querySelector(".toggle-password i");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleIcon.classList.remove("fa-eye");
            toggleIcon.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            toggleIcon.classList.remove("fa-eye-slash");
            toggleIcon.classList.add("fa-eye");
        }
    }
    </script>

</body>

</html>