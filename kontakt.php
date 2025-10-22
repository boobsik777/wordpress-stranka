<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-9">
        <meta name="viewport">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Footer</title>
        <style>
            input[type="checkbox"] {
                appearance: none;
                width: 23px;
                height: 18px;
                border: 2px solid #A0A7AD;
                border-radius: 5px;
                position: relative;
                display: inline-block;
                box-sizing: border-box;
            }
            input[type="checkbox"]:checked::after {
                content: '';
                position: absolute;
                left: 5px;
                top: 1px;
                width: 5px;
                height: 10px;
                border: solid #383B3F;
                border-width: 0 2px 2px 0;
                transform: rotate(45deg);
            }
        </style>
    </head>
    <body>
        <div class="container-fluid" style="background-color: #F0F5F9;">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <br><br><br><br><br>
                        <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/logo-1.png">
                        <br><br><br><br>
                            <div style="color: #60646A; font-size: 16px;">
                                <p>
                                    Magazynowa 2, 86-200 Chełmno
                                </p>
                                <p>
                                    +48 123 456 789
                                </p>
                                <p>
                                    kontakt@agrocontractor.pl
                                </p>
                            </div>
                        <br><br>
                        <p style="font-size: 12px; color: #383B3F;"><b>ODWIEDŹ NAS</b></p>
                        <br>
                        <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/vector.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/subtract-1.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/vector-1.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/vector-2.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/vector-3.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <br><br><br><br>
                        <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-63.png">
                    </div>
                    <div class="col-sm-6">
                        <div class="well" style="background-color: #fff;">
                            <h3 style="font-size: 22px;">Zainteresowała Cię nasza oferta?</h3>
                            <br>
                            <p style="font-size: 16px; color: #60646A;">
                                Wypełnij poniższy formularz, a nasz doradca skontaktuje się z Tobą i odpowie na pytania.
                            </p>
                            <br>
                            <form action="" method="post">
                                <!-- 1 -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p style="font-size: 12px; color: #383B3F;">Wybierz rodzaj usługi*</p>
                                        <select id="wybierz" name="wybierz" style="width: 100%; padding: 12px; font-size: 16px; height: 43px; border: 1px solid #A0A7AD; border-radius: 10px;">
                                            <option value="siew">Siew</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <p style="font-size: 12px; color: #383B3F;">Twoje imię i nazwisko*</p>
                                        <input type="text" id="imie" placeholder="Wpisz tutaj" name="imie" style="width: 100%; padding: 12px; font-size: 16px; height: 43px; border: 1px solid #A0A7AD; border-radius: 10px;">
                                    </div>
                                </div>
                                <br>
                                <!-- 2 -->
                                <div class="row">
                                    <div class="col-sm-6">
                                       <p style="font-size: 12px; color: #383B3F;">Twój numer telefonu*</p>
                                        <input type="text" id="telefon" placeholder="Wpisz tutaj" name="telefon" style="width: 100%; padding: 12px; font-size: 16px; height: 43px; border: 1px solid #A0A7AD;; border-radius: 10px;">
                                    </div>
                                    <div class="col-sm-6">
                                        <p style="font-size: 12px; color: #383B3F;">Twój adres e-mail*</p>
                                        <input type="email" id="email" placeholder="Wpisz tutaj" name="email" style="width: 100%; padding: 12px; font-size: 16px; height: 43px; border: 1px solid #A0A7AD; border-radius: 10px;">
                                    </div>
                                </div>
                                <br>
                                <p style="font-size: 12px; color: #383B3F;">Twoja wiadomość*</p>
                                <textarea class="form-control" rows="5" id="comment" placeholder="Wpisz tutaj" style="width: 100%; resize: none; font-size: 16px; box-shadow: none; border-color: #A0A7AD; border-radius: 10px;"></textarea>
                                <br>
                                <div style="display: flex; align-items: flex-start; gap: 10px; font-size: 12px; color: #383B3F;">
                                    <input type="checkbox" name="checkbox">
                                    <div style="color: #383B3F; font-size: 12px;">
                                        Oświadczam, że zapoznałem się z treścią polityki prywatności
                                        i akceptuję zasady przetwarzania moich danych osobowych*
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-light" style="background-color: #809A1B; color: #fff; width: 100%; border-radius: 50px; font-size: 16px;">Wyślij zapytanie</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>