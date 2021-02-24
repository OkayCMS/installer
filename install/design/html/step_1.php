<table id="test_server" cellspacing="0" border="0">
    <?php if(!empty($test_server['working_dir'])){?>
    <tr class="<?=$test_server['working_dir']['status']?>">
        <td class="test_param">
            <?=$lang->text_access_working_dir?>
        </td>
        <td class="test_result_message">
            <?=$test_server['working_dir']['message']?>
        </td>
        <td class="test_result_icon">
        </td>
    </tr>
    <?php }?>
    <tr class="<?=$test_server['php']['status']?>">
        <td class="test_param">
            <?=$lang->text_php_version?>
        </td>
        <td class="test_result_message">
            <?=$test_server['php']['message']?>
        </td>
        <td class="test_result_icon">
        </td>
    </tr>
    <?php foreach($test_server['extensions'] as $extension){?>
    <tr class="<?=$extension['status']?>">
        <td class="test_param">
            <?=$extension['name']?>
        </td>
        <td class="test_result_message">
            <?=$extension['message']?>
        </td>
        <td class="test_result_icon">
        </td>
    </tr>
    <?php }?>
    
    <?php foreach($test_server['php_ini_params'] as $ini_param){?>
    <tr class="<?=$ini_param['status']?>">
        <td class="test_param">
            <?=$ini_param['name']?>
        </td>
        <td class="test_result_message">
            <?=$ini_param['message']?>
        </td>
        <td class="test_result_icon">
        </td>
    </tr>
    <?php }?>

    <tr  class="<?=$extension['status']?>">
            <td colspan="3" class="test_param">
                <p class="check_true">
                    <svg fill="#129737" width="20px" height="20px" viewBox="0 0 510 510">
                        <path d="M150.45,206.55l-35.7,35.7L229.5,357l255-255l-35.7-35.7L229.5,285.6L150.45,206.55z M459,255c0,112.2-91.8,204-204,204
                        S51,367.2,51,255S142.8,51,255,51c20.4,0,38.25,2.55,56.1,7.65l40.801-40.8C321.3,7.65,288.15,0,255,0C114.75,0,0,114.75,0,255
                        s114.75,255,255,255s255-114.75,255-255H459z"/>
                    </svg>
                    <span><?=$lang->text_success_test?></span>
                </p>

            </td>
        </tr>

</table>

<div class="step_info">
    <p><?=$lang->text_now_we_unzipped?></p>
    <?=dirname(dirname(dirname(__DIR__)))?>
    <p><?=$lang->text_files_will_be_deleted?></p>
    <p><?=$lang->text_important_files?></p>
</div>

<?php if($test_server['total_result']){?>

    <form method="GET" class="clearfix" onsubmit="return check()">
        <div class="">
            <input name="route" type="hidden" value="Step_2" />
            <input id="i_agree" type="checkbox" required>
            <label for="i_agree"><?=$lang->i_agree?></label>
            <a href="https://okay-cms.com/license-okaycms" target="_blank"><?=$lang->license_link?></a>
        </div>
        <div class="">
            <input type="submit" class="next_step_button" value="<?=$lang->next_step?>" />
        </div>
     </form>
    <script>
        function check(){
            if(document.getElementById('i_agree').checked === false) {
                return false;
            }
        }
    </script>
<?php } else {?>
    <form method="GET" class="clearfix">
        <input name="route" type="hidden" value="Step_1" />
        <input type="submit" class="next_step_button" value="<?=$lang->re_test?>" />
    </form>
<?php }?>
