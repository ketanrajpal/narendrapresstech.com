<?php
ob_start();
$page="enquiry";
$name="Get in Touch";
?>
<!DOCTYPE HTML>
<html>
  <head>
  <?php require_once("../inc/head.php"); ?>
  <?php require_once("../inc/meta.php"); ?>
  <script>
 var country=[ "Afghanistan" , "Albania" , "Algeria" , "Angola" , "Anguilla" , "Antigua and Barbuda" , "Argentina" , "Armenia" , "Aruba" , "Ascension Islands" , "Australia" , "Austria" , "Azerbaijan" , "Bahamas" , "Bahrain" , "Bangladesh" , "Barbados" , "Belarus" , "Belgium" , "Belize" , "Benin" , "Bermuda" , "Bhutan" , "Bolivia" , "Bosnia and Herzegovina" , "Botswana" , "Brazil" , "British Virgin Islands" , "Bulgaria" , "Burkina Faso" , "Burundi" , "Cameroon" , "Canada" , "Cape Verde" , "Cayman Islands" , "Central African Republic" , "Chad" , "Chile" , "China" , "Colombia" , "Comoros" , "Congo - Democratic Republic of" , "Congo - Republic of" , "Costa Rica" , "Croatia" , "Cyprus" , "Czech Republic" , "Denmark" , "Djibouti" , "Dominica" , "Dominican Republic" , "Ecuador" , "Egypt" , "El Salvador" , "Equatorial Guinea" , "Eritrea" , "Estonia" , "Ethiopia" , "Faroe Islands" , "Finland" , "France" , "Gabon" , "Gambia" , "Georgia" , "Germany" , "Ghana" , "Gibraltar" , "Greece" , "Greenland" , "Grenada" , "Guadeloupe" , "Guatemala" , "Guinea" , "Guinea-Bissau" , "Guyana" , "Haiti" , "Honduras" , "Hong Kong" , "Hungary" , "Iceland" , "India" , "Indonesia" , "Iraq" , "Ireland" , "Israel" , "Italy" , "Ivory Coast" , "Jamaica" , "Japan" , "Jordan" , "Kampuchea" , "Kazakhstan" , "Kenya" , "Korea" , "Kosovo" , "Kuwait" , "Kyrgyzstan" , "Laos" , "Latvia" , "Lebanon" , "Lesotho" , "Liberia" , "Libya" , "Liechtenstein" , "Lithuania" , "Luxembourg" , "Macedonia" , "Madagascar" , "Malawi" , "Malaysia" , "Maldives" , "Mali" , "Malta" , "Martinique" , "Mauritania" , "Mauritius" , "Mayotte" , "Mexico" , "Moldova" , "Monaco" , "Mongolia" , "Montenegro" , "Montserrat" , "Morocco" , "Mozambique" , "Myanmar" , "Namibia" , "Nepal" , "Netherlands" , "Netherlands Antilles" , "New Zealand" , "Nicaragua" , "Niger" , "Nigeria" , "Norway" , "Oman" , "Pakistan" , "Palestinian Territory" , "Panama" , "Paraguay" , "Peru" , "Philippines" , "Poland" , "Portugal" , "Qatar" , "Romania" , "Russia" , "Rwanda" , "Saint Kitts and Nevis" , "Saint Lucia" , "Saint Martin" , "Saint Vincent and The Grenadines" , "Sao Tome and Principe" , "Saudi Arabia" , "Senegal" , "Serbia" , "Seychelles" , "Sierra Leone" , "Singapore" , "Slovakia" , "Slovenia" , "Somalia" , "South Africa" , "Spain" , "Sri Lanka" , "Suriname" , "Swaziland" , "Sweden" , "Switzerland" , "Taiwan" , "Tajikistan" , "Tanzania" , "Thailand" , "Togo" , "Trinidad and Tobago" , "Tunisia" , "Turkey" , "Turkmenistan" , "Turks and Caicos" , "United Kingdom" , "Uganda" , "Ukraine" , "United Arab Emirates" , "United States" , "Uruguay" , "Uzbekistan" , "Venezuela" , "Vietnam" , "Western Sahara" , "Yemen" , "Zambia" , "Zimbabwe" , "Other" ];
