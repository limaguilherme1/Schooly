<?php
include '../connection/connection.php';
$target_dir = "fotos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$nome = basename($_FILES["fileToUpload"]["name"]);

$ext = strtolower(substr($nome,-4)); //Pegando extensão do arquivo

$id = $row['id'];
$new_name = $id . $ext; //Definindo um novo nome para o arquivo
echo $new_name . "\n";

$dir = 'fotos/'; //Diretório para uploads
echo $dir;

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 2000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $dir.$new_name)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$query = mysqli_query($db,"UPDATE usuario SET imagem = '$new_name' WHERE id = '$id'");
header("Location:../user.php"); 
 
?>