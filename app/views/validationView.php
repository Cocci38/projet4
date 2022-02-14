<?php
if (isset($_FILES['photo']['tmp_name'][0]) && is_uploaded_file($_FILES['photo']['tmp_name'][0])) {
    $countfiles = count($_FILES['photo']['name']);
    //on limite a 5 le compteur
    if ($countfiles >= 6) {
    $countfiles = 5;
    }
    // IsDir_or_CreateIt("photo");
    for ($i = 0; $i < $countfiles; $i++) {
    $maphoto = $_FILES['photo']['name'][$i];
    $maphoto_tmp = $_FILES['photo']['tmp_name'][$i];
    $extension = substr($maphoto, strrpos($maphoto, '.'));
    $compteur = $i + 1;
    //$form['photo' . $compteur] = $_FILES['photo']['name'][$i];
    $form['photo' . $compteur] = 'p' . $compteur . '_' . date("Y_m_d_H_i") . $extension;
    move_uploaded_file($maphoto_tmp, 'photo/' . $form['photo' . $compteur]);
    }
    }
?>
