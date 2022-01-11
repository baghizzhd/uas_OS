@extends('welcome2')
@extends('Footer')
<html>

    <head>
        <title>Detail Produk</title>
        <link rel="stylesheet" href="css/detailProduk.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    </head>

    <body>

        <div class="hero">
            <div class="row">
                <div class="col">
                    <div class="slider">
                        <div class="preview">
                            <img src="images/unnamed (1).jpg" id="imagebox" alt="">
                        </div>
                    </div>
                </div>
                <div class="col">

                    <div class="content-detailProduk">
                        <h2>Small Warehouse</h2>
                        <p>Warehouse berukuran 15 x 20m</p>
                        <p>Minggu  : Rp 10.000.000</p>
                        <p>Bulan   : Rp 35.000.000</p>
                        <p>Tahun   : Rp 410.000.000</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                       <select name="minggu">
                                <option value="Pilih Minggu">Pilih Minggu</option>
                                <option value="1 Minggu">1 Minggu</option>
                                <option value="2 Minggu">2 Minggu</option>
                                <option value="3 Minggu">3 Minggu</option>
                        </select>
                        <select name="bulan">
                                    <option value="Pilih Bulan">Pilih Bulan</option>
                                    <option value="1 Bulan">1 Bulan</option>
                                    <option value="2 Bulan">2 Bulan</option>
                                    <option value="3 Bulan">3 Bulan</option>
                                    <option value="4 Bulan">4 Bulan</option>
                                    <option value="5 Bulan">5 Bulan</option>
                                    <option value="6 Bulan">6 Bulan</option>
                                    <option value="70 1Bulan">7 Bulan</option>
                                    <option value="8 Bulan">8 Bulan</option>
                                    <option value="9 Bulan">9 Bulan</option>
                                    <option value="10 Bulan">10 Bulan</option>
                                    <option value="11 Bulan">11 Bulan</option>
                        </select>
                        <select name="tahun">
                            <option value="Pilih Tahun">Pilih Tahun</option>
                            <option value="1 Tahun">1 Tahun</option>
                            <option value="2 Tahun">2 Tahun</option>
                            <option value="3 Tahun">3 Tahun</option>
                            <option value="4 Tahun">4 Tahun</option>
                            <option value="5 Tahun">5 Tahun</option>
                        </select>
                        <p></p>
                        <div class="price">Rp 0</div>
                        <a href="/Keranjang">
                        <button type="button">
                            <i class="fa fa-shopping-cart"></i>
                            Masukkan Keranjang</button></a>
                        <a href="/Transaksi"><button type="button">Beli Sekarang</button></a>
                    </div>
                </div>
            </div>
    </body>
    </html>
