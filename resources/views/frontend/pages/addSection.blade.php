@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','Create resume')

@push('after-styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ url('asset_new/lib/richeditor/richtext.min.css')}}">
@endpush

@push('after-scripts')
<script>
jQuery(document).ready(function() {

	jQuery('.content').richText();
	 $('.richText-toolbar ul').append("<li><a class='btn' onclick='checkspell();'><b>spellcheck</b></a></li>");
});
</script>
<script src="{{ url('asset_new/lib/richeditor/jquery.richtext.js')}}"></script>
<script src="{{ url('assets/js/front/JavaScriptSpellCheck/include.js')}}"></script>
<script type="text/javascript">
function checkspell()
{
 $Spelling.SpellCheckInWindow('content');
}
</script>
@endpush

@section('content')
<main id="main">
   <div class="col-md-12 col-lg-12" style="height:80px">
   </div>
   <!--==========================
      Services Section
      ============================-->
 <form class="action-form" role="form" http-type="post" method="post" data-url="{{ route('save-section') }}">
	<section id="editor">
		<div class="container">
		   <div class="row about-container">
			  <div class="col-lg-9 mx-auto" >
				 <div class="col-sm-8 error msg_div"></div>
				 <p><strong>Add additional sections to your resume</strong></p>
				 <div class="row">
					<div class="col-lg-12">
						<div class="form-row">
						   <div class="form-group col-lg-6">
							  <label for="email">Add Your Own</label>
							  <input type="text" name="title" class="form-control" placeholder="E.g. Hobbies" value="{{isset($detail->title)? $detail->title:''}}" />
							  <div class="validation"></div>
						   </div>
						</div>
					</div>
					<div class="col-lg-12">
						<textarea class="content" name="content">{!! isset($detail['content'])? $detail->content:'' !!}</textarea>
					</div>
				</div>
				<br>

				@if(isset($id))
					<input type="hidden" name="id" value="{{ $id }}" />
				<div class="" style="float:right"><button type="submit" class="c-btn btn-success btn-lg" title="" >NEXT: FINALIZE</button></div>
				@else
					<div class="" style="float:left"><a id="back-step" class="c-btn btn-default btn-back" href="{{route('enter-summary')}}">Back</a></div>
				<div class="" style="float:right"><button type="submit" class="c-btn btn-success btn-lg" title="" >NEXT: FINALIZE</button></div>
				@endif
			  </div>
			</div>
		</div>
	</section>
	</form>

</main>

@endsection
