<?php

class Server {
    public function getServerList($env): array
    {
        // Iterate through folder files and returns array
        foreach (new DirectoryIterator('job_xmls_' . $env . '/') as $fileInfo) {
            if($fileInfo->isFile() && $fileInfo->getExtension() == "xml") {
                $server[] = ["name" => $fileInfo->getBasename(".xml"), "file_date" => $fileInfo->getCTime()];
            }
        }
        return $server;
    }
}