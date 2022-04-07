<!DOCTYPE html>
<html class="notranslate" translate="no" lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Maturitní kalkulačka</title>
  <meta name="google" content="notranslate" />
  <script src="jquery-3.6.0.min.js"></script>
  <script src="app.js"></script>
</head>

<style>
  <?php include 'styly.css'; ?>
</style>

<body>

  <div class="container">
    <form method="POST">

      <div class="radio_up">
        <label>
          <input type="radio" name="radio" id="jazyk" value="cj" checked />
          <span>Český jazyk</span>
        </label>

        <label>
          <input type="radio" name="radio" id="jazyk1" value="aj" />
          <span>Anglický jazyk</span>
        </label>

        <label>
          <input type="radio" name="radio" id="jazyk2" value="jcj" />
          <span>Jiný cizí jazyk</span>
        </label>
      </div>

      <div class="input_middle">
        <label>
          <input type="number" id="pis" name="pisemna" placeholder="BODY" min="0" max="30" required />
          <span>Písemná část</span>
        </label>

        <label>
          <input type="number" id="ust" name="ustni" placeholder="BODY" min="0" max="36" required />
          <span>Ústní část</span>
        </label>
      </div>

      <div class="submit_bottom">
        <input type="submit" value="Vypočítat" name="submit">
      </div>

    </form>

    <div class="answer">
      <?php
      if (isset($_POST['submit'])) {

        $select = $_POST["radio"];

        if ($select == "cj") { // Načtení výsledku radio buttonu
          $predmet = "Čeština";
          $pisemna_cast_vaha = 30;
          $ustni_cast_vaha = 28;
        } else if ($select == "aj") {
          $predmet = "Angličtina";
          $pisemna_cast_vaha = 24;
          $ustni_cast_vaha = 18;
        } else if ($select == "jcj") {
          $predmet = "Jiný cizí jazyk";
          $pisemna_cast_vaha = 24;
          $ustni_cast_vaha = 36;
        };

        $pisemna_cast = $_POST["pisemna"]; // Načtení výsledku inputu
        $ustni_cast = $_POST["ustni"]; // Načtení výsledku inputu

        $konecny_vysledek = (($pisemna_cast / $pisemna_cast_vaha) * 40) + (($ustni_cast / $ustni_cast_vaha) * 60); // Výsledek v % po celém výpočtu

        // Přepočet na výslednou známku

        if ($konecny_vysledek > 87) {
          $vysledna_znamka = 1;
        } else if ($konecny_vysledek > 74 && $konecny_vysledek <= 87) {
          $vysledna_znamka = 2;
        } else if ($konecny_vysledek > 59 && $konecny_vysledek <= 74) {
          $vysledna_znamka = 3;
        } else if ($konecny_vysledek >= 44 && $konecny_vysledek <= 59) {
          $vysledna_znamka = 4;
        } else if ($konecny_vysledek < 44) {
          $vysledna_znamka = 5;
        }

        echo $predmet . "<br>" . "Pís. " . $pisemna_cast . " bodů | " . "Úst. " . $ustni_cast . " bodů<br>" . "<p>" . number_format($konecny_vysledek, 2, ',', ' ') . " %" . "&nbsp;&nbsp;&nbsp;&nbsp; známka " . $vysledna_znamka ."</p>"  ;
      };
      ?>
    </div>

    <p style="position: absolute; bottom: 0; left: 0; text-align: center; width: 100%; margin: .75rem 0; font-size: .75rem;">&copy; Jakub Vorel, Robert Hlad, Tomáš Foltyn | <a style="color: inherit;" href="kalkulacka.xlsx" target="_blank">Excel kalkulačka ke stažení</a></p>
  </div>

</body>

</html>