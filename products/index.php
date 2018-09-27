<?php
ob_start();
$page="products";
$name="Products";
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
   <?php
   		$xml=simplexml_load_file("products.xml");
		foreach($xml->children() as $press)
		{
			?>
			
            <li>
             <a href="../series/<?php echo $press->slug; ?>">
              <img src="../img/products/thumb/<?php echo $press->slug; ?>.jpg">
              <h1><?php echo $press->name; ?></h1>
             </a>
            </li>
			
			<?php
		}
	?>
   </ul>
  </section>
  
  
  <?php require_once("../inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>