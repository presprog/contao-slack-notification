<?php

namespace PresProg\SlackNotification\Gateway;

use NotificationCenter\Gateway\Base;
use NotificationCenter\Gateway\GatewayInterface;
use NotificationCenter\MessageDraft\MessageDraftFactoryInterface;
use NotificationCenter\MessageDraft\MessageDraftInterface;
use NotificationCenter\Model\Language;
use NotificationCenter\Model\Message;
use PresProg\SlackNotification\MessageDraft\SlackMessageDraft;

class Slack extends Base implements GatewayInterface, MessageDraftFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function send(
        Message $objMessage,
        array $arrTokens,
        $strLanguage = ''
    ) {
        /**
         * @var $objDraft SlackMessageDraft
         */
        $objDraft = $this->createDraft($objMessage, $arrTokens, $strLanguage);

        // return false if no language found for BC
        if ($objDraft === null) {

            \System::log(sprintf('Could not create draft message for slack notification (Message ID: %s)', $objMessage->id), __METHOD__, TL_ERROR);

            return false;
        }

        try {
//            return $objEmail->sendTo($objDraft->getRecipientEmails());
        } catch (\Exception $e) {
            \System::log(sprintf('Could not send slack notification for message ID %s: %s', $objMessage->id, $e->getMessage()), __METHOD__, TL_ERROR);
        }

        return false;
    }

    /**
     * @inheritDoc
     */
    public function createDraft(
        Message $objMessage,
        array $arrTokens,
        $strLanguage = ''
    ) {
        if ($strLanguage == '') {
            $strLanguage = $GLOBALS['TL_LANGUAGE'];
        }

        if (($objLanguage = Language::findByMessageAndLanguageOrFallback($objMessage,
                $strLanguage)) === null
        ) {
            \System::log(sprintf('Could not find matching language or fallback for message ID "%s" and language "%s".',
                $objMessage->id, $strLanguage), __METHOD__, TL_ERROR);

            return null;
        }

        return new SlackMessageDraft($objMessage, $objLanguage, $arrTokens);
    }

}