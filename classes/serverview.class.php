<?php
class ServerView extends Server {
    public function showServerButtons() {
        foreach ($this->getServerList() as $server) {
            //THIS NEED TO GO TO CONTROLLER AND MAPPED ARRAY ADDING THE $SERVER["STATUS"]
            if(in_array($server["name"], $_GET["servers"])) {
                $status = "success";
            } else {
                $status = "secondary";
            }
            echo    '<div class="btn-group m-1">
                            <button class="btn btn-sm btn-' . $status . '" type="submit" name="servers[]" value="' . $server["name"] . '">
                                ' . $server["name"] . '
                            </button>
                            <button type="button" class="btn btn-sm btn-success" data-toggle="popover" title="Last updated" data-content="' . $server["updated_at"] . '">
                                <span class="info">i</span>
                            </button>
                        </div>';
        }
    }
    public function showGetServers() {
        foreach ($this->getServerList() as $server) {
            if(isset($_GET[$server])) {
                $serverStatus = $_GET[$server]; // value can be false or true
            }
        }
    }
}