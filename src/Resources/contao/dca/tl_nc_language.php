<?php

$GLOBALS['TL_DCA']['tl_nc_language']['palettes']['__selector__'][] = 'slack_mode';
$GLOBALS['TL_DCA']['tl_nc_language']['palettes']['slack'] = '{general_legend},language,fallback;{content_legend},slack_text';

$GLOBALS['TL_DCA']['tl_nc_language']['fields']['slack_text'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_nc_language']['slack_text'],
    'inputType' => 'textarea',
    'eval'      => [
        'rgxp'           => 'nc_tokens',
        'allowHtml'      => false,
        'decodeEntities' => true,
        'mandatory'      => true
    ],
    'sql'       => "text NULL"
];