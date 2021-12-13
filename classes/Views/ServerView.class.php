<?php

namespace Views;

class ServerView {
    public function serversForm($servers, $selected) {
        foreach ($servers as $server) {
            if(isset($selected)){
                if(in_array($server["name"], $selected)) {
                    $active = "active";
                    $checked = "checked";
                } else {
                    $active = "";
                    $checked = "";
                }
            } else if ($server["environment"] === "LIVE") {
                $active = "active";
                $checked = "checked";
            } else {
                $active = "";
                $checked = "";
            }
            echo    '<div class="btn-group m-1">
                            <div class="btn-group-toggle" data-toggle="buttons">
                              <label class="btn btn-sm btn-checkbox ' . $active . ' server-btn ' . $server["environment"] . '-server">
                                <input name="servers[]" value="' . $server["name"] . '" type="checkbox" ' . $checked . ' autocomplete="off"> ' . $server["name"] . '
                              </label>
                            </div>
                            <button type="button" class="btn btn-sm btn-success" data-toggle="popover" title="Last updated" data-content="' . $server["updated_at"] . '">
                                <span class="info">i</span>
                            </button>
                        </div>';
        }
    }
}