<?php

namespace DesignPattern\Adapter;

interface NotificationInterface {
    public function ready(array $data);
    public function send();
}