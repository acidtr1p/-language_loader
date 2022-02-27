<?php
function load_language($mod_language_name)
{
    // control if input language exist in current user's language path, else return default
    global $THIS_BASEPATH, $USERLANG, $language;

    if (@file_exists($USERLANG.'/'.$mod_language_name)) {
        if ($USERLANG != $THIS_BASEPATH.'/language/english') {
            include_once $THIS_BASEPATH.'/language/english/'.$mod_language_name;
        }

        return $USERLANG.'/'.$mod_language_name;
    }

    return $xConfig["THIS_BASEPATH"].'/language/english/'.$mod_language_name;
}
?>

#How 2 Use:
<?php
global $USERLANG;
require_once load_language('lang_blocks.php');
stderr($language['ERROR'], $language['REACHED_MAX_USERS']);
?>
