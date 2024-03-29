<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Recaptcha;
use App\Models\JobApplication;
use App\Models\Opportunities;
use App\Models\Industry;
use App\Models\Service;
use App\Models\Banner;
use App\Models\Blogs;
use Mail;
use Log;

class IndexController extends Controller
{
    public function index(){
        
        $meta_title = config('app.name');
        return view('index',compact('meta_title'));
    }
    
    public function contact(Request $request){
        if($request->isMethod('post')){

            $this -> validate($request, [
                'g-recaptcha-response' => ['required', new Recaptcha()]
            ]);

            $data = $request->all();
              $res = $this->post_captcha($data['g-recaptcha-response']);
            if (!$res['success']){
                return redirect()->back()->with('flash_message_error','Please make sure you check the security CAPTCHA box.');
            }
            Log::info($data);
            dd($data);

            $enquiry = new Enquiry;
            $enquiry->name = $data['name'];
            $enquiry->email = $data['email'];
            $enquiry->phone = $data['phone'];
            $enquiry->subject = $data['subject'];
            $enquiry->organization = $data['organization'];
            $enquiry->comment = $data['comment'];
            $enquiry->save();

            $email = ['kartik@ycstech.in'];
            $messageData = [
                'data' => $data,
            ];
            Mail::send('emails.enquiry',$messageData,function($message) use($email){
                $message->to($email)->subject('New enquiry received from website');
            });
            return redirect()->back()->with('success_message','Form submitted successfully.');
        }
        $meta_title = 'Contact Us | '. config('app.name');
        return view('contact',compact('meta_title'));
    }


    public function mfKYC(Request $request){
        if($request->isMethod('post')){

            $this -> validate($request, [
                'g-recaptcha-response' => ['required', new Recaptcha()]
            ]);

            $data = $request->all();
              $res = $this->post_captcha($data['g-recaptcha-response']);
            if (!$res['success']){
                return redirect()->back()->with('flash_message_error','Please make sure you check the security CAPTCHA box.');
            }
            Log::info($data);
            dd($data);

            $enquiry = new Enquiry;
            $enquiry->name = $data['name'];
            $enquiry->email = $data['email'];
            $enquiry->phone = $data['phone'];
            $enquiry->subject = $data['subject'];
            $enquiry->organization = $data['organization'];
            $enquiry->comment = $data['comment'];
            $enquiry->save();

            $email = ['kartik@ycstech.in'];
            $messageData = [
                'data' => $data,
            ];
            Mail::send('emails.enquiry',$messageData,function($message) use($email){
                $message->to($email)->subject('New enquiry received from website');
            });
            return redirect()->back()->with('success_message','Form submitted successfully.');
        }
        $meta_title = 'Information Required For Mutual Fund KYC | '. config('app.name');
        return view('mutual_fund_kyc',compact('meta_title'));
    }

    public function docKYC(Request $request){
        if($request->isMethod('post')){

            $this -> validate($request, [
                'g-recaptcha-response' => ['required', new Recaptcha()]
            ]);

            $data = $request->all();
              $res = $this->post_captcha($data['g-recaptcha-response']);
            if (!$res['success']){
                return redirect()->back()->with('flash_message_error','Please make sure you check the security CAPTCHA box.');
            }
            Log::info($data);
            dd($data);

            $enquiry = new Enquiry;
            $enquiry->name = $data['name'];
            $enquiry->email = $data['email'];
            $enquiry->phone = $data['phone'];
            $enquiry->subject = $data['subject'];
            $enquiry->organization = $data['organization'];
            $enquiry->comment = $data['comment'];
            $enquiry->save();

            $email = ['kartik@ycstech.in'];
            $messageData = [
                'data' => $data,
            ];
            Mail::send('emails.enquiry',$messageData,function($message) use($email){
                $message->to($email)->subject('New enquiry received from website');
            });
            return redirect()->back()->with('success_message','Form submitted successfully.');
        }
        $meta_title = 'Document Required For Mutual Fund KYC | '. config('app.name');
        return view('document_kyc',compact('meta_title'));
    }
    
