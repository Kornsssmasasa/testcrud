<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recursive</title>
</head>
<style>
    table {
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
    }
</style>
<body>
    <h1>Recursive Math Result</h1>
    <table>
        <tr>
            <th>Number</th>
            <th>Total</th>
        </tr>
        @foreach ($numbers as $index => $number)
            <tr>
                <td>{{ $number }}</td>
                <td>{{ $results[$index] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>