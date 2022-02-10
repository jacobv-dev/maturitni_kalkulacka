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
          <input type="radio" name="radio" checked />
          <span>Český jazyk</span>
        </label>
        <label>
          <input type="radio" name="radio" />
          <span>Anglický jazyk</span>
        </label>
        <label>
          <input type="radio" name="radio" />
          <span>Jiný cizí jazyk</span>
        </label>
      </div>

      <div class="input_middle">
        <label>
          <input type="number" name="number" placeholder="BODY" />
          <span>Ústní část</span>
        </label>
        <label>
          <input type="number" name="number" placeholder="BODY" />
          <span>Písemná část</span>
        </label>
      </div>

      <div class="submit_bottom">
        <input type="submit" value="Vypočítat">
      </div>

    </form>
  </div>

</body>

</html>