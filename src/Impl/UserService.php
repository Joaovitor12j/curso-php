<?php

declare(strict_types=1);

namespace App\Impl;

use App\NotifierInterface;

final class UserService
{
    public function notifyUser(User $user, string $message, NotifierInterface $notifier): void
    {
        if ($notifier instanceof EmailNotifier) {
            $notifier->send($user->getEmail(), $message);
        } else {
            $notifier->send($user->getPhone(), $message);
        }
    }
}
