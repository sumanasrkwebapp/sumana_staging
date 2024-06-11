<?php
require_once('includes.php');
?>


<div class="content" style="margin-top: 2%">

    
    <div class="container-fluid p-y-md">
        
        <div class="card">
            <div class="card-header">
                <h4>Payment Settings</h4>
            </div>
            <div class="card-block">
                <div id="js-table-list">
                    <table id="ajax_datatable" data-jsonfile="payment_methods.php" class="table table-vcenter table-hover" data-tablesaw-mode="stack" data-plugin="animateList" data-animate="fade" data-child="tr" >
                        <thead>
                        <tr>
                            <th class="text-center w-5 sortingNone">
                                <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                                    <input type="checkbox" id="check-all" name="check-all"><span></span>
                                </label>
                            </th>
                            <th class="sortingNone">Logo</th>
                            <th>Title</th>
                            <th>Installed</th>
                            <th style="width: 200px">Action</th>
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
    });
</script>
</body>

</html>