<?php
class ServerView extends Server {
    public function showServerButtons() {
        foreach ($this->getServerList() as $server) {
            echo    '<div class="btn-group m-1">
                            <button class="btn btn-sm btn-secondary" type="submit" name="' . $server["name"] . '" value="true">
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