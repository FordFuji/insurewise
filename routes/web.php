<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('/', function() {
    return redirect('index');
});

// Frontend
Route::get('/index', 'FrontendController@index');
Route::get('/about', 'FrontendController@about');
Route::get('/car_insurance_landing', 'FrontendController@car_insurance_landing');
Route::any('/car_insurance', 'FrontendController@car_insurance');
Route::get('/compulsory', 'FrontendController@compulsory');
Route::get('/contact', 'FrontendController@contact');
Route::get('/golf_insurance', 'FrontendController@golf_insurance');
Route::get('/health_insurance_landing', 'FrontendController@health_insurance_landing');
Route::any('/health_insurance', 'FrontendController@health_insurance');
Route::get('/home_insurance', 'FrontendController@home_insurance');
Route::get('/news_detail/{news_and_article_id}', 'FrontendController@news_detail');
Route::get('/news', 'FrontendController@news');
Route::get('/promotion', 'FrontendController@promotion');
Route::get('/terms_cookies', 'FrontendController@terms_cookies');
Route::get('/terms_policy', 'FrontendController@terms_policy');

Route::get('/logout', 'FrontendController@logout');

Route::post('/saveUpdateContactUsForm', 'FrontendController@saveUpdateContactUsForm');

Route::get('/pdf_healthy/{insurance_healthy_id}', 'FrontendController@pdf_healthy');

Route::get('/pdf_cancer/{insurance_cancer_id}', 'FrontendController@pdf_cancer');

Route::get('/pdf_car/{insurance_car_id}', 'FrontendController@pdf_car');

Route::get('/pdf_travel/{insurance_travel_id}', 'FrontendController@pdf_travel');

Route::get('/pdf_accident/{insurance_accident_id}', 'FrontendController@pdf_accident');

Route::get('/pdf_transportation/{insurance_transportation_id}', 'FrontendController@pdf_transportation');

Route::post('/ajaxSaveDataInsuranceHealth', 'FrontendController@ajaxSaveDataInsuranceHealth');

Route::post('/ajaxSaveContactHealth', 'FrontendController@ajaxSaveContactHealth');

Route::post('/ajaxConfirmCancer', 'FrontendController@ajaxConfirmCancer');

Route::post('/ajaxSaveDataInsuranceHealthConfirm', 'FrontendController@ajaxSaveDataInsuranceHealthConfirm');

Route::post('/saveGolfContact', 'FrontendController@saveGolfContact');

Route::post('/ajaxFilterHealthy', 'FrontendController@ajaxFilterHealthy');

Route::post('/ajaxFilterProductCar', 'FrontendController@ajaxFilterProductCar');

Route::post('/ajaxSaveContactCar', 'FrontendController@ajaxSaveContactCar');

Route::post('/saveMember', 'FrontendController@saveMember');

Route::post('/login', 'FrontendController@login');

Route::post('/ajaxSaveContactCondo', 'FrontendController@ajaxSaveContactCondo');

Route::post('/ajaxSaveContactCondoDetail', 'FrontendController@ajaxSaveContactCondoDetail');

Route::post('/ajaxContactPet', 'FrontendController@ajaxContactPet');

Route::post('/ajaxContactPetDetail', 'FrontendController@ajaxContactPetDetail');

Route::post('/ajaxContactTravel', 'FrontendController@ajaxContactTravel');

Route::post('/ajaxContactTravelDetail', 'FrontendController@ajaxContactTravelDetail');

Route::post('/ajaxContactBusiness', 'FrontendController@ajaxContactBusiness');

Route::post('/ajaxContactExtended', 'FrontendController@ajaxContactExtended');

Route::post('/ajaxSaveQuotationCar', 'FrontendController@ajaxSaveQuotationCar');

Route::post('/ajaxSaveQuotationHealth', 'FrontendController@ajaxSaveQuotationHealth');

Route::post('/ajaxSendFormCancer', 'FrontendController@ajaxSendFormCancer');

Route::post('/ajaxSendFormAccident', 'FrontendController@ajaxSendFormAccident');

Route::post('/ajaxSendFormTransportation', 'FrontendController@ajaxSendFormTransportation');

Route::post('/ajaxSaveQuotationConfirmCar', 'FrontendController@ajaxSaveQuotationConfirmCar');

Route::post('/ajaxConfirmAccident', 'FrontendController@ajaxConfirmAccident');

Route::post('/ajaxConfirmAccident2', 'FrontendController@ajaxConfirmAccident2');

Route::post('/ajaxDetailTransportation', 'FrontendController@ajaxDetailTransportation');

Route::post('/ajaxConfirmTransportation', 'FrontendController@ajaxConfirmTransportation');

Route::post('/ajaxFilterNewsArticle', 'FrontendController@ajaxFilterNewsArticle');

// File ใหม่
Route::get('/accident_insurance', 'FrontendController@accident_insurance');
Route::get('/acct_page', 'FrontendController@acct_page');
Route::get('/business_insurance', 'FrontendController@business_insurance');
Route::get('/cancer_insurance', 'FrontendController@cancer_insurance');
Route::get('/condo_insurance', 'FrontendController@condo_insurance');
Route::get('/extended_insurance', 'FrontendController@extended_insurance');
Route::get('/home_insurance', 'FrontendController@home_insurance');
Route::get('/pet_insurance', 'FrontendController@pet_insurance');
Route::get('/travel_insurance', 'FrontendController@travel_insurance');
Route::get('/transportation_insurance', 'FrontendController@transportation_insurance');
Route::get('/promotion_detail/{promotion_id}', 'FrontendController@promotion_detail');

Route::post('/ajaxChangeBrandCarFrontend', 'FrontendController@ajaxChangeBrandCarFrontend');

Route::post('/ajaxChangeModelCarFrontend', 'FrontendController@ajaxChangeModelCarFrontend');

Route::post('/ajaxContactHome', 'FrontendController@ajaxContactHome');

Route::post('/ajaxContactHomeDetail', 'FrontendController@ajaxContactHomeDetail');

// Test Captcha
Route::any('test_captcha_google', 'FrontendController@test_captcha_google');
// End Frontend

// login, logout
Route::get('/backend', 'LoginLogoutController@login');

Route::get('/backend/login', 'LoginLogoutController@login');

Route::post('/backend/ajaxLogin', 'LoginLogoutController@ajaxLogin');

Route::get('/backend/logout', 'LoginLogoutController@logout');
// End login, logout

// user
Route::get('/backend/user', 'AuthenController@user');

Route::post('/backend/user/server_processing', 'AuthenController@userServerProcessing');

Route::get('/backend/user/user_add_edit/{user_id?}', 'AuthenController@userAddEdit');

Route::post('/backend/user/user_save_update', 'AuthenController@userSaveUpdate');

Route::get('/backend/user/user_delete/{user_id}', function($user_id) {
    // $deleted = DB::delete('delete from user where user_id = "'.$user_id.'"');
    DB::table('user')->where('user_id',$user_id)->delete();
    return redirect('backend/user');
});
// End user

// banner_slide
Route::get('/backend/banner_slide', 'BannerSlideController@banner_slide');

Route::post('/backend/banner_slide/server_processing', 'BannerSlideController@banner_slideServerProcessing');

Route::get('/backend/banner_slide/banner_slide_form/{banner_slide_id?}', 'BannerSlideController@banner_slide_form');

Route::post('/backend/banner_slide/banner_slide_save_update', 'BannerSlideController@banner_slideSaveUpdate');

Route::get('/backend/banner_slide/banner_slide_delete/{banner_slide_id}', function($banner_slide_id) {
    // $deleted = DB::delete('delete from banner_slide where banner_slide_id = "'.$banner_slide_id.'"');
    DB::table('banner_slide')->where('banner_slide_id',$banner_slide_id)->delete();
    return redirect('backend/banner_slide');
});
// End banner_slide

