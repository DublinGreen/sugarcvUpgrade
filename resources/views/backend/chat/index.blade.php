@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Chat')

@push('after-styles')
<link href="{{ url('admin_css/bootstrap.css') }}" rel="stylesheet">
@endpush

@section('template-custom-js')
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/5.11.1/firebase-app.js"></script>
<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/5.11.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.11.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.11.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.11.1/firebase-messaging.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.11.1/firebase-functions.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.23.0/moment.min.js"></script>
<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
		apiKey: "AIzaSyCn6mA6pOrr3lWgp2nF3Ywlg_ZfF4zfgi0",
		authDomain: "sugarcv-f3145.firebaseapp.com",
		databaseURL: "https://sugarcv-f3145.firebaseio.com",
		projectId: "sugarcv-f3145",
		storageBucket: "sugarcv-f3145.appspot.com",
		messagingSenderId: "127995744271",
		appId: "1:127995744271:web:6585901e265e6ea94ed37a",
		measurementId: "G-Y50Q0JSTET"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

</script>
<script>

  /* event for if any new chat created */
  var dbRefunread = firebase.database().ref('users');
  dbRefunread.once("value", function(ysnapshot) {
	  var unread = ysnapshot.numChildren();
	  for(stu in ysnapshot.val()){
		var messagesRef = firebase.database().ref('users/'+stu);
		messagesRef.orderByChild("Status").equalTo("0").once("value", function(ysnapshot) {
			var unread = ysnapshot.numChildren();
			if(unread > 0){
			  var snap = ysnapshot.val();
			  var len = Object.keys(snap).length - 1;
			  var msgs = Object.values(snap);
			  
			  jQuery(".chat-users[data-userid='"+stu+"'] .sideBar-message").text(msgs[len].Message);
			  jQuery(".chat-users[data-userid='"+stu+"'] .contact-status").addClass("on");
			  jQuery(".chat-users:first-child").before(jQuery(".chat-users[data-userid='"+stu+"']"));
			}
		});
	  }
	  jQuery(".overlay").hide();
	  jQuery("#chat-realtime").removeAttr("style");
  });

  /* event for if any new chat created 
  var dbRefnew = firebase.database().ref('hillcross/students');
  dbRefnew.on("child_added", function(snapshot, prevChildKey) { 
	var snap = snapshot.val();
	var len = Object.keys(snap).length - 1;
	var msgs = Object.values(snap);
	var sId = snapshot.key;
	if(jQuery(".chat-users[data-userid='"+sId+"']").length == 0){
	  var view = '<div class="row sideBar-body chat-users" data-tipe="users" data-avatar="{{ url("/") }}/public/images/user.jpg" data-status="online" data-userid="'+sId+'" data-name="'+sId+' ">';
	  view += '<div class="col-sm-3 col-xs-3 sideBar-avatar"><div class="avatar-icon"><span class="contact-status"></span><img src="{{ url("/") }}/public/images/user.jpg"></div></div>';
	  view += '<div class="col-sm-9 col-xs-9 sideBar-main"><div class="row"><div class="col-sm-8 col-xs-8 sideBar-name"><span class="name-meta">'+sId+' </span></div><div class="col-sm-4 col-xs-4 pull-right sideBar-time"><span class="time-meta pull-right"></span></div><div class="col-sm-12 sideBar-message"></div></div></div></div>';
	  jQuery("#userList .sideBar").append(view);
	  jQuery(".chat-users[data-userid='"+sId+"'] .sideBar-message").text(msgs[len].Message);
	  jQuery(".chat-users[data-userid='"+sId+"'] .contact-status").addClass("on");
	  jQuery(".chat-users:first-child").before(jQuery(".chat-users[data-userid='"+sId+"']"));
	  $('#userList').animate({ scrollTop: 0 }, 0);
	} else {
	  jQuery(".chat-users[data-userid='"+sId+"'] .sideBar-message").text(msgs[len].Message);
	  jQuery(".chat-users[data-userid='"+sId+"'] .contact-status").addClass("on");
	  jQuery(".chat-users:first-child").before(jQuery(".chat-users[data-userid='"+sId+"']"));
	}
  });*/

  /* event for if any message trigger */
  var dbRef = firebase.database().ref('users');
  dbRef.on("child_changed", function(snapshot, prevChildKey) {
	var snap = snapshot.val();
	var len = Object.keys(snap).length - 1;
	var msgs = Object.values(snap);
	var sId = msgs[len].ID;
	jQuery(".chat-users[data-userid='"+sId+"'] .sideBar-message").text(msgs[len].Message);
	jQuery(".chat-users[data-userid='"+sId+"'] .contact-status").addClass("on");
	jQuery(".chat-users:first-child").before(jQuery(".chat-users[data-userid='"+sId+"']"));
	$('#userList').animate({ scrollTop: 0 }, 500);
  });
  
  $.studentID = "null";
  var updates = {};
  jQuery(document).on("click", ".chat-users",  function(){
	jQuery('.chat-users').removeClass("active");
	jQuery(this).find(".contact-status").removeClass("on");
	jQuery(this).addClass("active");
	if($.studentID != "null"){
	  var notify = firebase.database().ref('users/'+$.studentID);
	  notify.off('child_added');
	}
	var studentID = jQuery(this).data("userid");
	$.studentID = studentID;
	var name = jQuery(this).find(".name-meta").text();
	jQuery("#heading-name-meta").text(name);
	jQuery(".heading .heading-avatar, .heading .heading-name").show();

	var el = document.getElementById("messages-list");
	el.innerHTML = "";
	var notify = firebase.database().ref('users/'+studentID);
	notify.off('child_added');
	notify.on("child_added", function(snapshot, prevChildKey) {
		  var mysnapshot = snapshot.val();
		  var Time =   moment(mysnapshot.Time).format("DD-MM-YYYY hh:mm:ss A");
		  var htmlinputs = "";
		  if(mysnapshot.ID == studentID){
			htmlinputs = '<div class="row message-body">';
			htmlinputs += '<div class="col-sm-12 message-main-receiver">';
			htmlinputs += '<div class="receiver">';
			htmlinputs += '<a class="message-username" style="color:#8b7add !important">'+name+'</a>';
			htmlinputs += '<div class="message-text">'+mysnapshot.Message+'</div>';
			htmlinputs += '<span class="message-time pull-right">'+ Time +'</span>	';
			htmlinputs += '</div></div></div>';
		  }
		  else{
			htmlinputs = '<div class="row message-body">';
			htmlinputs += '<div class="col-sm-12 message-main-sender">';
			htmlinputs += '<div class="sender">';
			htmlinputs += '<div class="message-text">'+mysnapshot.Message+'</div>';
			htmlinputs += '<div class="message-time pull-right">'+ Time +'</div>';
			htmlinputs += '</div></div></div>';
		  }
		  el.innerHTML += htmlinputs;
		  $('#conversation').animate({ scrollTop: $("#conversation")[0].scrollHeight }, 0);
		  // snapshot.ref.update({ Status:"1" });
	});
	
  });

  $('#comment').keypress(function(event){
	  var keycode = (event.keyCode ? event.keyCode : event.which);
	  if(keycode == '13'){
		jQuery("#send").click();
	  }
  });
  jQuery("#send").click(function(){
	var milliseconds = new Date().getTime();
	var UserRole = "1";
	var senderID = "{{ $user->id }}";
	var messageText = jQuery("#comment").val();
	if ( $.trim( messageText ) == '' ){
	  jQuery("#comment").val(" ").focus().css("box-shadow", "0px 0px 4px 1px #009688");
	  return false;
	}
	jQuery("#comment").removeAttr("style");
	$('#userList').animate({ scrollTop: 0 }, 500);
/* 	jQuery.ajax({
	  url: "",
	  type: "post",
	  data: {"studentID":$.studentID, "messageText":messageText, "_token":"<?php echo csrf_token() ?>"},
	  success:function(result){

	  }
	});
 */
	firebase.database().ref('users/' + $.studentID).push({
	  Time: milliseconds,
	  Role: UserRole,
	  Message: messageText,
	  ID: senderID
	}, function (error) {
	  if (error) {
		console.log(error);
	  }
	  else {
		jQuery("#comment").val("");
	  }
	});
	jQuery(".chat-users:first-child").before(jQuery(".chat-users[data-userid='"+$.studentID+"']"));
  });
  no = 0,

  $("body #conversation").scroll(function() {
	// scroll bottom
	if ($(this).scrollTop() >= ($("body .messages").height() - $(this).height())) {
		$("body .message-scroll").hide();
		$("body .message-previous").hide();
		return false;
	} else if ($(this).scrollTop() == 0) {
		var messages = jQuery(".message-body");
		if (no >= messages.length) {
			$("body .message-previous").hide();
		} else {
			$("body .message-previous").show();
		}
		return false;
	} else {
		$("body .message-previous").hide();
		$("body .message-scroll").show();
		return false;
	}
});


  function scrollBottom() {
	setTimeout(function() {
		var cc = $('#conversation');
		var dd = cc[0].scrollHeight;
		cc.animate({
			scrollTop: dd
		}, 10);
		$("body .message-scroll").hide();
		$("body .message-previous").hide();
	}, 1000);
}

