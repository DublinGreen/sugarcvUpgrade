  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="{{route('home')}}" class="scrollto"><img src="{{url('/asset_new/img/logo/logo.png')}}" alt="" class=""></a>
      </div>
<style>
.headStep{
	color: #007bff !important;
	font-size:18px !important;
    padding-top: 5px !important;

}
</style>
      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
			<?php $aray = ['create-resume','work-history','expr','education-detail','enter-education-detail','education','skills','work-skills','summary','enter-summary','add-section','final-resume','work-detail','edit-resume','edit-summary','edit-education','educationList','exprList'];

			$work = ['work-history','expr','education-detail','enter-education-detail','education','skills','work-skills','summary','enter-summary','add-section','final-resume','work-detail','edit-summary','educationList','exprList'];

			$educ = ['education-detail','enter-education-detail','educationList','skills','work-skills','summary','enter-summary','add-section','final-resume'];

			$skil = ['skills','work-skills','summary','enter-summary','add-section','final-resume'];

			$summy = ['summary','enter-summary','add-section','final-resume'];

			$final_sec = ['add-section','final-resume'];
			if(in_array(\Request::route()->getName(),$aray ))
			{

			?>
				<li><a href="#" class="{{ in_array(\Request::route()->getName(), $aray) ? 'headStep' : '' }}" >1 Heading - </a></li>
				<li><a href="#" class="{{ in_array(\Request::route()->getName(), $work) ? 'headStep' : '' }}">2 Work History -</a></li>
				<li><a href="#" class="{{ in_array(\Request::route()->getName(), $educ) ? 'headStep' : '' }}">3 Education -</a></li>
				<li><a href="#" class="{{ in_array(\Request::route()->getName(), $skil) ? 'headStep' : '' }}">4 Skill -</a></li>
				<li><a href="#" class="{{ in_array(\Request::route()->getName(), $summy) ? 'headStep' : '' }}">5 Summary -</a></li>
				<li><a href="#" class="{{ in_array(\Request::route()->getName(), $final_sec) ? 'headStep' : '' }}">6 Finalize</a></li>
			<?php
			}
			elseif(\Request::route()->getName()=='select-skin')
			{

			}else
			{
				?>

          <li class="active"><a href="{{ route('home') }}">Home</a></li>
		  <li><a href="{{route('cv-template')}}">Resume Templates</a>
            <!--ul>
              <li><a href="#">Resume Templates</a></li>

              <li><a href="#">Resume Examples</a></li>
              <li><a href="#">Resume Format</a></li>
              <li><a href="#">How to write Resume</a></li>
              <li><a href="#">Resume Help</a></li>
            </ul-->
          </li>
		  <!--li class="drop-down"><a href="">CV</a>
            <ul>
              <li><a href="{{route('cv-template')}}">CV Templates</a></li>

              <li><a href="#">CV Examples</a></li>
              <li><a href="#">CV Format</a></li>
              <li><a href="#">How to write CV</a></li>
              <li><a href="#">CV Help</a></li>
            </ul>
          </li>
		  <li class="drop-down"><a href="">Cover Letter</a>
            <ul>
              <li><a href="#">Cover Letter Templates</a></li>

              <li><a href="#">Cover Letter Examples</a></li>
              <li><a href="#">Cover Letter Format</a></li>
              <li><a href="#">How to write Cover Letter</a></li>
              <li><a href="#">Cover Letter Help</a></li>
            </ul>
          </li>
		  <!--<li class="drop-down"><a href="">Career Blog</a>
            <ul>
              <li><a href="#">Job Search</a></li>

              <li><a href="#">Job Interview</a></li>
              <li><a href="#">Career Advice</a></li>
              <li><a href="#">Work Life</a></li>

            </ul>
          </li>-->

          <li><a href="{{ route('faq') }}">FAQs</a></li>
		  <li><a href="{{ route('resume-tips') }}">Resume Tips</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
          <!--li><a href="#">About</a></li-->
          <li><a href="{{route('plans')}}">Pricing</a></li>
			<?php
			}
			if(Sentinel::check())
			{
				?>

		  <li class="drop-down"><a href="javascript:;">My Account</a>
            <ul>
              <li><a href="{{ route('profile') }}">Profile</a></li>
              <li><a href="{{ route('documenthome') }}">Documents</a></li>
              <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
          </li>
		 <?php
			}
			elseif(\Request::route()->getName()=='select-skin')
			{

			}else
			{
				?>
		  <li class="drop-down"><a href="javascript:;">My Account</a>
            <ul>
              <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
          </li>
			<?php } ?>
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->