// department
Route::get('/backend/department', 'AuthenController@department');

Route::post('/backend/department/server_processing', 'AuthenController@departmentServerProcessing');

Route::get('/backend/department/department_add_edit/{department_id?}', 'AuthenController@departmentAddEdit');

Route::post('/backend/department/department_save_update', 'AuthenController@departmentSaveUpdate');

Route::get('/backend/department/department_delete/{department_id}', function($department_id) {
    // $deleted = DB::delete('delete from department where department_id = "'.$department_id.'"');
    DB::table('department')->where('department_id',$department_id)->delete();
    return redirect('backend/department');
});
// End department

// insurance_car
// brand_car
Route::get('/backend/brand_car', 'InsuranceCarController@brand_car');

Route::post('/backend/brand_car/server_processing', 'InsuranceCarController@brand_carServerProcessing');

Route::get('/backend/brand_car/form/{brand_car_id?}', 'InsuranceCarController@brand_car_form');

Route::post('/backend/brand_car/brand_car_save_update', 'InsuranceCarController@brand_carSaveUpdate');

Route::get('/backend/brand_car/brand_car_delete/{brand_car_id}', function($brand_car_id) {
    // $deleted = DB::delete('delete from brand_car where brand_car_id = "'.$brand_car_id.'"');
    DB::table('brand_car')->where('brand_car_id',$brand_car_id)->delete();
    return redirect('backend/brand_car');
});
// End brand_car

// model_car
Route::get('/backend/model_car', 'InsuranceCarController@model_car');

Route::post('/backend/model_car/server_processing', 'InsuranceCarController@model_carServerProcessing');

Route::get('/backend/model_car/form/{model_car_id?}', 'InsuranceCarController@model_car_form');

Route::post('/backend/model_car/model_car_save_update', 'InsuranceCarController@model_carSaveUpdate');

Route::get('/backend/model_car/model_car_delete/{model_car_id}', function($model_car_id) {
    // $deleted = DB::delete('delete from model_car where model_car_id = "'.$model_car_id.'"');
    DB::table('model_car')->where('model_car_id',$model_car_id)->delete();
    return redirect('backend/model_car');
});
// End model_car

// year_car
Route::get('/backend/year_car', 'InsuranceCarController@year_car');

Route::post('/backend/year_car/server_processing', 'InsuranceCarController@year_carServerProcessing');

Route::get('/backend/year_car/form/{year_car_id?}', 'InsuranceCarController@year_car_form');

Route::post('/backend/year_car/year_car_save_update', 'InsuranceCarController@year_carSaveUpdate');

Route::get('/backend/year_car/year_car_delete/{year_car_id}', function($year_car_id) {
    // $deleted = DB::delete('delete from year_car where year_car_id = "'.$year_car_id.'"');
    DB::table('year_car')->where('year_car_id',$year_car_id)->delete();
    return redirect('backend/year_car');
});
// End year_car

// car_faq
Route::get('/backend/car_faq', 'InsuranceCarController@car_faq');

Route::post('/backend/car_faq/server_processing', 'InsuranceCarController@car_faqServerProcessing');

Route::get('/backend/car_faq/form/{car_faq_id?}', 'InsuranceCarController@car_faq_form');

Route::post('/backend/car_faq/car_faq_save_update', 'InsuranceCarController@car_faqSaveUpdate');

Route::get('/backend/car_faq/car_faq_delete/{car_faq_id}', function($car_faq_id) {
    // $deleted = DB::delete('delete from car_faq where car_faq_id = "'.$car_faq_id.'"');
    DB::table('car_faq')->where('car_faq_id',$car_faq_id)->delete();
    return redirect('backend/car_faq');
});
// End car_faq

// level_car
Route::get('/backend/level_car', 'InsuranceCarController@level_car');

Route::post('/backend/level_car/server_processing', 'InsuranceCarController@level_carServerProcessing');

Route::get('/backend/level_car/form/{level_car_id?}', 'InsuranceCarController@level_car_form');

Route::post('/backend/level_car/level_car_save_update', 'InsuranceCarController@level_carSaveUpdate');

Route::get('/backend/level_car/level_car_delete/{level_car_id}', function($level_car_id) {
    // $deleted = DB::delete('delete from level_car where level_car_id = "'.$level_car_id.'"');
    DB::table('level_car')->where('level_car_id',$level_car_id)->delete();
    return redirect('backend/level_car');
});
// End level_car

// damages_first
Route::get('/backend/damages_first', 'InsuranceCarController@damages_first');

Route::post('/backend/damages_first/server_processing', 'InsuranceCarController@damages_firstServerProcessing');

Route::get('/backend/damages_first/form/{damages_first_id?}', 'InsuranceCarController@damages_first_form');

Route::post('/backend/damages_first/damages_first_save_update', 'InsuranceCarController@damages_firstSaveUpdate');

Route::get('/backend/damages_first/damages_first_delete/{damages_first_id}', function($damages_first_id) {
    // $deleted = DB::delete('delete from damages_first where damages_first_id = "'.$damages_first_id.'"');
    DB::table('damages_first')->where('damages_first_id',$damages_first_id)->delete();
    return redirect('backend/damages_first');
});
// End damages_first

// type_repair
Route::get('/backend/type_repair', 'InsuranceCarController@type_repair');

Route::post('/backend/type_repair/server_processing', 'InsuranceCarController@type_repairServerProcessing');

Route::get('/backend/type_repair/form/{type_repair_id?}', 'InsuranceCarController@type_repair_form');

Route::post('/backend/type_repair/type_repair_save_update', 'InsuranceCarController@type_repairSaveUpdate');

Route::get('/backend/type_repair/type_repair_delete/{type_repair_id}', function($type_repair_id) {
    // $deleted = DB::delete('delete from type_repair where type_repair_id = "'.$type_repair_id.'"');
    DB::table('type_repair')->where('type_repair_id',$type_repair_id)->delete();
    return redirect('backend/type_repair');
});
// End type_repair

// sub_model_car
Route::get('/backend/sub_model_car', 'InsuranceCarController@sub_model_car');

Route::post('/backend/sub_model_car/server_processing', 'InsuranceCarController@sub_model_carServerProcessing');

Route::get('/backend/sub_model_car/form/{sub_model_car_id?}', 'InsuranceCarController@sub_model_car_form');

Route::post('/backend/sub_model_car/sub_model_car_save_update', 'InsuranceCarController@sub_model_carSaveUpdate');

Route::get('/backend/sub_model_car/sub_model_car_delete/{sub_model_car_id}', function($sub_model_car_id) {
    // $deleted = DB::delete('delete from sub_model_car where sub_model_car_id = "'.$sub_model_car_id.'"');
    DB::table('sub_model_car')->where('sub_model_car_id',$sub_model_car_id)->delete();
    return redirect('backend/sub_model_car');
});

Route::post('/ajaxChangeBrandCar', 'InsuranceCarController@ajaxChangeBrandCar');
// End sub_model_car

// insurance_car
Route::get('/backend/insurance_car', 'InsuranceCarController@insurance_car');

Route::post('/backend/insurance_car/server_processing', 'InsuranceCarController@insurance_carServerProcessing');

Route::get('/backend/insurance_car/form/{insurance_car_id?}', 'InsuranceCarController@insurance_car_form');

Route::post('/backend/insurance_car/insurance_car_save_update', 'InsuranceCarController@insurance_carSaveUpdate');

Route::get('/backend/insurance_car/insurance_car_delete/{insurance_car_id}', function($insurance_car_id) {
    // $deleted = DB::delete('delete from insurance_car where insurance_car_id = "'.$insurance_car_id.'"');
    DB::table('insurance_car')->where('insurance_car_id',$insurance_car_id)->delete();
    return redirect('backend/insurance_car');
});
// End insurance_car
// End insurance_car