</script>

@endsection

@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <h1 class="dimmed-color">Chat </h1>
    </section>
    <!-- Main content -->
    <section class="content Chat">
				<div class="overlay" style="position: fixed;left: 50%;top: 50%;z-index: 99;"><i class="fa fa-circle-o-notch fa-spin" style="font-size: 50px;color: #009688;"></i></div>
				<div class="" id="chat-realtime" style="opacity:0.6;">				
					<div class="row app-one">
							<div class="col-sm-4 side chat_mobile">
								<div class="side-one">
									<div class="row heading">
										<div class="col-sm-2 col-xs-2 heading-avatar">
											<div class="heading-avatar-icon">
												<img class="me" src="{{url('/images/user.jpg') }}">
											</div>
										</div>
										<!--div class="col-sm-2 col-xs-2  heading-logout  pull-right">
											<i class="fa fa-sign-out fa-2x  pull-right" aria-hidden="true"></i>
										</div-->
										<div class="col-sm-2 col-xs-2 heading-compose  pull-right chat_user_admin">
											<i class="fa fa-comments fa-2x  pull-right" aria-hidden="true"></i>
										</div>
										<!--div class="col-sm-2 col-xs-2 heading-home  pull-right" data-tipe="rooms" data-avatar="image/public.jpg" id="Public">
											<span class="inbox-status">0</span>
											<i class="fa fa-home fa-2x  pull-right" aria-hidden="true"></i>
										</div-->
									</div>
									
									<div class="row searchBox hidden">
										<div class="col-sm-12 searchBox-inner">
											<div class="form-group has-feedback">
												<input id="searchText" type="text" class="form-control" name="searchText" placeholder="Search">
											</div>
										</div>
									</div>
									<div class="row sideBar" style="max-height: 370px;" id="userList">
											<div class="row sideBar" >
											@foreach ($users as $user)
												<div class="row sideBar-body chat-users" data-tipe="users" data-avatar="{{url('/public/images/user.jpg') }}" data-status="online" data-userid="{{ $user->id }}" data-name="{{ $user->firstName or $user->userId }} {{ $user->surName or "" }}">
													<div class="col-sm-3 col-xs-3 sideBar-avatar">
														<div class="avatar-icon">			
															<span class="contact-status"></span>			
															<img src="{{url('/images/user.jpg') }}">  	
														</div>	
													</div>	
													<div class="col-sm-9 col-xs-9 sideBar-main">  	
													<div class="row">			
														<div class="col-sm-8 col-xs-8 sideBar-name">	  			
															<span class="name-meta">{{ $user->first_name or $user->id }} {{ $user->last_name or "" }}</span>			
														</div>			
														<div class="col-sm-4 col-xs-4 pull-right sideBar-time">	 			
															<span class="time-meta pull-right"></span>			
														</div>			
														<div class="col-sm-12 sideBar-message">
														</div>  	
														</div>	
													</div>
												</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-8 conversation hide_section">
								<div class="row heading">
									<!--div class="col-sm-1 col-xs-1 user-back">
										<i class="fa fa-arrow-left" aria-hidden="true"></i>
									</div-->
									<div class="col-sm-1 col-md-1 col-xs-3 heading-avatar" style="display:none;">
										<div class="heading-avatar-icon">
											<img class="you" src="{{url('/images/user.jpg') }}">
										</div>
									</div>
									<div class="col-sm-6 col-xs-4 heading-name" style="display:none;">
										<p id="heading-name-meta">Admin</p>
										<span id="heading-online"></span>
									</div>
									<div class="col-sm-2 col-xs-2 heading-compose pull-right mobile_toggle">
										<i class="fa fa-comments fa-2x  pull-right" aria-hidden="true"></i>
									</div>
								</div>
								<div class="row message" id="conversation">
									<p class="messages" id="messages-list" style="width:100%;">
									</p>
									<div class="message-scroll">
										<div id="scroll" onclick="$('#conversation').animate({ scrollTop: $('#conversation')[0].scrollHeight }, 0);">
											<a>
											<i class="fa fa-chevron-down"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="row imagetmp">
										<div id="reviewImg"></div>
								</div>
								<div class="row reply">
									<div class="col-sm-1 col-xs-1 reply-recording" align="center">
									</div>
									<div class="col-sm-10 col-xs-10 reply-main">
										<textarea class="form-control" data-emojiable="true" rows="1" id="comment"></textarea>
									</div>
									<div class="col-sm-1 col-xs-1 reply-send" id="send">
										<i class="fa fa-send fa-2x pull-right" aria-hidden="true"></i>
									</div>
								</div>
							</div>
					</div>
				</div>
						
    </section>
