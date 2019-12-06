<?php

namespace Cyy\Sms\Messages;

use Cyy\Sms\Senders\SenderInterface;

abstract class BaseMessage extends \yii\base\Object
{
    /**
     * SMS sign name
     *
     * @var string
     */
    public $sign;

    /**
     * Phone number
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * SMS Sender
     *
     * @var SenderInterface
     */
    public $sender;

    abstract public function send();
}
