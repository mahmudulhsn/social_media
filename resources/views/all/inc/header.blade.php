<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="{{URL::to('/')}}"><img src="{{asset('public/all/images/iubat.png')}}" width="100" height="50" alt="logo" /></a> -->
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown"><a href="{{URL::to('/home')}}">Home</a></li>
              <li class="dropdown"><a href="{{ route('friends') }}">Friends</a></li>
              <li class="dropdown"><a href="{{ route('friend-request') }}">Friends Request</a></li>
              <li class="dropdown"><a href="{{URL::to('/chatroom')}}">Messages</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Repositories <span><img src="{{asset('public/all/images/down-arrow.png')}}" alt="" /></span></a>
                <ul class="dropdown-menu login">
                  <li><a href="{{URL::to('/all_repositories')}}">All Repositories </a></li>
                  <li><a href="{{URL::to('/new_repositories')}}">New Repositories</a></li>
                   <li><a href="{{URL::to('/repositories_settings')}}">Repositories Settings </a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span><img src="{{asset('public/all/images/down-arrow.png')}}" alt="" /></span></a>
                <ul class="dropdown-menu login">
                  <li><a href="{{URL::to('/profile_settings')}}">Profile</a></li>
                  <li><a href="{{URL::to('/account_settings')}}">Account</a></li>
                  <li><a href="{{URL::to('/security')}}">Security</a></li>
                  <li> <a href="{{URL::to('/contact_us')}}">Contact Us</a></li>
                  <li>
                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        </div>Log Out</a></li>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                  
                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends, papers, categories">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>