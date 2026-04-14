<?php
/**
 * Plugin Name: Gemini LearnPress Extender
 * Description: Thêm thông báo học viên, shortcode thống kê khóa học và tùy biến CSS cho LearnPress.
 * Version: 1.0
 * Author: Gemini AI
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// --- YÊU CẦU 1: THÔNG BÁO HỌC VIÊN (NOTIFICATION BAR) ---
add_action( 'wp_body_open', 'gemini_lp_notification_bar' );
function gemini_lp_notification_bar() {
    if ( is_user_logged_in() ) {
        $current_user = wp_get_current_user();
        $message = "Chào **" . esc_html( $current_user->display_name ) . "**, bạn đã sẵn sàng bắt đầu bài học hôm nay chưa?";
    } else {
        $message = "Đăng nhập để lưu tiến độ học tập!";
    }

    echo '<div id="gemini-notify-bar">' . $message . '</div>';
}

// --- YÊU CẦU 2: SHORTCODE THỐNG KÊ CHI TIẾT ---
add_shortcode( 'lp_course_info', 'gemini_lp_course_info_shortcode' );
function gemini_lp_course_info_shortcode( $atts ) {
    $atts = shortcode_atts( array( 'id' => get_the_ID() ), $atts, 'lp_course_info' );
    $course_id = $atts['id'];
    $course = learn_press_get_course( $course_id );

    if ( ! $course ) return "Không tìm thấy khóa học.";

    // 1. Số lượng bài học
    $lessons = $course->get_items( LP_LESSON_CPT );
    $count_lessons = count( $lessons );

    // 2. Tổng thời gian
    $duration = $course->get_duration();

    // 3. Trạng thái người dùng
    $user = learn_press_get_current_user();
    $status = "Chưa đăng ký";
    
    if ( $user->has_finished_course( $course_id ) ) {
        $status = "Đã hoàn thành";
    } elseif ( $user->has_enrolled_course( $course_id ) ) {
        $status = "Đã đăng ký";
    }

    $output = '<div class="lp-custom-stats">';
    $output .= '<ul>';
    $output .= '<li><strong>Số bài học:</strong> ' . $count_lessons . '</li>';
    $output .= '<li><strong>Thời lượng:</strong> ' . $duration . '</li>';
    $output .= '<li><strong>Trạng thái:</strong> <span class="status-tag">' . $status . '</span></li>';
    $output .= '</ul>';
    $output .= '</div>';

    return $output;
}

// --- YÊU CẦU 3: TÙY BIẾN STYLE (CSS) ---
add_action( 'wp_enqueue_scripts', 'gemini_lp_enqueue_styles' );
function gemini_lp_enqueue_styles() {
    wp_enqueue_style( 'gemini-lp-style', plugins_url( '/style.css', __FILE__ ) );
}