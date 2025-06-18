<?php
//\Cache::flush();
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
| 
*/

Route::get('/', ['as' => 'home', 'uses' => 'SiteController@getHome']);
Route::post('login', ['as' => 'login.post', 'uses' => 'MemberController@postLogin']);
Route::post('register', ['as' => 'register', 'uses' => 'MemberController@register']);
Route::get('user/activate/{code}', ['as' => 'user.activate', 'uses' => 'MemberController@userActivate']);
Route::get('change-password', ['as' => 'changePassword', 'uses' => 'SiteController@changePassword']);
Route::post('change-password', ['as' => 'changePassword.post', 'uses' => 'MemberController@changePassword']);
Route::get('reset/{user}/{code}', ['as' => 'resetPassword', 'uses' => 'MemberController@resetPassword']);
Route::post('reset/{user}/{code}', ['as' => 'resetPassword.post', 'uses' => 'MemberController@resetPasswordPost']);

//social login
Route::get('auth/facebook', 'SiteController@redirectToFacebook')->name('auth.facebook');
Route::get('auth/facebook/callback', 'MemberController@handleFacebookCallback');
Route::get('auth/google', 'SiteController@redirectToGoogle')->name('auth.google');
Route::get('auth/google/callback', 'MemberController@handleGoogleCallback');

Route::post('check-email', ['as' => 'register.checkemail', 'uses' => 'SiteController@getEmail']);



Route::get('captcha', ['as' => 'register.captcha', 'uses' => 'SiteController@getCaptcha']);

Route::get('logout', ['as' => 'logout', 'uses' => 'SiteController@getLogout']);

//profile
Route::get('profile', ['as' => 'profile', 'uses' => 'ProfileController@getProfile']);
Route::get('profile/edit', ['as' => 'profile.edit', 'uses' => 'ProfileController@getEditProfile']);
Route::post('profile/edit', ['as' => 'profile.update', 'uses' => 'ProfileController@updateProfile']);
Route::get('profile/myreferrals', ['as' => 'profile.myreferrals', 'uses' => 'ProfileController@getMyReferrals']);
Route::get('myreferrals/list', ['as' => 'profile.myreferrals.list', 'uses' => 'ProfileController@getMyReferralsList']);
Route::get('profile/homebuyer', ['as' => 'profile.homebuyer', 'uses' => 'ProfileController@getHomeBuyer']);
Route::get('profile/missing-cashback', ['as' => 'profile.missingCashback', 'uses' => 'ProfileController@getMissingCashback']);
Route::get('profile/missingCashback-list', ['as' => 'profile.missingCashback.list', 'uses' => 'ProfileController@getMissingCashbackList']);
Route::post('profile/missing_cb', ['as' => 'profile.missing_cb', 'uses' => 'ProfileController@missingCB']);
Route::get('profile/cash-request', ['as' => 'profile.cashRequest', 'uses' => 'ProfileController@getCashRequest']);
Route::post('mailingAddressForCheque', ['as' => 'profile.mailingAddressForCheque', 'uses' => 'ProfileController@mailingAddressForCheque']);
Route::post('applyforcash', ['as' => 'profile.applyforcash', 'uses' => 'ProfileController@applyForCash']);


Route::get('category/{slug}', ['as' => 'category', 'uses' => 'StoresController@getCategoryStore']);
Route::get('redirect/{id}', ['as' => 'redirect', 'uses' => 'StoresController@redirectToStore']);

