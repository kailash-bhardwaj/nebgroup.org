<?php

/**
Template Name: Payment Page
**/

get_header();

?>

<main>
	<section class="bg-white padding8050">
		<div class="container-small ">
			<div class="text-center">
			<h2><?php the_title();?></h2>
			<?php the_content();?>
			</div>
			<div class="contact-wrap">
				<form action="/anet_php_sdk/sim.php" name="payment" method="post" onsubmit="return validateForm()">

				<!-- 	First Name<input name="myfname" type="text" placeholder="First name" />
					Last Name<input name="mylname" type="text" placeholder="Last Name" />
Address
<input name="myadd" type="text" placeholder="Address" />
City
<input name="mycity" type="text" placeholder="City" />
State
<input name="mystate" type="text" placeholder="State" />
ZIP Code
<input name="myzip" type="text" placeholder="ZIP Code" />
Email
<input name="myemail" type="text" placeholder="Email" /> -->
<p>Amount*</p>
<p>
<input name="myamount" type="number" placeholder="Amount" />
<span class="error" id="amount">Please Enter Amount</span>
</p>
<p>Customer ID</p><p>
<input name="my_cust_id" type="number" placeholder="Customer ID" /></p><p  class="text-center">
<input class="myButton wpcf7-form-control has-spinner wpcf7-submit" type="submit" value="Continue to our Secure Payment Servers" /></p>
</form>
			</div>
		</div>
	</section>

<script type="text/javascript">
	function validateForm() {
  let x = document.forms["payment"]["myamount"].value;
  if (x == "") {
   document.getElementById("amount").style.display = "block";
    return false;
  }else{
  	 document.getElementById("amount").style.display = "none";
  }
}
</script>
<style type="text/css">
	.error{
		padding: 0;
		border:0;
		display: none;
	}
</style>
</main>

<?php get_footer();?>