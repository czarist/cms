<?php

return [

    /*
    |--------------------------------------------------------------------------
    | English Application App Specific Resources
    |--------------------------------------------------------------------------
    */

    'category' => [
        'create' => 'Create category',
        'edit'   => 'Edit category',
        'fields' => [
            'article_count' => 'Article Count',
            'description'   => 'Description',
            'title'         => 'Category Title',
            'type'          => 'Type',
        ],
        'index'  => 'Categories',
        'show'   => 'Show category'
    ],
    'dashboard' => [
        'fields' => [
            'alexa_local'     => 'Alexa Local',
            'alexa_world'     => 'Alexa World',
            'average_time'    => 'Average Time',
            'bounce_rate'     => 'Bounce Rate',
            'browsers'        => 'Browsers',
            'chart_country'   => 'Country',
            'chart_region'    => 'Region',
            'chart_visitors'  => 'Visitors',
            'keywords'        => 'Keywords',
            'os'              => 'OS',
            'region_visitors' => 'Region Visitors',
            'total_visits'    => 'Total Visits',
            'traffic_sources' => 'Traffic Sources',
            'unique_visits'   => 'Unique Visits',
            'visitors'        => 'Visitors',
            'visits'          => 'Visits',
            'visits_today'    => 'Visits Today',
            'world_visitors'  => 'World Visitor Distribution'
        ],
        'index' => 'Dashboard'
    ],
    'elfinder' => [
        'index' => 'File Manager',
    ],
    'admin' => [
        'fields' => [
            'image' => 'Image'
        ]
    ],
    'user' => [
        'create' => 'Create user',
        'edit'   => 'Edit user',
        'fields' => [
            'email'                 => 'Email',
            'ip_address'            => 'IP',
            'logged_in_at'          => 'Login At',
            'logged_out_at'         => 'Logout At',
            'password'              => 'Password',
            'password_confirmation' => 'Password Confirm'
        ],
        'index'  => 'Users',
        'show'   => 'Show user'
    ],
    'skill' => [
        'create' => 'Create a Skills',
        'edit'   => 'Edit a Skill',
        'fields' => [
            'content'     => 'Content',
            'description' => 'Description',
            'title'       => 'Title',
            'image' => 'Image'
        ],
        'index'  => 'Skills',
        'show'   => 'Show a Skill',
    ],
    'project' => [
        'create' => 'Create a Project',
        'edit'   => 'Edit a Project',
        'fields' => [
            'content'         => 'Content',
            'description_pt' => 'Description PT',
            'description_en' => 'Description EN',
            'title'           => 'Title',
            'url'             => 'URL',
            'designer'        => 'Designer',
            'designer-url'    => 'Designer URL',
            'subtitle'        => 'Subtitle',
            'intermediary'    => 'Intermediary',
            'intermediary-url'    => 'intermediary URL',
            'plataform'    => 'Plataform',
            'hexabg'    => 'Background Color',
            'categories' => 'Categories'
        ],
        'index'  => 'Projects',
        'show'   => 'Show a Project'
    ],
    'certificate' => [
        'create' => 'Create a Certificate',
        'edit'   => 'Edit a Certificate',
        'fields' => [
            'content'     => 'Content',
            'description' => 'Description',
            'title'       => 'Title',
            'subtitle' => 'Subtitle',
            'url' => 'URL',
            'hexabg' => 'Background Image',
            'categories' => 'Categories'
        ],
        'index'  => 'Certificates',
        'show'   => 'Show a Certificate'
    ],
    'job' => [
        'create' => 'Create a Job',
        'edit'   => 'Edit a Job',
        'fields' => [
            'content'     => 'Content',
            'description_pt' => 'Description PT',
            'description_en' => 'Description EN',
            'title'       => 'Title',
            'order'       => 'Order',
            'current_company'       => 'Current Company',
            'company'       => 'Company',
            'responsibilities_pt'       => 'Responsibilities PT',
            'responsibilities_en'       => 'Responsibilities EN',

            'date_init'       => 'Date Init',
            'date_end'       => 'Date End',
            'type'           => 'Type',
            'site'           => 'Site',
        ],
        'index'  => 'Jobs',
        'show'   => 'Show a Job'
    ],
    'education' => [
        'create' => 'Create a Education',
        'edit'   => 'Edit a Education',
        'fields' => [
          'content'     => 'Content',
          'description' => 'Description',
          'university_pt'       => 'University PT',
          'university_en'       => 'University EN',
          'course_pt'       => 'Course PT',
          'course_en'       => 'Course EN',
          'title'       => 'Title',
          'status_en'       => 'Status',
          'date_init'       => 'Date Init',
          'date_end'       => 'Date End',

        ],
        'index'  => 'Education',
        'show'   => 'Show a Education'
    ]
];
