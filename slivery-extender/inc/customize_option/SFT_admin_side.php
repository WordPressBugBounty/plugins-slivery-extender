<?php
if (!defined('ABSPATH'))
    exit;

function slider_theme_section($atts) {
    ob_start();

    if (isset($atts['section'])) {
        $section = $atts['section'];

        if ($section == 'goldy_mex_featuredimage_slider' && function_exists('goldy_mex_featuredimage_slider')) {
            goldy_mex_featuredimage_slider();
        } elseif ($section == 'goldy_mex_featured_section' && function_exists('goldy_mex_featured_section')) {
            goldy_mex_featured_section();
        } elseif ($section == 'goldy_mex_our_portfolio_section' && function_exists('goldy_mex_our_portfolio_section')) {
            goldy_mex_our_portfolio_section();
        } elseif ($section == 'goldy_mex_about_section' && function_exists('goldy_mex_about_section')) {
            goldy_mex_about_section();
        } elseif ($section == 'goldy_mex_appointment_section' && function_exists('goldy_mex_appointment_section')) {
            goldy_mex_appointment_section();
        } elseif ($section == 'goldy_mex_our_team_section' && function_exists('goldy_mex_our_team_section')) {
            goldy_mex_our_team_section();
        } elseif ($section == 'goldy_mex_our_testimonial_section' && function_exists('goldy_mex_our_testimonial_section')) {
            goldy_mex_our_testimonial_section();
        } elseif ($section == 'goldy_mex_cafe_pricing_plan_section' && function_exists('goldy_mex_cafe_pricing_plan_section')) {
            goldy_mex_cafe_pricing_plan_section();
        } elseif ($section == 'goldy_mex_our_sponsors_section' && function_exists('goldy_mex_our_sponsors_section')) {
            goldy_mex_our_sponsors_section();
        } elseif ($section == 'goldy_mex_services_section' && function_exists('goldy_mex_services_section')) {
            goldy_mex_services_section();
        }
    }

    $output = ob_get_contents();
    ob_end_clean();
    return $output;
}

add_shortcode('themesection', 'slider_theme_section');
