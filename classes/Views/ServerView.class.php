<?php

namespace Views;

class ServerView {
    public function serversForm($servers) {
        foreach ($servers as $server) {
            echo    '<div class="btn-group m-1 ' . $server["environment"] . '-server">
                            <div class="btn-group-toggle" data-toggle="buttons">
                              <label class="btn btn-sm btn-checkbox active">
                                <input type="checkbox" checked autocomplete="off"> ' . $server["name"] . '
                              </label>
                            </div>
                            <button type="button" class="btn btn-sm btn-success" data-toggle="popover" title="Last updated" data-content="' . $server["updated_at"] . '">
                                <span class="info">i</span>
                            </button>
                        </div>';
        }
    }
}