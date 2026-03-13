<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Nuevo Cliente</title>
</head>
<body class="container mt-5">
    <h1 class="mb-4">Agregar Nuevo Cliente</h1>
    
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            <input type="text" name="telefono" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" name="direccion" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Saldo</label>
            <input type="number" name="saldo" class="form-control" step="0.01" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Marca de la Moto</label>
            <input type="text" name="marca_moto" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Modelo de la Moto</label>
            <input type="text" name="modelo_moto" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Cliente</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>