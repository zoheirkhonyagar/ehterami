<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => false, // set false to total remove
            'description'  => 'کانون آگهی وتبلیغاتی احترامی ارائه دهنده کلیه خدمات در زمینه طراحی و گرافیک، بازاریابی و برندینگ، غرفه آرایی، چاپ کاتالوگ و بروشور، تهیه هدایای تبلیغاتی و ...', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => false, // set false to total remove
            'description' => 'کانون آگهی وتبلیغاتی احترامی ارائه دهنده کلیه خدمات در زمینه طراحی و گرافیک، بازاریابی و برندینگ، غرفه آرایی، چاپ کاتالوگ و بروشور، تهیه هدایای تبلیغاتی و ...', // set false to total remove
            'url'         => "https://ehterami.co", // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
            'locale' => 'fa_IR'
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          //'card'        => 'summary',
          //'site'        => '@LuizVinicius73',
        ],
    ],
];
