<?php
declare(strict_types=1);

require dirname(__DIR__) . '/vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Agile\DataFromFile;

final class DataFromFileTest extends TestCase
{
    public function testOne(): void
    {
        $DataFromFile = $this->createMock(DataFromFile::class);
        $DataFromFile->method('getFromFile')
             ->willReturn('foo');



        // $DataFromFile = $this->prophesize(DataFromFile::class);
        // $DataFromFile
        //     ->getFromFile(Argument::any())
        //     ->shouldBeCalled()
        //     ->willReturn([
        //     "0" => 'Test'
        // ]);

        // $data = new DataFromFile();
        $this->assertSame(1, $DataFromFile->get(0));
    }
}