</div>
<style>
	#naek {
    position: absolute;
    right: 60px;
    bottom: 110px;
    z-index: 100;
}

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.form-signin #username,
.form-signin #avatar {
    direction: ltr;
    height: 44px;
    font-size: 16px;
	border: none;
}

.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.emoji-menu {
    position: fixed;
	bottom: 60px;
	height: auto
}

.fa-smile-o {
	font-size: 20px !important;
	margin: 3px
}

.inbox-status {
	position: absolute;
	right: 0;
	margin: 0;
	width: 15px;
	height: 15px;
	border-radius: 50%;
	background: #FF5C5C;
	color: #fff;
	text-align: center;
	font-size: 10px
}

.inbox-count {
	margin: 5px 0px 0px 10px;
	width: 15px;
	height: 15px;
	border-radius: 50%;
	background: #4FC3F7;
	color: #fff;
	text-align: center;
	vertical-align: center;
	font-size: 10px
}

.contact-status {
	position: absolute;
	left: 0;
	margin: 0;
	width: 10px;
	height: 10px;
	border-radius: 50%;
}

.contact-status.on {
	border: 2px solid #2ecc71;
	background: #2ecc71;
}

.contact-status.off {
	border: 2px solid #95a5a6;
	background: #95a5a6;
}

.fa-2x {
  font-size: 1.5em;
}

