<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Mail\OrderFormMail;
use App\Mail\ProductFormMail;
use Illuminate\Http\Request;
use Mail;

use App\Models\Settings;
use App\Models\HeaderSettings;
use App\Models\FooterSettings;
use App\Models\HeroSlider;
use App\Models\Features;
use App\Models\FunFact;
use App\Models\AboutSettings;
use App\Models\GoogleMaps;
use App\Models\MediaList;
use App\Models\MediaCategory;
use App\Models\Pricing;
use App\Models\PricingCategory;
use App\Models\PayBill;
use App\Models\Product;
use App\Models\ProductTitle;
use App\Models\PricingTitle;
use App\Models\MediaTitle;
use App\Models\ContactTitle;
use App\Models\ContactBox;
use App\Models\SitePages;
use App\Models\SeoOptimized;
use App\Models\District;
use App\Models\Upazilla;
use App\Models\Client;
use App\Models\Explore;
use App\Models\WhatWeDo;
use App\Models\OrderPackage;
use App\Models\OrderProduct;
use App\Models\Question;
use App\Models\TestimonialList;
use App\Models\TestimonialTitle;
use App\Models\FaqTitle;
use App\Models\FaqListTitle;
use App\Models\Messages;
use App\Models\CoverageTitle;
use App\Models\CoverageArea;
use App\Models\PayBillOptions;
use App\Models\PayBillBank;
use App\Models\BlogTitle;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Theme;
use App\Models\Script;
use App\Models\OpenGrapTag;


// Mail Form


class PagesController extends Controller
{

    // Index Page
    public function index()
    {
        $heros = HeroSlider::all();
        $features = Features::all();

        $site_settings = Settings::first();
        $header_settings = HeaderSettings::first();
        $footer_settings = FooterSettings::first();
        $funfacts = FunFact::all();
        $about_us = AboutSettings::first();
        $google_map = GoogleMaps::first();
        $pricing_title = PricingTitle::first();
        $pricings = Pricing::all();
        $media_lists = MediaList::all();
        $paybill = PayBill::first();
        $contact_title = ContactTitle::first();
        $contact = ContactBox::first();
        $product_title = ProductTitle::first();
        $products = Product::all();
        $media_title = MediaTitle::first();
        $media_category = MediaCategory::with('medialist')->get();
        $pricing_category = PricingCategory::with('pricing')->get();
        $seo_settings = SeoOptimized::first();
        $district = District::all();
        $upazilla = Upazilla::all();
        $clients = Client::all();
        $whatWeDo = WhatWeDo::first();
        $explore = Explore::first();
        $question = Question::first();
        $testimonialTitle = TestimonialTitle::first();
        $testimonialList = TestimonialList::all();
        $faqTitle = FaqTitle::first();
        $faqListTitle = FaqListTitle::with('FaqListAnswer')->get();

        $theme = Theme::first();
        $scripts = Script::all();
        $openGrapTag = OpenGrapTag::first();

        // dd($paybill);
        return view(
            'pages.front.Hero',
            compact(
                'site_settings',
                'header_settings',
                'footer_settings',
                'heros',
                'funfacts',
                'features',
                'about_us',
                'google_map',
                'pricings',
                'media_lists',
                'paybill',
                'contact',
                'products',
                'product_title',
                'pricing_title',
                'media_title',
                'contact_title',
                'media_category',
                'pricing_category',
                'seo_settings',
                'district',
                'upazilla',
                'clients',
                'whatWeDo',
                'explore',
                'question',
                'testimonialTitle',
                'testimonialList',
                'faqTitle',
                'faqListTitle',
                'theme',
                'scripts',
                'openGrapTag'
            )
        );
    }

    // pages
    public function PageSingle($id)
    {
        $site_settings = Settings::first();
        $header_settings = HeaderSettings::first();
        $footer_settings = FooterSettings::first();
        $site_page = SitePages::find($id);
        $seo_settings = SeoOptimized::first();
        $theme = Theme::first();
        $scripts = Script::all();
        $openGrapTag = OpenGrapTag::first();
        return view('pages.front.SinglePage', compact('site_settings', 'header_settings', 'footer_settings', 'site_page', 'seo_settings', 'theme', 'scripts', 'openGrapTag'));
    }


