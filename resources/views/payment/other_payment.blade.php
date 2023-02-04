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
    <title>Admin_Payment_Section</title>
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
                    <a class="nav-link" href="{{url('setupFees')}}">

                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16" style=" vertical-align: middle; color: black;">
                        <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                      </svg>
            
                      <span  style="font-family: 'Roboto';
                      font-style: none;
                      font-weight: 400;
                      font-size: 24px;
                      line-height: 28px;
                      color:white;">&ensp;Fees Options</span> </a>
                  </li>

                  <li><div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
                  </li>
        
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('#')}}">

                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-ticket" viewBox="0 0 16 16" style=" vertical-align: middle; color: black;">
                        <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z"/>
                      </svg>
            
                      <span  style="font-family: 'Roboto';
                      font-style: none;
                      font-weight: 400;
                      font-size: 24px;
                      line-height: 28px;
                      color:white;">&ensp;Other Payments</span> </a>
                  </li>
              
               
              </ul>
            
            </nav>
        <!-- navbar 2-->

        <script>
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if(exist){
              alert(msg);
            }
          </script>

        <div class="container bg-light" style="padding: 1cm; margin-top:1.5cm;">
            <div class="col-md-12 text-center">

            <h3>Add or Edit Payment fees</h3>   
            
            <form action="{{url('addPaymentFee')}}" method="POST" class="form-horizontal">
                @csrf
              
                <div class="form-group">
                    <div class="col-sm-4" style="float: left">
                        <input type="number" name="grade"  min="1" id="form1" class="form-control" placeholder="Grade" required/>
                    </div>

                    <div class="col-sm-4" style="float: left">
                        <input type="number" step="any" min="0" name="amount" id="form1" class="form-control" placeholder="Amount" required/>
                    </div>
                    
                    
                </div>
                <button type="submit" class="btn btn-dark" style="width: 4.5cm; height:1cm; float: left">
                  Add
                </button>
              
            </form><br><br><br>

            <form action="{{url('editPaymentFee')}}" method="POST" class="form-horizontal">
                @csrf
              
                <div class="form-group">
                    <div class="col-sm-4" style="float: left">
                        <select name="grade" id="grade" class="form-control" placeholder="Grade" required>
                            <option value=""></option>
                            @foreach ($fees as $fee)
                            <option value={{$fee->grade}}>{{$fee->grade}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-4" style="float: left">
                        <input type="number" step="any" min="0" name="amount" id="form1" class="form-control" placeholder="Amount" required/>
                    </div>
                    
                    
                </div>
                <button type="submit" class="btn btn-dark" style="width: 4.5cm; height:1cm; float: left">
                  Edit
                </button>
              
            </form><br><br><br>
            

        <table class="table table-dark" >
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Grade</th>
                <th scope="col">Payment Amount</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($fees as $fee)
              <tr>
                <td>{{$id++}}</td>
                <td>{{$fee->grade}}</td>
                <td>{{$fee->amount}}</td>
              </tr>
              
              @endforeach
            </tbody>
          </table>


        </div>
    </div><br><br>


</body>
</html>