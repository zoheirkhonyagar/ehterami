<?php

namespace App\Http\Controllers;

use SEO;
use App\Post;
use App\Medal;
use App\Quote;
use App\Slider;
use App\Slogan;
use App\Payment;
use App\Product;
use App\Category;
use App\Portfolio;
use App\Information;
use App\Subcategory;
use App\AboutUsHistory;
use Illuminate\Http\Request;
use SoapClient;
use App\Http\Controllers\Modules\UploadController;

class HomeController extends UploadController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $MerchantID = '2fc86e1a-faa4-11e8-9c63-005056a205be';

    public function index()
    {
        SEO::setTitle('کانون آگهی و تبلیغات احترامی');
        SEO::setCanonical('https://ehterami.co');

        $sliders = Slider::all();
        $slogans = Slogan::all();
        $aboutUsHistory = AboutUsHistory::orderBy('id', 'desc')->first();
        $information = Information::find(1);
        $quotes = Quote::all();
        $portfolios = Portfolio::take(8)->latest()->get();
        $posts = Post::take(3)->latest()->get();
        // return $quotes;
        return view('main.main-page.index' , compact(['sliders','slogans','information','quotes','portfolios','posts','aboutUsHistory']));
    }

    public function aboutUs()
    {
        SEO::setTitle('درباره ما');
        SEO::setCanonical('https://ehterami.co/about-us');

        $information = Information::find(1);
        $aboutUsHistory = AboutUsHistory::orderBy('id', 'desc')->first();
        $medals = Medal::all();
        $posts = Post::take(3)->latest()->get();
        return view('main.about-us.index' , compact(['information','medals','aboutUsHistory','posts']));
    }

    public function comingSoon()
    {
        SEO::setTitle('کانون آگهی و تبلیغات احترامی');

        return view('coming-soon.index');
    }

    public function contactUs()
    {
        SEO::setTitle('تماس با ما');
        SEO::setCanonical('https://ehterami.co/contact-us');

        $information = Information::find(1);
        $posts = Post::take(3)->latest()->get();
        return view('main.contact-us.index' , compact(['information','posts']));
    }

    public function posts()
    {
        SEO::setTitle('اخبار');
        SEO::setCanonical('https://ehterami.co/posts');

        $information = Information::find(1);
        $posts = Post::latest()->paginate(9);
        return view('main.post.index' , compact(['information','posts']));
    }

    public function showSinglePost(Post $post)
    {
        SEO::setTitle($post->title);
        SEO::setCanonical('https://ehterami.co/post/' . $post->id);

        $information = Information::find(1);
        $posts = Post::take(3)->latest()->get();
        return view('main.post.single' , compact(['information','post','posts']));
    }


    public function orderIndex()
    {
        SEO::setTitle('سفارش');
        SEO::setCanonical('https://ehterami.co/order');

        $information = Information::find(1);
        $posts = Post::take(3)->latest()->get();
        $products = Product::all();
        return view('main.order.index' , compact(['information','posts','products']));
    }

    public function payment(Request $request)
    {

        $this->validate($request , [
            'product' => 'required|numeric',
            'image' => 'required|mimes:jpg,jpeg,bmp,png',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
        ]);

        // return request();

        $width = $request['width'];

        $height = $request['height'];

        $product = Product::findOrFail(request('product'));

        $Amount = $width * $height * $product->price; //Amount will be based on Toman - Required

        $Description = "پرداخت سفارش"; // Required

        $Email = auth()->user()->email; // Optional

        $CallbackURL = 'http://localhost:8000/payment/checker'; // Required


        $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

        $result = $client->PaymentRequest([

                'MerchantID' => $this->MerchantID,
                'Amount' => $Amount,
                'Description' => $Description,
                'Email' => $Email,
                'CallbackURL' => $CallbackURL,

        ]);

        //Redirect to URL You can do it also by creating a form
        if ($result->Status == 100) {

            $image = $request->file('image');

            $filename = $this->getUniqName($request->image);

            $image->move(public_path('uploads/orders') , $filename);

            $filename = 'orders/' . $filename;

            auth()->user()->payments()->create([

                'resnumber' => $result->Authority,
                'price' => $Amount,
                'product_id' => request('product'),
                'width' => $width,
                'height' => $height,
                'image' => $filename,

            ]);

            return redirect('https://www.zarinpal.com/pg/StartPay/'.$result->Authority);

        } else {

            echo'ERR: '.$result->Status;

        }

    }

    public function checker()
    {

        $Authority = request('Authority');

        $payment = Payment::whereResnumber($Authority)->firstOrFail();

        if( request('Status') == 'OK' ) {

            $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentVerification(
                [
                    'MerchantID' => $this->MerchantID,
                    'Authority' => $Authority,
                    'Amount' => $payment->price
                ]
            );

            if ($result->Status == 100) {

                $payment->update([
                    'payment' => true
                ]);

                alert()->success('سفارش شما ثبت شد' , 'پرداخت موفق')->persistent('قبول');
                return redirect('/orders');

            } else {
                $message = "پرداخت با خطا مواجه شد کد خطا : " . $result->Status;
                alert()->success('سفارش شما ثبت شد' , 'پرداخت ناموفق')->persistent('قبول');
                return redirect('/');
            }
        }
        else {
            alert()->error('کابر از پرداخت صرف نظر کرد', 'پرداخت ناموفق')->persistent('قبول');
            echo 'Transaction canceled by user';
            return redirect('/');
        }

    }

    public function userOrders()
    {
        $payments = auth()->user()->payments()->with('product')->wherePayment(1)->latest()->paginate(10);

        SEO::setTitle('سفارشات کاربر');
        SEO::setCanonical('https://ehterami.co/orders');

        $information = Information::find(1);
        $posts = Post::take(3)->latest()->get();

        return view('main.order.user-orders' , compact(['payments' , 'information' , 'posts']));
    }
}
