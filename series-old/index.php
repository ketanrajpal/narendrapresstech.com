<?php
ob_start();
$xml=simplexml_load_file("../used-mechanical-presses/products.xml");
foreach($xml->children() as $press)
{
	if($press->slug==$_GET["slug"])
	{
		$name=$press->label;
		$img=$press->img;
	}
}
$page="series-old";
?>
<!DOCTYPE HTML>
<html>
  <head>
  <?php require_once("../inc/head.php"); ?>
  <?php require_once("../inc/meta.php"); ?>
  </head>
  <body>
  <?php require_once("../inc/header.php"); ?>
  
  
  <section id="center" class="clear">
  
   <article> 
     <img src="../img/products/img/<?php echo $_GET["slug"]; ?>.png" width="100%">
     
     
     <!--<a href="../pdf/<?php echo $_GET["slug"]; ?>.pdf" class="product-but" target="new">Download Catalog</a>-->
     
     <a href="../enquiry" class="product-but" target="new">Enquire Now</a>
     
   </article>
   
   <article>
   <h2><?php echo $name; ?></h2>
   <span></span>
    <?php require_once("../img/products/inc/".$_GET["slug"]."-head.html"); ?>
    
   </article>
   <div class="clear"></div>  
  </section>
  
  
  <?php require_once("../inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>