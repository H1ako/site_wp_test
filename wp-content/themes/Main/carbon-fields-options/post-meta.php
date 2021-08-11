<?php
if (!defined('ABSPATH')){
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Header and Footer Settings')
    ->add_tab('Header', [
        Field::make('checkbox', 'header-is-toggle', 'Show header')->set_width(25)->set_default_value(true),
        Field::make('checkbox', 'header-top-bar', 'Show header top bar')->set_width(25)->set_default_value(true),
        Field::make('checkbox', 'header-nav', 'Show header navigation menu')->set_width(25)->set_default_value(true),
        Field::make('checkbox', 'header-main', 'Show header main part')->set_width(25),
        Field::make('image', 'top_background_image', 'Background image'),
        Field::make('rich_text', 'top_title', 'Title'),
        Field::make('rich_text', 'top_subtitle', 'Subitle'),
        Field::make('text', 'top_first_btn_text', 'First button text')->set_width(50),
        Field::make('text', 'top_second_btn_text', 'Second button text')->set_width(50),
    ])
    ->add_tab('Footer', [
        Field::make('checkbox', 'footer-is-toggle', 'Show footer'),
        Field::make('image', 'footer_first_image', 'First footer image')->set_width(50),
        Field::make('image', 'footer_second_image', 'Second footer image')->set_width(50),
    ]);

Container::make('post_meta', 'Additional fields')
    ->show_on_page(43)
        ->add_tab('Video', [
            Field::make('image', 'video_background', 'Video background'),
        ])
        ->add_tab('Logistics', [
            Field::make('image', 'logistics_image', 'Logistics image'),
            Field::make( 'association', 'features', 'Features')
                ->set_types([
                    [
                        'type' => 'post',
                        'post_type' => 'feature',
                    ]
                ])
        ])
        ->add_tab('Services', [
            Field::make( 'association', 'services', 'Services')
                ->set_types([
                    [
                        'type' => 'post',
                        'post_type' => 'service',
                    ]
                ])
        ]);


Container::make('post_meta', 'Additional fields')
    ->show_on_post_type('service')
        ->add_tab('Service Info', [
            Field::make('complex', 'service_attr', 'Service Attributes')
                ->add_fields([
                    Field::make('text', 'price', 'Price')
                ])
        ]);

Container::make('post_meta', 'Additional fields')
    ->show_on_post_type('feature')
        ->add_tab('Feature Info', [
            Field::make('complex', 'feature_attr', 'Feature Attributes')
                ->add_fields([
                    Field::make('text', 'info', 'Info')
                ])
        ]);