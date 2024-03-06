<!DOCTYPE html>
<html>
<head>
    <title>Data Notifikasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid #ddd;
            background-color: #fff;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Pesan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $notifikasi)
            <tr>
                <td>{{ $notifikasi['id'] }}</td>
                <td>{{ $notifikasi['pesan'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
