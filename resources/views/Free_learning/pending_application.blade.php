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

    <nav class="navbar navbar-light " style="background-color: #FDEFEF;">
        <div class="left-corner">
            <img src="./images/menu.png" width="35" height="35">
            <span class="navbar-brand mb-0 h1" style="font-weight: bold;">Welcome To Free Learning Application Section</span>
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
                <a class="nav-link" href="{{url('admin_select_free_learning_list')}}">
        
                  
    
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16" style=" vertical-align: middle; color: black;">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                    <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                  </svg>
        
                  <span  style="font-family: 'Roboto';
                  font-style: none;
                  font-weight: 400;
                  font-size: 24px;
                  line-height: 28px;
                  color:white;">&ensp;Select Free Learning List</span> </a>
              </li>
    
              <li><div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
              </li>
    
              <li class="nav-item">
                <a class="nav-link" href="{{url('adminFreeLearningSubmitList')}}">
    
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16" style=" vertical-align: middle; color: black; ">
                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                  </svg>
        
                  <span  style="font-family: 'Roboto';
                  font-style: none;
                  font-weight: 400;
                  font-size: 24px;
                  line-height: 28px;
                  color:white;">&ensp;{{$list_type}}</span> </a>
              </li>

              <li><div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
              </li>
    
              <li class="nav-item">
                <a class="nav-link" href="#">
    
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16" style=" vertical-align: middle; color: black; ">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                    <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                  </svg>
        
                  <span  style="font-family: 'Roboto';
                  font-style: none;
                  font-weight: 400;
                  font-size: 24px;
                  line-height: 28px;
                  color:white;">&ensp;Application</span> </a>
              </li>
          
           
          </ul>
        
        </nav>
    <!-- navbar 2-->


<!-- application -->

  <div class="form-outline mb-4" style="margin-top:1.5cm;">
    <div class="container h-100">
      <div class="row h-100 justify-content-center align-items-center">
          <div class="col-10 col-md-8 col-lg-6">
              <!-- Form -->
              <div class = 'card p-5' style="background-color: #b6acab; border-radius: 20px;">

                {{-- @foreach ($user_applications as $user_application) --}}

                  {{-- <div><p  style="color: black; font-weight: bold;">{{ $user_application->user_id }}</p></div> --}}
                  <div><p  style="color: black; font-weight: bold;">{{$application->name }}</p></div>
                
                  <!-- description -->
                  <div >
                    <p class="text-justify" rows="8" style="background: #585858; color: black; padding:0.5cm; border-radius: 20px;">{{$application->description}}</p>
                  </div>

                  <!-- buttons -->
                <div class="col-md-12 text-center" >
                  {{-- <a href="{{url('/admin_free_learning_application_action',[1,$user_application->user_id])}}"><button type="submit" class="btn btn-success btn-lg" style="float: left;"><span  style="font-size:20px; vertical-align: middle;  color: black; font-weight: bold;">&emsp;&ensp;Accept&ensp;&emsp;</span></button></a>
                  <a href="{{url('/admin_free_learning_application_action',[2,$user_application->user_id])}}"><button type="submit" class="btn btn-danger btn-lg" style="float: right;"><span  style="font-size:20px; vertical-align: middle;  color: black; font-weight: bold;" >&emsp;&ensp;Decline&ensp;&emsp;</span></button></a> --}}
                  <a href="{{url('admin_free_learning_application_action',[1,$application->user_id ])}}"><button type="submit" class="btn btn-success btn-lg" style="float: left;"><span  style="font-size:20px; vertical-align: middle;  color: black; font-weight: bold;">&emsp;&ensp;Accept&ensp;&emsp;</span></button></a>
                  <a href="{{url('admin_free_learning_application_action',[2,$application->user_id ])}}"><button type="submit" class="btn btn-danger btn-lg" style="float: right;"><span  style="font-size:20px; vertical-align: middle;  color: black; font-weight: bold;" >&emsp;&ensp;Decline&ensp;&emsp;</span></button></a>
                </div>
                <!-- buttons --> 

                {{-- @endforeach --}}

                  <!-- End description -->                
              </div>
              <!-- Form end -->
            </div>
        </div>
      </div>
    </div>
  <!-- application -->

  

</body>
</html>