$(document).ready(function(){
	for(i=0;i<country.length;i++)
	{
		$("#country").append("<option value='"+country[i]+"'>"+country[i]+"</option>");
	}
});

 </script>
  </head>
  <body>
  <?php require_once("../inc/header.php"); ?>
  <section id="center" class="clear">
 <article>                                

<h2>Reach us at</h2>
<span></span>
<p>
<strong>Narendra Press Tech Pvt. Ltd.</strong><br>
P.P. 26, Lane no. 10, Behind Police Station,<br>
Anand Parbat Industrial Estae, New Delhi - 110005, (INDIA)<br>
<strong>Phone</strong>: +91 11 28761468, +91 11 28761467<br>
<strong>Fax</strong>: +91 11 28761576<br>
<strong>Mobile</strong>: 9810072640, 9654902508<br><br>

<strong>Unit 2</strong><br>

Plot no.65 Sector 3, IMT Manesar, Gurgaon, Haryana (INDIA)<br>
Telefax: 0124 2291354<br>
<br>
<strong>Email</strong>: <a href="mailto:sales@narendrapresstech.com">sales@narendrapresstech.com</a><br>
<strong>Website</strong>: <a href="http://www.narendrapresstech.com">www.narendrapresstech.com</a>
</p>



                            </article>
  <article>
  
   <h2>Enquiry</h2>
   <span></span>
   <p>You can write to us regarding any queries you may have regarding the services. You are also welcome to provide us with your valuable Feedback. We will respond to you soon.</p>
   
   <form id="contact-page" method="post" action="https://www.krpl.in/mailer/" onSubmit="return alert('Thankyou for your enquiry.')">
  
  <fieldset>
   <label for="name">Name</label>
   <input type="text" name="name" id="name" required>
  </fieldset>
  
  <fieldset>
   <label for="company">Company</label>
   <input type="text" name="company" id="company" required>
  </fieldset>
  
  <fieldset style="width:100%">
   <label for="message">Address</label>
   <textarea id="address" name="address"></textarea>
  </fieldset>
  
  <fieldset>
   <label for="city">City</label>
   <input type="text" name="city" id="city" required>
  </fieldset>
  
  <fieldset>
       <label for="country">Country:</label>
       <select id="country" name="country">
        <option value="-1" selected disabled>Select a Country</option>
       </select>
      </fieldset>
  
  <fieldset>
   <label for="email">Email</label>
   <input type="email" name="email" id="email" required>
  </fieldset>
  
  <fieldset>
   <label for="phone">Phone</label>
   <input type="text" name="phone" id="phone" required>
  </fieldset>
  
  <fieldset style="width:100%">
   <label for="message">Message</label>
   <textarea id="message" name="message"></textarea>
  </fieldset>
  <div class="clear"></div>
 <input type="hidden" id="send_url" name="send_url" value="narendrapresstech.com">
 <input type="hidden" id="redirect_url" name="redirect_url" value="http://www.narendrapresstech.com">
 <input type="hidden" id="send_email" name="send_email" value="sales@narendrapresstech.com">
 <input type="hidden" id="send_name" name="send_name" value="Narendra Presstech">
  <input type="submit" value="Submit">
  
 </form>
   
  
  </article>
  
 </section>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3497.6984491431263!2d77.15306!3d28.758419!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd3a1cc31f53%3A0xa792d147afe9e95c!2sNarendra+Press-+Tech+Private+Limited!5e0!3m2!1sen!2s!4v1408792492808" width="100%" height="450" frameborder="0" style="border:0;margin-top:50px;"></iframe>
  
  <?php require_once("../inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>