// Pages
Route::get('personal-loan', ['as' => 'personalloan', 'uses' => 'SiteController@getPersonalLoan']);
Route::get('buy-a-house', ['as' => 'buyhouse', 'uses' => 'SiteController@getBuyHouse']);
Route::get('refer', ['as' => 'refer', 'uses' => 'SiteController@getRefer']);
Route::get('terms-conditions', ['as' => 'termsconditions', 'uses' => 'SiteController@getTermsConditions']);
Route::get('privacy-notice', ['as' => 'privacyNotice', 'uses' => 'SiteController@getPrivacyNotice']);
Route::get('privacy-policy', ['as' => 'privacyPolicy', 'uses' => 'SiteController@getPrivacyPolicy']);
Route::get('contact', ['as' => 'contact', 'uses' => 'SiteController@getContact']);
Route::get('partners', ['as' => 'partners', 'uses' => 'SiteController@getPartners']);
Route::get('thankyou', ['as' => 'thankyou', 'uses' => 'SiteController@getThankyou']);
Route::get('extension-feedback', ['as' => 'getExtensionFeedback', 'uses' => 'SiteController@getExtensionFeedback']);



// Ajax
Route::get('get-homepage-stores', ['as' => 'frontpage.stores.list', 'uses' => 'StoresController@gethomeStoreList']);
Route::get('get-homepage-top-stores', ['as' => 'frontpage.top.stores.list', 'uses' => 'StoresController@gethomeTopStoreList']);
Route::get('getCategoryList', ['as' => 'homepage.stores.categories.list', 'uses' => 'StoresController@getStoresCategoryList']);
Route::get('getStoreList', ['as' => 'homepage.stores.list', 'uses' => 'StoresController@getStoresList']);
Route::get('getStoreList/{category}', ['as' => 'homepage.category.stores.list', 'uses' => 'StoresController@getCategoryStoresList']);
Route::get('getStoreGuidelines/{id}', ['as' => 'stores.guidelines', 'uses' => 'StoresController@getStoreGuidelines']);
Route::get('store/search', ['as' => 'stores.search', 'uses' => 'StoresController@searchStore']);
Route::get('countdownView', ['as' => 'countdownview', 'uses' => 'StoresController@countdownView']);
Route::post('sendReferLink', ['as' => 'sendReferLink', 'uses' => 'SiteController@sendReferLink']);
Route::post('buy-a-house', ['as' => 'buyhouse.post', 'uses' => 'SiteController@buyaHouseSave']);
Route::post('buyhouse-rating', ['as' => 'buyhouse.rating', 'uses' => 'SiteController@buyaHouseRating']);
Route::post('buyhouse-feedback', ['as' => 'buyhouse.feedback', 'uses' => 'SiteController@buyaHouseFeedback']);
Route::get('getPendingCashBack', ['as' => 'getPendingCashBack', 'uses' => 'ProfileController@getPendingCashBack']);
Route::get('getPendingCashBackList', ['as' => 'getPendingCashBackList', 'uses' => 'ProfileController@getPendingCashBackList']);
Route::get('getEarnedCashBack', ['as' => 'getEarnedCashBack', 'uses' => 'ProfileController@getEarnedCashBack']);
Route::get('getEarnedCashBackList', ['as' => 'getEarnedCashBackList', 'uses' => 'ProfileController@getEarnedCashBackList']);
Route::get('getRedeemedCashBack', ['as' => 'getRedeemedCashBack', 'uses' => 'ProfileController@getRedeemedCashBack']);
Route::get('getMyAllReferrals', ['as' => 'getMyAllReferrals', 'uses' => 'ProfileController@getMyAllReferrals']);
Route::get('getReferFeesEarned', ['as' => 'getReferFeesEarned', 'uses' => 'ProfileController@getReferFeesEarned']);
Route::get('getReferFeesPending', ['as' => 'getReferFeesPending', 'uses' => 'ProfileController@getReferFeesPending']);
Route::post('checkForMCB', ['as' => 'checkForMCB', 'uses' => 'ProfileController@checkForMCB']);
Route::post('extension-feedback', ['as' => 'saveExtensionFeedback', 'uses' => 'SiteController@saveExtensionFeedback']);

//API
Route::post('/wp-content/themes/coupon-child/ios_API.php', 'APIController@index');

/**
 * Below is all admin routes
 * @var [type]
 */
$adminRoute = config('app.adminUrl');

