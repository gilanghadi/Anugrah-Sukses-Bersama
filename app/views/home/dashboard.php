<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="Ekpor Spices. -Anugrah Sukses Bersama">
  <meta name="description" content="Menjual Arang">
  <meta name="keywords" content="asb,ASB,anugrah sukses bersama, Anugrah Sukses Bersama, anugrah, Anugrah, jual arang, ekspor spices, ekspor charcoal, ">
  <meta name="author" content="Anugrah Sukses Bersama">
  <link rel="shortcut icon" href="<?= BASEURL ?>/public/img/logo.png" />

  <meta property="og:image" content="<?= BASEURL; ?>/public/img/logo.jpeg">
  <meta property="og:title" content="PT. Anugrah Sukses Bersama">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">

  <link rel="stylesheet" href="<?= BASEURL; ?>/public/css/bootstrap.min.css" crossorigin="anonymous" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="<?= BASEURL; ?>/public/css/main.css">

  <style>
    #founder {
      position: relative;
    }

    #founder::before:hover {
      content: ' ';
      background-color: gray !important;
      position: absolute;

    }
  </style>

  <title>PT. Alhadi Sukses Bersama</title>
</head>

<body>
  <?php
  require_once "app/views/inc/navbar.php";
  require_once "hero/index.php";
  require_once "banner/index.php";
  require_once "about/index.php";
  require_once "whatwedo/index.php";
  require_once "products/index.php";
  require_once "galery/index.php";
  require_once "support/index.php";
  require_once "founder/index.php";
  require_once "contact/index.php";
  require_once "app/views/inc/footer.php";
  ?>
  <script src="<?= BASEURL; ?>/public/js/bootstrap.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="<?= BASEURL; ?>/public/js/whatsapp.js"></script>
  <!-- <script type="text/javascript">
    const nav = document.querySelector('#navbar')
    let navtop = nav.getBoundingClientRect().top

    window.addEventListener('scroll', function() {
      let scroll = window.scrollY
      if (scroll > navtop) {
        navbar.classList.remove('bg-transparent')
        navbar.classList.add('bg-white')
        navbar.classList.add('shadow')
      } else {
        navbar.classList.remove('bg-white')
        navbar.classList.remove('shadow')
        navbar.classList.add('bg-transparent')
      }
    })
  </script> -->
</body>

</html>