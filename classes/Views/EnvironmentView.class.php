<?php

namespace Views;

class EnvironmentView {
    public function envForm($envs, $request) {
        foreach ($envs as $env) {
            if(isset($request)){
                $active = "";
                $checked = "";
            } else if($env["environment"] === "LIVE") {
                $active = "active";
                $checked = "checked";
            } else {
                $active = "";
                $checked = "";
            }

            echo    '<div class="btn-group m-1">
                            <div class="btn-group-toggle" data-toggle="buttons">
                              <label class="btn btn-sm btn-checkbox switch-btn ' . $active . '" id="' . $env["environment"] . '">
                                <input type="checkbox" ' . $checked . ' autocomplete="off"> ' . $env["environment"] . '
                              </label>
                            </div>
                        </div>';

        }
    }
}