// basic routes
Route::get($adminRoute, ['as' => 'admin.home', 'uses' => 'Admin\SiteController@getIndex']);
Route::get($adminRoute . '/login', ['as' => 'admin.login', 'uses' => 'Admin\SiteController@getLogin']);
Route::get($adminRoute . '/logout', ['as' => 'admin.logout', 'uses' => 'Admin\SiteController@getLogout']);
Route::post($adminRoute . '/login', ['as' => 'admin.postLogin', 'uses' => 'Admin\SiteController@postLogin']);

// Stores channels
Route::get($adminRoute . '/stores/channels', ['as' => 'admin.channels', 'uses' => 'Admin\StoresController@getChannels']);
Route::get($adminRoute . '/stores/channels/list', ['as' => 'admin.channels.list', 'uses' => 'Admin\StoresController@getChannelsList']);
Route::post($adminRoute . '/stores/channels', ['as' => 'admin.channel.save', 'uses' => 'Admin\StoresController@channelSave']);
Route::get($adminRoute . '/stores/channels/{id}', ['as' => 'admin.channel.get', 'uses' => 'Admin\StoresController@getChannelById']);
Route::post($adminRoute . '/stores/channels/update', ['as' => 'admin.channel.update', 'uses' => 'Admin\StoresController@channelUpdate']);
Route::post($adminRoute . '/stores/channels/delete', ['as' => 'admin.channel.delete', 'uses' => 'Admin\StoresController@channelDelete']);

// Stores
Route::get($adminRoute . '/stores', ['as' => 'admin.stores', 'uses' => 'Admin\StoresController@index']);
Route::get($adminRoute . '/stores/list', ['as' => 'admin.stores.list', 'uses' => 'Admin\StoresController@getStoreList']);
Route::get($adminRoute . '/stores/create', ['as' => 'admin.stores.create', 'uses' => 'Admin\StoresController@create']);
Route::post($adminRoute . '/stores/store', ['as' => 'admin.stores.store', 'uses' => 'Admin\StoresController@store']);
Route::get($adminRoute . '/stores/edit/{id}', ['as' => 'admin.stores.edit', 'uses' => 'Admin\StoresController@edit']);


Route::post($adminRoute . '/stores/update/{id}', ['as' => 'admin.stores.update', 'uses' => 'Admin\StoresController@update']);
Route::post($adminRoute . '/stores/trash', ['as' => 'admin.stores.status', 'uses' => 'Admin\StoresController@status']);
Route::post($adminRoute . '/stores/delete', ['as' => 'admin.stores.delete', 'uses' => 'Admin\StoresController@destroy']);
Route::get($adminRoute . '/top-stores', ['as' => 'admin.top.stores', 'uses' => 'Admin\StoresController@getTopStores']);
Route::post($adminRoute . '/top-stores', ['as' => 'admin.top.stores.save', 'uses' => 'Admin\StoresController@topStoresSave']);

// Stores categories
Route::get($adminRoute . '/stores/categories', ['as' => 'admin.stores.categories', 'uses' => 'Admin\StoresController@getCategories']);
Route::get($adminRoute . '/stores/categories/list', ['as' => 'admin.stores.categories.list', 'uses' => 'Admin\StoresController@getCategoriesList']);
Route::post($adminRoute . '/stores/categories', ['as' => 'admin.stores.categories.save', 'uses' => 'Admin\StoresController@categoriesSave']);
Route::get($adminRoute . '/stores/categories/{id}', ['as' => 'admin.stores.categories.get', 'uses' => 'Admin\StoresController@getCategoryById']);
Route::post($adminRoute . '/stores/categories/update', ['as' => 'admin.stores.categories.update', 'uses' => 'Admin\StoresController@categoriesUpadte']);
Route::post($adminRoute . '/stores/categories/delete', ['as' => 'admin.stores.categories.delete', 'uses' => 'Admin\StoresController@categoriesDelete']);

