<?php
require_once('../datatable-json/includes.php');
?>
<header class="slidePanel-header overlay">
    <div class="overlay-panel overlay-background vertical-align">
        <div class="service-heading">
            <h2>Add Country</h2>
        </div>
    </div>
</header>
<div class="slidePanel-inner">
    <div class="panel-body">
        
        <div class="row">
            <div class="col-sm-12">

                <div class="white-box">
                    <div id="post_error"></div>
                    <form name="form2" style="margin-top: 2%" class="form form-horizontal" method="post" data-ajax-action="addCountry" id="sidePanel_form">
                        <div class="form-body">

                            <!-- text input -->
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Country Code</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="code" value="" placeholder="Enter the country code (ISO Code)" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <!-- text input -->
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Local Name</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" value="" placeholder="Local Name" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <!-- text input -->
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Name</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="asciiname" value="" placeholder="Enter the country name (In English)" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Currency Code</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="currency_code" class="form-control" required>
                                            <option value="">-</option>
                                            <?php
                                            $currency = get_currency_list();
                                            foreach ($currency as $value) {
                                                $code = $value['code'];
                                                echo '<option value="'.$code.'" >'.$code.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- text input -->
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Phone Code. (Optional)</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" value="" placeholder="Enter the country phone ind. (E.g. +229 for Benin)" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!-- text input -->
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Languages</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="languages" value="" placeholder="Enter the locale code (ISO) separate with comma" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group image hidden" data-preview="#background_image" data-aspectratio="0" data-crop="">
                                <label class="col-sm-4 control-label">Background Image <code>Homepage background image for this country.</code></label>
                                <div class="col-sm-6" style="margin-top: 10px;">
                                    <img src="" id="home-bg-src" width="200px" />
                                    <div class="btn-group">
                                        <label class="btn btn-primary btn-file">
                                            Choose file <input type="file" name="file" onchange="readURL(this,'home-bg-src')">
                                        </label>
                                    </div>
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
