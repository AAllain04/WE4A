<?php

namespace ContainerHkxxy10;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_MailerTest_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.mailer_test.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.mailer_test.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('mailer:test', [], 'Test Mailer transports by sending an email', false, #[\Closure(name: 'console.command.mailer_test', class: 'Symfony\\Component\\Mailer\\Command\\MailerTestCommand')] fn (): \Symfony\Component\Mailer\Command\MailerTestCommand => ($container->privates['console.command.mailer_test'] ?? $container->load('getConsole_Command_MailerTestService')));
    }
}
