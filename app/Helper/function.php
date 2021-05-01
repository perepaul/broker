<?php


function uploadImage($path,$image,$file_to_delete = null)
{
    $dummy = public_path($path.'/'.$file_to_delete);
    if(!is_null($file_to_delete) && file_exists($dummy) && $file_to_delete !== config('constants.default_image')){
        deleteFile($dummy);
    }
    $filename = randomString().'.'.$image->extension();
    while (file_exists(public_path($path.$filename))) {
        $filename = randomString();
    }
    $image->move(public_path($path),$filename);
    // dd($filename);
    return $filename;
}

function deleteFile($file)
{
    @unlink($file);
}

function randomString()
{
    $characters = 'ABCDEFGHJKMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 12; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function format_phone_number($number)
{
    $number = str_replace('(','',$number);
    $number = str_replace(')','',$number);
    $number = str_replace(' ','',$number);
    return $number;
}
