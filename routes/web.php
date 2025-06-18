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
Route::get('cv-template', ['as' => 'cv-template', 'uses' => 'SiteController@cvtemplate']);
Route::get('select-resume', ['as' => 'select-resume', 'uses' => 'SiteController@selectresume']);
Route::get('select-resume/skin/{id}', ['as' => 'select-skin', 'uses' => 'SiteController@selectresume']);
Route::get('/contact', ['as' => 'contact', 'uses' => 'SiteController@contact']);

Route::get('/faq', ['as' => 'faq', 'uses' => 'SiteController@faq']);
Route::get('/resume-tips', ['as' => 'resume-tips', 'uses' => 'SiteController@resumeTips']);

Route::post('/send-contact-email', ['as' => 'send_contact_email', 'uses' => 'SiteController@send_contact_email']);
Route::get('/terms-and-conditions', ['as' => 'terms_and_conditions', 'uses' => 'SiteController@terms_and_conditions']);
Route::get('/privacy-policy', ['as' => 'privacy_policy', 'uses' => 'SiteController@privacy_policy']);

Route::get('create-resume', ['as' => 'create-resume', 'uses' => 'SiteController@createresume']);
Route::get('edit-resume/{id}', ['as' => 'edit-resume', 'uses' => 'SiteController@editResume']);
Route::post('createresumes', ['as' => 'createresumes', 'uses' => 'SiteController@createnewresume']);


Route::get('work-history', ['as' => 'work-history', 'uses' => 'SiteController@workhistory']);
Route::post('save-workdetail', ['as' => 'save-workdetail', 'uses' => 'SiteController@saveworkdetails']);
Route::get('edit-work-detail/{id}', ['as' => 'edit-work-detail', 'uses' => 'SiteController@editworkdetail']);
Route::post('edit-workdetail/{id}', ['as' => 'edit-workdetail', 'uses' => 'SiteController@saveeditworkdetail']);
Route::post('delete-workdetail', ['as' => 'delete-workdetail', 'uses' => 'SiteController@deleteWorkdetail']);
Route::post('order-workdetail', ['as' => 'order-workdetail', 'uses' => 'SiteController@orderWorkdetail']);
Route::post('final-position', ['as' => 'final-position', 'uses' => 'SiteController@finalPosition']);
//Route::post('image-upload', ['as' => 'image-upload', 'uses' => 'SiteController@imageUploadPost']);

//Route::post('resume_upload', 'SiteController@imageUploadPost')->name('resume_upload');
Route::post('resume_upload', 'HomeController@index')->name('resume_upload');

Route::get('work-detail', ['as' => 'work-detail', 'uses' => 'SiteController@workdetail']);
Route::post('save-login', ['as' => 'save-login', 'uses' => 'SiteController@savelogin']);
Route::get('work-education', ['as' => 'work-education', 'uses' => 'SiteController@workeducation']);

Route::get('work-expr', 'SiteController@workexpr')->name('work-expr');
Route::get('expr', 'SiteController@exprList')->name('exprList');
Route::get('work-expr/{id}', 'SiteController@workexprupdate')->name('work-expr-edit');
Route::get('expr/{id}', 'SiteController@editExprList')->name('editExprList');

Route::get('skills', ['as' => 'skills', 'uses' => 'SiteController@skills']);
Route::get('work-skills', ['as' => 'work-skills', 'uses' => 'SiteController@workskills']);
Route::post('save-skills', ['as' => 'save-skills', 'uses' => 'SiteController@saveskills']);
Route::get('skills/{id}', ['as' => 'edit-skills', 'uses' => 'SiteController@editWorkSkills']);
Route::post('delete-skills', ['as' => 'deleteskills', 'uses' => 'SiteController@deleteSkills']);

Route::get('summary', ['as' => 'summary', 'uses' => 'SiteController@summary']);
Route::get('enter-summary', ['as' => 'enter-summary', 'uses' => 'SiteController@entersummary']);
Route::post('save-summary', ['as' => 'save-summary', 'uses' => 'SiteController@saveSummary']);
Route::get('edit-summary/{id}', ['as' => 'edit-summary', 'uses' => 'SiteController@editSummary']);
Route::post('delete-summary', ['as' => 'deletesummary', 'uses' => 'SiteController@deleteSummary']);

