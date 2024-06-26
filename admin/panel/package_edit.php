<?php
require_once('../datatable-json/includes.php');

$info = ORM::for_table($config['db']['pre'].'usergroups')
    ->where('group_id',$_GET['id'])
    ->find_one();
?>

<header class="slidePanel-header overlay">
    <div class="overlay-panel overlay-background vertical-align">
        <div class="service-heading">
            <h2>Edit Package</h2>
        </div>
    </div>
</header>
<div class="slidePanel-inner">
    <div class="panel-body">
        
        <div class="row">
            <div class="col-sm-12">

                <div class="white-box">
                    <div id="post_error"></div>
                    <form name="form2" style="margin-top: 2%" class="form form-horizontal" method="post" data-ajax-action="editMembershipPackage" id="sidePanel_form">
                        <div class="form-body">
                            <input type="hidden" name="id" value="<?php echo $_GET['id']?>">

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Package Name</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="group_name" type="Text" class="form-control" value="<?php echo stripslashes($info['group_name']);?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Ad Posting Limit(Max No)</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="ad_limit" type="number" class="form-control" id="ad_limit" placeholder="Ad Limit" value="<?php echo stripslashes($info['ad_limit']);?>" min="1" max="3">
                                        <p class="help-block">For unlimited ads enter 999</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Duration</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="ad_duration" type="Text" class="form-control" id="ad_duration" value="<?php echo stripslashes($info['ad_duration']);?>">
                                        <p class="help-block">Duration to show posts (in days).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Featured Badge Fee</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="featured_project_fee" type="number" class="form-control" id="featured_project_fee" value="<?php echo stripslashes($info['featured_project_fee']);?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Featured Duration</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="featured_duration" type="Text" class="form-control" id="featured_duration" value="<?php echo stripslashes($info['featured_duration']);?>">
                                        <p class="help-block">Duration to show Featured Badge (in days).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Urgent Badge Fee</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="urgent_project_fee" type="number" class="form-control" id="urgent_project_fee" placeholder="Urgent Ad Fee" value="<?php echo stripslashes($info['urgent_project_fee']);?>">
                                    </div>
                                 </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Urgent Duration</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="urgent_duration" type="Text" class="form-control" id="urgent_duration" value="<?php echo stripslashes($info['urgent_duration']);?>">
                                        <p class="help-block">Duration to show Urgent Badge (in days).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Highlight Badge Fee</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="highlight_project_fee" type="number" class="form-control" id="highlight_project_fee" placeholder="Highlight Ad Fee" value="<?php echo stripslashes($info['highlight_project_fee']);?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Highlight Duration</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="highlight_duration" type="Text" class="form-control" id="highlight_duration" value="<?php echo stripslashes($info['highlight_duration']);?>">
                                        <p class="help-block">Duration to show Highlight Badge (in days).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Removable</label>
                                <div class="col-sm-6">
                                    <label class="css-input css-checkbox css-checkbox-primary">
                                        <div class="form-group">
                                            <input type="checkbox" name="group_removable" value="1" <?php if($info['group_removable'] == '1') echo "checked"; ?>><span></span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <h3 class="heading">Package Option (Check it if you want to allow)</h3>
                            <div class="row">
                                <div class="inside" style="padding: 0 20px">
                                    <label class="css-input css-checkbox css-checkbox-primary">
                                        <input type="checkbox" name="top_search_result" value="yes" <?php if($info['top_search_result'] == 'yes') echo "checked"; ?>><span></span>
                                        Top in search results and category.
                                    </label>
                                    <br>
                                    <label class="css-input css-checkbox css-checkbox-primary">
                                        <input type="checkbox" name="show_on_home" value="yes" <?php if($info['show_on_home'] == 'yes') echo "checked"; ?>><span></span>
                                        Show ad on home page premium ad section.
                                    </label>
                                    <br>
                                    <label class="css-input css-checkbox css-checkbox-primary">
                                        <input type="checkbox" name="show_in_home_search" value="yes" <?php if($info['show_in_home_search'] == 'yes') echo "checked"; ?>><span></span>
                                        Show ad on home page search result list.
                                    </label>

                                </div>
                            </div>
                            <input type="hidden" name="submit">
                        </div>

                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="slidePanel-actions">
    <div class="btn-group-flat">
        <button type="button" class="btn btn-warning btn-sm waves-effect waves-float waves-light margin-right-10" id="post_sidePanel_data">Save</button>
        <button type="button" class="btn btn-default btn-sm waves-effect waves-float waves-light margin-right-10 slidePanel-close" aria-hidden="true" data-dismiss="modal">Close</button>
    </div>
</div>
<script>
    $(function()
    {
        // Init page helpers (BS Datepicker + BS Colorpicker + Select2 + Masked Input + Tags Inputs plugins)
        App.initHelpers('select2');
    });
</script>
