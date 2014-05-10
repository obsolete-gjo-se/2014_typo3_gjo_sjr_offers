<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'GJO von SJR Offers',
    'description' => 'Code zum Buch "Zukunftssichere TYPO3-Extensions mit Extbase und Fluid". EXT:sjr_offers angepasst an TYPO3 6.2',
    'category' => 'example',
    'author' => 'gregory jo',
    'author_email' => 'gregor.jo@gjo-se.com',
    'author_company' => 'gjo-se',
    'shy' => '0',
    'priority' => '',
    'module' => '',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => 'uploads/tx_gjosjroffers/rte/',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '0.0.1',
    'constraints' => array(
        'depends' => array(
            'extbase' => '6.2-',
            'fluid' => '6.2-',
            'typo3' => '6.2-',

        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
);