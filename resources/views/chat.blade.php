<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicons -->
    <link href="{{asset("assets/img/favicon.png")}}" rel="icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset("assets/plugins/fontawesome/css/fontawesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/plugins/fontawesome/css/all.min.css")}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
			<script src="{{asset("assets/js/html5shiv.min.js")}}"></script>
			<script src="{{asset("assets/js/respond.min.js")}}"></script>
		<![endif]-->

</head>

<body class="chat-page">

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
@yield("content")
<!-- /Header -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="settings-back mb-3">
                <a href="{{route("home")}}">
                    <i class="fas fa-long-arrow-alt-left"></i> <span>Back</span>
                </a>
            </div>
            <div class="row">
                <div class="col-sm-12 mb-4">
                    <div class="chat-window">

                        <!-- Chat Left -->
                        <div class="chat-cont-left">
                            <form class="chat-search d-flex align-items-center">
                                <div class="avatar avatar-online mr-3">
                                    <img src="{{asset("assets/img/user/user.jpg")}}" alt="User Image"
                                         class="avatar-img rounded-circle">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                            <div class="chat-header">
                                <span>Chats</span>
                            </div>
                            <div class="chat-users-list">
                                <div class="chat-scroll">
                                    @forelse($students as $student)
                                        <a
                                            href="{{route("studentChat", ["id" => $student->id])}}"
                                            id="media"
                                            class="media"
                                            onclick="clicked()"
                                        >
                                            <div class="media-img-wrap">
                                                <div class="avatar avatar-away">
                                                    <img
                                                        src="{{asset("assets/img/user/user14.jpg")}}"
                                                        alt="User Image"
                                                        class="avatar-img rounded-circle"
                                                    >
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="user-name">{{$student->full_name}}</div>
                                                    <div class="user-last-chat">Template</div>
                                                </div>
                                                <div>
                                                    <div class="last-chat-time block">2 min</div>
                                                    {{--                                                    <div--}}
                                                    {{--                                                        class="badge badge-success badge-pill fill-blue">{{$lastMessage->read_at == null ? \Illuminate\Support\Facades\DB::table("chats")->where(["read_at" => null])->count(["message"]) : ''}}</div>--}}
                                                </div>
                                            </div>
                                        </a>
                                    @empty
                                        <div class="text-center font-weight-bold">Student Not Found</div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <!-- /Chat Left -->

                        <!-- Chat Right -->
                        @isset($_GET["id"])
                            <div class="chat-cont-right">
                                <div class="chat-header">
                                    <a id="back_user_list" href="javascript:void(0)" class="back-user-list">
                                        <i class="material-icons">chevron_left</i>
                                    </a>
                                    <div class="media">
                                        <div class="media-img-wrap">
                                            <div class="avatar {{auth()->user() ? "avatar-online" : "avatar-offline"}}">
                                                <img src="{{asset("assets/img/user/user.jpg")}}" alt="User Image"
                                                     class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="user-name">{{$studentId->full_name}}</div>
                                        </div>
                                    </div>
                                    <div class="chat-options">
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#voice_call">
                                            <i class="material-icons">local_phone</i>
                                        </a>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#video_call">
                                            <i class="material-icons">videocam</i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                    </div>
                                </div>
                                <div class="chat-body">
                                    <div class="chat-scroll">
                                        <ul class="list-unstyled">
                                            @forelse($lastMessage as $message)
                                                <li class="media sent">
                                                    <div class="media-body" id="media-body">
                                                        <div class="msg-box" id="msg-box">
                                                            <div>
                                                                <p>{{$message->message}}</p>
                                                                <ul class="chat-msg-info">
                                                                    <li>
                                                                        <div class="chat-time">
                                                                            <span>8:30 AM</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @empty
                                                <p>No message found</p>
                                            @endforelse
                                            <li class="media received">
                                                <div class="avatar">
                                                    <img src="{{asset("assets/img/user/user.jpg")}}" alt="User Image"
                                                         class="avatar-img rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <div class="msg-box">

                                                    </div>
                                                </div>
                                            </li>
                                            <li class="chat-date">Today</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chat-footer">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="btn-file btn">
                                                <i class="fa fa-paperclip"></i>
                                                <input type="file">
                                            </div>
                                        </div>
                                        <input type="text" class="input-msg-send form-control"
                                               placeholder="Type something"
                                               id="chat" name="sent-message">
                                        <div class="input-group-append">
                                            <button type="button" class="btn msg-send-btn">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endisset
                        @empty($_GET["id"])
                            <div style="margin: 27vh 0 0 20vh;">
                                <h2>Please select a chat to start messaging</h2>
                            </div>
                    @endempty
                    <!-- /Chat Right -->

                    </div>
                </div>
            </div>
            <!-- /Row -->

        </div>

    </div>
    <!-- /Page Content -->
</div>
<!-- /Main Wrapper -->

<!-- Voice Call Modal -->
<div class="modal fade call-modal" id="voice_call">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <!-- Outgoing Call -->
                <div class="call-box incoming-box">
                    <div class="call-wrapper">
                        <div class="call-inner">
                            <div class="call-user">
                                <img alt="User Image" src="{{asset("assets/img/user/user.jpg")}}" class="call-avatar">
                                <h4>Marvin Downey</h4>
                                <span>Connecting...</span>
                            </div>
                            <div class="call-items">
                                <a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal"
                                   aria-label="Close"><i class="material-icons">call_end</i></a>
                                <a href="voice-call.html" class="btn call-item call-start"><i class="material-icons">call</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Outgoing Call -->

            </div>
        </div>
    </div>
</div>
<!-- /Voice Call Modal -->

<!-- Video Call Modal -->
<div class="modal fade call-modal" id="video_call">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <!-- Incoming Call -->
                <div class="call-box incoming-box">
                    <div class="call-wrapper">
                        <div class="call-inner">
                            <div class="call-user">
                                <img class="call-avatar" src="{{asset("assets/img/user/user.jpg")}}" alt="User Image">
                                <h4>Richard Wilson</h4>
                                <span>Calling ...</span>
                            </div>
                            <div class="call-items">
                                <a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal"
                                   aria-label="Close"><i class="material-icons">call_end</i></a>
                                <a href="video-call.html" class="btn call-item call-start"><i class="material-icons">videocam</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Incoming Call -->

            </div>
        </div>
    </div>
</div>
<!-- Video Call Modal -->

<!-- jQuery -->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset("assets/js/popper.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>

<!-- Custom JS -->
<script src="{{asset("assets/js/script.js")}}"></script>

<script>
    document.getElementById("chat").addEventListener("change", function () {
        const media_body = document.getElementById("media-body");
        const msg_box = document.createElement("div");
        msg_box.className = "msg-box";
        media_body.append(msg_box);
        let div = document.createElement("div");
        msg_box.append(div);
        let message = document.createElement("p");
        message.textContent = this.value;
        div.append(message);
    });
</script>

</body>
</html>
