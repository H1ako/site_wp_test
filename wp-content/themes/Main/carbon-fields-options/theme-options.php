<?php
if (!defined('ABSPATH')){
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Container::make('theme_options', __('Theme Options'))
// ->add_fields([
//     Field::make('text', 'crb_text', 'Text Field'),
// ]);

Container::make('theme_options', 'Site Settings')
    ->add_tab('Common settings', [
        Field::make('image', 'site_logo', 'Logo'),
        Field::make('media_gallery', 'site_partners', 'Partners')->set_type(['image']),
    ]);