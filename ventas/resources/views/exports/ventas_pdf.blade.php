<!DOCTYPE html>
<html>
<head>
    <title>Lista de Ventas</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 5px; text-align: left; }
    </style>
</head>
<body>
    <h3>Lista de Ventas</h3>
    <table>
        <thead>
            <tr>
                <th>ID Venta</th>
                <th>ID Cliente</th>
                <th>ID Producto</th>
                <th>Fecha Venta</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $v)
                <tr>
                    <td>{{ $v->id_venta }}</td>
                    <td>{{ $v->id_cliente }}</td>
                    <td>{{ $v->id_producto }}</td>
                    <td>{{ $v->fecha_venta }}</td>
                    <td>{{ $v->cantidad }}</td>
                    <td>{{ $v->precio_unitario }}</td>
                    <td>{{ $v->total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
