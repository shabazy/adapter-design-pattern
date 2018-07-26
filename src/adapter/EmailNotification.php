<?php

namespace DesignPattern\Adapter;

class EmailNotification implements NotificationInterface {

    private $to;
    private $subject;
    private $body;

    public function ready(array $data) {
        $this->to = $data['to'];
        $this->subject = $data['subject'];
        $this->body = $data['body'];
        return $this;
    }

    public function send() {
        return $this->body;
    }
}