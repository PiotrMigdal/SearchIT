<?php

class Server extends Dbh{
    public function getServerList(): array
    {
        // Get them from DB table servers
        $stmt = $this->connect()->prepare("SELECT * FROM servers ORDER BY environment ASC, name ASC");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}