<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Mail\ReplyMail;
use App\Mail\SendMail;
use App\Models\About;
use App\Models\Banner;
use App\Models\Ceo;
use App\Models\Front;
use App\Models\News;
use App\Models\Product;
use App\Models\Service;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class FrontendController extends Controller
{
    public function index()
    {
        $services = Service::latest()->take(8)->get();
        $products = Product::latest()->get();
        $abouts = About::all();
        $banners = Banner::latest()->take(1)->get();
        $newses = News::latest()->take(6)->get();
        $ceos = Ceo::latest()->take(1)->get();

        return view('frontend.pages.index')->with(compact('services', 'abouts', 'newses', 'products', 'banners', 'ceos'));
    }
    public function comming_soon()
    {
        return view('frontend.pages.coming_soon');
    }
    public function term()
    {
        return view('frontend.pages.terms');
    }
    public function privecy()
    {
        return view('frontend.pages.privecy');
    }
    public function refound()
    {
        return view('frontend.pages.refound');
    }
    public function subscription(Request $request)
    {
        if ($request->isMethod('post')) {
            // dd($request->all());
            $data = $request->all();
            $subs = new Front;
            $subs->name = $data['name'];
            $subs->organization = $data['organization'];
            $subs->service = "Some";
            $subs->email = $data['email'];
            $subs->phone = $data['phone'];
            $subs->massage = $data['massage'];
            $subs->save();
            Toastr::success("We will response you soon!", 'Massage sent!');
            Mail::to('connect@ayaantech.com')->send(new SendMail('my Details'));

            $mail = new PHPMailer(true);



            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = env('MAIL_HOST');                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = env('MAIL_USERNAME');                     //SMTP username
            $mail->Password   = env('MAIL_PASSWORD');                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;



            $mail->setFrom('noreply@ayaantec.com', 'Ayaan Tech Support');
            $mail->addAddress('connect@ayaantech.com', 'Ayaan Tech');     //Add a recipient
            $mail->addReplyTo($data['email'], $data['name']);
            $mail->addCC($data['email']);



            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Enquiry';
            $mail->Body    = $data['massage'];
            $mail->AltBody = $data['massage'];

            $mail->send();
            dd('Okay');
            // return redirect()->back();die;
        }
    }
    public function single_news($id)
    {
        $data = News::find($id);
        return view('frontend.pages.single_news')->with(compact('data'));
    }
    public function single_product($id)
    {
        $data = Product::find($id)->toArray();

        return view('frontend.pages.single_product')->with(compact('data'));
    }
    public function single_service($id)
    {
        $data = Service::find($id);
        return view('frontend.pages.single_service')->with(compact('data'));
    }

    // ======================
    // public function homee()
    // {
    //    $products = Product::latest()->get();
    //    $services = Service::latest()->get();
    //    $news = News::latest()->get();
    //     return view('frontend.pages.index2', [
    //         'products' => $products,
    //         'services' => $services,
    //         'news' => $news,
    //     ]);
    // }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function contact_mail(Request $request){
        $this->validate($request,[
            'name'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required',
            'web'=>'required|string',
            'subject'=>'required|string',
            'message'=>'required|string',
            'g-recaptcha-response' => 'required|captcha'

        ]);
        $inquiry = array();
        $inquiry['name'] = $request->name;
        $inquiry['email'] = $request->email;
        $inquiry['phone'] = $request->phone;
        $inquiry['web'] = $request->web;
        $inquiry['subject'] = $request->subject;
        $inquiry['message'] = $request->message;
        $send_email = "connect2ayaantec@gmail.com";
        Mail::to($send_email)->send(new ContactMail($inquiry));
        Mail::to($request->email)->send(new ReplyMail($inquiry));
        return back()->with('message', 'Mail Sent Successfully. Thank you, We will contact you shortly');
    }



    // ======================



}