    // pricing
    public function pricingform()
    {
        $site_settings = Settings::first();
        $header_settings = HeaderSettings::first();
        $footer_settings = FooterSettings::first();
        $seo_settings = SeoOptimized::first();
        $pricings = Pricing::all();
        $pricing_title = PricingTitle::first();
        $theme = Theme::first();
        $scripts = Script::all();
        $openGrapTag = OpenGrapTag::first();
        return view('pages.front.OrderPackage', compact('site_settings', 'header_settings', 'footer_settings', 'seo_settings', 'pricings', 'pricing_title', 'theme', 'scripts', 'openGrapTag'));
    }

    // product
    public function productform()
    {
        $site_settings = Settings::first();
        $header_settings = HeaderSettings::first();
        $footer_settings = FooterSettings::first();
        $seo_settings = SeoOptimized::first();
        $products = Product::all();
        $theme = Theme::first();
        $scripts = Script::all();
        $openGrapTag = OpenGrapTag::first();
        return view('pages.front.OrderProduct', compact('site_settings', 'header_settings', 'products', 'footer_settings', 'seo_settings', 'theme', 'scripts', 'openGrapTag'));
    }


    public function sendEmail(Request $request)
    {
        $details = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message
        ];
        // Mail::to('telewirecommunications@gmail.com')->send(new ContactFormMail($details));
        return back()->with('message_sent', 'Your message has been send successfully!');
    }


    public function orderPackage(Request $request)
    {
        // $this->validate($request, [
        //     'package_list' => 'required|string',
        //     'FirstName' => 'required|string',
        //     'LastName' => 'required|string',
        //     'Phone' => 'required|string',
        //     'Address' => 'required|string',
        //     'District' => 'required|string',
        //     'Upazilla' => 'required|string',
        // ]);

        $orderd_details = new OrderPackage();
        $orderd_details->package_name = $request->package_list;
        $orderd_details->customer_first_name = $request->FirstName;
        $orderd_details->customer_last_name = $request->LastName;
        $orderd_details->customer_number = $request->Phone;
        $orderd_details->customer_email = $request->Email;
        $orderd_details->customer_address = $request->Address;
        $orderd_details->customer_district = $request->District;
        $orderd_details->customer_upazilla = $request->Upazilla;
        $orderd_details->customer_comments = $request->Message;
        $orderd_details->save();

        return back()->with('success', " Package order has been successfully created. We will contact you soon.");
    }

    public function orderProduct(Request $request)
    {
        // $this->validate($request, [
        //     'product_list' => 'required|string',
        //     'FirstName' => 'required|string',
        //     'LastName' => 'required|string',
        //     'Phone' => 'required|string',
        //     'Email' => 'required|string',
        //     'Address' => 'required|string',
        //     'District' => 'required|string',
        //     'Upazilla' => 'required|string',
        // ]);

        $orderd_product_details = new OrderProduct();
        $orderd_product_details->product_name = $request->product_list;
        $orderd_product_details->customer_first_name = $request->FirstName;
        $orderd_product_details->customer_last_name = $request->LastName;
        $orderd_product_details->customer_number = $request->Phone;
        $orderd_product_details->customer_email = $request->Email;
        $orderd_product_details->customer_address = $request->Address;
        $orderd_product_details->customer_district = $request->District;
        $orderd_product_details->customer_upazilla = $request->Upazilla;
        $orderd_product_details->customer_comments = $request->Message;
        $orderd_product_details->save();

        return back()->with('success', " Product order has been successfully created. We will contact you soon.");
        // return redirect()->route('home')->with('success', " Product order has been successfully created. We will contact you soon.");
    }

    public function sendEmailPackage(Request $request)
    {
        $details = [
            'package_list' => $request->package_list,
            'FirstName' => $request->FirstName,
            'LastName' => $request->LastName,
            'Phone' => $request->Phone,
            'Email' => $request->Email,
            'Address' => $request->Address,
            'Message' => $request->Message
        ];
        // Mail::to('telewirecommunications@gmail.com')->send(new OrderFormMail($details));
        return back()->with('message_sent_package', 'Your Recent package order placed successfully!');
    }

    public function sendEmailProduct(Request $request)
    {
        $details = [
            'product_list' => $request->product_list,
            'FirstName' => $request->FirstName,
            'LastName' => $request->LastName,
            'Phone' => $request->Phone,
            'Email' => $request->Email,
            'Address' => $request->Address,
            'Message' => $request->Message
        ];
        // Mail::to('telewirecommunications@gmail.com')->send(new ProductFormMail($details));
        return back()->with('message_sent_product', 'Your Product order place successfully!');
    }

    // about us
    public function aboutUs()
    {
        $site_settings = Settings::first();
        $header_settings = HeaderSettings::first();
        $footer_settings = FooterSettings::first();
        // $site_page = SitePages::find($id);
        $seo_settings = SeoOptimized::first();
        $clients = Client::all();
        $whatWeDo = WhatWeDo::first();

        $about_us = AboutSettings::first();
        $theme = Theme::first();
        $scripts = Script::all();
        $openGrapTag = OpenGrapTag::first();
        return view('pages.front.AboutUs', compact('site_settings', 'header_settings', 'footer_settings', 'seo_settings', 'about_us', 'clients', 'whatWeDo', 'theme', 'scripts', 'openGrapTag'));
    }


    // media server
    public function mediaServer()
    {
        $site_settings = Settings::first();
        $header_settings = HeaderSettings::first();
        $footer_settings = FooterSettings::first();
        // $site_page = SitePages::find($id);
        $seo_settings = SeoOptimized::first();
        $media_lists = MediaList::all();
        $media_title = MediaTitle::first();
        $media_category = MediaCategory::with('medialist')->get();
        $theme = Theme::first();
        $scripts = Script::all();
        $openGrapTag = OpenGrapTag::first();
        return view('pages.front.MediaServer', compact('site_settings', 'header_settings', 'footer_settings', 'seo_settings', 'media_title', 'media_category', 'theme', 'scripts', 'openGrapTag'));
    }

    // pricing
    public function pricing()
    {
        $site_settings = Settings::first();
        $header_settings = HeaderSettings::first();
        $footer_settings = FooterSettings::first();
        // $site_page = SitePages::find($id);
        $seo_settings = SeoOptimized::first();
        $pricing_title = PricingTitle::first();
        $pricing_category = PricingCategory::with('pricing')->get();
        $pricings = Pricing::all();
        $theme = Theme::first();
        $scripts = Script::all();
        $openGrapTag = OpenGrapTag::first();
        return view('pages.front.Pricing', compact('site_settings', 'header_settings', 'footer_settings', 'seo_settings', 'pricing_title', 'pricings', 'pricing_category', 'theme', 'scripts', 'openGrapTag'));
    }

    // pay bill
    public function payBill()
    {
        $site_settings = Settings::first();
        $header_settings = HeaderSettings::first();
        $footer_settings = FooterSettings::first();
        // $site_page = SitePages::find($id);
        $seo_settings = SeoOptimized::first();
        $payBillOptions = PayBillOptions::all();
        $PayBillBank = PayBillBank::all();
        $paybill = PayBill::first();
        $theme = Theme::first();
        $scripts = Script::all();
        $openGrapTag = OpenGrapTag::first();
        return view('pages.front.PayBill', compact('site_settings', 'header_settings', 'footer_settings', 'seo_settings', 'paybill', 'payBillOptions', 'PayBillBank', 'theme', 'scripts', 'openGrapTag'));
    }

    // Coverage
    public function coverage()
    {
        $site_settings = Settings::first();
        $header_settings = HeaderSettings::first();
        $footer_settings = FooterSettings::first();
        // $site_page = SitePages::find($id);
        $seo_settings = SeoOptimized::first();
        $google_map = GoogleMaps::first();
        $coverageTitle = CoverageTitle::first();
        $coverageArea = CoverageArea::all();
        $theme = Theme::first();
        $scripts = Script::all();
        $openGrapTag = OpenGrapTag::first();
        return view('pages.front.coverage', compact('site_settings', 'header_settings', 'footer_settings', 'seo_settings', 'google_map', 'coverageTitle', 'coverageArea', 'theme', 'scripts', 'openGrapTag'));
    }

    // conatct us
    public function conatctUs()
    {
        $site_settings = Settings::first();
        $header_settings = HeaderSettings::first();
        $footer_settings = FooterSettings::first();
        // $site_page = SitePages::find($id);
        $google_map = GoogleMaps::first();
        $contact_title = ContactTitle::first();
        $contact = ContactBox::first();
        $seo_settings = SeoOptimized::first();
        $theme = Theme::first();
        $scripts = Script::all();
        $openGrapTag = OpenGrapTag::first();
        return view('pages.front.ContactUs', compact('site_settings', 'header_settings', 'footer_settings', 'seo_settings', 'contact_title', 'contact', 'google_map', 'theme', 'scripts', 'openGrapTag'));
    }

    // terms
    public function terms()
    {
        $site_settings = Settings::first();
        $header_settings = HeaderSettings::first();
        $footer_settings = FooterSettings::first();
        // $site_page = SitePages::find($id);
        $seo_settings = SeoOptimized::first();
        $openGrapTag = OpenGrapTag::first();
        return view('pages.front.Term&Condition', compact('site_settings', 'header_settings', 'footer_settings', 'seo_settings', 'openGrapTag'));
    }

    // policy
    public function policy()
    {
        $site_settings = Settings::first();
        $header_settings = HeaderSettings::first();
        $footer_settings = FooterSettings::first();
        // $site_page = SitePages::find($id);
        $seo_settings = SeoOptimized::first();
        $openGrapTag = OpenGrapTag::first();
        return view('pages.front.Policy', compact('site_settings', 'header_settings', 'footer_settings', 'seo_settings', 'openGrapTag'));
    }

    // speed
    public function speed()
    {
        $site_settings = Settings::first();
        $header_settings = HeaderSettings::first();
        $footer_settings = FooterSettings::first();
        // $site_page = SitePages::find($id);
        $seo_settings = SeoOptimized::first();
        $theme = Theme::first();
        $scripts = Script::all();
        $openGrapTag = OpenGrapTag::first();
        return view('pages.front.Speed', compact('site_settings', 'header_settings', 'footer_settings', 'seo_settings', 'theme', 'scripts', 'openGrapTag'));
    }

    // blogs
    public function blogs()
    {
        $site_settings = Settings::first();
        $header_settings = HeaderSettings::first();
        $footer_settings = FooterSettings::first();
        // $site_page = SitePages::find($id);
        $seo_settings = SeoOptimized::first();
        $theme = Theme::first();
        $scripts = Script::all();
        $openGrapTag = OpenGrapTag::first();

        $blogTitle = BlogTitle::first();
        $blogs = Blog::join('blog_categories', 'blogs.blog_categories_id', '=', 'blog_categories.id')
            ->select('blogs.*', 'blog_categories.topic', 'blog_categories.icon')
            ->get();
        return view('pages.front.Blogs', compact('site_settings', 'header_settings', 'footer_settings', 'seo_settings', 'blogTitle', 'blogs', 'theme', 'scripts', 'openGrapTag'));
    }

    // blog
    public function single_blog($id)
    {
        // dd($id);
        $site_settings = Settings::first();
        $header_settings = HeaderSettings::first();
        $footer_settings = FooterSettings::first();
        // $site_page = SitePages::find($id);
        $seo_settings = SeoOptimized::first();
        $theme = Theme::first();
        $scripts = Script::all();
        $openGrapTag = OpenGrapTag::first();

        $blogs = Blog::join('blog_categories', 'blogs.blog_categories_id', '=', 'blog_categories.id')
            ->select('blogs.*', 'blog_categories.topic', 'blog_categories.icon')
            ->get();

        $blog = Blog::join('blog_categories', 'blogs.blog_categories_id', '=', 'blog_categories.id')
            ->select('blogs.*', 'blog_categories.topic', 'blog_categories.icon')
            ->where('blogs.id', '=', $id)
            ->first();

        // $blogCategory =  BlogCategory::with('medialist')->get();

        $blogCategory = BlogCategory::all();
        return view('pages.front.Blog', compact('site_settings', 'header_settings', 'footer_settings', 'seo_settings', 'blogCategory', 'blogs', 'blog', 'theme', 'scripts', 'openGrapTag'));
    }

    // error
    public function error()
    {
        $site_settings = Settings::first();
        $header_settings = HeaderSettings::first();
        $footer_settings = FooterSettings::first();
        // $site_page = SitePages::find($id);
        $seo_settings = SeoOptimized::first();
        $theme = Theme::first();
        $scripts = Script::all();

        return view('pages.front.Error', compact('site_settings', 'header_settings', 'footer_settings', 'seo_settings', 'theme', 'scripts'));
    }


    public function userMessages(Request $request)
    {
        $this->validate($request, [
            'FirstName' => 'required|string',
            'LastName' => 'required|string',
            'Phone' => 'required|string',
            'Email' => 'required|string',
        ]);

        $customer_message = new Messages();
        $customer_message->customer_first_name = $request->FirstName;
        $customer_message->customer_last_name = $request->LastName;
        $customer_message->customer_number = $request->Phone;
        $customer_message->customer_email = $request->Email;
        $customer_message->customer_comments = $request->Message;
        $customer_message->save();

        return redirect()->route('home')->with('success', " Message Successfully Sent. We will contact you soon.");
    }
}
