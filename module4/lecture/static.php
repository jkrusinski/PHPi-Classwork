<?php

class DatabaseManager
{
    /**
     * Should we cache data?
     * @var bool
     */
    public static $shouldCache;

    /**
     * Get some data from the database
     * @return array
     */
    public function getData()
    {
        // This comes from a database
        return array('persian', 'bob', 'tabby', 'stray');
    }

    /**
     * Get some data from the database again
     * @return array
     */
    public static function getStaticData()
    {
        // This comes from a database
        return array('weiner', 'pug', 'beast', 'furry');
    }
}

$query = new DatabaseManager();
$data = $query->getData();

$staticData = DatabaseManager::getStaticData();
$shouldWeCache = DatabaseManager::$shouldCache;

echo '<pre>';
print_r($data);
print_r($staticData);