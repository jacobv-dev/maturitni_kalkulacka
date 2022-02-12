<!DOCTYPE html>
<html class="notranslate" translate="no" lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Maturitní kalkulačka</title>
  <meta name="google" content="notranslate" />
</head>

<style>
  <?php include 'styly.css'; ?>
</style>

<body>

  <div class="container">
    <form method="POST">

      <div class="radio_up">
        <label>
          <input type="radio" name="radio" value="cj" checked />
          <span>Český jazyk</span>
        </label>

        <label>
          <input type="radio" name="radio" value="aj" />
          <span>Anglický jazyk</span>
        </label>

        <label>
          <input type="radio" name="radio" value="jcj" />
          <span>Jiný cizí jazyk</span>
        </label>
      </div>

      <div class="input_middle">
        <label>
          <input type="number" name="pisemna" placeholder="BODY" required />
          <span>Písemná část</span>
        </label>

        <label>
          <input type="number" name="ustni" placeholder="BODY" required />
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

        if ($select == "cj") { // Načtení výsledku radio buttonu do "paměti"
          $predmet = "Čeština";
          $pisemna_cast_vaha = 30;
          $ustni_cast_vaha = 28;
        } else if ($select == "aj") {
          $predmet = "Angličtina";
          $pisemna_cast_vaha = 24;
          $ustni_cast_vaha = 18;
        } else if ($select == "jcj") {
          $predmet = "Jiný cízí jazyk";
          $pisemna_cast_vaha = 24;
          $ustni_cast_vaha = 36;
        };

        $pisemna_cast = $_POST["pisemna"]; // Načtení výsledku inputu do "paměti"
        $ustni_cast = $_POST["ustni"]; // Načtení výsledku inputu do "paměti"

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

        echo $predmet . "<br>" . "Písemná část " . $pisemna_cast . " bodů | " . "Ústní část " . $ustni_cast . " bodů<br>" . round($konecny_vysledek, 2) . " %" . " | známka " . $vysledna_znamka;
      };
      ?>
    </div>
  </div>

</body>

</html>