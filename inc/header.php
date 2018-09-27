<?php

	function mymenu($page, $item)
	{
		if($page==$item)
		{
			echo "class='current'";
		}
	}

?>
<div id="logo-outer">
 <a href="../" id="logo"><img src="../img/logo.jpg"></a>
</div>
<header>
    <div class="clear"> 
      <nav>
        <ul class="clear">
          <li><a href="../" class="current">Home</a></li>
          <li><a href="../history" class="current">History</a></li>
          <li><a href="../products">Products</a></li>
          <li><a href="../used">Used Mechanical Presses</a></li>
          <li><a href="../services">Services</a></li>
          <li><a href="../facilities">Facilities</a></li>
          <li><a href="../quality">Quality</a></li>
          <li><a href="../enquiry">Enquiry</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
  
  <?php if($page!="index"){ ?>
  
  
  	<section id="topimg">
     <!--<img src="../img/<?php echo $page; ?>.jpg" width="100%;">-->
     <img src="../img/products.jpg" width="100%;">
    </section>
    
    <section id="tags"> <div>&ldquo; <span><?php echo $name; ?></span> &rdquo;</div> </section>
  
  <?php } ?>