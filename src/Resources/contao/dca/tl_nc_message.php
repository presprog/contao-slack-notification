<?php

$GLOBALS['TL_DCA']['tl_nc_message']['palettes']['slack'] = '{title_legend},title,gateway;{languages_legend},languages;{expert_legend:hide},slack_username,slack_channel;{publish_legend},published';

$GLOBALS['TL_DCA']['tl_nc_message']['fields']['slack_username'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_nc_message']['slack_username'],
    'inputType' => 'text',
    'eval'      => ['tl_class' => 'w50', 'maxLength' => 255],
    'sql'       => "VARCHAR(255) NOT NULL DEFAULT ''"
];

//$GLOBALS['TL_DCA']['tl_nc_message']['fields']['slack_icon'] = [
//    'label'     => &$GLOBALS['TL_LANG']['tl_nc_message']['slack_icon'],
//    'inputType' => 'text',
//    'eval'      => ['tl_class' => 'w50', 'maxLength' => 255],
//    'sql'       => "VARCHAR(255) NOT NULL DEFAULT ''"
//];

$GLOBALS['TL_DCA']['tl_nc_message']['fields']['slack_channel'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_nc_message']['slack_channel'],
    'inputType' => 'text',
    'eval'      => [
        'tl_class' => 'w50', 'maxLength' => 255
    ],
    'sql'       => "VARCHAR(255) NOT NULL DEFAULT ''"
];