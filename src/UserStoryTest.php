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
        $data = file_get_contents(__DIR__ . '/../data/data.json');
        $data = json_decode($data, TRUE);
        $UserStory = new UserStory(0);
        $this->assertSame($data[0]['name'], $UserStory->getName());
    }

    public function testUserStoryDescription(): void
    {
        $data = file_get_contents(__DIR__ . '/../data/data.json');
        $data = json_decode($data, TRUE);
        $UserStory = new UserStory(0);
        $this->assertSame($data[0]['description'], $UserStory->getDescription());
    }
}
