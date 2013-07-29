<?php /* Smarty version 2.6.18, created on 2013-07-27 06:32:38
         compiled from langs/edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'langs/edit.html', 42, false),)), $this); ?>
<div class="page-title" style="z-index: 780;">
    <div class="in" style="z-index: 770;">
        <div class="titlebar" style="z-index: 760;">	
            <h2><?php echo $this->_tpl_vars['langs']['HEADING_EDITLANGUAGE']; ?>
</h2>	
        </div>
    </div>

</div>

<div class="content" style="z-index: 730;">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['_TEMPLATE_SOURCE_DIR'])."/modules/validate_error.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <form action="<?php echo $this->_tpl_vars['link_edit_language']; ?>
" method="post" name="frmEdit" >
        <input type="hidden"  name="action" value="process" />
        <table class="form" >

            <tr>
                <td width="120"><?php echo $this->_tpl_vars['langs']['TEXT_LANGUAGE_NAME']; ?>
*</td>
                <td><input name="language_name" type="text" id="language_name" value="<?php echo $this->_tpl_vars['language_name']; ?>
"></td>
            </tr>
            <tr>
                <td><?php echo $this->_tpl_vars['langs']['TEXT_LANGUAGE_CODE']; ?>
*</td>
                <td><input name="language_code" type="text" id="language_code" value="<?php echo $this->_tpl_vars['language_code']; ?>
" size="5" maxlength="5"></td>
            </tr>

            <tr>
                <td><?php echo $this->_tpl_vars['langs']['TEXT_LANGUAGE_DIRECTORY']; ?>
*</td>
                <td><input name="language_directory" type="text" id="language_directory" value="<?php echo $this->_tpl_vars['language_directory']; ?>
"  size="30"></td>
            </tr>

            <tr>
                <td><?php echo $this->_tpl_vars['langs']['TEXT_LANGUAGE_IMAGE']; ?>
*</td>
                <td><input name="language_image" type="text" id="language_image" value="<?php echo $this->_tpl_vars['language_image']; ?>
" size="30"></td>
            </tr>

            <tr>
                <td><?php echo $this->_tpl_vars['langs']['TEXT_LANGUAGE_SORT_ORDER']; ?>
</td>
                <td><input name="sort_order" type="text" id="sort_order" value="<?php echo $this->_tpl_vars['sort_order']; ?>
" size="5"></td>
            </tr>
            <tr>
                <td><?php echo $this->_tpl_vars['langs']['TEXT_LANGUAGE_STATUS']; ?>
</td>
                <td><?php echo smarty_function_html_radios(array('name' => 'language_status','options' => $this->_tpl_vars['status_options'],'selected' => $this->_tpl_vars['language_status'],'separator' => "<br /><br />"), $this);?>
</td>
            </tr>    

            <tr>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" name="Submit" value="<?php echo $this->_tpl_vars['BUTTON_SUBMIT']; ?>
" class="st-button">
                    <input type="button" name="btnCancel" value="<?php echo $this->_tpl_vars['BUTTON_CANCEL']; ?>
" onClick="window.location	='<?php echo $this->_tpl_vars['back_link']; ?>
';" class="st-clear">
                </td>
            </tr>
        </table>
    </form>	
</div>