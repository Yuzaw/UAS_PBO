<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CakeCrown</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="icon.png" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <header class="header" data-header>
    <div class="container">
      
      <div class="overlay" data-overlay></div>
      <a href="#" class="logo">
        <img src="logo.png" alt="Casmart logo" width="131" height="31">
      </a>
      <div class="header-actions"></div>
      <div class="header-actions">
        <a href="/login" class="header-action-btn">
          <ion-icon name="person-outline"></ion-icon>
          <p class="header-action-label">Login</p>
        </a>
      </div>

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
          <li>
            <a href="#home" class="navbar-link"><i class="navbar-icon fa-solid fa-house"></i>Home</a>
          </li>
          
          <li>
            <a href="#category" class="navbar-link"><i class="fa-solid fa-layer-group"></i>Category</a>
          </li>

          <li>
            <a href="#product" class="navbar-link"><i class="navbar-icon fa-solid fa-bag-shopping"></i>Product</a>
          </li>

          <li>
            <a href="#contact" class="navbar-link"><i class="navbar-icon fa-solid fa-phone"></i>Contact</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home" style="background-image: url(https://images5.alphacoders.com/983/thumb-1920-983077.jpg)">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Sweet Perfection</p>

            <h2 class="h1 hero-title">Delicious Homemade Cakes Just for You!</h2>

          </div>

        </div>
      </section>

      <!-- 
        - #CATEGORY
      -->

      <section class="section category" id="category">
        <div class="container">

          <ul class="category-list">

            <li class="category-item">
              <figure class="category-banner">
                <img src="https://cupcakesjakarta.com/wp-content/uploads/2023/10/kue-ulang-tahun-2-tingkat-coklat.jpg" alt="Kue ulang tahun" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#firstproduct" class="btn btn-secondary">Kue ulang tahun</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="https://i0.wp.com/resepkoki.id/wp-content/uploads/2020/08/Resep-Bolu-Mentega.jpg?fit=1070%2C1048&ssl=1" alt="Kue bolu" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#secondproduct" class="btn btn-secondary">Kue bolu</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="https://www.femina.co.id/images/images_article/007_003_323_pic.jpg" alt="Roti dan donat" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#thirdproduct" class="btn btn-secondary">Roti dan donat</a>
            </li>
          </div>
      </section>


      <!-- 
        - #PRODUCT
      -->
      <section class="details" id="product">
        <div class="contant" id="firstproduct">
          <h3 class="title"> Kue ulang tahun </h3>
          <div class="products-contant">
            {{-- <ul class="list-detail"> --}}
              @foreach($firstProducts as $firstProduct)
              <div class="card">
                <a href="/{{$firstProduct->id}}/detail">
                  <div class="product" data-name="{{$firstProduct->id}}">
                    <img src="{{$firstProduct->img}}" alt="">
                    <h3>{{$firstProduct->produk}}</h3>
                    <div class="price">Rp. {{$firstProduct->harga}}</div>
                  </div>
                </a>
              </div>
              @endforeach
            {{-- </ul> --}}
          </div>
        </div>
      </section>
      <section class="details" id="secondproduct">
        <div class="contant">
          <h3 class="title"> Kue bolu </h3>
          <div class="products-contant">
            {{-- <ul class="list-detail"> --}}
              @foreach($secondProducts as $secondProducts)
              <div class="card">
                <a href="/{{$secondProducts->id}}/detail">
                  <div class="product" data-name="{{$secondProducts->id}}">
                    <img src="{{$secondProducts->img}}" alt="">
                    <h3>{{$secondProducts->produk}}</h3>
                    <div class="price">Rp. {{$secondProducts->harga}}</div>
                  </div>
                </a>
              </div>
              @endforeach
            {{-- </ul> --}}
          </div>
        </div>
      </section>
      <section class="details" id="thirdproduct">
        <div class="contant">
          <h3 class="title"> Roti dan donat </h3>
          <div class="products-contant">
            {{-- <ul class="list-detail"> --}}
              @foreach($thirdProducts as $thirdProducts)
              <div class="card">
                <a href="/{{$thirdProducts->id}}/detail">
                  <div class="product" data-name="{{$thirdProducts->id}}">
                    <img src="{{$thirdProducts->img}}" alt="">
                    <h3>{{$thirdProducts->produk}}</h3>
                    <div class="price">Rp. {{$thirdProducts->harga}}</div>
                  </div>
                </a>
              </div>
              @endforeach
            {{-- </ul> --}}
          </div>
        </div>
      </section>
      

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <a>Quantum Qomputers</a>
 
          </a>

          <p class="footer-text">
            menjadi destinasi utama untuk semua kebutuhan komputasi Anda. Temukan berbagai jenis mouse, keyboard, dan headset untuk meningkatkan pengalaman gaming Anda. Jelajahi pilihan headset audio berkualitas tinggi untuk meningkatkan kenyamanan dan kualitas suara saat bekerja atau bersantai.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

          </ul>

        </div>
      </div>
    </div>

    <div class="footer-bottom" id="contact">
      <div class="container">

        <p class="copyright">
          &copy; 2023 <a href="#">Quantum Qomputers</a>. 
        </p>

        <ul class="footer-bottom-list">
          <li>
            <a href="#" class="footer-bottom-link">Terms & Conditions</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Location</a>
          </li>

        </ul>


  </footer>

  <!-- 
    - custom js link
  -->
  <script src="/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
