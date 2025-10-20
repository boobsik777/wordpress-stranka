<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Siew buraka - AgroContractor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body { font-family: "Poppins", sans-serif; }

    /* MENU */
    .menu { display: inline-flex; align-items: center; background-color: #f0f7e8; border-radius: 40px; padding: 6px 12px; gap: 10px; }
    .menu button { background: none; border: none; color: #6a7d2a; font-size: 14px; font-weight: 600; padding: 8px 16px; border-radius: 30px; cursor: pointer; transition: all 0.2s ease; display: flex; align-items: center; gap: 5px; }
    .menu button.active { background-color: #8ca63a; color: white; }
    .menu button:hover { background-color: #b6c97c; color: white; }

    /* TRAKTORY */
    .img-fluid.rounded-4.shadow-sm { width: 100%; height: 380px; object-fit: cover; border-radius: 12px; }
    .set-card { background: #fff; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 30px; }
    h4 { color: #7ea92f; font-weight: 600; }
    .info-bar { background-color: #f0f5f9; border-radius: 12px; }
    .info-bar p { margin-bottom: 0; }
    .info-bar p.fw-bold { display: flex; flex-direction: column; align-items: flex-start; }
    .info-bar h4 { margin: 0; color: #7ea92f; font-weight: 700; }

    /* LI + obrázok zarovnaný vpravo */
    .list-unstyled li {
      position: relative;
      padding: 8px 0;
      border-bottom: 1px solid #ddd;
      cursor: pointer;
    }
    .list-unstyled li:last-child { border-bottom: none; }

    .list-unstyled li span.text {
      display: inline-block;
      width: calc(100% - 30px);
    }

    .list-unstyled li img.icon {
      position: absolute;
      right: 0;
      top: 8px;
      width: 18px;
      height: 18px;
      transition: transform 0.3s ease;
    }

    .list-unstyled li img.icon.active { transform: rotate(90deg); }

    /* Extra text rolls below */
    .extra-text {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease, padding 0.4s ease;
      font-size: 14px;
      color: #555;
      padding: 0;
      margin-top: 4px;
    }

    .extra-text.show {
      max-height: 200px;
      padding: 5px 0;
    }

    /* Buttons */
    .oval-btn, .oval-btn2 { display: flex; align-items: center; justify-content: center; gap: 8px; border-radius: 50px; padding: 10px 25px; font-weight: 500; text-decoration: none; transition: all 0.3s ease; }
    .oval-btn { background-color: #7ea92f; color: white; border: none; }
    .oval-btn:hover { background-color: #678a25; color: white; }
    .oval-btn2 { background-color: white; color: #7ea92f; border: 1px solid #7ea92f; }
    .oval-btn2:hover { background-color: #678a25; color: white; border-color: #678a25; }
    .oval-btn img, .oval-btn2 img { height: 18px; width: 18px; }

    .section-green { background-color: #7ea92f; color: white; padding: 60px 0; }
    .section-blank { background-color: #7ea92f; color: white; padding: 60px 0; border: 1px solid white; }
    .section-white { background-color: white; color: black; padding: 60px 0; }
   .img-container {
  position: relative;
  display: inline-block;
  overflow: hidden;
  border-radius: 12px;
}

.arrow-btn {
  position: absolute;
  bottom: 15px;
  width: 42px;
  height: 42px;
  background: rgba(255, 255, 255, 0.85);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.25);
}

.arrow-btn:hover {
  background: rgba(255, 255, 255, 1);
  transform: scale(1.1);
}

.arrow-btn img {
  width: 22px;
  height: 22px;
}

.arrow-left {
  right: 65px;
}

.arrow-right {
  right: 15px;
}

/* smooth fade animation for image transitions */
.img-fade {
  opacity: 0;
  transition: opacity 0.4s ease;
}

.tractor-img {
  transition: opacity 0.4s ease;
}
  </style>
</head>

<body>

<img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/group-8-2.png" alt="Banner" class="w-100">

<!-- ZESTAWY -->
 <section class="container py-5">
    <!-- Zestaw 01 -->
    <div class="row align-items-center mb-4">
      <div class="col-md-6">
        <h4>Zestaw 01.</h4>
        <ul class="list-unstyled mb-3">
          <li> Ciągnik JD 6R250 <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png" class="icon"><div class="extra-text">Dodatkowe informacje o ciągniku JD 6R250</div></li>
          <li> Agregat Czajkowskiego STK300 <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png" class="icon"><div class="extra-text">Dodatkowe informacje o agregacie STK300</div></li>
          <li> Siewnik Väderstad Tempo T <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png" class="icon"><div class="extra-text">Dodatkowe informacje o siewniku Tempo T</div></li>
        </ul>
      </div>
      <div class="col-md-6 text-center img-container">
        <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1.png" class="img-fluid rounded-4 shadow-sm tractor-img" data-images='["https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1.png","https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1-1.png","https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1-2.png"]'>
        <div class="arrow-btn arrow-left"><img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-134.png"></div>
        <div class="arrow-btn arrow-right"><img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-135.png"></div>
      </div>
    </div>

    <!-- Zestaw 02 -->
    <div class="row align-items-center mb-4">
      <div class="col-md-6">
        <h4>Zestaw 02.</h4>
        <ul class="list-unstyled mb-3">
          <li> Ciągnik JD 6R250 <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png" class="icon"><div class="extra-text">Dodatkowe informacje o ciągniku JD 6R250</div></li>
          <li> Siewnik Väderstad Tempo L <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png" class="icon"><div class="extra-text">Dodatkowe informacje o siewniku Tempo L</div></li>
        </ul>
      </div>
      <div class="col-md-6 text-center img-container">
        <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1-1.png" class="img-fluid rounded-4 shadow-sm tractor-img" data-images='["https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1.png","https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1-1.png","https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1-2.png"]'>
        <div class="arrow-btn arrow-left"><img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-134.png"></div>
        <div class="arrow-btn arrow-right"><img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-135.png"></div>
      </div>
    </div>

    <!-- Zestaw 03 -->
    <div class="row align-items-center mb-4">
      <div class="col-md-6">
        <h4>Zestaw 03.</h4>
        <ul class="list-unstyled mb-3">
          <li> Ciągnik JD 7R310 <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png" class="icon"><div class="extra-text">Dodatkowe informacje o ciągniku JD 7R310</div></li>
          <li> Siewnik Väderstad Tempo L <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png" class="icon"><div class="extra-text">Dodatkowe informacje o siewniku Tempo L</div></li>
        </ul>
      </div>
      <div class="col-md-6 text-center img-container">
        <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1-2.png" class="img-fluid rounded-4 shadow-sm tractor-img" data-images='["https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1.png","https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1-1.png","https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1-2.png"]'>
        <div class="arrow-btn arrow-left"><img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-134.png"></div>
        <div class="arrow-btn arrow-right"><img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-135.png"></div>
      </div>
    </div>
  </section>

<!-- NEZMENENÁ ČASŤ -->
<div class="set-card row align-items-center">
  <div class="col-md-6">
    <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/burak2-1.jpg" alt="Kukurica" class="img-fluid">
  </div>
  <div class="col-md-6">
    <h2 class="fw-bold">Lorem ipsut dolor sit amet</h2>
    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <p class="text-muted">Nemo, beatae itaque excepturi nesciunt accusamus odit quisquam esse consequatur quos, voluptatem unde magni. Sed impedit unde repellat sunt, vitae cumque aspernatur!</p>
  </div>
</div>

<!-- Jak wynająć sekcia (nezmenená) -->
<section class="section-green text-center">
  <!-- tvoja sekcia tu pokračuje -->
   <div class="container text-center mt-5">
<div class="d-flex justify-content-between align-items-center mb-5">


    <h2 class="mb-5">Jak wynająć?</h2>
            
            <a href="tel:+48123456789" class="oval-btn2">
              skontaktujte
            </a>
          
        

</div>

    <div class="row">
      <div class="col-md-4">
        <div class="container section-blank rounded">
          <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-38-2.png" alt="">
          <h4 class="text-white">01.</h4>
          <p>Wybierz interesujący Cię zestaw</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="container section-blank rounded "> 
          <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-38-1.png" alt="">
          <h4 class="text-white">02.</h4>
          <p>Skontaktuj się z nami przez formularz</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="container section-blank rounded">
          <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-38.png" alt="">
          <h4 class="text-white">03.</h4>
          <p>Ustal termin i rozpocznij pracę</p>
        </div>
      </div>
    </div>
</div>
<br>
<br>
<div class="col-md-5">
    <div class="menu">
                    <button class="active">Uprawa <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11-1-1.png"></button>
                    <button>Siew <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png"></button>
                    <button>Zbiór <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png"></button>
                    <button>Inne <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png"></button>
                </div>
</div>
<div class="container text-center mt-5">
<div style="text-align: left;">
    <h2 class="mb-5">Sprawdź także</h2>
</div>
    <div class="row">
      <div class="col-md-4">
        <div class="container section-white rounded">
          <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/group-4-1.png" alt="">
          <h4>01.</h4>
          <p>Wybierz interesujący Cię zestaw</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="container section-white rounded "> 
          <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/group-4.png" alt="">
          <h4>02.</h4>
          <p>Skontaktuj się z nami przez formularz</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="container section-white rounded">
          <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-5.png" alt="">
          <h4>03.</h4>
          <p>Ustal termin i rozpocznij pracę</p>
        </div>
      </div>
    </div>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Expand / collapse details
  document.querySelectorAll('.list-unstyled li img.icon').forEach(icon => {
    icon.addEventListener('click', (e) => {
      e.stopPropagation();
      const extraText = icon.nextElementSibling;
      extraText.classList.toggle('show');
      icon.classList.toggle('active');
    });
  });

  // Smooth fade transition for tractors
  document.querySelectorAll('.img-container').forEach(container => {
    const img = container.querySelector('.tractor-img');
    const images = JSON.parse(img.dataset.images);
    let index = images.indexOf(img.src);

    function changeImage(newIndex) {
      img.classList.add('img-fade');
      setTimeout(() => {
        img.src = images[newIndex];
        img.onload = () => img.classList.remove('img-fade');
      }, 300);
    }

    container.querySelector('.arrow-left').addEventListener('click', () => {
      index = (index - 1 + images.length) % images.length;
      changeImage(index);
    });

    container.querySelector('.arrow-right').addEventListener('click', () => {
      index = (index + 1) % images.length;
      changeImage(index);
    });
  });
</script>
</body>
</html>
