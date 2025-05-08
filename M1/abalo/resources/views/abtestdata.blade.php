<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AB Test Daten</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Testdata</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($testdata as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->ab_testname }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

