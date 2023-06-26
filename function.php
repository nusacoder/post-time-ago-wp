function post_time_ago_function() {
return sprintf( esc_html__( '%s lalu', 'nusacoder' ), human_time_diff(get_the_time ( 'U' ), current_time( 'timestamp' ) ) );
}
add_filter( 'the_time', 'post_time_ago_function' );
