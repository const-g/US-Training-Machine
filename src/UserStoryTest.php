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

    public function testUserStoryName(): void
    {
        $UserStory = new UserStory(0);
        $this->assertEquals('This is a Test', $UserStory->getName());
    }

    public function testUserStoryNameById(): void
    {
        $UserStory = new UserStory(1);
        $this->assertEquals('First US', $UserStory->getName());
    }
}
