<?php /* Smarty version 2.6.18, created on 2013-07-29 09:39:26
         compiled from currencies/new.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'currencies/new.html', 52, false),)), $this); ?>
<div class="page-title" style="z-index: 780;">
    <div class="in" style="z-index: 770;">
        <div class="titlebar" style="z-index: 760;">	
            <h2><?php echo $this->_tpl_vars['langs']['HEADING_NEW_CURRENCY']; ?>
</h2>
        </div>

        <div class="clear" style="z-index: 740;"></div>
    </div>

</div>
<div class="content" style="z-index: 730;">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['_TEMPLATE_SOURCE_DIR'])."/modules/validate_error.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['_TEMPLATE_SOURCE_DIR'])."/modules/feedback_messages.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <form action="<?php echo $this->_tpl_vars['link_new_currency']; ?>
" method="post" name="frmNew" >
        <input type="hidden"  name="action" value="process" />
        <table class="form" >

            <tr>
                <td width="120"><?php echo $this->_tpl_vars['langs']['TEXT_CURRENCY_NAME']; ?>
*</td>
                <td><input name="title" type="text" id="title" value="<?php echo $this->_tpl_vars['title']; ?>
"></td>
            </tr>
            <tr>
                <td><?php echo $this->_tpl_vars['langs']['TEXT_CURRENCY_CODE']; ?>
*</td>
                <td><input name="code" type="text" id="code" value="<?php echo $this->_tpl_vars['code']; ?>
" size="5" maxlength="5"></td>
            </tr>		
            <tr>
                <td><?php echo $this->_tpl_vars['langs']['TEXT_CURRENCY_SYMBOL_LEFT']; ?>
*</td>
                <td><input name="symbol_left" type="text" id="symbol_left" value="<?php echo $this->_tpl_vars['symbol_left']; ?>
"></td>
            </tr>	
            <tr>
                <td><?php echo $this->_tpl_vars['langs']['TEXT_CURRENCY_SYMBOL_RIGHT']; ?>
*</td>
                <td><input name="symbol_right" type="text" id="symbol_right" value="<?php echo $this->_tpl_vars['symbol_right']; ?>
" ></td>
            </tr>		
            <tr>
                <td><?php echo $this->_tpl_vars['langs']['TEXT_CURRENCY_DECIMAL_POINT']; ?>
*</td>
                <td><input name="decimal_point" type="text" id="decimal_point" value="<?php echo $this->_tpl_vars['decimal_point']; ?>
" ></td>
            </tr>	
            <tr>
                <td><?php echo $this->_tpl_vars['langs']['TEXT_CURRENCY_THOUSANDS_POINT']; ?>
*</td>
                <td><input name="thousands_point" type="text" id="thousands_point" value="<?php echo $this->_tpl_vars['thousands_point']; ?>
" ></td>
            </tr>		  	    	    
            <tr>
                <td><?php echo $this->_tpl_vars['langs']['TEXT_CURRENCY_DECIMAL_PLACES']; ?>
*</td>
                <td><input name="decimal_places" type="text" id="decimal_places" value="<?php echo $this->_tpl_vars['decimal_places']; ?>
" ></td>
            </tr>		  
            <tr>
                <td><?php echo $this->_tpl_vars['langs']['TEXT_CURRENCY_SORT_ORDER']; ?>
</td>
                <td><input name="sort_order" type="text" id="sort_order" value="<?php echo $this->_tpl_vars['sort_order']; ?>
" size="5"></td>
            </tr>
            <tr>
                <td><?php echo $this->_tpl_vars['langs']['TEXT_CURRENCY_STATUS']; ?>
</td>
                <td><?php echo smarty_function_html_radios(array('name' => 'status','options' => $this->_tpl_vars['status_options'],'selected' => $this->_tpl_vars['status'],'separator' => "<br /><br />"), $this);?>
</td>
            </tr>      

            <tr>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" name="Submit" value="<?php echo $this->_tpl_vars['BUTTON_SUBMIT']; ?>
" class="st-button">
                    <input type="button" name="btnCancel" value="<?php echo $this->_tpl_vars['BUTTON_CANCEL']; ?>
" onClick="redirect('<?php echo $this->_tpl_vars['back_link']; ?>
');" class="st-clear">
                </td>
            </tr>
        </table>
    </form>	
</div>