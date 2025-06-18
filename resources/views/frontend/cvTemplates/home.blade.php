@extends('frontend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','SugarCV Online Resume Builder | Create CV Online | Free Resume Builder | Online CV Builder')

@section('content')
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="{{ url('asset_new/img/sugarcvbanner.png')}}" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
	
        <h2>Make a Premium<br>CV or Resume Online,<br><span>Quick & Easy</span></h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">My Account</a>
          <a href="https://sugarcv.com/cv-template" class="btn-services scrollto">Select Template</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->
	<section id="">
      <div class="container">
	  <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          
          
           

        </div>
	  </div>
	</section>	

  <main id="main">
	<!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">
<br><br>
        <header class="section-header">
          <h3>Create a Job Winning Resume in Minutes</h3>
          <p>See some amazing features of SugarCV, and why you need one.</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-paper-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">20+ Premium CV Templates to choose</a></h4>
              <p class="description">You can choose from our premium and beautifully designed CV templates.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Powerful CV Building Technology</a></h4>
              <p class="description">Use our building technology to build your CV/resume. Very easy to use.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Editing Functionality</a></h4>
              <p class="description">Ability to edit texts and background colours, including darg and drop functionality.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Import & Export Functionality</a></h4>
              <p class="description">You can import your existing CV/resume or build from scratch. You can download completed CV/resume. </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Artificial Intelligence (AI)</a></h4>
              <p class="description">Our AI captures your profession and make useful recommendations on contents to fill in your resume.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Option to have HR Expert Review your CV</a></h4>
              <p class="description">Yes, you can have our HR expert review your CV/resume and submit back to your account.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Powerful CV Builder plus Templates</h3>
         
        </header>

        <div class="row about-container">
            
            <div class="col-lg-6 content order-lg-1 order-2">
            <p>
              
            </p>

            <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fa fa-address-book-o"></i></div>
              <h4 class="title"><a href="">Create outstanding Resume</a></h4>
              <p class="description">Our CV templates are creative, with professional layout that can easily catch the attention of recruiters.</p>
            </div>

            <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fa fa-pencil-square-o"></i></div>
              <h4 class="title"><a href="">Powerful Editor</a></h4>
              <p class="description">Edit and customize your CV how you wish. Edit background, texts, drag and drop. Quick and easy to use.</p>
            </div>

            <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fa fa-assistive-listening-systems"></i></div>
              <h4 class="title"><a href="">AI Recommendations</a></h4>
              <p class="description">Let our AI make useful recommendations on some of the contents you can fill in your resume.</p>
            </div>
            <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fa fa-thumbs-o-up"></i></div>
              <h4 class="title"><a href="">Impress Recruiters</a></h4>
              <p class="description">Create stunning resume that real your skills and impress every recruiter</p>
            </div>

          </div>
            
            

   
          

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="{{ url('asset_new/img/sugarcvbuilder.jpg')}}" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="{{ url('asset_new/img/services/hrexp.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0"><br><br><br>
            <h3>Hear from a Human Resource expert</h3><br>
            <p>
              "Jobs seekers must learn to make extra efforts to standout. They should invest in training themselves, acquiring skills and also ensure to have a premium resume which can adequately express these skills and give them an edge on the tables of recruiters".<br><br>
                  <b>Stella A. (HR Specialist)</b>
            </p>

          </div>
        </div>

       
      </div>
    </section><!-- #about -->

    <!--==========================
      Why Us Section
    ============================-->  

	
	<section>
      <div class="container">

        <div class="row about-extra">
            <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0"><br><br>
            <left><h3>Why Premium CV?</h3>
			
			<br>
			<p>For every job application you send, there is a less than 5% chance that you will be invited for further assessment. Recruiters are most times overwhelmed by the amount of job applications they get for each opening.  </p>
            <p>
              They conduct a first stage evaluation on most of the resumes or application to determine the ones qualified for further review. At this stage, only those with an impressive resume can be reviewed further and subsequently invited for further assessment.
            </p>
			<br>
		<p>Get our premium CV template so you can stand out and impress recruiters. Choose from our many CV templates <br><h6>We have 20+ Templates you can choose from.</h6></p>
			<a href="https://sugarcv.com/cv-template" class="btn btn-danger">View Templates</a></left><br><br><br>
          </div>
          <div class="col-lg-6 wow fadeInUp">
            <img src="{{ url('asset_new/img/services/scvt15.jpg')}}" class="img-fluid" alt="">
          </div>
          
        </div>
			<br><br>
       

		
		 

      </div>
    </section>
   

    <!--==========================
      Testimonies
    ============================-->
    <section id="testimonials" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 style="color: #F4F4F4">Reviews</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="testimonial-item">
                <img src="{{ url('asset_new/img/testimonial-1.jpg')}}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="{{ url('asset_new/img/testimonial-2.jpg')}}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="{{ url('asset_new/img/testimonial-3.jpg')}}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="{{ url('asset_new/img/testimonial-4.jpg')}}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="{{ url('asset_new/img/testimonial-5.jpg')}}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->
    
    
        <!--==========================
      In the Media
    ============================-->

<section id="clients" class="section-bg">

      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-header">
          <h3>In the News</h3>
          <p>Learn about SugarCV in the news media.</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/dailypost.jpg" class="img-fluid" alt="dailypost">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/vanguard.jpg" class="img-fluid" alt="vanguard">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/disruptafrica.jpg" class="img-fluid" alt="disruptafrica">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/techpoint.jpg" class="img-fluid" alt="techpoint">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            
          </div>

        </div>

      </div>

    </section>  <!-- #In the Media -->
    

  </main>
  
 <div class="section-bg-img" >
        <div class="container">
       
	
        <header class="section-header">
          <h3 class="title-white"><br>
			</h3>
          </header>
		 
		 <br>
		<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4"><center ! important>
		<a href="https://sugarcv.com/cv-template" class="btn btn-danger">Select a Template Now</a></center>
		 
		</div>
		</div>
		</div>
		<br><br>
      </div>

@endsection

@push('after-styles')
@endpush


@push('after-scripts')
@endpush