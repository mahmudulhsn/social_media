<!DOCTYPE html>
<html lang="en">
	<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>My Profile | Papers</title>

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
                  <li><a href="{{URL::to('/about_profile')}}">About</a></li>
                  <li><a href="{{URL::to('/album')}}" >Album</a></li>
                  <li><a href="{{URL::to('/my_repositories')}}" class="active">My Papers</a></li>
                  <li><a href="{{URL::to('/profile_friend')}}">Friends</a></li>
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
                  <li><a href="{{URL::to('/my_repositories')}}" class="active">My Papers</a></li>
                  <li><a href="{{URL::to('/profile_friend')}}">Friends</a></li>
              </ul>
              <button class="btn-primary">Add Friend</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">

<!-- Album Photos -->
			<ul class="album-photos">
                <li>
                  <div class="img-wrapper" data-toggle="modal" data-target=".photo-1">
                    <img src="{{asset('public/all/images/album/1.jpg')}}" alt="photo" />
                  </div>
                  <div class="modal fade photo-1" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <img src="{{asset('public/all/images/album/1.jpg')}}" alt="photo" />
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="img-wrapper" data-toggle="modal" data-target=".photo-2">
                    <img src="{{asset('public/all/images/album/2.jpg')}}" alt="photo" />
                  </div>
                  <div class="modal fade photo-2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <img src="{{asset('public/all/images/album/2.jpg')}}" alt="photo" />
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="img-wrapper" data-toggle="modal" data-target=".photo-3">
                    <img src="{{asset('public/all/images/album/3.jpg')}}" alt="photo" />
                  </div>
                  <div class="modal fade photo-3" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <img src="{{asset('public/all/images/album/3.jpg')}}" alt="photo" />
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="img-wrapper" data-toggle="modal" data-target=".photo-4">
                    <img src="{{asset('public/all/images/album/4.jpg')}}" alt="photo" />
                  </div>
                  <div class="modal fade photo-4" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <img src="{{asset('public/all/images/album/4.jpg')}}" alt="photo" />
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="img-wrapper" data-toggle="modal" data-target=".photo-5">
                    <img src="{{asset('public/all/images/album/5.jpg')}}" alt="photo" />
                  </div>
                  <div class="modal fade photo-5" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <img src="{{asset('public/all/images/album/5.jpg')}}" alt="" />
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="img-wrapper" data-toggle="modal" data-target=".photo-6">
                    <img src="{{asset('public/all/images/album/6.jpg')}}" alt="photo" />
                  </div>
                  <div class="modal fade photo-6" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <img src="{{asset('public/all/images/album/6.jpg')}}" alt="" />
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="img-wrapper" data-toggle="modal" data-target=".photo-7">
                    <img src="{{asset('public/all/images/album/7.jpg')}}" alt="photo" />
                  </div>
                  <div class="modal fade photo-7" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <img src="{{asset('public/all/images/album/7.jpg')}}" alt="" />
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="img-wrapper" data-toggle="modal" data-target=".photo-8">
                    <img src="{{asset('public/all/images/album/8.jpg')}}" alt="photo" />
                  </div>
                  <div class="modal fade photo-8" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <img src="{{asset('public/all/images/album/8.jpg')}}" alt="" />
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="img-wrapper" data-toggle="modal" data-target=".photo-9">
                    <img src="{{asset('public/all/images/album/9.jpg')}}" alt="photo" />
                  </div>
                  <div class="modal fade photo-9" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <img src="{{asset('public/all/images/album/9.jpg')}}" alt="" />
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
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