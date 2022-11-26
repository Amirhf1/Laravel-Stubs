<?php

namespace Amirhf\LaravelStubs\Test\Feature;

use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Command\Command;


class PublishStubsTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function it_can_publish_stubs(): void
    {
        $targetStubsPath = $this->app->basePath(
            path: 'stubs',
        );

        File::deleteDirectory(
            directory: $targetStubsPath,
        );

        $this->artisan(
            command: 'publish:stubs',
        )->assertExitCode(
            exitCode: Command::SUCCESS,
        );

        $stubPath = __DIR__.'/../../stubs/migration.stub';

        $publishedStubPath = $targetStubsPath.'/migration.stub';

        $this->assertFileEquals(
            expected: $stubPath,
            actual:   $publishedStubPath,
        );
    }
}
