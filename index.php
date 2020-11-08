<?php

include_once('src/FizzBuzz.php');
if (isset($_POST['min']) && isset($_POST['max'])) {
  $fizzbuzz = new FizzBuzz();
  $result = $fizzbuzz->get($_POST['min'], $_POST['max']);
}

?>

<html>
<body>
  <h1>FizzBuzz 1</h1>
  <form action="" method="post">
    <p>Min: <input type="number" name="min" /></p>
    <p>Max: <input type="number" name="max" /></p>
    <p><input type="submit" /></p>
  </form>
  <?php if (isset($result)) { ?>
    <p> Result: <?php echo $result ?></p>
  <?php } ?>

</body>
</html>

