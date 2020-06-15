<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/images/2.png')}}">

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   



    {{-- <link rel="stylesheet" href="{{asset('public/all/css/bootstrap.min.css')}}" /> --}}
    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('public/all/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('public/all/css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/all/css/font-awesome.min.css')}}" />
    <link href="{{asset('public/all/css/emoji.css')}}" rel="stylesheet">



    
    <style>
        .bg-white {
            background-color: #231F20 !important;
            color: #fff;
        }
        .navbar {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: 0.5rem 1rem;
            height: 50px;
        }
        .navbar-light .navbar-nav .nav-link {
            color: #FFFFFF;
        }
        ul {
            margin: 0;
            padding: 0;
        }
        li {
            list-style: none;
        }
        ul li{
        list-style-image: none;
        }
        .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
            color: #2496E1;
        }
        .user-wrapper, .message-wrapper{
            border: 1px solid #dddddd;
            overflow-y: auto;
        }
        .user-wrapper {
            height: 600px;
        }
        .user{
            cursor: pointer;
            padding: 5px 0;
            position: relative;
        }
        .user:hover {
            beckground: #eeeeee;

        }
        .user:last-child {
            margin-bottom: 0;
        }
        .pending {
            position: absolute;
            left: 13px;
            top: 9px;
            background: #2D7365;
            margin: 0;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            line-height: 18px;
            padding-left: 5px;
            color: #ffffff;
            font-size: 12px;
        }
        .media-left {
            margin: 0 10px;
        }
        .media-left img {
            width: 64px;
            border-radius: 64px;
        }
        .media-body p {
            padding: 6px 0;
        }
        .message-wrapper {
            padding: 10px;
            height: 536px;
            background: #eeeeee;
        }
        .messages .message {
            margin-bottom: 15px;
        }
        .messages .message:last-child {
            margin-bottom: 0;
        }
        .received, .sent {
            width: 45%;
            padding: 3px 10px;
            border-radius: 10px;
        }
        .received {
            background: #ffffff;
        }
        .sent {
            background: #A7EEF9;
            float: right;
            text-align: right;
        }
        .message p {
            margin: 5px 0;
        }
        .date {
            color: #777777;
            font-size: 12px;
        }
        .active {
            background: #eeeeee;
        }
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 15px 0 0 0;
            display: inline-block;
            border-radius: 4px;
            box-sizing: border-box;
            outline: none;
            border: 1px solid #cccccc;
        }
        input[type=text]:focus {
            border: 1px solid #aaaaaa;
        }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    CrypBuddy
                </a> --}}
                
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('friends') }}">Friends <span style="color: green; font-weight: bold;">({{ auth()->user()->getFriendsCount() }})</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('friend-request') }}">Friends Request <span style="color: yellow">({{ auth()->user()->getPendingFriendships()->count() }})</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('chatroom') }}">Message</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Repositories <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu login">
                                    <li><a href="{{URL::to('/all_repositories')}}">All Repositories </a></li>
                                    <li><a href="{{URL::to('/new_repositories')}}">New Repositories</a></li>
                                    <li><a href="{{URL::to('/repositories_settings')}}">Repositories Settings </a></li>
                                    </ul>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Settings <span class="caret"></span>
                                </a>

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
                            {{-- <li class="nav-item dropdown">
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
                            </li> --}}
                        @endguest






                        {{-- <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Repositories <span><img src="{{asset('public/all/images/down-arrow.png')}}" alt="" /></span></a>
                        <ul class="dropdown-menu login">
                        <li><a href="{{URL::to('/all_repositories')}}">All Repositories </a></li>
                        <li><a href="{{URL::to('/new_repositories')}}">New Repositories</a></li>
                        <li><a href="{{URL::to('/repositories_settings')}}">Repositories Settings </a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
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
                    </li> --}}

                    </ul>








                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://js.pusher.com/5.1/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>

        var receiver_id = '';
        var my_id = "{{ Auth::id() }}";

        $(document) .ready(function () {
            // ajax setup form csrf token     
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
            // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('26e6fe3490436490589e', {
          cluster: 'mt1',
          forceTLS: true
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            // alert(JSON.stringify(data));
            if (my_id == data.from) {
                $('#' + data.to).click();
            } else if (my_id == data.to) {
                if (receiver_id == data.from) {
                    // if receiver is selected, reload the selected user ...
                    $('#' + data.from).click();
                } else {
                    // if receiver is not seleted, add notification for that user
                    var pending = parseInt($('#' + data.from).find('.pending').html());

                    if (pending) {
                        $('#' + data.from).find('.pending').html(pending + 1);
                    } else {
                        $('#' + data.from).append('<span class="pending">1</span>');
                    }
                }
            }
        });


            $('.user') .click(function () {

            $('.user') .removeClass('active');

            $(this) .addClass('active');
            $(this).find('.pending').remove();

            receiver_id = $(this).attr('id');
            

            $.ajax ({
                type: "get",
                url: "message/" + receiver_id,
                data: "",
                cache: false,
                success: function (data) {

                     $('#messages').html(data);
                     scrollToBottomFunc();
                     
                }
            });

        });
            $(document).on('keyup', '.input-text input', function (e) {
            var message = $(this).val();

            // check if enter key is pressed and message is not null also receiver is selected
            if (e.keyCode == 13 && message != '' && receiver_id != '') {
                $(this).val(''); // while pressed enter text box will be empty

                 var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                $.ajax({
                    type: "post",
                    url: "message", // need to create this post route
                    data: datastr,
                    cache: false,
                    success: function (data) {

                    },
                    error: function (jqXHR, status, err) {
                    },
                    complete: function () {
                        scrollToBottomFunc();

}
    })
     }
   });

});

function scrollToBottomFunc() {
        $('.message-wrapper').animate({
            scrollTop: $('.message-wrapper').get(0).scrollHeight
        }, 50);
    }
                                                                       
    </script>
</body>
</html>