// Stores commission
Route::get($adminRoute . '/stores/commission', ['as' => 'admin.stores.commission', 'uses' => 'Admin\StoresController@getCommission']);
Route::post($adminRoute . '/stores/commission/{id}', ['as' => 'admin.stores.commission.save', 'uses' => 'Admin\StoresController@commissionSave']);
Route::get($adminRoute . '/stores/commission/{id}', ['as' => 'admin.stores.commission.get', 'uses' => 'Admin\StoresController@getStoreCommission']);

// Offers
Route::get($adminRoute . '/offers', ['as' => 'admin.offers', 'uses' => 'Admin\OffersController@index']);
Route::get($adminRoute . '/offers/list', ['as' => 'admin.offers.list', 'uses' => 'Admin\OffersController@getOffersList']);
Route::get($adminRoute . '/offers/create', ['as' => 'admin.offers.create', 'uses' => 'Admin\OffersController@create']);
Route::post($adminRoute . '/offers/store', ['as' => 'admin.offers.store', 'uses' => 'Admin\OffersController@store']);
Route::get($adminRoute . '/offers/edit/{id}', ['as' => 'admin.offers.edit', 'uses' => 'Admin\OffersController@edit']);
Route::post($adminRoute . '/offers/update/{id}', ['as' => 'admin.offers.update', 'uses' => 'Admin\OffersController@update']);
Route::post($adminRoute . '/offers/trash', ['as' => 'admin.offers.status', 'uses' => 'Admin\OffersController@status']);
Route::post($adminRoute . '/offers/delete', ['as' => 'admin.offers.delete', 'uses' => 'Admin\OffersController@destroy']);

// Offers categories
Route::get($adminRoute . '/offers/categories', ['as' => 'admin.offers.categories', 'uses' => 'Admin\OffersController@getCategories']);
Route::get($adminRoute . '/offers/categories/list', ['as' => 'admin.offers.categories.list', 'uses' => 'Admin\OffersController@getCategoriesList']);
Route::post($adminRoute . '/offers/categories', ['as' => 'admin.offers.categories.save', 'uses' => 'Admin\OffersController@categoriesSave']);
Route::get($adminRoute . '/offers/categories/{id}', ['as' => 'admin.offers.categories.get', 'uses' => 'Admin\OffersController@getCategoryById']);
Route::post($adminRoute . '/offers/categories/update', ['as' => 'admin.offers.categories.update', 'uses' => 'Admin\OffersController@categoriesUpadte']);
Route::post($adminRoute . '/offers/categories/delete', ['as' => 'admin.offers.categories.delete', 'uses' => 'Admin\OffersController@categoriesDelete']);

// users
Route::get($adminRoute . '/users', ['as' => 'admin.users', 'uses' => 'Admin\UsersController@index']);
Route::get($adminRoute . '/users/list' , ['as' => 'admin.users.getList', 'uses' => 'Admin\UsersController@getList']);
Route::get($adminRoute . '/users/edit/{id}', ['as' => 'admin.users.edit', 'uses' => 'Admin\UsersController@edit']);
Route::post($adminRoute. '/users/update/{id}', ['as' => 'admin.users.update', 'uses' => 'Admin\UsersController@update']);
Route::get($adminRoute. '/getUserReferrals/{id}', ['as' => 'admin.getUserReferralsList', 'uses' => 'Admin\UsersController@getUserReferralsList']);


