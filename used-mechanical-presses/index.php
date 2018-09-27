<?php
ob_start();
$page="used-mechanical-presses";
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
   <?php
   		$xml=simplexml_load_file("products.xml");
		foreach($xml->children() as $press)
		{
			
			if($_GET["slug"]==$press->detail){
			
			?>
			
            <li>
             <a href="../series-old/<?php echo $press->slug; ?>">
              <img src="../img/products/thumb/<?php echo $press->slug; ?>.jpg">
              <h1><?php echo $press->label; ?></h1>
             </a>
            </li>
			
			<?php
			}
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