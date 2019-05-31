<?php
declare(strict_types=1);

namespace Agile;

class DataFromFile implements DataInterface
{

    public function get($id)
    {
        $data = $this->getFromFile(dirname(__DIR__) . '/data/data.json');
        return $data[$id];
    }

    public function getFromFile($filename)
    {
        return json_decode(file_get_contents($filename), true);
    }

}