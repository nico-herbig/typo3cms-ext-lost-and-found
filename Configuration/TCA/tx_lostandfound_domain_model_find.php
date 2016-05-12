<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:lost_and_found/Resources/Private/Language/locallang_tca.xlf:domain_model_find',
        'label' => 'number',
        'label_alt' => 'name',
        'label_alt_force' => true,
        'iconfile' => 'EXT:lost_and_found/Resources/Public/Backend/Icons/tx_lostandfound_domain_model_find.svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'origUid' => 't3_origuid',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'number, name, date_of_finding, place_of_finding',
        'dividers2tabs' => 1,
        /* PROTECTED REGION ID(tca.php.own.ctrl.section.code._16_9_8a7027a_1297194790786_915555_1655) ENABLED START */
        'default_sortby' => 'ORDER BY number',
        /* PROTECTED REGION END */
    ],
    'interface' => [
        'showRecordFieldList' => 'number, name, date_of_finding, place_of_finding, category',
        /* PROTECTED REGION ID(tca.php.own.interface.section.code._16_9_8a7027a_1297194790786_915555_1655) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'default' => '0',
            ],
        ],
        'number' => [
            'exclude' => false,
            'label' => 'LLL:EXT:lost_and_found/Resources/Private/Language/locallang_tca.xlf:domain_model_find.number',
            'config' => [
                'type' => 'input',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._16_9_8a7027a_1297194790786_915555_1655._17_0_6_8a7027a_1371151660454_327526_2590) ENABLED START */
                'size' => 10,
                'max' => 20,
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._16_9_8a7027a_1297194790786_915555_1655._17_0_6_8a7027a_1371151660454_327526_2590) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:lost_and_found/Resources/Private/Language/locallang_tca.xlf:domain_model_find.name',
            'config' => [
                'type' => 'input',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._16_9_8a7027a_1297194790786_915555_1655._16_9_8a7027a_1297194882955_681374_1735) ENABLED START */
                'size' => 48,
                'max' => 255,
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._16_9_8a7027a_1297194790786_915555_1655._16_9_8a7027a_1297194882955_681374_1735) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'date_of_finding' => [
            'exclude' => false,
            'label' => 'LLL:EXT:lost_and_found/Resources/Private/Language/locallang_tca.xlf:domain_model_find.date_of_finding',
            'config' => [
                'type' => 'input',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._16_9_8a7027a_1297194790786_915555_1655._16_9_8a7027a_1297194886910_832299_1741) ENABLED START */
                'size' => 10,
                'eval' => 'required, date',
                'default' => mktime(0, 0, 0, date('m'), date('d'), date('Y')),
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._16_9_8a7027a_1297194790786_915555_1655._16_9_8a7027a_1297194886910_832299_1741) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'place_of_finding' => [
            'exclude' => false,
            'label' => 'LLL:EXT:lost_and_found/Resources/Private/Language/locallang_tca.xlf:domain_model_find.place_of_finding',
            'config' => [
                'type' => 'input',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._16_9_8a7027a_1297194790786_915555_1655._17_0_6_8a7027a_1371633069778_994285_2062) ENABLED START */
                'size' => 48,
                'max' => 255,
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._16_9_8a7027a_1297194790786_915555_1655._17_0_6_8a7027a_1371633069778_994285_2062) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'category' => [
            'exclude' => false,
            'label' => 'LLL:EXT:lost_and_found/Resources/Private/Language/locallang_tca.xlf:domain_model_find.category',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_lostandfound_domain_model_category',
                'minitems' => 1,
                'maxitems' => 1,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._16_9_8a7027a_1297194790786_915555_1655._16_9_8a7027a_1297195352189_179879_2445) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._16_9_8a7027a_1297194790786_915555_1655._16_9_8a7027a_1297195352189_179879_2445) ENABLED START */
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.columns.section.code._16_9_8a7027a_1297194790786_915555_1655) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, number, name, date_of_finding, place_of_finding, category',
            /* PROTECTED REGION ID(tca.php.own.types.section.type.code._16_9_8a7027a_1297194790786_915555_1655) ENABLED START */
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.types.section.code._16_9_8a7027a_1297194790786_915555_1655) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'palettes' => [
        /* PROTECTED REGION ID(tca.php.own.palettes.section.code._16_9_8a7027a_1297194790786_915555_1655) ENABLED START */
        /* PROTECTED REGION END */
    ],
    /* PROTECTED REGION ID(tca.php.own.code._16_9_8a7027a_1297194790786_915555_1655) ENABLED START */
    /* PROTECTED REGION END */
];
