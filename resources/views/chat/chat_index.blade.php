@extends('layouts.footer_layout')
@section('content')
    <link rel="stylesheet" href="/css/chat/chat_list.css">
    <link rel="stylesheet" href="/css/chat/chat_show.css">
    <title>채팅 리스트</title>
    <script>
        $(document).ready(function() {
            $('.chat_list_header ion-icon').on("click", function() {
                $(this).toggleClass('on');
                if ($(this).hasClass('on')) {
                    $('.search_bar').css("opacity", "1");
                } else {
                    $('.search_bar').css("opacity", "0");
                }
            });
        })
    </script>
    </head>

    <body>
        <div id="chat_container">
            <div id="chat_list_container">
                <div class="chat_list_header">
                    <p>채팅</p>
                    <form action="" method="GET">
                        <div>
                            <input type="text" name="" id="" class="search_bar">
                            <ion-icon name="search-outline"></ion-icon>
                        </div>
                    </form>
                </div>
                <div class="chat_list_wrap">
                    <a href="{{route('chat_show')}}">
                        <div class="chat_wrap">
                            <div class="chat_img_wrap">
                                <img src="/images/client/accessory.jpg" alt="프로필 사진">
                            </div>
                            <div class="chat_content_wrap">
                                <div class="chat_content">
                                    <p class="u_nick">IYOU</p>
                                    <p class="g_title">시계 새제품 팔아요</p>
                                    <p class="last_chat">감사합니다.</p>
                                </div>
                            </div>
                            <div class="notice_wrap">
                                <p class="last_chat_time">20분전</p>
                                <p class="chat_notice">1</p>
                            </div>

                        </div>
                    </a>

                    <a href="#">
                        <div class="chat_wrap">
                            <div class="chat_img_wrap">
                                <img src="/images/client/simba2.jpg" alt="프로필 사진">
                            </div>
                            <div class="chat_content_wrap">
                                <div class="chat_content">
                                    <p class="u_nick">연경잉</p>
                                    <p class="g_title">시계 새제품 팔아요</p>
                                    <p class="last_chat">넵 가나다라마바사 아자차카타파하</p>
                                </div>
                            </div>
                            <div class="notice_wrap">
                                <div class="last_chat_time">20분전</div>
                                <div class="chat_notice">5</div>
                            </div>

                        </div>
                    </a>


                    {{-- @foreach ($users as $user)
                        <div class="user" id="{{ $user->u_id }}">
                            <div class="chat_wrap">
                                <div class="chat_img_wrap">
                                    <img src="{{ $user->u_profile_img }}" alt="">
                                </div>
                                <div class="chat_content_wrap">
                                    <div class="chat_content">
                                        <p class="u_nick">{{ $user->u_nick }}</p>
                                        {{-- <p class="g_title">시계 새제품 팔아요</p>
                                        <p class="last_chat">{{ $user->last_chat }}</p>
                                    </div>
                                </div>
                                <div class="notice_wrap">
                                    <div id="last_chat_time_wrap">
                                        <p class="last_chat_time">
                                            {{ date('h:i a', strtotime($user->chat_time)) }}
                                        </p>
                                    </div>
                                    @if ($user->unread)
                                        <p class="chat_notice">{{ $user->unread }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach --}}


                </div>
            </div>
            <div id="messages"></div>
        </div>
        <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
        {{-- <script>
            $(document).ready(function() {
               let receiver_id = '';
               let my_id = '{{ Auth::id() }}';

                if ('{{ $received }}' != "" && '{{ $received }}' != my_id) {
                    receiver_id = '{{ $received }}';
                    $.ajax({
                        type: "get",
                        url: "/message/" + receiver_id,
                        data: "",
                        cache: false,
                        success: function(data) {
                            $('#chat_list_container').hide();
                            $('footer').hide();
                            $('#messages').show();
                            $('#messages').html(data);
                            scrollToBottomFunc();
                        },
                        error: function(request, status, error) {
                            console.log("code:" + request.status + "\n" + "message:" + request
                                .responseText + "\n" +
                                "error:" + error);
                        }
                    })
                }

                // Enable pusher logging - don't include this in production
                Pusher.logToConsole = true;

                var pusher = new Pusher('908629788eb5dd46616f', {
                    cluster: 'ap3'
                });

                var channel = pusher.subscribe('my-channel');
                channel.bind('my-event', function(data) {
                    if (my_id == data.from) {
                        $('#' + data.to).click();
                    } else if (my_id == data.to) {
                        if (receiver_id == data.from) {
                            // if receiver_id is selected, reload the selected user ....
                            $('#' + data.from).click();
                        } else {
                            // if receiver is not selected, add notification for that user
                            var chat_notice = parseInt($('#' + data.from).find('.chat_notice').html());
                            if (chat_notice) {
                                $('#' + data.from).find('.chat_notice').html(chat_notice + 1);
                            } else {
                                $('.notice_wrap').append('<p class="chat_notice">1</p>');
                            }
                        }
                    }
                });

                $('.user').click(function() {
                    $('.user').removeClass('active');
                    $(this).addClass('active');
                    $(this).find('.pending').remove();

                    receiver_id = $(this).attr('id');
                    $.ajax({
                        type: "get",
                        url: "/message/" + receiver_id,
                        data: "",
                        cache: false,
                        success: function(data) {
                            $('#chat_list_container').hide();
                            $('footer').hide();
                            $('#messages').show();
                            $('#messages').html(data);
                            scrollToBottomFunc();
                        },
                        error: function(request, status, error) {
                            console.log("code:" + request.status + "\n" + "message:" + request
                                .responseText + "\n" +
                                "error:" + error);
                        }
                    })
                });


                $(document).on('click', '.send', function(e) {
                    var message = $('#chat_text').val();
                    //check if enter key is pressed amd ,essage os not null also receiver is selected
                    if (message != '' && receiver_id != '') {
                        $('#chat_text').val('') // while click button will be empty

                        var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "post",
                            url: "message",
                            data: datastr,
                            cache: false,
                            success: function(data) {

                            },
                            error: function(request, status, error) {
                                console.log("code:" + request.status + "\n" + "message:" +
                                    request.responseText + "\n" +
                                    "error:" + error);
                            },
                            complete: function() {
                                scrollToBottomFunc();
                            }
                        });
                    }
                });
            });
            //스크롤 다운 오토
            function scrollToBottomFunc() {
                $(window).scrollTop($('.chat')[0].scrollHeight + 20);
            }
        </script> --}}
    @endsection