#chat-realtime {
  position: relative;
  overflow: hidden;
  top: 19px;
  height: calc(100% - 38px);
  margin: auto;
  padding: 0;
  background: #fff;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .06), 0 2px 5px 0 rgba(0, 0, 0, .2);
	letter-spacing: 1px;
  font-weight: bold;
}

.app-one {
	display: block;
  background-color: #f7f7f7;
  height: 100%;
  overflow: hidden;
  margin: 0;
  padding: 0;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .06), 0 2px 5px 0 rgba(0, 0, 0, .2);
}

.side {
  padding: 0;
  margin: 0;
	height: 100%;
	max-height: 500px;
}
.side-one {
  padding: 0;
  margin: 0;
  height: 100%;
  width: 100%;
  z-index: 1;
  position: relative;
  display: block;
  top: 0;
}

.side-two {
  padding: 0;
  margin: 0;
  height: 100%;
  width: 100%;
  z-index: 2;
  position: relative;
  top: -100%;
  left: -100%;
  -webkit-transition: left 0.3s ease;
  transition: left 0.3s ease;

}


.heading {
  padding: 10px 16px 10px 15px;
  margin: 0;
  height: 60px;
  width: 100%;
  z-index: 1000;
    background-color: #009688;
}

.heading-avatar {
  padding: 0;
  cursor: pointer;

}

.heading-avatar-icon img {
  border-radius: 50%;
  height: 40px;
  width: 40px;
}

.heading-name {
  padding: 0 !important;
}

#heading-name-meta {
  font-weight: 700;
  font-size: 100%;
  padding: 5px;
  text-align: left;
  text-overflow: ellipsis;
  white-space: nowrap;
  color: #fff;
  display: block;
  padding-bottom: 0px !important;
  margin-bottom: 0px !important
}
#heading-online {
  padding: 0 5px;
  font-size: 12px;
		color: rgba(255,255,255,0.6)
}
.heading-compose,
.heading-home {
  padding: 0;
}

