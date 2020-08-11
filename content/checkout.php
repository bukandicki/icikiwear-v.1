<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="../images/icon.jpg" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/glider.min.css">
    <link rel="stylesheet" href="../css/master.css">
    <title>Icikiwear Official Store</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark bg-white navbar-lite pl-2 pr-0">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.html">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">LOKASI TOKO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CARA ORDER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="content/faq.html">FAQ</a>
            </li>
        </ul>
        <ul class="navbar-nav secondary-right-nav">
            <li class="nav-item border border-right-0 border-top-0 border-bottom-0 m-0 p-0">
                <a class="nav-link right-secondary-link1" href="#">KONFIRMASI PEMBAYARAN</a>
            </li>
            <li class="nav-item border border-right-0 border-top-0 border-bottom-0">
                <a class="nav-link right-secondary-link2" href="">LACAK PESANAN</a>
            </li>
            <li class="nav-item border border-right-0 border-top-0 border-bottom-0">
                <a class="nav-link right-secondary-link3" href="#">LOGIN</a>
            </li>
        </ul>
    </nav>
    <nav class="navbar navbar-expand-lg bg-white px-5 sticky-top">
        <a class="navbar-brand" href="#"><img src="../images/icon2.svg" alt="Icon" width="60" height="60"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-4">
                <li class="nav-item">
                    <a class="nav-link" href="#">T-SHIRT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">JACKET</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bundling.php">BUNDLING</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                        ACCESSORIES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">HAT</a>
                        <a class="dropdown-item" href="#">BUFF</a>
                        <a class="dropdown-item" href="#">SUNGLASSES</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link rounded" href="#"><i class="la la-gift"></i> MISTERY BOX</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav p-0">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="la la-heart"></i> FAV</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-shopping-basket"></i> CART</a>
            </li>
            <li class="nav-item m-0 p-0">
                <div class="form-group m-0 rounded">
                    <input type="text" class="pl-3 rounded" placeholder="Mau cari apa?">
                    <button class="" type="button"><i class="fas fa-search"></i></button>
                </div>
            </li>
        </ul>
    </nav>
    <section>
        <div class="container">
            <form action="" class="checkout-form m-auto pt-2">
                <h3 class=""><i class="la la-map-marker"></i>ALAMAT PENGIRIMAN</h3>
            <ul>
                <li>
                    <label for="checkout-email">Nama penerima</label>
                    <span class="row m-0">
                        <input class="position-ralative" type="text" name="" id="checkout-name" autocomplete="off" autofocus>
                        <i class="la la-check position-absolute"></i>
                    </span>
                </li>
                    <li>
                        <label for="checkout-email">No telepon</label>
                        <span class="row m-0">
                            <input type="text" name="" id="checkout-no-telepon" autocomplete="off" placeholder="Pastikan nomor aktif ya" autofocus>
                        </span>
                    </li>
                    <li>
                        <label for="checkout-email">Email</label>
                        <span class="row m-0">
                            <input type="email" name="" id="checkout-email" autocomplete="off" autofocus>
                        </span>
                    </li>
                    <li>
                        <label for="checkout-email">Provinsi</label>
                        <span class="row m-0">
                            <select name="" id="">
                                <option value="">Jawa Barat</option>
                            </select>
                        </span>
                    </li>
                    <li>
                        <label for="checkout-email">Kota/Kabupaten</label>
                        <span class="row m-0">
                            <select name="" id="">
                                <option value="">Kota Bandung</option>
                            </select>
                        </span>
                    </li>
                    <li>
                        <label for="checkout-email">Kecamatan</label>
                        <span class="row m-0">
                            <select name="" id="">
                                <option value="">Kiaracondong</option>
                            </select>
                        </span>
                    </li>
                    <li>
                        <label for="checkout-email">Alamat lengkap</label>
                        <span class="row m-0">
                            <input type="email" name="" placeholder="Alamat, No.Rumah, RT/RW" id="checkout-pos-code" autocomplete="off" autofocus>
                        </span>
                    </li>
                    <li>
                        <label for="checkout-email">Kode pos</label>
                        <span class="row m-0">
                            <input type="email" name="" id="checkout-pos-code" autocomplete="off" autofocus>
                        </span>
                    </li>
                    <li class="mt-2">
                        <input class="w-100" type="submit" name="a" id="" value="KONFIRMASI">
                    </li>
                </ul>
        </form>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="../js/master.js"></script>
    <script src="../js/glider.min.js"></script>
    <script>
        new Glider(document.querySelector('.best-seller'), {
            slidesToShow: 3,
            slidesToScroll: 1,
            draggable: false,
            dots: '.glider-dots',
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <script>
        AOS.init();
    </script>
</body>
</html>