<div class="col-md-12" id="ess-chat">
    <!-- DIRECT CHAT DANGER -->
    <div class="box box-danger direct-chat direct-chat-danger collapsed-box">
      <div class="box-header with-border">
        <h3 class="box-title">Chat</h3>

        <div class="box-tools pull-right">
          <!--span data-toggle="tooltip" title="" class="badge bg-red" data-original-title="3 New Messages">3</span-->
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i><i class="fa fa-minus"></i>
          </button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body" style="">
        <!-- Conversations are loaded here -->
        <div class="direct-chat-messages" id="chat-body">
          <!--/.messages list-->
        </div>
        <!--/.direct-chat-messages-->
      </div>
      <!-- /.box-body -->
      <div class="box-footer" style="">
        <form action="#" onsubmit="return SendMessage();" id="chat-form" method="post">
          <div class="input-group">
            <input type="text" name="message"  placeholder="Type Message ..." class="form-control">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-danger btn-flat">Send</button>
                </span>
          </div>
        </form>
      </div>
      <!-- /.box-footer-->
    </div>
    <!--/.direct-chat -->
  </div>
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
      // var firebaseConfig = {
        // apiKey: "AIzaSyA09kd85TeRurjDkuWtGpwB1rsWScsdf8g",
        // authDomain: "student-management-fef3f.firebaseapp.com",
        // databaseURL: "https://student-management-fef3f.firebaseio.com",
        // projectId: "student-management-fef3f",
        // storageBucket: "student-management-fef3f.appspot.com",
        // messagingSenderId: "1097200296914",
        // appId: "1:1097200296914:web:62344e5e9430573e"
      // };
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
  
      
      var studentID = "{{ $user->id }}";
      //var messageText = "Hiiii from web App";
      var UserRole = "2";
      var senderID = studentID;
  
      //Recieve Message using firebase
      var notify = firebase.database().ref('users/'+studentID);
      notify.on("child_added", function(snapshot, prevChildKey) {
          var el = document.getElementById("chat-body");
            var mysnapshot = snapshot.val();
            var Time =   moment(mysnapshot.Time).format("DD-MM-YYYY hh:mm:ss A");
            var htmlinputs = "";
            if(mysnapshot.ID == studentID){
              htmlinputs = '<div class="direct-chat-msg right">';
              htmlinputs += '<div class="direct-chat-info clearfix">';
              htmlinputs += '<span class="direct-chat-name pull-right"></span>';
              htmlinputs += '<span class="direct-chat-timestamp pull-left">'+ Time +'</span></div>';
              htmlinputs += '<img class="direct-chat-img" src="{{url('/images/user.jpg') }}" alt="Message User Image">';
              htmlinputs += '<div class="direct-chat-text">'+mysnapshot.Message+'</div></div>';
            }
            else{
              htmlinputs = '<div class="direct-chat-msg">';
              htmlinputs += '<div class="direct-chat-info clearfix">';
              htmlinputs += '<span class="direct-chat-name pull-right">Admin</span>';
              htmlinputs += '<span class="direct-chat-timestamp pull-left">'+ Time +'</span></div>';
              htmlinputs += '<img class="direct-chat-img" src="{{url('/images/user.jpg') }}" alt="Message User Image">';
              htmlinputs += '<div class="direct-chat-text">'+mysnapshot.Message+'</div></div>';
            }
            el.innerHTML += htmlinputs;
            $('#chat-body').animate({ scrollTop: $("#chat-body")[0].scrollHeight }, 0);
      });

/*       firebase.database().ref('users/' + studentID).update({
        Status:"1"
      }, function (error) {
        if (error) {
          console.log(error);
        }
        else {
          console.log("success updated");
        }
      });

      var logout = firebase.database().ref('users/' + studentID);
      logout.on("child_changed", function(xsnapshot) {
        if(xsnapshot.val() == "0"){
          window.location.href = "{{ route('logout') }}";
        }
      });
  
 */      // Send Message using firebase
      function SendMessage() {
        var milliseconds = new Date().getTime();
        var messageText = $("#chat-form input[name='message']").val();
        if ( $.trim( messageText ) == '' ){
          jQuery("#chat-form input[name='message']").val(" ").focus().css("box-shadow", "0px 0px 4px 1px #009688");
          return false;
        }
        jQuery("#chat-form input[name='message']").removeAttr("style");
        firebase.database().ref('users/' + studentID).push({
          Time: milliseconds,
          Role: UserRole,
          Message: messageText,
          Status: "0",
          ID: senderID
        }, function (error) {
          if (error) {
            alert("something wrong! please try after sometime");
            console.log(error);
          }
          else {
            $("#chat-form input[name='message']").val("");
			/*
            jQuery.ajax({
              url:"",
              type:"post",
              data:{ "msg":messageText, "_token":"{{ csrf_token() }}" },
              success: function(result){
                console.log(result);
              }
            });*/
          }
        });
        return false;
      }

/*       function _logout(){
        firebase.database().ref('users/' + studentID).update({
          Status:"0"
        }, function (error) {
          if (error) {
            console.log(error);
          }
          else {
            console.log("success updated");
          }
        });
        event.preventDefault();
        document.getElementById('logout-form').submit();
      }
 */    </script>
  