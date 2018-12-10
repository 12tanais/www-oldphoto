<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">



    <label style="margin-bottom: 0;    padding-right: 7px;">
        <input type="search" class="search-field form-control" style="padding: .23rem .75rem;"
               placeholder="<?php echo esc_attr_x('Найти &hellip;', 'placeholder', 'wp-bootstrap-starter'); ?>"
               value="<?php echo esc_attr(get_search_query()); ?>" name="s"
               title="<?php _ex('Search for:', 'label', 'wp-bootstrap-starter'); ?>">
    </label>
    <input type="submit" class="search-submit btn btn-default" style="margin-bottom: 3.2px;     background: transparent;
    background-color: #8b6c42;
    padding: 8px 25px 8px 25px;
    border: 1px solid #6E5A37;
    font: 400 13px Lato, sans-serif;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 0.15em;" value="<?php echo esc_attr_x('Поиск', 'submit button', 'wp-bootstrap-starter'); ?>">
</form>



