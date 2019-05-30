<?php
declare(strict_types=1);

namespace Agile;

final class UserStory
{
    private $name;

    public function __construct()
    {
        $this->name = 'test name';
    }

    public function getName()
    {
        return $this->name;
    }
}
