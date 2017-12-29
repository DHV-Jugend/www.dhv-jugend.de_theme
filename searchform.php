<form id="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="searchform-wrapper"><input type="text" value="<?php echo esc_attr(get_search_query()); ?>" name="s"
                                           id="s" placeholder="<?php esc_attr_e('Search here...', 'songwriter'); ?>"/>
        <input type="submit" class="send icon_search" name="searchsubmit"
               value="<?php echo esc_attr('&amp;#x55;'); ?>"/>
        <div class="second_logo">
            <a target="_blank" href="https://www.dhv.de">
                <img src="<?php echo trailingslashit(get_stylesheet_directory_uri()); ?>assets/img/dhv_logo_blau.png"/>
            </a>
        </div>
    </div>
</form>