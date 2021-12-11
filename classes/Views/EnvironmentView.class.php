<?php

namespace Views;

class EnvironmentView {
    public function envForm($envs) {
        foreach ($envs as $env) {
            // As default only live is selected
            if($env["environment"] === "Live") {
                $active = "active";
                $checked = "checked";
            } else {
                $active = "";
                $checked = "";
            }

            echo    '<div class="btn-group m-1">
                            <div class="btn-group-toggle" data-toggle="buttons">
                              <label class="btn btn-sm btn-checkbox ' . $active . '">
                                <input type="checkbox" ' . $checked . ' autocomplete="off"> ' . $env["environment"] . '
                              </label>
                            </div>
                        </div>';

        }
    }
}