Route::get('add-section', ['as' => 'add-section', 'uses' => 'SiteController@addSection']);
Route::get('edit-section/{id}', ['as' => 'edit-section', 'uses' => 'SiteController@editSection']);
Route::post('save-section', ['as' => 'save-section', 'uses' => 'SiteController@saveSection']);
Route::post('delete-section', ['as' => 'deletsection', 'uses' => 'SiteController@deletSection']);

Route::get('final-resume/{id}', ['as' => 'final-resume', 'uses' => 'SiteController@finalResume']);
Route::post('final-resume/formatting', ['as' => 'final-resume-formatting', 'uses' => 'SiteController@finalResumeFormatting']);

Route::post('section-title', ['as' => 'section-title', 'uses' => 'SiteController@sectionTitle']);

Route::get('documenthome', ['as' => 'documenthome', 'uses' => 'SiteController@documenthome']);
Route::post('documentRename', ['as' => 'documentRename', 'uses' => 'SiteController@documentRename']);

Route::post('imageUpdate', ['as' => 'imageUpdate', 'uses' => 'SiteController@imageUpdate']);

Route::post('documentRemove', ['as' => 'documentRemove', 'uses' => 'SiteController@documentRemove']);
Route::post('duplicate', ['as' => 'duplicate', 'uses' => 'SiteController@duplicate']);
Route::post('downloaddocument', ['as' => 'downloadDocument', 'uses' => 'SiteController@downloadDocument']);
Route::get('download/{id}/{name}', ['as' => 'documentpdf', 'uses' => 'SiteController@documentpdf']);
Route::post('documentEmail', ['as' => 'documentEmail', 'uses' => 'SiteController@documentEmail']);

//Payment
Route::get('plans', ['as' => 'plans', 'uses' => 'SiteController@packagePlans']);
Route::get('plan/{id}', ['as' => 'select-plan', 'uses' => 'SiteController@selectPlan']);
Route::get('payment/callback', ['as' => 'paymentCallback', 'uses' => 'SiteController@paymentCallback']);
Route::get('payment/{id}/{reference}', ['as' => 'paymentComplete', 'uses' => 'SiteController@paymentComplete']);
Route::get('flutterwave/{id}', ['as' => 'flutterwave-payment', 'uses' => 'SiteController@flutterwavePayment']);
Route::post('flutterwave', ['as' => 'flutterwavePay', 'uses' => 'SiteController@flutterwavePay']);
Route::post('flutterwave-callback', ['as' => 'flutterwavePay-callback', 'uses' => 'SiteController@flutterwavePayCallback']);

Route::get('education-detail', ['as' => 'education-detail', 'uses' => 'SiteController@educationdetail']);
Route::get('education', 'SiteController@educationList')->name('educationList');
Route::get('enter-education-detail', 'SiteController@entereducation')->name('enter-education-detail');
Route::post('save-educationdata', ['as' => 'save-educationdata', 'uses' => 'SiteController@saveeducationdata']);
Route::get('education/{id}', 'SiteController@editEducation')->name('editEducation');
Route::post('education/{id}', 'SiteController@updateEducation')->name('updateEducation');
Route::post('delete-edu', 'SiteController@deleteEducation')->name('deleteEducation');
Route::post('order-education', 'SiteController@orderEducation')->name('orderEducation');
Route::get('edit-education/{id}', 'SiteController@editEducationList')->name('editEducationList');

Route::post('update-workhistory', ['as' => 'update-workhistory', 'uses' => 'SiteController@updateworkhistory']);
Route::post('save-workhistory', ['as' => 'save-workhistory', 'uses' => 'SiteController@saveworkhistory']);
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

