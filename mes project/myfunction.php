<?php
//valider extension
function valid_extension($file_name, $ext_ok)
{
    $file_ext = strtolower(substr(strrchr($file_name, '.'), 1));
    if (in_array($file_ext, $ext_ok))
        return true;
    return false;
}
//valider taille d'un fichier
function valid_size($file)
{
    $maxsize = 0;
    if (isset($_POST['MAX_FILE_SIZE']))
        $maxsize = $_POST['MAX_FILE_SIZE'];
    if ($file['size'] <= $maxsize)
        return true;
    return false;
}


//déplacer un fichier
function move_file($file_source_name, $dest_dir, $file_dest_name)
{
    if (!(is_dir($dest_dir)))
        mkdir($dest_dir);
    $dest = "$dest_dir/$file_dest_name";
    $dhc = date("dmY_His", time());
    $file_dest_name = $dhc . " " . $file_dest_name;
    $dest = "$dest_dir/$file_dest_name";
    return move_uploaded_file($file_source_name, $dest);
}

function move_file_get_dest($file_source_name, $dest_dir, $file_dest_name)
{

    if (!(is_dir($dest_dir))) {
        mkdir("$dest_dir");
    }
    $destination = "$dest_dir/$file_dest_name";
    $current_date_time = date("d.m.Y_H.i.s", time());
    $file_dest_name = $current_date_time . "_" . $file_dest_name;

    $destination = "$dest_dir/$file_dest_name";

    if (move_uploaded_file($file_source_name, $destination)) {
        return $destination;
    } else {
        return null;
    }
}

function check_extention($file_name, $array_extention)
{

    $ext_depuis_point = strrchr($file_name, ".");

    $ext_sans_point = substr($ext_depuis_point, 1);

    $extention = strtolower($ext_sans_point);

    if (in_array($extention, $array_extention)) {
        return true;
    }
    return false;
}

function checking_extention_image($file_name)
{
    $extention_image = array('png', 'jpg', 'jpeg', 'svg');

    return check_extention($file_name, $extention_image);
}

function checking_extention_music($file_name)
{
    $extention_music = array('mp3');

    return check_extention($file_name, $extention_music);
}

function checking_extention_video($file_name)
{
    $extention_video = array('mp4');

    return check_extention($file_name, $extention_video);
}

function checking_extention_fichier($file_name)
{
    $extention_fichier = array('pdf');

    return check_extention($file_name, $extention_fichier);
}

function checking_extention_extended($file_name)
{
    $extention_image = array('png', 'jpg', 'jpeg', 'svg');
    $extention_music = array('mp3');
    $extention_video = array('mp4');
    $extention_fichier = array('pdf');

    $array_type_file = array($extention_image, $extention_music, $extention_video, $extention_fichier);

    for ($i = 0; $i < count($array_type_file); $i++) {

        if (check_extention($file_name, $array_type_file[$i])) {
            return check_extention($file_name, $array_type_file[$i]);
        }
    }
    return false;
}

function move_all_files_image($file)
{
    if (isset($file)) {
        for ($i = 0; $i < count($file['name']); $i++) 
        {
            $file_name = $file['name'][$i];

            if (checking_extention_image($file_name)) 
            {
               return move_file_get_dest($file['tmp_name'][$i], 'images', $file_name);
            }
        }
    }
}

function move_print_all_files_image($file)
{
    if (isset($file)) {
        $new_file = null;
        for ($i = 0; $i < count($file['name']); $i++) {
           echo $file_name = $file['name'][$i];

            if (checking_extention_image($file_name)) {
                $new_file = move_file_get_dest($file['tmp_name'][$i], 'images', $file_name);
            }
            if ($new_file) {
                echo "<img src='$new_file'/>";
            }
        }
    }
}