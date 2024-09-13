<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tanggal Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_buku as $index =>$buku)
            <tr>
                <td>{{$index+1}}</td>
                <td>{{$buku->judul}}</td>
                <td>{{$buku->penulis}}</td>
                <td>{{"Rp. ".number_format($buku->harga, 2, ',', '.')}}</td>
                <td>{{$buku->tgl_terbit}}</td>
            @endforeach
        </tbody>
    </table>
    <p style="size: 15px;">Total Harga Buku : {{"Rp. ".number_format($sum, 2, ',', '.')}}</p>
    <p style="size: 15px;">Total Buku : Rp.{{ $total }}</p>
</body>
</html>