<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\User;
use App\Models\Slider;
use App\Models\Page;
use App\Models\Service;
use App\Models\Facility;
use App\Models\News;
use App\Models\Testimonial;
use App\Models\Gallery;
use App\Models\Contact;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = [
            'branches'      => Branch::count(),
            'users'         => User::count(),
            'sliders'       => Slider::userBased()->count(),
            'pages'         => Page::userBased()->count(),
            'services'      => Service::userBased()->count(),
            'facilities'    => Facility::userBased()->count(),
            'news'          => News::userBased()->count(),
            'testimonials'  => Testimonial::userBased()->count(),
            'galleryImages' => Gallery::userBasedImage()->count(),
            'galleryVideos' => Gallery::userBasedVideo()->count(),
            'contacts'      => Contact::userBased()->count(),
        ];

        return view('admin.dashboard', compact('data'));
    }
}
