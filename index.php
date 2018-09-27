<?php
ob_start();
$page="index";
?>
<!DOCTYPE HTML>
<html>
  <head>
  <?php require_once("inc/head.php"); ?>
  <?php require_once("inc/meta.php"); ?>
  </head>
  <body>
  <?php require_once("inc/header.php"); ?>
  
  <section id="slider">
    <ul class="slider">
      <li><img src="img/slide-1.jpg"></li>
      <li><img src="img/slide-2.jpg"></li>
      <li><img src="img/slide-3.jpg"></li>
    </ul>
  </section>
  <script>$('.slider').bxSlider({auto:true, mode:'fade'});</script>
  <section id="tags"> <div>&ldquo; Innovators in all types <span>Mechanical Presses</span>, <span>Closures</span>, <span>Cold & Hot Forging</span> Presses &rdquo;</div> </section>
  
  <section id="products-tab">
   <h1>All Products</h1>
   <span></span>
   <ul class="car">
   
   <?php
   		$xml=simplexml_load_file("products/products.xml");
		foreach($xml->children() as $press)
		{
			?>
			
            <li>
             <a href="../series/<?php echo $press->slug; ?>">
              <img src="../img/products/thumb/<?php echo $press->slug; ?>.jpg">
              <h2><?php echo $press->name; ?></h2>
             </a>
            </li>
			
			<?php
		}
	?>
   </ul>
   <script>$(document).ready(function(){
  $('.car').bxSlider({
	  slideWidth: 235,
    minSlides: 1,
    maxSlides: 5,
	moveSlides: 1,
    slideMargin: 10,
	pager:false,
	infiniteLoop:false,
	hideControlOnEnd: true
  });
});</script>
  </section>
  
  
  <section id="tabs" class="clear">
   <div>
    <article>
      <h1>Products</h1>
      <span></span>
      <p>"NARENDRA" provide products which have achieved excellence in quality as we operate with the help of several departments which inform our production process.</p>
      <a href="../products">Read More</a> </article>
    <article>
      <h1>Quality Assurance</h1>
      <span></span>
      <p>Quality being the nuclei of our organization, we strive to offer our clients with a quality range of industrial presses. Our quality controllers check the entire production process</p>
      <a href="../quality">Read More</a> </article>
    <article>
      <h1>Services</h1>
      <span></span>
      <p>Our Sales and Services customer lines are distributed across India for our customers to provide them with an easy access to a service personnel from our company at their disposal.</p>
      <a href="../services">Read More</a> </article>
    <article>
      <h1>Contact</h1>
      <span></span>
      <p><strong>Address</strong>: P.P. 26, Lane no. 10, Behind Police Station,
Anand Parbat Industrial Estae, New Delhi - 110005, (INDIA)<br>
<strong>Phone</strong>: +91 11 28761468/7<br><strong>Mobile</strong>: 9810072640 & 9654902508</p>
      <a href="../enquiry">Read More</a> </article>
      </div>
  </section>
  
  <section id="icons">
   <div>
    <ul class="clear">
     <li>
      <img src="img/icon1.png">
      <h1>Performance</h1>
     </li>
     <li>
      <img src="img/icon2.png">
      <h1>Innovations</h1>
     </li>
     <li>
      <img src="img/icon3.png">
      <h1>Research</h1>
     </li>
     <li>
      <img src="img/icon4.png">
      <h1>Technologies</h1>
     </li>
    </ul>
   </div>
  </section>
  
  <?php require_once("inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>