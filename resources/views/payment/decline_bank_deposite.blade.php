<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Free_Learning_Application</title>
</head>
<body>
<!-- navbar 1-->
        <!-- navbar 1-->

        <nav class="navbar navbar-light " style="background-color: #FDEFEF;">
            <div class="left-corner">
                <img src="./images/menu.png" width="35" height="35">
                <span class="navbar-brand mb-0 h1" style="font-weight: bold;">Welcome To Payment Section</span>
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
              <span class="navbar-brand mb-0 h1" style="font-weight: bold;">Admin</span>
            </div>
          </nav>
        
        
        
          
        <!-- navbar 1-->
        
        
             <!-- navbar 2-->
                
             <nav class="navbar navbar-expand-sm " style="background-color: #7C5D5D;">
              
              <!-- Links -->
              <ul class="navbar-nav">
          
                  <li class="nav-item">
                      <a class="nav-link" style="link-decoration:none" href="{{url('admin')}}">
                      
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
                    <a class="nav-link" href="{{url('adminPaymentOption')}}">

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
                    <a class="nav-link" href="{{url('adminBankDeposite')}}">
          
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16" style=" vertical-align: middle; color: black;">
                          <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z"/>
                      </svg>
            
                      <span  style="font-family: 'Roboto';
                      font-style: none;
                      font-weight: 400;
                      font-size: 24px;
                      line-height: 28px;
                      color:white;">&ensp;Bank Deposit Option</span> </a>
                  </li>

            <li><div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
            </li>
    
            <li class="nav-item">
              <a class="nav-link" href="#">
    
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16" style=" vertical-align: middle; color: black;">
                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                    <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                  </svg>
      
                <span  style="font-family: 'Roboto';
                font-style: none;
                font-weight: 400;
                font-size: 24px;
                line-height: 28px;
                color:white;">&ensp;Decline Bank Deposite History</span> </a>
            </li>
        
         
        </ul>
      
      </nav>
    
      <!-- navbar 2-->


<!-- application -->

   <div class="form-outline mb-4" style="margin-top:1.5cm; padding-left:2cm; padding-right:2cm;">
    <table class="table table-dark" >
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Date</th>
            <th scope="col">Name</th>
            <th scope="col">Amount</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($payments as $payment)
          <tr>
            <td>{{$id++}}</td>
            <td>{{$payment->created_at}}</td>
            <td>{{$payment->userName}}</td>
            <td>{{$payment->amount}}</td>
          </tr>
          
          @endforeach
        </tbody>
      </table>
    </div>
  <!-- application -->

</body>
</html>