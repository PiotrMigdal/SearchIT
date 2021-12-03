<?php
class ServerListView extends Server {
    public function showServers($env) {
        foreach ($this->getServerList($env) as $server) {
            echo    '<div class="btn-group m-1">
                            <input id="btn-1" class="btn btn-sm btn-secondary" type="submit" name="Choose_" value="' . $server["name"] . '"/>
                            <button type="button" class="btn btn-sm btn-success" data-toggle="popover" title="Last updated" data-content="' . $server["file_date"] . '">
                                <span class="info">i</span>
                            </button>
                        </div>';
        }
    }
}