// member
Route::get('/backend/member', 'MemberController@member');

Route::post('/backend/member/server_processing', 'MemberController@memberServerProcessing');

Route::get('/backend/member/form/{member_id?}', 'MemberController@member_form');

Route::post('/backend/member/member_save_update', 'MemberController@memberSaveUpdate');

Route::get('/backend/member/member_delete/{member_id}', function($member_id) {
    // $deleted = DB::delete('delete from member where member_id = "'.$member_id.'"');
    DB::table('member')->where('member_id',$member_id)->delete();
    return redirect('backend/member');
});
// End member

// contact_us_form
Route::get('/backend/contact_us_form', 'ContactUsController@contact_us_form');

Route::post('/backend/contact_us_form/server_processing', 'ContactUsController@contact_us_formServerProcessing');

Route::get('/backend/contact_us_form/form/{contact_us_form_id?}', 'ContactUsController@contact_us_form_form');

Route::post('/backend/contact_us_form/contact_us_form_save_update', 'ContactUsController@contact_us_formSaveUpdate');

Route::get('/backend/contact_us_form/contact_us_form_delete/{contact_us_form_id}', function($contact_us_form_id) {
    // $deleted = DB::delete('delete from contact_us_form where contact_us_form_id = "'.$contact_us_form_id.'"');
    DB::table('contact_us_form')->where('contact_us_form_id',$contact_us_form_id)->delete();
    return redirect('backend/contact_us_form');
});
// End contact_us_form

// promotion
Route::get('/backend/promotion', 'PromotionController@promotion');

Route::post('/backend/promotion/server_processing', 'PromotionController@promotionServerProcessing');

Route::get('/backend/promotion/form/{promotion_id?}', 'PromotionController@promotion_form');

Route::post('/backend/promotion/promotion_save_update', 'PromotionController@promotionSaveUpdate');

Route::get('/backend/promotion/promotion_delete/{promotion_id}', function($promotion_id) {
    // $deleted = DB::delete('delete from promotion where promotion_id = "'.$promotion_id.'"');
    DB::table('promotion')->where('promotion_id',$promotion_id)->delete();
    return redirect('backend/promotion');
});
// End promotion

// news_and_article
Route::get('/backend/news_and_article', 'NewsAndArticleController@news_and_article');

Route::post('/backend/news_and_article/server_processing', 'NewsAndArticleController@news_and_articleServerProcessing');

Route::get('/backend/news_and_article/form/{news_and_article_id?}', 'NewsAndArticleController@news_and_article_form');

Route::post('/backend/news_and_article/news_and_article_save_update', 'NewsAndArticleController@news_and_articleSaveUpdate');

Route::get('/backend/news_and_article/news_and_article_delete/{news_and_article_id}', function($news_and_article_id) {
    // $deleted = DB::delete('delete from news_and_article where news_and_article_id = "'.$news_and_article_id.'"');
    DB::table('news_and_article')->where('news_and_article_id',$news_and_article_id)->delete();
    return redirect('backend/news_and_article');
});

Route::post('/ajaxNewsAndArticleHome', 'NewsAndArticleController@ajaxNewsAndArticleHome');
// End news_and_article

// insurance_healthy
// type_insurance
Route::get('/backend/type_insurance', 'InsuranceHealthyController@type_insurance');

Route::post('/backend/type_insurance/server_processing', 'InsuranceHealthyController@type_insuranceServerProcessing');

Route::get('/backend/type_insurance/form/{type_insurance_id?}', 'InsuranceHealthyController@type_insurance_form');

Route::post('/backend/type_insurance/type_insurance_save_update', 'InsuranceHealthyController@type_insuranceSaveUpdate');

Route::get('/backend/type_insurance/type_insurance_delete/{type_insurance_id}', function($type_insurance_id) {
    // $deleted = DB::delete('delete from type_insurance where type_insurance_id = "'.$type_insurance_id.'"');
    DB::table('type_insurance')->where('type_insurance_id',$type_insurance_id)->delete();
    return redirect('backend/type_insurance');
});
// End type_insurance

// insurance_healthy
Route::get('/backend/insurance_healthy', 'InsuranceHealthyController@insurance_healthy');

Route::post('/backend/insurance_healthy/server_processing', 'InsuranceHealthyController@insurance_healthyServerProcessing');

Route::get('/backend/insurance_healthy/form/{insurance_healthy_id?}', 'InsuranceHealthyController@insurance_healthy_form');

Route::post('/backend/insurance_healthy/insurance_healthy_save_update', 'InsuranceHealthyController@insurance_healthySaveUpdate');

Route::get('/backend/insurance_healthy/insurance_healthy_delete/{insurance_healthy_id}', function($insurance_healthy_id) {
    // $deleted = DB::delete('delete from insurance_healthy where insurance_healthy_id = "'.$insurance_healthy_id.'"');
    DB::table('insurance_healthy')->where('insurance_healthy_id',$insurance_healthy_id)->delete();
    return redirect('backend/insurance_healthy');
});
// End insurance_healthy

// healthy_faq
Route::get('/backend/healthy_faq', 'InsuranceHealthyController@healthy_faq');

Route::post('/backend/healthy_faq/server_processing', 'InsuranceHealthyController@healthy_faqServerProcessing');

Route::get('/backend/healthy_faq/form/{healthy_faq_id?}', 'InsuranceHealthyController@healthy_faq_form');

Route::post('/backend/healthy_faq/healthy_faq_save_update', 'InsuranceHealthyController@healthy_faqSaveUpdate');

Route::get('/backend/healthy_faq/healthy_faq_delete/{healthy_faq_id}', function($healthy_faq_id) {
    // $deleted = DB::delete('delete from healthy_faq where healthy_faq_id = "'.$healthy_faq_id.'"');
    DB::table('healthy_faq')->where('healthy_faq_id',$healthy_faq_id)->delete();
    return redirect('backend/healthy_faq');
});
// End healthy_faq
// End insurance_healthy

// insurance_golf
// insurance_golf
Route::get('/backend/insurance_golf', 'InsuranceGolfController@insurance_golf');

Route::post('/backend/insurance_golf/server_processing', 'InsuranceGolfController@insurance_golfServerProcessing');

Route::get('/backend/insurance_golf/form/{insurance_golf_id?}', 'InsuranceGolfController@insurance_golf_form');

Route::post('/backend/insurance_golf/insurance_golf_save_update', 'InsuranceGolfController@insurance_golfSaveUpdate');

Route::get('/backend/insurance_golf/insurance_golf_delete/{insurance_golf_id}', function($insurance_golf_id) {
    // $deleted = DB::delete('delete from insurance_golf where insurance_golf_id = "'.$insurance_golf_id.'"');
    DB::table('insurance_golf')->where('insurance_golf_id',$insurance_golf_id)->delete();
    return redirect('backend/insurance_golf');
});
// End insurance_golf

// golf_faq
Route::get('/backend/golf_faq', 'InsuranceGolfController@golf_faq');

Route::post('/backend/golf_faq/server_processing', 'InsuranceGolfController@golf_faqServerProcessing');

Route::get('/backend/golf_faq/form/{golf_faq_id?}', 'InsuranceGolfController@golf_faq_form');

Route::post('/backend/golf_faq/golf_faq_save_update', 'InsuranceGolfController@golf_faqSaveUpdate');

Route::get('/backend/golf_faq/golf_faq_delete/{golf_faq_id}', function($golf_faq_id) {
    // $deleted = DB::delete('delete from golf_faq where golf_faq_id = "'.$golf_faq_id.'"');
    DB::table('golf_faq')->where('golf_faq_id',$golf_faq_id)->delete();
    return redirect('backend/golf_faq');
});
// End golf_faq
// End insurance_golf

