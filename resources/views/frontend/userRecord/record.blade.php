@push('after-scripts')
<script src="{{ url('/lib/rrweb/rrweb.min.js') }}"></script>
<script>
window.events = []

window.pageId = '{{ \Request::route()->getName()."_".rand(1000, 99999) }}';
window.userId = {{\Sentinel::getUser()->id}};

window.rrweb = rrweb.record({
	emit (event) {
	  if (window.hasOwnProperty('events')) {
		window.events.push(event)
		saveRecording();
	  }
	}
})

function saveRecording() {
   const record_body = JSON.stringify({ events });
   console.log(record_body);
   jQuery.ajax({
	   url:'{{ route("screen.record") }}',
	   type:'post',
	   data:{record : record_body, pageId: window.pageId, userId: window.userId},
	   success:function(result){
		   
	   }
   });
}

</script>
@endpush