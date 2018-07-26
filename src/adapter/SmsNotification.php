<?php

namespace DesignPattern\Adapter;

class SmsNotification implements SmsNotificationInterface {

    private $phoneNumber;
    private $content;

    public function senderInfo(array $data) {
        $this->phoneNumber = $data['phoneNumber'];
        $this->content = $data['content'];
        return $this;
    }

    public function sendPush() {
        return $this->content;
    }
}