.heading-compose i,
.heading-home i {
  text-align: center;
  padding: 5px;
  color: #fff;
  cursor: pointer;
}

.heading-logout {
  padding: 0;
  margin-left: 10px;
}

.heading-logout i {
  text-align: right;
  padding: 5px;
  color: #fff;
  cursor: pointer;
}

.user-fork {
  padding: 0 !important;
  margin-left: 10px;
  text-align: right;
}

.user-fork i {
  padding: 5px;
  color: #222;
}

.searchBox {
  padding: 0 !important;
  margin: 0 !important;
  height: 60px;
  width: 100%;
}

.searchBox-inner {
  height: 100%;
  width: 100%;
  padding: 10px !important;
  background-color: #fbfbfb;
}


/*#searchBox-inner input {
  box-shadow: none;
}*/

.searchBox-inner input:focus {
  outline: none;
  border: none;
  box-shadow: none;
}

.sideBar {
  padding: 0 !important;
  margin: 0 !important;
  background-color: #fff;
  overflow-y: auto;
  border: 1px solid #f7f7f7;
  height: calc(100% - 120px);
}

.sideBar-body {
  position: relative;
  padding: 10px !important;
  border-bottom: 1px solid #f7f7f7;
  height: 72px;
  margin: 0 !important;
  cursor: pointer;
}

.sideBar-body.active,
.sideBar-body:hover {
  background-color: #f2f2f2;
}

.sideBar-avatar {
  text-align: center;
  padding: 0 !important;
}

.avatar-icon img {
  border-radius: 50%;
  height: 49px;
  width: 49px;
}

.sideBar-main {
  padding: 0 !important;
}

.sideBar-main .row {
  padding: 0 !important;
  margin: 0 !important;
}

.sideBar-name {
  padding: 0px 10px 0px 10px!important;
  height: 50% !important
}

.sideBar-message {
  padding: 0px 12px 0px 12px!important;
  color: rgba(0, 0, 0, .6);
  height: 50% !important;
}

.sideBar-message i.fa-check {
  color: #4FC3F7;
  margin-right: 10px
}

.name-meta {
  font-size: 100%;
  padding: 1% !important;
  text-align: left;
  text-overflow: ellipsis;
  white-space: nowrap;
  color: #000;
}

.sideBar-time {
  padding: 0px 10px 0px 10px!important;
  height: 50% !important
}

.time-meta {
  text-align: right;
  font-size: 12px;
  padding: 1% !important;
  color: rgba(0, 0, 0, .4);
  vertical-align: baseline;
}

/*New Message*/

.newMessage {
  padding: 0 !important;
  margin: 0 !important;
  height: 100%;
  position: relative;
  left: -100%;
}
.newMessage-heading {
  padding: 10px 16px 10px 15px !important;
  margin: 0 !important;
  height: 100px;
  width: 100%;
  background-color: #00bfa5;
  z-index: 1001;
}

.newMessage-main {
  padding: 10px 16px 0 15px !important;
  margin: 0 !important;
  height: 60px;
  margin-top: 30px !important;
  width: 100%;
  z-index: 1001;
  color: #fff;
}

.newMessage-title {
  font-size: 18px;
  font-weight: 700;
  padding: 10px 5px !important;
}
.newMessage-back,
.user-back {
  text-align: center;
  vertical-align: baseline;
  padding: 12px 5px !important;
  display: block;
  cursor: pointer;
}
.user-back {
  color: #fff
}
.newMessage-back i {
  margin: auto !important;
}

.composeBox {
  padding: 0 !important;
  margin: 0 !important;
  height: 60px;
  width: 100%;
}

.composeBox-inner {
  height: 100%;
  width: 100%;
  padding: 10px !important;
  background-color: #fbfbfb;
}

.composeBox-inner input:focus {
  outline: none;
  border: none;
  box-shadow: none;
}

.compose-sideBar {
  padding: 0 !important;
  margin: 0 !important;
  background-color: #fff;
  overflow-y: auto;
  border: 1px solid #f7f7f7;
  height: calc(100% - 160px);
}

/*Conversation*/

