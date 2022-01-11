@extends('welcome2')
@extends('Footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/dashboard.css">

</head>
<body>


<!-- products section starts  -->

<section class="products" id="products">
    <div class="box-container">

        <div class="box">
            <!-- {{-- <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div> --}} -->
            <a href="/DetailProduk"><img src="images/1.jpg" alt=""></a>
            <div class="content">
               
                <h3>Tiny Warehouse</h3> <h4>T0001</h4>
                <div class="price">Rp5.000.000/bulan</div>
  
                <a href="/Keranjang" class="btn">+Keranjang</a>
                <a href="/Transaksi" class="btn">Beli</a>
            </div>
        </div>

        <div class="box">
            {{-- <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div> --}}
            <a href="/DetailProduk"><img src="images/2.jpg" alt=""></a>
            <div class="content">
                <h3>Normal Warehouses</h3>
                <div class="price">Rp6.000.000/bulan</div>
                <a href="/Keranjang" class="btn">+Keranjang</a>
                <a href="/Transaksi" class="btn">Beli</a>
            </div>
        </div>

        <div class="box">
            {{-- <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div> --}}
            <a href="/DetailProduk"><img src="images/3.jpg" alt=""></a>
            <div class="content">
                <h3>Large Warehouse</h3>
                <div class="price">Rp6.000.000/bulan</div>
                {{-- <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div> --}}
                <a href="/Keranjang" class="btn">+Keranjang</a>
                <a href="/Transaksi" class="btn">Beli</a>
            </div>
        </div>

        <div class="box">
            {{-- <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div> --}}
            <a href="/DetailProduk"><img src="images/4.jpg" alt=""></a>
            <div class="content">
                <h3>X-Large Warehouse</h3>
                <div class="price">Rp9.000.000/bulan</div>
                {{-- <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div> --}}
                <a href="/Keranjang" class="btn">+Keranjang</a>
                <a href="/Transaksi" class="btn">Beli</a>
            </div>
        </div>
        <div class="box">
            {{-- <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div> --}}
            <a href="/DetailProduk"><img src="images/1.jpg" alt=""></a>
            <div class="content">
                <h3>Normal Warehouse</h3>
                <div class="price">Rp6.000.000/bulan</div>
                {{-- <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div> --}}
                <a href="/Keranjang" class="btn">+Keranjang</a>
                <a href="/Transaksi" class="btn">Beli</a>
            </div>
        </div>

        <div class="box">
            {{-- <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div> --}}
            <a href="/DetailProduk"><img src="images/2.jpg" alt=""></a>
            <div class="content">
                <h3>X-Large Warehouses</h3>
                <div class="price">Rp9.000.000/bulan</div>
                {{-- <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div> --}}
                <a href="/Keranjang" class="btn">+Keranjang</a>
                <a href="/Transaksi" class="btn">Beli</a>
            </div>
        </div>

        <div class="box">
            {{-- <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div> --}}
            <a href="/DetailProduk"><img src="images/3.jpg" alt=""></a>
            <div class="content">
                <h3>Large Warehouse</h3>
                <div class="price">Rp6.000.000/bulan</div>
                {{-- <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div> --}}
                <a href="/Keranjang" class="btn">+Keranjang</a>
                <a href="/Transaksi" class="btn">Beli</a>
            </div>
        </div>

        <div class="box">
            {{-- <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div> --}}
            <a href="/DetailProduk"><img src="images/4.jpg" alt=""></a>
            <div class="content">
                <h3>nike shoes</h3>
                <div class="price">Rp5.000.000/bulan</div>
                {{-- <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div> --}}
                <a href="/Keranjang" class="btn">+Keranjang</a>
                <a href="/Transaksi" class="btn">Beli</a>
            </div>
        </div>
    </div>

</section>
    {{-- <div class="footerdashboard" style="margin-top: 20px">@include('Footer')</div> --}}

</body>
</html>