// พรบ.
// prb
Route::get('/backend/prb', 'PRBController@prb');

Route::post('/backend/prb/server_processing', 'PRBController@prbServerProcessing');

Route::get('/backend/prb/form/{prb_id?}', 'PRBController@prb_form');

Route::post('/backend/prb/prb_save_update', 'PRBController@prbSaveUpdate');

Route::get('/backend/prb/prb_delete/{prb_id}', function($prb_id) {
    // $deleted = DB::delete('delete from prb where prb_id = "'.$prb_id.'"');
    DB::table('prb')->where('prb_id',$prb_id)->delete();
    return redirect('backend/prb');
});

Route::post('/backend/prb_pdf', 'PRBController@prb_pdf');
// End prb

// prb_faq
Route::get('/backend/prb_faq', 'PRBController@prb_faq');

Route::post('/backend/prb_faq/server_processing', 'PRBController@prb_faqServerProcessing');

Route::get('/backend/prb_faq/form/{prb_faq_id?}', 'PRBController@prb_faq_form');

Route::post('/backend/prb_faq/prb_faq_save_update', 'PRBController@prb_faqSaveUpdate');

Route::get('/backend/prb_faq/prb_faq_delete/{prb_faq_id}', function($prb_faq_id) {
    // $deleted = DB::delete('delete from prb_faq where prb_faq_id = "'.$prb_faq_id.'"');
    DB::table('prb_faq')->where('prb_faq_id',$prb_faq_id)->delete();
    return redirect('backend/prb_faq');
});
// End prb_faq
// End พรบ.

// insurance_travel
// insurance_travel
Route::get('/backend/insurance_travel', 'InsuranceTravelController@insurance_travel');

Route::post('/backend/insurance_travel/server_processing', 'InsuranceTravelController@insurance_travelServerProcessing');

Route::get('/backend/insurance_travel/form/{insurance_travel_id?}', 'InsuranceTravelController@insurance_travel_form');

Route::post('/backend/insurance_travel/insurance_travel_save_update', 'InsuranceTravelController@insurance_travelSaveUpdate');

Route::get('/backend/insurance_travel/insurance_travel_delete/{insurance_travel_id}', function($insurance_travel_id) {
    // $deleted = DB::delete('delete from insurance_travel where insurance_travel_id = "'.$insurance_travel_id.'"');
    DB::table('insurance_travel')->where('insurance_travel_id',$insurance_travel_id)->delete();
    return redirect('backend/insurance_travel');
});
// End insurance_travel

// travel_faq
Route::get('/backend/travel_faq', 'InsuranceTravelController@travel_faq');

Route::post('/backend/travel_faq/server_processing', 'InsuranceTravelController@travel_faqServerProcessing');

Route::get('/backend/travel_faq/form/{travel_faq_id?}', 'InsuranceTravelController@travel_faq_form');

Route::post('/backend/travel_faq/travel_faq_save_update', 'InsuranceTravelController@travel_faqSaveUpdate');

Route::get('/backend/travel_faq/travel_faq_delete/{travel_faq_id}', function($travel_faq_id) {
    // $deleted = DB::delete('delete from travel_faq where travel_faq_id = "'.$travel_faq_id.'"');
    DB::table('travel_faq')->where('travel_faq_id',$travel_faq_id)->delete();
    return redirect('backend/travel_faq');
});
// End travel_faq
// End insurance_travel

// insurance_pet
// pet_faq
Route::get('/backend/pet_faq', 'InsurancePetController@pet_faq');

Route::post('/backend/pet_faq/server_processing', 'InsurancePetController@pet_faqServerProcessing');

Route::get('/backend/pet_faq/form/{pet_faq_id?}', 'InsurancePetController@pet_faq_form');

Route::post('/backend/pet_faq/pet_faq_save_update', 'InsurancePetController@pet_faqSaveUpdate');

Route::get('/backend/pet_faq/pet_faq_delete/{pet_faq_id}', function($pet_faq_id) {
    // $deleted = DB::delete('delete from pet_faq where pet_faq_id = "'.$pet_faq_id.'"');
    DB::table('pet_faq')->where('pet_faq_id',$pet_faq_id)->delete();
    return redirect('backend/pet_faq');
});
// End pet_faq

// insurance_pet
Route::get('/backend/insurance_pet', 'InsurancePetController@insurance_pet');

Route::post('/backend/insurance_pet/server_processing', 'InsurancePetController@insurance_petServerProcessing');

Route::get('/backend/insurance_pet/form/{insurance_pet_id?}', 'InsurancePetController@insurance_pet_form');

Route::post('/backend/insurance_pet/insurance_pet_save_update', 'InsurancePetController@insurance_petSaveUpdate');

Route::get('/backend/insurance_pet/insurance_pet_delete/{insurance_pet_id}', function($insurance_pet_id) {
    // $deleted = DB::delete('delete from insurance_pet where insurance_pet_id = "'.$insurance_pet_id.'"');
    DB::table('insurance_pet')->where('insurance_pet_id',$insurance_pet_id)->delete();
    return redirect('backend/insurance_pet');
});
// End insurance_pet
// End insurance_pet

// insurance_home
// home_faq
Route::get('/backend/home_faq', 'InsuranceHomeController@home_faq');

Route::post('/backend/home_faq/server_processing', 'InsuranceHomeController@home_faqServerProcessing');

Route::get('/backend/home_faq/form/{home_faq_id?}', 'InsuranceHomeController@home_faq_form');

Route::post('/backend/home_faq/home_faq_save_update', 'InsuranceHomeController@home_faqSaveUpdate');

Route::get('/backend/home_faq/home_faq_delete/{home_faq_id}', function($home_faq_id) {
    // $deleted = DB::delete('delete from home_faq where home_faq_id = "'.$home_faq_id.'"');
    DB::table('home_faq')->where('home_faq_id',$home_faq_id)->delete();
    return redirect('backend/home_faq');
});
// End home_faq

// insurance_home
Route::get('/backend/insurance_home', 'InsuranceHomeController@insurance_home');

Route::post('/backend/insurance_home/server_processing', 'InsuranceHomeController@insurance_homeServerProcessing');

Route::get('/backend/insurance_home/form/{insurance_home_id?}', 'InsuranceHomeController@insurance_home_form');

Route::post('/backend/insurance_home/insurance_home_save_update', 'InsuranceHomeController@insurance_homeSaveUpdate');

Route::get('/backend/insurance_home/insurance_home_delete/{insurance_home_id}', function($insurance_home_id) {
    // $deleted = DB::delete('delete from insurance_home where insurance_home_id = "'.$insurance_home_id.'"');
    DB::table('insurance_home')->where('insurance_home_id',$insurance_home_id)->delete();
    return redirect('backend/insurance_home');
});
// End insurance_home
// End insurance_home

// insurance
// insurance_company
Route::get('/backend/insurance_company', 'InsuranceController@insurance_company');

Route::post('/backend/insurance_company/server_processing', 'InsuranceController@insurance_companyServerProcessing');

Route::get('/backend/insurance_company/form/{insurance_company_id?}', 'InsuranceController@insurance_company_form');

Route::post('/backend/insurance_company/insurance_company_save_update', 'InsuranceController@insurance_companySaveUpdate');

Route::get('/backend/insurance_company/insurance_company_delete/{insurance_company_id}', function($insurance_company_id) {
    // $deleted = DB::delete('delete from insurance_company where insurance_company_id = "'.$insurance_company_id.'"');
    DB::table('insurance_company')->where('insurance_company_id',$insurance_company_id)->delete();
    return redirect('backend/insurance_company');
});
// End insurance_company
// End insurance

// golf_contact
Route::get('/backend/golf_contact', 'InsuranceGolfController@golf_contact');

