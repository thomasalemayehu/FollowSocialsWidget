<?php


/**
 * Adds Follow_Socials_Widget widget.
 */
class Follow_Socials_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'follow-socials-widget', // Base ID
			esc_html__( 'Follow Socials', 'follow-socials-domain' ), // Name
			array( 'description' => esc_html__( 'A Socials Widget', 'follow-socials-domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {

        // Before Widget
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
        
		// echo esc_html__( 'Hello, World!', 'follow-socials-domain' );
       

		require_once(WP_PLUGIN_DIR."/follow-socials/templates/buttons.php");
	   	if($instance['display_style'] == 'columns'){
				if($instance['show_youtube'] == 'show'){
					echo $youtube;
				}

				if($instance['show_twitter'] == 'show'){
			   		echo $twitter_w;
		   		}
				if($instance['show_pinterest'] == 'show'){
			   		echo $pinterest_w;
		   		}
				if($instance['show_linkedin'] == 'show'){
			   		echo $linkedin;
				}
		}else{
			echo $inline;
		}
		
		


        // After Widget
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Follow Socials', 'follow-socials-domain' );

		/*
			==================================================
			General Options
			==================================================
		*/
		$show_youtube = ! empty( $instance['show_youtube'] ) ? $instance['show_youtube'] : esc_html__( 'show', 'follow-socials-domain' );
		$show_twitter= ! empty( $instance['show_twitter'] ) ? $instance['show_twitter'] : esc_html__( 'show', 'follow-socials-domain' );
		$show_pinterest = ! empty( $instance['show_pinterest'] ) ? $instance['show_pinterest'] : esc_html__( 'show', 'follow-socials-domain' );
		$show_linkedin = ! empty( $instance['show_linkedin'] ) ? $instance['show_linkedin'] : esc_html__( 'show', 'follow-socials-domain' );
		$full_width = ! empty( $instance['full_width'] ) ? $instance['full_width'] : esc_html__( 'false', 'follow-socials-domain' );
		$display_style = empty( $instance['display_style'] ) ? $instance['display_style'] : esc_html__( 'columns', 'follow-socials-domain' );



		/*
			==================================================
			Youtube Options
			==================================================
		*/
        $channel = ! empty( $instance['channel'] ) ? $instance['channel'] : esc_html__( 'GoogleDevelopers', 'follow-socials-domain' );
        $layout = ! empty( $instance['layout'] ) ? $instance['layout'] : esc_html__( 'default', 'follow-socials-domain' );
		$show_youtube_count = ! empty( $instance['layout'] ) ? $instance['show_youtube_count'] : esc_html__( 'default', 'follow-socials-domain' );

		/*
			==================================================
			Twitter Options
			==================================================
		*/
		$twitter_account = ! empty( $instance['twitter_account'] ) ? $instance['twitter_account'] : esc_html__( 'googledevs', 'follow-socials-domain' );
		$twitter_show_count = ! empty( $instance['show_twitter_count'] ) ? $instance['show_twitter_count'] : esc_html__( 'true', 'follow-socials-domain' );
		$twitter_size = ! empty( $instance['twitter_size'] ) ? $instance['twitter_size'] : esc_html__( 'large', 'follow-socials-domain' );
		$twitter_show_screen_name = ! empty( $instance['show_twitter_screen_name'] ) ? $instance['show_twitter_screen_name'] : esc_html__( 'true', 'follow-socials-domain' );

		/*
			==================================================
			Pinterest Options
			==================================================
		*/
		$pinterest_account = ! empty( $instance['pinterest'] ) ? $instance['pinterest'] : esc_html__( 'Google', 'follow-socials-domain' );
		$pinterest_button_name = ! empty( $instance['pinterest_button_name'] ) ? $instance['pinterest_button_name'] : esc_html__( 'Follow Me', 'follow-socials-domain' );

		/*
			==================================================
			LinkedIn Options
			==================================================
		*/
		$linkedin_id = ! empty( $instance['linkedin_id'] ) ? $instance['linkedin_id'] : esc_html__( '0000', 'follow-socials-domain' );
		$linkedin_counter_position = ! empty( $instance['linkedin_counter_position'] ) ? $instance['linkedin_counter_position'] : esc_html__( 'bottom', 'follow-socials-domain' );
		
        
		?>

<?php
include ( WP_PLUGIN_DIR."/follow-socials/templates/form.php" );
?>



<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		/*
			==================================================
			General Options
			==================================================
		*/

		$instance['show_youtube'] = ( ! empty( $new_instance['show_youtube'] ) ) ? sanitize_text_field( $new_instance['show_youtube'] ) : '';
		$instance['show_twitter'] = ( ! empty( $new_instance['show_twitter'] ) ) ? sanitize_text_field( $new_instance['show_twitter'] ) : '';
		$instance['show_pinterest'] = ( ! empty( $new_instance['show_pinterest'] ) ) ? sanitize_text_field( $new_instance['show_pinterest'] ) : '';
		$instance['show_linkedin'] = ( ! empty( $new_instance['show_linkedin'] ) ) ? sanitize_text_field( $new_instance['show_linkedin'] ) : '';
		$instance['display_style'] = ( ! empty( $new_instance['display_style'] ) ) ? sanitize_text_field( $new_instance['display_style'] ) : '';
		$instance['full_width'] = ( ! empty( $new_instance['full_width'] ) ) ? sanitize_text_field( $new_instance['display_style'] ) : '';

		
		
		/*
			==================================================
			Youtube Options
			==================================================
		*/
        $instance['channel'] = ( ! empty( $new_instance['channel'] ) ) ? sanitize_text_field( $new_instance['channel'] ) : '';
        $instance['layout'] = ( ! empty( $new_instance['layout'] ) ) ? sanitize_text_field( $new_instance['layout'] ) : '';
		$instance['show_youtube_count'] = ( ! empty( $new_instance['show_youtube_count'] ) ) ? sanitize_text_field( $new_instance['show_youtube_count'] ) : '';


		/*
			==================================================
			Twitter Options
			==================================================
		*/
		$instance['twitter_account'] =  ( ! empty( $new_instance['twitter_account'] ) ) ? sanitize_text_field( $new_instance['twitter_account'] ) : '';
		$instance['twitter_show_count'] = ( ! empty( $new_instance['twitter_show_count'] ) ) ? sanitize_text_field( $new_instance['twitter_show_count'] ) : '';
		$instance['twitter_size'] = ( ! empty( $new_instance['twitter_size'] ) ) ? sanitize_text_field( $new_instance['twitter_size'] ) : '';
		$instance['twitter_show_screen_name'] = ( ! empty( $new_instance['twitter_show_screen_name'] ) ) ? sanitize_text_field( $new_instance['twitter_show_screen_name'] ) : '';

		/*
			==================================================
			Pinterest Options
			==================================================
		*/
		$instance['pinterest_account'] =  ( ! empty( $new_instance['pinterest_account'] ) ) ? sanitize_text_field( $new_instance['pinterest_account'] ) : '';
		$instance['pinterest_button_name'] = ( ! empty( $new_instance['pinterest_button_name'] ) ) ? sanitize_text_field( $new_instance['pinterest_button_name'] ) : '';

		/*
			==================================================
			LinkedIn Options
			==================================================
		*/
		$instance['linkedin_id'] =  ( ! empty( $new_instance['linkedin_id'] ) ) ? sanitize_text_field( $new_instance['linkedin_id'] ) : '';
		$instance['linkedin_counter_position'] = ( ! empty( $new_instance['linkedin_counter_position'] ) ) ? sanitize_text_field( $new_instance['linkedin_counter_position'] ) : '';
      
        
		return $instance;
	}

} // class Foo_Widget
?>