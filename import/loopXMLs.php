<?php
    
    foreach($JobClasses as $JobClass)
    { 

        $JobNames = $JobClass->getElementsByTagName("Name");
        foreach($JobNames as $JobNameA)
        { 
            $JobName = $JobNameA->textContent;
        }
        //Check if job is active
        $JobStats = $JobClass->getElementsByTagName("Stats");
        foreach($JobStats as $JobStatsA)
        { 
            $Active = $JobStatsA->getElementsByTagName("Active")->item(0)->textContent;
        }

        $GroupName = $JobClass->getElementsByTagName("Group")->item(0)->textContent;
        $JobDescription = $JobClass->getElementsByTagName("Description")->item(0)->textContent;
    
        $TaskClasses = $JobClass->getElementsByTagName('TaskClass');
            foreach($TaskClasses as $TaskClass)
            { 
                $SourceFolder = "";
                $DestinationDirectory = "";
                $IncludeFileMask = "";
                $TaskName = $TaskClass->getElementsByTagName("Name")->item(0)->textContent;
                //If job is active (checked above), check if each task is. If not all make as inactive
                if($Active == 'true'){
                    $TaskStats = $TaskClass->getElementsByTagName("Stats");
                        foreach($TaskStats as $TaskStatsA)
                            { 
                                $Active = $TaskStatsA->getElementsByTagName("Active")->item(0)->textContent;
                            }
                }
                $SourceFolders = $TaskClass->getElementsByTagName("SourceFolder");
                    foreach($SourceFolders as $SourceFolderA)
                        { 
                            $SourceFolder .= $SourceFolderA->textContent."<br>";
                        }
                $DestinationDirectorys = $TaskClass->getElementsByTagName("DestinationDirectory");
                    foreach($DestinationDirectorys as $DestinationDirectoryA)
                        { 
                            $DestinationDirectory .= $DestinationDirectoryA->textContent."<br>";
                        }
                $IncludeFileMasks = $TaskClass->getElementsByTagName("IncludeFileMask");
                    foreach($IncludeFileMasks as $IncludeFileMaskA)
                        { 
                                $IncludeFileMask .= $IncludeFileMaskA->textContent."<br>";
                        }

                $DestinationDirectoryESCAPED = mysqli_real_escape_string($conn, $DestinationDirectory);
                $SourceFolderESCAPED = mysqli_real_escape_string($conn, $SourceFolder);
                $IncludeFileMaskESCAPED = mysqli_real_escape_string($conn, $IncludeFileMask);
                
                $sql = "INSERT INTO tasks(Server,GroupName,JobName,JobDescription,TaskName,DestinationDirectory,SourceFolder,IncludeFileMask,Active) 
                VALUES ('" . $FileName . "','" . $GroupName . "','" . $JobName . "','" . $JobDescription . "','" . $TaskName . "','" . $DestinationDirectoryESCAPED . "','" . $SourceFolderESCAPED . "','" . $IncludeFileMaskESCAPED . "','" . $Active . "')";
                
                $result = mysqli_query($conn, $sql);
            }
            
    }