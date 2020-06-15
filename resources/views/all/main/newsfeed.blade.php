 @extends('all.master')
 @section('extra-css')
 <style>
  .image-upload>input {
    display: none;
  }
</style>
 @endsection
@section('content')


<div class="col-md-7">

        <div class="create-post">
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    @if (isset(auth()->user()->image))
                      <img src="{{asset(auth()->user()->image)}}" alt="user" class="profile-photo-md pull-left" />
                    @else
                      <img src="{{asset('back/images/user/default.jpg')}}" alt="user" class="profile-photo-md pull-left" />
                    @endif
                    <textarea name="body" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                  </div>
                </div>
                <div class="col-md-5 col-sm-5">
                  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                  <div class="tools">
                    <ul class="publishing-tools list-inline">
                     <li><a href="#"><i class="ion-compose"></i></a></li>
                      {{-- <li><input type="file" name="image"><i class="ion-images"></i></li> --}}
                      
                      <li>
                        <a href="#">
                          <span class="image-upload">
                            <label for="file-input">
                              <i class="ion-images"></i>
                            </label>
                          
                            {{-- <input  type="file" /> --}}
                            <input id="file-input" type="file" name="image">
                          </span>
                        </a>
                      </li>
                      <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                      <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                    </ul>
                    <button class="btn btn-primary pull-right">Post</button>
                  </div>
                </div>
              </div>
            </form>
        </div>
          @if ($posts->count() > 0)
            @foreach ($posts as $post)
            <div class="post-content">
              @if (isset($post->image))
              <img src="{{ asset($post->image) }}" alt="post-image" class="img-responsive post-image" />
              @endif
                <div class="post-container">
                  @if (isset($post->user->image))
                    <img src="{{($post->user->image)}}" alt="user" class="profile-photo-md pull-left" />
                  @else
                    <img src="{{asset('back/images/user/default.jpg')}}" alt="user" class="profile-photo-md pull-left" />
                  @endif
                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="{{ route('single-user', $post->user->id) }}" class="profile-link">{{ $post->user->name}}</a> <span class="following">following</span></h5>
                      <p class="text-muted">Published a photo about {{ $post->created_at->diffForHumans() }}</p>
                    </div>
                    <div class="reaction">
                      <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                      <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                      <p>{{ $post->body }}</p>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-comment">
                      <img src="{{asset('public/all/images/users/user-11.jpg')}}" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="post-comment">
                      <img src="{{asset('public/all/images/users/user-4.jpg')}}" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="post-comment">
                      <img src="{{asset('public/all/images/users/user-1.jpg')}}" alt="" class="profile-photo-sm" />
                      <input type="text" class="form-control" placeholder="Post a comment">
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            @endif
            <!-- Post Content
            ================================================= -->
            {{-- <div class="post-content">
               <img src="{{asset('public/all/images/users/user-2.jpg')}}" alt="post-image" class="img-responsive post-image" />
              <div class="post-container">
                <img src="{{asset('public/all/images/users/user-3.jpg')}}" alt="user" class="profile-photo-md pull-left" />
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="timeline.html" class="profile-link">Sophia Lee</a> <span class="following">following</span></h5>
                    <p class="text-muted">Updated her status about 33 mins ago</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 75</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 8</a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  </div>
                  <div class="line-divider"></div>
                   <div class="post-comment">
                    <img src="{{asset('public/all/images/users/user-14.jpg')}}" alt="" class="profile-photo-sm" />
                    <p><a href="timeline.html" class="profile-link">Olivia </a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <i class="em em-anguished"></i> Ut enim ad minim veniam, quis nostrud </p>
                  </div>
                  <div class="post-comment">
                    <img src="{{asset('public/all/images/users/user-1.jpg')}}" alt="" class="profile-photo-sm" />
                    <p><a href="timeline.html" class="profile-link">Sarah</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                  </div>
                  <div class="post-comment">
                    <img src="{{asset('public/all/images/users/user-2.jpg')}}" alt="" class="profile-photo-sm" />
                    <p><a href="timeline.html" class="profile-link">Linda</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                  <div class="post-comment">
                    <img src="{{asset('public/all/images/users/user-1.jpg')}}" alt="" class="profile-photo-sm" />
                    <input type="text" class="form-control" placeholder="Post a comment">
                  </div>
                </div>
              </div>
            </div> --}}

           

            </div>

@endsection