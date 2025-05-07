<?php

declare(strict_types=1);

use App\Impl\EmailNotifier;
use App\Impl\SmsNotifier;
use App\Impl\UserService;

require_once __DIR__ . '/../vendor/autoload.php';

$user = new App\Impl\User('test@test.com', 'Test', '123456789');

$email = new EmailNotifier();
$sms = new SmsNotifier();
$userService = new UserService();

$userService->notifyUser($user, 'Olá, seja bem vindo!', $email);
$userService->notifyUser($user, 'Está tudo pronto!', $sms);

