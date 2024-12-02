<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\{AuthController, FrontMenuController, MenuController, ProfileController};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
//Admin





//Frontend Routes

Route::get('/solutions/techsolutions/{slug}', [MenuController::class, 'show'])->name('solutions.techsolutions.show');
// Route::get('/solutions/techsolutions/itservice', [FrontendController::class, 'itservice'])->name('itservice');
// Route::get('/solutions/techsolutions/ecommerce', [FrontendController::class, 'ecommerce'])->name('ecommerce');
// Route::get('/solutions/techsolutions/webapplication', [FrontendController::class, 'webapplication'])->name('webapplication');
// Route::get('/solutions/techsolutions/customererp', [FrontendController::class, 'customererp'])->name('customererp');
// Route::get('/solutions/techsolutions/customcrm', [FrontendController::class, 'customcrm'])->name('customcrm');
// Route::get('/solutions/techsolutions/customizeweb', [FrontendController::class, 'customizeweb'])->name('customizeweb');
// Route::get('/solutions/techsolutions/cloudvps', [FrontendController::class, 'cloudvps'])->name('cloudvps');
// Route::get('/solutions/techsolutions/artificial', [FrontendController::class, 'artificial'])->name('artificial');
// Route::get('/solutions/techsolutions/meachinelearning', [FrontendController::class, 'meachinelearning'])->name('meachinelearning');
// Route::get('/solutions/techsolutions/meachinelearning', [FrontendController::class, 'meachinelearning'])->name('meachinelearning');
// Route::get('/solutions/techsolutions/meachinelearning', [FrontendController::class, 'meachinelearning'])->name('meachinelearning');
Route::get('/Career', [FrontendController::class, 'Career'])->name('Career');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

Route::get('/solutions/education', [FrontendController::class, 'education'])->name('education');


//Know Us Route

Route::get('/knowus/aboutus', action: [FrontendController::class, 'aboutus'])->name('aboutus');
Route::get('/knowus/leadership', action: [FrontendController::class, 'leadership'])->name('leadership');
Route::get('/knowus/internship', [FrontendController::class, 'internship'])->name('internship');
Route::get('/knowus/hospitalmanagement', action: [FrontendController::class, 'hospitalmanagement'])->name('hospitalmanagement');
Route::get('/knowus/ultimatepos', action: [FrontendController::class, 'ultimatepos'])->name('ultimatepos');
Route::get('/knowus/property', action: [FrontendController::class, 'property'])->name('property');
Route::get('/knowus/schoolmanagement', action: [FrontendController::class, 'schoolmanagement'])->name('schoolmanagement');
Route::get('/knowus/aluminimanagement', action: [FrontendController::class, 'aluminimanagement'])->name('aluminimanagement');
Route::get('/knowus/multivendorecommerce', action: [FrontendController::class, 'multivendorecommerce'])->name('multivendorecommerce');



// Industries
Route::get('/Industries/fashion ', [FrontendController::class, 'fashion'])->name('fashion');
Route::get('/Industries/wellness ', [FrontendController::class, 'wellness'])->name('wellness');
Route::get('/Industries/retail ', [FrontendController::class, 'retail'])->name('retail');
Route::get('/Industries/manufacturing ', [FrontendController::class, 'manufacturing'])->name('manufacturing');
Route::get('/Industries/nonprofit ', [FrontendController::class, 'nonprofit'])->name('nonprofit');
Route::get('/Industries/publicsector ', [FrontendController::class, 'publicsector'])->name('publicsector');
Route::get('/Industries/FinancialInsurance ', [FrontendController::class, 'FinancialInsurance'])->name('FinancialInsurance');
Route::get('/Industries/healthcarehospitals ', [FrontendController::class, 'healthcarehospitals'])->name('healthcarehospitals');
Route::get('/Industries/education ', [FrontendController::class, 'education'])->name('education');
Route::get('/Industries/logistics  ', [FrontendController::class, 'logistics'])->name('logistics');
Route::get('/Industries/energyutilities  ', [FrontendController::class, 'energyutilities'])->name('energyutilities');
Route::get('/Industries/TravelHospitalitys  ', [FrontendController::class, 'TravelHospitalitys'])->name('TravelHospitalitys');
Route::get('/Industries/productplatform  ', [FrontendController::class, 'productplatform'])->name('productplatform');
Route::get('/Industries/constructioninfrastructure  ', [FrontendController::class, 'constructioninfrastructure'])->name('constructioninfrastructure');
Route::get('/Industries/ManagementConsulting  ', [FrontendController::class, 'ManagementConsulting'])->name('ManagementConsulting');
Route::get('/Industries/MarketingAdvertising', [FrontendController::class, 'MarketingAdvertising'])->name('MarketingAdvertising');

//Brand Solutions
Route::get('/solutions/brandsolutions/personalbranding', [FrontendController::class, 'PersonalBranding'])->name('PersonalBranding');
Route::get('/solutions/brandsolutions/corporatebranding', [FrontendController::class, 'CorporateBranding'])->name('CorporateBranding');
Route::get('/solutions/brandsolutions/productbranding', [FrontendController::class, 'ProductBranding'])->name('ProductBranding');
Route::get('/solutions/brandsolutions/servicesbranding', [FrontendController::class, 'ServicesBranding'])->name('ServicesBranding');
Route::get('/solutions/brandsolutions/digitalbranding', [FrontendController::class, 'DigitalBranding'])->name('DigitalBranding');
Route::get('/solutions/brandsolutions/employerbranding', [FrontendController::class, 'EmployerBranding'])->name('EmployerBranding');