    public function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LfWsV8nAAAAABFVmHxa0ewXU4kt9Fu1FyMfH2zy',
            'response' => $user_response
        );

        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    public function about(Request $request){
        $meta_title = 'About Us';
        return view('about',compact('meta_title'));
    }

    public function mutual(Request $request){
        $meta_title = 'Mutual Fund';
        return view('mutual_fund',compact('meta_title'));
    }
    public function equity(Request $request){
        $meta_title = 'Equity & Shares';
        return view('equity_&_shares',compact('meta_title'));
    }
    public function fixedDeposites(Request $request){
        $meta_title = 'Bonds & Fixed Deposites';
        return view('bonds_&_fixed_deposites',compact('meta_title'));
    }
    public function physical(Request $request){
        $meta_title = 'Physical Shares to Demat';
        return view('physical_shares',compact('meta_title'));
    }
    public function saturday(Request $request){
        $meta_title = 'Saturday School';
        return view('saturday_school',compact('meta_title'));
    }
    public function pms(Request $request){
        $meta_title = 'PMS Distribution';
        return view('pms_distribution',compact('meta_title'));
    }
    public function aif(Request $request){
        $meta_title = 'AIF Distribution';
        return view('aif_distribution',compact('meta_title'));
    }
    public function advisory(Request $request){
        $meta_title = 'Distribution of Advisory Products';
        return view('advisory_products',compact('meta_title'));
    }
    public function newsletter(Request $request){
        $meta_title = 'News Letter';
        return view('news_letter',compact('meta_title'));
    }
    public function video(Request $request){
        $meta_title = 'Arthbodh Video';
        return view('video',compact('meta_title'));
    }

    public function gallery(Request $request){
        $meta_title = 'Gallery';
        return view('gallery',compact('meta_title'));
    }
    public function blogDetail(Request $request){
        $meta_title = 'Blog Detail';
        return view('blog_detail',compact('meta_title'));
    }
    public function caseStudyDetail(Request $request){
        $meta_title = 'Case Study Detail';
        return view('case_study_detail',compact('meta_title'));
    }

    public function industryInsightsPage(Request $request){
        $reports = Industry::where('status',1)->orderBy('date','DESC')->paginate(9);
        $meta_title = 'Reports & Publications';
        return view('industry_insights',compact('meta_title','reports'));
    }

    public function clientSpreadPage(Request $request){
        $meta_title = 'Clients Spread';
        return view('clients_spread',compact('meta_title'));
    }

    public function alumni(Request $request){
        $meta_title = 'Alumni';
        return view('alumni',compact('meta_title'));
    }

  

    public function blogsListing(Request $request){
        // $blogs = Blogs::where('status',1)->orderBy('date','DESC')->paginate(9);
        $meta_title = 'Blogs';
        return view('blog_listing',compact('meta_title'));
    }
    public function modal(Request $request)
    {
        return view('modal', ['modal' => true]);
    }

    

    public function ReportPublicationsList(Request $request){
        $reports = Industry::where('status',1)->orderBy('date','DESC')->paginate(9);
        $meta_title = 'Reports & Publications';
        return view('report_publications',compact('meta_title','reports'));
    }

    public function career(Request $request){
        if($request->isMethod('post')){
            $this -> validate($request, [
                'g-recaptcha-response' => ['required', new Recaptcha()]
            ]);

            $data = $request->all();
            // dd($data);

            $enquiry = new Enquiry;
            $enquiry->name = $data['name'];
            $enquiry->email = $data['email'];
            $enquiry->phone = $data['phone'];
            $enquiry->comment = $data['comment'];
            
            if($request->hasFile('resume')) {
                $file = $request->file('resume');
                $pdf = time() .'-'. $file->getClientOriginalName();
                $destinationPath = public_path('resume/');
                $file->move($destinationPath, $pdf);
                // $career->resume=$pdf;
            }
            $enquiry->save();

            // $email = ['manoj@ycstech.in'];
            // $messageData = [
            //     'data' => $data,
            //     'resume' => $pdf,
            // ];
            // Mail::send('emails.resume-form',$messageData,function($message) use($email){
            //     $message->to($email)->subject('New job enquiry received from website');
            // });
            return redirect()->back()->with('success_message','Application submitted successfully.');
        }

        $opportunities = Opportunities::select('id','designation_name','job_description','location')->where('status',1)->paginate(8);
        $meta_title = 'Career at '. config('app.name');
        return view('career',compact('meta_title','opportunities'));
    }

    public function submitJobApp(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($data);

            // $this -> validate($request, [
            //     'g-recaptcha-response' => ['required', new Recaptcha()]
            // ]);

            $app = new JobApplication;
            $app->job_id = $data['job_id'];
            $app->name = $data['name'];
            $app->email = $data['email'];
            $app->phone = $data['phone'];
            $app->qualification = $data['qualification'];
            $app->experience = $data['experience'];
            $app->address = $data['address'];
            $app->current_ctc = $data['current_ctc'];
            $app->expect_ctc = $data['expect_ctc'];
            $app->ref_by = $data['ref_by'] ? $data['ref_by'] : null;
            $app->source = $data['source'] ? $data['source'] : null;
            
            if($request->hasFile('resume')) {
                $file = $request->file('resume');
                $pdf = time() .'-'. $file->getClientOriginalName();
                $destinationPath = public_path('assets/applications/');
                $file->move($destinationPath, $pdf);
                $app->resume=$pdf;
            }
            $app->save();

            // $email = ['manoj@ycstech.in'];
            // $messageData = [
            //     'data' => $data,
            //     'resume' => $pdf,
            // ];
            // Mail::send('emails.resume-form',$messageData,function($message) use($email){
            //     $message->to($email)->subject('New job enquiry received from website');
            // });
            return redirect()->back()->with('success_message','Application submitted successfully.');
        }
    }

    public function jobDetails(Request $request, $id){
        $job = Opportunities::find($id);
        $meta_title = $job->designation_name .' | Careers';
        return view('job_detail',compact('meta_title','job'));
    }

    public function serviceDetailPage(Request $request, $id){
        $service = Service::select('services.*','service_categories.name')
            ->leftJoin('service_categories','service_categories.id','services.service_cat_id')
            ->where('services.id',$id)
            ->first();

        $meta_title = $service->title.' | '. config('app.name');
        return view('services.service_detail',compact('meta_title','service'));
    }
    
}
