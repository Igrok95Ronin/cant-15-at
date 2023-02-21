<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Badsanierung '));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>


    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <div class="header__box">
                        <div class="header__left">
                            <img class="header__img" src="assets/img/header.jpeg" alt="header" >
                        </div>
                        <div class="header__right">
                            <h1 class="header__title"><?= $title ?> </h1>
                            <ul class="header__ul">
                                <li>Badsanierung in kurzer Zeit</li>
                                <li>Kostenlose Besichtigung</li>
                                <li>Kostenvoranschlag in 1 Tag</li>
                            </ul>
                            <p class="notList">✓Schnell ✓Günstig ✓Geprüft</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
    <main class="main">
         <section class="blueBlock">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="blueBlock__box">
                            <div></div>
                            <div class="batWrapper">
                                <a class="blueBlock__btn" href="<?= $phone_href ?>"><span><?= $phone_name ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='mainBlock'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='mainBlock__box'>
                            <div class="mainBlock__left">

                                <h2 class="mainBlock__title1">Badsanierung in <?= ($city == '' ? 'Ihrer Nähe' : $city) ?> </h2>
                                <p class="mainBlock__txt1">Sie suchen eine schnelle und günstige <b> Badsanierung in <?= ($city == '' ? 'Ihrer Nähe' : $city) ?>? </b> Dann sind Sie bei uns genau richtig! Wir bieten professionelle <b>Badsanierungen</b> mit kurzen Wartezeiten und fairen Preisen. Kontaktieren Sie uns noch heute und lassen Sie sich von unseren Experten beraten.</p>

                                <div class="mainBlock__wrapper2">
                                    <h2 class="mainBlock__title2">Badsanierung – Ihr neues Bad in nur 1 Woche</h2>
                                    <p class="mainBlock__txt2">Wir bieten schnelle und professionelle<b> Badrenovierungen</b> innerhalb einer Woche. Gönnen Sie sich ein neues Wohlfühlbad.</p>
                                </div>

                                <img class="mainBlock__img1" src="assets/img/Bad5___serialized2.jpg" alt="Bad5___serialized2">

                                <h2 class="mainBlock__title3">Badsanierung – einfach und kostengünstig</h2>
                                <p class="mainBlock__txt3">Mit einer <b>Badsanierung</b> können Sie Ihr Badezimmer einfach und kostengünstig auf den neuesten Stand bringen. Ob eine <b>neue</b> <b>Duschkabine</b>, ein moderner Waschtisch oder eine neue Fliesenoptik - es gibt viele Möglichkeiten, um Ihr Bad zu <b>renovieren</b>. Dabei kann auch eine kleine Veränderung schon große Wirkung erzielen. Lassen Sie sich von Fachleuten beraten und machen Sie Ihr Bad zu einer Wohlfühloase.</p>

                                <img class="mainBlock__img2" src="assets/img/Badumbau.jpeg" alt="Badumbau">

                                <h2 class="mainBlock__title4">Fliesenleger für Ihre Badsanierung <?= $city ?></h2>
                                <p class="mainBlock__txt4">Sie suchen einen <b> Fliesenleger in <?= ($city == '' ? 'Ihrer Nähe' : $city) ?> für Ihre Badsanierung</b>? Dann sind Sie bei uns genau richtig! Unsere erfahrenen Handwerker übernehmen die professionelle Verlegung von Fliesen und sorgen so für ein perfektes Ergebnis. Kontaktieren Sie uns jetzt und erhalten Sie ein individuelles Angebot!</p>

                                <h2 class="mainBlock__title5">Badsanierung Bilder Vorher und Nachher</h2>
                                <p class="mainBlock__txt5">Eine <b>Badsanierung</b> kann Wunder bewirken und das Resultat lässt sich am besten anhand von Vorher-Nachher Bildern beurteilen. Durch die Modernisierung des Bades kann ein völlig neues Raumgefühl entstehen und das Ambiente in Ihrem Zuhause auf ein neues Level gehoben werden. Überzeugen Sie sich selbst von der Verwandlungskraft einer professionellen Badsanierung anhand unserer beeindruckenden Vorher-Nachher Bilder.</p>

                            </div>

                            <div class="mainBlock__right">

                                <div class="mainBlock__wrapper">
                                    <img class="mainBlock__img2_1" src="assets/img/ss4.jpg" alt="ss4">
                                    <p class="mainBlock__dol">✓ Fliesenleger</p>
                                    <p class="mainBlock__name">Herr Steiner</p>
                                    <div class="mainBlock__inner">
                                        <p class="mainBlock__options">Unser Fliesenleger Herr Steiner: Kompetenz und Erfahrung für perfekte Fliesenarbeiten.</p>
                                    </div>
                                </div>
                                <div class="mainBlock__wrapper">
                                    <img class="mainBlock__img2_1" src="assets/img/ss1.jpg" alt="ss1">
                                    <p class="mainBlock__dol">✓ Sanitärtechniker</p>
                                    <p class="mainBlock__name">Herr Pichler</p>
                                    <div class="mainBlock__inner">
                                        <p class="mainBlock__options">Unser Sanitärtechniker Herr Pichler - Ihr kompetenter Ansprechpartner für alle sanitärtechnischen Fragen und Probleme.</p>
                                    </div>
                                </div>
                                <div class="mainBlock__wrapper">
                                    <img class="mainBlock__img2_1" src="assets/img/bad6.jpg" alt="ss1">
                                    <p class="mainBlock__about">So bewertet uns:</p>
                                    <div class="mainBlock__inner">
                                        <p class="mainBlock__options">Die Sanierung meines Bades war sehr gut. Der Kundendienst war sehr freundlich und hilfsbereit, und die Arbeiten wurden zu einem vernünftigen Preis schnell und sauber ausgeführt. Ich bin mit dem Ergebnis sehr zufrieden!</p>
                                        <p class="mainBlock__star">⭐️⭐️⭐️⭐️⭐️</p>
                                        <p class="mainBlock__name">- Frau Schmidt</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='gallery'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='gallery__box'>
                            <img class="gallery__img" src="assets/img/vor1.jpeg" alt="">
                            <img class="gallery__img" src="assets/img/vor2___serialized2.jpg" alt="">
                            <img class="gallery__img" src="assets/img/vor3.jpeg" alt="">
                            <img class="gallery__img" src="assets/img/vor4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='forms'>
           <div class='forms__wrapper'>
              <div class='container-fluid'>
                 <div class='row'>
                    <div class='col-12 container'>
                       <div class='forms__box'>
                          <h2 class='forms__title'>Kontaktiere uns:</h2>
                          <form id='jq_form' class='mb-0 mt-3'>
                             <div class='my-0'>
                                <input class='form-control' placeholder='Name' name='jq_name' type='text'>
                                <div id='jq_name' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='Telefonnummer' name='jq_phone' type='text'>
                                <div id='jq_phone' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='Straße' name='jq_street' type='text'>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='Postleitzahl/Stadt' name='jq_city' type='text'>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='E-mail' name='jq_email' type='text'>
                             </div>
                             <div class='my-4'>
                                <textarea rows='3' class='form-control' name='jq_text' placeholder='Bericht'></textarea>
                                <div id='jq_text' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div>
                                <input class='btn  text-uppercase fw-bold mb-0 px-3 py-2 forms__button' type='submit' id='jq_submit' value='Senden'>
                             </div>
                             <div id='jq_success' style='display:none'>Danke für deine Nachricht. Sie hat Gesendet.</div>
                          </form>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        <section class="fixed">
            <a class="fixed__btn" href="<?= $phone_href ?>"><span><?= $phone_name ?></span></a>
        </section>
    </main>

    <!--Style-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <script src="assets/js/main.min.js"></script>
</body>

</html>