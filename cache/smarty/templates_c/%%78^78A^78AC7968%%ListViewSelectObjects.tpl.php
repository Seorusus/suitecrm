<?php /* Smarty version 2.6.31, created on 2020-06-26 18:22:46
         compiled from themes/SuiteP/include/ListView/ListViewSelectObjects.tpl */ ?>
<div class="selectedRecords label hidden"><?php echo $this->_tpl_vars['APP']['LBL_LISTVIEW_SELECTED_OBJECTS']; ?>
</div><div class="selectedRecords value hidden"><?php echo $this->_tpl_vars['TOTAL_ITEMS_SELECTED']; ?>
</div>
<input type='hidden' id='selectCountTop' name='selectCount[]' value='<?php echo $this->_tpl_vars['TOTAL_ITEMS_SELECTED']; ?>
' />

<script>
<?php echo '
    $(document).ready(function () {
        setInterval(function () {
            sListView.toggleSelected();
        }, 100);
    });
'; ?>

</script>