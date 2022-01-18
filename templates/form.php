<h5 class='form-title'>General Options</h5>
<!-- TITLE -->
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
        name="<?php echo esc_attr( $this->get_field_name( 'show_youtube' ) ); ?>" type='checkbox' value='show'
        <?php echo ($show_youtube == 'show') ? 'checked' : "" ?>>
    </input>

    <!-- Twitter Show -->
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'show_twitter' ) ); ?>"><?php esc_attr_e( 'Twitter:', 'follow-socials-domain' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'show_twitter' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'show_twitter' ) ); ?>" type='checkbox' value='show'
        <?php echo ($show_twitter == 'show') ? 'checked' : "" ?>>
    </input>

    <!-- Pinterest -->
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'show_pinterest' ) ); ?>"><?php esc_attr_e( 'Pinterest:', 'follow-socials-domain' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'show_pinterest' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'show_pinterest' ) ); ?>" type='checkbox' value='show'
        <?php echo ($show_pinterest == 'show') ? 'checked' : "" ?>>
    </input>

    <!-- Linkedin -->
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'show_linkedin' ) ); ?>"><?php esc_attr_e( 'Linkedin:', 'follow-socials-domain' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'show_linkedin' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'show_linkedin' ) ); ?>" type='checkbox' value='show'
        <?php echo ($show_linkedin == 'show') ? 'checked' : "" ?>>
    </input>
</p>
<!-- Display Style -->
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'full_width' ) ); ?>"><?php esc_attr_e( 'Make Full Screen :', 'follow-socials-domain' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'full_width' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'full_width' ) ); ?>" type='checkbox' value='true'
        <?php echo ($full_width == 'true') ? 'checked' : "" ?>>
    </input>
</p>

<?php
if($full_width == true){?>
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'display_style' ) ); ?>"><?php esc_attr_e( 'Display Style:', 'follow-socials-domain' ); ?></label>
    <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'display_style' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'display_style' ) ); ?>">
        <option value='columns' <?php echo ($display_style == 'columns') ? 'selected' : "" ?>> Columns </option>
        <option value='rows' <?php echo ($display_style == 'rows') ? 'selected' : "" ?>> Rows </option>
    </select>
</p>
<?php }
?>

<!-- 
	==================================================
	Youtube Options
	==================================================
 -->
<h5 class='form-title'>Youtube Options</h5>
<!-- Channel Name -->
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'channel' ) ); ?>"><?php esc_attr_e( 'Channel Name:', 'follow-socials-domain' ); ?></label>
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

<!-- Data Count -->
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'show_youtube_count' ) ); ?>"><?php esc_attr_e( 'Hide Youtube Count Data :', 'follow-socials-domain' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'show_youtube_count' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'show_youtube_count' ) ); ?>" type='checkbox' value='hidden'
        <?php echo ($show_youtube_count == 'true') ? 'checked' : "" ?>>
    </input>
</p>


<!-- Twitter -->
<h5 class='form-title'>Youtube Options</h5>

<!-- Account Name -->
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'twitter_account' ) ); ?>"><?php esc_attr_e( 'Twitter Account:', 'follow-socials-domain' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitter_account' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'twitter_account' ) ); ?>" type="text"
        value="<?php echo esc_attr( $twitter_account ); ?>">
</p>

<!-- Data Count -->
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'twitter_show_count' ) ); ?>"><?php esc_attr_e( 'Hide Twitter Count Data :', 'follow-socials-domain' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitter_show_count' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'twitter_show_count' ) ); ?>" type='checkbox' value='false'
        <?php echo ($twitter_show_count == 'false') ? 'checked' : "" ?>>
    </input>
</p>

<!-- Size -->
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'twitter_size' ) ); ?>"><?php esc_attr_e( 'Twitter Button Size:', 'follow-socials-domain' ); ?></label>
    <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitter_size' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'twitter_size' ) ); ?>">
        <option value='large' <?php echo ($twitter_size == 'large') ? 'selected' : "" ?>> Large </option>
        <option value='small' <?php echo ($twitter_size == 'small') ? 'selected' : "" ?>> Small</option>
    </select>
</p>

<!-- Screen Name -->
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'twitter_show_screen_name' ) ); ?>"><?php esc_attr_e( 'Hide Twitter Screen Name :', 'follow-socials-domain' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitter_show_screen_name' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'twitter_show_screen_name' ) ); ?>" type='checkbox'
        value='false' <?php echo ($twitter_show_screen_name == 'false') ? 'checked' : "" ?>>
    </input>
</p>

<!-- Pinterest -->
<h5 class='form-title'>Pinterest Options</h5>
<!-- Account Name -->
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'pinterest_account' ) ); ?>"><?php esc_attr_e( 'Pinterest Account:', 'follow-socials-domain' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'pinterest_account' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'pinterest_account' ) ); ?>" type="text"
        value="<?php echo esc_attr( $pinterest_account ); ?>">
</p>

<!-- Button Name -->
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'pinterest_button_name' ) ); ?>"><?php esc_attr_e( 'Pinterest Button Name:', 'follow-socials-domain' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'pinterest_button_name' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'pinterest_button_name' ) ); ?>" type="text"
        value="<?php echo esc_attr( $pinterest_button_name ); ?>">
</p>


<!-- Linkedin -->
<h5 class='form-title'>Linkedin Options</h5>
<!-- Account Name -->
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'linkedin_id' ) ); ?>"><?php esc_attr_e( 'Linkedin ID:', 'follow-socials-domain' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'linkedin_id' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'linkedin_id' ) ); ?>" type="text"
        value="<?php echo esc_attr( $linkedin_id ); ?>">
</p>
<!-- Counter Position -->
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'linkedin_counter_position' ) ); ?>"><?php esc_attr_e( 'Linkedin Counter Position:', 'follow-socials-domain' ); ?></label>
    <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'linkedin_counter_position' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'linkedin_counter_position' ) ); ?>">
        <option value='bottom' <?php echo ($linkedin_counter_position == 'bottom') ? 'selected' : "" ?>> Bottom
        </option>
        <option value='right' <?php echo ($linkedin_counter_position == 'right') ? 'selected' : "" ?>> Right</option>
    </select>
</p>

<style>
.form-title {
    width: fit-content;
    color: red !important;
    border-bottom: 1px solid black;
    margin-bottom: 0 !important;
}
</style>