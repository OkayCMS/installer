<?php
// Heading
$_['meta_title']                            = 'Checking the server settings';
$_['title_h1']                              = 'Checking the server settings';
                
// Text             
$_['extension']                             = 'Extension';
$_['ini_param']                             = 'Parameter';
$_['extension_installed']                   = 'Extension is installed';
$_['pdo_driver_not_exists']                 = 'mysql driver not exists';
$_['extension_not_installed']               = 'Extension isn\'t installed';
$_['text_php_version']                      = 'Version of PHP';
$_['text_access_working_dir']               = 'Permissions to the working directory';
$_['text_success_test']                     = 'The test was successful';
$_['text_now_we_unzipped']                  = 'Now we unzip the files into the folder';
$_['text_files_will_be_deleted']            = 'All files in this folder will be permanently deleted!';
$_['text_important_files']                  = 'Make sure that there are no files important to you in this folder';
$_['next_step']                             = 'Install the system';
$_['re_test']                               = 'Repeat check';
$_['i_agree']                               = 'I have read and agree to the terms';
$_['license_link']                          = 'License agreement';

// Error
$_['error_install_folder_missed']           = 'There is no install folder in the main folder. Chances are you moved the contents of the install folder to a higher level. Unzip the archive into the directory you need and do not move anything. Go to http://your-site/install/';
$_['error_php_version']                     = 'The PHP version on the server does not meet the minimum requirements. You need PHP version {$php_version} or higher';
$_['error_create_dir']                      = 'Can not create the directory. Set permissions 0755 to the folder {$current_dir}';
$_['error_create_file']                     = 'Can not create file. Set permissions 0755 to the {$current_dir} folder. If this does not work, turn off the PHP safe mode';
$_['error_chmod']                           = 'I can not change the permissions on the file. Set permissions 0755 to the {$current_dir} folder. If this does not work, turn off the PHP safe mode';
$_['error_unlink']                          = 'Can not delete file. Set permissions 0755 to the {$current_dir} folder. If this does not work, turn off the PHP safe mode';
$_['error_rmdir']                           = 'Can not delete the directory. Set permissions 0755 to the {$current_dir} folder. If this does not work, turn off the PHP safe mode';
$_['extension_warning']                     = 'The system may work incorrectly';
$_['ini_param_is_disabled']                 = 'Param is disabled';
// Success
$_['success_php_version']                   = 'The PHP version on the server meets the minimum requirements';