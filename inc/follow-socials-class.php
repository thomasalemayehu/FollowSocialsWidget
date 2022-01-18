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
	   	// echo $youtube;
		// echo $twitter;
		// echo $pinterest;
		// echo $linkedin;

		echo "Hey".$instance['show_youtube'];

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
		$show_youtube = ! empty( $instance['show_youtube'] ) ? $instance['show_youtube'] : esc_html__( 'yes', 'follow-socials-domain' );




		/*
			==================================================
			Youtube Options
			==================================================
		*/
        $channel = ! empty( $instance['channel'] ) ? $instance['channel'] : esc_html__( 'GoogleDevelopers', 'follow-socials-domain' );
        $layout = ! empty( $instance['layout'] ) ? $instance['layout'] : esc_html__( 'default', 'follow-socials-domain' );
        $theme = ! empty( $instance['theme'] ) ? $instance['theme'] : esc_html__( 'default', 'follow-socials-domain' );
        
		?>

<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'follow-socials-domain' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text"
        value="<?php echo esc_attr( $title ); ?>">
</p>

<!-- 
	==================================================
	General Options
	==================================================
 -->
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'show_youtube' ) ); ?>"><?php esc_attr_e( 'Youtube:', 'follow-socials-domain' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'show_youtube' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'show_youtube' ) ); ?>" type="checkbox" id="1" name="Youtube"
        value="1">
</p>

<!-- 
	==================================================
	Youtube Options
	==================================================
 -->
<!-- Channel Name -->
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'channel' ) ); ?>"><?php esc_attr_e( 'Channel:', 'follow-socials-domain' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'channel' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'channel' ) ); ?>" type="text"
        value="<?php echo esc_attr( $channel ); ?>">
</p>

<!-- Layout Type-->
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'layout' ) ); ?>"><?php esc_attr_e( 'Layout:', 'follow-socials-domain' ); ?></label>
    <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'layout' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'layout' ) ); ?>">
        <option value='default' <?php echo ($layout == 'default') ? 'selected' : "" ?>> Default </option>
        <option value='full' <?php echo ($layout == 'full') ? 'selected' : "" ?>> Full </option>
    </select>
</p>

<!-- Theme Type -->
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'theme' ) ); ?>"><?php esc_attr_e( 'Theme:', 'follow-socials-domain' ); ?></label>
    <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'theme' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'theme' ) ); ?>">
        <option value='default' <?php echo ($layout == 'default') ? 'selected' : "" ?>> Default </option>
        <option value='dark' <?php echo ($layout == 'dark') ? 'selected' : "" ?>> Dark </option>
    </select>
</p>
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


		
		/*
			==================================================
			Youtube Options
			==================================================
		*/
        $instance['channel'] = ( ! empty( $new_instance['channel'] ) ) ? sanitize_text_field( $new_instance['channel'] ) : '';
        $instance['layout'] = ( ! empty( $new_instance['layout'] ) ) ? sanitize_text_field( $new_instance['layout'] ) : '';
        $instance['theme'] = ( ! empty( $new_instance['theme'] ) ) ? sanitize_text_field( $new_instance['theme'] ) : '';
        
		return $instance;
	}

} // class Foo_Widget
?>