Route::post('/backend/golf_contact/server_processing', 'InsuranceGolfController@golf_contactServerProcessing');
// End golf_contact

// healthy_contact
Route::get('/backend/healthy_contact', 'InsuranceHealthyController@healthy_contact');

Route::post('/backend/healthy_contact/server_processing', 'InsuranceHealthyController@healthy_contactServerProcessing');
// End healthy_contact

// healthy_contact_confirm
Route::get('/backend/healthy_contact_confirm', 'InsuranceHealthyController@healthy_contact_confirm');

Route::post('/backend/healthy_contact_confirm/server_processing', 'InsuranceHealthyController@healthy_contact_confirmServerProcessing');
// End healthy_contact_confirm

// cancer_faq
Route::get('/backend/cancer_faq', 'InsuranceCancerController@cancer_faq');

Route::post('/backend/cancer_faq/server_processing', 'InsuranceCancerController@cancer_faqServerProcessing');

Route::get('/backend/cancer_faq/form/{cancer_faq_id?}', 'InsuranceCancerController@cancer_faq_form');

Route::post('/backend/cancer_faq/cancer_faq_save_update', 'InsuranceCancerController@cancer_faqSaveUpdate');

Route::get('/backend/cancer_faq/cancer_faq_delete/{cancer_faq_id}', function($cancer_faq_id) {
    // $deleted = DB::delete('delete from cancer_faq where cancer_faq_id = "'.$cancer_faq_id.'"');
    DB::table('cancer_faq')->where('cancer_faq_id',$cancer_faq_id)->delete();
    return redirect('backend/cancer_faq');
});
// End cancer_faq

// accident_faq
Route::get('/backend/accident_faq', 'InsuranceAccidentController@accident_faq');

Route::post('/backend/accident_faq/server_processing', 'InsuranceAccidentController@accident_faqServerProcessing');

Route::get('/backend/accident_faq/form/{accident_faq_id?}', 'InsuranceAccidentController@accident_faq_form');

Route::post('/backend/accident_faq/accident_faq_save_update', 'InsuranceAccidentController@accident_faqSaveUpdate');

Route::get('/backend/accident_faq/accident_faq_delete/{accident_faq_id}', function($accident_faq_id) {
    // $deleted = DB::delete('delete from accident_faq where accident_faq_id = "'.$accident_faq_id.'"');
    DB::table('accident_faq')->where('accident_faq_id',$accident_faq_id)->delete();
    return redirect('backend/accident_faq');
});
// End accident_faq

// insurance_condo_row
Route::get('/backend/insurance_condo_row', 'InsuranceCondoController@insurance_condo_row');

Route::post('/backend/insurance_condo_row/server_processing', 'InsuranceCondoController@insurance_condo_rowServerProcessing');

Route::get('/backend/insurance_condo_row/form/{insurance_condo_row_id?}', 'InsuranceCondoController@insurance_condo_row_form');

Route::post('/backend/insurance_condo_row/insurance_condo_row_save_update', 'InsuranceCondoController@insurance_condo_rowSaveUpdate');

Route::get('/backend/insurance_condo_row/insurance_condo_row_delete/{insurance_condo_row_id}', function($insurance_condo_row_id) {
    // $deleted = DB::delete('delete from insurance_condo_row where insurance_condo_row_id = "'.$insurance_condo_row_id.'"');
    DB::table('insurance_condo_row')->where('insurance_condo_row_id',$insurance_condo_row_id)->delete();
    return redirect('backend/insurance_condo_row');
});
// End insurance_condo_row

// insurance_condo
Route::get('/backend/insurance_condo', 'InsuranceCondoController@insurance_condo');

Route::post('/backend/insurance_condo/server_processing', 'InsuranceCondoController@insurance_condoServerProcessing');

Route::get('/backend/insurance_condo/form/{insurance_condo_id?}', 'InsuranceCondoController@insurance_condo_form');

Route::post('/backend/insurance_condo/insurance_condo_save_update', 'InsuranceCondoController@insurance_condoSaveUpdate');

Route::get('/backend/insurance_condo/insurance_condo_delete/{insurance_condo_id}', function($insurance_condo_id) {
    // $deleted = DB::delete('delete from insurance_condo where insurance_condo_id = "'.$insurance_condo_id.'"');
    DB::table('insurance_condo')->where('insurance_condo_id',$insurance_condo_id)->delete();
    return redirect('backend/insurance_condo');
});

Route::post('/backend/condo_pdf', 'InsuranceCondoController@condo_pdf');

// condo_faq
Route::get('/backend/condo_faq', 'InsuranceCondoController@condo_faq');

Route::post('/backend/condo_faq/server_processing', 'InsuranceCondoController@condo_faqServerProcessing');

Route::get('/backend/condo_faq/form/{condo_faq_id?}', 'InsuranceCondoController@condo_faq_form');

Route::post('/backend/condo_faq/condo_faq_save_update', 'InsuranceCondoController@condo_faqSaveUpdate');

Route::get('/backend/condo_faq/condo_faq_delete/{condo_faq_id}', function($condo_faq_id) {
    // $deleted = DB::delete('delete from condo_faq where condo_faq_id = "'.$condo_faq_id.'"');
    DB::table('condo_faq')->where('condo_faq_id',$condo_faq_id)->delete();
    return redirect('backend/condo_faq');
});
// End condo_faq
// End condo_sub_insurance

// extended_insurance
Route::get('/backend/extended_insurance', 'InsuranceOtherController@extended_insurance');

Route::post('/backend/extended_insurance/server_processing', 'InsuranceOtherController@extended_insuranceServerProcessing');

Route::get('/backend/extended_insurance/form/{extended_insurance_id?}', 'InsuranceOtherController@extended_insurance_form');

Route::post('/backend/extended_insurance/extended_insurance_save_update', 'InsuranceOtherController@extended_insuranceSaveUpdate');

Route::get('/backend/extended_insurance/extended_insurance_delete/{extended_insurance_id}', function($extended_insurance_id) {
    // $deleted = DB::delete('delete from extended_insurance where extended_insurance_id = "'.$extended_insurance_id.'"');
    DB::table('extended_insurance')->where('extended_insurance_id',$extended_insurance_id)->delete();
    return redirect('backend/extended_insurance');
});
// End extended_insurance

// extended_faq
Route::get('/backend/extended_faq', 'InsuranceOtherController@extended_faq');

Route::post('/backend/extended_faq/server_processing', 'InsuranceOtherController@extended_faqServerProcessing');

Route::get('/backend/extended_faq/form/{extended_faq_id?}', 'InsuranceOtherController@extended_faq_form');

Route::post('/backend/extended_faq/extended_faq_save_update', 'InsuranceOtherController@extended_faqSaveUpdate');

Route::get('/backend/extended_faq/extended_faq_delete/{extended_faq_id}', function($extended_faq_id) {
    // $deleted = DB::delete('delete from extended_faq where extended_faq_id = "'.$extended_faq_id.'"');
    DB::table('extended_faq')->where('extended_faq_id',$extended_faq_id)->delete();
    return redirect('backend/extended_faq');
});
// End extended_faq

// business_faq
Route::get('/backend/business_faq', 'InsuranceOtherController@business_faq');

Route::post('/backend/business_faq/server_processing', 'InsuranceOtherController@business_faqServerProcessing');

Route::get('/backend/business_faq/form/{business_faq_id?}', 'InsuranceOtherController@business_faq_form');

Route::post('/backend/business_faq/business_faq_save_update', 'InsuranceOtherController@business_faqSaveUpdate');

Route::get('/backend/business_faq/business_faq_delete/{business_faq_id}', function($business_faq_id) {
    // $deleted = DB::delete('delete from business_faq where business_faq_id = "'.$business_faq_id.'"');
    DB::table('business_faq')->where('business_faq_id',$business_faq_id)->delete();
    return redirect('backend/business_faq');
});
// End business_faq

