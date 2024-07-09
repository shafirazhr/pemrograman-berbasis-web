<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOREAN DRINK AND FOOD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style>
    footer {
        margin-top: 40px;
        color: #fff;
    }
    .cart-item {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }
    .cart-item img {
      width: 80px;
      margin-right: 10px;
    }
    .cart-item .item-details {
      flex-grow: 1;
    }
    .cart-total {
      font-weight: bold;
      text-align: right;
      margin-top: 10px;
    }
    header {
  background-image: url('gambar/header.JPG');
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center center;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
  text-align: center;
  color: white;
  width: cover;
  height: 100%;
}

.header-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100%;
}
@media only screen and (max-width: 768px) {
  header {
    background-size: contain;
  }
}

@media only screen and (max-width: 480px) {
  header {
    background-size: auto;
  }
}

.banner-text {
  border-radius: 100px;
  margin: auto;
  width: 100%;
  padding: 400px;
  text-align: center;
  background: rgba(0, 0, 0, 0.3);
}

@media only screen and (max-width: 768px) {
  .banner-text {
    padding: 200px;
  }
}

@media only screen and (max-width: 480px) {
  .banner-text {
    padding: 100px;
  }
}

	footer {
	  background-color: black;
	  padding: 20px;
	  color: white;
	  width: 100% ;
	  height: auto;
	}
	@media (max-width: 480px) {
	  footer {
		padding: 10px;
	  }
  }
	.container {
	  max-width: 1200px;
	  margin: 0 auto;
	}

	.footer-content {
	  display: flex;
	  justify-content: space-between;
	  flex-wrap: wrap;
	}

	@media (max-width: 767px) {
	  .footer-content {
		flex-direction: column;
	  }
	}

