<div class="col-sm-3 profile_pg_munus">
   <ul class="list-unstyled">
      <li class="{{ \Request::route()->getName() == 'profile.edit' ? 'active' : '' }}">
         <a href="{{ route('profile.edit') }}">
            <h4>My CashDirectClub</h4>
         </a>
      </li>
      <li class="{{ \Request::route()->getName() == 'profile' ? 'active' : '' }} ">
         <a href="{{ route('profile') }}">
            <h4>My Cash Back</h4>
         </a>
      </li>
      <li class="{{ \Request::route()->getName() == 'profile.cashRequest' ? 'active' : '' }} ">
         <a style="position:relative" href="{{ route('profile.cashRequest') }}">
            <h4>Request Cash Back<i class="far fa-money-bill"></i></h4>
         </a>
      </li>
      <li class="{{ \Request::route()->getName() == 'profile.myreferrals' ? 'active' : '' }} ">
         <a style="position:relative" href="{{ route('profile.myreferrals') }}">
            <h4>
               <span class="fontawesome-stacked-icon referral">
               <i class="fa fa-user">&nbsp;</i>
               <i class="fa fa-user">&nbsp;</i>
               </span>
               My Referrals											
            </h4>
         </a>
      </li>
      <li class="{{ \Request::route()->getName() == 'profile.homebuyer' ? 'active' : '' }} ">
         <a href="{{ route('profile.homebuyer') }}">
            <h4>My Homebuyer Form</h4>
         </a>
      </li>
      <li class="{{ \Request::route()->getName() == 'profile.missingCashback' ? 'active' : '' }}">
         <a href="{{ route('profile.missingCashback') }}">
            <h4>Missing Cash Back</h4>
         </a>
      </li>
      <li>
         <a href="{{ route('logout') }}" title="Sign Out">
            <h4>
               <span class="fontawesome-stacked-icon signout">
               <i class="far fa-sign-out"></i>
               </span>
               Sign Out
            </h4>
         </a>
      </li>
   </ul>
</div>