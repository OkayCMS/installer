<?php
if(isset($errors)) {
    foreach($errors as $error) {
        print "<p class=\"error_block\">$error</p>";
    }
}
?>



<div class="step_last">
    <div class="step_last__inf1">
        <?=$lang->contact_block_title?>:
    </div>

    <div class="step_last__inf2">
    <p class=""><?=$lang->front?>: <a href="<?=$url?>"><?=$url?></a></p>
    <p class=""><?=$lang->backend?>: <a href="<?=$url?>/backend"><?=$url?>/backend</a></p>

    <?php if (!empty($_SESSION['admin']) && !empty($_SESSION['user_pass'])) {?>
        <p><?=$lang->login?>: <span class="step_last__value"><?=$_SESSION['admin']?></span></p>
        <p><?=$lang->passwd?>: <span class="step_last__value"><?=$_SESSION['user_pass']?></span></p>

    <?php }?>
    </div>
</div>



<div class="step_last__thanks"><?=$lang->thanks?></div>




<script>
    window.onload = function() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'deleteInstall.php', false);
        xhr.send();
    }
</script>