</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">YummyBites</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="utama.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#food">Food</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#drink">Drink</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#keranjang">Keranjang</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="saran.php">Masukkan</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="kontak.php">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

    <header>
		<section id="beranda">
        <div class="container">
            <div class="intro-text">
				<div class="banner-text">
                <div class="intro-lead-in">WELCOME IN</div>
                <div class="intro-heading">KOREAN STREET FOOD AND DRINK</div>
                <a  href="https://instagram.com/yummybites.41?igshid=ZDc4ODBmNjlmNQ==" class="page-scroll btn btn-xl">FOLLOW ME!!</a>
			</div>
        </div>
		</section>
    </header>

	<section id="food">
        <div class="container">
            <h2>Korean Food</h2>
            <div class="row">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="gambar/food/ttaebokki.jpg" class="card-img-top" alt="Produk 1">
          <div class="card-body">
            <h5 class="card-title">Tteokbokki</h5>
            <p class="card-text">Tteokbokki merupakan makanan khas korea yang memiliki rasa yang pedas dengan tekstur yang kenyal dan dengan tambahan daun bawang sebagai penyedap.</p>
			<p class="card-text">Harga: Rp.11.000</p>
            <a href="#keranjang" class="btn btn-primary addToCart" data-product="Tteokbokki" data-price="11000">Tambah ke Keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="gambar/food/bimbimbap.jpg" class="card-img-top" alt="Produk 2">
          <div class="card-body">
            <h5 class="card-title">Bibimbab</h5>
            <p class="card-text">Bibimbap merupakan makanan Korea yang dikenal sebagai nasi campur. Makanan ini terdiri dari nasi, saus, wortel, timun, lobak, dan kimchi.</p>
            <p class="card-text">Harga: Rp.18.000</p>
			<a href="#keranjang" class="btn btn-primary addToCart" data-product="Bibimbab" data-price="18000">Tambah ke Keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="gambar/food/jjangjjangmyeon.jpg" class="card-img-top" alt="Produk 2">
          <div class="card-body">
            <h5 class="card-title">Jajangmyeon</h5>
            <p class="card-text">Jajangmyeon merupakan olahan mie dengan tambahan saus kedelai hitam. Makanan ini juga biasanya ditambah topping seperti sayuran dan daging.</p>
            <p class="card-text">Harga: Rp.20.000</p>
			<a href="#keranjang" class="btn btn-primary addToCart" data-product="Jjajangmyeon" data-price="20000">Tambah ke Keranjang</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="gambar/food/kimchi.jpg" class="card-img-top" alt="Produk 1">
            <div class="card-body">
              <h5 class="card-title">Kimchi</h5>
              <p class="card-text">Kimchi terbuat dari sawi putih yang difermentasi menggunakan berbagai bumbu seperti bubuk cabai, bawang putih, ikan asin, dan lain-lain.</p>
              <p class="card-text">Harga: Rp.7.000</p>
			  <a href="#keranjang" class="btn btn-primary addToCart" data-product="Kimchi" data-price="7000">Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="card">
            <img src="gambar/food/hobakjuk.jpg" class="card-img-top" alt="Produk 2">
            <div class="card-body">
              <h5 class="card-title">Hobakjuk</h5>
              <p class="card-text">Hobakjuk adalah bubur tradisional Korea Selatan yang terbuat dari labu kuning. Bubur ini memiliki tekstur halus dan lembut dengan aroma labu yang khas.</p>
              <p class="card-text">Harga: Rp.13.000</p>
			  <a href="#keranjang" class="btn btn-primary addToCart" data-product="Hobakjuk" data-price="13000">Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="card">
            <img src="gambar/food/kongguksu.jpg" class="card-img-top" alt="Produk 2">
            <div class="card-body">
              <h5 class="card-title">Kongguksu</h5>
              <p class="card-text">Kongguksu terdiri dari mie kuah kacang kedelai dingin yang terbuat dari kedelai putih yang dihaluskan dengan rasa yang manis dan berprotein tinggi.</p>
              <p class="card-text">Harga: Rp.18.000</p>
			  <a href="#keranjang" class="btn btn-primary addToCart" data-product="Kongguksu" data-price="18000">Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="gambar/snack/bungeoppang.jpg" class="card-img-top" alt="Produk 1">
            <div class="card-body">
              <h5 class="card-title">Bungeoppang</h5>
              <p class="card-text">Bungeo-ppang adalah kue serupa wafel dengan bentuk ikan mas. Bungeo-ppang terasa manis legit karena diisi pasta kacang merah</p>
              <p class="card-text">Harga: Rp.8.000</p>
			  <a href="#keranjang" class="btn btn-primary addToCart" data-product="Bungeoppang" data-price="8000">Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="card">
            <img src="gambar/snack/kimbab.jpg" class="card-img-top" alt="Produk 2">
            <div class="card-body">
              <h5 class="card-title">Gimbab</h5>
              <p class="card-text">Gimbab merupakan nasi yang digulung dan dibungkus menggunakan nori. Gimbab sendiri biasanya diisi dengan lobak, kimchi dan timun.</p>
              <p class="card-text">Harga: Rp.10.000</p>
			  <a href="#keranjang" class="btn btn-primary addToCart" data-product="Gimbab" data-price="10000">Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="card">
            <img src="gambar/snack/hoddeok.jpg" class="card-img-top" alt="Produk 2">
            <div class="card-body">
              <h5 class="card-title">Hotteok</h5>
              <p class="card-text">Hotteok merupakan pancake berisi kombinasi brown sugar, cinnamon, madu dan pine nuts yang digoreng dan enak dinikmati ketika masih hangat.</p>
              <p class="card-text">Harga: Rp.8.000</p>
			  <a href="#keranjang" class="btn btn-primary addToCart" data-product="Hotteok" data-price="8000">Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="gambar/snack/odeng.webp" class="card-img-top" alt="Produk 1">
            <div class="card-body">
              <h5 class="card-title">Odeng</h5>
              <p class="card-text">Odeng adalah fishcake, atau kue yang terbuat dari campuran daging ikan dan tepung. Camilan ringan ini mempunyai cita rasa gurih dan bertekstur kenyal yang khas.</p>
              <p class="card-text">Harga: Rp.9.000</p>
			  <a href="#keranjang" class="btn btn-primary addToCart" data-product="Odeng" data-price="9000">Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="card">
            <img src="gambar/food/ramyun.jpg" class="card-img-top" alt="Produk 2">
            <div class="card-body">
              <h5 class="card-title">Ramyeon</h5>
              <p class="card-text">Ramyeon merupakan mie kuah asal korea. Ramyeon sendiri biasanya berasal dari mie instan dengan berbagai tambahan topping seperti sayuran, telur, sosis, dan lainnya.</p>
              <p class="card-text">Harga: Rp.10.000</p>
			  <a href="#keranjang" class="btn btn-primary addToCart" data-product="Ramyeon" data-price="10000">Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="card">
            <img src="gambar/food/kimchijigae.jpg" class="card-img-top" alt="Produk 2">
            <div class="card-body">
              <h5 class="card-title">Kimchi Jjigae</h5>
              <p class="card-text">Kimchi jjigae merupakan sup pedas yang direbus di dalam panci bersama kimchi dan air cabai dari kimchi. Sup ini berisi sayuran, tahu, dan makanan laut atau daging babi.</p>
              <p class="card-text">Harga: Rp.14.000</p>
			  <a href="#keranjang" class="btn btn-primary addToCart" data-product="Kimchoi Jigae" data-price="14000">Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
      </div>


	<section id="drink">
	<section class="py-5">
        <div class="container">
            <h2>Korean Drink</h2>
            <div class="row">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="gambar/drink/sojuu.jpg" class="card-img-top" alt="Produk 1">
            <div class="card-body">
              <h5 class="card-title">Soju</h5>
              <p class="card-text">Soju merupakan minuman beralkohol yang terbuat dari beras yang didistilasi.</p>
              <p class="card-text">Harga: Rp.15.000</p>
			  <a href="#keranjang" class="btn btn-primary addToCart" data-product="Soju" data-price="15000">Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="card">
            <img src="gambar/drink/bananamilk.png" class="card-img-top" alt="Produk 2">
            <div class="card-body">
              <h5 class="card-title">Banana Milk</h5>
              <p class="card-text">Banana Milk adalah susu sapi dengan rasa pisang yang manis dan menjadi minuman favorit anak muda zaman sekarang.</p>
              <p class="card-text">Harga: Rp.8.000</p>
			  <a href="#keranjang" class="btn btn-primary addToCart" data-product="Banana Milk" data-price="8000">Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="card">
            <img src="gambar/drink/yujatea.jpg" class="card-img-top" alt="Produk 2">
            <div class="card-body">
              <h5 class="card-title">yuja Tea</h5>
              <p class="card-text">Yuja Tea adalah teh tradisional Korea yang dicampur air panas dengan yuja-cheong.</p>
              <p class="card-text">Harga: Rp.9.000</p>
			  <a href="#keranjang" class="btn btn-primary addToCart" data-product="Yuja Tea" data-price="9000">Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
      </div>
  </div>
	</section>
	<section id="keranjang">
	<div class="container mt-4">
    <h2>Keranjang</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Produk</th>
          <th scope="col">Harga</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody id="cartItems">
        
      </tbody>
    </table>
    <h4 id="totalPrice">Total Harga: Rp.0</h4>
    <button class="btn btn-secondary" onclick="resetCart()">Reset</button>
    <form id="checkoutForm">
      <div class="form-group">
        <label for="paymentMethod">Metode Pembayaran:</label>
        <select class="form-control" id="paymentMethod" name="paymentMethod">
          <option value="dana">Dana[089515820573]</option>
          <option value="bri">BRI[0111-01-058123-50-7]</option>
          <option value="bca">BCA[0582-0954-55]</option>
          <option value="bni">BNI[058-095-5511]</option>
          <option value="btn">BTN[00586-02-50-957310-0]</option>
        </select>
      </div>
      <div class="form-group">
        <label for="deliveryArea">Area Pengiriman:</label>
        <select class="form-control" id="deliveryArea" name="deliveryArea">
          <option value="telang">Telang[Rp.5000]</option>
          <option value="kamal">Kamal[Rp.10.000]</option>
        </select>
      </div>
      <div class="form-group">
        <label for="alamatDetail">Detail Alamat Pengiriman Beserta Nomor Telepon Aktif:</label>
        <input type="text" class="form-control" id="alamatDetail" name="alamatDetail" placeholder="Masukkan detail alamat dan nomor telepon aktif">
      </div>
      <button type="submit" class="btn btn-primary">Submit Pesanan</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
    var totalPrice = 0;
    var cartItems = [];

    $(document).ready(function() {
      $(".addToCart").click(function() {
        var product = $(this).data("product");
        var price = $(this).data("price");
        totalPrice += price;
        cartItems.push({ product: product, price: price });
        updateCart();
      });

      $("#resetCart").click(function() {
      resetCart();
      });

      $("#cartItems").on("click", ".removeItem", function() {
        var index = $(this).data("index");
        var price = cartItems[index].price;
        cartItems.splice(index, 1);
        totalPrice -= price;
        updateCart();
      });

      $("#checkoutForm").submit(function(event) {
        event.preventDefault();
        var paymentMethod = $("#paymentMethod").val();
        var deliveryArea = $("#deliveryArea").val();
        var alamatDetail = $("#alamatDetail").val();
        var data = {
          cartItems: cartItems,
          paymentMethod: paymentMethod,
          deliveryArea: deliveryArea,
          alamatdetail: alamatDetail
        };
      });
    });

    function updateCart() {
      $("#cartItems").empty();
      cartItems.forEach(function(item, index) {
        var row = '<tr><td>' + item.product + '</td><td>Rp.' + item.price + '</td><td><button class="btn btn-sm btn-danger removeItem" data-index="' + index + '">Hapus</button></td></tr>';
        $("#cartItems").append(row);
      });
      $("#totalPrice").text("Total Harga: Rp." + totalPrice);
    }

    function resetCart() {
      cartItems = [];
      totalPrice = 0;
      updateCart();
    }
  </script>
</body>
</html>
    </section>
	<center><footer>
	  <div class="container">
		<div class="footer-content">
		   <p class="footer-text">Hak Cipta &copy; 2023 KOREAN FOOD AND DRINK</p></div>
	  </div>
	</footer></center>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>