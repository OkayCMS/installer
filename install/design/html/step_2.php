
<?php
if(isset($error)){
    print "<p class=\"error_block\">" . $error . "</p>";
} else {?>

<p> <?=$lang->enter_db_settings?> </p>
<?php



if(isset($errors)) {
    foreach($errors as $error) {
        print "<p class=\"error_block\">$error</p>";
    }
}
?>

<form method="POST" class="clearfix">
    <div class="wrap_form">
        <div class="row">
            <div class="col-6">
                <div class=" mb-1">
                    <label class=""><?=$lang->db_server?></label>
                    <input class="form_input" type="text" name="dbhost" value="<?php isset($dbhost) ? print $dbhost : ''?>" placeholder="localhost">
                </div>
            </div>

            <div class="col-6">
                <div class=" mb-1">
                    <label class=""><?=$lang->db_name?></label>
                    <input class="form_input" type="text" name="dbname" value="<?php isset($dbname) ? print $dbname : ''?>">
                </div>
            </div>

            <div class="col-6">
                <div class=" mb-1">
                    <label class=""><?=$lang->db_user?></label>
                    <input class="form_input" type="text" name="dbuser" value="<?php isset($dbuser) ? print $dbuser : ''?>">
                </div>
            </div>

            <div class="col-6">
                <div class=" mb-1">
                    <label class=""><?=$lang->db_password?></label>
                    <input  class="form_input"type="text" name="dbpassword" value="<?php isset($dbpassword) ? print htmlentities(stripcslashes($dbpassword)) : ''?>">
                </div>
            </div>

        </div>
    </div>
    <div class="">
        <input type="submit" class="next_step_button" name="dbconfig" value="<?=$lang->next_step?>">
    </div>

</form>
<?php }?>
