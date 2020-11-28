<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('offline_payment'); ?></h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="col-md-12"></div>
                    <br>

                    <button class="btn btn-primary btn-labeled fa fa-plus-circle pull-right mar-rgt" 
                                onclick="ajax_modal('add', '<?php echo translate('add_offline_payment'); ?>', '<?php echo translate('successfully_added!'); ?>', 'category_add', '')">
                                    <?php echo translate('add_offline_payment'); ?>
                    </button>

                    <!-- LIST -->
                    <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var base_url = '<?php echo base_url(); ?>'
    var user_type = 'admin';
    var module = 'offline_payment';
    var list_cont_func = 'list';
    var dlt_cont_func = 'verify';
</script>
