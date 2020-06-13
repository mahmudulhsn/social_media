<!DOCTYPE html>
<html lang="en">
	<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>My Profile | Timeline </title>

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


  <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                 <form action="{{url('/user/profile_pic/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="profile-info">
                  
             
                @foreach($user as $users)
                  {{-- <img src="{{asset('public/profile/images/' . $users->image)}}" alt="" class="img-responsive profile-photo" /> --}}
                 
                 @endforeach
                  <h4>{{ $user->name }}</h4>
                  <p class="text-muted">{{ $user->email }}</p>
                  <p class="text-muted">{{ $user->user_id }}</p>
                </div>
                 </form>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="{{URL::to('/my_profile')}}" class="active">Timeline</a></li>
                  <li><a href="{{URL::to('/about_profile')}}">About</a></li>
                  <li><a href="{{URL::to('/album')}}">Album</a></li>
                  <li><a href="{{URL::to('/my_repositories')}}">My Papers</a></li>
                  <li><a href="{{URL::to('/profile_friend')}}">Friends</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>1,299 people following him</li>
                  <li>
                    {{-- @if (!auth()->user()->isFriendWith($user)) --}}
                    
                    @if (auth()->user()->hasFriendRequestFrom($user) && auth()->user()->id != $user->id)
                    <form action="{{ route('accept-friend-request', $user->id) }}" method="POST" style="float: left; margin-right: 2px">
                      @csrf
                      <button class="btn-success">Accept</button>
                    </form>
                    <form action="{{ route('cancel-friend-request', $user->id) }}" method="POST" style="float: left">
                      @csrf
                      <button class="btn-danger">Cancel</button>
                    </form>
                    @elseif (auth()->user()->isFriendWith($user) && auth()->user()->id != $user->id)
                    <form action="{{ route('remove-friend', $user->id) }}" method="POST" style="float: left">
                      @csrf
                      <button class="btn-warning">Remove Friend</button>
                    </form>
                    @elseif(auth()->user()->hasSentFriendRequestTo($user) && auth()->user()->id != $user->id)
                      <form action="{{ route('remove-friend-request', $user->id) }}" method="POST" style="float: left">
                        @csrf
                        <button class="btn-warning">Cancel Friend Request</button>
                      </form>
                    @elseif(!auth()->user()->hasSentFriendRequestTo($user) && auth()->user()->id != $user->id)
                    <form action="{{ route('send-friend-request', $user->id) }}" method="POST" style="float: left">
                      @csrf
                      <button class="btn-primary">Add Friend</button>
                    </form>
                    @endif
                    
                  </li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="{{asset('public/all/images/users/user-1.jpg')}}" alt="" class="img-responsive profile-photo" />
              <h5>{{ Auth::user()->name }}</h5>
              <p class="text-muted">{{ Auth::user()->email }}</p>
              <p class="text-muted">{{ Auth::user()->user_id }}</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="{{URL::to('/my_profile')}}" class="active">Timeline</a></li>
                  <li><a href="{{URL::to('/about_profile')}}">About</a></li>
                  <li><a href="{{URL::to('/album')}}">Album</a></li>
                  <li><a href="{{URL::to('/my_repositories')}}">My Papers</a></li>
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

              <!-- Post Create Box
              ================================================= -->
              <form action="{{url('/user/post/store')}}" method="POST" enctype="multipart/form-data">
               @csrf
              <div class="create-post">
                <div class="row">
                  <div class="col-md-7 col-sm-7">
                    <div class="form-group">
                      <img src="{{asset('public/all/images/users/user-1.jpg')}}" alt="" class="profile-photo-md" />
                      <textarea name="body" id="body" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                    </div>
                    <span class="text-danger">{{ $errors->has('body') ? $errors->first('body') : '' }}</span>
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                  </div>
                  <div class="col-md-5 col-sm-5">
                    <div class="tools">
                      <ul class="publishing-tools list-inline">
                       <li><a href="#"><i class="ion-compose"></i></a></li>
                        <li><input type="file" name="image"><i class="ion-images"></i></li>
                        <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                        <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                      </ul>
                      <button class="btn btn-primary pull-right">Post</button>
                    </div>
                  </div>
                </div>
              </div><!-- Post Create Box End-->
              </form>

              <!-- Post Content
              ================================================= -->
              @foreach($post as $all_post)
              <div class="post-content">

                @if (isset($all_post->image))
                <img src="{{ asset($all_post->image) }}" width="100" height="100" class="img-responsive post-image" />
                @endif
                <div class="post-container">
                  <img src="{{asset('public/all/images/users/user-1.jpg')}}" alt="user" class="profile-photo-md pull-left" />
                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="{{ route('single-user', $user->id) }}" class="profile-link">{{ $user->name }}</a> <span class="following"></span></h5>
                      <p class="text-muted">Published at {{ date('d M y, h:i a', strtotime($all_post->created_at)) }}</p>
                    </div>
                    <div class="reaction">
                      <a class="btn text-blue"><i class="fa fa-edit"></i></a>
                      @csrf
                      @method('DELETE')
                      <a href="{{url('/user/post/destroy',$all_post->id)}}" type="submit" id="del" onclick="myFunction()" class="btn text-red"><i class="fa fa-trash"></i> </a>
                      <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                      <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                      @if ($all_post->image = 'NULL')
                      <p>{{$all_post->body}} <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                      @endif
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-comment">
                      <img src="{{asset('public/all/images/post-images/11.jpg')}}" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    
                    <form action="{{url('/user/post/store')}}" method="POST">
                      @csrf
                    <div class="post-comment">
                      <img src="{{asset('public/all/images/post-images/1.jpg')}}" alt="" class="profile-photo-sm" />
                      <input type="text" name="comments" class="form-control" placeholder="Post a comment" class="submit">
                    </div>
                    </form>
                  </div>
                </div>
               
              </div>
              @endforeach
              

              <!-- Post Content
              ================================================= -->
            

            </div>
            <div class="col-md-2 static">
              <div id="sticky-sidebar">
                <h4 class="grey">Maruf's activity</h4>
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

    <script>

function myFunction() {
  
  if (confirm("Are you sure to delete this Post ?")) 
  {
   return true;
  } else {
    return false;
  }
  document.getElementById("del");
}
 </script>
   
    <script src="{{asset('public/all/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('public/all/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/all/js/jquery.sticky-kit.min.js')}}"></script>
    <script src="{{asset('public/all/js/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('public/all/js/script.js')}}"></script>
  </body>

</html>





