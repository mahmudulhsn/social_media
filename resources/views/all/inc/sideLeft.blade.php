
          <div class="col-md-3 static">
            <div class="profile-card">
            	<img src="{{asset('public/all/images/users/user-1.jpg')}}" alt="user" class="profile-photo" />
            	<h5><a href="{{ route('single-user', Auth::user()->id) }}" class="text-white">{{ Auth::user()->name }}</a></h5>
            	<a href="#" class="text-white">{{ Auth::user()->user_id }}</a>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-people"></i><div><a href="{{ route('single-user', Auth::user()->id) }}">My Profile</a></div></li>
              <li><i class="icon ion-ios-people"></i><div><a href="{{URL::to('/people_nearby')}}">People Nearby</a></div></li>
              <li><i class="icon ion-ios-people-outline"></i><div><a href="{{URL::to('/people_nearby')}}">Friends</a></div></li>
              <li><i class="icon ion-chatboxes"></i><div><a href="{{URL::to('/chatroom')}}">Messages</a></div></li>
              <li><i class="icon ion-ios-paper"></i><div><a href="{{URL::to('/all_papers')}}">Papers</a></div></li>
              <li><i class="icon ion-images"></i><div><a href="{{URL::to('/all_images')}}">Images</a></div></li>
              <li><i class="icon ion-ios-videocam"></i><div><a href="{{URL::to('/all_videos')}}">Videos</a></div></li>
            </ul><!--news-feed links ends-->
            <div id="chat-block">
              <div class="title">Categories</div>
              <ul class="online-users list-inline">
                <li><a href="newsfeed-messages.html" title="Linda Lohan"><img src="{{asset('public/all/images/users/user-2.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.html" title="Linda Lohan"><img src="{{asset('public/all/images/users/user-3.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.html" title="Linda Lohan"><img src="{{asset('public/all/images/users/user-4.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.html" title="Linda Lohan"><img src="{{asset('public/all/images/users/user-5.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.html" title="Linda Lohan"><img src="{{asset('public/all/images/users/user-6.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.html" title="Linda Lohan"><img src="{{asset('public/all/images/users/user-8.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.html" title="Linda Lohan"><img src="{{asset('public/all/images/users/user-7.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.html" title="Linda Lohan"><img src="{{asset('public/all/images/users/user-9.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.html" title="Linda Lohan"><img src="{{asset('public/all/images/users/user-10.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <!-- <li><a href="newsfeed-messages.html" title="Linda Lohan">IT</a></li>
                <li><a href="newsfeed-messages.html" title="Sophia Lee">Machine Learning</a></li>
                <li><a href="newsfeed-messages.html" title="John Doe">Image Processing</a></li>
                <li><a href="newsfeed-messages.html" title="John Doe">Internate & Things</a></li>
                <li><a href="newsfeed-messages.html" title="John Doe">Data Mining</a></li>
                <li><a href="newsfeed-messages.html" title="John Doe">Image </a></li>
                <li><a href="newsfeed-messages.html" title="John Doe">Processing</a></li>
                <li><a href="newsfeed-messages.html" title="John Doe">Video </a></li>
                <li><a href="newsfeed-messages.html" title="John Doe">Big Data</a></li> -->
                
              </ul>
            </div><!--chat block ends-->
          </div>