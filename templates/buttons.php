<?php
$youtube =  '<div class="g-ytsubscribe"  data-channel="'.$instance['channel'].'" data-layout="'.$instance['layout'].'" data-theme="dark" data-count="'.$instance['show_youtube_count'].'"></div> ';

$twitter = '<a href="https://twitter.com/'.$instance['twitter_account'].'?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="'.$instance['twitter_show_count'].'" data-size="'.$instance['twitter_size'].'" data-show-screen-name="'.$instance['twitter_show_screen_name'].'">Follow @'.$instance['twitter_account'].'</a>';

$twitter_w = '  <div>

                        <a href="https://twitter.com/'.$instance['twitter_account'].'?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="'.$instance['twitter_show_count'].'" data-size="'.$instance['twitter_size'].'" data-show-screen-name="'.$instance['twitter_show_screen_name'].'">Follow @'.$instance['twitter_account'].'</a>

                </div>';


$pinterest = ' <a href="https://www.pinterest.com/'.$instance['pinterest_account'].'/" data-pin-do="buttonFollow">
                                '.$instance['pinterest_button_name'].'
                </a>';

$pinterest_w = '<div>
                        <a href="https://www.pinterest.com/'.$instance['pinterest_account'].'/" data-pin-do="buttonFollow">
                                '.$instance['pinterest_button_name'].'
                        </a>
                </div>';

$linkedin = '<script type="IN/FollowCompany" data-id="'.$instance['linkedin_id'].'" data-counter="'.$instance['linkedin_counter_position'].'"></script>';

$linkedin_w = '<div>    
                        <script type="IN/FollowCompany" data-id="'.$instance['linkedin_id'].'" data-counter="'.$instance['linkedin_counter_position'].'"></script>
                </div>';


$inline = "<div class='flexer'> $youtube $twitter $pinterest $linkedin </div>"
?>

<style>
.flexer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 80vw !important;
}
</style>