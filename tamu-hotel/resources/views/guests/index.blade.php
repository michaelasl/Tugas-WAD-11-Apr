<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tamu Hotel</title>
</head>
<body>
    <h1>Daftar Tamu Hotel</h1>
    <table border="1" cellpadding="8">
        <tr>
            <th>Nama</th>
            <th>Asal</th>
            <th>Keperluan</th>
            <th>Tanggal Menginap</th>
        </tr>
        @foreach($guests as $guest)
        <tr>
            <td>{{ $guest->nama }}</td>
            <td>{{ $guest->asal }}</td>
            <td>{{ $guest->keperluan }}</td>
            <td>{{ $guest->tanggal_menginap }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
