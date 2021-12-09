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

    public function serversWithGet($data): array
    {
        $servers = array();
        foreach ($this->serverList() as $server) {
            if(in_array($server["name"], $data)) {
                $server["selected"] = true;
            } else {
                $server["selected"] = false;
            }
            $servers[] = $server;
        }
        return $servers;
    }
}