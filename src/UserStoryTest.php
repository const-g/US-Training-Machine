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

    public function testUserStoryJson(): void
    {
        $UserStory = new UserStory(0);
        $json = 
        json_decode(
        "{
            \"name\": \"This is a Test\",
            \"description\": \"Here is the description <a href\\\"test.html\\\">with a link!</a>\"
        }", true);

        $this->assertSame($json, $UserStory->getJson());
    }
}
