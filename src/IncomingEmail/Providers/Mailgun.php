<?php
/**
 * Write something about the purpose of this file
 *
 * @author Shaharia Azam <shaharia@previewtechs.com>
 * @url https://www.previewtechs.com
 */

namespace Previewtechs\EmailUtility\IncomingEmail\Providers;

use Previewtechs\EmailUtility\IncomingEmail\HandlerInterface;
use Psr\Http\Message\ServerRequestInterface;

class Mailgun implements HandlerInterface
{
    /**
     * @var ServerRequestInterface
     */
    protected $request;

    /**
     * @var array|null|object
     */
    protected $parsedBody;

    public function __construct(ServerRequestInterface $request)
    {
        $this->request = $request;
        $this->parsedBody = $this->request->getParsedBody();
    }

    /**
     * @return string|null
     */
    public function getDomain()
    {
        return array_key_exists('domain', $this->parsedBody) ? $this->parsedBody['domain'] : null;
    }

    /**
     * @return string|null
     */
    public function getReceivedSpf()
    {
        return array_key_exists('Received-Spf', $this->parsedBody) ? $this->parsedBody['Received-Spf'] : null;
    }

    /**
     * @return string|null
     */
    public function getFrom()
    {
        return array_key_exists('From', $this->parsedBody) ? $this->parsedBody['From'] : null;
    }

    public function getSenderEmailAddress()
    {
        return array_key_exists('sender', $this->parsedBody) ? $this->parsedBody['sender'] : null;
    }

    /**
     * @return string|null
     */
    public function getReturnPath()
    {
        return array_key_exists('Return-Path', $this->parsedBody) ? $this->parsedBody['Return-Path'] : null;
    }

    /**
     * @return string|null
     */
    public function getDeliveredToEmailAddress()
    {
        return array_key_exists('Delivered-To', $this->parsedBody) ? $this->parsedBody['Delivered-To'] : null;
    }

    /**
     * @return string|null
     */
    public function getTo()
    {
        return array_key_exists('To', $this->parsedBody) ? $this->parsedBody['To'] : null;
    }

    /**
     * @return string|null
     */
    public function getDkimSignature()
    {
        return array_key_exists('Dkim-Signature', $this->parsedBody) ? $this->parsedBody['Dkim-Signature'] : null;
    }

    /**
     * @return string|null
     */
    public function getSubject()
    {
        return array_key_exists('subject', $this->parsedBody) ? $this->parsedBody['subject'] : null;
    }

    /**
     * @return string|null
     */
    public function getXReceived()
    {
        return array_key_exists('X-Received', $this->parsedBody) ? $this->parsedBody['X-Received'] : null;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        $date = array_key_exists('Date', $this->parsedBody) ? $this->parsedBody['Date'] : null;
        return new \DateTime($date);
    }

    /**
     * @return string|null
     */
    public function getMessageId()
    {
        return array_key_exists('Message-Id', $this->parsedBody) ? $this->parsedBody['Message-Id'] : null;
    }

    /**
     * @return string|null
     */
    public function getParentMessageId()
    {
        return array_key_exists('In-Reply-To', $this->parsedBody) ? $this->parsedBody['In-Reply-To'] : null;
    }

    /**
     * @return string|null
     */
    public function getMimeVersion()
    {
        return array_key_exists('Mime-Version', $this->parsedBody) ? $this->parsedBody['Mime-Version'] : null;
    }

    /**
     * @return string|null
     */
    public function getMessageAccessURL()
    {
        return array_key_exists('message-url', $this->parsedBody) ? $this->parsedBody['message-url'] : null;
    }

    /**
     * @return string|null
     */
    public function getMessageHeaders()
    {
        return array_key_exists('message-headers', $this->parsedBody) ? $this->parsedBody['message-headers'] : null;
    }

    /**
     * @return string|null
     */
    public function getRecipientEmailAddress()
    {
        return array_key_exists('recipient', $this->parsedBody) ? $this->parsedBody['recipient'] : null;
    }

    /**
     * @return string|null
     */
    public function getContentType()
    {
        return array_key_exists('Content-Type', $this->parsedBody) ? $this->parsedBody['Content-Type'] : null;
    }

    /**
     * @return string|null
     */
    public function getTimestamp()
    {
        return array_key_exists('timestamp', $this->parsedBody) ? $this->parsedBody['timestamp'] : null;
    }

    /**
     * @return string|null
     */
    public function getSignature()
    {
        return array_key_exists('signature', $this->parsedBody) ? $this->parsedBody['signature'] : null;
    }

    /**
     * @return string|null
     */
    public function getPlainBody()
    {
        return array_key_exists('body-plain', $this->parsedBody) ? $this->parsedBody['body-plain'] : null;
    }

    /**
     * @return string|null
     */
    public function getHTMLBody()
    {
        return array_key_exists('body-html', $this->parsedBody) ? $this->parsedBody['body-html'] : null;
    }

    /**
     * @return string|null
     */
    public function getHTMLStripped()
    {
        return array_key_exists('stripped-html', $this->parsedBody) ? $this->parsedBody['stripped-html'] : null;
    }

    /**
     * @return string|null
     */
    public function getTextStripped()
    {
        return array_key_exists('stripped-text', $this->parsedBody) ? $this->parsedBody['stripped-text'] : null;
    }

    /**
     * @return string|null
     */
    public function getSignatureStripped()
    {
        return array_key_exists('stripped-signature',
            $this->parsedBody) ? $this->parsedBody['stripped-signature'] : null;
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function getValue($key)
    {
        return array_key_exists($key, $this->parsedBody) ? $this->parsedBody[$key] : null;
    }
}