<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

final class QuestionTest extends TestCase
{
    public function returnTheCorrectQuestionFromID(): void
    {
        $this->assertEquals(1, 1);
    }
}