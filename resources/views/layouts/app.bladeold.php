<!-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
 -->
 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>EUC Benchmark : Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <script type="text/javascript" src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
        <!--<script type="text/javascript" src="{{asset('js/app.js')}}"></script>-->
        <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css"/>
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css"/>

        <link rel="stylesheet" href="{{asset('css/Navstyle.css')}}" type="text/css"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


        <!-- Styles -->
                <style>
            .u-dropdown-menu 
            {
                border-radius: 10px 5px 30px 30px;
            }
           @media only screen and (max-width: 576px) {
            /* For mobile phones: */
                #udDiv {
                    border:0px solid grey !important;
                    margin-top:0% !important;
                }
            }
        </style>

    </head>

<body style="background-color:#080E1A";>

    <div class="container-fluid">
    
        <div class='row' style='background-color:#343A40;margin:0px;border:0px solid white;'>                  
            <div style="margin-right:40px;margin-top:5px;border:0px solid red;width:100%;text-align:right;color:#fff;">
                <div class="dropdown" style="border:0px solid yellow;z-index:999;">
                    <span style="font-size:12px;">Welcome, {{ Auth::user()->name }} </span>  
                    <i class="fas fa-user fa" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#fff;border:0px solid white;cursor:pointer;"></i>
                
                    <div class="dropdown-menu u-dropdown-menu" style="border:0px solid green;" aria-labelledby="dropdownMenuButton" style="margin-left: -200px;">
                            <div class="container" style="margin-top:5px;" style="border:0px solid blue;">
                                <div class="row">
                                    <div class="col-sm">
                                        <img class="img-fluid mx-auto d-block img-thumbnail rounded-circle" src="images/user.png"/>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm">
                                        <center><div> <p class="text-secondary">{{ Auth::user()->name }}</p> </div></center>
                                    </div>
                                </div>
                            </div>
                            <div>

                                    <center><a href="#" class="btn btn-outline-secondary btn-sm btn-block" style="margin:2px;width: 150px;">Manage Account</a></center>
                                    <center><a href="#" class="btn btn-outline-secondary btn-sm btn-block" style="margin:2px;width: 150px;">Access Request</a></center>
                                    <center><a href="changepassword" class="btn btn-outline-secondary btn-sm btn-block" style="margin:2px;width: 150px;">Change password</a></center>
                                    
                                    
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-4">
                                            <center><button type="button" class="btn btn-light"><i class="fa fa-question-circle  fa-2x" aria-hidden="true"></i></button></center>
                                                
                                            <!--   <i class="fa fa-question-circle  fa-2x" aria-hidden="true"></i> -->
                                        </div>
                                        
                                        <div class="col-sm-4">
                                                <TD>
                                                <a class="btn btn-light" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    <i class="fa fa-sign-out-alt fa-2x" aria-hidden="true"></i>
                                                </a>
                                                
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>

                                                </TD>
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>
                    
                            </div>
                    </div>
                </div>
            </div>
            </div>   

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="border-bottom: 3px solid #fff;margin-top:-10px;">
            {{--    <label class="switch"><input type="checkbox" id="togBtn" value="<a href='lang/de'></a>"><div class="slider round"></div></label>--}}
            <a class="navbar-brand" href="#" class="float-sm-right">EUC Benchmark</a>
            <a href="lang/en" class="btn btn-secondary">EN</a>
            <a href="lang/de" class="btn btn-success">DE</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto"></ul>
                    
                    <form class="form-inline my-2 my-lg-0">
                    @csrf
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{('home')}}">{{__('translation.Home')}} <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">{{__('translation.About')}} <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">{{__('translation.Help')}} <span class="sr-only">(current)</span></a>
                        </li>

                        </ul>  
                    </form>
                </div>
            </div>
        </nav>

       <!-- Drop down menu started --> 
       <div id="udDiv" style="border:0px solid red;margin-top:0%;">
                <div class="row" style="border:0px solid red;text-align:center">
                    <div class="col-sm-1" style="border:0px solid red;"></div>

        @if ((Auth::check()) && (Auth::user()->usertype=="ClientSuperuser"))    
            <div class="col-sm-2 " style="border:0px solid red;margin-top:0%;"></div>  
        @endif             
       <!-- Data Input started --> 

                <div class="col-sm-2 Menu-block" ><button type="button" class="btn btn-primary btn-block" id="REVIEW" style="margin:7px;background-color:#080E1A;border-color:#080E1A">Data Input</button>
				<div  class="menu-dropdown-background-left" style="height:125px;">
				    <div class="menu-dropdown-left">
				
				    <ul style="list-style: none;">
		                <li><a href="Template" class="menu-item-left" ><span class="menu-item-arrow-left"><i class="fa fa-chevron-right" aria-hidden="true" size="2x"></i></span>Template</a></li>   
		                <li><a href="#" class="menu-item-left" ><span class="menu-item-arrow-left"><i class="fa fa-chevron-right" aria-hidden="true" size="2x"></i></span>Web Portal</a></li>   
					</ul>
				    </div>
				</div>
			    
			    </div>       
        <!-- Data Input ended --> 
        <!-- Review started --> 

		<div class="col-sm-2 Menu-block" ><button type="button" class="btn btn-primary btn-block" id="REVIEW" style="margin:7px;background-color:#080E1A;border-color:#080E1A">Review Data</button>
				<div  class="menu-dropdown-background-left" style="height:125px;">
				    <div class="menu-dropdown-left">
				
				    <ul style="list-style: none;">
		                <li><a href="DataReview" class="menu-item-left" ><span class="menu-item-arrow-left"><i class="fa fa-chevron-right" aria-hidden="true" size="2x"></i></span>Review Data</a></li>   
		                <li><a href="#" class="menu-item-left" ><span class="menu-item-arrow-left"><i class="fa fa-chevron-right" aria-hidden="true" size="2x"></i></span>Approve Data</a></li>   
					</ul>
				    </div>
				</div>
			    
			    </div>
        <!-- Review ended --> 
        <!-- Report started --> 
		<div class="col-sm-2 Menu-block" ><button type="button" class="btn btn-primary btn-block" id="REVIEW" style="margin:7px;background-color:#080E1A;border-color:#080E1A">Report</button>
				<div  class="menu-dropdown-background-left" style="height:250px;">
				    <div class="menu-dropdown-left">
				
				    <ul style="list-style: none;">
					    <div class="menu-dropdown-submenu-left">
		                <li><a href="#" class="menu-item-left" ><span class="menu-item-arrow-left"><i class="fa fa-chevron-right" aria-hidden="true" size="2x"></i></span>KPI Reports</a></li>   
						
						    <div class="menu-dropdown-submenu-item-left">
							<ul style="list-style: none;">
							    <li><a href="ReportKPI" class="sub-menu-item-left">L Section</a></li>
							    <li><a href="#" class="sub-menu-item-left" >N Section</a></li>
                                <li><a href="#" class="sub-menu-item-left" >M Section</a></li>
							</ul>
						    </div>
						</div>  
					    <div class="menu-dropdown-submenu-left">
		                <li><a href="#" class="menu-item-left" ><span class="menu-item-arrow-left"><i class="fa fa-chevron-right" aria-hidden="true" size="2x"></i></span>KPI Reports 2</a></li>   
						
						    <div class="menu-dropdown-submenu-item-left" style="margin-top:50px;">
							<ul style="list-style: none;">
                                <li><a href="#" class="sub-menu-item-left">L Section</a></li>
							    <li><a href="#" class="sub-menu-item-left" >N Section</a></li>
                                <li><a href="#" class="sub-menu-item-left" >M Section</a></li>
							</ul>
						    </div>
						</div>                                                          
						<li><a href="#" class="menu-item-left" ><span class="menu-item-arrow-left"><i class="fa fa-chevron-right" aria-hidden="true" size="2x"></i></span>Smart Report</a></li>   
                        <li><a href="#" class="menu-item-left" ><span class="menu-item-arrow-left"><i class="fa fa-chevron-right" aria-hidden="true" size="2x"></i></span>Voice of Customer</a></li>   
                        <li><a href="#" class="menu-item-left" ><span class="menu-item-arrow-left"><i class="fa fa-chevron-right" aria-hidden="true" size="2x"></i></span>Net Promotor Score</a></li>   
					</ul>
				    </div>
				</div>
			    
			    </div>
        <!-- Report ended -->
        <!-- New user started -->
        
        @if ((Auth::check()) && (Auth::user()->usertype=="CGSuperUser"))    
        <div class="col-sm-2 Menu-block" ><button type="button" class="btn btn-primary btn-block" id="REVIEW" style="margin:7px;background-color:#080E1A;border-color:#080E1A"><nobr>User Management</nobr></button>
				<div  class="menu-dropdown-background-left" style="height:125px;">
				    <div class="menu-dropdown-left">
				
				    <ul style="list-style: none;">
					    <div class="menu-dropdown-submenu-left">
                        <li><a href="#" class="menu-item-left" ><span class="menu-item-arrow-left"><i class="fa fa-chevron-right" aria-hidden="true" size="2x"></i></span>Add User</a></li>   
		                <li><a href="{{('UserAccess')}}" class="menu-item-left" ><span class="menu-item-arrow-left"><i class="fa fa-chevron-right" aria-hidden="true" size="2x"></i></span>User Access</a></li>   
						</div>  
					</ul>
				    </div>
				</div>
			    
		</div>

        <!-- New User ended -->    

        <!-- Campaign started --> 

        <div class="col-sm-2 Menu-block" ><button type="button" class="btn btn-primary btn-block" id="REVIEW" style="margin:7px;background-color:#080E1A;border-color:#080E1A"><nobr>Campaign Management</nobr></button>
				<div  class="menu-dropdown-background-left" style="height:125px;">
				    <div class="menu-dropdown-left">
				
				    <ul style="list-style: none;">
					    <div class="menu-dropdown-submenu-left">
                        <li><a href="#" class="menu-item-left" ><span class="menu-item-arrow-left"><i class="fa fa-chevron-right" aria-hidden="true" size="2x"></i></span>Manage Campaign</a></li>   
		                <li><a href="#" class="menu-item-left" ><span class="menu-item-arrow-left"><i class="fa fa-chevron-right" aria-hidden="true" size="2x"></i></span>Campaign Status</a></li>   
						</div>  
					</ul>
				    </div>
				</div>
			    
		</div>

        @endif      
        <!-- Campaign ended -->

        <!--    
        <div class="col-sm-2 Menu-block" ><button type="button" class="btn btn-primary btn-block" id="REVIEW" style="margin:7px;background-color:#080E1A;border-color:#080E1A">Campaign Management</button>
                        <div  class="menu-dropdown-background-right">
                            <div class="menu-dropdown-right">
                        
                            <ul style="list-style: none;">
                                <div class="menu-dropdown-submenu-right">
            
                                        <li><a href="#" class="menu-item-right" >Manage Campaign<span class="menu-item-arrow-right"><i class="fa fa-chevron-left" aria-hidden="true" size="2x"></i></span></a></li>   
            
                                            <div class="menu-dropdown-submenu-item-right">
                                                <ul style="list-style: none;">
                                                    <li style="float:right;"><a href="#" class="sub-menu-item-right">Sub Menu 1</a></li>
                                                    <li style="float:right;"><a href="#" class="sub-menu-item-right" >Sub Menu 2</a></li>
                                                </ul>
                                            </div>
                                        </div>                                 
                                        <li><a href="#" class="menu-item-right" >Campaign Status<span class="menu-item-arrow-right"><i class="fa fa-chevron-left" aria-hidden="true" size="2x"></i></span></a></li>
                                </ul>
                            </div>
                        </div>
                    
                    </div>
          
        -->
        
          
        
                    <div class="col-sm-1 "></div>
                    
                </div>
                

            <div>

    </div></div>
        <!-- Drop down menu started -->


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
