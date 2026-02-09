<?php require_once "controlador.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>App Docker PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 40px;
        }

        h1 {
            color: #333;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            box-shadow: 0 4px 10px rgba(0,0,0,.1);
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 6px;
            background: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }

        ul {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h1>📦 Productos</h1>

<div class="card">
    <form method="POST">
        <label>Nombre del producto</label>
        <input type="text" name="nombre" required>
        <button type="submit">Registrar producto</button>
    </form>
</div>

<ul>
<?php while ($p = $productos->fetch_assoc()) { ?>
    <li><?= $p['id'] ?> - <?= htmlspecialchars($p['nombre']) ?></li>
<?php } ?>
</ul>

</body>
</html>
