<?php include 'header.php' ?>
<div class="row m5">
  <div class="col-md-12">
  <h5 class="card-title">Payment Options</h5>
    <hr>
    <div class="container-fluid py-3">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-12 col-lg-12 mx-auto">
            <div id="pay-invoice" class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="">Debit/Credit Card 
                          <img class="mr-2" width="80px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
            alt="Mastercard"></h4>
                    </div>
                    <hr>
                    <form novalidate="novalidate" id="from" class="needs-validation">
                        
                       
                        <div class="form-group">
                            <label for="cc-number" class="control-label mb-1">Card number</label>
                            <input type="text"placeholder="4111111111111111" name="card_no" maxlength="16" onkeypress="phoneno()" id="card_no" class="form-control c-number identified visa" required="true"style="text-transform: capitalize;"autocomplete="Off">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Expiration</label>
                                    <div style="display: flex;"> 
                                    <select name="month" id="month"
                            class="form-control cc-exp m4">
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select> <select name="year" id="year"
                            class="form-control cc-exp m4">
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>
                        </div>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">CVV</label>
                                <div class="input-group">
                                    <input id="cvv" name="x_card_code" type="tel" class="form-control cc-cvc"placeholder="123" required autocomplete="off"onkeypress="phoneno12()" maxlength="3">
                                   
                                </div>
                            </div>
                        </div>
                       
                        
                        
                        <div>
                            <!--<button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block m4" id="save1">-->
                            <!--    <i class="fa fa-lock fa-lg"></i>&nbsp;-->
                            <!--    <span id="payment-button-amount">Continue </span>-->
                                
                            <!--</button>-->
                            <button  name="btn_submit" id="save" class="btn btn-lg btn-info btn-block m4" value="Save changes"><i class="fa fa-lock fa-lg"></i>&nbsp; <span id="payment-button-amount">Continue </span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
  document.getElementById("save").onclick = function() { 
    $('#from').submit(    function(e){     

      e.preventDefault();
      var $form = $(this);


  $.ajax({
    url:'add_payment.php',
    method: 'post',
    data: new FormData(this),
    contentType: false,
    cache: false,
    processData:false,
    dataType: 'json',
    success: function(response){
      window.location="http://job1800.com/mybookshop/thank.php";
    }
  });


}); 
  }
  function phoneno(){          
            $('#card_no').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 48; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k)>=0))
                    e.preventDefault();
            });
        }
        function phoneno12(){          
            $('#cvv').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 48; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k)>=0))
                    e.preventDefault();
            });
        }
</script>