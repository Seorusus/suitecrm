<?php /* Smarty version 2.6.31, created on 2020-06-26 18:22:46
         compiled from modules/Home/Dashlets/JotPadDashlet/JotPadDashletScript.tpl */ ?>


<?php echo '<script>
if(typeof JotPad == \'undefined\') { // since the dashlet can be included multiple times a page, don\'t redefine these functions
	JotPad = function() {
	    return {
	    	/**
	    	 * Called when the textarea is blurred
	    	 */
	        blur: function(ta, id) {
	        	ajaxStatus.showStatus(\''; ?>
<?php echo $this->_tpl_vars['saving']; ?>
<?php echo '\'); // show that AJAX call is happening
	        	// what data to post to the dashlet
    	    	var va=YAHOO.lang.JSON.stringify(encodeURIComponent(ta.value));
				va = va.replace(/%0A/g, "%5Cn");
    	    	postData = \'to_pdf=1&module=Home&action=CallMethodDashlet&method=saveText&id=\' + id + \'&savedText=\' + va;
				var cObj = YAHOO.util.Connect.asyncRequest(\'POST\',\'index.php\', 
								  {success: JotPad.saved, failure: JotPad.saved}, postData);
	        },
		    /**
	    	 * Called when the textarea is double clicked on
	    	 */
			edit: function(divObj, id) {
				ta = document.getElementById(\'jotpad_textarea_\' + id);
				if(SUGAR.isIE) ta.value = divObj.innerHTML.replace(/<br>/gi, "\\n");
				else ta.value = divObj.innerHTML.replace(/<br>/gi, \'\');
				ta.value = ta.value.replace(/&amp;/gi, "&");
				divObj.style.display = \'none\';
				ta.style.display = \'\';
				ta.focus();
			},
		    /**
	    	 * handle the response of the saveText method
	    	 */
	        saved: function(data) {
	        	eval(data.responseText);
	           	ajaxStatus.showStatus(\''; ?>
<?php echo $this->_tpl_vars['saved']; ?>
<?php echo '\');
	           	if(typeof result != \'undefined\') {
					ta = document.getElementById(\'jotpad_textarea_\' + result[\'id\']);
					theDiv = document.getElementById(\'jotpad_\' + result[\'id\']);
					theDiv.innerHTML = result[\'savedText\'];
				}
				ta.style.display = \'none\';
				theDiv.style.display = \'\';
	           	window.setTimeout(\'ajaxStatus.hideStatus()\', 2000);
	        }
	    };
	}();
}
</script>'; ?>
