<?php

use App\Models\Branch;
use App\Models\Slider;
use App\Models\Setting;
use App\Models\Menu;
use App\Models\Testimonial;

use Illuminate\Support\Arr;

use App\Models\DynamicString;


/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function branchSettings($id = null)
{
    $mainArray = branchkeys();
    foreach(Setting::branch($id)->get() as $row){
        Arr::set($mainArray, $row->key, $row->value);
    }
    return $mainArray;
}

/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function pageSettings($id)
{
    $mainArray = pagekeys();
    foreach(Setting::page($id)->get() as $row)
    {
        Arr::set($mainArray, $row->key, $row->value);
    }
    return $mainArray;
}

/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function branchList()
{
    return Branch::where('type','Sub Branch')->get();
}

/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function sliderList($id)
{
    return Slider::where([['branch_id',$id],['status','Publish']])->get();
}


/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function headerMenus($id)
{
    return Menu::where([['branch_id',$id],['type','Header']])->whereNull('parent_id')->get();
}

/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function footerMenus($id)
{
    return Menu::where([['branch_id',$id],['type','Footer']])->get();
}

/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function testimonials($id)
{
    return Testimonial::where([['branch_id',$id],['status','Publish']])->orderBy('order')->get();
}














/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function careers()
{
    return Career::where('status','Publish')->orderBy('order','asc')->get();
}

/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function toolPages($lang)
{
    return Page::whereIn('template',['Tool','Home'])->where('language_id',$lang)->get();
}

/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function hreflang($slug)
{
    $ids = Page::where('slug',$slug)->pluck('language_id');
    return Language::whereIn('id',$ids)->get();
}

/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function urlGenerate($slug, $lang)
{
    if ($lang == 1) {
        $url = $slug;
    }else{
        $language = Language::find($lang);
        $url = $language->code .'/'. $slug;
    }
    return $url;
}

/**
 * Get result of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function dynamicString($key,$lang)
{
    $checkRecord = DynamicString::where([['key',$key],['language_id',$lang]])->first();
    if ($checkRecord) {
        $value = $checkRecord->value;
    }else{
        $default = DynamicString::where([['key',$key],['language_id',1]])->first();
        $default ? $value = $default->value : $value = '';
    }
    return $value;
}

/**
 * Get responce from a third party API resource.
 *
 * @return \Illuminate\Http\Response
 */
function getApiTokenIds()
{
    $ids = array();
    foreach (ApiToken::get() as $token) {
        if ($token->limit > ($token->web_utilize + $token->app_utilize)) { $ids[] = $token->id; }
    } return $ids;
}

/**
 * Get responce from a third party API resource.
 *
 * @return \Illuminate\Http\Response
 */
function wolframalphaAPI($equation)
{
    $token = ApiToken::whereIn('id',getApiTokenIds())->inRandomOrder()->first();
    $equation = urlencode($equation);
    $response = Http::get("http://api.wolframalpha.com/v2/query?appid=". $token->code ."&input=" . $equation . "&output=json&podstate=Step-by-step+solution&podstate=Step-by-step&podstate=Show+all+steps");
    $token->increment('web_utilize');
    $result = $response->json();
    return $result['queryresult']['pods'];
}

/**
 * Get responce from a other API resource.
 *
 * @return \Illuminate\Http\Response
 */
function sympyStepAPI($variable, $equation)
{
    $responce = file_get_contents_curl("http://sympy.calculatored.com/card/intsteps?variable=" . $variable . "&expression=" . $equation);
    $responce = stripcslashes($responce);
    $responce = substr($responce, strpos($responce, "output") + 10);
    $responce = Str::replaceLast('"}', '', $responce);
    return $responce;
}

/**
 * Get responce from a other API resource.
 *
 * @return \Illuminate\Http\Response
 */
function sympyAnswerAPI($variable, $equation)
{
    $answer = file_get_contents_curl("http://sympy.calculatored.com/card/integral_alternate_fake?variable=" . $variable . "&expression=" . $equation);
    $getanswer = json_decode($answer, true);
    $responce = explode(',', $getanswer['value']);
    return $responce;
}

/**
 * Get responce from a other API resource.
 *
 * @return \Illuminate\Http\Response
 */
function sympyApproximatorAPI($variable, $expression, $digits)
{
    $responce = file_get_contents_curl("https://sympy.calculatored.com/card/approximator?variable=" . $variable . "&expression=" . $expression . "&digits=" . $digits);
    $responce = json_decode($responce, true);
    return $responce['output'];
}

/**
 * Get array of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function branchkeys()
{
    return [
        'navigation_logo'           => '',    
        'navigation_title'          => '',
        'navigation_sub_title'      => '',
        'navigation_contact_lablel' => '',
        'navigation_contact_number' => '',
        'footer_first_lable'        => '',
        'footer_second_lable'       => '',
        'footer_third_lable'        => '',
        'footer_description'        => '',
        'footer_address'            => '',
        'footer_phone_number'       => '',
        'footer_email'              => '',
        'footer_instagram_link'     => '',
        'footer_twitter_link'       => '',
        'footer_youtube_link'       => '',
        'footer_facebook_link'      => '',
        'footer_pinterest_link'     => '',
        'copyright_text'            => '',
        'copyright_link_title'      => '',
        'copyright_link'            => '',
        'google_search_console_code'=> '',
        'google_analytics_code'     => '',
        'clarity_code'              => ''
    ];
}

/**
 * Get array of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function pagekeys()
{
    return [
        'home_slider_type'            => '',
        'home_slider_autoPlay'        => '',
        'home_slider_speed'           => '',

        'home_about_first_image'      => '',    
        'home_about_second_image'     => '',
        'home_about_title'            => '',
        'home_about_sub_title'        => '',
        'home_about_contact_label'    => '',
        'home_about_contact_number'   => '',
        'home_about_stars'            => '',
        'home_about_description'      => '',

        'home_branches_title'         => '',
        'home_branches_sub_title'     => '',

        'home_sections_pageloader'    => '',
        'home_sections_scrollprogress'=> '',
        'home_sections_navigation'    => '',
        'home_sections_slider'        => '',
        'home_sections_about'         => '',
        'home_sections_branches'      => '',
        'home_sections_footer'        => '',
        'home_sections_copyright'     => '',
    ];
}