<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout - CakeCrown</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="/icon.png" type="image/svg+xml">

  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- custom css link -->
  <link rel="stylesheet" href="/css/detail.css">
  <link rel="stylesheet" href="/css/checkout.css">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <header class="header" data-header>
    <div class="container">
      <div class="overlay" data-overlay></div>
      <a href="/" class="logo">
        <img src="/logo.png" alt="Casmart logo" width="131" height="31">
      </a>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="navbar" data-navbar>
        <div class="navbar-top">
          <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>
        <ul class="navbar-list">
          <li><a href="/#home" class="navbar-link"><i class="navbar-icon fa-solid fa-house"></i>Home</a></li>
          <li><a href="/#category" class="navbar-link"><i class="fa-solid fa-layer-group"></i>Category</a></li>
          <li><a href="/#product" class="navbar-link"><i class="navbar-icon fa-solid fa-bag-shopping"></i>Product</a></li>
          <li><a href="/#contact" class="navbar-link"><i class="navbar-icon fa-solid fa-phone"></i>Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
  <main class="checkout">
    <div class="container-checkout">
      <h1 class="my-4">Checkout</h1>
      <div class="product-list">
        <div class="product-item d-flex mb-4">
          <div class="product-details">
            <h5 class="">{{$product->produk}}</h5>
            <p class="">{{$product->deskripsi}}</p>
            <p class="">Rp. {{$product->harga}}</p>
          </div>
          <img src="{{$product->img}}" alt="Product 1" class="product-image me-3" style="width: 100px; height: 100px;">
        </div>
      </div>
      <form action="/process-checkout" method="POST" class="checkout-form">
        <div class="mb-3">
          <label for="name" class="form-label">Nama Lengkap</label>
          <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Alamat</label>
        </div>
        <div>
          <textarea id="address" name="address" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Nomor Telepon</label>
          <input type="tel" id="phone" name="phone" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="payment-method" class="form-label">Metode Pembayaran</label>
          <select id="payment-method" name="payment_method" class="form-select" required>
            <option value="credit_card">Kartu Kredit</option>
            <option value="bank_transfer">Transfer Bank</option>
            <option value="paypal">PayPal</option>
          </select>
        </div>
        <div class="mb-3">
          <a href="/" type="submit" class="btn btn-primary">Bayar Sekarang</a>
        </div>
      </form>
    </div>
  </main>

  <footer class="footer bg-dark text-white mt-5">
    <div class="footer-top py-4">
      <div class="container">
        <div class="footer-brand">
          <a href="#" class="logo text-white">
            <a>Description</a>
          </a>
          <p class="footer-text">
            menjadi destinasi utama untuk semua kebutuhan komputasi Anda. Temukan berbagai jenis mouse, keyboard, dan headset untuk meningkatkan pengalaman gaming Anda. Jelajahi pilihan headset audio berkualitas tinggi untuk meningkatkan kenyamanan dan kualitas suara saat bekerja atau bersantai.
          </p>
          <ul class="social-list list-inline">
            <li class="list-inline-item"><a href="#" class="social-link"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><ion-icon name="logo-pinterest"></ion-icon></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom py-3">
      <div class="container">
        <p class="mb-0">
          &copy; 2023 <a href="#" class="text-white">Quantum Qomputers</a>.
        </p>
        <ul class="footer-bottom-list list-inline mb-0">
          <li class="list-inline-item"><a href="#" class="footer-bottom-link text-white">Terms & Conditions</a></li>
          <li class="list-inline-item"><a href="#" class="footer-bottom-link text-white">Location</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

  <!-- custom js link -->
  <script src="/js/script.js"></script>

  <!-- ionicon link -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