// Settings
Route::get($adminRoute . '/settings/sendgrid', ['as' => 'admin.settings.sendgrid', 'uses' => 'Admin\SettingsController@getSendGrid']);
Route::post($adminRoute . '/settings/sendgrid', ['as' => 'admin.settings.sendgrid.save', 'uses' => 'Admin\SettingsController@sendGridSave']);
Route::get($adminRoute . '/settings/social-login', ['as' => 'admin.settings.socialLogin', 'uses' => 'Admin\SettingsController@getSocialLogin']);
Route::post($adminRoute . '/settings/social-login', ['as' => 'admin.settings.socialLogin.save', 'uses' => 'Admin\SettingsController@socialLoginSave']);
Route::get($adminRoute . '/settings/email-configurations', ['as' => 'admin.settings.getEmailConfigurations', 'uses' => 'Admin\SettingsController@getEmailConfigurations']);
Route::post($adminRoute . '/settings/offer-email-configurations', ['as' => 'admin.settings.offerEmailConf', 'uses' => 'Admin\SettingsController@offerEmailConf']);
Route::post($adminRoute . '/settings/app-extension-download-bonus', ['as' => 'admin.settings.appExtensionDownloadBonus', 'uses' => 'Admin\SettingsController@appExtensionDownloadBonus']);
Route::post($adminRoute . '/settings/first-purchase-email-configurations', ['as' => 'admin.settings.firstPurchaseEmailConf', 'uses' => 'Admin\SettingsController@firstPurchaseEmailConf']);
Route::post($adminRoute . '/settings/welcome-series-email', ['as' => 'admin.settings.welcomeSeriesEmail', 'uses' => 'Admin\SettingsController@welcomeSeriesEmail']);
Route::post($adminRoute . '/settings/confirmation-email-after-signups', ['as' => 'admin.settings.confirmEmailAfterSignup', 'uses' => 'Admin\SettingsController@confirmEmailAfterSignup']);
Route::post($adminRoute . '/settings/first-email-click-subject', ['as' => 'admin.settings.firstEmailClickSubject', 'uses' => 'Admin\SettingsController@firstEmailClickSubject']);
Route::get($adminRoute . '/settings/commission-payout', ['as' => 'admin.settings.CommissionPayout', 'uses' => 'Admin\SettingsController@getCommissionPayout']);
Route::get($adminRoute . '/settings/commission-payout/list', ['as' => 'admin.settings.CommissionPayout.list', 'uses' => 'Admin\SettingsController@getCommissionPayoutList']);
Route::post($adminRoute . '/settings/commission-payout/store', ['as' => 'admin.settings.CommissionPayout.store', 'uses' => 'Admin\SettingsController@commissionPayoutStore']);
Route::get($adminRoute . '/settings/commission-payout/{id}', ['as' => 'admin.settings.CommissionPayout.get', 'uses' => 'Admin\SettingsController@getCommissionPayoutStore']);
Route::post($adminRoute . '/settings/commission-payout/update', ['as' => 'admin.settings.CommissionPayout.update', 'uses' => 'Admin\SettingsController@commissionPayoutUpdate']);
Route::post($adminRoute . '/settings/commission-payout/delete', ['as' => 'admin.settings.CommissionPayout.delete', 'uses' => 'Admin\SettingsController@commissionPayoutDelete']);

// Clicks Tracking
Route::get($adminRoute . '/clicks-tracking', ['as' => 'admin.clicksTracking', 'uses' => 'Admin\TrackingController@getClicksTracking']);
Route::get($adminRoute . '/clicks-tracking/list', ['as' => 'admin.clicksTracking.list', 'uses' => 'Admin\TrackingController@getClicksTrackingList']);
Route::get($adminRoute . '/clicks-tracking/list/{id}', ['as' => 'admin.clicksTracking.listbyuser', 'uses' => 'Admin\TrackingController@getClicksTrackingListByUser']);
Route::get($adminRoute . '/getUserPendingCashBackList/{id}', ['as' => 'admin.getUserPendingCashBackList', 'uses' => 'Admin\TrackingController@getUserPendingCashBackList']);
Route::get($adminRoute . '/getUserEarnedCashBackList/{id}', ['as' => 'admin.getUserEarnedCashBackList', 'uses' => 'Admin\TrackingController@getUserEarnedCashBackList']);


//upload orders
Route::get($adminRoute . '/upload-orders', ['as' => 'admin.uploadOrders', 'uses' => 'Admin\TrackingController@getUploadOrders']);
Route::post($adminRoute . '/upload-orders/parse', ['as' => 'admin.uploadOrders.parse', 'uses' => 'Admin\TrackingController@uploadOrdersParse']);

