<?php
function uploadImage($directory,$file)
{
    $year = now()->year;
    $month = now()->month;
    $dir = "$directory/$year/$month";
    $name = $file->getClientOriginalName();
    $file->storeAs($dir,$name);
    return "$dir/$name";
}

function updateImage($directory,$file,$oldImage){

    $year = now()->year;
    $month = now()->month;
    $dir = "$directory/$year/$month";
    $name = $file->getClientOriginalName();
    if ($oldImage){
        unlink('storage'.'/'.$oldImage);
        $file->storeAs($dir,$name);
    }
    $file->storeAs($dir,$name);
    return "$dir/$name";

}

function setting($name,$value=''){

    $setting = \Modules\Setting\Entities\Setting::where('name', $name)->first();
    return $setting ? $setting->value : $value;
}
function setting_update($name,$value){

    $setting = \Modules\Setting\Entities\Setting::firstOrNew(['name' => $name]);
    $setting->value = $value;
    $setting->save();
}

function home($name,$value=''){

    $home = \Modules\Home\Entities\Home::where('home_name', $name)->first();
    return $home ? $home->home_value : $value;
}

function home_update($name,$value){

    $home = \Modules\Home\Entities\Home::firstOrNew(['home_name' => $name]);
    $home->home_value = $value;
    $home->save();
}

function personal($name,$value=''){

    $setting = \Modules\About\Entities\PersonalInfo::where('name', $name)->first();
    return $setting ? $setting->value : $value;
}
function personal_update($name,$value){

    $setting = \Modules\About\Entities\PersonalInfo::firstOrNew(['name' => $name]);
    $setting->value = $value;
    $setting->save();
}
