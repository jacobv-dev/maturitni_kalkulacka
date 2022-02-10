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

  <form method="post" action="#forms">

    <div class="horni_vyber">
      <label><input type="radio" name="radioset" />Čeština</label>
      <label><input type="radio" name="radioset" />Angličtina</label>
      <label><input type="radio" name="radioset" />Jiný cizí jazyk</label>
    </div>

    <br>

    <div class="spodni_vyber">
      <label><input type="number" placeholder="Body z písemné části" name="cm" required />Písemná část</label>

      <label><input type="number" placeholder="Body z ústní části" name="kg" required />Ústní část</label>
    </div>

    <br>

    <input class="ok" type="submit" value="Spočítat" />
  </form>
</body>

</html>