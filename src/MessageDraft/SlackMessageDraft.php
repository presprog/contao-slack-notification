<?php

namespace PresProg\SlackNotification\MessageDraft;

use NotificationCenter\MessageDraft\MessageDraftInterface;
use NotificationCenter\Model\Language;
use NotificationCenter\Model\Message;
use NotificationCenter\Util\StringUtil;

class SlackMessageDraft implements MessageDraftInterface
{
    /**
     * Message
     * @var Message
     */
    protected $objMessage = null;

    /**
     * Language
     * @var Language
     */
    protected $objLanguage = null;

    /**
     * Tokens
     * @var array
     */
    protected $arrTokens = array();

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
    )
    {
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

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->getMessage()->slack_username;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->getMessage()->slack_channel;
    }

    /**
     * @return string
     */
//    public function getIcon()
//    {
//        return $this->getMessage()->slack_icon;
//    }

    /*
     * @return string
     */
    public function getText()
    {
        $strText = html_entity_decode($this->objLanguage->slack_text);
        $strText = StringUtil::recursiveReplaceTokensAndTags($strText, $this->arrTokens, StringUtil::NO_TAGS);

        return $strText;
    }

}