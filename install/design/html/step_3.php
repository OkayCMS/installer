
<?php
if(isset($errors)) {
    foreach($errors as $error) {
        print "<p class=\"error_block\">$error</p>";
    }
}
?>

<form method="POST" class="clearfix">
    <p class="legend_name"><?=$lang->backend_settings?></p>
    <div class="wrap_form">
    <div class="row">
        <div class="col-6">
            <div class=" mb-1">
                <label class=""><?=$lang->user_login?></label>
                <input class="form_input" type="text" name="user_login" value="" placeholder="" required>
            </div>
        </div>
        <div class="col-6">
            <div class=" mb-1">
                <label class=""><?=$lang->user_pass?></label>
                <input class="form_input" type="text" name="user_pass" value="" placeholder="" required>
            </div>
        </div>

        <div class="col-6">
            <div class=" mb-1">
                <label><?=$lang->user_email?> <span class="hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-hint="<?=$lang->user_email_title?>">
                    <svg width="13px" height="13px" viewBox="0 0 438.533 438.533">
                        <path fill="#545454" d="M409.133,109.203c-19.608-33.592-46.205-60.189-79.798-79.796C295.736,9.801,259.058,0,219.273,0
                        c-39.781,0-76.47,9.801-110.063,29.407c-33.595,19.604-60.192,46.201-79.8,79.796C9.801,142.8,0,179.489,0,219.267
                        c0,39.78,9.804,76.463,29.407,110.062c19.607,33.592,46.204,60.189,79.799,79.798c33.597,19.605,70.283,29.407,110.063,29.407
                        s76.47-9.802,110.065-29.407c33.593-19.602,60.189-46.206,79.795-79.798c19.603-33.596,29.403-70.284,29.403-110.062
                        C438.533,179.485,428.732,142.795,409.133,109.203z M255.82,356.309c0,2.662-0.862,4.853-2.573,6.563
                        c-1.704,1.711-3.895,2.567-6.557,2.567h-54.823c-2.664,0-4.854-0.856-6.567-2.567c-1.714-1.711-2.57-3.901-2.57-6.563v-54.823
                        c0-2.662,0.855-4.853,2.57-6.563c1.713-1.708,3.903-2.563,6.567-2.563h54.823c2.662,0,4.853,0.855,6.557,2.563
                        c1.711,1.711,2.573,3.901,2.573,6.563V356.309z M325.338,187.574c-2.382,7.043-5.044,12.804-7.994,17.275
                        c-2.949,4.473-7.187,9.042-12.709,13.703c-5.51,4.663-9.891,7.996-13.135,9.998c-3.23,1.995-7.898,4.713-13.982,8.135
                        c-6.283,3.613-11.465,8.326-15.555,14.134c-4.093,5.804-6.139,10.513-6.139,14.126c0,2.67-0.862,4.859-2.574,6.571
                        c-1.707,1.711-3.897,2.566-6.56,2.566h-54.82c-2.664,0-4.854-0.855-6.567-2.566c-1.715-1.712-2.568-3.901-2.568-6.571v-10.279
                        c0-12.752,4.993-24.701,14.987-35.832c9.994-11.136,20.986-19.368,32.979-24.698c9.13-4.186,15.604-8.47,19.41-12.847
                        c3.812-4.377,5.715-10.188,5.715-17.417c0-6.283-3.572-11.897-10.711-16.849c-7.139-4.947-15.27-7.421-24.409-7.421
                        c-9.9,0-18.082,2.285-24.555,6.855c-6.283,4.565-14.465,13.322-24.554,26.263c-1.713,2.286-4.093,3.431-7.139,3.431
                        c-2.284,0-4.093-0.57-5.424-1.709L121.35,145.89c-4.377-3.427-5.138-7.422-2.286-11.991
                        c24.366-40.542,59.672-60.813,105.922-60.813c16.563,0,32.744,3.903,48.541,11.708c15.796,7.801,28.979,18.842,39.546,33.119
                        c10.554,14.272,15.845,29.787,15.845,46.537C328.904,172.824,327.71,180.529,325.338,187.574z"/>
                    </svg>
                </span></label>
                <input class="form_input" type="text" name="user_email" value="" required>
            </div>
        </div>

        <div class="col-6">
            <div class=" mb-1">
                <label><?=$lang->backend_lang?></label>
                <select name="backend_lang" class="form_input">
                    <?php foreach ($backend_langs as $label=>$name) {
                        print "<option value='{$label}'";
                        if ($label == $current_language->lang_label) {
                            print " selected";
                        }
                        print ">{$name}</option>";
                    }?>
                </select>
            </div>
        </div>
    </div>
    </div>



<p class="legend_name"><?=$lang->front_settings?> <span class="hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-hint="<?=$lang->front_settings_title?>">
    <svg width="13px" height="13px" viewBox="0 0 438.533 438.533">
        <path fill="#545454" d="M409.133,109.203c-19.608-33.592-46.205-60.189-79.798-79.796C295.736,9.801,259.058,0,219.273,0
        c-39.781,0-76.47,9.801-110.063,29.407c-33.595,19.604-60.192,46.201-79.8,79.796C9.801,142.8,0,179.489,0,219.267
        c0,39.78,9.804,76.463,29.407,110.062c19.607,33.592,46.204,60.189,79.799,79.798c33.597,19.605,70.283,29.407,110.063,29.407
        s76.47-9.802,110.065-29.407c33.593-19.602,60.189-46.206,79.795-79.798c19.603-33.596,29.403-70.284,29.403-110.062
        C438.533,179.485,428.732,142.795,409.133,109.203z M255.82,356.309c0,2.662-0.862,4.853-2.573,6.563
        c-1.704,1.711-3.895,2.567-6.557,2.567h-54.823c-2.664,0-4.854-0.856-6.567-2.567c-1.714-1.711-2.57-3.901-2.57-6.563v-54.823
        c0-2.662,0.855-4.853,2.57-6.563c1.713-1.708,3.903-2.563,6.567-2.563h54.823c2.662,0,4.853,0.855,6.557,2.563
        c1.711,1.711,2.573,3.901,2.573,6.563V356.309z M325.338,187.574c-2.382,7.043-5.044,12.804-7.994,17.275
        c-2.949,4.473-7.187,9.042-12.709,13.703c-5.51,4.663-9.891,7.996-13.135,9.998c-3.23,1.995-7.898,4.713-13.982,8.135
        c-6.283,3.613-11.465,8.326-15.555,14.134c-4.093,5.804-6.139,10.513-6.139,14.126c0,2.67-0.862,4.859-2.574,6.571
        c-1.707,1.711-3.897,2.566-6.56,2.566h-54.82c-2.664,0-4.854-0.855-6.567-2.566c-1.715-1.712-2.568-3.901-2.568-6.571v-10.279
        c0-12.752,4.993-24.701,14.987-35.832c9.994-11.136,20.986-19.368,32.979-24.698c9.13-4.186,15.604-8.47,19.41-12.847
        c3.812-4.377,5.715-10.188,5.715-17.417c0-6.283-3.572-11.897-10.711-16.849c-7.139-4.947-15.27-7.421-24.409-7.421
        c-9.9,0-18.082,2.285-24.555,6.855c-6.283,4.565-14.465,13.322-24.554,26.263c-1.713,2.286-4.093,3.431-7.139,3.431
        c-2.284,0-4.093-0.57-5.424-1.709L121.35,145.89c-4.377-3.427-5.138-7.422-2.286-11.991
        c24.366-40.542,59.672-60.813,105.922-60.813c16.563,0,32.744,3.903,48.541,11.708c15.796,7.801,28.979,18.842,39.546,33.119
        c10.554,14.272,15.845,29.787,15.845,46.537C328.904,172.824,327.71,180.529,325.338,187.574z"/>
    </svg>
