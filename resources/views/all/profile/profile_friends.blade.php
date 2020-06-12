<!DOCTYPE html>
<html lang="en">
	<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>My Profile | Friend List</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="{{asset('public/all/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('public/all/css/style.css')}}" />
    	<link rel="stylesheet" href="{{asset('public/all/css/ionicons.min.css')}}" />
    	<link rel="stylesheet" href="{{asset('public/all/css/font-awesome.min.css')}}" />
    	<link href="{{asset('public/all/css/emoji.css')}}" rel="stylesheet">

    
    <!--Google Webfont-->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700' rel='stylesheet' type='text/css'>
    <!--Favicon-->
    	<link rel="shortcut icon" type="image/png" href="{{asset('public/all/images/fav.png')}}"/>
	</head>
  <body>

    <!-- Header
    ================================================= -->
    @include('all.inc.header')
		
    <!--Header End-->

    <div id="page-contents">
      <div class="container">
        <div class="row">


  <div class="timeline">
        <div class="timeline-cover">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img src="{{asset('public/all/images/users/user-1.jpg')}}" alt="" class="img-responsive profile-photo" />
                  <h3>Sarah Cruiz</h3>
                  <p class="text-muted">Creative Director</p>
                </div>
              </div>
              <div class="col-md-9">
               <ul class="list-inline profile-menu">
                  <li><a href="{{URL::to('/my_profile')}}" >Timeline</a></li>
                  <li><a href="{{URL::to('/about_profile')}}" >About</a></li>
                  <li><a href="{{URL::to('/album')}}">Album</a></li>
                  <li><a href="{{URL::to('/my_repositories')}}">My Papers</a></li>
                  <li><a href="{{URL::to('/profile_friend')}}" class="active">Friends</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>1,299 people following her</li>
                  <li><button class="btn-primary">Add Friend</button></li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="{{asset('public/all/images/users/user-1.jpg')}}" alt="" class="img-responsive profile-photo" />
              <h4>Sarah Cruiz</h4>
              <p class="text-muted">Creative Director</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="{{URL::to('/my_profile')}}" >Timeline</a></li>
                  <li><a href="{{URL::to('/about_profile')}}">About</a></li>
                  <li><a href="{{URL::to('/album')}}">Album</a></li>
                  <li><a href="{{URL::to('/my_repositories')}}">My Papers</a></li>
                  <li><a href="{{URL::to('/profile_friend')}}" class="active">Friends</a></li>
              </ul>
              <button class="btn-primary">Add Friend</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">

            <div class="friend-list">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="{{asset('public/all/images/covers/1.jpg')}}" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="{{asset('public/all/images/users/user-3.jpg')}}" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.html" class="profile-link">Sophia Lee</a></h5>
                          <p>Student at Harvard</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="{{asset('public/all/images/covers/3.jpg')}}" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="{{asset('public/all/images/users/user-4.jpg')}}" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.html" class="profile-link">John Doe</a></h5>
                          <p>Traveler</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="{{asset('public/all/images/covers/4.jpg')}}" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="{{asset('public/all/images/users/user-10.jpg')}}" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="timeline.html" class="pull-right text-green">My Friend</a>
                          <h5><a href="#" class="profile-link">Julia Cox</a></h5>
                          <p>Art Designer</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="{{asset('public/all/images/covers/6.jpg')}}" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="{{asset('public/all/images/users/user-7.jpg')}}" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timelime.html" class="profile-link">Robert Cook</a></h5>
                          <p>Photographer at Photography</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="{{asset('public/all/images/covers/6.jpg')}}" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="{{asset('public/all/images/users/user-8.jpg')}}" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.html" class="profile-link">Richard Bell</a></h5>
                          <p>Graphic Designer at Envato</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="{{asset('public/all/images/covers/7.jpg')}}" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="{{asset('public/all/images/users/user-2.jpg')}}" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.html" class="profile-link">Linda Lohan</a></h5>
                          <p>Software Engineer</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="{{asset('public/all/images/covers/8.jpg')}}" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="{{asset('public/all/images/users/user-9.jpg')}}" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.html" class="profile-link">Anna Young</a></h5>
                          <p>Musician</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="{{asset('public/all/images/covers/9.jpg')}}" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="{{asset('public/all/images/users/user-5.jpg')}}" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.html" class="profile-link">James Carter</a></h5>
                          <p>CEO at IT Farm</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="{{asset('public/all/images/covers/10.jpg')}}" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="{{asset('public/all/images/users/user-5.jpg')}}" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.html" class="profile-link">Alexis Clark</a></h5>
                          <p>Traveler</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 static">
              <div id="sticky-sidebar">
                <h4 class="grey">Sarah's activity</h4>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> Commended on a Photo</p>
                    <p class="text-muted">5 mins ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> Has posted a photo</p>
                    <p class="text-muted">an hour ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> Liked her friend's post</p>
                    <p class="text-muted">4 hours ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> has shared an album</p>
                    <p class="text-muted">a day ago</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
      </div>
    </div>
    @include('all.inc.footer')
     <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
    <!-- Scripts
    ================================================= -->
   
    <script src="{{asset('public/all/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('public/all/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/all/js/jquery.sticky-kit.min.js')}}"></script>
    <script src="{{asset('public/all/js/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('public/all/js/script.js')}}"></script>
  </body>
</html>