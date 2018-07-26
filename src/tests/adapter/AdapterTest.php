<?php

namespace DesignPatternTest\Adapter;

use DesignPattern\Adapter\EmailNotification;
use DesignPattern\Adapter\SmsNotification;
use DesignPattern\Adapter\SmsNotificationAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase {

	public function testEmailSend() {
		$email = new EmailNotification();
		$data = [
			'to' => 'test@test.com',
			'subject' => 'Test Subject',
			'body' => 'Email Test Body'
		];
		$email->ready($data);
		$this->assertEquals('Email Test Body', $email->send());
	}

	public function testSmsSend() {
		$sms = new SmsNotificationAdapter(new SmsNotification());
		$data = [
			'phoneNumber' => '+903213512786',
			'content' => 'Sms Test Content'
		];
		$sms->ready($data);
		$this->assertEquals('Sms Test Content', $sms->send());
	}
}