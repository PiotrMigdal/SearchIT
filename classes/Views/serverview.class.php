<?php

namespace Views;

use Models\Server;

class ServerView extends Server {
    public function serversForm($servers) {

        echo '<form action="index.php" method="get">';
        foreach($_GET["servers"] as $get) {
            echo '<input type="hidden" name="servers[]" value="' . $get. '">';
        }
        foreach ($servers as $server) {
            $server["selected"] ? $status = "success" : $status = "secondary";
            echo    '<div class="btn-group m-1">
                            <button class="btn btn-sm btn-' . $status . '" type="submit" name="servers[]" value="' . $server["name"] . '">
                                ' . $server["name"] . '
                            </button>
                            <button type="button" class="btn btn-sm btn-success" data-toggle="popover" title="Last updated" data-content="' . $server["updated_at"] . '">
                                <span class="info">i</span>
                            </button>
                        </div>';
        }
        echo "</form>";
    }
}