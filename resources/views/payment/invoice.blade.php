<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
        <meta charset="utf-8">
        <title>Invoice</title>
        <style>
            .bodys{
                max-width: 55%;
                padding: 3%;
                border: 1px solid black;
            }
        </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Payment_Invoice</title>
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
                      <a class="nav-link" style="link-decoration:none" href="{{url('student')}}">
                      
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16" style=" vertical-align: middle; color: black; ">
                          <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                          </svg>
                  
                          <span  style="font-family: 'Roboto';
                                          font-style: none;
                                          font-weight: 400;
                                          font-size: 24px;
                                          line-height: 28px;
                                          color:white;
                                          "
                          >
                              &ensp;Dashboard 
                          
        
        
                          </span>
                      </a>
                    
                  </li>
          
                  <li><div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
                  </li>
        
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('showPaymentOption')}}">

                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16" style=" vertical-align: middle; color: black;">
                        <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                        <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                        <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                        <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                      </svg>
            
                      <span  style="font-family: 'Roboto';
                      font-style: none;
                      font-weight: 400;
                      font-size: 24px;
                      line-height: 28px;
                      color:white;">&ensp;Payment Options</span> </a>
                  </li>

                  <li><div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
                  </li>
          
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('stripe')}}">

                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-credit-card-2-back-fill" viewBox="0 0 16 16" style=" vertical-align: middle; color: black;">
                       <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
                    </svg>
            
                      <span  style="font-family: 'Roboto';
                      font-style: none;
                      font-weight: 400;
                      font-size: 24px;
                      line-height: 28px;
                      color:white;">&ensp;Online Payment</span> </a>
                  </li>  
                  
                  <li><div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">

                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-receipt-cutoff" viewBox="0 0 16 16" style=" vertical-align: middle; color: black;">
                        <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                        <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"/>
                      </svg>
            
                      <span  style="font-family: 'Roboto';
                      font-style: none;
                      font-weight: 400;
                      font-size: 24px;
                      line-height: 28px;
                      color:white;">&ensp;Invoice</span> </a>

                  </li> 
              </ul>
            
            </nav>
        <!-- navbar 2-->


    <div class="body col-sm-12">
        @if(session()->has('message'))


            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
     </div> 



    <h1 style="padding-left: 16.5cm; padding-top: 1cm; padding-bottom: 0.5cm">Payment Invoice</h1>

<div style="margin-left: 12cm">
<div class="bodys">
        <div style="text-align: center">
            <h3 style="margin: 0;">DHAMMA SCHOOL</h3>
            <h6 style="margin: 0;">dhammaschool@example.com</h6>
        </div>
        <div class="content">
            <div style="margin: -2px; padding-top:1cm">
                <div style="float: left;">
                    <p>Invoice Number:- INVO-{{Session('invoiceNo')}} </p>
                </div>
                <div style="float: right;">
                    <p style="margin-right: 20px;">
                        Date:{{Session('date')}}
                    </p>
                </div>
            </div>
            <div style="clear: both;"></div>
            <div class="centre" style="text-align: center;">
                <h3>Invoice</h3>
            </div>
            <div>
                <p>Name:{{Session('user_name')}}</p>
            </div>
            <hr/>
            <div style="padding: 30px 0px 30px 0px;">
                <p class="amount">Amount
                    <span style="float: right;"> {{Session('amount')}}</span>
                </p>
            </div>
            <hr/>
            <p>Payment with Stripe</p><br>
        </div>
        <a href="{{url('export_pdf')}}"><button type="button" class="btn btn-success btn-lg btn-block" style="height : 1.2cm;"><span style="color : black; font-weight: bold;"> Get Invoice </span></button></a>

</div><br><br>

</div><br>

</body>
</html>