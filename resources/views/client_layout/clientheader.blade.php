   <!-- start header -->
   <header>
    <div class="topbar navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">      
                    <p class="pull-left hidden-xs">
                        <i class="fa fa-phone"></i>Tel No. (+001) 123-456-789
                    </p>

                                            <p   class="pull-right login">
                            <a data-target="#myModal" data-toggle="modal" href=""> <i class="fa fa-lock"></i> Login </a>
                        </p> 
                    

                </div>
            </div>
        </div>
    </div> 

    <div style="min-height: 30px;"></div>

    <div class="navbar navbar-default navbar-static-top" > 
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Website Name</a>
            </div>

            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li class="{{request()->is("/") ? 'active' : ''}}"><a href="{{url('/')}}">Home</a></li> 
                    <li class="dropdown {{request()->is("advance") || request()->is("jobcompany") || request()->is("jobfunction")  || request()->is("jobtitle") ? 'active' : ''}}">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Job Search <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class=""><a href="{{url('/advance')}}">Advance Search</a></li>
                            <li><a href="{{url('/jobcompany')}}">Job By Company</a></li>
                            <li><a href="{{url('/jobfunction')}}">Job By Function</a></li>
                            <li><a href="{{url('/jobtitle')}}">Job By Title</a></li>
                        </ul>
                    </li> 
                    <li class="dropdown {{request()->is("jobbycategory") ? 'active' : ''}} ">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Popular Jobs <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/jobbycategory')}}">Technology Jobs</a></li>
                        <li><a href="">Managerial Jobs</a></li>
                        <li><a href="">Engineer Jobs</a></li>
                        <li><a href="">IT Jobs</a></li>
                        <li><a href="">Civil Engineer Jobs</a></li>
                        <li><a href="">HR Jobs</a></li>
                        <li><a href="">Sales Jobs</a></li>
                        <li><a href="">Banking Jobs</a></li>
                        <li><a href="">Finance Jobs</a></li>
                        <li><a href="">BPO Jobs</a></li> 
                    </ul>
                    </li> 
                    <li class="{{request()->is("companies") ? 'active' : ''}} "><a href="{{url('/companies')}}">Company</a></li>
                    <li class="{{request()->is("hiring") ? 'active' : ''}} "><a href="{{url('/hiring')}}">Hiring Now</a></li>
                    <li class="{{request()->is("aboutus") ? 'active' : ''}} "><a href="{{url('/aboutus')}}">About Us</a></li>
                    <li class="{{request()->is("contact") ? 'active' : ''}} "><a href="{{url('/contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>            
<!-- end header --> 