#conversation .messgaes {
	display: block;
}

.conversation {
  padding: 0 !important;
  margin: 0 !important;
  height: 100%;
  /*width: 100%;*/
  /*overflow-y: auto;*/
  position: absolute;
  right: 0
}

.message {
    border-left: 1px solid rgba(0, 0, 0, .08);
  padding: 10px 0px !important;
  margin: 0px !important;
  overflow-y: auto;
  background: url("../image/w.jpg")repeat;
  height: calc(100% - 120px);
  border-top: 1px solid rgba(0, 0, 0, .08);
  border-bottom: 1px solid rgba(0, 0, 0, .08);
}
.message-previous {
  margin : 0 !important;
  padding: 0 !important;
  height: auto;
  width: 100%;
  position: absolute;
  text-align: center;
  top: 60px;
}
.previous {
  font-size: 14px;
  padding: 5px !important;
  cursor: pointer;
  background: rgba(225,242,251,0.8);
  border-radius: 50px;
  box-shadow: 0 1px 0.5px rgba(0, 0, 0, 0.13);
  width: 200px;
  margin: 10px auto
}

.previous a {
  text-decoration: none;
  color: #666 !important;
}
.message-scroll {
  margin : 0 !important;
  padding: 0 !important;
  height: auto;
  width: auto;
  position: absolute;
  bottom: 150px;
  right: 5px;
}
#scroll {
  padding: 5px !important;
  cursor: pointer;
  background: rgba(255,255,255,0.8);
  border-radius: 50%;
  box-shadow: 0 1px 0.5px rgba(0, 0, 0, 0.13);
  width: 35px;
  height: 35px;
  margin: 10px;
  text-align: center;
}

#scroll a {
  text-decoration: none;
  color: #666 !important;
}

.message-body {
  margin: 0 !important;
  padding: 0 !important;
  width: auto;
  height: auto;
}

.message-main-receiver {
	max-width: 60%;
	margin-bottom: 10px;
}

.message-main-sender {
  padding: 3px 20px !important;
  margin-left: 40% !important;
  max-width: 60%;
}

.message-username {
  margin: 0 !important;
  padding: 0px 5px 0px 5px !important;
  word-wrap:break-word;
  font-size: 14px;
  cursor: pointer
}

.message-text {
  margin: 0 !important;
  padding: 0px 5px 0px 5px !important;
  word-wrap:break-word;
  font-weight: bold;
  font-size: 14px;
}

.message-text .placeholder {
  width: 100%;
  height: auto;
  max-height: 100px;
  display: block;
  margin: 10px 0px 10px 0px;
  background: #aaa;
  z-index: 999999999;
  overflow-y: hidden;
overflow-x: hidden;
-ms-overflow-x: hidden;
-ms-overflow-y: hidden;
}

.mfp-figure:after {
    box-shadow: none;
    background: transparent; 
}

.mfp-title {
    text-align: center;
}

.message-text .placeholder img {
	margin-top: -50%;
  width: 100%;
  display: block;
}

.message-text iframe {
  width: 100%;
  display: block;
  margin: 10px 0px 10px 0px
}

.message-time {
  margin: 0 !important;
  margin-left: 50px !important;
  font-size: 12px;
  text-align: right;
  color: #9a9a9a;

}

.receiver {
  width: auto !important;
  padding: 4px 10px 7px !important;
  border-radius: 10px 10px 10px 0;
  background: #ffffff;
  font-size: 12px;
  box-shadow: 0 1px 0.5px rgba(0, 0, 0, 0.13);
  word-wrap: break-word;
  display: inline-block;
}

.sender {
  float: right;
  width: auto !important;
  background: #dcf8c6;
  border-radius: 10px 10px 0 10px;
  padding: 4px 10px 7px !important;
  font-size: 12px;
  box-shadow: 0 1px 0.5px rgba(0, 0, 0, 0.13);
  display: inline-block;
  word-wrap: break-word;
}

.imagetmp {
  width: 100%;
  height: 120px;
  position: absolute;
  bottom: 60px;
  background: rgba(255,255,255,0.7);
  display: none;
  padding: 10px 5px 5px 10px !important;
  margin: 0 !important;
  z-index: 1000;
  overflow-y: auto;
overflow-x: hidden;
-ms-overflow-x: hidden;
-ms-overflow-y: auto;
}

