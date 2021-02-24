<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="ru" />
    <link href="design/css/style.css" rel="stylesheet"/>
    <link href="design/images/favicon.png" type="image/x-icon" rel="icon"/>
    <link href="design/images/favicon.png" type="image/x-icon" rel="shortcut icon"/>
    <title><?=$lang->meta_title?></title>
</head>
<body>
    <div class="main">
        <div class="wrapper">
            <div class="content">
                <div class="content_left">
                    <div class="content_left__header">
                        <?php if(!empty($languages)) :?>
                         <div class="languages">
                             <?=$lang->install_lang?>
                             <div>
                             <?php foreach($languages as $l_label=>$l_param) :?>
                                 <a href="<?=$l_param->url?>" class="lang_item <?=($current_language->lang_label == $l_label ? "selected" : "")?>">
                                     <img width="16" height="16" src="design/images/<?=$l_param->image?>" style="vertical-align: middle;margin-top: -2px" /> <?=$l_param->name?>
                                 </a>
                             <?php endforeach; ?>
                            </div>
                         </div>
                         <?php endif; ?>
                     </div>
                    <div class="content_left__content">
                        <div class="content_left__logo">
                            <img src="design/images/install_logo.png" width="300px" />
                         </div>

                        <div class="version_block"><?=$lang->system_version . $config->version?></div>
                    </div>
                    <div class="content_left__footer">
                        <a class="footer_link" target="_blank" href="https://okay-cms.com"><?=$lang->project_homepage?></a>
                        <a class="footer_link" target="_blank" href="https://forum.okay-cms.com"><?=$lang->support_forum?></a>
                    </div>
                 </div>
                 <div class="content_right">
                    <div class="content_right__content">
                         <div class="h1_title">
                            <h1><?=$lang->title_h1?> </h1>
                         </div>
                         <?php require $content; ?>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</body>
</html>