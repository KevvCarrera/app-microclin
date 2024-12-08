<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enfermedades</title>
</head>
<body>
    <div class="">
        <h1 class="">Lista de Enfermedades</h1>
        <table class="">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Susceptibles</th>
                    <th>Casos</th>
                    <th>Muertos</th>
                    <th>Especie</th>
                    <th>Región</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enfermedades as $enfermedad)
                    <tr>
                        <td>{{ $enfermedad->keyEnfermedad }}</td>
                        <td>{{ $enfermedad->Nombre }}</td>
                        <td>{{ $enfermedad->Fecha }}</td>
                        <td>{{ $enfermedad->Suceptibles }}</td>
                        <td>{{ $enfermedad->Casos }}</td>
                        <td>{{ $enfermedad->Muertos }}</td>
                        <td>{{ $enfermedad->Especie }}</td>
                        <td>{{ $enfermedad->Region }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
