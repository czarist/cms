<?php

return [

    /*
    |--------------------------------------------------------------------------
    | English Application App Specific Resources
    |--------------------------------------------------------------------------
    */

    'article' => [
        'create' => 'Create article',
        'edit'   => 'Edit article',
        'fields' => [
            'category_id'  => 'Category',
            'content'      => 'Content',
            'description'  => 'Description',
            'published_at' => 'Published At',
            'title'        => 'Article Title'
        ],
        'index'  => 'Articles',
        'show'   => 'Show article'
    ],
    'category' => [
        'create' => 'Create category',
        'edit'   => 'Edit category',
        'fields' => [
            'article_count' => 'Article Count',
            'description'   => 'Description',
            'title'         => 'Category Title'
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
            'entrance_pages'  => 'Entrance',
            'exit_pages'      => 'Exit',
            'keywords'        => 'Keywords',
            'os'              => 'OS',
            'page_visits'     => 'Page Visits',
            'pages'           => 'Pages',
            'region_visitors' => 'Region Visitors',
            'time_pages'      => 'Time',
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
    'page' => [
        'create' => 'Create page',
        'edit'   => 'Edit page',
        'fields' => [
            'content'      => 'Content',
            'description'  => 'Description',
            'parent_id'    => 'Parent',
            'title'        => 'Title',
            'image'         => 'update'
        ],
        'index'  => 'Pages',
        'show'   => 'Show page'
    ],
    'parent' => [
        'fields' => [
            'title' => 'Parent Page',
        ]
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
    'fruit' => [
        'create' => 'Create a Fruit',
        'edit'   => 'Edit a Fruit',
        'fields' => [
            'content'     => 'Content',
            'description' => 'Description',
            'title'       => 'Title'
        ],
        'index'  => 'Fruits',
        'show'   => 'Show a Fruit'
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
            'description'     => 'Description',
            'title'           => 'Title',
            'url'             => 'URL',
            'designer'        => 'Designer',
            'designer-url'    => 'Designer URL',
            'subtitle'        => 'Subtitle',
            'intermediary'    => 'Intermediary',
            'intermediary-url'    => 'intermediary URL',
            'plataform'    => 'Plataform',
            'hexabg'    => 'Background Color'
        ],
        'index'  => 'Projects',
        'show'   => 'Show a Project'
    ]
];
