<?php



return [
    'Account' => [
        'Contact' => [
            'relationship' => 'many to many',
            'module_name' => 'contact',
            'function_name' => 'contacts',
            'relationship_name' => 'contact_id',
            'table_name' => 'account_contact'
        ],
        'Project' => [
            'relationship' => 'many to many',
            'module_name' => 'project',
            'function_name' => 'projects',
            'table_name' => 'account_project'
        ],

        'relationship' => 'many to many',
        'module_name' => 'account',

    ],


    'Contact' => [
        'Account' => [
            'relationship' => 'many to many',
            'module_name' => 'contact',
            'function_name' => 'accounts',
            'table_name' => 'account_contact'
        ],
        // 'relationship' => 'many to many',
        // 'module_name' => 'contact'
    ],


    'User' => [
        'Project' => [
            'relationship' => 'many to many',
            'module_name' => 'project',
            'function_name' => 'Projects',
            'table_name' => 'project_user'
        ],
        'relationship' => 'many to many',
        'module_name' => 'user'
    ],


    'Project' => [
        'User' => [
            'relationship' => 'many to many',
            'module_name' => 'user',
            'function_name' => 'Users',
            'table_name' => 'project_user'
        ],
        'Account' => [
            'relationship' => 'many to many',
            'module_name' => 'contact',
            'function_name' => 'accounts',
            'table_name' => 'account_project'
        ],

        'relationship' => 'many to many',
        'module_name' => 'project'
    ]

];