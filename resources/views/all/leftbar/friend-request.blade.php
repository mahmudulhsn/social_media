@extends('all.master')
@section('content')

    			<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
            {{-- <div class="create-post">
            	<div class="row">
            		<div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="{{asset('public/all/images/users/user-1.jpg')}}" alt="" class="profile-photo-md" />
                    <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                  </div>
                </div>
            		<div class="col-md-5 col-sm-5">
                  <div class="tools">
                    <ul class="publishing-tools list-inline">
                      <li><a href="#"><i class="ion-compose"></i></a></li>
                      <li><a href="#"><i class="ion-images"></i></a></li>
                      <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                      <li><a href="#"><i class="ion-map"></i></a></li>
                    </ul>
                    <button class="btn btn-primary pull-right">Publish</button>
                  </div>
                </div>
            	</div>
            </div><!-- Post Create Box End --> --}}

            <!-- Nearby People List
            ================================================= -->
            <div class="people-nearby">
              {{-- @php
                  dd(auth()->user()->getAcceptedFriendships());
              @endphp --}}
              @foreach (auth()->user()->getPendingFriendships() as $friend)
              @php
              if ($friend->recipient_id != auth()->user()->id) {
                $user = App\User::find($friend->recipient_id);
                // dump($user->name);
              } else {
                $user = App\User::find($friend->sender_id);
                // dump($user->name);
              }
              
              // $user = App\User::find($friend->recipient_id);
              //     dd($user->name);
              @endphp
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <a href="{{ route('single-user', $user->id) }}"></a>
                    <img src="{{ $user->image}}" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="{{ route('single-user', $user->id) }}" class="profile-link">{{ $user->name }}</a></h5>
                    {{-- <p>Software Engineer</p>
                    <p class="text-muted">500m away</p> --}}
                  </div>
                  <div class="col-md-3 col-sm-3">
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
                      <button class="btn-warning">Unfriend</button>
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
                  </div>
                </div>
              </div>
              @endforeach


              
            </div>
          </div>



@endsection