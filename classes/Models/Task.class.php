<?php

namespace Models;

use PDO;

class Task extends Dbh {

    public function searchTasks($servers, $search): array
    {
        $in  = str_repeat('?,', count($servers) - 1) . '?';
        $searchLike = "%$search%";

        $stmt = $this->connect()->prepare("SELECT * FROM tasks WHERE 
                      Server in ($in) and 
                      (GroupName like ? or JobName like ? or JobDescription like ? or TaskName like ? or TaskDescription like ? or DestinationDirectory like ? or SourceFolder like ? or IncludeFileMask like ?)
                      ORDER BY ID");

        $stmt->execute(array_merge($servers, [$searchLike, $searchLike, $searchLike, $searchLike, $searchLike, $searchLike, $searchLike, $searchLike]));

        return $stmt->fetchAll();
    }
}