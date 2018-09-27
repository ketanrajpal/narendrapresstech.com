<?php
ob_start();
$page="used";
$name="Used Mechanical Presses";
?>
<!DOCTYPE HTML>
<html>
  <head>
  <?php require_once("../inc/head.php"); ?>
  <?php require_once("../inc/meta.php"); ?>
  </head>
  <body>
  <?php require_once("../inc/header.php"); ?>
  <section id="center">
    <ul id="products" class="clear">
      <li> <a href="../used-mechanical-presses/h-frame-press"> <img src="../img/products/thumb/h-frame-press-1.jpg">
        <h1>H Frame Press</h1>
        </a> </li>
      <li> <a href="../used-mechanical-presses/knuckle-joint-press"> <img src="../img/products/thumb/knuckle-joint-press-1.jpg">
        <h1>Knuckle Joint Press</h1>
        </a> </li>
      <li> <a href="../used-mechanical-presses/hot-forging-press"> <img src="../img/products/thumb/hot-forging-press-1.jpg">
        <h1>Hot Forging Press</h1>
        </a> </li>
      <li> <a href="../used-mechanical-presses/high-speed-press"> <img src="../img/products/thumb/high-speed-press-1.jpg">
        <h1>High Speed Press</h1>
        </a> </li>
    </ul>
  </section>
  <?php require_once("../inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>