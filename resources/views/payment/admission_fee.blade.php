<!DOCTYPE html>
<html>
   <head>
   <title>Online-Payment_Via_Stripe</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

   </head>
   <body>
       <!-- navbar 1-->
       <nav class="navbar navbar-light " style="background-color: #FDEFEF;">
         <div class="left-corner">
             <img src="./images/menu.png" width="35" height="35">
             <span class="navbar-brand mb-0 h1" style="font-weight: bold;">Welcome To Free Learning Apply Section</span>
         </div>
         
         
         <div class="d-flex align-items-center">
           <div class="dropdown">
                     <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="rounded-circle dropdown-toggle"
                     id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                     height="40"
                     alt="Black and White Portrait of a Man"
                     loading="lazy" viewBox="0 0 16 16" style="vertical-align: middle;">
                       <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                       <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                     </svg>
             <div class="dropdown-menu " aria-labelledby="dropdownMenu2">
             <button class="dropdown-item" type="button"><a href="#">My Profile</a></button>
               <button class="dropdown-item" type="button"><a href="#">User Settings</a></button>
               <button class="dropdown-item" type="button"><a href="{{url('/showsignin')}}">Logout</a></button>
             </div>
           </div>
           <div>&emsp;</div>
           <span class="navbar-brand mb-0 h1" style="font-weight: bold;">Student</span>
         </div>
       </nav>   
       
     <!-- navbar 1-->
         
         
              <!-- navbar 2-->
                 
              <nav class="navbar navbar-expand-sm " style="background-color: #7C5D5D;">
               
               <!-- Links -->
               <ul class="navbar-nav">
           
                   <li class="nav-item">
                     <a class="nav-link" href="#">

                       <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-credit-card-2-back-fill" viewBox="0 0 16 16" style=" vertical-align: middle; color: black;">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
                      </svg>
             
                       <span  style="font-family: 'Roboto';
                       font-style: none;
                       font-weight: 400;
                       font-size: 24px;
                       line-height: 28px;
                       color:white;">&ensp;Admission Fee</span> </a>
                   </li>   
               </ul>
             
             </nav>
         <!-- navbar 2-->
      
      <div class="container-fluid">

         <div class="row mt-5">
            <div class="col-4">

            </div>

           
            <div class="col-8" >
                  <div class=" display-table mb-3" >
                     <div class="row display-tr" >
                        <h3 class=" display-td" style="padding-left:4cm;">Payment Details</h3>
                     </div>
                  </div>

                     <div style="padding-left: 80px; width : 100%">

                     
                        <form  role="form" action="{{ route('admission.post') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form" >
                           @csrf
                           <div class="form-row row" style="width: 8.1cm">
                              <div class="body col-sm-12" >
                                 @if (Session::has('success'))
                                 <div class="alert alert-success" style="height: 1.3cm; text-align:center;">
                                    <p>{{ Session::get('success') }}</p>
                                 </div>
                                 @endif
                              </div>
                                 <div class="body col-sm-12">
                                    @if(session()->has('message'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                 </div> 
                           </div>
                           <div class='form-row row'>
                              <div class='col-md-4 error form-group hide'>
                                 <div class='alert-danger alert' style="text-align: center;">Please Enter Valid Informations Only</div>
                              </div>
                           </div>
                           <div class='form-row row'>
                              <div class='col-xs-12 col-md-4 form-group required'>
                                 <label class='control-label'>Amount</label> 
                                 <input class='form-control' size='4' type="number" min="1" name="amount" value={{$amount->amount}} readonly="readonly">
                              </div>
                           </div>
                           <div class='form-row row'>
                              <div class='col-xs-12 col-md-4 form-group required'>
                                 <label class='control-label'>Name on Card</label> 
                                 <input class='form-control' size='4' type='text'>
                              </div>
                           </div>
                           <div class='form-row row'>
                              <div class='col-xs-12 col-md-4 form-group required'>
                                 <label class='control-label'>Card Number</label> 
                                 <input autocomplete='off' id="credit-card" class='form-control card-number' size='20' type='text'>
                              </div>
                           </div>

                           <div class='form-row row'>
                              <div class='col-xs-12 col-md-4 form-group cvc required'>
                                 <label class='control-label'>CVC</label> 
                                 <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                              </div>
                           </div>

                           <div class='form-row row'>
                              <div class='col-xs-12 col-md-2 form-group expiration required'>
                                 <label class='control-label'>Expiration Month</label> 
                                 <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                              </div>
                              <div class='col-xs-12 col-md-2 form-group expiration required'>
                                 <label class='control-label'>Expiration Year</label> 
                                 <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                              </div>
                           </div>
                           <div class="form-row row">
                              <div class="col-xs-12 col-md-4">
                                 <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now </button>
                              </div>
                           </div>
                        </form>
                     </div>
               </div>

         </div>
      </div><br>

   </body>
   <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
   <script type="text/javascript">
      $(function() {
    var $form = $(".require-validation");
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                'input[type=text]', 'input[type=file]',
                'textarea'
            ].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
        $errorMessage.addClass('hide');
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
        });
        if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
        }
    });
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
});


   $('#credit-card').on('keypress change', function () {
      $(this).val(function (index, value) {
         return value.replace(/\W/gi, '').replace(/(.{4})/g, '$1 ');
      });
   });

   $('#credit-card').on('copy cut paste', function () {
      setTimeout(function () {
         $('#credit-card').trigger("change");
      });
   });
   </script>
</html>