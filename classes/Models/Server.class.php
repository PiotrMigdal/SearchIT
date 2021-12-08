<?php

namespace Models;

class Server extends Dbh {
    private function serverList(): array
    {
        // Get them from DB table servers
        $stmt = $this->connect()->prepare("SELECT * FROM servers ORDER BY environment ASC, name ASC");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function serversWithGet(): array
    {
        //use current list array
        return $this->serverList();
    }
}