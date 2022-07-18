<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hallo pesanan anda :<b>{{$material}}</b>
    @if ($material == 'pasir urug')
    <br>harga {{$material}} Rp.50000
    <br>
    @elseif ($material == 'batako besar')
    <br>harga {{$material}} Rp.30000
    @elseif ($material == 'bata merah')
    <br>harga {{$material}} Rp.40000
    @elseif ($material == 'batu apung')
    <br>harga {{$material}} Rp.65000
    @else
    <br>
    list harga tidak ada 
    @endif
    <br>

    Hallo pesanan anda :<b>{{$material2}}</b>
    @if ($material2 == 'pasir urug')
    <br>harga {{$material2}} Rp.50000
    <br>
    @elseif ($material2 == 'batako besar')
    <br>harga {{$material2}} Rp.30000
    @elseif ($material2 == 'bata merah')
    <br>harga {{$material2}} Rp.40000
    @elseif ($material2 == 'batu apung')
    <br>harga {{$material2}} Rp.65000
    @else
    <br>
    list harga tidak ada 
    @endif
</body>
</html>