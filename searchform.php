<?php
/**
 * The searchform template file.
 * @package SongWriter
 * @since SongWriter 1.0.0
 */
?>
<form id="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="searchform-wrapper"><input type="text" value="<?php echo esc_attr(get_search_query()); ?>" name="s"
                                           id="s" placeholder="<?php esc_attr_e('Search here...', 'songwriter'); ?>"/>
        <input type="submit" class="send icon_search" name="searchsubmit"
               value="<?php echo esc_attr('&amp;#x55;'); ?>"/>
        <div class="second_logo">
            <a target="_blank" href="http://www.dhv.de"><img
                        src="https://www.dhv-jugend.de/wp-content/uploads/2016/03/dhv_logo_jugend_blau.png"/></a>
        </div>
    </div>
</form>