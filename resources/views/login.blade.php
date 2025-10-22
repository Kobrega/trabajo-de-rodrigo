<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center; /* Centra horizontalmente */
            align-items: center;     /* Centra verticalmente */
            height: 100vh;           /* Ocupa toda la pantalla */
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
        }

        .login-box {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            width: 400px;
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 30px;
            font-size: 28px;
        }

        .login-box input {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            font-size: 16px;
        }

        .login-box button {
            width: 95%;
            padding: 12px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Iniciar Sesión</h2>

        @if(session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        <form method="POST" action="/login">
            @csrf
            <input type="email" name="email" placeholder="Correo" required><br>
            <input type="password" name="password" placeholder="Contraseña" required><br>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
