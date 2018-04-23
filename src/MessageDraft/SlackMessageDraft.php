<?php

namespace PresProg\SlackNotification\MessageDraft;

use NotificationCenter\MessageDraft\MessageDraftInterface;
use NotificationCenter\Model\Language;
use NotificationCenter\Model\Message;

class SlackMessageDraft implements MessageDraftInterface
{
    /**
     * Construct the object
     * @param Message $objMessage
     * @param Language $objLanguage
     * @param          $arrTokens
     */
    public function __construct(
        Message $objMessage,
        Language $objLanguage,
        $arrTokens
    ) {
        $this->objMessage = $objMessage;
        $this->objLanguage = $objLanguage;
        $this->arrTokens = $arrTokens;
    }

    /**
     * {@inheritdoc}
     */
    public function getTokens()
    {
        return $this->arrTokens;
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage()
    {
        return $this->objMessage;
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguage()
    {
        return $this->objLanguage->language;
    }

}