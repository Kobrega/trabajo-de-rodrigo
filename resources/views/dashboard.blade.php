<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Bienvenido {{ Auth::user()->name }}</h2>
    <a href="{{ route('logout') }}">Cerrar sesión</a>
</body>
</html>
