<?php
/**
 * Write something about the purpose of this file
 *
 * @author Shaharia Azam <shaharia@previewtechs.com>
 * @url https://www.previewtechs.com
 */

namespace Previewtechs\EmailUtility\IncomingEmail;


class EmailHandler
{
    protected $handler;

    public function __construct(HandlerInterface $handler)
    {
        $this->handler = $handler;
    }

    /**
     * @return string|null
     */
    public function getDomain()
    {
        return $this->handler->getDomain();
    }

    /**
     * @return string|null
     */
    public function getReceivedSpf()
    {
        return $this->handler->getReceivedSpf();
    }

    /**
     * @return string|null
     */
    public function getFrom()
    {
        return $this->handler->getFrom();
    }

    /**
     * @return string|null
     */
    public function getSenderEmailAddress()
    {
        return $this->handler->getSenderEmailAddress();
    }

    /**
     * @return string|null
     */
    public function getReturnPath()
    {
        if ($this->handler->getReturnPath()) {
            return $this->handler->getReturnPath();
        }

        return $this->handler->getFrom();
    }

    /**
     * @return string|null
     */
    public function getDeliveredToEmailAddress()
    {
        return $this->handler->getDeliveredToEmailAddress();
    }

    /**
     * @return string|null
     */
    public function getTo()
    {
        return $this->handler->getTo();
    }

    /**
     * @return string|null
     */
    public function getDkimSignature()
    {
        return $this->handler->getDkimSignature();
    }

    /**
     * @return string|null
     */
    public function getSubject()
    {
        return $this->handler->getSubject();
    }

    /**
     * @return string|null
     */
    public function getXReceived()
    {
        return $this->handler->getXReceived();
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->handler->getDate();
    }

    /**
     * @return string|null
     */
    public function getMessageId()
    {
        return $this->handler->getMessageId();
    }

    /**
     * @return mixed
     */
    public function getParentMessageId()
    {
        return $this->handler->getParentMessageId();
    }

    /**
     * @return string|null
     */
    public function getMimeVersion()
    {
        return $this->handler->getMimeVersion();
    }

    /**
     * @return string|null
     */
    public function getMessageAccessURL()
    {
        return $this->handler->getMessageAccessURL();
    }

    /**
     * @return string|null
     */
    public function getMessageHeaders()
    {
        return $this->handler->getMessageHeaders();
    }

    /**
     * @return string|null
     */
    public function getRecipientEmailAddress()
    {
        return $this->getRecipientEmailAddress();
    }

    /**
     * @return string|null
     */
    public function getContentType()
    {
        return $this->handler->getContentType();
    }

    /**
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->handler->getTimestamp();
    }

    /**
     * @return string|null
     */
    public function getSignature()
    {
        return $this->handler->getSignature();
    }

    /**
     * @return string|null
     */
    public function getPlainBody()
    {
        return $this->handler->getPlainBody();
    }

    /**
     * @return string|null
     */
    public function getHTMLBody()
    {
        return $this->handler->getHTMLBody();
    }

    /**
     * @return string|null
     */
    public function getHTMLStripped()
    {
        return $this->handler->getHTMLStripped();
    }

    /**
     * @return string|null
     */
    public function getTextStripped()
    {
        return $this->handler->getTextStripped();
    }

    /**
     * @return string|null
     */
    public function getSignatureStripped()
    {
        return $this->handler->getSignatureStripped();
    }

    /**
     * @return bool
     */
    public function isReply()
    {
        if (!empty($this->handler->getParentMessageId())) {
            return true;
        }

        return false;
    }

    /**
     * @return bool
     */
    public function isFirstTime()
    {
        return $this->isReply() === false ? true : false;
    }

    /**
     * @param $key
     * @return mixed
     */
    public function getValue($key)
    {
        return $this->handler->getValue($key);
    }
}