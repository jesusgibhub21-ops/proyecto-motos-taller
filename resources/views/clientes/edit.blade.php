<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Cliente</title>
</head>
<body class="container mt-5">
    <h1>Editar Cliente: {{ $cliente->nombre }}</h1>
    
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $cliente->nombre }}" required>
        </div>
        <div class="mb-3">
            <label>Teléfono</label>
            <input type="text" name="telefono" class="form-control" value="{{ $cliente->telefono }}" required>
        </div>
        <div class="mb-3">
            <label>Dirección</label>
            <input type="text" name="direccion" class="form-control" value="{{ $cliente->direccion }}" required>
        </div>
        <div class="mb-3">
            <label>Saldo</label>
            <input type="number" name="saldo" class="form-control" value="{{ $cliente->saldo }}" step="0.01" required>
        </div>
        <div class="mb-3">
            <label>Marca de la Moto</label>
            <input type="text" name="marca_moto" class="form-control" value="{{ $cliente->marca_moto }}" required>
        </div>
        <div class="mb-3">
            <label>Modelo de la Moto</label>
            <input type="text" name="modelo_moto" class="form-control" value="{{ $cliente->modelo_moto }}" required>
        </div>
        
        <button type="submit" class="btn btn-warning">Actualizar Cliente</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>