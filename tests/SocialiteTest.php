<?php

class SocialiteTest extends TestCase
{
    public function testSocialiteCommandWithoutStarter()
    {
        $status = $this->app['Illuminate\Contracts\Console\Kernel']->handle(
            $input = new \Symfony\Component\Console\Input\ArrayInput([
                'command' => 'laracogs:socialite',
                '--no-interaction' => true
            ]),
            $output = new \Symfony\Component\Console\Output\BufferedOutput
        );

        $this->assertContains('php artisan laracogs:starter', $output->fetch());
    }
}
