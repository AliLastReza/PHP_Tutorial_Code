<?php
$fileNames = $_POST["fileNames"];
$trimmedFileNames = str_replace(" ", "", $fileNames);
$fileNameArray = explode(",", $trimmedFileNames);

$filesThatDontExist = array();
for ($i = 0; $i < count($fileNameArray); $i++) {
    if (!file_exists("uploads/" . $fileNameArray[$i])) {
        $filesThatDontExist[] = $fileNameArray[$i];
    }
}

if (count($filesThatDontExist) > 0) {
    header("Location: index.php?delete-files=dont-exist-failed&dont-exist=" . implode(",", $filesThatDontExist));
    exit();
}

for ($i = 0; $i < count($fileNameArray); $i++) {
    if (!unlink("uploads/" . $fileNameArray[$i])) {
        header("Location: index.php?delete-files=unlink-failed&while-deleting=" . $fileNameArray[$i]);
    }
}

header("Location: index.php?delete-files=success");
exit();
