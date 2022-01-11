@extends('welcome')
@extends('Footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="css/transaksi.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

{{-- <header>

    <div id="menu-bar" class="fas fa-bars"></div>
    <div class="logo">
        <img src ="images/warehouse.png" width="40 px">
    </div>

    <nav class="navbar">

        <a href="#home">Sewa Gudang</a>
        <a href="#products">Riwayat Penyewaan</a>
        <a href="#featured">Tentang Kami</a>
        <a href="#review">Hubungi Kami</a>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-user"></a>
    </div>
</header> --}}

    <form action="action">
        <h1 class="h1-trans">Transaksi</h1>
        <label class="a">Nama</label><br>
        <input class="box1-trans" type="text" placeholder="Nama Anda"><br>
        <label class="a">Jenis Gudang</label><br>
        <input class="box1-trans" type="text" placeholder="Gudang Yang Anda Pilih"><br>
        <label class="a">Tanggal Mulai Sewa</label><br>
        <input class="box1-trans" type="date" id="datePicker"><br>
        <label class="a">Lama Sewa</label><br>
        <div class="div1">
             <label class="b">Tahun</label><br>
           <select class="box2"  SIZE="1" style="width: 150px"">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>

            <!-- <input class="box2" name="month" id="month" placeholder="MM"><br> -->
        </div>
        <div class="div1">
            <label class="b">Bulan</label><br>
            <select class="box2" SIZE="1" style="width: 150px">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
        </div>
        <div class="div1">
        <label class="b">Minggu</label><br>
        <select class="box2"   SIZE="1" style="width: 150px">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select><br>

        </div>
        <label class="a">Metode Pembayaran</label><br>
        <select class="box2"   SIZE="1" style="width: 540px">
            <option value="1">Transfer Bank BCA</option>
            <option value="2">Transfer Bank Mandiri</option>
            <option value="3">Transfer Bank BRI</option>
            <option value="4">Transfer Bank Mega</option>
          </select>
        <br>
        <label class="a">Jenis Gudang</label><br>
        <input class="box1-trans" type="text" placeholder="Gudang Yang Anda Pilih"><br>

        <a href="/Dashboard"><button type="button" class="btn9">Batal</button></a>
        <a href="/Konfirmasi"><button type="button" class="btn9">Lanjutkan</button></a>

    </form>
</body>

<script>
    document.getElementById('datePicker').valueAsDate = new Date();
</script>
</html>
