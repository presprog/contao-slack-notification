<?php

$GLOBALS['NOTIFICATION_CENTER']['GATEWAY']['slack'] = 'PresProg\\SlackNotification\\Gateway\\Slack';


$GLOBALS['NOTIFICATION_CENTER']['NOTIFICATION_TYPE'] = array_merge_recursive(
    (array) $GLOBALS['NOTIFICATION_CENTER']['NOTIFICATION_TYPE'],
    [
        'contao' => [
            'core_form'           => [
                'slack_text' => ['form_*', 'formconfig_*', 'formlabel_*', 'raw_data', 'admin_email']
            ],
            'member_activation'   => [
                'slack_text' => ['domain', 'member_*', 'admin_email']
            ],
            'member_registration' => [
                'slack_text' => ['domain', 'link', 'member_*', 'admin_email']
            ],
            'member_personaldata' => [
                'slack_text' => ['domain', 'member_*', 'member_old_*', 'changed_*', 'admin_email']
            ],
            'member_password'     => [
                'slack_text' => ['domain', 'link', 'member_*', 'recipient_email']
            ]
        ]
    ]
);