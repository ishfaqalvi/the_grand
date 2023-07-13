<?php

use App\Models\Branch;
use App\Models\Slider;

use App\Models\Page;
use App\Models\Menu;
use App\Models\Setting;
use App\Models\DynamicString;



/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function branchList()
{
    return Branch::get();
}

/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function sliderList()
{
    return Slider::where('status','Publish')->get();
}












/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function blogCategories()
{
    return Page::where([['template','Category'],['category_type','Blog']])->pluck('title','id');
}

/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function problemCategories()
{
    return Page::where([['template','Category'],['category_type','Problem']])->pluck('title','id');
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
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function settings($key)
{
    return Setting::get($key);
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
 * Get HTML of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function file_get_contents_curl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}