//platform charts
Route::get($adminRoute . '/charts', ['as' => 'admin.click.charts', 'uses' => 'Admin\TrackingController@getClickCharts']);
Route::post($adminRoute . '/charts/data', ['as' => 'admin.charts.data', 'uses' => 'Admin\TrackingController@getChartsData']);

//Browsing history
Route::get($adminRoute . '/browsing-history', ['as' => 'admin.browsingHistory', 'uses' => 'Admin\BrowsingHistoryController@index']);
Route::get($adminRoute . '/browsing-history/list', ['as' => 'admin.browsingHistory.list', 'uses' => 'Admin\BrowsingHistoryController@getList']);

//Banners
Route::get($adminRoute . '/banners', ['as' => 'admin.banners', 'uses' => 'Admin\BannersController@getBanners']);
Route::get($adminRoute . '/banners/list', ['as' => 'admin.banners.list', 'uses' => 'Admin\BannersController@getBannersList']);
Route::get($adminRoute . '/banners/add', ['as' => 'admin.banners.add', 'uses' => 'Admin\BannersController@getAddBanners']);
Route::post($adminRoute . '/banners/store', ['as' => 'admin.banners.store', 'uses' => 'Admin\BannersController@storeBanner']);
Route::get($adminRoute . '/banners/edit/{id}', ['as' => 'admin.banners.edit', 'uses' => 'Admin\BannersController@getEditBanner']);
Route::post($adminRoute . '/banners/update/{id}', ['as' => 'admin.banners.update', 'uses' => 'Admin\BannersController@bannerUpdate']);
Route::post($adminRoute . '/banners/delete', ['as' => 'admin.banners.delete', 'uses' => 'Admin\BannersController@bannerDelete']);
Route::post($adminRoute . '/banners/status', ['as' => 'admin.banners.status', 'uses' => 'Admin\BannersController@bannerStatus']);
Route::get($adminRoute . '/banners/preview', ['as' => 'admin.banners.preview', 'uses' => 'Admin\BannersController@bannerPreview']);

//performance
Route::get($adminRoute . '/performance', 'Admin\PerformanceController@index')->name("admin.performance");
Route::post($adminRoute . '/performance', 'Admin\PerformanceController@search')->name("admin.performance.search");
Route::get($adminRoute . '/performance/orders', 'Admin\PerformanceController@getOrders')->name("admin.performance.getOrders");
Route::post($adminRoute . '/performance/users/orders', 'Admin\PerformanceController@getUserOrders')->name("admin.performance.getUserOrders");
Route::get($adminRoute . '/single-purchased-users', 'Admin\PerformanceController@singlePurchasedUsers')->name("admin.singlePurchasedUsers");
Route::get($adminRoute . '/single-purchased-users/list', 'Admin\PerformanceController@singlePurchasedUsersList')->name("admin.singlePurchasedUsers.list");

//Homebuyer 
Route::get($adminRoute . '/homebuyer', 'Admin\HomebuyerController@index')->name("admin.homebuyer");
Route::post($adminRoute . '/homebuyer', 'Admin\HomebuyerController@commissionSave')->name("admin.homebuyer.commissionSave");
Route::get($adminRoute . '/homebuyer/leads', 'Admin\HomebuyerController@getLeads')->name("admin.homebuyer.getLeads");
Route::get($adminRoute . '/homebuyer/leads/list', 'Admin\HomebuyerController@getLeadsList')->name("admin.homebuyer.getLeadsList");
Route::get($adminRoute . '/homebuyer/{id}', 'Admin\HomebuyerController@getHomeBuyerById')->name("admin.homebuyer.getHomeBuyer");
Route::post($adminRoute . '/homebuyer/update', 'Admin\HomebuyerController@updateHomeBuyer')->name("admin.homebuyer.update");

