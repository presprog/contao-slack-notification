<?php

$GLOBALS['TL_DCA']['tl_nc_gateway']['palettes']['slack'] = '{title_legend},title,type;{slack_legend},slack_webhook,slack_channel,slack_username,slack_icon;';

$GLOBALS['TL_DCA']['tl_nc_gateway']['fields']['slack_webhook'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_nc_gateway']['slack_webhook'],
    'inputType' => 'text',
    'eval'      => [
        'mandatory'  => true,
        'maxLength' => 255,
        'rgxp'      => 'url',
        'tl_class'  => 'w50'
    ],
    'sql'       => "VARCHAR(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_nc_gateway']['fields']['slack_channel'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_nc_gateway']['slack_channel'],
    'inputType' => 'text',
    'eval'      => [
        'maxLength' => 255,
        'tl_class'  => 'w50'
    ],
    'sql'       => "VARCHAR(255) NOT NULL default ''"
];
