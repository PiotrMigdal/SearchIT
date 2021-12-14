<?php

namespace Models;

// TODO
// - add that mini
// - add select all and clear all in JS
// - change folder names to Live and UAT and that db import them according to this. if someone adds ansible, they will be able just to add folder
class Server extends Dbh {
    public function serverList(): array
    {
        // Get them from DB table servers
        $stmt = $this->connect()->prepare("SELECT * FROM servers ORDER BY environment ASC, name ASC");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function envList(): array
    {
        // Get them from DB table servers
        $stmt = $this->connect()->prepare("SELECT environment FROM servers GROUP BY environment");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}