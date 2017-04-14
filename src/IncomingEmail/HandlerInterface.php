<?php
/**
 * Write something about the purpose of this file
 *
 * @author Shaharia Azam <shaharia@previewtechs.com>
 * @url https://www.previewtechs.com
 */

namespace Previewtechs\EmailUtility\IncomingEmail;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Interface HandlerInterface
 * @package Previewtechs\Web\Support\Mailer\IncomingEmail
 */
interface HandlerInterface
{
    public function __construct(ServerRequestInterface $request);

    /**
     * @return string|null
     */
    public function getDomain();

    /**
     * @return string|null
     */
    public function getReceivedSpf();

    /**
     * @return string|null
     */
    public function getFrom();

    /**
     * @return string|null
     */
    public function getSenderEmailAddress();

    /**
     * @return string|null
     */
    public function getReturnPath();

    /**
     * @return string|null
     */
    public function getDeliveredToEmailAddress();

    /**
     * @return string|null
     */
    public function getTo();

    /**
     * @return string|null
     */
    public function getDkimSignature();

    /**
     * @return string|null
     */
    public function getSubject();

    /**
     * @return string|null
     */
    public function getXReceived();

    /**
     * @return \DateTime
     */
    public function getDate();

    /**
     * @return string|null
     */
    public function getMessageId();

    /**
     * @return string
     */
    public function getParentMessageId();

    /**
     * @return string|null
     */
    public function getMimeVersion();

    /**
     * @return string|null
     */
    public function getMessageAccessURL();

    /**
     * @return string|null
     */
    public function getMessageHeaders();

    /**
     * @return string|null
     */
    public function getRecipientEmailAddress();

    /**
     * @return string|null
     */
    public function getContentType();

    /**
     * @return string|null
     */
    public function getTimestamp();

    /**
     * @return string|null
     */
    public function getSignature();

    /**
     * @return string|null
     */
    public function getPlainBody();

    /**
     * @return string|null
     */
    public function getHTMLBody();

    /**
     * @return string|null
     */
    public function getHTMLStripped();

    /**
     * @return string|null
     */
    public function getTextStripped();

    /**
     * @return string|null
     */
    public function getSignatureStripped();

    /**
     * @param $key
     * @return mixed
     */
    public function getValue($key);
}