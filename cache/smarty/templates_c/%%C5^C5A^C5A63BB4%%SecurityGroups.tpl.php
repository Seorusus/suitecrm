<?php /* Smarty version 2.6.31, created on 2020-11-10 16:49:09
         compiled from include/EditView/SecurityGroups.tpl */ ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <a class="" role="button" data-toggle="collapse" aria-expanded="false">
            <div class="col-xs-10 col-sm-11 col-md-11">
                <?php echo $this->_tpl_vars['SECURITY_GROUP_SELECT']; ?>

            </div>
        </a>
    </div>
    <div class="panel-body panel-collapse collapse in" id="detailpanel_0">
        <div class="tab-content">
            <div class="row edit-view-row">
                <div class="col-xs-12 col-sm-6 edit-view-row-item">
                    <div class="col-xs-12 col-sm-4 label">
                        <?php echo $this->_tpl_vars['SECURITY_GROUPS']; ?>

                    </div>
                    <div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="securitygroups_panel">
                        <select title="" id="securitygroup_list" name="securitygroup_list[]" multiple="multiple" size="<?php echo $this->_tpl_vars['SECURITY_GROUP_COUNT']; ?>
" style="height: 100%">
                            <?php echo $this->_tpl_vars['SECURITY_GROUP_OPTIONS']; ?>

                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>