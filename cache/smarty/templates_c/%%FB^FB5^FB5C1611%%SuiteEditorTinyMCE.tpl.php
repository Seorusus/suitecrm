<?php /* Smarty version 2.6.31, created on 2020-11-10 16:53:23
         compiled from include/SuiteEditor/tpls/SuiteEditorTinyMCE.tpl */ ?>

<!-- [TinyMCE Editor implementation] -->

<script src='include/javascript/mozaik/vendor/tinymce/tinymce/tinymce.min.js'></script>
<script>

    /**
     * TinyMCE value getter function
     *
     * @returns string - tinymce value
     */
    SuiteEditor.getValue = function() {
        return tinymce.get('<?php echo $this->_tpl_vars['elementId']; ?>
').getContent();
    };

    /**
     * TinyMCE value setter function
     *
     * @param htmlCode
     */
    SuiteEditor.apply = function(htmlCode) {
        if(typeof htmlCode === 'undefined') {
            htmlCode = '';
        }
        tinyMCE.EditorManager.get('<?php echo $this->_tpl_vars['elementId']; ?>
').setContent(htmlCode);
    };

    /**
     * Mozaik value insert function
     *
     * @param text
     * @param elemId
     */
    SuiteEditor.insert = function(text, elemId) {
        if(typeof elemId === 'undefined') {
            elemId = '<?php echo $this->_tpl_vars['elementId']; ?>
';
        }
        if(elemId != '<?php echo $this->_tpl_vars['elementId']; ?>
') {
            throw 'incorrect editor element id (TinyMCE id: '+elemId+')';
        }

        tinyMCE.activeEditor.execCommand('mceInsertRawHTML', false, text);

    };

    $(function(){

        <?php if ($this->_tpl_vars['clickHandler']): ?>
        $('#<?php echo $this->_tpl_vars['elementId']; ?>
').click(<?php echo $this->_tpl_vars['clickHandler']; ?>
);
        <?php endif; ?>

        $(window).mouseup(function(){
            $('#<?php echo $this->_tpl_vars['textareaId']; ?>
').val(SuiteEditor.getValue());
        });
    });
</script>
<script>tinymce.init($.extend(<?php echo $this->_tpl_vars['tinyMCESetup']; ?>
, { selector:'#<?php echo $this->_tpl_vars['elementId']; ?>
' }));</script>
<div id="<?php echo $this->_tpl_vars['elementId']; ?>
" name="<?php echo $this->_tpl_vars['elementId']; ?>
" title=""><?php echo $this->_tpl_vars['contents']; ?>
</div>