<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductTitleController;
use App\Http\Controllers\MediaTitleController;
use App\Http\Controllers\ContactTitleController;
use App\Http\Controllers\PricingTitleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeroSliderController;
use App\Http\Controllers\MediaCategoryController;
use App\Http\Controllers\MediaListController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\FunFactController;
use App\Http\Controllers\PricingCategoryController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ShowcasePagesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SitePagesController;
use App\Http\Controllers\PayBillController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogTitleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CoverageTitleController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FaqListAnswerController;
use App\Http\Controllers\FaqListTitleController;
use App\Http\Controllers\FaqTitleController;
use App\Http\Controllers\UpazillaController;
use App\Http\Controllers\WhatWeDoController;
use App\Http\Controllers\OrderPackageRequestController;
use App\Http\Controllers\OrderProductRequestController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TestimonialTitleController;
use App\Http\Controllers\TestimonialListController;
use App\Http\Controllers\CoverageAreaController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\OpenGrapTagController;
use App\Http\Controllers\PayBillBankController;
use App\Http\Controllers\PayBillOptionsController;
use App\Http\Controllers\PayBillOptionStepsController;
use App\Http\Controllers\ScriptController;
use App\Models\HeaderSettings;

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


/*=======================================================
 Admin Routes
=======================================================*/

