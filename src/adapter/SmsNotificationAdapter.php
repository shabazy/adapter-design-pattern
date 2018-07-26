<?php

namespace DesignPattern\Adapter;

class SmsNotificationAdapter implements NotificationInterface {

    protected $sms;

    public function __construct(SmsNotificationInterface $sms) {
        $this->sms = $sms;
    }

    public function ready(array $data) {
        return $this->sms->senderInfo($data);
    }

    public function send() {
        return $this->sms->sendPush();
    }
}
