<?php

namespace Tkotosz\FooApp\DateTimeExtension;

use Symfony\Component\Console\Application;
use Tkotosz\FooApp\DateTimeExtension\Console\Command\DateTimeNowCommand;
use Tkotosz\FooApp\DateTimeExtension\Console\Command\DateTimeTodayCommand;
use Tkotosz\FooApp\Extension;

class DateTimeExtension implements Extension
{
    public function addCommands(Application $application): void
    {
        $application->add(new DateTimeNowCommand());
        $application->add(new DateTimeTodayCommand());
    }
}