Route::prefix('dashboard')->group(function () {

    // Header
    Route::get('/header', [HeaderController::class, 'index'])->name('admin.header');
    Route::put('/header', [HeaderController::class, 'update'])->name('admin.header.update');


    // Hero Route
    Route::get('/hero/all', [HeroSliderController::class, 'all'])->name('admin.hero.all');
    Route::get('/hero/addnew', [HeroSliderController::class, 'addnew'])->name('admin.hero.addnew');
    Route::post('/hero/addnew', [HeroSliderController::class, 'store'])->name('admin.hero.store');
    Route::get('/hero/edit/{id}', [HeroSliderController::class, 'edit'])->name('admin.hero.edit');
    Route::post('/hero/update/{id}', [HeroSliderController::class, 'update'])->name('admin.hero.update');
    Route::delete('/hero/delete/{id}', [HeroSliderController::class, 'destroy'])->name('admin.hero.destroy');

    Route::get('/hero/background', [HeroSliderController::class, 'index'])->name('admin.hero.background');
    Route::put('/hero/background', [HeaderController::class, 'store'])->name('admin.hero.background.update');

    // Pricing Title
    Route::get('/media-title', [MediaTitleController::class, 'index'])->name('admin.media-title');
    Route::put('/media-title', [MediaTitleController::class, 'update'])->name('admin.media-title.update');

    // Media Category & MediaList
    Route::get('/media-cat/all', [MediaCategoryController::class, 'all'])->name('admin.media-cat.all');
    Route::get('/media-cat/addnew', [MediaCategoryController::class, 'addnew'])->name('admin.media-cat.addnew');
    Route::post('/media-cat/addnew', [MediaCategoryController::class, 'store'])->name('admin.media-cat.store');
    Route::get('/media-cat/edit/{id}', [MediaCategoryController::class, 'edit'])->name('admin.media-cat.edit');
    Route::post('/media-cat/update/{id}', [MediaCategoryController::class, 'update'])->name('admin.media-cat.update');
    Route::delete('/media-cat/delete/{id}', [MediaCategoryController::class, 'destroy'])->name('admin.media-cat.destroy');

    Route::get('/media-list/all', [MediaListController::class, 'all'])->name('admin.media.all');
    Route::get('/media-list/addnew', [MediaListController::class, 'addnew'])->name('admin.media.addnew');
    Route::post('/media-list/addnew', [MediaListController::class, 'store'])->name('admin.media.store');
    Route::get('/media-list/edit/{id}', [MediaListController::class, 'edit'])->name('admin.media.edit');
    Route::post('/media-list/update/{id}', [MediaListController::class, 'update'])->name('admin.media.update');
    Route::delete('/media-list/delete/{id}', [MediaListController::class, 'destroy'])->name('admin.media.destroy');

    // Features Route
    Route::get('/features/all', [FeaturesController::class, 'all'])->name('admin.features.all');
    Route::get('/features/addnew', [FeaturesController::class, 'addnew'])->name('admin.features.addnew');
    Route::post('/features/addnew', [FeaturesController::class, 'store'])->name('admin.features.store');
    Route::get('/features/edit/{id}', [FeaturesController::class, 'edit'])->name('admin.features.edit');
    Route::post('/features/update/{id}', [FeaturesController::class, 'update'])->name('admin.features.update');
    Route::delete('/features/delete/{id}', [FeaturesController::class, 'destroy'])->name('admin.features.destroy');

    // Clients Route
    Route::get('/clients/all', [ClientController::class, 'all'])->name('admin.clients.all');
    Route::get('/clients/addnew', [ClientController::class, 'addnew'])->name('admin.clients.addnew');
    Route::post('/clients/addnew', [ClientController::class, 'store'])->name('admin.clients.store');
    Route::get('/clients/edit/{id}', [ClientController::class, 'edit'])->name('admin.clients.edit');
    Route::post('/clients/update/{id}', [ClientController::class, 'update'])->name('admin.clients.update');
    Route::delete('/clients/delete/{id}', [ClientController::class, 'destroy'])->name('admin.clients.destroy');

    // What we do Route
    Route::get('/whatWeDo', [WhatWeDoController::class, 'index'])->name('admin.whatWeDo');
    Route::put('/whatWeDo', [WhatWeDoController::class, 'update'])->name('admin.whatWeDo.update');

    // Explore
    Route::get('/explore', [ExploreController::class, 'index'])->name('admin.explore');
    Route::put('/explore', [ExploreController::class, 'update'])->name('admin.explore.update');

    // Funfact Route
    Route::get('/funfacts/all', [FunFactController::class, 'all'])->name('admin.funfacts.all');
    Route::get('/funfacts/addnew', [FunFactController::class, 'addnew'])->name('admin.funfacts.addnew');
    Route::post('/funfacts/addnew', [FunFactController::class, 'store'])->name('admin.funfacts.store');
    Route::get('/funfacts/edit/{id}', [FunFactController::class, 'edit'])->name('admin.funfacts.edit');
    Route::post('/funfacts/update/{id}', [FunFactController::class, 'update'])->name('admin.funfacts.update');
    Route::delete('/funfacts/delete/{id}', [FunFactController::class, 'destroy'])->name('admin.funfacts.destroy');

    // Pricing Title
    Route::get('/pricing-title', [PricingTitleController::class, 'index'])->name('admin.pricing-title');
    Route::put('/pricing-title', [PricingTitleController::class, 'update'])->name('admin.pricing-title.update');

    // Pricing Category & Pricing
    Route::get('/pricing-cat/all', [PricingCategoryController::class, 'all'])->name('admin.pricing-cat.all');
    Route::get('/pricing-cat/addnew', [PricingCategoryController::class, 'addnew'])->name('admin.pricing-cat.addnew');
    Route::post('/pricing-cat/addnew', [PricingCategoryController::class, 'store'])->name('admin.pricing-cat.store');
    Route::get('/pricing-cat/edit/{id}', [PricingCategoryController::class, 'edit'])->name('admin.pricing-cat.edit');
    Route::post('/pricing-cat/update/{id}', [PricingCategoryController::class, 'update'])->name('admin.pricing-cat.update');
    Route::delete('/pricing-cat/delete/{id}', [PricingCategoryController::class, 'destroy'])->name('admin.pricing-cat.destroy');

    Route::get('/pricing/all', [PricingController::class, 'all'])->name('admin.pricing.all');
    Route::get('/pricing/addnew', [PricingController::class, 'addnew'])->name('admin.pricing.addnew');
    Route::post('/pricing/addnew', [PricingController::class, 'store'])->name('admin.pricing.store');
    Route::get('/pricing/edit/{id}', [PricingController::class, 'edit'])->name('admin.pricing.edit');
    Route::post('/pricing/update/{id}', [PricingController::class, 'update'])->name('admin.pricing.update');
    Route::delete('/pricing/delete/{id}', [PricingController::class, 'destroy'])->name('admin.pricing.destroy');

    // Product Title
    Route::get('/product-title', [ProductTitleController::class, 'index'])->name('admin.product-title');
    Route::put('/product-title', [ProductTitleController::class, 'update'])->name('admin.product-title.update');

    // About
    Route::get('/about', [AboutController::class, 'index'])->name('admin.about');
    Route::put('/about', [AboutController::class, 'update'])->name('admin.about.update');

    // Coverage
    Route::get('/coverage', [CoverageTitleController::class, 'index'])->name('admin.coverage');
    Route::put('/coverage', [CoverageTitleController::class, 'update'])->name('admin.coverage.update');

    // Coverage Area
    Route::get('/coverage/area', [CoverageAreaController::class, 'index'])->name('admin.coverage.area');

    Route::get('/coverage/area/add', [CoverageAreaController::class, 'add'])->name('admin.coverage.add');
    Route::post('/coverage/area/store', [CoverageAreaController::class, 'store'])->name('admin.coverage.store');

    Route::get('/coverage/area/edit/{id}', [CoverageAreaController::class, 'edit'])->name('admin.coverage.area.edit');
    Route::post('/coverage/area/update/{id}', [CoverageAreaController::class, 'update'])->name('admin.coverage.area.update');

    Route::delete('/coverage/area/destroy/{id}', [CoverageAreaController::class, 'destroy'])->name('admin.coverage.area.destroy');


    // Google Maps
    Route::get('/maps', [MapsController::class, 'index'])->name('admin.maps');
    Route::put('/maps', [MapsController::class, 'update'])->name('admin.maps.update');

    // Contact Title
    Route::get('/contact-title', [ContactTitleController::class, 'index'])->name('admin.contact-title');
    Route::put('/contact-title', [ContactTitleController::class, 'update'])->name('admin.contact-title.update');

    // Contact
    Route::get('/contact', [ContactController::class, 'index'])->name('admin.contact');
    Route::put('/contact', [ContactController::class, 'update'])->name('admin.contact.update');

    // Area
    Route::get('/area', [DistrictController::class, 'index'])->name('admin.area');
    Route::post('/area', [DistrictController::class, 'store'])->name('admin.area.store');

    // Upazilla Area
    Route::get('/upazilla', [UpazillaController::class, 'index'])->name('admin.upazilla');
    Route::post('/upazilla', [UpazillaController::class, 'store'])->name('admin.upazilla.store');

    // Product Controller
    Route::get('/product/all', [ProductsController::class, 'all'])->name('admin.product.all');
    Route::get('/product/addnew', [ProductsController::class, 'addnew'])->name('admin.product.addnew');
    Route::post('/product/addnew', [ProductsController::class, 'store'])->name('admin.product.store');
    Route::get('/product/edit/{id}', [ProductsController::class, 'edit'])->name('admin.product.edit');
    Route::post('/product/update/{id}', [ProductsController::class, 'update'])->name('admin.product.update');
    Route::delete('/product/delete/{id}', [ProductsController::class, 'destroy'])->name('admin.product.destroy');

    // Site Pages Controller
    Route::get('/page/all', [SitePagesController::class, 'index'])->name('admin.page.all');
    Route::get('/page/all', [SitePagesController::class, 'all'])->name('admin.page.all');
    Route::get('/page/addnew', [SitePagesController::class, 'addnew'])->name('admin.page.addnew');
    Route::post('/page/addnew', [SitePagesController::class, 'store'])->name('admin.page.store');
    Route::get('/page/edit/{id}', [SitePagesController::class, 'edit'])->name('admin.page.edit');
    Route::post('/page/update/{id}', [SitePagesController::class, 'update'])->name('admin.page.update');
    Route::delete('/page/delete/{id}', [SitePagesController::class, 'destroy'])->name('admin.page.destroy');


    // Pay Bill
    Route::get('/paybill', [PayBillController::class, 'index'])->name('admin.paybill');
    Route::put('/paybill', [PayBillController::class, 'update'])->name('admin.paybill.title.update');


    // Pay Bill Lists
    Route::get('/paybill/all', [PayBillOptionsController::class, 'all'])->name('admin.paybill.all');
    Route::get('/paybill/addnew', [PayBillOptionsController::class, 'addnew'])->name('admin.paybill.addnew');
    Route::post('/paybill/store', [PayBillOptionsController::class, 'store'])->name('admin.paybill.store');
    Route::get('/paybill/edit/{id}', [PayBillOptionsController::class, 'edit'])->name('admin.paybill.edit');
    Route::post('/paybill/update/{id}', [PayBillOptionsController::class, 'update'])->name('admin.paybill.update');
    Route::delete('/paybill/delete/{id}', [PayBillOptionsController::class, 'destroy'])->name('admin.paybill.destroy');

    Route::post('/paybill/steps/store/{id}', [PayBillOptionStepsController::class, 'store'])->name('admin.paybill.steps.store');
    Route::get('/paybill/steps/edit/{id}', [PayBillOptionStepsController::class, 'edit'])->name('admin.paybill.steps.edit');

    // Product Controller
    Route::get('/paybill/bank/all', [PayBillBankController::class, 'all'])->name('admin.paybill.bank.all');
    Route::get('/paybill/bank/addnew', [PayBillBankController::class, 'addnew'])->name('admin.paybill.bank.addnew');
    Route::post('/paybill/bank/store', [PayBillBankController::class, 'store'])->name('admin.paybill.bank.store');
    Route::get('/paybill/bank/edit/{id}', [PayBillBankController::class, 'edit'])->name('admin.paybill.bank.edit');
    Route::post('/paybill/bank/update/{id}', [PayBillBankController::class, 'update'])->name('admin.paybill.bank.update');
    Route::delete('/paybill/bank/delete/{id}', [PayBillBankController::class, 'destroy'])->name('admin.paybill.bank.destroy');

    // Footer
    Route::get('/footer', [FooterController::class, 'index'])->name('admin.footer');
    Route::put('/footer', [FooterController::class, 'update'])->name('admin.footer.update');

    // Theme Settings
    Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings');
    Route::put('/settings', [SettingsController::class, 'update'])->name('admin.settings.update');

    // SEO Settings
    Route::get('/seo', [SeoController::class, 'index'])->name('admin.seo');
    Route::put('/seo', [SeoController::class, 'update'])->name('admin.seo.update');

    // Link Settings
    Route::get('/link', [OpenGrapTagController::class, 'index'])->name('admin.link');
    Route::put('/link', [OpenGrapTagController::class, 'update'])->name('admin.link.update');

    // Site Pages Controller
    Route::get('/script/all', [ScriptController::class, 'all'])->name('admin.script.all');
    Route::get('/script/addnew', [ScriptController::class, 'addnew'])->name('admin.script.addnew');
    Route::post('/script/addnew', [ScriptController::class, 'store'])->name('admin.script.store');
    Route::get('/script/edit/{id}', [ScriptController::class, 'edit'])->name('admin.script.edit');
    Route::post('/script/update/{id}', [ScriptController::class, 'update'])->name('admin.script.update');
    Route::delete('/script/delete/{id}', [ScriptController::class, 'destroy'])->name('admin.script.destroy');

    // All order request
    Route::get('/order-request/all', [OrderPackageRequestController::class, 'all'])->name('customer.order.all');

    // All product order request
    Route::get('/order-product-request/all', [OrderProductRequestController::class, 'all'])->name('order.product.all');

    //question
    Route::get(('/question/all'), [QuestionController::class, 'all'])->name('admin.question.all');
    Route::put('/question', [QuestionController::class, 'update'])->name('admin.question.update');

    //Faq
    Route::get(('/faq'), [FaqTitleController::class, 'all'])->name('admin.faq');
    Route::put('/faq/update', [FaqTitleController::class, 'update'])->name('admin.faq.update');

    Route::get(('/faq/list'), [FaqListTitleController::class, 'all'])->name('admin.faq.list.all');
    Route::get(('/faq/list/addnew'), [FaqListTitleController::class, 'addnew'])->name('admin.faq.list.addnew');
    Route::post(('/faq/list/store'), [FaqListTitleController::class, 'store'])->name('admin.faq.list.store');
    Route::get(('/faq/list/answers/create'), [FaqListTitleController::class, 'create'])->name('admin.faq.list.answers.create');
    Route::delete(('/faq/list/delete/{id}'), [FaqListTitleController::class, 'destroy'])->name('admin.faq.list.destroy');

    Route::post(('/faq/list/answers/store'), [FaqListAnswerController::class, 'store'])->name('admin.faq.list.answer.store');
    Route::get(('/faq/list/answers/edit/{id}'), [FaqListAnswerController::class, 'edit'])->name('admin.faq.list.answer.edit');
    Route::put(('/faq/list/answers/update/{id}'), [FaqListAnswerController::class, 'update'])->name('admin.faq.list.answer.update');

    //Testimonial
    Route::get(('/testimonial'), [TestimonialTitleController::class, 'all'])->name('admin.testimonial.all');
    Route::put('/testimonial/update/{id}', [TestimonialTitleController::class, 'update'])->name('admin.testimonial.update');

    Route::get(('/testimonial/all'), [TestimonialListController::class, 'all'])->name('admin.testimonial.list.all');
    Route::get(('/testimonial/addnew'), [TestimonialListController::class, 'addnew'])->name('admin.testimonial.list.addnew');
    Route::post(('/testimonial/store'), [TestimonialListController::class, 'store'])->name('admin.testimonial.list.store');
    Route::delete('/testimonial/delete/{id}', [TestimonialListController::class, 'destroy'])->name('admin.testimonial.destroy');
    Route::get('/testimonial/edit/{id}', [TestimonialListController::class, 'edit'])->name('admin.testimonial.edit');
    Route::post('/testimonial/list/update/{id}', [TestimonialListController::class, 'update'])->name('admin.testimonial.list.update');

    // Blog Title
    Route::get('/blog/title/all', [BlogTitleController::class, 'all'])->name('admin.blog.title.all');
    Route::post('/blog/title/update/{id}', [BlogTitleController::class, 'update'])->name('admin.blog.title.update');

    // Blog category
    Route::get('/blog/category/all', [BlogCategoryController::class, 'all'])->name('admin.blog.category.all');
    Route::get('/blog/category/addnew', [BlogCategoryController::class, 'addnew'])->name('admin.blog.category.addnew');
    Route::post('/blog/category/store', [BlogCategoryController::class, 'store'])->name('admin.blog.category.store');
    Route::get('/blog/category/edit/{id}', [BlogCategoryController::class, 'edit'])->name('admin.blog.category.edit');
    Route::post('/blog/category/update/{id}', [BlogCategoryController::class, 'update'])->name('admin.blog.category.update');
    Route::delete('/blog/category/delete/{id}', [BlogCategoryController::class, 'destroy'])->name('admin.blog.category.destroy');

    // Blog
    Route::get('/blog/all', [BlogController::class, 'all'])->name('admin.blog.all');
    Route::get('/blog/addnew', [BlogController::class, 'addnew'])->name('admin.blog.addnew');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
    Route::delete('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');


    // All product order request
    Route::get('/messages/all', [MessagesController::class, 'all'])->name('messages.all');
});


