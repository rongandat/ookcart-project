<?php /* Smarty version 2.6.18, created on 2013-07-19 05:55:29
         compiled from account/view_transaction.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'account/view_transaction.html', 7, false),)), $this); ?>
<div class="transaction_detail">
    <h3>Transaction Details: #<?php echo $this->_tpl_vars['transaction_data']['batch_number']; ?>
</h3>
    <table class="form">
        <tr><td >Batch Number#</td><td>
                <?php echo $this->_tpl_vars['transaction_data']['batch_number']; ?>
</td></tr>
        <tr><td>Date</td><td>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['transaction_data']['transaction_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%Y %l:%M %p") : smarty_modifier_date_format($_tmp, "%m/%d/%Y %l:%M %p")); ?>
</td></tr>	
        <tr><td>From Account</td><td><strong>
                    <?php echo $this->_tpl_vars['transaction_data']['from_account']; ?>
</strong></td></tr>						
        <tr><td>To Account</td><td><strong>
                    <?php echo $this->_tpl_vars['transaction_data']['to_account']; ?>
</strong></td></tr>			
        <tr><td>Balance Currency</td><td>
                <?php echo $this->_tpl_vars['transaction_data']['transaction_currency']; ?>
</td></tr>				
        <tr><td>Amount</td><td>
                <?php if ($this->_tpl_vars['transaction_data']['from_userid'] == $_SESSION['login_userid']): ?>-<?php echo $this->_tpl_vars['transaction_data']['amount_text']; ?>
<?php else: ?> +<?php echo $this->_tpl_vars['transaction_data']['amount_text']; ?>
<?php endif; ?></td></tr>			
        <?php if ($this->_tpl_vars['transaction_data']['fee_text'] != ''): ?> 
        <tr><td>Fee</td><td>
                <?php echo $this->_tpl_vars['transaction_data']['fee_text']; ?>
</td></tr>					
        <?php endif; ?> 
        <tr><td>Transaction Status</td><td><strong>
                    <?php echo $this->_tpl_vars['transaction_data']['transaction_status']; ?>
</strong></td></tr>						
        <?php if ($this->_tpl_vars['transaction_data']['transaction_memo'] != ''): ?>

        <tr><td>Transaction Memo</td><td>
                <?php echo $this->_tpl_vars['transaction_data']['transaction_memo']; ?>
</td></tr>							
        <?php endif; ?> 
        <tr><td></td><td>
                <a href="javascript: closeTransactionDetailsContent();" class="button">
                    Close
                </a>
            </td>
        </tr>	
    </table>
    <div class="clear"></div>
</div>