 <div class="col-md-2 static">
   @php
   $ids = [];
       $friends = auth()->user()->getAcceptedFriendships();
       if ($friends->isNotEmpty()) {
         foreach ($friends as $key => $friend) {
           if ($friend->recipient_id != auth()->user()->id) {
             $ids[] = $friend->recipient_id;
             
            } else {
              $ids[] = $friend->sender_id;
            }
          }
        }else {
          // dump('kicchu nei');
        }
        $logedIn = auth()->user()->id;
      $notUsers = App\User::whereNotIn('id', $ids)->get();
   @endphp
<div class="suggestions" id="sticky-sidebar">
              <h4 class="grey">Who to Follow</h4>
              @foreach ($notUsers as $notUser)
                  @if ($notUser->id != auth()->user()->id)
                  <div class="follow-user" style="width: 100%; margin-bottom: 10px; height: 90px;">
                    <img src="{{asset('public/all/images/users/user-11.jpg')}}" alt="" class="profile-photo-sm pull-left" />
                    <div>
                      <h5><a href="{{ route('single-user', $notUser->id) }}">{{ $notUser->name }}</a></h5>
                      @if (auth()->user()->hasFriendRequestFrom($notUser) && auth()->user()->id != $notUser->id)
                    <form action="{{ route('accept-friend-request', $notUser->id) }}" method="POST" style="float: left; margin-right: 2px">
                      @csrf
                      <button class="btn btn-success" style="font-size: 12px; width: 100px; margin-bottom: 2px">Accept</button>
                    </form>
                    <form action="{{ route('cancel-friend-request', $notUser->id) }}" method="POST" style="float: left">
                      @csrf
                      <button class="btn btn-danger" style="font-size: 12px; width: 100px;">Cancel</button>
                    </form>
                    @elseif (auth()->user()->isFriendWith($notUser) && auth()->user()->id != $notUser->id)
                    <form action="{{ route('remove-friend', $notUser->id) }}" method="POST" style="float: left">
                      @csrf
                      <button class="btn-warning" style="font-size: 12px;">Unfriend</button>
                    </form>
                    @elseif(auth()->user()->hasSentFriendRequestTo($notUser) && auth()->user()->id != $notUser->id)
                      <form action="{{ route('remove-friend-request', $notUser->id) }}" method="POST" style="float: left">
                        @csrf
                        <button class="btn btn-warning" style="font-size: 12px; padding: 8px 20px;">Cancel Friend Request</button>
                      </form>
                    @elseif(!auth()->user()->hasSentFriendRequestTo($notUser) && auth()->user()->id != $notUser->id)
                    <form action="{{ route('send-friend-request', $notUser->id) }}" method="POST" style="float: left">
                      @csrf
                      <button class="btn btn-primary" style="font-size: 12px; padding: 8px 20px;">Add Friend</button>
                    </form>
                    @endif
                    </div>
                  </div>
                  @endif
              @endforeach

            </div>
            </div>