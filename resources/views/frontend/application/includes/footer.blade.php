 <footer id="footer">
    
    <div class="container">
    <div class="row">
    <div class="col-md-4">
	<div class="copyright" style="text-align:left">
	&copy; 2021 Copyright  | <strong>SugarCV</strong> | All Rights Reserved 
	</div> <a href="https://dovichi.com/">Product of Dovichi Worldwide</a>
	</div>
    <div class="col-md-4">
	<div class="copyright">
     <a style="font-size:1px">   
	<a href="{{route('terms_and_conditions')}}" style="color:#fff;">Terms & Conditions  | </i></a>
              <a href="{{route('privacy_policy')}}" style="color:#fff;">Privacy Policy</i></a></a>
      </div>
	</div>
	<div class="col-lg-4 col-md-4 ">
	<div class="copyright">
	
			<div class="social-links">
             
   <a href="https://www.twitter.com/sugarcvbuilder" class="twitter"><i class="fa fa-twitter"></i></a>
   <a href="https://www.facebook.com/sugarcvbuilder" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/sugarcvbuilder" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://api.whatsapp.com/send?phone=2349023533978" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
              <a href="https://www.linkedin.com/company/sugarcvbuilder" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
            </div>
	</div>
	</div>
     
    </div>
    <br>
    
     <script defer data-key="0d1197f7-f4bb-4b60-b5b2-32878c2e76ab" src="https://widget.tochat.be/bundle.js"></script>
  </footer><!-- #footer -->

 <script>
    function idleLogout() {
    var t;
    window.onload = resetTimer;
    window.onmousemove = resetTimer;
    window.onmousedown = resetTimer;  // catches touchscreen presses as well      
    window.ontouchstart = resetTimer; // catches touchscreen swipes as well 
    window.onclick = resetTimer;      // catches touchpad clicks as well
    window.onkeydown = resetTimer;   
    window.addEventListener('scroll', resetTimer, true); // improved; see comments

    function yourFunction() {
        location.reload();
        // your function for too long inactivity goes here
        // e.g. window.location.href = 'logout.php';
    }

    function resetTimer() {
        clearTimeout(t);
        t = setTimeout(yourFunction, 600000);  // time is in milliseconds
    }
}
idleLogout();
 </script>
  

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->