// contact_car
Route::get('/backend/contact_car', 'InsuranceCarController@contact_car');

Route::post('/backend/contact_car/server_processing', 'InsuranceCarController@contact_carServerProcessing');
// End contact_car

// car_company
Route::get('/backend/car_company', 'InsuranceCarController@car_company');

Route::post('/backend/car_company/server_processing', 'InsuranceCarController@car_companyServerProcessing');

Route::get('/backend/car_company/form/{car_company_id?}', 'InsuranceCarController@car_company_form');

Route::post('/backend/car_company/car_company_save_update', 'InsuranceCarController@car_companySaveUpdate');

Route::get('/backend/car_company/car_company_delete/{car_company_id}', function($car_company_id) {
    // $deleted = DB::delete('delete from car_company where car_company_id = "'.$car_company_id.'"');
    DB::table('car_company')->where('car_company_id',$car_company_id)->delete();
    return redirect('backend/car_company');
});
// End car_company

// compulsory_faq
Route::get('/backend/compulsory_faq', 'InsuranceCarController@compulsory_faq');

Route::post('/backend/compulsory_faq/server_processing', 'InsuranceCarController@compulsory_faqServerProcessing');

Route::get('/backend/compulsory_faq/form/{compulsory_faq_id?}', 'InsuranceCarController@compulsory_faq_form');

Route::post('/backend/compulsory_faq/compulsory_faq_save_update', 'InsuranceCarController@compulsory_faqSaveUpdate');

Route::get('/backend/compulsory_faq/compulsory_faq_delete/{compulsory_faq_id}', function($compulsory_faq_id) {
    // $deleted = DB::delete('delete from compulsory_faq where compulsory_faq_id = "'.$compulsory_faq_id.'"');
    DB::table('compulsory_faq')->where('compulsory_faq_id',$compulsory_faq_id)->delete();
    return redirect('backend/compulsory_faq');
});
// End compulsory_faq

// insurance_pet_row
Route::get('/backend/insurance_pet_row', 'InsurancePetController@insurance_pet_row');

Route::post('/backend/insurance_pet_row/server_processing', 'InsurancePetController@insurance_pet_rowServerProcessing');

Route::get('/backend/insurance_pet_row/form/{insurance_pet_row_id?}', 'InsurancePetController@insurance_pet_row_form');

Route::post('/backend/insurance_pet_row/insurance_pet_row_save_update', 'InsurancePetController@insurance_pet_rowSaveUpdate');

Route::get('/backend/insurance_pet_row/insurance_pet_row_delete/{insurance_pet_row_id}', function($insurance_pet_row_id) {
    // $deleted = DB::delete('delete from insurance_pet_row where insurance_pet_row_id = "'.$insurance_pet_row_id.'"');
    DB::table('insurance_pet_row')->where('insurance_pet_row_id',$insurance_pet_row_id)->delete();
    return redirect('backend/insurance_pet_row');
});
// End insurance_pet_row

// insurance_pet_detail
Route::get('/backend/insurance_pet_detail', 'InsurancePetController@insurance_pet_detail');

Route::post('/backend/insurance_pet_detail/server_processing', 'InsurancePetController@insurance_pet_detailServerProcessing');

Route::get('/backend/insurance_pet_detail/form/{insurance_pet_detail_id?}', 'InsurancePetController@insurance_pet_detail_form');

Route::post('/backend/insurance_pet_detail/insurance_pet_detail_save_update', 'InsurancePetController@insurance_pet_detailSaveUpdate');

Route::get('/backend/insurance_pet_detail/insurance_pet_detail_delete/{insurance_pet_detail_id}', function($insurance_pet_detail_id) {
    // $deleted = DB::delete('delete from insurance_pet_detail where insurance_pet_detail_id = "'.$insurance_pet_detail_id.'"');
    DB::table('insurance_pet_detail')->where('insurance_pet_detail_id',$insurance_pet_detail_id)->delete();
    return redirect('backend/insurance_pet_detail');
});
// End insurance_pet_detail

// insurance_travel_row
Route::get('/backend/insurance_travel_row', 'InsuranceTravelController@insurance_travel_row');

Route::post('/backend/insurance_travel_row/server_processing', 'InsuranceTravelController@insurance_travel_rowServerProcessing');

Route::get('/backend/insurance_travel_row/form/{insurance_travel_row_id?}', 'InsuranceTravelController@insurance_travel_row_form');

Route::post('/backend/insurance_travel_row/insurance_travel_row_save_update', 'InsuranceTravelController@insurance_travel_rowSaveUpdate');

Route::get('/backend/insurance_travel_row/insurance_travel_row_delete/{insurance_travel_row_id}', function($insurance_travel_row_id) {
    // $deleted = DB::delete('delete from insurance_travel_row where insurance_travel_row_id = "'.$insurance_travel_row_id.'"');
    DB::table('insurance_travel_row')->where('insurance_travel_row_id',$insurance_travel_row_id)->delete();
    return redirect('backend/insurance_travel_row');
});
// End insurance_travel_row

// insurance_business
Route::get('/backend/insurance_business', 'InsuranceOtherController@insurance_business');

Route::post('/backend/insurance_business/server_processing', 'InsuranceOtherController@insurance_businessServerProcessing');

Route::get('/backend/insurance_business/form/{insurance_business_id?}', 'InsuranceOtherController@insurance_business_form');

Route::post('/backend/insurance_business/insurance_business_save_update', 'InsuranceOtherController@insurance_businessSaveUpdate');

Route::get('/backend/insurance_business/insurance_business_delete/{insurance_business_id}', function($insurance_business_id) {
    // $deleted = DB::delete('delete from insurance_business where insurance_business_id = "'.$insurance_business_id.'"');
    DB::table('insurance_business')->where('insurance_business_id',$insurance_business_id)->delete();
    return redirect('backend/insurance_business');
});
// End insurance_business

// contact_condo
Route::get('/backend/contact_condo', 'InsuranceCondoController@contact_condo');

Route::post('/backend/contact_condo/server_processing', 'InsuranceCondoController@contact_condoServerProcessing');
// End contact_condo

// contact_condo_detail
Route::get('/backend/contact_condo_detail', 'InsuranceCondoController@contact_condo_detail');

Route::post('/backend/contact_condo_detail/server_processing', 'InsuranceCondoController@contact_condo_detailServerProcessing');
// End contact_condo_detail

// contact_pet
Route::get('/backend/contact_pet', 'InsurancePetController@contact_pet');

Route::post('/backend/contact_pet/server_processing', 'InsurancePetController@contact_petServerProcessing');
// End contact_pet

// contact_pet_detail
Route::get('/backend/contact_pet_detail', 'InsurancePetController@contact_pet_detail');

Route::post('/backend/contact_pet_detail/server_processing', 'InsurancePetController@contact_pet_detailServerProcessing');
// End contact_pet_detail

// contact_travel
Route::get('/backend/contact_travel', 'InsuranceTravelController@contact_travel');

Route::post('/backend/contact_travel/server_processing', 'InsuranceTravelController@contact_travelServerProcessing');
// End contact_travel

// contact_travel_detail
Route::get('/backend/contact_travel_detail', 'InsuranceTravelController@contact_travel_detail');

Route::post('/backend/contact_travel_detail/server_processing', 'InsuranceTravelController@contact_travel_detailServerProcessing');
// End contact_travel_detail

// contact_business
Route::get('/backend/contact_business', 'InsuranceOtherController@contact_business');

Route::post('/backend/contact_business/server_processing', 'InsuranceOtherController@contact_businessServerProcessing');
// End contact_business

// transportation_faq
Route::get('/backend/transportation_faq', 'InsuranceOtherController@transportation_faq');