Route::get('login', ['as' => 'login', 'uses' => 'SiteController@getLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'SiteController@getLogout']);

//profile
Route::get('profile', ['as' => 'profile', 'uses' => 'ProfileController@getEditProfile']);
Route::post('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@updateProfile']);
Route::post('screen-record', ['as' => 'screen.record', 'uses' => 'ProfileController@screenRecord']);

//test template
Route::get('testtemp', function(){
	return view("frontend.cvTemplates.SCVT4");
});

// Pages
// Route::get('personal-loan', ['as' => 'personalloan', 'uses' => 'SiteController@getPersonalLoan']);
// Route::get('buy-a-house', ['as' => 'buyhouse', 'uses' => 'SiteController@getBuyHouse']);
// Route::get('refer', ['as' => 'refer', 'uses' => 'SiteController@getRefer']);
// Route::get('terms-conditions', ['as' => 'termsconditions', 'uses' => 'SiteController@getTermsConditions']);
// Route::get('privacy-notice', ['as' => 'privacyNotice', 'uses' => 'SiteController@getPrivacyNotice']);
// Route::get('privacy-policy', ['as' => 'privacyPolicy', 'uses' => 'SiteController@getPrivacyPolicy']);
// Route::get('contact', ['as' => 'contact', 'uses' => 'SiteController@getContact']);
// Route::get('partners', ['as' => 'partners', 'uses' => 'SiteController@getPartners']);
// Route::get('thankyou', ['as' => 'thankyou', 'uses' => 'SiteController@getThankyou']);
// Route::get('extension-feedback', ['as' => 'getExtensionFeedback', 'uses' => 'SiteController@getExtensionFeedback']);


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
Route::get($adminRoute . '/settings', ['as' => 'admin.settings', 'uses' => 'Admin\SiteController@settings']);
Route::post($adminRoute . '/update-password', ['as' => 'admin.updatePassword', 'uses' => 'Admin\SiteController@updatePassword']);

//theme routes
Route::get($adminRoute. '/theme', ['as' =>'admin.theme','uses' => 'Admin\TemplateController@template']);


//job title
Route::get($adminRoute. '/work_job', ['as' =>'admin.work_job', 'uses' => 'Admin\WorkJobController@work_job']);
Route::post($adminRoute. '/add_job_title', ['as' =>'admin.add_job_title', 'uses' => 'Admin\WorkJobController@add_job_title']);
Route::get($adminRoute. '/edit_work_job/{id}', ['as' =>'admin.edit_work_job','uses' => 'Admin\WorkJobController@edit_work_job']);

Route::post($adminRoute. '/update_work_job/{id}', ['as' =>'admin.update_work_job','uses' => 'Admin\WorkJobController@update_work_job']);
Route::get($adminRoute. '/delete_work_job/{id}', ['as' =>'admin.delete_work_job','uses' => 'Admin\WorkJobController@delete_work_job']);

//skills
Route::get($adminRoute. '/skills', ['as' =>'admin.skills', 'uses' => 'Admin\SkillController@skills']);
Route::post($adminRoute. '/add_skills', ['as' =>'admin.add_skills', 'uses' => 'Admin\SkillController@add_skills']);
Route::get($adminRoute. '/edit_skill/{id}', ['as' =>'admin.edit_skill', 'uses' => 'Admin\SkillController@edit_skill']);
Route::post($adminRoute. '/update_skills/{id}', ['as' =>'admin.update_skills', 'uses' => 'Admin\SkillController@update_skills']);
Route::get($adminRoute. '/delete_skill/{id}', ['as' =>'admin.delete_skill','uses' => 'Admin\SkillController@delete_skill']);

//work Summary
Route::get($adminRoute. '/work-summary', ['as' =>'admin.work-summary', 'uses' => 'Admin\SummaryController@work_summary']);
Route::post($adminRoute. '/add_Summry', ['as' =>'admin.add_Summry', 'uses' => 'Admin\SummaryController@add_Summry']);
Route::get($adminRoute. '/delete_summary/{id}', ['as' =>'admin.delete_summary','uses' => 'Admin\SummaryController@delete_summary']);
Route::get($adminRoute. '/edit_summary/{id}', ['as' =>'admin.edit_summary', 'uses' => 'Admin\SummaryController@edit_summary']);
Route::post($adminRoute. '/update_summary/{id}', ['as' =>'admin.update_summary', 'uses' => 'Admin\SummaryController@update_summary']);


//plans routes
Route::get($adminRoute. '/plans', ['as' =>'admin.plans','uses' => 'Admin\PlanController@plans']);
Route::post($adminRoute. '/add_plans', ['as' =>'admin.add_plans','uses' => 'Admin\PlanController@add_plans']);
Route::get($adminRoute. '/delete_plan/{id}', ['as' =>'admin.delete_plan','uses' => 'Admin\PlanController@delete_plans']);
Route::get($adminRoute. '/edit_plan/{id}', ['as' =>'admin.edit_plan','uses' => 'Admin\PlanController@edit_plans']);
Route::post($adminRoute. '/update_plans/{id}', ['as' =>'admin.update_plans','uses' => 'Admin\PlanController@update_plans']);
Route::get($adminRoute. '/user_per_plan/{id}', ['as' =>'admin.user_per_plan','uses' => 'Admin\PlanController@user_per_plan']);

//Chat
Route::get($adminRoute.'/chat', 'Admin\ChatController@index')->name('admin.chat');


// users
Route::get($adminRoute . '/users', ['as' => 'admin.users', 'uses' => 'Admin\UsersController@index']);
Route::get($adminRoute . '/users/plan/{id}', ['as' => 'admin.users.plan', 'uses' => 'Admin\UsersController@filterByPlan']);
Route::get($adminRoute . '/users/list' , ['as' => 'admin.users.getList', 'uses' => 'Admin\UsersController@getList']);
Route::get($adminRoute . '/users/edit/{id}', ['as' => 'admin.users.edit', 'uses' => 'Admin\UsersController@edit']);
Route::post($adminRoute. '/users/update/{id}', ['as' => 'admin.users.update', 'uses' => 'Admin\UsersController@update']);
Route::get($adminRoute . '/users/resume', ['as' => 'admin.users.resume', 'uses' => 'Admin\UsersController@userResume']);
Route::get($adminRoute . '/users/getResumeList', ['as' => 'admin.users.getResumeList', 'uses' => 'Admin\UsersController@getResumeList']);
Route::get($adminRoute . '/users/resume/{id}', ['as' => 'admin.users.resume.edit', 'uses' => 'Admin\UsersController@userResumeEdit']);

//Resume contact
Route::get($adminRoute .'/edit-resume/{id}', ['as' => 'admin.edit-resume', 'uses' => 'Admin\ResumeController@editResume']);
Route::post($adminRoute .'/edit-resume/{id}', ['as' => 'admin.update-resume', 'uses' => 'Admin\ResumeController@updateResume']);

//Resume summary
Route::get($adminRoute .'/edit-summary/{id}', ['as' => 'admin.edit-summary', 'uses' => 'Admin\ResumeController@editSummary']);
Route::post($adminRoute .'/edit-summary/{id}', ['as' => 'admin.update-summary', 'uses' => 'Admin\ResumeController@updateSummary']);

//Resume Education 
Route::get($adminRoute .'/education-list/{id}', ['as' => 'admin.education-list', 'uses' => 'Admin\ResumeController@educationList']);
Route::get($adminRoute .'/getEducationList/{id}', ['as' => 'admin.getEducationList', 'uses' => 'Admin\ResumeController@getEducationList']);
Route::get($adminRoute .'/edit-education/{id}', ['as' => 'admin.edit-education', 'uses' => 'Admin\ResumeController@editEducation']);
Route::post($adminRoute .'/edit-education/{id}', ['as' => 'admin.update-education', 'uses' => 'Admin\ResumeController@updateEducation']);

//Resume Education 
Route::get($adminRoute .'/resume-skills/{id}', ['as' => 'admin.resume-skills', 'uses' => 'Admin\ResumeController@skills']);
Route::post($adminRoute .'/resume-skills/{id}', ['as' => 'admin.update-resume-skills', 'uses' => 'Admin\ResumeController@updateSkills']);

//Work experience
Route::get($adminRoute .'/work-exp/{id}', ['as' => 'admin.work-exp', 'uses' => 'Admin\ResumeController@workExperience']);
Route::get($adminRoute .'/getWorkExp/{id}', ['as' => 'admin.getWorkExp', 'uses' => 'Admin\ResumeController@getWorkExp']);
Route::get($adminRoute .'/edit-work-exp/{id}', ['as' => 'admin.edit-work-exp', 'uses' => 'Admin\ResumeController@editWorkExp']);
Route::post($adminRoute .'/edit-work-exp/{id}', ['as' => 'admin.update-work-exp', 'uses' => 'Admin\ResumeController@updateWorkExp']);

//Extra Section
Route::get($adminRoute .'/section/{id}', ['as' => 'admin.section', 'uses' => 'Admin\ResumeController@section']);
Route::post($adminRoute .'/section/{id}', ['as' => 'admin.update-section', 'uses' => 'Admin\ResumeController@updateSection']);

//User recording
Route::get($adminRoute .'/recording', ['as' => 'admin.recording', 'uses' => 'Admin\RecordingController@index']);
Route::post($adminRoute .'/recording/event', ['as' => 'admin.recording.event', 'uses' => 'Admin\RecordingController@getEvent']);

Route::post($adminRoute . '/manual_subscribe', ['as' => 'admin.manual_subscribe', 'uses' => 'Admin\UsersController@manual_subscribe']);
Route::post($adminRoute . '/lock_user', ['as' => 'admin.lock_user', 'uses' => 'Admin\UsersController@lock_user']);
Route::get($adminRoute . '/add_users', ['as' => 'admin.add_users', 'uses' => 'Admin\UsersController@add_user']);
Route::get($adminRoute . '/user-profile/{id}', ['as' => 'admin.user-profile', 'uses' => 'Admin\UsersController@userprofile']);
Route::get($adminRoute . '/user-delete/{id}', ['as' => 'admin.user-delete', 'uses' => 'Admin\UsersController@deleteuserprofile']);
Route::post($adminRoute . '/update-user-profile', ['as' => 'admin.update-user-profile', 'uses' => 'Admin\UsersController@updateuserprofile']);
Route::post($adminRoute . '/save_user', ['as' => 'admin.save_user', 'uses' => 'Admin\UsersController@saveuserprofile']);
Route::get($adminRoute . '/search_user', ['as' => 'admin.stocks.edit', 'uses' => 'Admin\UsersController@searchuser']);

//add admin
Route::get($adminRoute . '/add_admin', ['as' => 'admin.add_admin', 'uses' => 'Admin\AdminController@add_admin']);
Route::post($adminRoute . '/save_admin', ['as' => 'admin.save_admin', 'uses' => 'Admin\AdminController@saveadminprofile']);
//Route::get($adminRoute . '/users', ['as' => 'admin.users', 'uses' => 'Admin\UsersController@index']);
Route::get($adminRoute . '/admins', ['as' => 'admin.admins', 'uses' => 'Admin\AdminController@admin_list']);
Route::post($adminRoute . '/lock_admin', ['as' => 'admin.lock_admin', 'uses' => 'Admin\AdminController@lock_admin']);



//report
Route::get($adminRoute . '/report/users', ['as' => 'admin.report.users', 'uses' => 'Admin\ReportController@userReport']);
Route::get($adminRoute . '/report/getUserList', ['as' => 'admin.report.getUserList', 'uses' => 'Admin\ReportController@getUserReportList']);
Route::get($adminRoute . '/report/transaction', ['as' => 'admin.report.transaction', 'uses' => 'Admin\ReportController@transactionReport']);
Route::get($adminRoute . '/report/getTransaction', ['as' => 'admin.report.getTransaction', 'uses' => 'Admin\ReportController@getTransaction']);

// Settings
Route::get($adminRoute . '/settings/sendgrid', ['as' => 'admin.settings.sendgrid', 'uses' => 'Admin\SettingsController@getSendGrid']);
Route::post($adminRoute . '/settings/sendgrid', ['as' => 'admin.settings.sendgrid.save', 'uses' => 'Admin\SettingsController@sendGridSave']);
Route::get($adminRoute . '/settings/social-login', ['as' => 'admin.settings.socialLogin', 'uses' => 'Admin\SettingsController@getSocialLogin']);
Route::post($adminRoute . '/settings/social-login', ['as' => 'admin.settings.socialLogin.save', 'uses' => 'Admin\SettingsController@socialLoginSave']);

