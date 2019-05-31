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
        $data = file_get_contents(dirname(__DIR__) . '/data/data.json');
        $data = json_decode($data, TRUE);
        $random_id = rand(0, count($data) - 1);
        $UserStory = new UserStory($random_id);
        $this->assertSame($data[$random_id]['name'], $UserStory->getName());
    }

    public function testUserStoryDescription(): void
    {
        $data = file_get_contents(dirname(__DIR__) . '/data/data.json');
        $data = json_decode($data, TRUE);
        $random_id = rand(0, count($data) - 1);
        $UserStory = new UserStory($random_id);
        $this->assertSame($data[$random_id]['description'], $UserStory->getDescription());
        $this->assertFalse(empty($UserStory->getDescription()));
    }
}
