<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

final class UserStoryTest extends TestCase
{
    public function testIsUserStory(): void
    {
        $UserStory = new Agile\UserStory();
        $this->assertInstanceOf(Agile\UserStory::class, $UserStory);
    }
}