Route::post('/backend/transportation_faq/server_processing', 'InsuranceOtherController@transportation_faqServerProcessing');

Route::get('/backend/transportation_faq/form/{transportation_faq_id?}', 'InsuranceOtherController@transportation_faq_form');

Route::post('/backend/transportation_faq/transportation_faq_save_update', 'InsuranceOtherController@transportation_faqSaveUpdate');

Route::get('/backend/transportation_faq/transportation_faq_delete/{transportation_faq_id}', function($transportation_faq_id) {
    // $deleted = DB::delete('delete from transportation_faq where transportation_faq_id = "'.$transportation_faq_id.'"');
    DB::table('transportation_faq')->where('transportation_faq_id',$transportation_faq_id)->delete();
    return redirect('backend/transportation_faq');
});
// End transportation_faq

// import_excel_insurance_car
Route::get('/backend/import_excel_insurance_car', 'ImportExcelController@import_excel_insurance_car');

Route::post('/backend/import_excel_insurance_car/import_excel_insurance_car', 'ImportExcelController@import_excel_car');

Route::post('/ajaxClearInsuranceCar', 'ImportExcelController@ajaxClearInsuranceCar');
// End import_excel_insurance_car

// import_excel_insurance_healty
Route::get('/backend/import_excel_insurance_health', 'ImportExcelController@import_excel_insurance_health');

Route::post('/backend/import_excel_insurance_health/import_excel_insurance_health', 'ImportExcelController@import_excel_health');

Route::post('/ajaxClearInsuranceHealth', 'ImportExcelController@ajaxClearInsuranceHealth');
// End import_excel_insurance_health

// import_excel_insurance_golf
Route::get('/backend/import_excel_insurance_golf', 'ImportExcelController@import_excel_insurance_golf');

Route::post('/backend/import_excel_insurance_golf/import_excel_insurance_golf', 'ImportExcelController@import_excel_golf');
// End import_excel_insurance_golf

// import_excel_insurance_prb
Route::get('/backend/import_excel_insurance_prb', 'ImportExcelController@import_excel_insurance_prb');

Route::post('/backend/import_excel_insurance_prb/import_excel_insurance_prb', 'ImportExcelController@import_excel_prb');

Route::post('/ajaxClearInsurancePrb', 'ImportExcelController@ajaxClearInsurancePrb');
// End import_excel_insurance_prb

// import_excel_insurance_travel
Route::get('/backend/import_excel_insurance_travel', 'ImportExcelController@import_excel_insurance_travel');

Route::post('/backend/import_excel_insurance_travel/import_excel_insurance_travel', 'ImportExcelController@import_excel_travel');

Route::post('/ajaxClearInsuranceTravel', 'ImportExcelController@ajaxClearInsuranceTravel');
// End import_excel_insurance_travel

// import_excel_insurance_pet
Route::get('/backend/import_excel_insurance_pet', 'ImportExcelController@import_excel_insurance_pet');

Route::post('/backend/import_excel_insurance_pet/import_excel_insurance_pet', 'ImportExcelController@import_excel_pet');

Route::post('/ajaxClearInsurancePet', 'ImportExcelController@ajaxClearInsurancePet');
// End import_excel_insurance_pet

// import_excel_insurance_home
Route::get('/backend/import_excel_insurance_home', 'ImportExcelController@import_excel_insurance_home');

Route::post('/backend/import_excel_insurance_home/import_excel_insurance_home', 'ImportExcelController@import_excel_home');

Route::post('/ajaxClearInsuranceHome', 'ImportExcelController@ajaxClearInsuranceHome');
// End import_excel_insurance_home

// import_excel_insurance_condo
Route::get('/backend/import_excel_insurance_condo', 'ImportExcelController@import_excel_insurance_condo');

Route::post('/backend/import_excel_insurance_condo/import_excel_insurance_condo', 'ImportExcelController@import_excel_condo');

Route::post('/ajaxClearInsuranceCondo', 'ImportExcelController@ajaxClearInsuranceCondo');

Route::post('/ajaxClearInsuranceCancer', 'ImportExcelController@ajaxClearInsuranceCancer');

Route::post('/ajaxClearInsuranceAccident', 'ImportExcelController@ajaxClearInsuranceAccident');
// End import_excel_insurance_condo

// import_excel_insurance_extended
Route::get('/backend/import_excel_insurance_extended', 'ImportExcelController@import_excel_insurance_extended');

Route::post('/backend/import_excel_insurance_extended/import_excel_insurance_extended', 'ImportExcelController@import_excel_extended');

Route::post('/ajaxClearInsuranceExtended', 'ImportExcelController@ajaxClearInsuranceExtended');
// End import_excel_insurance_extended

// import_excel_insurance_business
Route::get('/backend/import_excel_insurance_business', 'ImportExcelController@import_excel_insurance_business');

Route::post('/backend/import_excel_insurance_business/import_excel_insurance_business', 'ImportExcelController@import_excel_business');

Route::post('/ajaxClearInsuranceBusiness', 'ImportExcelController@ajaxClearInsuranceBusiness');

Route::post('/ajaxClearInsuranceTransportation', 'ImportExcelController@ajaxClearInsuranceTransportation');
// End import_excel_insurance_business

// import_excel_insurance_accident
Route::get('/backend/import_excel_insurance_accident', 'ImportExcelController@import_excel_insurance_accident');

Route::post('/backend/import_excel_insurance_accident/import_excel_insurance_accident', 'ImportExcelController@import_excel_accident');
// End import_excel_insurance_accident

// import_excel_insurance_cancer
Route::get('/backend/import_excel_insurance_cancer', 'ImportExcelController@import_excel_insurance_cancer');

Route::post('/backend/import_excel_insurance_cancer/import_excel_insurance_cancer', 'ImportExcelController@import_excel_cancer');
// End import_excel_insurance_cancer

// import_excel_insurance_transportation
Route::get('/backend/import_excel_insurance_transportation', 'ImportExcelController@import_excel_insurance_transportation');

Route::post('/backend/import_excel_insurance_transportation/import_excel_insurance_transportation', 'ImportExcelController@import_excel_transportation');
// End import_excel_insurance_transportation

// contact_extended
Route::get('/backend/contact_extended', 'InsuranceOtherController@contact_extended');

Route::post('/backend/contact_extended/server_processing', 'InsuranceOtherController@contact_extendedServerProcessing');
// End contact_extended

// car_table_insurance
Route::get('/backend/car_table_insurance', 'InsuranceCarController@car_table_insurance');

Route::post('/backend/car_table_insurance/car_table_insurance_save_update', 'InsuranceCarController@car_table_insuranceSaveUpdate');
// End car_table_insurance

// quotation_car
Route::get('/backend/quotation_car', 'InsuranceCarController@quotation_car');

Route::post('/backend/quotation_car/server_processing', 'InsuranceCarController@quotation_carServerProcessing');
// End quotation_car

// car_contact_confirm_car
Route::get('/backend/car_contact_confirm', 'InsuranceCarController@car_contact_confirm');

Route::post('/backend/car_contact_confirm/server_processing', 'InsuranceCarController@car_contact_confirmServerProcessing');
// End car_contact_confirm

// quotation_health
Route::get('/backend/quotation_health', 'InsuranceHealthyController@quotation_health');

Route::post('/backend/quotation_health/server_processing', 'InsuranceHealthyController@quotation_healthServerProcessing');
// End quotation_health

// contact_home
Route::get('/backend/contact_home', 'InsuranceHomeController@contact_home');

Route::post('/backend/contact_home/server_processing', 'InsuranceHomeController@contact_homeServerProcessing');
// End contact_home

// contact_detail_home
Route::get('/backend/contact_detail_home', 'InsuranceHomeController@contact_detail_home');

Route::post('/backend/contact_detail_home/server_processing', 'InsuranceHomeController@contact_detail_homeServerProcessing');
// End contact_detail_home

