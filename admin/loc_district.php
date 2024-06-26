<?php
require_once('includes.php');

if(!isset($_GET['code'])){
    header('Location: 404.php');
    exit();
}
?>


<main class="app-layout-content">

    
    <div class="container-fluid p-y-md">
        
        <div class="card">
            <div class="card-header">
                <h4>District in <?php echo get_stateName_by_code($_GET['code']); ?></h4>
                <div class="pull-right">
                    <p class="text-muted">
                        <a href="loc_region.php?code=<?php echo substr($_GET['code'],0,2) ?>" class="btn btn-info waves-effect waves-light m-r-10"><i class="fa fa-mail-reply"></i> Back</a>
                        <a href="#" data-url="panel/loc_district_add.php?code=<?php echo $_GET['code'] ?>" data-toggle="slidePanel" class="btn btn-success waves-effect waves-light m-r-10">Add District</a>
                    </p>
                </div>
            </div>
            <div class="card-block">
                <div id="js-table-list">
                    <table id="ajax_datatable" data-jsonfile="district.php?code=<?php echo $_GET['code'] ?>" class="js-table-checkable table table-vcenter table-hover" data-tablesaw-mode="stack" data-plugin="animateList" data-animate="fade" data-child="tr" data-selectable="selectable">
                        <thead>
                        <tr>
                            <th class="text-center w-5 sortingNone">
                                <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                                    <input type="checkbox" id="check-all" name="check-all"><span></span>
                                </label>
                            </th>
                            <th>Code</th>
                            <th>Local Name</th>
                            <th>Name</th>
                            <th class="sortingNone">Status</th>
                            <th class="sortingNone">Action</th>
                        </tr>
                        </thead>
                        <tbody id="ajax-services">

                        </tbody>
                    </table>

                </div>


            </div>
            
        </div>
        
        

    </div>
    
    

</main>



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
