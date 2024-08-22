<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra Exitosa</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<header>
    <h1>Compra Exitosa</h1>
</header>

<main>
    <p>¡Gracias por tu compra! Tu pedido ha sido realizado exitosamente.</p>
    <a href="{{ route('cart.show') }}">Volver al Carrito</a>
</main>

<footer>
    <p>&copy; 2023 Tienda de Perfumes</p>
</footer>
</body>
</html>
