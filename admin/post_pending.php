<?php
require_once('includes.php');
if(isset($_POST['approve'])) {
    if (!check_allow()) {
        ?>
        <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#sa-title').trigger('click');
            });
        </script>
        <?php

    } else {
        $items = ORM::for_table($config['db']['pre'].'product')
            ->select_many('id','product_name','user_id')
            ->where('status','pending')
            ->find_many();

        if (count($items) > 0) {
            foreach($items as $info){
                //Ad approve Email to seller
                $product_id = $info['id'];
                $item_title = $info['product_name'];
                $item_author_id = $info['user_id'];

                $product = ORM::for_table($config['db']['pre'].'product')->find_one($product_id);
                $product->set('status', 'active');
                $product->save();

                /*SEND RESUBMISSION AD APPROVE EMAIL*/
                //email_template("ad_approve",$item_author_id,null,$product_id,$item_title);
            }
        }
        transfer($_SERVER['REQUEST_URI'],'Approved Successfully');
        exit;
    }
}
?>


<link rel="stylesheet" href="assets/js/plugins/datatables/jquery.dataTables.min.css" />
<div class="content" style="margin-top: 2%">

    
    <div class="container-fluid p-y-md">
        
        <div class="card">
            <div class="card-header">
                <h4>Pending Ads</h4>
                <div class="pull-right">
                    <form method="post">
                        <button type="submit" name="approve" id="approve" class="btn btn-warning waves-effect waves-light m-r-10"><i class="fa fa-refresh"></i> Approve All</button>
                    </form>
                </div>
            </div>
            <div class="card-block">
                <div id="js-table-list">
                    <table class="js-table-checkable table table-vcenter table-hover" id="ajax_datatable" data-jsonfile="post.php?status=pending">
                        <thead>
                        <tr>
                            <th class="text-center sortingNone">
                                <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                                    <input type="checkbox" id="check-all" name="check-all"><span></span>
                                </label>
                            </th>
                            <th><i class="ion-image"></i> Title</th>
                            <th class="hidden-xs hidden-sm">Username</th>
                            <th class="hidden-xs w-30">Location</th>
                            <th class="hidden-xs hidden-sm" style="width:100px">Posted</th>
                            <th class="hidden-xs hidden-sm" style="width:100px">Status</th>
                            <th class="text-center" style="width: 128px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="ajax-services">
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
        
        

    </div>
    
    

</div>



<?php include("footer.php"); ?>

<script>
    $(function()
    {
        // Init page helpers (Table Tools helper)
        App.initHelpers('table-tools');

        // Init page helpers (BS Notify Plugin)
        App.initHelpers('notify');
    });
</script>
</body>

</html>

