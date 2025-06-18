@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','Work Detail')

@push('after-styles')
@endpush


@push('after-scripts')
  <script>
  function toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
}

$(()=>{
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #create-signup').click(toggleSignUp);
})
  </script>
@endpush


@section('content')



  <main id="main">
  <div class="col-md-12 col-lg-12" style="height:80px">
  </div>
	<!--==========================
      Services Section
    ============================-->
   <section id="services">
     <div class="container">
	  <header class="section-header">
        </header>
	  
		<div class="row about-container">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		<div class="msg_div"></div> 
		@if($errors->any())
		<div class="col-sm-8 error msg_div">
			<div class="alert alert-success" role="alert">
			  {{$errors->all()}}
			</div>
		</div>
		@endif
			 <div id="logreg-forms">
			 <div>
			<form class="action-form form-signin" role="form" http-type="post" method="post" data-url="{{ route('save-login') }}" style="display:{{ isset($flag) ? 'none' : 'block' }}">
				<h2 class="h3 mb-3 font-weight-normal" style="text-align: center"> Don’t lose your work!</h2>
				<p>Create an account so we can save your resume

				</p>
				<div class="social-login">
					<button class="btn facebook-btn social-btn" type="button"><span><i class="fa fa-facebook-f"></i> Sign in with Facebook</span> </button>
					<button class="btn google-btn social-btn" type="button"><span><i class="fa fa-google-plus"></i> Sign in with Google+</span> </button>
				</div>
				<p style="text-align:center"> OR  </p>
				<input type="email" id="inputEmail"  minlength="6" name="email" class="form-control" placeholder="Email address" VALUE="" required="" autofocus=""><br>
				<input type="password" id="inputPassword" pattern=".{5,10}" required title="5 to 10 characters" name="password" class="form-control" placeholder="Password" >
				
				<button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Save & Next</button>
			   
				 
				<hr>
				 <a href="#"  id="btn-signup" >Already have an account?
				</a>
            </form>
			</div>
			<form action="/reset/password/" class="form-reset">
                <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
            </form>
            <!--{{route('auth.google')}}-->
            <form class="form-signup action-form" role="form" http-type="post" method="post" data-url="{{ route('login.post') }}" style="display:{{ isset($flag) ? 'block' : 'none' }}">
				<h2 class="h3 mb-3 font-weight-normal" style="text-align: center"> Login</h2>
				<div class="social-login" style="display: inline-flex">
					<a class="btn facebook-btn social-btn" type="button" href="{{route('auth.facebook')}}"><span><i class="fa fa-facebook-f"></i> Sign in with Facebook</span> </a>
					<a class="btn google-btn social-btn" type="button" href="{{route('auth.google')}}" style="margin-left:10px" ><span><i class="fa fa-google-plus"></i> Sign in with Google+</span> </a>
				</div>
				<p style="text-align:center"> OR  </p>
				<input type="email" id="inputEmail"  minlength="6" name="data[username]" class="form-control" placeholder="Email address" VALUE="" required="" autofocus=""><br>
				<input type="password" id="inputPassword" pattern=".{5,10}" required title="5 to 10 characters" name="data[password]" class="form-control" placeholder="Password" >
				
				<button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Save & Next</button>
				<hr>
				@if(isset($create_resume))
				<input type="hidden" name="redirect" value="{{ route('exprList') }}" />
				<input type="hidden" name="create_resume" value="true" />
				@endif
				 <a href="#"  id="create-signup" >Create an account</a>
            </form>
          
            
           
            
            <br>
            
    </div>
		</div>
		<div class="col-md-3"></div>
        

					
          
		</div>
	</div>
		
			
	</section>  
     
  </main>
  <style>
  
/* sign in FORM */
#logreg-forms{
    width:412px;
    margin:0vh auto;
    background-color:#f3f3f3;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}
#logreg-forms form {
    width: 100%;
    max-width: 410px;
    padding: 15px;
    margin: auto;
}
#logreg-forms .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
}
#logreg-forms .form-control:focus { z-index: 2; }
#logreg-forms .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
#logreg-forms .form-signin input[type="password"] {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

#logreg-forms .social-login{
    width:390px;
    margin:0 auto;
    margin-bottom: 14px;
}
#logreg-forms .social-btn{
    font-weight: 100;
    color:white;
    width:190px;
    font-size: 0.9rem;
}

#logreg-forms a{
    display: block;
    padding-top:10px;
    color:lightseagreen;
}

#logreg-form .lines{
    width:200px;
    border:1px solid red;
}


#logreg-forms button[type="submit"]{ margin-top:10px; }

#logreg-forms .facebook-btn{  background-color:#3C589C; }

#logreg-forms .google-btn{ background-color: #DF4B3B; }

#logreg-forms .form-reset, #logreg-forms .form-signup{ display: none; }


#logreg-forms .form-signup input { margin-bottom: 2px;}


/* Mobile */

@media screen and (max-width:500px){
    #logreg-forms{
        width:300px;
    }
    
    #logreg-forms  .social-login{
        width:200px;
        margin:0 auto;
        margin-bottom: 10px;
    }
    #logreg-forms  .social-btn{
        font-size: 1.3rem;
        font-weight: 100;
        color:white;
        width:200px;
        height: 56px;
        
    }
    #logreg-forms .social-btn:nth-child(1){
        margin-bottom: 5px;
    }
    #logreg-forms .social-btn span{
        display: none;
    }
    #logreg-forms  .facebook-btn:after{
        content:'Facebook';
    }
  
    #logreg-forms  .google-btn:after{
        content:'Google+';
    }
    
}
  </style>
  
@endsection
