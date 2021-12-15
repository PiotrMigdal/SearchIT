
<?php
require_once "dbconnect.php";
$conn = mysqli_connect($host, $db_user, $db_password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM tasks WHERE ID>0";
$result = mysqli_query($conn, $sql);
$sql = "DELETE FROM servers WHERE ID>0";
$result = mysqli_query($conn, $sql);
foreach (new DirectoryIterator('LIVE/') as $fileInfo) {
    if($fileInfo->isDot()) continue;
    $FileName = $fileInfo->getBasename('.xml');

    $dom = new DOMDocument();
    $dom->load('LIVE/' . $FileName . '.xml') or die("Error: No Live files");
    $JobClasses = $dom->getElementsByTagName('JobClass');

    //Code is in other file
    $env = "LIVE";
    require ('loopXMLs.php');

    $sql = "INSERT INTO servers(name, environment) 
                VALUES ('" . $FileName . "','" . $env . "')";

    $result = mysqli_query($conn, $sql);
    
    if (!isset($Confirmation)) {
    $Confirmation = $FileName . ".xml imported.";
    } else {
    $Confirmation = $Confirmation . "<br />". $FileName . ".xml imported.";
    }
}
foreach (new DirectoryIterator('UAT/') as $fileInfo) {
    if($fileInfo->isDot()) continue;
    $FileName = $fileInfo->getBasename('.xml');



    $dom = new DOMDocument();
    $dom->load('UAT/' . $FileName . '.xml') or die("Error: No UAT files");
    $JobClasses = $dom->getElementsByTagName('JobClass');

    //Code is in other file
    $env = "UAT";
    require ('loopXMLs.php');

    $sql = "INSERT INTO servers(name, environment) 
                VALUES ('" . $FileName . "','" . $env . "')";

    $result = mysqli_query($conn, $sql);

    if ($Confirmation=="") {
    $Confirmation = $FileName . ".xml imported.";
    } else {
    $Confirmation = $Confirmation . "<br />". $FileName . ".xml imported.";
    }
    
}
echo $Confirmation."<br><br><b>All files imported!</b>";;
mysqli_close($conn);

