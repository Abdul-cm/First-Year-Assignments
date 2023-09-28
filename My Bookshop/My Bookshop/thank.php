<?php include 'header.php';session_start();  ?>
<div class="row m5">
  <div class="col-md-12 m5">
  <h5 class="card-title">You Have Successfully Entered Your Credit Card</h5>
    <hr>
    <input type="hidden" name="demo" id='card_no' value="<?php echo $_SESSION["credit_no"]; ?>">
    <div class="container-fluid py-3">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-12 col-lg-12 mx-auto">
            <div id="pay-invoice" class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="">Debit/Credit Card 
                          <img class="mr-2" width="80px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
            alt="Mastercard"> your Credit Card Number End In ************123
                    </div>
                    <hr>
<div class="row ">
	<div class="col-12">
		<h1 class="text-center m5 alert alert-success">Thank You !
			<br></h1>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var credit_no = $('#card_no').val();
		
		var last_id = credit_no.slice(credit_no.length - 4);
		$('#last_id').text(last_id);
	})
</script>
