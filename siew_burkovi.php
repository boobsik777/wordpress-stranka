<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Siew buraka - AgroContractor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* ===== PREFIX: ac- ===== */

    .ac-body { font-family: "Poppins", sans-serif; }

    /* MENU */
    .ac-menu { display: inline-flex; align-items: center; background-color: #f0f7e8; border-radius: 40px; padding: 6px 12px; gap: 10px; }
    .ac-menu button { background: none; border: none; color: #6a7d2a; font-size: 14px; font-weight: 600; padding: 8px 16px; border-radius: 30px; cursor: pointer; transition: all 0.2s ease; display: flex; align-items: center; gap: 5px; }
    .ac-menu button.ac-active { background-color: #8ca63a; color: white; }
    .ac-menu button:hover { background-color: #b6c97c; color: white; }

    /* TRAKTORY */
    .ac-img-fluid.rounded-4.shadow-sm { width: 100%; height: 380px; object-fit: cover; border-radius: 12px; }
    .ac-set-card { background: #fff; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 30px; }
    .ac-h4 { color: #7ea92f; font-weight: 600; }
    .ac-info-bar { background-color: #f0f5f9; border-radius: 12px; }
    .ac-info-bar p { margin-bottom: 0; }
    .ac-info-bar p.ac-fw-bold { display: flex; flex-direction: column; align-items: flex-start; }
    .ac-info-bar span { margin-top: 4px; color: #7ea92f; font-weight: 700; font-size: 1.5rem; }

    /* LI + obrázok zarovnaný vpravo */
    .ac-list-unstyled li { position: relative; padding: 8px 0; border-bottom: 1px solid #ddd; cursor: pointer; }
    .ac-list-unstyled li:last-child { border-bottom: none; }
    .ac-list-unstyled li img.ac-icon { position: absolute; right: 0; top: 8px; width: 18px; height: 18px; transition: transform 0.3s ease; }
    .ac-list-unstyled li img.ac-icon.ac-active { transform: rotate(90deg); }

    /* Extra text rolls below */
    .ac-extra-text { max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; font-size: 14px; color: #555; padding: 0; margin-top: 4px; }
    .ac-extra-text.ac-show { max-height: 200px; padding: 5px 0; }

    /* Buttons */
    .ac-oval-btn, .ac-oval-btn2 { display: flex; align-items: center; justify-content: center; gap: 8px; border-radius: 50px; padding: 10px 25px; font-weight: 500; text-decoration: none; transition: all 0.3s ease; }
    .ac-oval-btn { background-color: #7ea92f; color: white; border: none; }
    .ac-oval-btn:hover { background-color: #678a25; color: white; }
    .ac-oval-btn2 { background-color: white; color: #7ea92f; border: 1px solid #7ea92f; }
    .ac-oval-btn2:hover { background-color: #678a25; color: white; border-color: #678a25; }
    .ac-oval-btn img, .ac-oval-btn2 img { height: 18px; width: 18px; }

    /* ARROWS */
    .ac-img-container { position: relative; display: inline-block; overflow: hidden; border-radius: 12px; }
    .ac-arrow-btn { position: absolute; bottom: 15px; width: 42px; height: 42px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.25); }
    .ac-arrow-btn:hover { background: rgba(255, 255, 255, 1); transform: scale(1.1); }
    .ac-arrow-btn img { width: 22px; height: 22px; }
    .ac-arrow-left { right: 65px; }
    .ac-arrow-right { right: 15px; }
    .ac-img-fade { opacity: 0; transition: opacity 0.4s ease; }
    .ac-tractor-img { transition: opacity 0.4s ease; }

    /* Sections */
    .ac-section-green { background-color: #7ea92f; color: white; padding: 60px 0; }
    .ac-section-blank { background-color: #7ea92f; color: white; padding: 60px 0; border: 1px solid white; }
    .ac-section-white { background-color: white; color: black; padding: 60px 0; }

    /* Modal custom style */
    .ac-modal-header { border-bottom: none; }
    .ac-modal-title { font-weight: 700; text-align: center; width: 100%; }
    .ac-modal-body label { font-weight: 600; }
    .ac-modal-body .form-check-label { font-weight: normal; }
    .ac-modal-body .btn-success { background-color: #7ea92f; border-color: #7ea92f; font-weight: 600; }
    .ac-modal-body .btn-success:hover { background-color: #678a25; border-color: #678a25; }
  </style>
</head>

<body class="ac-body">

<img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/group-8-2.png" alt="Banner" class="w-100">

<!-- ZESTAWY -->
<section class="container py-5">
  <!-- Zestaw 01 -->
  <div class="row align-items-center mb-4">
    <div class="col-md-6">
      <h4 class="ac-h4">Zestaw 01.</h4>
      <ul class="ac-list-unstyled mb-3">
        <li> Ciągnik JD 6R250 <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png" class="ac-icon"><div class="ac-extra-text">Dodatkowe informacje o ciągniku JD 6R250</div></li>
        <li> Agregat Czajkowskiego STK300 <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png" class="ac-icon"><div class="ac-extra-text">Dodatkowe informacje o agregacie STK300</div></li>
        <li> Siewnik Väderstad Tempo T <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png" class="ac-icon"><div class="ac-extra-text">Dodatkowe informacje o siewniku Tempo T</div></li>
      </ul>
    </div>
    <div class="col-md-6 text-center ac-img-container">
      <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1.png" class="ac-img-fluid rounded-4 shadow-sm ac-tractor-img" data-images='["https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1.png","https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1-1.png","https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1-2.png"]'>
      <div class="ac-arrow-btn ac-arrow-left"><img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-134.png"></div>
      <div class="ac-arrow-btn ac-arrow-right"><img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-135.png"></div>
    </div>
  </div>

  <div class="ac-info-bar d-flex flex-column flex-md-row justify-content-between align-items-center mt-3 p-3 rounded-4">
    <p class="ac-fw-bold mb-2 mb-md-0" style="color:#7ea92f">
      Przybliżona wydajność zestawu <br>
      <span>1 ha/h</span>
    </p>
    <div class="d-flex gap-2">
      <a href="tel:+48123456789" class="ac-oval-btn2">
        <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/vector-stroke-1.png"> +48 123 456 789
      </a>
      <a href="#" class="ac-oval-btn">Wybieram ten zestaw</a>
    </div>
  </div>

  <!-- Repeat Zestaw 02, Zestaw 03 similarly (omitted here for brevity) -->

</section>



<section class="container py-5">
  <!-- Zestaw 01 -->
  <div class="row align-items-center mb-4">
    <div class="col-md-6">
      <h4 class="ac-h4">Zestaw 01.</h4>
      <ul class="ac-list-unstyled mb-3">
        <li> Ciągnik JD 6R250 <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png" class="ac-icon"><div class="ac-extra-text">Dodatkowe informacje o ciągniku JD 6R250</div></li>
        <li> Agregat Czajkowskiego STK300 <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png" class="ac-icon"><div class="ac-extra-text">Dodatkowe informacje o agregacie STK300</div></li>
        <li> Siewnik Väderstad Tempo T <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png" class="ac-icon"><div class="ac-extra-text">Dodatkowe informacje o siewniku Tempo T</div></li>
      </ul>
    </div>
    <div class="col-md-6 text-center ac-img-container">
      <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1.png" class="ac-img-fluid rounded-4 shadow-sm ac-tractor-img" data-images='["https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1.png","https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1-1.png","https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1-2.png"]'>
      <div class="ac-arrow-btn ac-arrow-left"><img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-134.png"></div>
      <div class="ac-arrow-btn ac-arrow-right"><img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-135.png"></div>
    </div>
  </div>

  <div class="ac-info-bar d-flex flex-column flex-md-row justify-content-between align-items-center mt-3 p-3 rounded-4">
    <p class="ac-fw-bold mb-2 mb-md-0" style="color:#7ea92f">
      Przybliżona wydajność zestawu <br>
      <span>1 ha/h</span>
    </p>
    <div class="d-flex gap-2">
      <a href="tel:+48123456789" class="ac-oval-btn2">
        <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/vector-stroke-1.png"> +48 123 456 789
      </a>
      <a href="#" class="ac-oval-btn">Wybieram ten zestaw</a>
    </div>
  </div>

  <!-- Repeat Zestaw 02, Zestaw 03 similarly (omitted here for brevity) -->

</section>


<section class="container py-5">
  <!-- Zestaw 01 -->
  <div class="row align-items-center mb-4">
    <div class="col-md-6">
      <h4 class="ac-h4">Zestaw 01.</h4>
      <ul class="ac-list-unstyled mb-3">
        <li> Ciągnik JD 6R250 <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png" class="ac-icon"><div class="ac-extra-text">Dodatkowe informacje o ciągniku JD 6R250</div></li>
        <li> Agregat Czajkowskiego STK300 <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png" class="ac-icon"><div class="ac-extra-text">Dodatkowe informacje o agregacie STK300</div></li>
        <li> Siewnik Väderstad Tempo T <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11.png" class="ac-icon"><div class="ac-extra-text">Dodatkowe informacje o siewniku Tempo T</div></li>
      </ul>
    </div>
    <div class="col-md-6 text-center ac-img-container">
      <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1.png" class="ac-img-fluid rounded-4 shadow-sm ac-tractor-img" data-images='["https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1.png","https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1-1.png","https://group1422.wordpress.com/wp-content/uploads/2025/10/image-1-2.png"]'>
      <div class="ac-arrow-btn ac-arrow-left"><img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-134.png"></div>
      <div class="ac-arrow-btn ac-arrow-right"><img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-135.png"></div>
    </div>
  </div>

  <div class="ac-info-bar d-flex flex-column flex-md-row justify-content-between align-items-center mt-3 p-3 rounded-4">
    <p class="ac-fw-bold mb-2 mb-md-0" style="color:#7ea92f">
      Przybliżona wydajność zestawu <br>
      <span>1 ha/h</span>
    </p>
    <div class="d-flex gap-2">
      <a href="tel:+48123456789" class="ac-oval-btn2">
        <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/vector-stroke-1.png"> +48 123 456 789
      </a>
      <a href="#" class="ac-oval-btn">Wybieram ten zestaw</a>
    </div>
  </div>

  <!-- Repeat Zestaw 02, Zestaw 03 similarly (omitted here for brevity) -->

</section>
<div class="ac-set-card row align-items-center">
  <div class="col-md-6">
    <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/burak2-1.jpg" alt="Kukurica" class="ac-img-fluid">
  </div>
  <div class="col-md-6">
    <h2 class="fw-bold">Lorem ipsut dolor sit amet</h2>
    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <p class="text-muted">Nemo, beatae itaque excepturi nesciunt accusamus odit quisquam esse consequatur quos, voluptatem unde magni. Sed impedit unde repellat sunt, vitae cumque aspernatur!</p>
  </div>
</div>

<!-- Jak wynająć sekcia -->
<section class="ac-section-green text-center">
  <div class="container text-center mt-5">
    <div class="d-flex justify-content-between align-items-center mb-5">
      <h2 class="mb-5">Jak wynająć?</h2>
      <a href="tel:+48123456789" class="ac-oval-btn2">skontaktujte</a>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="container ac-section-blank rounded text-center">
          <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-38-2.png" alt="">
          <h4 class="text-white">01.Lorem</h4>
          <p>Wybierz interesujący Cię zestaw</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="container ac-section-blank rounded text-center">
          <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-38-1.png" alt="">
          <h4 class="text-white">02.Lorem</h4>
          <p>Skontaktuj się z nami przez formularz</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="container ac-section-blank rounded text-center">
          <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-38.png" alt="">
          <h4 class="text-white">03.Lorem</h4>
          <p>Ustal termin i rozpocznij pracę</p>
        </div>
      </div>
    </div>

    <!-- Menu -->
    <div class="col-md-5 mt-5">
      <div class="ac-menu">
        <button class="ac-active">Uprawa <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-11-1-1.png"></button>
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
          <div class="container ac-section-white rounded text-center">
            <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/group-4-1.png" alt="">
            <h4>01.</h4>
            <p>Wybierz interesujący Cię zestaw</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container ac-section-white rounded text-center">
            <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/group-4.png" alt="">
            <h4>02.</h4>
            <p>Skontaktuj się z nami przez formularz</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container ac-section-white rounded text-center">
            <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-5.png" alt="">
            <h4>03.</h4>
            <p>Ustal termin i rozpocznij pracę</p>
          </div>
        </div>
      </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="acChooseSetModal" tabindex="-1" aria-labelledby="acChooseSetModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content p-4">
      <div class="modal-header ac-modal-header">
        <h5 class="modal-title ac-modal-title" id="acChooseSetModalLabel">WYŠUJ ZAPYTANIE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body ac-modal-body">
        <h2 class="text-center mb-3" id="acModalSetTitle">Siew buraka, Zestaw 01</h2>
        <p class="text-center mb-3">Wypetnij ponižszy formularz, a nasz doradca skontaktujte sie z Toba i odpovie na pytanie</p>

        <label class="fw-bold mb-1">Twojw imie i nazwisko*</label>
        <input type="text" class="form-control mb-3" placeholder="Wpisz swoje imię i nazwisko">

        <div class="row mb-3">
          <div class="col">
            <label class="fw-bold mb-1">Twoj numer telefonu*</label>
            <input type="text" class="form-control" placeholder="Numer telefonu">
          </div>
          <div class="col">
            <label class="fw-bold mb-1">Twoj adres e-mail*</label>
            <input type="email" class="form-control" placeholder="Adres e-mail">
          </div>
        </div>

        <label class="fw-bold mb-1">Twoja wiadomasc*</label>
        <textarea class="form-control mb-3" rows="5" placeholder="Wpisz swoją wiadomość"></textarea>

        <div class="form-check mb-2">
          <input class="form-check-input" type="checkbox" value="" id="acCheck1">
          <label class="form-check-label" for="acCheck1">
            Wyrażam zgodę na przetwarzanie moich danych osobowych
          </label>
        </div>
        

        <button type="submit" class="btn btn-success w-100 py-3">Wy3lij zapytanie</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Expand / collapse details
  document.querySelectorAll('.ac-list-unstyled li img.ac-icon').forEach(icon => {
    icon.addEventListener('click', e => {
      e.stopPropagation();
      const extraText = icon.nextElementSibling;
      extraText.classList.toggle('ac-show');
      icon.classList.toggle('ac-active');
    });
  });

  // Smooth fade transition for tractors
  document.querySelectorAll('.ac-img-container').forEach(container => {
    const img = container.querySelector('.ac-tractor-img');
    const images = JSON.parse(img.dataset.images);
    let index = images.indexOf(img.src);

    function changeImage(newIndex) {
      img.classList.add('ac-img-fade');
      setTimeout(() => {
        img.src = images[newIndex];
        img.onload = () => img.classList.remove('ac-img-fade');
      }, 300);
    }

    container.querySelector('.ac-arrow-left').addEventListener('click', () => {
      index = (index - 1 + images.length) % images.length;
      changeImage(index);
    });

    container.querySelector('.ac-arrow-right').addEventListener('click', () => {
      index = (index + 1) % images.length;
      changeImage(index);
    });
  });

  // Dynamic modal trigger
  document.querySelectorAll('.ac-oval-btn').forEach((btn, idx) => {
    btn.setAttribute('data-bs-toggle', 'modal');
    btn.setAttribute('data-bs-target', '#acChooseSetModal');
    btn.addEventListener('click', () => {
      const setTitles = ['Zestaw 01', 'Zestaw 02', 'Zestaw 03'];
      const modalTitle = document.getElementById('acModalSetTitle');
      modalTitle.textContent = `Siew buraka, ${setTitles[idx]}`;
    });
  });
</script>

</body>
</html>




