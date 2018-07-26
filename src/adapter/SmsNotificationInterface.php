<?php 

namespace DesignPattern\Adapter;

interface SmsNotificationInterface {
    public function senderInfo(array $data);
    public function sendPush();
}