@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','FAQs')

@push('after-scripts')
<!--script>
window.resume = {!! !empty($resume) ? $resume->toJson() : '[]' !!};
syncTemplate();
</script-->
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
      <h1 class="page-title"></h1>
	  <p class="sub-title"></p>
   </header>
	<div class="row about-container">
		<div class="col-md-12">
			<div class="page_contact_heading">FAQs</div>
		</div>
		<div class="col-md-8 mx-auto" style="margin:0 auto">
			<div class="accordion" id="faqExample">
				<div class="card">
					<div class="card-header p-2" id="headingOne">
						<h5 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							  Q: What’s The Main Purpose Of A Resume?
							</button>
						  </h5>
					</div>

					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
						<div class="card-body">
							<b>Answer:</b> If you’re fairly new to job searching, you are in this thought to believe that a resume is the document that gets you hired. That’s not how it works. Your resume is indeed the document you use to apply for jobs (along with a customized Cover Letter where appropriate). However the main function of your resume is to impress and provide your overview to employers you contact so that they’ll bring you in for a job interview.
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header p-2" id="headingTwo">
						<h5 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						  Q: Is It Better To Portray Yourself As a Generalist Or Specialist On Your Own Resume?
						</button>
					  </h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
						<div class="card-body">
							<b>Answer:</b>Employers hire people for particular jobs. An employer needs to know that you are eligible and qualified to do the desired job properly. Some jobs need people who are generalists, such as General Labourer or Handyman.
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header p-2" id="headingThree">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							  Q. Which Resume Format Is Best To Use: Chronological, Functional, Mixed, Or CV?
							</button>
						  </h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
						<div class="card-body">
							<b>Answer:</b> Are you confused by the possible variations in resume styles? No need to be. Our articles can help you figure out which format to use under different circumstances. In brief: a reverse chronological resume is typical style most employers expect to see. The functional resume is popular with career changers, people with little work experience (like students and recent grads), or those who’ve been out of the work force for an extended leave. Mixed (combined format) resumes combine the chronological and functional formats. And a Curriculum Vitae (CV) is mainly for professors, teachers, lawyers, scientists and related professionals.
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header p-2" id="headingThree">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							  Q.  What’s The Worst Resume Mistake Ever?
							</button>
						  </h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
						<div class="card-body">
							<b>Answer:</b>The biggest error of all in putting your resume together is simply this: being too sloppy. A carelessly awful spelling mistake here. Sending it out in totally wrong format. Small bits of sloppiness add up quickly. They can end up getting your resume tossed into the "don’t call us, we’ll call you" pile

						</div>
					</div>
				</div>
			</div>

		</div>
		<!--/row-->
		
	</div>
   </div>
   <section>
</main>
@endsection
