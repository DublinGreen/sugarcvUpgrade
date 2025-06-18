@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','Resume Tips')

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
			<div class="page_contact_heading">Resume Tips</div>
		</div>
		<div class="headline_para" style="text-align:center;margin-bottom:2%;width:100%;">
			While there are a few commonly used resume styles, your resume should reflect your  education, experience and gained skills. 
		</div>
		<ul class="page_lists">
			<li><b>Look for hitting keywords</b> : The best place to start if preparing to write a resume is to carefully read job postings that interest you. As you apply for different jobs, you should study each job description for keywords.</li>
			<li><b>Review resume examples as per your industry</b> : When crafting your resume, you might study examples of resumes as per your industry for inspiration.</li>
			<li><b>Make it simple & easy to read</b> : Resume samples are simple so keep it straightforward. This is because employers have very less amount of time to review your resume, so readability is key. Use clean font.</li>
			<li><b>Go for professional font</b> : As employers have only a short time to review your resume, it should be as clear and as easy to read as possible. Use a basic, clean font like Arial or Times New Roman. Try to keep your font size between 10 and 12 points.</li>
			<li><b>Include only most relevant information</b> : While you might have extensive work or educational experience, it’s important to keep your resume as short as possible. Managers don’t spend a lot of time reading each resume. </li>
			<li><b>Use active language</b> : Your resume should be written using active language. This means using power words, such as "achieved", "earned", "completed" etc. If your resume is too long , you might consider making sentences shorter or ideas more concise.</li>
			<li><b>Pay more attention to important achievements</b> : Rather listing your job duties under the experience section, select your top three or four most important achievements in each role you’ve held.</li>
			<li><b>Choose appropriate margins</b> : You should use a one-inch margin size on all sides of your resume with single spaces between the lines. If you have too much white space, you might consider making your lines spaced by 1.15 or 1.5. You can also increase your margins if you find it is difficult to fill your resume, but they should stay below two inches.</li>
		</ul>
		
	</div>
   </div>
   <section>
</main>
@endsection
