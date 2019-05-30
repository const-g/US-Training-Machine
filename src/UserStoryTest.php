<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Agile\UserStory;

final class UserStoryTest extends TestCase
{
    public function testIsUserStory(): void
    {
        $UserStory = new UserStory();
        $this->assertInstanceOf(UserStory::class, $UserStory);
    }

    public function testUSName(): void
    {
        $UserStory = new UserStory();
        $this->assertEquals('test name', $UserStory->getName());
    }
}
