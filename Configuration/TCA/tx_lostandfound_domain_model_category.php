<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:lost_and_found/Resources/Private/Language/locallang_tca.xlf:domain_model_category',
        'label' => 'name',
        'iconfile' => 'EXT:lost_and_found/Resources/Public/Backend/Icons/tx_lostandfound_domain_model_category.svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'origUid' => 't3_origuid',
        'searchFields' => 'icon, name',
        'dividers2tabs' => 1,
        /* PROTECTED REGION ID(tca.php.own.ctrl.section.code._16_9_8a7027a_1297194795235_681189_1679) ENABLED START */
        'default_sortby' => 'ORDER BY name',
        /* PROTECTED REGION END */
    ],
    'interface' => [
        'showRecordFieldList' => 'icon, name',
        /* PROTECTED REGION ID(tca.php.own.interface.section.code._16_9_8a7027a_1297194795235_681189_1679) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'columns' => [
        'icon' => [
            'exclude' => false,
            'label' => 'LLL:EXT:lost_and_found/Resources/Private/Language/locallang_tca.xlf:domain_model_category.icon',
            'config' => [
                'type' => 'input',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._16_9_8a7027a_1297194795235_681189_1679._18_0_3_16b8041b_1427122821072_480002_5689) ENABLED START */
                'size' => 10,
                'max' => 20,
                'eval' => 'trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._16_9_8a7027a_1297194795235_681189_1679._18_0_3_16b8041b_1427122821072_480002_5689) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:lost_and_found/Resources/Private/Language/locallang_tca.xlf:domain_model_category.name',
            'config' => [
                'type' => 'input',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._16_9_8a7027a_1297194795235_681189_1679._16_9_8a7027a_1297194910826_608649_1757) ENABLED START */
                'size' => 48,
                'max' => 255,
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._16_9_8a7027a_1297194795235_681189_1679._16_9_8a7027a_1297194910826_608649_1757) ENABLED START */
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.columns.section.code._16_9_8a7027a_1297194795235_681189_1679) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'types' => [
        '0' => [
            'showitem' => 'icon, name',
            /* PROTECTED REGION ID(tca.php.own.types.section.type.code._16_9_8a7027a_1297194795235_681189_1679) ENABLED START */
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.types.section.code._16_9_8a7027a_1297194795235_681189_1679) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'palettes' => [
        /* PROTECTED REGION ID(tca.php.own.palettes.section.code._16_9_8a7027a_1297194795235_681189_1679) ENABLED START */
        /* PROTECTED REGION END */
    ],
    /* PROTECTED REGION ID(tca.php.own.code._16_9_8a7027a_1297194795235_681189_1679) ENABLED START */
    /* PROTECTED REGION END */
];