.imagetmp #reviewImg {
	width: 100%;
  display: block;
}

.imagetmp img {
	cursor: pointer;
  display: inline-block;
	height: 100px;
	margin-right: 5px;
	margin-bottom: 5px;
}

/*Reply*/

.reply {
    border-left: 1px solid rgba(0, 0, 0, .1);
  height: 60px;
  width: 100%;
  background-color: #f5f1ee;
  padding: 10px 5px 10px 5px !important;
  margin: 0 !important;
  z-index: 1000;
}

.reply .fileinput {
  background-color: #f5f1ee !important;
  border: none !important;
  padding: 0px
}

.reply .fileinput .fa {
  color: #93918f
}

.reply-recording {
  padding: 5px !important;
}

.reply-recording i {
  text-align: center;
  padding: 0px !important;
  color: #93918f;
  cursor: pointer;
}

.reply-send {
  padding: 5px 20px 0px 0px!important;
}

.reply-send i {
  text-align: center;
  padding: 0px !important;
  color: #93918f;
  cursor: pointer;
}

.reply-main {
  padding: 2px 5px !important;
}

.reply-main textarea {
  width: 100%;
  resize: none;
  overflow: hidden;
  padding: 5px !important;
  outline: none;
  border: none;
  text-indent: 5px;
  box-shadow: none;
  height: 100%;
  font-size: 16px;
}

.reply-main textarea:focus {
  outline: none;
  border: none;
  text-indent: 5px;
  box-shadow: none;
}

  .side-one .heading {
	border-right: 1px solid rgba(0,97,87,0.5)
  }

@media screen and (max-width: 700px) {
.message-previous {
	top: 65px
}
  #chat-realtime {
    top: 0;
    height: 100%;
  }
  .heading {
    height: 70px;
  }
  .fa-2x {
    font-size: 2.3em !important;
  }
  .heading-avatar {
    padding: 0 !important;
  }
  .heading-avatar-icon img {
    height: 50px;
    width: 50px;
  }
  .heading-compose,
.heading-home {
    padding: 5px !important;
  }
  .heading-compose i,
.heading-home i {
    cursor: pointer;
  }
  .heading-logout {
    padding: 5px !important;
    margin-left: 10px !important;
  }
  .heading-logout i {
    cursor: pointer;
  }
  .user-fork {
    padding: 0px 5px !important;
    margin-left: 5px !important;
  }
  .sideBar {
    height: calc(100% - 130px);
  }
  .sideBar-body {
    height: 80px;
  }
  .sideBar-avatar {
    text-align: left;
    padding: 0 8px !important;
  }
  .avatar-icon img {
    height: 55px;
    width: 55px;
  }
  .sideBar-main {
    padding: 0 !important;
  }
  .sideBar-main .row {
    padding: 0 !important;
    margin: 0 !important;
  }
  .sideBar-name {
  padding: 0px !important;
  }
  .sideBar-message {
  padding: 0px 10px 0px 10px!important;
  }
  .name-meta {
    font-size: 16px;
    padding: 5% !important;
  }
  .sideBar-time {
  padding: 0px 5px 0px 5px!important;
  }
  .time-meta {
    text-align: right;
    font-size: 14px;
    padding: 4% !important;
    color: rgba(0, 0, 0, .4);
    vertical-align: baseline;
  }
  /*Conversation*/
  .conversation {
    padding: 0 !important;
    margin: 0 !important;
    height: 100%;
    /*width: 100%;*/
    /*overflow-y: auto;*/
	left: 0
  }
  .message {
    height: calc(100% - 140px);
  }
.imagetmp {
  bottom: 70px;
}
  .reply {
    height: 70px;
  }
  .fileinput .fa {
    font-size: 1.8em !important;
  }
  .reply-main {
    padding: 2px 8px !important;
  }
  .reply-main textarea {
    padding: 8px !important;
    font-size: 18px;
  }
  .reply-recording {
    padding: 5px 0 !important;
  }
  .reply-recording i {
    padding: 0px !important;
    font-size: 1.8em !important;
  }
  .reply-send {
    padding: 5px 0 !important;
  }
  .reply-send i {
    padding: 0px !important;
    font-size: 1.8em !important;
  }
}
</style>
@endsection
