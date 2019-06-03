<?php
declare(strict_types=1);

namespace Agile;

final class UserStory
{
    private $id;    
    private $allData = [];

    public function __construct($_id = 0)
    {
        $this->allData = $this->loadData();
        $this->id = $_id;
    }

    public function getJson(): array
    {
        return $this->allData[$this->id];
    }

    public function loadData(): array
    {
        $data = file_get_contents(dirname(__DIR__) . '/data/data.json');
        $data = json_decode($data, TRUE);

        if (!empty($data)) {
            return $data;
        }

        return [];
    }
}