// insurance_accident
Route::get('/backend/insurance_accident', 'InsuranceAccidentController@insurance_accident');

Route::post('/backend/insurance_accident/server_processing', 'InsuranceAccidentController@insurance_accidentServerProcessing');

Route::get('/backend/insurance_accident/form/{insurance_accident_id?}', 'InsuranceAccidentController@insurance_accident_form');

Route::post('/backend/insurance_accident/insurance_accident_save_update', 'InsuranceAccidentController@insurance_accidentSaveUpdate');

Route::get('/backend/insurance_accident/insurance_accident_delete/{insurance_accident_id}', function($insurance_accident_id) {
    // $deleted = DB::delete('delete from insurance_accident where insurance_accident_id = "'.$insurance_accident_id.'"');
    DB::table('insurance_accident')->where('insurance_accident_id',$insurance_accident_id)->delete();
    return redirect('backend/insurance_accident');
});
// End insurance_accident

// insurance_cancer
Route::get('/backend/insurance_cancer', 'InsuranceCancerController@insurance_cancer');

Route::post('/backend/insurance_cancer/server_processing', 'InsuranceCancerController@insurance_cancerServerProcessing');

Route::get('/backend/insurance_cancer/form/{insurance_cancer_id?}', 'InsuranceCancerController@insurance_cancer_form');

Route::post('/backend/insurance_cancer/insurance_cancer_save_update', 'InsuranceCancerController@insurance_cancerSaveUpdate');

Route::get('/backend/insurance_cancer/insurance_cancer_delete/{insurance_cancer_id}', function($insurance_cancer_id) {
    // $deleted = DB::delete('delete from insurance_cancer where insurance_cancer_id = "'.$insurance_cancer_id.'"');
    DB::table('insurance_cancer')->where('insurance_cancer_id',$insurance_cancer_id)->delete();
    return redirect('backend/insurance_cancer');
});
// End insurance_cancer

// insurance_transportation
Route::get('/backend/insurance_transportation', 'InsuranceOtherController@insurance_transportation');

Route::post('/backend/insurance_transportation/server_processing', 'InsuranceOtherController@insurance_transportationServerProcessing');

Route::get('/backend/insurance_transportation/form/{insurance_transportation_id?}', 'InsuranceOtherController@insurance_transportation_form');

Route::post('/backend/insurance_transportation/insurance_transportation_save_update', 'InsuranceOtherController@insurance_transportationSaveUpdate');

Route::get('/backend/insurance_transportation/insurance_transportation_delete/{insurance_transportation_id}', function($insurance_transportation_id) {
    // $deleted = DB::delete('delete from insurance_transportation where insurance_transportation_id = "'.$insurance_transportation_id.'"');
    DB::table('insurance_transportation')->where('insurance_transportation_id',$insurance_transportation_id)->delete();
    return redirect('backend/insurance_transportation');
});
// End insurance_transportation

// contact_accident
Route::get('/backend/contact_accident', 'InsuranceAccidentController@contact_accident');

Route::post('/backend/contact_accident/server_processing', 'InsuranceAccidentController@contact_accidentServerProcessing');
// End contact_accident

// confirm_accident
Route::get('/backend/confirm_accident', 'InsuranceAccidentController@confirm_accident');

Route::post('/backend/confirm_accident/server_processing', 'InsuranceAccidentController@confirm_accidentServerProcessing');
// End confirm_accident

// confirm_accident2
Route::get('/backend/confirm_accident2', 'InsuranceAccidentController@confirm_accident2');

Route::post('/backend/confirm_accident2/server_processing', 'InsuranceAccidentController@confirm_accident2ServerProcessing');
// End confirm_accident2

// contact_cancer
Route::get('/backend/contact_cancer', 'InsuranceCancerController@contact_cancer');

Route::post('/backend/contact_cancer/server_processing', 'InsuranceCancerController@contact_cancerServerProcessing');
// End contact_cancer

// contact_transportation
Route::get('/backend/contact_transportation', 'InsuranceOtherController@contact_transportation');

Route::post('/backend/contact_transportation/server_processing', 'InsuranceOtherController@contact_transportationServerProcessing');
// End contact_transportation

// detail_transportation
Route::get('/backend/detail_transportation', 'InsuranceOtherController@detail_transportation');

Route::post('/backend/detail_transportation/server_processing', 'InsuranceOtherController@detail_transportationServerProcessing');
// End detail_transportation

// confirm_transportation
Route::get('/backend/confirm_transportation', 'InsuranceOtherController@confirm_transportation');

Route::post('/backend/confirm_transportation/server_processing', 'InsuranceOtherController@confirm_transportationServerProcessing');
// End confirm_transportation

Route::post('/backend/transportation_pdf', 'InsuranceCondoController@transportation_pdf');
Route::post('/backend/travel_pdf', 'InsuranceCondoController@travel_pdf');
Route::post('/backend/golf_pdf', 'InsuranceCondoController@golf_pdf');
Route::post('/backend/business_pdf', 'InsuranceCondoController@business_pdf');
Route::post('/backend/home_pdf', 'InsuranceCondoController@home_pdf');

// Export Excel
Route::post('/backend/contact_car_export_excel', 'ExportExcelController@contact_car_export_excel');
Route::post('/backend/quotation_car_export_excel', 'ExportExcelController@quotation_car_export_excel');
Route::post('/backend/car_contact_confirm_export_excel', 'ExportExcelController@car_contact_confirm_export_excel');

Route::post('/backend/healthy_contact_export_excel', 'ExportExcelController@healthy_contact_export_excel');
Route::post('/backend/quotation_health_export_excel', 'ExportExcelController@quotation_health_export_excel');
Route::post('/backend/healthy_contact_confirm_export_excel', 'ExportExcelController@healthy_contact_confirm_export_excel');

Route::post('/backend/golf_contact_export_excel', 'ExportExcelController@golf_contact_export_excel');

Route::post('/backend/contact_travel_export_excel', 'ExportExcelController@contact_travel_export_excel');
Route::post('/backend/contact_travel_detail_export_excel', 'ExportExcelController@contact_travel_detail_export_excel');

Route::post('/backend/contact_pet_export_excel', 'ExportExcelController@contact_pet_export_excel');
Route::post('/backend/contact_pet_detail_export_excel', 'ExportExcelController@contact_pet_detail_export_excel');

Route::post('/backend/contact_home_export_excel', 'ExportExcelController@contact_home_export_excel');
Route::post('/backend/contact_detail_home_export_excel', 'ExportExcelController@contact_detail_home_export_excel');

Route::post('/backend/contact_condo_export_excel', 'ExportExcelController@contact_condo_export_excel');
Route::post('/backend/contact_condo_detail_export_excel', 'ExportExcelController@contact_condo_detail_export_excel');

Route::post('/backend/contact_cancer_export_excel', 'ExportExcelController@contact_cancer_export_excel');

Route::post('/backend/contact_accident_export_excel', 'ExportExcelController@contact_accident_export_excel');
Route::post('/backend/confirm_accident_export_excel', 'ExportExcelController@confirm_accident_export_excel');
Route::post('/backend/confirm_accident2_export_excel', 'ExportExcelController@confirm_accident2_export_excel');

Route::post('/backend/contact_transportation_export_excel', 'ExportExcelController@contact_transportation_export_excel');
Route::post('/backend/detail_transportation_export_excel', 'ExportExcelController@detail_transportation_export_excel');
Route::post('/backend/confirm_transportation_export_excel', 'ExportExcelController@confirm_transportation_export_excel');

Route::post('/backend/contact_business_export_excel', 'ExportExcelController@contact_business_export_excel');

Route::post('/backend/contact_extended_export_excel', 'ExportExcelController@contact_extended_export_excel');




