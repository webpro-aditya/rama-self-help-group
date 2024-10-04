<?php

return [

    /**
     * Base URL Website
     */
    'app_url' => env('APP_URL', '127.0.0.1'),

    /**
     * Stripe Credentials
     */
    'stripe_test_mode' => env('STRIPE_TEST_MODE', true),

    'stripe_test_key' => env('STRIPE_TEST_KEY', ''),
    'stripe_test_secret' => env('STRIPE_TEST_SECRET', ''),
    
    'stripe_key' => env('STRIPE_KEY', ''),
    'stripe_secret' => env('STRIPE_SECRET', ''),

    'is_smtp_active' => env('IS_SMTP_ACTIVE', false),
    'mail_from_name' => env('MAIL_FROM_NAME', 'Auctus Growth'),
    'mail_from_email' => env('MAIL_FROM_EMAIL', 'aditya@delimp.com'),

    /**
     * Pagination records per page
     */
    'pagination_records_per_page' => env('PAGINATION_RECORDS_PER_PAGE', 10),

    /**
     * Pagination links on each side of current page
     */
    'pagination_links_each_side' => env('PAGINATION_LINKS_EACH_SIDE', 1),
];