<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Audience;
use App\Models\Background;
use App\Models\BgMemory;
use App\Models\Contract;
use App\Models\Donation;
use App\Models\Executive;
use App\Models\Founder;
use App\Models\Gallery;
use App\Models\Goal;
use App\Models\Heading;
use App\Models\Service;
use App\Models\Site;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Social;
use App\Models\Video;
use App\Models\Objective;
use App\Models\Notice;
use App\Models\Help;
use App\Models\Photo;
use App\Models\Organization;
use App\Models\Introduction;
use App\Models\Project;
use App\Models\Support;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class SiteController extends Controller
{
  public function index()
  {
    $data['sliders'] = Slider::where('status', 1)->get();
    $data['aboutUs'] = AboutUs::where('status', 1)->first();
    $data['founders'] = Founder::where('status', 1)->get();
    $data['background'] = Background::where('status', 1)->first();
    $data['bgMemories'] = BgMemory::where('status', 1)->get();
    $data['goal'] = Goal::where('status', 1)->get();
    $data['services'] = Service::where('status', 1)->get();
    $data['teams'] = Team::where('status', 1)->get();
    $data['heading'] = Heading::where('status', 1)->first();
    $data['social'] = Social::where('status', 1)->first();
    // $data['gallery'] = Gallery::where('status', 1)->get();
    $data['video'] = Video::where('status', 1)->get();
    $data['executive'] = Executive::where('status', 1)->get();
    $data['contract'] = Contract::where('status', 1)->first();
    $data['help'] = Help::where('status', 1)->get();
    $data['introduction'] = Introduction::where('status', 1)->first();
    $data['donation']= Donation::where('status',1)->first();



$data['training'] = Gallery::where('status', 1)
    ->where(function ($query) {
        $query->where('category', 'প্রশিক্ষণ')
              ->orWhere('category_en', 'Training');
    })
    ->orderBy('created_at', 'asc')
    ->take(6)
    ->get();

$data['awareness'] = Gallery::where('status', 1)
    ->where(function ($query) {
        $query->where('category', 'জনসচেতনতামূলক')
              ->orWhere('category_en', 'Public Awareness');
    })
    ->orderBy('created_at', 'asc')
    ->take(6)
    ->get();

$data['financial'] = Gallery::where('status', 1)
    ->where(function ($query) {
        $query->where('category', 'আর্থিক সহায়তা')
              ->orWhere('category_en', 'Financial Assistance');
    })
    ->orderBy('created_at', 'asc')
    ->take(6)
    ->get();

$data['allGallery'] = Gallery::where('status', 1)
    ->orderBy('created_at', 'asc')
    ->take(6)
    ->get();



$data['training_Video'] = Video::where('status', 1)
    ->where(function ($query) {
        $query->where('category', 'প্রশিক্ষণ')
              ->orWhere('category_en', 'Training');
    })
    ->orderBy('created_at', 'asc')
    ->take(6)
    ->get();

$data['awareness_Video'] = Video::where('status', 1)
    ->where(function ($query) {
        $query->where('category', 'জনসচেতনতামূলক')
              ->orWhere('category_en', 'Public Awareness');
    })
    ->orderBy('created_at', 'asc')
    ->take(6)
    ->get();

$data['financial_Video'] = Video::where('status', 1)
    ->where(function ($query) {
        $query->where('category', 'আর্থিক সহায়তা')
              ->orWhere('category_en', 'Financial Assistance');
    })
    ->orderBy('created_at', 'asc')
    ->take(6)
    ->get();

$data['allGallery_Video'] = Video::where('status', 1)
    ->orderBy('created_at', 'asc')
    ->take(6)
    ->get();


    // dd($data);
    return view('frontend.home', $data);
  }
  public function dashboard()
  {
    try {
      if (Gate::allows('super-user.index')) {

        return response()->json(['status' => 200]);
      } else {
        return  response()->json(['status' => 403, 'message' => 'Access Denied 403']);
      }
    } catch (\Throwable $e) {
      return response()->json([
        'status' => 500,
        'message' => 'Technical error!',
        'error' => $e->getMessage()
      ]);
    }
  }

  public function objective()
  {
    $data['objective'] = Objective::where('status', 1)->get();
    return view('frontend.objective', $data);
  }
  public function notice()
  {
    $data['notice'] = Notice::where('status', 1)->get();
    return view('frontend.notice', $data);
  }
  public function help()
  {
    $data['help'] = Help::where('status', 1)->get();
    $data['support'] = Support::where('status', 1)->first();
    return view('frontend.support', $data);
  }
  public function audience()
  {
    $data['audience'] = Audience::where('status', 1)->get();
    return view('frontend.population', $data);
  }

  public function advisor()
  {
    $data['advisor'] = Team::where('status', 1)->get();
    return view('frontend.advisor', $data);
  }
  public function gallery()
  {
    $data['gallery'] = Gallery::where('status', 1)->get();
    return view('frontend.gallery', $data);
  }
  public function video()
  {
    $data['video'] = Video::where('status', 1)->get();
    return view('frontend.video', $data);
  }

  public function background()
  {
    $data['background'] = BgMemory::where('status', 1)->get();
    $data['introduction'] = Introduction::where('status', 1)->first();
    return view('frontend.background', $data);
  }
  public function project()
  {

    $data['project'] = Project::where('status', 1)->first();
    return view('frontend.project', $data);
  }
  public function organization()
  {
    $data['organizations'] = Organization::where('status', 1)->with('photos')->get();
    return view('frontend.organization', $data);
  }

  public function projectArea()
  {

    $data['zone'] = Zone::where('status', 1)->get();
    return view('frontend.projectArea', $data);
  }


  public function languageSet($lang)
  {
      $availableLocales = ['en', 'bn'];

      if (in_array($lang, $availableLocales)) {
          session()->put('locale', $lang);
      }

      return redirect()->back();
  }
}