/*=======================================================
    Front Routes
=======================================================*/
Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/aboutus', [PagesController::class, 'aboutUs'])->name('page.aboutus');
Route::get('/mediaserver', [PagesController::class, 'mediaServer'])->name('page.mediaserver');
Route::get('/pricing', [PagesController::class, 'pricing'])->name('page.pricing');
Route::get('/paybill', [PagesController::class, 'payBill'])->name('page.paybill');
Route::get('/coverage', [PagesController::class, 'coverage'])->name('page.coverage');
Route::get('/contactus', [PagesController::class, 'conatctUs'])->name('page.contactus');
// Route::get('/terms', [PagesController::class, 'terms'])->name('page.single');
// Route::get('/policy', [PagesController::class, 'policy'])->name('page.terms');
Route::get('/speed', [PagesController::class, 'speed'])->name('page.policy');
Route::get('/blogs', [PagesController::class, 'blogs'])->name('page.blogs');
Route::get('/blog-{id}', [PagesController::class, 'single_blog'])->name('page.blog');
Route::get('/page-{id}', [PagesController::class, 'PageSingle'])->name('page.single');

// // 404 page
Route::fallback([PagesController::class, 'error']);


// Route::get('/order-package', [PagesController::class, 'pricingform'])->name('pricing-form');
// Route::get('/order-product', [PagesController::class, 'productform'])->name('product-form');
// Route::post('/send-message', [PagesController::class, 'sendEmail'])->name('contact-form');
Route::post('/send-message', [PagesController::class, 'userMessages'])->name('contact-form');
// Route::post('/send-message-package', [PagesController::class, 'sendEmailPackage'])->name('order-package');
// Route::post('/send-message-product', [PagesController::class, 'sendEmailProduct'])->name('order-product');

Route::post('/send-message-package', [PagesController::class, 'orderPackage'])->name('order-package');
Route::post('/send-message-product', [PagesController::class, 'orderProduct'])->name('order-product');


Route::get('/dashboard', function () {
    $header_settings = HeaderSettings::first();
    return view('pages.dashboard.dashboard', compact('header_settings'));
})->middleware(['auth'])->name('admin.dashboard');

require __DIR__ . '/auth.php';
