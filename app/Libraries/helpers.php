<?php

use App\Models\Branch;
use App\Models\Slider;
use App\Models\Setting;
use App\Models\Menu;
use App\Models\Testimonial;
use App\Models\Category;
use App\Models\Question;
use App\Models\Gallery;

use Illuminate\Support\Arr;

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
    return Menu::userBasedHeader()->whereNull('parent_id')->get();
}

/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function footerMenus($id)
{
    return Menu::userBasedFooter()->get();
}

/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function categoryList($id)
{
    return Category::where([['branch_id',$id],['status','Publish']])->orderBy('order')->get();
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
function questions($id)
{
    return Question::where([['branch_id',$id],['status','Publish']])->orderBy('order')->get();
}

/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function images($id)
{
    return Gallery::where([['type','Image'],['category_id',$id]])->get();
}

/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function videos($id)
{
    return Gallery::where([['type','Video'],['category_id',$id]])->get();
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

        'home_category_title'         => '',
        'home_category_sub_title'     => '',

        'home_service_title'          => '',
        'home_service_sub_title'      => '',

        'home_booking_bg_image'       => '',
        'home_booking_title'          => '',
        'home_booking_sub_title'      => '',
        'home_booking_card_title'     => '',
        'home_booking_card_sub_title' => '',
        'home_booking_card_btn_title' => '',
        'home_booking_card_btn_url'   => '',
        'home_booking_card_desc'      => '',

        'home_facilities_title'       => '',
        'home_facilities_sub_title'   => '',

        'home_news_title'             => '',
        'home_news_sub_title'         => '',

        'home_testimonial_bg_image'   => '',
        'home_testimonial_title'      => '',
        'home_testimonial_sub_title'  => '',

        'home_contact_us_title'             => '',
        'home_contact_us_sub_title'         => '',
        'home_contact_us_btn_title'         => '',
        'home_contact_us_btn_url'           => '',
        'home_contact_us_desc'              => '',
        'home_contact_us_card1_image'       => '',
        'home_contact_us_card1_title'       => '',
        'home_contact_us_card1_phone_title' => '',
        'home_contact_us_card1_phone'       => '',
        'home_contact_us_card1_desc'        => '',
        'home_contact_us_card2_image'       => '',
        'home_contact_us_card2_title'       => '',
        'home_contact_us_card2_btn_title'   => '',
        'home_contact_us_card2_btn_url'     => '',
        'home_contact_us_card2_desc'        => '',

        'home_sections_pageloader'    => '',
        'home_sections_scrollprogress'=> '',
        'home_sections_navigation'    => '',
        'home_sections_slider'        => '',
        'home_sections_about'         => '',
        'home_sections_branches'      => '',
        'home_sections_category'      => '',
        'home_sections_service'       => '',
        'home_sections_booking'       => '',
        'home_sections_facilities'    => '',
        'home_sections_news'          => '',
        'home_sections_testimonial'   => '',
        'home_sections_contact_us'   => '',
        'home_sections_footer'        => '',
        'home_sections_copyright'     => '',




        'faq_banner_bg_image'       => '',
        'faq_banner_heading'        => '',
        'faq_banner_sub_heading'    => '',

        'faq_testimonial_bg_image'  => '',
        'faq_testimonial_title'     => '',
        'faq_testimonial_sub_title' => '',

        'faq_contact_us_title'             => '',
        'faq_contact_us_sub_title'         => '',
        'faq_contact_us_btn_title'         => '',
        'faq_contact_us_btn_url'           => '',
        'faq_contact_us_desc'              => '',
        'faq_contact_us_card1_image'       => '',
        'faq_contact_us_card1_title'       => '',
        'faq_contact_us_card1_phone_title' => '',
        'faq_contact_us_card1_phone'       => '',
        'faq_contact_us_card1_desc'        => '',
        'faq_contact_us_card2_image'       => '',
        'faq_contact_us_card2_title'       => '',
        'faq_contact_us_card2_btn_title'   => '',
        'faq_contact_us_card2_btn_url'     => '',
        'faq_contact_us_card2_desc'        => '',

        'faq_sections_pageloader'    => '',
        'faq_sections_scrollprogress'=> '',
        'faq_sections_navigation'    => '',
        'faq_sections_banner'        => '',
        'faq_sections_questions'         => '',
        'faq_sections_testimonial'      => '',
        'faq_sections_contact_us'   => '',
        'faq_sections_footer'        => '',
        'faq_sections_copyright'     => '',





        'contact_banner_bg_image'       => '',
        'contact_banner_heading'        => '',
        'contact_banner_sub_heading'    => '',

        'contact_contactUs_title'  => '',
        'contact_contactUs_desc'     => '',
        'contact_contactUs_phone_label' => '',
        'contact_contactUs_phone_number' => '',
        'contact_contactUs_email_label' => '',
        'contact_contactUs_email' => '',
        'contact_contactUs_address_label' => '',
        'contact_contactUs_address' => '',

        'contact_form_title' => '',
        'contact_form_btn_title' => '',
        'contact_form_palceholder_name' => '',
        'contact_form_palceholder_email' => '',
        'contact_form_palceholder_number' => '',
        'contact_form_palceholder_subject' => '',
        'contact_form_palceholder_message' => '',
        'contact_form_return_message' => '',

        'contact_google_map_url' => '',

        'contact_booking_bg_image'       => '',
        'contact_booking_title'          => '',
        'contact_booking_sub_title'      => '',
        'contact_booking_card_title'     => '',
        'contact_booking_card_sub_title' => '',
        'contact_booking_card_btn_title' => '',
        'contact_booking_card_btn_url'   => '',
        'contact_booking_card_desc'      => '',

        'contact_sections_pageloader'    => '',
        'contact_sections_scrollprogress'=> '',
        'contact_sections_navigation'    => '',
        'contact_sections_banner'        => '',
        'contact_sections_contactUs'         => '',
        'contact_sections_form'      => '',
        'contact_sections_map'      => '',
        'contact_sections_booking'   => '',
        'contact_sections_footer'        => '',
        'contact_sections_copyright'     => '',



        'img_banner_bg_image'       => '',
        'img_banner_heading'        => '',
        'img_banner_sub_heading'    => '',

        'img_image_heading'        => '',
        'img_image_sub_heading'    => '',

        'img_testimonial_bg_image'  => '',
        'img_testimonial_title'     => '',
        'img_testimonial_sub_title' => '',

        'img_contact_us_title'             => '',
        'img_contact_us_sub_title'         => '',
        'img_contact_us_btn_title'         => '',
        'img_contact_us_btn_url'           => '',
        'img_contact_us_desc'              => '',
        'img_contact_us_card1_image'       => '',
        'img_contact_us_card1_title'       => '',
        'img_contact_us_card1_phone_title' => '',
        'img_contact_us_card1_phone'       => '',
        'img_contact_us_card1_desc'        => '',
        'img_contact_us_card2_image'       => '',
        'img_contact_us_card2_title'       => '',
        'img_contact_us_card2_btn_title'   => '',
        'img_contact_us_card2_btn_url'     => '',
        'img_contact_us_card2_desc'        => '',

        'img_sections_pageloader'    => '',
        'img_sections_scrollprogress'=> '',
        'img_sections_navigation'    => '',
        'img_sections_banner'        => '',
        'img_sections_images'        => '',
        'img_sections_testimonial'   => '',
        'img_sections_contact_us'    => '',
        'img_sections_footer'        => '',
        'img_sections_copyright'     => '',

        'video_banner_bg_image'       => '',
        'video_banner_heading'        => '',
        'video_banner_sub_heading'    => '',

        'video_videos_heading'        => '',
        'video_videos_sub_heading'    => '',

        'video_testimonial_bg_image'  => '',
        'video_testimonial_title'     => '',
        'video_testimonial_sub_title' => '',

        'video_contact_us_title'             => '',
        'video_contact_us_sub_title'         => '',
        'video_contact_us_btn_title'         => '',
        'video_contact_us_btn_url'           => '',
        'video_contact_us_desc'              => '',
        'video_contact_us_card1_image'       => '',
        'video_contact_us_card1_title'       => '',
        'video_contact_us_card1_phone_title' => '',
        'video_contact_us_card1_phone'       => '',
        'video_contact_us_card1_desc'        => '',
        'video_contact_us_card2_image'       => '',
        'video_contact_us_card2_title'       => '',
        'video_contact_us_card2_btn_title'   => '',
        'video_contact_us_card2_btn_url'     => '',
        'video_contact_us_card2_desc'        => '',

        'video_sections_pageloader'    => '',
        'video_sections_scrollprogress'=> '',
        'video_sections_navigation'    => '',
        'video_sections_banner'        => '',
        'video_sections_videos'        => '',
        'video_sections_testimonial'   => '',
        'video_sections_contact_us'    => '',
        'video_sections_footer'        => '',
        'video_sections_copyright'     => '',

    ];
}