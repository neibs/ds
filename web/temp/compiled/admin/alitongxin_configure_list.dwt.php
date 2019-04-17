<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>
 
<body class="iframe_body">
<div class="warpper">
    <div class="title"><?php echo $this->_var['lang']['14_sms']; ?> - <?php echo $this->_var['ur_here']; ?></div>
    <div class="content">
        <?php echo $this->fetch('library/sms_tab.lbi'); ?>
        <div class="explanation" id="explanation">
            <div class="ex_tit"><i class="sc_icon">
                </i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span>
                <?php if ($this->_var['open'] == 1): ?>
                <div class="view-case">
                    <div class="view-case-tit"><i></i><?php echo $this->_var['lang']['view_tutorials']; ?></div>
                    <div class="view-case-info">
                        <a href="http://help.ecmoban.com/article-3331.html" target="_blank"><?php echo $this->_var['lang']['tutorials_bonus_list_one']; ?></a>
                    </div>
                </div>	
                <?php endif; ?>					
            </div>
            <ul>
                <li class="li_color"><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['2']; ?></li>
            </ul>
        </div>
        <div class="flexilist">
            <div class="common-head">
                <div class="fl">
                    <a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="add" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
                </div>
            </div>
            <div class="common-content">
                <div class="list-div" id="listDiv">
                    <?php endif; ?>
                    <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                            <tr>
                                <th width="3%" class="sign"><div class="tDiv"><input type="checkbox" name="all_list" class="checkbox" id="all_list" /><label for="all_list" class="checkbox_stars"></label></div></th>
                                <th width="5%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                <th width="12%"><div class="tDiv"><?php echo $this->_var['lang']['sign_name']; ?></div></th>
                                <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['sms_cdoe']; ?></div></th>
                                <th width="25%"><div class="tDiv"><?php echo $this->_var['lang']['temp_content']; ?></div></th>
                                <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['add_time']; ?></div></th>
                                <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['send_time']; ?></div></th>
                                <th width="15%" class="handle"><?php echo $this->_var['lang']['handler']; ?></div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_from = $this->_var['note_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'note');if (count($_from)):
    foreach ($_from AS $this->_var['note']):
?>
                            <tr>
                                <td class="sign"><div class="tDiv"><input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['note']['id']; ?>" class="checkbox" id="checkbox_<?php echo $this->_var['note']['id']; ?>" /><label for="checkbox_<?php echo $this->_var['note']['id']; ?>" class="checkbox_stars"></label></div></td>
                                <td><div class="tDiv"><?php echo $this->_var['note']['id']; ?></div></td>
                                <td><div class="tDiv"><?php echo $this->_var['note']['set_sign']; ?></div></td>
                                <td><div class="tDiv"><?php echo $this->_var['note']['temp_id']; ?></div></td>
                                <td><div class="tDiv"><?php echo $this->_var['note']['temp_content']; ?></div></td>
                                <td><div class="tDiv"><?php echo $this->_var['note']['add_time']; ?></div></td>
                                <td><div class="tDiv"><?php echo $this->_var['note']['send_time']; ?></div></td>
                                <td class="handle">
                                    <div class="tDiv a2">
                                        <a href="alitongxin_configure.php?act=edit&id=<?php echo $this->_var['note']['id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                        <a href="javascript:confirm_redirect('<?php echo $this->_var['lang']['remove_confirm']; ?>', 'alitongxin_configure.php?act=remove&id=<?php echo $this->_var['note']['id']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>"class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; else: ?>
                                <tr><td class="no-records" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                            <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="8">
                                    <div class="list-page">
                                        <?php echo $this->fetch('library/page.lbi'); ?>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                        <?php if ($this->_var['full_page']): ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/pagefooter.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.purebox.js')); ?>
<script type="text/javascript">
listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;

<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
</body>
</html>
<?php endif; ?>