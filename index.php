<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'vendor/autoload.php';

$r = \Symfony\Component\HttpFoundation\Request::createFromGlobals();



?>

<?php
if ($r->isMethod('POST')) {
    var_export('is post!');

    /**
     * @var \Symfony\Component\HttpFoundation\File\UploadedFile $uploadedFile
     */
    foreach($r->files as $uploadedFile) {
        var_export('file!');
        $name = 'asd.asd';
        $file = $uploadedFile->move('files', $uploadedFile->getClientOriginalName());
    }
}
?>

<br>

<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="fooo">
    <input type="file" name="file">
    <input type="submit">
</form>