</span></p>
    <div class="wrap_form">

    <div class="row">
            <div class="col-6">
                <div class=" mb-1">
                    <label class=""><?=$lang->site_name?></label>
                    <input class="form_input" type="text" name="site_name" value="">
                </div>
            </div>

            <div class="col-6">
                <div class=" mb-1">
                    <label class=""><?=$lang->notify_email?> <span class="hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-hint="<?=$lang->notify_email_title?>">
                        <svg width="13px" height="13px" viewBox="0 0 438.533 438.533">
                                                <path fill="#545454" d="M409.133,109.203c-19.608-33.592-46.205-60.189-79.798-79.796C295.736,9.801,259.058,0,219.273,0
                                                c-39.781,0-76.47,9.801-110.063,29.407c-33.595,19.604-60.192,46.201-79.8,79.796C9.801,142.8,0,179.489,0,219.267
                                                c0,39.78,9.804,76.463,29.407,110.062c19.607,33.592,46.204,60.189,79.799,79.798c33.597,19.605,70.283,29.407,110.063,29.407
                                                s76.47-9.802,110.065-29.407c33.593-19.602,60.189-46.206,79.795-79.798c19.603-33.596,29.403-70.284,29.403-110.062
                                                C438.533,179.485,428.732,142.795,409.133,109.203z M255.82,356.309c0,2.662-0.862,4.853-2.573,6.563
                                                c-1.704,1.711-3.895,2.567-6.557,2.567h-54.823c-2.664,0-4.854-0.856-6.567-2.567c-1.714-1.711-2.57-3.901-2.57-6.563v-54.823
                                                c0-2.662,0.855-4.853,2.57-6.563c1.713-1.708,3.903-2.563,6.567-2.563h54.823c2.662,0,4.853,0.855,6.557,2.563
                                                c1.711,1.711,2.573,3.901,2.573,6.563V356.309z M325.338,187.574c-2.382,7.043-5.044,12.804-7.994,17.275
                                                c-2.949,4.473-7.187,9.042-12.709,13.703c-5.51,4.663-9.891,7.996-13.135,9.998c-3.23,1.995-7.898,4.713-13.982,8.135
                                                c-6.283,3.613-11.465,8.326-15.555,14.134c-4.093,5.804-6.139,10.513-6.139,14.126c0,2.67-0.862,4.859-2.574,6.571
                                                c-1.707,1.711-3.897,2.566-6.56,2.566h-54.82c-2.664,0-4.854-0.855-6.567-2.566c-1.715-1.712-2.568-3.901-2.568-6.571v-10.279
                                                c0-12.752,4.993-24.701,14.987-35.832c9.994-11.136,20.986-19.368,32.979-24.698c9.13-4.186,15.604-8.47,19.41-12.847
                                                c3.812-4.377,5.715-10.188,5.715-17.417c0-6.283-3.572-11.897-10.711-16.849c-7.139-4.947-15.27-7.421-24.409-7.421
                                                c-9.9,0-18.082,2.285-24.555,6.855c-6.283,4.565-14.465,13.322-24.554,26.263c-1.713,2.286-4.093,3.431-7.139,3.431
                                                c-2.284,0-4.093-0.57-5.424-1.709L121.35,145.89c-4.377-3.427-5.138-7.422-2.286-11.991
                                                c24.366-40.542,59.672-60.813,105.922-60.813c16.563,0,32.744,3.903,48.541,11.708c15.796,7.801,28.979,18.842,39.546,33.119
                                                c10.554,14.272,15.845,29.787,15.845,46.537C328.904,172.824,327.71,180.529,325.338,187.574z"/>
                                            </svg>
                    </span></label>
                    <input class="form_input" type="text" name="notify_email" value="">
                </div>
            </div>
             <div class="col-6">
                <div class=" mb-1">
                    <label class=""><?=$lang->main_currency?></label>
                    <select name="main_currency" class="form_input">
                        <?php foreach ($site_currencies as $currency) {
                            print "<option value='{$currency->id}'";
                            if ($currency->code == $current_language->recomended_currency) {
                                print " selected";
                            }
                            print ">{$currency->name}</option>";
                        }?>
                    </select>
                </div>
            </div>

             <div class="col-6">
                <div class=" mb-1">
                    <label class=""><?=$lang->main_language?></label>
                    <select name="main_language" class="form_input">
                        <?php foreach ($site_langs as $language) {
                            print "<option value='{$language->id}'";
                            if ($language->label == $current_language->lang_label || $language->href_lang == $current_language->lang_label) {
                                print " selected";
                            }
                            print ">{$language->name}</option>";
                        }?>
                    </select>
                </div>
            </div>
        
            <div class="col-6">
                <div class=" mb-1">
                    <label class=""><?=$lang->phone_default_region?><span class="hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-hint="<?=$lang->phone_default_region_title?>">
                            <svg width="13px" height="13px" viewBox="0 0 438.533 438.533">
                                <path fill="#545454" d="M409.133,109.203c-19.608-33.592-46.205-60.189-79.798-79.796C295.736,9.801,259.058,0,219.273,0
                                c-39.781,0-76.47,9.801-110.063,29.407c-33.595,19.604-60.192,46.201-79.8,79.796C9.801,142.8,0,179.489,0,219.267
                                c0,39.78,9.804,76.463,29.407,110.062c19.607,33.592,46.204,60.189,79.799,79.798c33.597,19.605,70.283,29.407,110.063,29.407
                                s76.47-9.802,110.065-29.407c33.593-19.602,60.189-46.206,79.795-79.798c19.603-33.596,29.403-70.284,29.403-110.062
                                C438.533,179.485,428.732,142.795,409.133,109.203z M255.82,356.309c0,2.662-0.862,4.853-2.573,6.563
                                c-1.704,1.711-3.895,2.567-6.557,2.567h-54.823c-2.664,0-4.854-0.856-6.567-2.567c-1.714-1.711-2.57-3.901-2.57-6.563v-54.823
                                c0-2.662,0.855-4.853,2.57-6.563c1.713-1.708,3.903-2.563,6.567-2.563h54.823c2.662,0,4.853,0.855,6.557,2.563
                                c1.711,1.711,2.573,3.901,2.573,6.563V356.309z M325.338,187.574c-2.382,7.043-5.044,12.804-7.994,17.275
                                c-2.949,4.473-7.187,9.042-12.709,13.703c-5.51,4.663-9.891,7.996-13.135,9.998c-3.23,1.995-7.898,4.713-13.982,8.135
                                c-6.283,3.613-11.465,8.326-15.555,14.134c-4.093,5.804-6.139,10.513-6.139,14.126c0,2.67-0.862,4.859-2.574,6.571
                                c-1.707,1.711-3.897,2.566-6.56,2.566h-54.82c-2.664,0-4.854-0.855-6.567-2.566c-1.715-1.712-2.568-3.901-2.568-6.571v-10.279
                                c0-12.752,4.993-24.701,14.987-35.832c9.994-11.136,20.986-19.368,32.979-24.698c9.13-4.186,15.604-8.47,19.41-12.847
                                c3.812-4.377,5.715-10.188,5.715-17.417c0-6.283-3.572-11.897-10.711-16.849c-7.139-4.947-15.27-7.421-24.409-7.421
                                c-9.9,0-18.082,2.285-24.555,6.855c-6.283,4.565-14.465,13.322-24.554,26.263c-1.713,2.286-4.093,3.431-7.139,3.431
                                c-2.284,0-4.093-0.57-5.424-1.709L121.35,145.89c-4.377-3.427-5.138-7.422-2.286-11.991
                                c24.366-40.542,59.672-60.813,105.922-60.813c16.563,0,32.744,3.903,48.541,11.708c15.796,7.801,28.979,18.842,39.546,33.119
                                c10.554,14.272,15.845,29.787,15.845,46.537C328.904,172.824,327.71,180.529,325.338,187.574z"/>
                            </svg>
                    </span></label>
                    <select name="phone_default_region" class="form_input">
                        <option value="UA"<?php if ($current_language->recomended_phone_country == 'UA') {print " selected";} ?>><?=$lang->country_UA?> (UA)</option>
                        <option value="RU"<?php if ($current_language->recomended_phone_country == 'RU') {print " selected";} ?>><?=$lang->country_RU?> (RU)</option>
                        <option value="GE"<?php if ($current_language->recomended_phone_country == 'GE') {print " selected";} ?>><?=$lang->country_GE?> (GE)</option>
                        <option value="US"<?php if ($current_language->recomended_phone_country == 'US') {print " selected";} ?>><?=$lang->country_US?> (US)</option>
                        <option value="AG"<?php if ($current_language->recomended_phone_country == 'AG') {print " selected";} ?>><?=$lang->country_AG?> (AG)</option>
                        <option value="AI"<?php if ($current_language->recomended_phone_country == 'AI') {print " selected";} ?>><?=$lang->country_AI?> (AI)</option>
                        <option value="AS"<?php if ($current_language->recomended_phone_country == 'AS') {print " selected";} ?>><?=$lang->country_AS?> (AS)</option>
                        <option value="BB"<?php if ($current_language->recomended_phone_country == 'BB') {print " selected";} ?>><?=$lang->country_BB?> (BB)</option>
                        <option value="BM"<?php if ($current_language->recomended_phone_country == 'BM') {print " selected";} ?>><?=$lang->country_BM?> (BM)</option>
                        <option value="BS"<?php if ($current_language->recomended_phone_country == 'BS') {print " selected";} ?>><?=$lang->country_BS?> (BS)</option>
                        <option value="CA"<?php if ($current_language->recomended_phone_country == 'CA') {print " selected";} ?>><?=$lang->country_CA?> (CA)</option>
                        <option value="DM"<?php if ($current_language->recomended_phone_country == 'DM') {print " selected";} ?>><?=$lang->country_DM?> (DM)</option>
                        <option value="DO"<?php if ($current_language->recomended_phone_country == 'DO') {print " selected";} ?>><?=$lang->country_DO?> (DO)</option>
                        <option value="GD"<?php if ($current_language->recomended_phone_country == 'GD') {print " selected";} ?>><?=$lang->country_GD?> (GD)</option>
                        <option value="GU"<?php if ($current_language->recomended_phone_country == 'GU') {print " selected";} ?>><?=$lang->country_GU?> (GU)</option>
                        <option value="JM"<?php if ($current_language->recomended_phone_country == 'JM') {print " selected";} ?>><?=$lang->country_JM?> (JM)</option>
                        <option value="KN"<?php if ($current_language->recomended_phone_country == 'KN') {print " selected";} ?>><?=$lang->country_KN?> (KN)</option>
                        <option value="KY"<?php if ($current_language->recomended_phone_country == 'KY') {print " selected";} ?>><?=$lang->country_KY?> (KY)</option>
                        <option value="LC"<?php if ($current_language->recomended_phone_country == 'LC') {print " selected";} ?>><?=$lang->country_LC?> (LC)</option>
                        <option value="MP"<?php if ($current_language->recomended_phone_country == 'MP') {print " selected";} ?>><?=$lang->country_MP?> (MP)</option>
                        <option value="MS"<?php if ($current_language->recomended_phone_country == 'MS') {print " selected";} ?>><?=$lang->country_MS?> (MS)</option>
                        <option value="PR"<?php if ($current_language->recomended_phone_country == 'PR') {print " selected";} ?>><?=$lang->country_PR?> (PR)</option>
                        <option value="SX"<?php if ($current_language->recomended_phone_country == 'SX') {print " selected";} ?>><?=$lang->country_SX?> (SX)</option>
                        <option value="TC"<?php if ($current_language->recomended_phone_country == 'TC') {print " selected";} ?>><?=$lang->country_TC?> (TC)</option>
                        <option value="TT"<?php if ($current_language->recomended_phone_country == 'TT') {print " selected";} ?>><?=$lang->country_TT?> (TT)</option>
                        <option value="VC"<?php if ($current_language->recomended_phone_country == 'VC') {print " selected";} ?>><?=$lang->country_VC?> (VC)</option>
                        <option value="VG"<?php if ($current_language->recomended_phone_country == 'VG') {print " selected";} ?>><?=$lang->country_VG?> (VG)</option>
                        <option value="VI"<?php if ($current_language->recomended_phone_country == 'VI') {print " selected";} ?>><?=$lang->country_VI?> (VI)</option>
                        <option value="KZ"<?php if ($current_language->recomended_phone_country == 'KZ') {print " selected";} ?>><?=$lang->country_KZ?> (KZ)</option>
                        <option value="EG"<?php if ($current_language->recomended_phone_country == 'EG') {print " selected";} ?>><?=$lang->country_EG?> (EG)</option>
                        <option value="ZA"<?php if ($current_language->recomended_phone_country == 'ZA') {print " selected";} ?>><?=$lang->country_ZA?> (ZA)</option>
                        <option value="GR"<?php if ($current_language->recomended_phone_country == 'GR') {print " selected";} ?>><?=$lang->country_GR?> (GR)</option>
                        <option value="NL"<?php if ($current_language->recomended_phone_country == 'NL') {print " selected";} ?>><?=$lang->country_NL?> (NL)</option>
                        <option value="BE"<?php if ($current_language->recomended_phone_country == 'BE') {print " selected";} ?>><?=$lang->country_BE?> (BE)</option>
                        <option value="FR"<?php if ($current_language->recomended_phone_country == 'FR') {print " selected";} ?>><?=$lang->country_FR?> (FR)</option>
                        <option value="ES"<?php if ($current_language->recomended_phone_country == 'ES') {print " selected";} ?>><?=$lang->country_ES?> (ES)</option>
                        <option value="HU"<?php if ($current_language->recomended_phone_country == 'HU') {print " selected";} ?>><?=$lang->country_HU?> (HU)</option>
                        <option value="IT"<?php if ($current_language->recomended_phone_country == 'IT') {print " selected";} ?>><?=$lang->country_IT?> (IT)</option>
                        <option value="VA"<?php if ($current_language->recomended_phone_country == 'VA') {print " selected";} ?>><?=$lang->country_VA?> (VA)</option>
                        <option value="RO"<?php if ($current_language->recomended_phone_country == 'RO') {print " selected";} ?>><?=$lang->country_RO?> (RO)</option>
                        <option value="CH"<?php if ($current_language->recomended_phone_country == 'CH') {print " selected";} ?>><?=$lang->country_CH?> (CH)</option>
                        <option value="AT"<?php if ($current_language->recomended_phone_country == 'AT') {print " selected";} ?>><?=$lang->country_AT?> (AT)</option>
                        <option value="GB"<?php if ($current_language->recomended_phone_country == 'GB') {print " selected";} ?>><?=$lang->country_GB?> (GB)</option>
                        <option value="GG"<?php if ($current_language->recomended_phone_country == 'GG') {print " selected";} ?>><?=$lang->country_GG?> (GG)</option>
                        <option value="IM"<?php if ($current_language->recomended_phone_country == 'IM') {print " selected";} ?>><?=$lang->country_IM?> (IM)</option>
                        <option value="JE"<?php if ($current_language->recomended_phone_country == 'JE') {print " selected";} ?>><?=$lang->country_JE?> (JE)</option>
                        <option value="DK"<?php if ($current_language->recomended_phone_country == 'DK') {print " selected";} ?>><?=$lang->country_DK?> (DK)</option>
                        <option value="SE"<?php if ($current_language->recomended_phone_country == 'SE') {print " selected";} ?>><?=$lang->country_SE?> (SE)</option>
                        <option value="NO"<?php if ($current_language->recomended_phone_country == 'NO') {print " selected";} ?>><?=$lang->country_NO?> (NO)</option>
                        <option value="SJ"<?php if ($current_language->recomended_phone_country == 'SJ') {print " selected";} ?>><?=$lang->country_SJ?> (SJ)</option>
                        <option value="PL"<?php if ($current_language->recomended_phone_country == 'PL') {print " selected";} ?>><?=$lang->country_PL?> (PL)</option>
                        <option value="DE"<?php if ($current_language->recomended_phone_country == 'DE') {print " selected";} ?>><?=$lang->country_DE?> (DE)</option>
                        <option value="PE"<?php if ($current_language->recomended_phone_country == 'PE') {print " selected";} ?>><?=$lang->country_PE?> (PE)</option>
                        <option value="MX"<?php if ($current_language->recomended_phone_country == 'MX') {print " selected";} ?>><?=$lang->country_MX?> (MX)</option>
                        <option value="CU"<?php if ($current_language->recomended_phone_country == 'CU') {print " selected";} ?>><?=$lang->country_CU?> (CU)</option>
                        <option value="AR"<?php if ($current_language->recomended_phone_country == 'AR') {print " selected";} ?>><?=$lang->country_AR?> (AR)</option>
                        <option value="BR"<?php if ($current_language->recomended_phone_country == 'BR') {print " selected";} ?>><?=$lang->country_BR?> (BR)</option>
                        <option value="CL"<?php if ($current_language->recomended_phone_country == 'CL') {print " selected";} ?>><?=$lang->country_CL?> (CL)</option>
                        <option value="CO"<?php if ($current_language->recomended_phone_country == 'CO') {print " selected";} ?>><?=$lang->country_CO?> (CO)</option>
                        <option value="VE"<?php if ($current_language->recomended_phone_country == 'VE') {print " selected";} ?>><?=$lang->country_VE?> (VE)</option>
                        <option value="MY"<?php if ($current_language->recomended_phone_country == 'MY') {print " selected";} ?>><?=$lang->country_MY?> (MY)</option>
                        <option value="AU"<?php if ($current_language->recomended_phone_country == 'AU') {print " selected";} ?>><?=$lang->country_AU?> (AU)</option>
                        <option value="CC"<?php if ($current_language->recomended_phone_country == 'CC') {print " selected";} ?>><?=$lang->country_CC?> (CC)</option>
                        <option value="CX"<?php if ($current_language->recomended_phone_country == 'CX') {print " selected";} ?>><?=$lang->country_CX?> (CX)</option>
                        <option value="ID"<?php if ($current_language->recomended_phone_country == 'ID') {print " selected";} ?>><?=$lang->country_ID?> (ID)</option>
                        <option value="PH"<?php if ($current_language->recomended_phone_country == 'PH') {print " selected";} ?>><?=$lang->country_PH?> (PH)</option>
                        <option value="NZ"<?php if ($current_language->recomended_phone_country == 'NZ') {print " selected";} ?>><?=$lang->country_NZ?> (NZ)</option>
                        <option value="SG"<?php if ($current_language->recomended_phone_country == 'SG') {print " selected";} ?>><?=$lang->country_SG?> (SG)</option>
                        <option value="TH"<?php if ($current_language->recomended_phone_country == 'TH') {print " selected";} ?>><?=$lang->country_TH?> (TH)</option>
                        <option value="JP"<?php if ($current_language->recomended_phone_country == 'JP') {print " selected";} ?>><?=$lang->country_JP?> (JP)</option>
                        <option value="KR"<?php if ($current_language->recomended_phone_country == 'KR') {print " selected";} ?>><?=$lang->country_KR?> (KR)</option>
                        <option value="VN"<?php if ($current_language->recomended_phone_country == 'VN') {print " selected";} ?>><?=$lang->country_VN?> (VN)</option>
                        <option value="CN"<?php if ($current_language->recomended_phone_country == 'CN') {print " selected";} ?>><?=$lang->country_CN?> (CN)</option>
                        <option value="TR"<?php if ($current_language->recomended_phone_country == 'TR') {print " selected";} ?>><?=$lang->country_TR?> (TR)</option>
                        <option value="IN"<?php if ($current_language->recomended_phone_country == 'IN') {print " selected";} ?>><?=$lang->country_IN?> (IN)</option>
                        <option value="PK"<?php if ($current_language->recomended_phone_country == 'PK') {print " selected";} ?>><?=$lang->country_PK?> (PK)</option>
                        <option value="AF"<?php if ($current_language->recomended_phone_country == 'AF') {print " selected";} ?>><?=$lang->country_AF?> (AF)</option>
                        <option value="LK"<?php if ($current_language->recomended_phone_country == 'LK') {print " selected";} ?>><?=$lang->country_LK?> (LK)</option>
                        <option value="MM"<?php if ($current_language->recomended_phone_country == 'MM') {print " selected";} ?>><?=$lang->country_MM?> (MM)</option>
                        <option value="IR"<?php if ($current_language->recomended_phone_country == 'IR') {print " selected";} ?>><?=$lang->country_IR?> (IR)</option>
                        <option value="SS"<?php if ($current_language->recomended_phone_country == 'SS') {print " selected";} ?>><?=$lang->country_SS?> (SS)</option>
                        <option value="MA"<?php if ($current_language->recomended_phone_country == 'MA') {print " selected";} ?>><?=$lang->country_MA?> (MA)</option>
                        <option value="EH"<?php if ($current_language->recomended_phone_country == 'EH') {print " selected";} ?>><?=$lang->country_EH?> (EH)</option>
                        <option value="DZ"<?php if ($current_language->recomended_phone_country == 'DZ') {print " selected";} ?>><?=$lang->country_DZ?> (DZ)</option>
                        <option value="TN"<?php if ($current_language->recomended_phone_country == 'TN') {print " selected";} ?>><?=$lang->country_TN?> (TN)</option>
                        <option value="LY"<?php if ($current_language->recomended_phone_country == 'LY') {print " selected";} ?>><?=$lang->country_LY?> (LY)</option>
                        <option value="GM"<?php if ($current_language->recomended_phone_country == 'GM') {print " selected";} ?>><?=$lang->country_GM?> (GM)</option>
                        <option value="SN"<?php if ($current_language->recomended_phone_country == 'SN') {print " selected";} ?>><?=$lang->country_SN?> (SN)</option>
                        <option value="MR"<?php if ($current_language->recomended_phone_country == 'MR') {print " selected";} ?>><?=$lang->country_MR?> (MR)</option>
                        <option value="ML"<?php if ($current_language->recomended_phone_country == 'ML') {print " selected";} ?>><?=$lang->country_ML?> (ML)</option>
                        <option value="GN"<?php if ($current_language->recomended_phone_country == 'GN') {print " selected";} ?>><?=$lang->country_GN?> (GN)</option>
                        <option value="CI"<?php if ($current_language->recomended_phone_country == 'CI') {print " selected";} ?>><?=$lang->country_CI?> (CI)</option>
                        <option value="BF"<?php if ($current_language->recomended_phone_country == 'BF') {print " selected";} ?>><?=$lang->country_BF?> (BF)</option>
                        <option value="NE"<?php if ($current_language->recomended_phone_country == 'NE') {print " selected";} ?>><?=$lang->country_NE?> (NE)</option>
                        <option value="TG"<?php if ($current_language->recomended_phone_country == 'TG') {print " selected";} ?>><?=$lang->country_TG?> (TG)</option>
                        <option value="BJ"<?php if ($current_language->recomended_phone_country == 'BJ') {print " selected";} ?>><?=$lang->country_BJ?> (BJ)</option>
                        <option value="MU"<?php if ($current_language->recomended_phone_country == 'MU') {print " selected";} ?>><?=$lang->country_MU?> (MU)</option>
                        <option value="LR"<?php if ($current_language->recomended_phone_country == 'LR') {print " selected";} ?>><?=$lang->country_LR?> (LR)</option>
                        <option value="SL"<?php if ($current_language->recomended_phone_country == 'SL') {print " selected";} ?>><?=$lang->country_SL?> (SL)</option>
                        <option value="GH"<?php if ($current_language->recomended_phone_country == 'GH') {print " selected";} ?>><?=$lang->country_GH?> (GH)</option>
                        <option value="NG"<?php if ($current_language->recomended_phone_country == 'NG') {print " selected";} ?>><?=$lang->country_NG?> (NG)</option>
                        <option value="TD"<?php if ($current_language->recomended_phone_country == 'TD') {print " selected";} ?>><?=$lang->country_TD?> (TD)</option>
                        <option value="CF"<?php if ($current_language->recomended_phone_country == 'CF') {print " selected";} ?>><?=$lang->country_CF?> (CF)</option>
                        <option value="CM"<?php if ($current_language->recomended_phone_country == 'CM') {print " selected";} ?>><?=$lang->country_CM?> (CM)</option>
                        <option value="CV"<?php if ($current_language->recomended_phone_country == 'CV') {print " selected";} ?>><?=$lang->country_CV?> (CV)</option>
                        <option value="ST"<?php if ($current_language->recomended_phone_country == 'ST') {print " selected";} ?>><?=$lang->country_ST?> (ST)</option>
                        <option value="GQ"<?php if ($current_language->recomended_phone_country == 'GQ') {print " selected";} ?>><?=$lang->country_GQ?> (GQ)</option>
                        <option value="GA"<?php if ($current_language->recomended_phone_country == 'GA') {print " selected";} ?>><?=$lang->country_GA?> (GA)</option>
                        <option value="CG"<?php if ($current_language->recomended_phone_country == 'CG') {print " selected";} ?>><?=$lang->country_CG?> (CG)</option>
                        <option value="CD"<?php if ($current_language->recomended_phone_country == 'CD') {print " selected";} ?>><?=$lang->country_CD?> (CD)</option>
                        <option value="AO"<?php if ($current_language->recomended_phone_country == 'AO') {print " selected";} ?>><?=$lang->country_AO?> (AO)</option>
                        <option value="GW"<?php if ($current_language->recomended_phone_country == 'GW') {print " selected";} ?>><?=$lang->country_GW?> (GW)</option>
                        <option value="IO"<?php if ($current_language->recomended_phone_country == 'IO') {print " selected";} ?>><?=$lang->country_IO?> (IO)</option>
                        <option value="AC"<?php if ($current_language->recomended_phone_country == 'AC') {print " selected";} ?>><?=$lang->country_AC?> (AC)</option>
                        <option value="SC"<?php if ($current_language->recomended_phone_country == 'SC') {print " selected";} ?>><?=$lang->country_SC?> (SC)</option>
                        <option value="SD"<?php if ($current_language->recomended_phone_country == 'SD') {print " selected";} ?>><?=$lang->country_SD?> (SD)</option>
                        <option value="RW"<?php if ($current_language->recomended_phone_country == 'RW') {print " selected";} ?>><?=$lang->country_RW?> (RW)</option>
                        <option value="ET"<?php if ($current_language->recomended_phone_country == 'ET') {print " selected";} ?>><?=$lang->country_ET?> (ET)</option>
                        <option value="SO"<?php if ($current_language->recomended_phone_country == 'SO') {print " selected";} ?>><?=$lang->country_SO?> (SO)</option>
                        <option value="DJ"<?php if ($current_language->recomended_phone_country == 'DJ') {print " selected";} ?>><?=$lang->country_DJ?> (DJ)</option>
                        <option value="KE"<?php if ($current_language->recomended_phone_country == 'KE') {print " selected";} ?>><?=$lang->country_KE?> (KE)</option>
                        <option value="TZ"<?php if ($current_language->recomended_phone_country == 'TZ') {print " selected";} ?>><?=$lang->country_TZ?> (TZ)</option>
                        <option value="UG"<?php if ($current_language->recomended_phone_country == 'UG') {print " selected";} ?>><?=$lang->country_UG?> (UG)</option>
                        <option value="BI"<?php if ($current_language->recomended_phone_country == 'BI') {print " selected";} ?>><?=$lang->country_BI?> (BI)</option>
                        <option value="MZ"<?php if ($current_language->recomended_phone_country == 'MZ') {print " selected";} ?>><?=$lang->country_MZ?> (MZ)</option>
                        <option value="ZM"<?php if ($current_language->recomended_phone_country == 'ZM') {print " selected";} ?>><?=$lang->country_ZM?> (ZM)</option>
                        <option value="MG"<?php if ($current_language->recomended_phone_country == 'MG') {print " selected";} ?>><?=$lang->country_MG?> (MG)</option>
                        <option value="RE"<?php if ($current_language->recomended_phone_country == 'RE') {print " selected";} ?>><?=$lang->country_RE?> (RE)</option>
                        <option value="YT"<?php if ($current_language->recomended_phone_country == 'YT') {print " selected";} ?>><?=$lang->country_YT?> (YT)</option>
                        <option value="ZW"<?php if ($current_language->recomended_phone_country == 'ZW') {print " selected";} ?>><?=$lang->country_ZW?> (ZW)</option>
                        <option value="NA"<?php if ($current_language->recomended_phone_country == 'NA') {print " selected";} ?>><?=$lang->country_NA?> (NA)</option>
                        <option value="MW"<?php if ($current_language->recomended_phone_country == 'MW') {print " selected";} ?>><?=$lang->country_MW?> (MW)</option>
                        <option value="LS"<?php if ($current_language->recomended_phone_country == 'LS') {print " selected";} ?>><?=$lang->country_LS?> (LS)</option>
                        <option value="BW"<?php if ($current_language->recomended_phone_country == 'BW') {print " selected";} ?>><?=$lang->country_BW?> (BW)</option>
                        <option value="SZ"<?php if ($current_language->recomended_phone_country == 'SZ') {print " selected";} ?>><?=$lang->country_SZ?> (SZ)</option>
                        <option value="KM"<?php if ($current_language->recomended_phone_country == 'KM') {print " selected";} ?>><?=$lang->country_KM?> (KM)</option>
                        <option value="SH"<?php if ($current_language->recomended_phone_country == 'SH') {print " selected";} ?>><?=$lang->country_SH?> (SH)</option>
                        <option value="TA"<?php if ($current_language->recomended_phone_country == 'TA') {print " selected";} ?>><?=$lang->country_TA?> (TA)</option>
                        <option value="ER"<?php if ($current_language->recomended_phone_country == 'ER') {print " selected";} ?>><?=$lang->country_ER?> (ER)</option>
                        <option value="AW"<?php if ($current_language->recomended_phone_country == 'AW') {print " selected";} ?>><?=$lang->country_AW?> (AW)</option>
                        <option value="FO"<?php if ($current_language->recomended_phone_country == 'FO') {print " selected";} ?>><?=$lang->country_FO?> (FO)</option>
                        <option value="GL"<?php if ($current_language->recomended_phone_country == 'GL') {print " selected";} ?>><?=$lang->country_GL?> (GL)</option>
                        <option value="GI"<?php if ($current_language->recomended_phone_country == 'GI') {print " selected";} ?>><?=$lang->country_GI?> (GI)</option>
                        <option value="PT"<?php if ($current_language->recomended_phone_country == 'PT') {print " selected";} ?>><?=$lang->country_PT?> (PT)</option>
                        <option value="LU"<?php if ($current_language->recomended_phone_country == 'LU') {print " selected";} ?>><?=$lang->country_LU?> (LU)</option>
                        <option value="IE"<?php if ($current_language->recomended_phone_country == 'IE') {print " selected";} ?>><?=$lang->country_IE?> (IE)</option>
                        <option value="IS"<?php if ($current_language->recomended_phone_country == 'IS') {print " selected";} ?>><?=$lang->country_IS?> (IS)</option>
                        <option value="AL"<?php if ($current_language->recomended_phone_country == 'AL') {print " selected";} ?>><?=$lang->country_AL?> (AL)</option>
                        <option value="MT"<?php if ($current_language->recomended_phone_country == 'MT') {print " selected";} ?>><?=$lang->country_MT?> (MT)</option>
                        <option value="CY"<?php if ($current_language->recomended_phone_country == 'CY') {print " selected";} ?>><?=$lang->country_CY?> (CY)</option>
                        <option value="FI"<?php if ($current_language->recomended_phone_country == 'FI') {print " selected";} ?>><?=$lang->country_FI?> (FI)</option>
                        <option value="AX"<?php if ($current_language->recomended_phone_country == 'AX') {print " selected";} ?>><?=$lang->country_AX?> (AX)</option>
                        <option value="BG"<?php if ($current_language->recomended_phone_country == 'BG') {print " selected";} ?>><?=$lang->country_BG?> (BG)</option>
                        <option value="LT"<?php if ($current_language->recomended_phone_country == 'LT') {print " selected";} ?>><?=$lang->country_LT?> (LT)</option>
                        <option value="LV"<?php if ($current_language->recomended_phone_country == 'LV') {print " selected";} ?>><?=$lang->country_LV?> (LV)</option>
                        <option value="EE"<?php if ($current_language->recomended_phone_country == 'EE') {print " selected";} ?>><?=$lang->country_EE?> (EE)</option>
                        <option value="MD"<?php if ($current_language->recomended_phone_country == 'MD') {print " selected";} ?>><?=$lang->country_MD?> (MD)</option>
                        <option value="AM"<?php if ($current_language->recomended_phone_country == 'AM') {print " selected";} ?>><?=$lang->country_AM?> (AM)</option>
                        <option value="BY"<?php if ($current_language->recomended_phone_country == 'BY') {print " selected";} ?>><?=$lang->country_BY?> (BY)</option>
                        <option value="AD"<?php if ($current_language->recomended_phone_country == 'AD') {print " selected";} ?>><?=$lang->country_AD?> (AD)</option>
                        <option value="MC"<?php if ($current_language->recomended_phone_country == 'MC') {print " selected";} ?>><?=$lang->country_MC?> (MC)</option>
                        <option value="SM"<?php if ($current_language->recomended_phone_country == 'SM') {print " selected";} ?>><?=$lang->country_SM?> (SM)</option>
                        <option value="RS"<?php if ($current_language->recomended_phone_country == 'RS') {print " selected";} ?>><?=$lang->country_RS?> (RS)</option>
                        <option value="ME"<?php if ($current_language->recomended_phone_country == 'ME') {print " selected";} ?>><?=$lang->country_ME?> (ME)</option>
                        <option value="XK"<?php if ($current_language->recomended_phone_country == 'XK') {print " selected";} ?>><?=$lang->country_XK?> (XK)</option>
                        <option value="HR"<?php if ($current_language->recomended_phone_country == 'HR') {print " selected";} ?>><?=$lang->country_HR?> (HR)</option>
                        <option value="SI"<?php if ($current_language->recomended_phone_country == 'SI') {print " selected";} ?>><?=$lang->country_SI?> (SI)</option>
                        <option value="BA"<?php if ($current_language->recomended_phone_country == 'BA') {print " selected";} ?>><?=$lang->country_BA?> (BA)</option>
                        <option value="MK"<?php if ($current_language->recomended_phone_country == 'MK') {print " selected";} ?>><?=$lang->country_MK?> (MK)</option>
                        <option value="CZ"<?php if ($current_language->recomended_phone_country == 'CZ') {print " selected";} ?>><?=$lang->country_CZ?> (CZ)</option>
                        <option value="SK"<?php if ($current_language->recomended_phone_country == 'SK') {print " selected";} ?>><?=$lang->country_SK?> (SK)</option>
                        <option value="LI"<?php if ($current_language->recomended_phone_country == 'LI') {print " selected";} ?>><?=$lang->country_LI?> (LI)</option>
                        <option value="FK"<?php if ($current_language->recomended_phone_country == 'FK') {print " selected";} ?>><?=$lang->country_FK?> (FK)</option>
                        <option value="BZ"<?php if ($current_language->recomended_phone_country == 'BZ') {print " selected";} ?>><?=$lang->country_BZ?> (BZ)</option>
                        <option value="GT"<?php if ($current_language->recomended_phone_country == 'GT') {print " selected";} ?>><?=$lang->country_GT?> (GT)</option>
                        <option value="SV"<?php if ($current_language->recomended_phone_country == 'SV') {print " selected";} ?>><?=$lang->country_SV?> (SV)</option>
                        <option value="HN"<?php if ($current_language->recomended_phone_country == 'HN') {print " selected";} ?>><?=$lang->country_HN?> (HN)</option>
                        <option value="NI"<?php if ($current_language->recomended_phone_country == 'NI') {print " selected";} ?>><?=$lang->country_NI?> (NI)</option>
                        <option value="CR"<?php if ($current_language->recomended_phone_country == 'CR') {print " selected";} ?>><?=$lang->country_CR?> (CR)</option>
                        <option value="PA"<?php if ($current_language->recomended_phone_country == 'PA') {print " selected";} ?>><?=$lang->country_PA?> (PA)</option>
                        <option value="PM"<?php if ($current_language->recomended_phone_country == 'PM') {print " selected";} ?>><?=$lang->country_PM?> (PM)</option>
                        <option value="HT"<?php if ($current_language->recomended_phone_country == 'HT') {print " selected";} ?>><?=$lang->country_HT?> (HT)</option>
                        <option value="GP"<?php if ($current_language->recomended_phone_country == 'GP') {print " selected";} ?>><?=$lang->country_GP?> (GP)</option>
                        <option value="BL"<?php if ($current_language->recomended_phone_country == 'BL') {print " selected";} ?>><?=$lang->country_BL?> (BL)</option>
                        <option value="MF"<?php if ($current_language->recomended_phone_country == 'MF') {print " selected";} ?>><?=$lang->country_MF?> (MF)</option>
                        <option value="BO"<?php if ($current_language->recomended_phone_country == 'BO') {print " selected";} ?>><?=$lang->country_BO?> (BO)</option>
                        <option value="GY"<?php if ($current_language->recomended_phone_country == 'GY') {print " selected";} ?>><?=$lang->country_GY?> (GY)</option>
                        <option value="EC"<?php if ($current_language->recomended_phone_country == 'EC') {print " selected";} ?>><?=$lang->country_EC?> (EC)</option>
                        <option value="GF"<?php if ($current_language->recomended_phone_country == 'GF') {print " selected";} ?>><?=$lang->country_GF?> (GF)</option>
                        <option value="PY"<?php if ($current_language->recomended_phone_country == 'PY') {print " selected";} ?>><?=$lang->country_PY?> (PY)</option>
                        <option value="MQ"<?php if ($current_language->recomended_phone_country == 'MQ') {print " selected";} ?>><?=$lang->country_MQ?> (MQ)</option>
                        <option value="SR"<?php if ($current_language->recomended_phone_country == 'SR') {print " selected";} ?>><?=$lang->country_SR?> (SR)</option>
                        <option value="UY"<?php if ($current_language->recomended_phone_country == 'UY') {print " selected";} ?>><?=$lang->country_UY?> (UY)</option>
                        <option value="CW"<?php if ($current_language->recomended_phone_country == 'CW') {print " selected";} ?>><?=$lang->country_CW?> (CW)</option>
                        <option value="BQ"<?php if ($current_language->recomended_phone_country == 'BQ') {print " selected";} ?>><?=$lang->country_BQ?> (BQ)</option>
                        <option value="TL"<?php if ($current_language->recomended_phone_country == 'TL') {print " selected";} ?>><?=$lang->country_TL?> (TL)</option>
                        <option value="NF"<?php if ($current_language->recomended_phone_country == 'NF') {print " selected";} ?>><?=$lang->country_NF?> (NF)</option>
                        <option value="BN"<?php if ($current_language->recomended_phone_country == 'BN') {print " selected";} ?>><?=$lang->country_BN?> (BN)</option>
                        <option value="NR"<?php if ($current_language->recomended_phone_country == 'NR') {print " selected";} ?>><?=$lang->country_NR?> (NR)</option>
                        <option value="PG"<?php if ($current_language->recomended_phone_country == 'PG') {print " selected";} ?>><?=$lang->country_PG?> (PG)</option>
                        <option value="TO"<?php if ($current_language->recomended_phone_country == 'TO') {print " selected";} ?>><?=$lang->country_TO?> (TO)</option>
                        <option value="SB"<?php if ($current_language->recomended_phone_country == 'SB') {print " selected";} ?>><?=$lang->country_SB?> (SB)</option>
                        <option value="VU"<?php if ($current_language->recomended_phone_country == 'VU') {print " selected";} ?>><?=$lang->country_VU?> (VU)</option>
                        <option value="FJ"<?php if ($current_language->recomended_phone_country == 'FJ') {print " selected";} ?>><?=$lang->country_FJ?> (FJ)</option>
                        <option value="PW"<?php if ($current_language->recomended_phone_country == 'PW') {print " selected";} ?>><?=$lang->country_PW?> (PW)</option>
                        <option value="WF"<?php if ($current_language->recomended_phone_country == 'WF') {print " selected";} ?>><?=$lang->country_WF?> (WF)</option>
                        <option value="CK"<?php if ($current_language->recomended_phone_country == 'CK') {print " selected";} ?>><?=$lang->country_CK?> (CK)</option>
                        <option value="NU"<?php if ($current_language->recomended_phone_country == 'NU') {print " selected";} ?>><?=$lang->country_NU?> (NU)</option>
                        <option value="WS"<?php if ($current_language->recomended_phone_country == 'WS') {print " selected";} ?>><?=$lang->country_WS?> (WS)</option>
                        <option value="KI"<?php if ($current_language->recomended_phone_country == 'KI') {print " selected";} ?>><?=$lang->country_KI?> (KI)</option>
                        <option value="NC"<?php if ($current_language->recomended_phone_country == 'NC') {print " selected";} ?>><?=$lang->country_NC?> (NC)</option>
                        <option value="TV"<?php if ($current_language->recomended_phone_country == 'TV') {print " selected";} ?>><?=$lang->country_TV?> (TV)</option>
                        <option value="PF"<?php if ($current_language->recomended_phone_country == 'PF') {print " selected";} ?>><?=$lang->country_PF?> (PF)</option>
                        <option value="TK"<?php if ($current_language->recomended_phone_country == 'TK') {print " selected";} ?>><?=$lang->country_TK?> (TK)</option>
                        <option value="FM"<?php if ($current_language->recomended_phone_country == 'FM') {print " selected";} ?>><?=$lang->country_FM?> (FM)</option>
                        <option value="MH"<?php if ($current_language->recomended_phone_country == 'MH') {print " selected";} ?>><?=$lang->country_MH?> (MH)</option>
                        <option value="KP"<?php if ($current_language->recomended_phone_country == 'KP') {print " selected";} ?>><?=$lang->country_KP?> (KP)</option>
                        <option value="HK"<?php if ($current_language->recomended_phone_country == 'HK') {print " selected";} ?>><?=$lang->country_HK?> (HK)</option>
                        <option value="MO"<?php if ($current_language->recomended_phone_country == 'MO') {print " selected";} ?>><?=$lang->country_MO?> (MO)</option>
                        <option value="KH"<?php if ($current_language->recomended_phone_country == 'KH') {print " selected";} ?>><?=$lang->country_KH?> (KH)</option>
                        <option value="LA"<?php if ($current_language->recomended_phone_country == 'LA') {print " selected";} ?>><?=$lang->country_LA?> (LA)</option>
                        <option value="BD"<?php if ($current_language->recomended_phone_country == 'BD') {print " selected";} ?>><?=$lang->country_BD?> (BD)</option>
                        <option value="TW"<?php if ($current_language->recomended_phone_country == 'TW') {print " selected";} ?>><?=$lang->country_TW?> (TW)</option>
                        <option value="MV"<?php if ($current_language->recomended_phone_country == 'MV') {print " selected";} ?>><?=$lang->country_MV?> (MV)</option>
                        <option value="LB"<?php if ($current_language->recomended_phone_country == 'LB') {print " selected";} ?>><?=$lang->country_LB?> (LB)</option>
                        <option value="JO"<?php if ($current_language->recomended_phone_country == 'JO') {print " selected";} ?>><?=$lang->country_JO?> (JO)</option>
                        <option value="SY"<?php if ($current_language->recomended_phone_country == 'SY') {print " selected";} ?>><?=$lang->country_SY?> (SY)</option>
                        <option value="IQ"<?php if ($current_language->recomended_phone_country == 'IQ') {print " selected";} ?>><?=$lang->country_IQ?> (IQ)</option>
                        <option value="KW"<?php if ($current_language->recomended_phone_country == 'KW') {print " selected";} ?>><?=$lang->country_KW?> (KW)</option>
                        <option value="SA"<?php if ($current_language->recomended_phone_country == 'SA') {print " selected";} ?>><?=$lang->country_SA?> (SA)</option>
                        <option value="YE"<?php if ($current_language->recomended_phone_country == 'YE') {print " selected";} ?>><?=$lang->country_YE?> (YE)</option>
                        <option value="OM"<?php if ($current_language->recomended_phone_country == 'OM') {print " selected";} ?>><?=$lang->country_OM?> (OM)</option>
                        <option value="PS"<?php if ($current_language->recomended_phone_country == 'PS') {print " selected";} ?>><?=$lang->country_PS?> (PS)</option>
                        <option value="AE"<?php if ($current_language->recomended_phone_country == 'AE') {print " selected";} ?>><?=$lang->country_AE?> (AE)</option>
                        <option value="IL"<?php if ($current_language->recomended_phone_country == 'IL') {print " selected";} ?>><?=$lang->country_IL?> (IL)</option>
                        <option value="BH"<?php if ($current_language->recomended_phone_country == 'BH') {print " selected";} ?>><?=$lang->country_BH?> (BH)</option>
                        <option value="QA"<?php if ($current_language->recomended_phone_country == 'QA') {print " selected";} ?>><?=$lang->country_QA?> (QA)</option>
                        <option value="BT"<?php if ($current_language->recomended_phone_country == 'BT') {print " selected";} ?>><?=$lang->country_BT?> (BT)</option>
                        <option value="MN"<?php if ($current_language->recomended_phone_country == 'MN') {print " selected";} ?>><?=$lang->country_MN?> (MN)</option>
                        <option value="NP"<?php if ($current_language->recomended_phone_country == 'NP') {print " selected";} ?>><?=$lang->country_NP?> (NP)</option>
                        <option value="TJ"<?php if ($current_language->recomended_phone_country == 'TJ') {print " selected";} ?>><?=$lang->country_TJ?> (TJ)</option>
                        <option value="TM"<?php if ($current_language->recomended_phone_country == 'TM') {print " selected";} ?>><?=$lang->country_TM?> (TM)</option>
                        <option value="AZ"<?php if ($current_language->recomended_phone_country == 'AZ') {print " selected";} ?>><?=$lang->country_AZ?> (AZ)</option>
                        <option value="KG"<?php if ($current_language->recomended_phone_country == 'KG') {print " selected";} ?>><?=$lang->country_KG?> (KG)</option>
                        <option value="UZ"<?php if ($current_language->recomended_phone_country == 'UZ') {print " selected";} ?>><?=$lang->country_UZ?> (UZ)</option>
                    </select>
                </div>
            </div>

            <div class="col-6">
                <div class=" mb-1">
                    <label class=""><?=$lang->phones?> <span class="hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-hint="<?=$lang->phones_title?>">
                            <svg width="13px" height="13px" viewBox="0 0 438.533 438.533">
                                <path fill="#545454" d="M409.133,109.203c-19.608-33.592-46.205-60.189-79.798-79.796C295.736,9.801,259.058,0,219.273,0
                                c-39.781,0-76.47,9.801-110.063,29.407c-33.595,19.604-60.192,46.201-79.8,79.796C9.801,142.8,0,179.489,0,219.267
                                c0,39.78,9.804,76.463,29.407,110.062c19.607,33.592,46.204,60.189,79.799,79.798c33.597,19.605,70.283,29.407,110.063,29.407
                                s76.47-9.802,110.065-29.407c33.593-19.602,60.189-46.206,79.795-79.798c19.603-33.596,29.403-70.284,29.403-110.062
                                C438.533,179.485,428.732,142.795,409.133,109.203z M255.82,356.309c0,2.662-0.862,4.853-2.573,6.563
                                c-1.704,1.711-3.895,2.567-6.557,2.567h-54.823c-2.664,0-4.854-0.856-6.567-2.567c-1.714-1.711-2.57-3.901-2.57-6.563v-54.823
                                c0-2.662,0.855-4.853,2.57-6.563c1.713-1.708,3.903-2.563,6.567-2.563h54.823c2.662,0,4.853,0.855,6.557,2.563
                                c1.711,1.711,2.573,3.901,2.573,6.563V356.309z M325.338,187.574c-2.382,7.043-5.044,12.804-7.994,17.275
                                c-2.949,4.473-7.187,9.042-12.709,13.703c-5.51,4.663-9.891,7.996-13.135,9.998c-3.23,1.995-7.898,4.713-13.982,8.135
                                c-6.283,3.613-11.465,8.326-15.555,14.134c-4.093,5.804-6.139,10.513-6.139,14.126c0,2.67-0.862,4.859-2.574,6.571
                                c-1.707,1.711-3.897,2.566-6.56,2.566h-54.82c-2.664,0-4.854-0.855-6.567-2.566c-1.715-1.712-2.568-3.901-2.568-6.571v-10.279
                                c0-12.752,4.993-24.701,14.987-35.832c9.994-11.136,20.986-19.368,32.979-24.698c9.13-4.186,15.604-8.47,19.41-12.847
                                c3.812-4.377,5.715-10.188,5.715-17.417c0-6.283-3.572-11.897-10.711-16.849c-7.139-4.947-15.27-7.421-24.409-7.421
                                c-9.9,0-18.082,2.285-24.555,6.855c-6.283,4.565-14.465,13.322-24.554,26.263c-1.713,2.286-4.093,3.431-7.139,3.431
                                c-2.284,0-4.093-0.57-5.424-1.709L121.35,145.89c-4.377-3.427-5.138-7.422-2.286-11.991
                                c24.366-40.542,59.672-60.813,105.922-60.813c16.563,0,32.744,3.903,48.541,11.708c15.796,7.801,28.979,18.842,39.546,33.119
                                c10.554,14.272,15.845,29.787,15.845,46.537C328.904,172.824,327.71,180.529,325.338,187.574z"/>
                            </svg>
                    </span></label>
                     <input class="form_input" type="text" name="phones" value="">
                </div>
            </div>

            <div class="col-6">
                <div class=" mb-1">
                    <label class=""><?=$lang->email_for_site?></label>
                     <input class="form_input" type="text" name="email_for_site" value="">
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <input type="submit" class="next_step_button" name="set_settings" value="<?=$lang->next_step?>">
    </div>
</form>

