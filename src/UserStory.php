<?php
declare(strict_types=1);

namespace Agile;

final class UserStory
{
    private $name;

    public function __construct($_id = 0)
    {
        $data = file_get_contents(__DIR__ . '/../data/data.json');
        $data = json_decode($data, TRUE);

        $this->name = $data[$_id]['name'];
    }

    public function getName()
    {
        return $this->name;
    }
}
