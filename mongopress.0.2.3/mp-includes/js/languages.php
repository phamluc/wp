<?php
/* CSS framework started as a small addition and grew into a very complex file which is no longer essential for 0.1 release of mp */
/* please do not touch this file until 0.1 has been released and we can implement this with default styles and merges =) */
require_once(dirname(dirname(__FILE__)).'/includes.php');
require_once(dirname(dirname(__FILE__)).'/mp-init.php');
header('Content-type: text/javascript');
?>
var mp_languages = [];
mp_languages.unidentified_object = '<?php _e('Unidentified Object in the Imperial Vortex!'); ?>';
mp_languages.invalid_username_password = '<?php _e('( Incorrect username or password combination )'); ?>';
mp_languages.user_install_error = '<?php _e('Install User Error: '); ?>';
mp_languages.user_installed = '<?php _e('User Installed'); ?>';
mp_languages.object_import_error = '<?php _e('Object Import Error: '); ?>';
mp_languages.object_imported = '<?php _e('Object(s) Imported'); ?>';
mp_languages.error_importing = '<?php _e('Error Importing Objects'); ?>';
mp_languages.import_file_error = '<?php _e('Error finding Import Files'); ?>';
mp_languages.error_uploading = '<?php _e('Error Uploading'); ?>';
mp_languages.object_type = '<?php _e('Object Type'); ?>';
mp_languages.slug = '<?php _e('Slug'); ?>';
mp_languages.title = '<?php _e('Title'); ?>';
mp_languages.edit_filename = '<?php _e('Edit Filename:'); ?>';
mp_languages.copy_media_id = '<?php _e('Copy Media ID:'); ?>';
mp_languages.edit_media = '<?php _e('Edit Media'); ?>';
mp_languages.created = '<?php _e('Created'); ?>';
mp_languages.updated = '<?php _e('Updated'); ?>';
mp_languages.actions = '<?php _e('Actions'); ?>';
mp_languages.error = '<?php _e('Error'); ?>';
mp_languages.confirmation_delete = '<?php _e('Are you sure you want to delete this object...?'); ?>';
mp_languages.error_finding_file = '<?php _e('Error finding File'); ?>';
mp_languages.add_new_object = '<?php _e('Add new Object: '); ?>';
mp_languages.sProcessing = '<?php _e('Processing Objects'); ?>';
mp_languages.sLengthMenu = '<?php _e('Display _MENU_ objects per page'); ?>';
mp_languages.sZeroRecords = '<?php _e('No objects found - sorry'); ?>';
mp_languages.sEmptyTable = '<?php _e('No objects available - please import objects from your active theme by clicking on the button below the table, or add new objects by using the form to the right-hand side.'); ?>';
mp_languages.sInfo = '<?php _e('Showing _START_ to _END_ of _TOTAL_ objects'); ?>';
mp_languages.sInfoEmpty = '<?php _e('Showing 0 to 0 of 0 objects'); ?>';
mp_languages.InfoFiltered = '<?php _e('(filtered from _MAX_ total objects)'); ?>';
mp_languages.sSearch = '<?php _e('(filtered from _MAX_ total objects)'); ?>';
mp_languages.oPaginate_sFirst = '<?php _e('First'); ?>';
mp_languages.oPaginate_sPrevious = '<?php _e('Previous'); ?>';
mp_languages.oPaginate_sNext = '<?php _e('Next'); ?>';
mp_languages.oPaginate_sLast = '<?php _e('Last'); ?>';
mp_languages.plupload_select = '<?php _e('Select Files'); ?>';
mp_languages.plupload_add1 = '<?php _e('Add files to the upload queue and click the start button.'); ?>';
mp_languages.plupload_filename = '<?php _e('Filename'); ?>';
mp_languages.plupload_status = '<?php _e('Status'); ?>';
mp_languages.plupload_size = '<?php _e('Size'); ?>';
mp_languages.plupload_add2 = '<?php _e('Add files'); ?>';
mp_languages.plupload_start1 = '<?php _e('Start upload'); ?>';
mp_languages.plupload_stop = '<?php _e('Stop current upload'); ?>';
mp_languages.plupload_start2 = '<?php _e('Start uploading queue'); ?>';
mp_languages.plupload_drag = '<?php _e('Drag files here.'); ?>';