//Missing cashback
Route::get($adminRoute . '/missing-cashback', 'Admin\MissingCashbackController@index')->name("admin.MCB");
Route::get($adminRoute . '/missing-cashback/list', 'Admin\MissingCashbackController@getMissingCashbackRequestList')->name("admin.MCB.list");
Route::post($adminRoute . '/missing-cashback/update', 'Admin\MissingCashbackController@updateMissingCB')->name("admin.updateMissingCB");

//Refer & Earn
Route::get($adminRoute . '/refer-and-earn', 'Admin\refernEarnController@index')->name("admin.referNearn");
Route::get($adminRoute . '/refer-and-earn/list', 'Admin\refernEarnController@referNearnList')->name("admin.referNearnList");
Route::get($adminRoute . '/refer-and-earn/{id}/confirmed', 'Admin\refernEarnController@getConfirmedReferrer')->name("admin.getConfirmedReferrer");
Route::get($adminRoute . '/refer-and-earn/{id}/confirmed/list', 'Admin\refernEarnController@getConfirmedReferrerList')->name("admin.getConfirmedReferrerList");
Route::get($adminRoute . '/refer-and-earn/{id}/performed', 'Admin\refernEarnController@getPerformedReferrer')->name("admin.getPerformedReferrer");
Route::get($adminRoute . '/refer-and-earn/{id}/performed/list', 'Admin\refernEarnController@getPerformedReferrerList')->name("admin.getPerformedReferrerList");

//Emails
Route::get($adminRoute . '/emails/deals-email', ['as' => 'admin.emails.deals', 'uses' => 'Admin\EmailController@settings']);
Route::post($adminRoute . '/emails/update-deals-email', ['as' => 'admin.emails.updateSettings', 'uses' => 'Admin\EmailController@updateSettings']);
Route::get($adminRoute . '/emails/deals-email-preview/{type}', ['as' => 'admin.emails.preview', 'uses' => 'Admin\EmailController@preview']);
Route::get($adminRoute . '/emails/offer-email', ['as' => 'admin.offerEmail', 'uses' => 'Admin\EmailController@getOfferEmail']);
Route::get($adminRoute . '/emails/offer-email/filter', ['as' => 'admin.offerEmail.filter', 'uses' => 'Admin\EmailController@offerEmailFilter']);
Route::post($adminRoute . '/emails/offer-email/request', ['as' => 'admin.offerEmail.request', 'uses' => 'Admin\EmailController@offerEmailFilterRequest']);
Route::post($adminRoute . '/emails/offer-email/save_email_content', ['as' => 'admin.offerEmail.save_email_content', 'uses' => 'Admin\EmailController@offerEmailSaveContent']);
Route::get($adminRoute . '/emails/offer-email/preview', ['as' => 'admin.offerEmail.preview', 'uses' => 'Admin\EmailController@offerEmailPreview']);
Route::post($adminRoute . '/emails/offer-email/sendTestOfferEmail', ['as' => 'admin.offerEmail.sendTestOfferEmail', 'uses' => 'Admin\EmailController@sendTestOfferEmail']);
Route::post($adminRoute . '/emails/offer-email/offerEmailSchedule', ['as' => 'admin.offerEmail.offerEmailSchedule', 'uses' => 'Admin\EmailController@offerEmailSchedule']);
Route::get($adminRoute . '/emails/offer-email-listview/', ['as' => 'admin.offerEmail.listview', 'uses' => 'Admin\EmailController@getOffersEmailListView']);
Route::get($adminRoute . '/emails/offer-email-list/', ['as' => 'admin.offerEmail.list', 'uses' => 'Admin\EmailController@getOffersEmailList']);

//Feedback
Route::get($adminRoute . '/extension-feedback', ['as' => 'admin.extensionFeedback', 'uses' => 'Admin\SiteController@getExtensionFeedback']);
Route::get($adminRoute . '/extension-feedback/list', ['as' => 'admin.extensionFeedback.list', 'uses' => 'Admin\SiteController@getExtensionFeedbackList']);