//Business Solutions
Route::get('/solutions/businesssolutions/processreengineering', [FrontendController::class, 'ProcessReEngineering'])->name('ProcessReEngineering');
Route::get('/solutions/businesssolutions/strategicplanning', [FrontendController::class, 'StrategicPlanning'])->name('StrategicPlanning');
Route::get('/solutions/businesssolutions/operationssystems', [FrontendController::class, 'OperationsSystems'])->name('OperationsSystems');
Route::get('/solutions/businesssolutions/projectmanagement', [FrontendController::class, 'ProjectManagement'])->name('ProjectManagement');
Route::get('/solutions/businesssolutions/workflowoptimization', [FrontendController::class, 'WorkflowOptimization'])->name('WorkflowOptimization');
Route::get('/solutions/businesssolutions/supplychainmanagement', [FrontendController::class, 'SupplychainManagement'])->name('SupplychainManagement');
Route::get('/solutions/businesssolutions/logisticmanagement', [FrontendController::class, 'LogisticManagement'])->name('LogisticManagement');

//Event Solutions
Route::get('/solutions/eventsolutions/eventstrategy', [FrontendController::class, 'eventstrategy'])->name('eventstrategy');
Route::get('/solutions/eventsolutions/logisticmanagement', [FrontendController::class, 'logistic_management'])->name('logistic_management');
Route::get('/solutions/eventsolutions/vendorcoordinations', [FrontendController::class, 'vendorcoordinations'])->name('vendorcoordinations');
Route::get('/solutions/eventsolutions/guestexperience', [FrontendController::class, 'guestexperience'])->name('guestexperience');
Route::get('/solutions/eventsolutions/budget', [FrontendController::class, 'budget'])->name('budget');
Route::get('/solutions/eventsolutions/posteventanalysis', [FrontendController::class, 'posteventanalysis'])->name('posteventanalysis');

//Marketing Solutions
Route::get('/solutions/marketingsolutions/contentmarketing', [FrontendController::class, 'contentmarketing'])->name('contentmarketing');
Route::get('/solutions/marketingsolutions/digitalmarketing', [FrontendController::class, 'digitalmarketing'])->name('digitalmarketing');
Route::get('/solutions/marketingsolutions/socialmediamarketing', [FrontendController::class, 'socialmediamarketing'])->name('socialmediamarketing');
Route::get('/solutions/marketingsolutions/emailmarketing', [FrontendController::class, 'emailmarketing'])->name('emailmarketing');
Route::get('/solutions/marketingsolutions/influencermarketing', [FrontendController::class, 'influencermarketing'])->name('influencermarketing');
Route::get('/solutions/marketingsolutions/searchenginemarketing', [FrontendController::class, 'searchenginemarketing'])->name('searchenginemarketing');
Route::get('/solutions/marketingsolutions/searchengineoptimization', [FrontendController::class, 'searchengineoptimization'])->name('searchengineoptimization');

//Ads Solutions
Route::get('/solutions/adssolutions/applicationadvertisement', [FrontendController::class, 'applicationadvertisement'])->name('applicationadvertisement');
Route::get('/solutions/adssolutions/digitaladvertisement', [FrontendController::class, 'digitaladvertisement'])->name('digitaladvertisement');
Route::get('/solutions/adssolutions/printadvertisement', [FrontendController::class, 'printadvertisement'])->name('printadvertisement');
Route::get('/solutions/adssolutions/socialmediaadvertisement', [FrontendController::class, 'socialmediaadvertisement'])->name('socialmediaadvertisement');
Route::get('/solutions/adssolutions/videoadvertidement', [FrontendController::class, 'videoadvertidement'])->name('videoadvertidement');

//Media Solutions
Route::get('/solutions/mediasolutions/contentcreationsolution', [FrontendController::class, 'contentcreationsolution'])->name('contentcreationsolution');
Route::get('/solutions/mediasolutions/digitalmediasolution', [FrontendController::class, 'digitalmediasolution'])->name('digitalmediasolution');
Route::get('/solutions/mediasolutions/photographysolution', [FrontendController::class, 'photographysolution'])->name('photographysolution');
Route::get('/solutions/mediasolutions/printmediasolution', [FrontendController::class, 'printmediasolution'])->name('printmediasolution');
Route::get('/solutions/mediasolutions/publicrelationsolution', [FrontendController::class, 'publicrelationsolution'])->name('publicrelationsolution');
Route::get('/solutions/mediasolutions/socialmediasolution', [FrontendController::class, 'socialmediasolution'])->name('socialmediasolution');
Route::get('/solutions/mediasolutions/videoproductionsolution', [FrontendController::class, 'videoproductionsolution'])->name('videoproductionsolution');



//political solution
Route::get('/solutions/politicalsolution', [FrontendController::class, 'politicalsolution'])->name('politicalsolution');

//education solution
Route::get('/solutions/educationsolution', [FrontendController::class, 'educationsolution'])->name('educationsolution');


//footer 
Route::get('/footer/faq', [FrontendController::class, 'faq'])->name('faq');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/login', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('/admin/login', [AuthController::class, 'postLogin'])->name('postLogin');

Route::get('/admin/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');

Route::resource('menu', MenuController::class);

Route::get('menu/{slug}', [FrontMenuController::class, 'index'])->name('menu');
