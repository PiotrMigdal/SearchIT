<?php

namespace Views;

class TaskView {
    public function foundTasks($tasks) {
        if(isset($tasks)) {

            echo '<div class="container col-12 position-sticky p-1 sticky-top z-index-1 bg-white">
                    <div class="row">
                        <div class="col-md-2"><b>Server</b></div>
                        <div class="col-md-2"><b>GroupName</b></div>
                        <div class="col-md-2"><b>JobName</b></div>
                        <div class="col-md-2"><b>TaskName</b></div>
                        <div class="col-md-4"><b>Details</b></div>
                    </div>
                </div>';
            foreach ($tasks as $task) {
                echo    '<div class="container col-12">
                    <div class="row">
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
