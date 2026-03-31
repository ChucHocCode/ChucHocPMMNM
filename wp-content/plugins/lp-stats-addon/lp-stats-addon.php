<?php
/*
Plugin Name: LearnPress Stats Dashboard
Plugin URI: https://example.com
Description: Hiển thị thống kê LearnPress trong Dashboard và ngoài Frontend bằng shortcode.
Version: 1.0
Author: Your Name
Author URI: https://example.com
License: GPL2
*/

// Ngăn truy cập trực tiếp
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Hàm lấy thống kê
function lp_stats_get_data() {
    global $wpdb;

    $stats = array();

    // Tổng số khóa học
    $stats['total_courses'] = $wpdb->get_var("
        SELECT COUNT(*) 
        FROM {$wpdb->prefix}posts 
        WHERE post_type='lp_course' AND post_status='publish'
    ");

    // Tổng số học viên đã đăng ký
    $stats['total_students'] = $wpdb->get_var("
        SELECT COUNT(DISTINCT user_id) 
        FROM {$wpdb->prefix}learnpress_user_items 
        WHERE item_type='lp_course'
    ");

    // Số lượng khóa học đã hoàn thành
    $stats['completed_courses'] = $wpdb->get_var("
        SELECT COUNT(*) 
        FROM {$wpdb->prefix}learnpress_user_items 
        WHERE status='completed' AND item_type='lp_course'
    ");

    return $stats;
}

// Hiển thị trong Dashboard
function lp_stats_add_dashboard_widget() {
    wp_add_dashboard_widget('lp_stats_widget', 'LearnPress Stats', 'lp_stats_dashboard_widget_display');
}
add_action('wp_dashboard_setup', 'lp_stats_add_dashboard_widget');

function lp_stats_dashboard_widget_display() {
    $stats = lp_stats_get_data();
    echo "<p><strong>Tổng số khóa học:</strong> {$stats['total_courses']}</p>";
    echo "<p><strong>Tổng số học viên:</strong> {$stats['total_students']}</p>";
    echo "<p><strong>Khóa học hoàn thành:</strong> {$stats['completed_courses']}</p>";
}

// Shortcode hiển thị ngoài Frontend
function lp_stats_shortcode() {
    $stats = lp_stats_get_data();
    return "<div class='lp-stats'>
                <p><strong>Tổng số khóa học:</strong> {$stats['total_courses']}</p>
                <p><strong>Tổng số học viên:</strong> {$stats['total_students']}</p>
                <p><strong>Khóa học hoàn thành:</strong> {$stats['completed_courses']}</p>
            </div>";
}
add_shortcode('lp_total_stats', 'lp_stats_shortcode');
