<?php

namespace Views;

class TaskView {
    public function foundTasks($tasks) {
        if(isset($tasks)) {

            echo '<div class="container col-12 position-sticky sticky-top z-index-1 bg-white">
                    <div class="row">
                        <div class="col-md-2 py-2 text-center"><b>Server</b></div>
                        <div class="col-md-2 py-2 text-center"><b>Group</b></div>
                        <div class="col-md-2 py-2 text-center"><b>Job</b></div>
                        <div class="col-md-2 py-2 text-center"><b>Task</b></div>
                        <div class="col-md-4 py-2 text-center"><b>Details</b></div>
                    </div>
                </div>';
            foreach ($tasks as $task) {
                $task['Active'] === "false" ? $activeColor = "bg-danger-light" : $activeColor = "";
                echo    '<div class="container col-12">
                            <div class="row ' . $activeColor . '">
                                <div class="col-md-2 border cell">'.$task['Server'].'</div>
                                <div class="col-md-2 border cell">'.$task['GroupName'].'</div>
                                <div class="col-md-2 border cell">'.$task['JobName'].'</div>
                                <div class="col-md-2 border cell">'.$task['TaskName'].'</div>
                                <div class="col-md-4 border cell">'.$task['SourceFolder'].$task['DestinationDirectory'].$task['IncludeFileMask'].'</div>
                            </div>
                        </div>';
            }
        }
    }
}
