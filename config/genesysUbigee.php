<?php

return [
    'models' => [

        'country' => GenesysLite\GenesysUbigee\Models\Country::class,
        'department' => GenesysLite\GenesysUbigee\Models\Department::class,
        'province' => GenesysLite\GenesysUbigee\Models\Province::class,
        'district' => GenesysLite\GenesysUbigee\Models\District::class,


    ],

    'table_names' => [

        'countries' => 'countries',
        'departments' => 'departments',
        'provinces' => 'provinces',
        'districts' => 'districts',

    ],
];
