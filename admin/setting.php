<?php
require_once('includes.php');
?>

<main class="app-layout-content">

    
    <div class="container-fluid p-y-md">
        
        <div class="card">
            <div class="card-header">
                <h4>Site setting</h4>
            </div>
            <div class="card-block">
                
                <div class="row">
                    <div class="col-sm-12">


                        <div class="wrap tab-page">
                            <div class="markad-tbs-body">

                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#markad_settings_general" data-toggle="tab"><i class="ion-navicon"></i>General</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#markad_logo_watermark" data-toggle="tab"><i class="ion-flag"></i>Site Logo</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#markad_android" data-toggle="tab"><i class="ion-gear-a"></i>App Setting</a>
                                            </li>
   
                                            <li class="nav-item">
                                                <a class="nav-link" href="#markad_international" data-toggle="tab"><i class="ion-ios-world"></i>Multi Setting</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#markad_email" data-toggle="tab"><i class="ion-ios-email"></i>Mail Setting</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="#markad_theme_setting" data-toggle="tab"><i class="ion-aperture"></i>Front-End Setting</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#markad_frontend_submission" data-toggle="tab"><i class="ion-social-angular"></i>Post Setting</a>
                                            </li>
                                                <li class="nav-item">
                                                <a class="nav-link" href="#markad_push_notification" data-toggle="tab"><i class="ion-social-angular"></i>Notification</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#markad_social_login_setting" data-toggle="tab"><i class="ion-social-twitter"></i>Social Setting</a>
                                            </li>
                                            <li class="nav-item" hidden>
                                                <a class="nav-link" href="#markad_recaptcha" data-toggle="tab"><i class="ion-closed-captioning"></i>Google reCAPTCHA</a>
                                            </li>
                    
                                        </ul>

                                    <div id="markad_settings_controls" class="tab-contents">
                                        <div class="panel panel-default markad-main">
                                            <div class="panel-body">
                                                <div class="tab-content">

                                                    <div class="tab-pane active" id="markad_settings_general">
                                                        <form method="post" action="ajax_sidepanel.php?action=SaveSettings" id="#markad_settings_general">
                                                            <div class="form-group">
                                                                <label for="site_url">Site Url </label>
                                                                <div>
                                                                    <input name="site_url" class="form-control" type="Text" id="site_url" value="<?php echo get_option("site_url"); ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="site_title">Site Title </label>
                                                                <div>
                                                                    <input name="site_title" class="form-control" type="Text" id="site_title" value="<?php echo get_option("site_title"); ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" hidden >
                                                                <label for="home_page">Home Page</label>
                                                                <select name="home_page" id="home_page" class="form-control">
                                                                    <option value="home-image" <?php if(get_option("home_page") == 'home-image'){ echo 'selected'; } ?>>Home with Image</option>
                                                                    <option value="home-map" <?php if(get_option("home_page") == 'home-map'){ echo 'selected'; } ?>>Home with Map</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="gmap_api_key">Google Map API Key</label>
                                                                <input name="gmap_api_key" class="form-control" type="Text" id="gmap_api_key" value="<?php echo get_option("gmap_api_key"); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="featured_fee">Featured Ad Fee ( For App Only )</label>
                                                                <div>
                                                                    <input name="featured_fee" class="form-control" type="Text" id="featured_fee" value="<?php echo get_option("featured_fee"); ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="urgent_fee">Urgent Ad Fee ( For App Only )</label>
                                                                <input name="urgent_fee" class="form-control" type="Text" id="urgent_fee" value="<?php echo get_option("urgent_fee"); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="highlight_fee">Highlight Ad Fee ( For App Only )</label>
                                                                <input name="highlight_fee" class="form-control" type="Text" id="highlight_fee" value="<?php echo get_option("highlight_fee"); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="delete_expired">Delete Ad after expire</label>
                                                                <select name="delete_expired" id="delete_expired" class="form-control">
                                                                    <option value="1" <?php if(get_option("delete_expired") == '1'){ echo "selected"; } ?>>Yes Delete</option>
                                                                    <option value="0" <?php if(get_option("delete_expired") == '0'){ echo "selected"; } ?>>No</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="delete_expired">Cron job run time (In seconds)</label>
                                                                    3600 = 1 Hour.</p>
                                                                <input name="cron_exec_time" class="form-control" type="text" id="cron_exec_time" value="<?php echo get_option("cron_exec_time"); ?>">
                                                            </div>

                                                            <div class="form-group" hidden >
                                                                <label for="inputPassword4">Allow User Language Selection</label>
                                                                <select name="userlangsel" class="form-control" id="userlangsel">
                                                                    <option value="1" <?php if(get_option("userlangsel") == 1){ echo "selected"; } ?>>Yes</option>
                                                                    <option value="0" <?php if(get_option("userlangsel") == 0){ echo "selected"; } ?>>No</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group" hidden >
                                                                <label for="inputPassword4" hidden>Allow User Theme Selection</label>
                                                                <select name="userthemesel" class="form-control" id="userthemesel">
                                                                    <option value="1" <?php if(get_option("userthemesel") == 1){ echo "selected"; } ?>>Yes</option>
                                                                    <option value="0" <?php if(get_option("userthemesel") == 0){ echo "selected"; } ?>>No</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group" hidden>
                                                                <label for="inputPassword4">Theme/Color switcher</label>
                                                                <select name="color_switcher" class="form-control" id="color_switcher">
                                                                    <option value="1" <?php if(get_option("color_switcher") == 1){ echo "selected"; } ?>>On</option>
                                                                    <option value="0" <?php if(get_option("color_switcher") == 0){ echo "selected"; } ?>>Off</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="transfer_filter">Transfer Filter</label>
                                                                <select name="transfer_filter" class="form-control" id="transfer_filter">
                                                                    <option value="1" <?php if(get_option("transfer_filter") == 1){ echo "selected"; } ?>>Yes</option>
                                                                    <option value="0" <?php if(get_option("transfer_filter") == 0){ echo "selected"; } ?>>No</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group" hidden>
                                                                <label for="temp_php">Enable PHP in Template (Must be on always)</label>
                                                                <select name="temp_php" id="temp_php" class="form-control">
                                                                    <option value="1" <?php if(get_option("temp_php") == 1){ echo "selected"; } ?>>Yes</option>
                                                                    <option value="0" <?php if(get_option("temp_php") == 0){ echo "selected"; } ?>>No</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group <?php if(get_option("markad_debug") == 0){ echo "hidden"; } ?> " hidden>
                                                                <label for="markad_debug">Enable Developement Mode</label>
                                                                <select name="markad_debug" id="markad_debug" class="form-control">
                                                                    <option value="1" <?php if(get_option("markad_debug") == 1){ echo "selected"; } ?>>Yes</option>
                                                                    <option value="0" <?php if(get_option("markad_debug") == 0){ echo "selected"; } ?>>No</option>
                                                                </select>
                                                            </div>

                                                            <div class="panel-footer">
                                                                <button name="general_setting" type="submit" class="btn btn-primary btn-radius save-changes">Save</button>
                                                                <button class="btn btn-default" type="reset">Reset</button>
                                                            </div>

                                                        </form>
                                                    </div>

                                                    <div class="tab-pane" id="markad_logo_watermark">
                                                        <form method="post" action="ajax_sidepanel.php?action=SaveSettings" id="#markad_logo_watermark" enctype="multipart/form-data">
                                                            <!-- Favicon upload-->
                                                            <div class="form-group">

                                                                <label class="control-label">Favicon Icon<code>*</code></label>
                                                                <div class="screenshot"><img class="redux-option-image" id="favicon_uploader" src="../storage/logo/<?php echo $config['site_favicon']?>" alt="" target="_blank" rel="external"  style="border: 2px solid #eee;background-color: #000;max-width: 100%"></div>
                                                                <input class="form-control input-sm" type="file" name="favicon" onchange="readURL(this,'favicon_uploader')">
                                                                <span class="help-block">Recomended Size 24x24 PX <p><span style="color: rgb(41, 105, 176);">Click Here</span></p></span>                                                            </div>

                                                            
                                                            <div class="form-group">
                                                                <label class="control-label">Logo<code>*</code></label>
                                                                <div class="screenshot"><img class="redux-option-image" id="image_logo_uploader" src="../storage/logo/<?php echo $config['site_logo']?>" alt="" target="_blank" rel="external"  style="border: 2px solid #eee;background-color: #000;max-width: 100%"></div>
                                                                <input class="form-control input-sm" type="file" name="file" onchange="readURL(this,'image_logo_uploader')">
                                                                <span class="help-block">Recomended Size 170x60 PX <p><span style="color: rgb(41, 105, 176);">Click Here</span></p> </span>
                                                            </div>
                                                            

                                                            <!-- Home Banner upload-->
                                                            <div class="form-group" hidden >
                                                                <label class="control-label" >Home Banner<code>*</code></label>
                                                                <div class="screenshot"><img class="redux-option-image" id="home_banner" src="../storage/banner/<?php echo $config['home_banner']?>" alt="" target="_blank" rel="external" width="400px"></div>
                                                                <input class="form-control input-sm" type="file" name="banner" onchange="readURL(this,'home_banner')">
                                                            </div>
                                                            <!-- Home Banner upload-->

                                                            <!-- Watermark Image upload-->
                                                            <div class="form-group" hidden>
                                                                <label class="control-label">Watermark Image</label>
                                                                <div class="screenshot">
                                                                    <img class="redux-option-image" id="watermark_logo" src="../storage/logo/watermark.png" alt=""  target="_blank" rel="external"  style="border: 2px solid #eee;background-color: #000;max-width: 100%">
                                                                </div>
                                                                <input class="form-control input-sm" type="file" name="watermark" onchange="readURL(this,'watermark_logo')">
                                                                <span class="help-block">Must be png</span>
                                                            </div>
                                                            <!-- Watermark Image upload-->

                                                            <!-- Admin Logo upload-->
                                                            <div class="form-group" hidden>
                                                                <label class="control-label">Admin Logo</label>
                                                                <div class="screenshot"><img class="redux-option-image" id="adminlogo" src="../storage/logo/<?php echo $config['site_admin_logo']?>" alt="" target="_blank" rel="external"  style="border: 2px solid #eee;background-color: #000;max-width: 100%"></div>
                                                                <input class="form-control input-sm" type="file" name="adminlogo" onchange="readURL(this,'adminlogo')">
                                                                <span class="help-block">Ideal Size 235x62 PX</span>
                                                            </div>

                                                            <!-- Admin Logo upload-->
                                                            <div class="panel-footer">
                                                                <button name="logo_watermark" type="submit" class="btn btn-primary btn-radius save-changes">Save</button>
                                                                <button class="btn btn-default" type="reset">Reset</button>
                                                            </div>

                                                        </form>
                                                    </div>

                                                    <div class="tab-pane" id="markad_android">
                                                        <form method="post" action="ajax_sidepanel.php?action=SaveSettings" id="#markad_android">

                                                            <div class="form-group">
                                                                <label for="app_name">App Name </label>
                                                                <div>
                                                                    <input name="app_name" class="form-control" type="Text" id="app_name" value="<?php echo get_option("app_name"); ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="app_version">App Version </label>
                                                                <div>
                                                                    <input name="app_version" class="form-control" type="number" id="app_version" value="<?php echo get_option("app_version"); ?>">
                                                                </div>
                                                            </div>
                                                            
                                                             <div class="form-group">
                                                                <label for="ad_native">Admob Native AdsI'd  </label>
                                                                <div>
                                                                    <input name="ad_native" class="form-control" type="text" id="ad_native" value="<?php echo get_option("ad_native"); ?>">
                                                                </div>
                                                            </div>
                                                            
                                                             <div class="form-group">
                                                                <label for="ad_appid">Admob App I'd  </label>
                                                                <div>
                                                                    <input name="ad_appid" class="form-control" type="text" id="ad_appid" value="<?php echo get_option("ad_appid"); ?>">
                                                                </div>
                                                            </div>
                                                            
                                                             <div class="form-group">
                                                                <label for="fb_native">Facebook Native AdsI'd ( Work in Both iOS + Android ) </label>
                                                                <div>
                                                                    <input name="fb_native" class="form-control" type="text" id="fb_native" value="<?php echo get_option("fb_native"); ?>">
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                              <div class="form-group">
                                                                <label for="ad_ios_native">Admob iOS Native AdsI'd </label>
                                                                <div>
                                                                    <input name="ad_ios_native" class="form-control" type="text" id="ad_ios_native" value="<?php echo get_option("ad_ios_native"); ?>">
                                                                </div>
                                                            </div>
                                                            
                                                              <div class="form-group">
                                                                <label for="ad_ios_appid">Admob iOS App I'd </label>
                                                                <div>
                                                                    <input name="ad_ios_appid" class="form-control" type="text" id="ad_ios_appid" value="<?php echo get_option("ad_ios_appid"); ?>">
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                              <div class="form-group">
                                                                <label for="change_ad_fb">Disable or Enable, facebook /Admob Ads </label>
                                                                <div>
                                                                    <select name="change_ad_fb" class="form-control">
                                                                        <option <?php if(get_option("change_ad_fb") == '1'){ echo "selected"; } ?> value="1">Facebook</option>
                                                                        <option <?php if(get_option("change_ad_fb") == '0'){ echo "selected"; } ?> value="0">Admob</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                              <div class="form-group">
                                                                <label for="disable_ad_social">Disable Google login in App : </label>
                                                                <div>
                                                                    <select name="disable_ad_social" class="form-control">
                                                                        <option <?php if(get_option("disable_ad_social") == '1'){ echo "selected"; } ?> value="1">On</option>
                                                                        <option <?php if(get_option("disable_ad_social") == '0'){ echo "selected"; } ?> value="0">Off</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                              <div class="form-group" hidden >
                                                                <label for="disable_fb_social" hidden >Disable Facebook login in App : </label>
                                                                <div>
                                                                    <select name="disable_fb_social" class="form-control">
                                                                        <option <?php if(get_option("disable_fb_social") == '1'){ echo "selected"; } ?> value="1">On</option>
                                                                        <option <?php if(get_option("disable_fb_social") == '0'){ echo "selected"; } ?> value="0">Off</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="firebase_server_key">GCM Firebase Server Key</label>
                                                                <div>
                                                                    <input name="firebase_server_key" class="form-control" type="Text" id="firebase_server_key" value="<?php echo get_option("firebase_server_key"); ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" hidden >
                                                                <label for="detect_live_location" hidden >Detect Live Location </label>
                                                                <div>
                                                                    <select name="detect_live_location" class="form-control">
                                                                        <option <?php if(get_option("detect_live_location") == '1'){ echo "selected"; } ?> value="1">On</option>
                                                                        <option <?php if(get_option("detect_live_location") == '0'){ echo "selected"; } ?> value="0">Off</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group" hidden >
                                                                <label for="facebook_interstitial" hidden >Facebook Interstitial Ads:</label>
                                                                <div>
                                                                    <select name="facebook_interstitial" class="form-control">
                                                                        <option <?php if(get_option("facebook_interstitial") == '1'){ echo "selected"; } ?> value="1">On</option>
                                                                        <option <?php if(get_option("facebook_interstitial") == '0'){ echo "selected"; } ?> value="0">Off</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group" hidden >
                                                                <label for="google_interstitial" hidden >Google Interstitial Ads:</label>
                                                                <div>
                                                                    <select name="google_interstitial" class="form-control">
                                                                        <option <?php if(get_option("google_interstitial") == '1'){ echo "selected"; } ?> value="1">On</option>
                                                                        <option <?php if(get_option("google_interstitial") == '0'){ echo "selected"; } ?> value="0">Off</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group" hidden>
                                                                <label for="google_banner" hidden>Google Banner:</label>
                                                                <div>
                                                                    <select name="google_banner" class="form-control">
                                                                        <option <?php if(get_option("google_banner") == '1'){ echo "selected"; } ?> value="1">On</option>
                                                                        <option <?php if(get_option("google_banner") == '0'){ echo "selected"; } ?> value="0">Off</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="premium_app">Premium App:</label>
                                                                <div>
                                                                    <select name="premium_app" class="form-control">
                                                                        <option <?php if(get_option("premium_app") == '1'){ echo "selected"; } ?> value="1">On</option>
                                                                        <option <?php if(get_option("premium_app") == '0'){ echo "selected"; } ?> value="0">Off</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group" hidden >
                                                                <label for="facebook_native" hidden >Facebook Native Ads:</label>
                                                                <div>
                                                                    <select name="facebook_native" class="form-control">
                                                                        <option <?php if(get_option("facebook_native") == '1'){ echo "selected"; } ?> value="1">On</option>
                                                                        <option <?php if(get_option("facebook_native") == '0'){ echo "selected"; } ?> value="0">Off</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group" hidden >
                                                                <label for="google_native" hidden >Google Native Ads:</label>
                                                                <div>
                                                                    <select name="google_native" class="form-control">
                                                                        <option <?php if(get_option("google_native") == '1'){ echo "selected"; } ?> value="1">On</option>
                                                                        <option <?php if(get_option("google_native") == '0'){ echo "selected"; } ?> value="0">Off</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="panel-footer">
                                                                <button name="app_setting" type="submit" class="btn btn-primary btn-radius save-changes">Save</button>
                                                                <button class="btn btn-default" type="reset">Reset</button>
                                                            </div>

                                                        </form>
                                                    </div>

                                                    <div class="tab-pane" id="markad_push_notification">
                                                        <form method="post" action="ajax_sidepanel.php?action=SaveSettings" id="#markad_push_notification">
                                                            <div class="form-group">
                                                                <label for="push_users_list">Choose User List </label>
                                                                <div>
                                                                    <select name="push_users_list" class="form-control">
                                                                        <option value="0">All Users</option>
                                                                        <option value="1">Registered Users</option>
                                                                        <option value="2">Unregistered Users</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="notification_title">Notification Title </label>
                                                                <div>
                                                                    <input name="notification_title" class="form-control" type="Text" id="notification_title">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="notification_message">Notification Message </label>
                                                                <div>
                                                                    <input name="notification_message" class="form-control" type="Text" id="notification_message">
                                                                </div>
                                                            </div>

                                                            <div class="panel-footer">
                                                                <button name="brodcast_push_notification" type="submit" class="btn btn-primary btn-radius save-changes">Send Push Notification</button>
                                                                <button class="btn btn-default" type="reset">Reset</button>
                                                            </div>

                                                        </form>
                                                    </div>

                                                    <div class="tab-pane" id="markad_international">
                                                        <form method="post" action="ajax_sidepanel.php?action=SaveSettings" id="#markad_international">

                                                            <div class="form-group">
                                                                <label class=""></label>
                                                                <div>
                                                                    <select name="country_type" class="form-control">
                                                                        <option <?php if(get_option("country_type") == 'single'){ echo "selected"; } ?> value="single">Single Country</option>
                                                                        <option <?php if(get_option("country_type") == 'multi'){ echo "selected"; } ?> value="multi">Multi Countries</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <p>Country List <a href="/admin/country_setting.php" rel="noopener noreferrer" target="_blank">Click Here</a></p>
                                                                <div>
                                                                    <select  class="js-select2 form-control" name="specific_country" id="specific_country" style="width: 100%;">
                                                                        <?php

                                                                        $country = get_country_list(get_option("specific_country"));
                                                                        foreach ($country as $value){
                                                                            echo '<option value="'.$value['code'].'" '.$value['selected'].'>'.$value['name'].'</option>';
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="timezone">Timezone</label>
                                                                <p>Time Zones List <a href="/admin/timezones.php" rel="noopener noreferrer" target="_blank">Click Here</a></p>
                                                                <div>
                                                                    <select name="timezone" id="timezone" class="js-select2 form-control"  style="width: 100%;">
                                                                        <?php
                                                                        $timezone = get_timezone_list(get_option("timezone"));

                                                                        foreach ($timezone as $value) {
                                                                            $id = $value['id'];
                                                                            $country_code = $value['country_code'];
                                                                            $time_zone_id = $value['time_zone_id'];
                                                                            $selected = $value['selected'];
                                                                            echo '<option value="'.$time_zone_id.'" '.$selected.' data-tokens="'.$time_zone_id.'">'.$time_zone_id.'</option>';
                                                                        }

                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <p>Currency List <a href="/admin/currency_setting.php" rel="noopener noreferrer" target="_blank">Click Here</a></p>
                                                                <div>
                                                                    <select name="currency" id="currency"  class="js-select2 form-control" style="width: 100%;">
                                                                        <?php
                                                                        $currency = get_currency_list(get_option("currency_code"));

                                                                        foreach ($currency as $value)
                                                                        {
                                                                            $id          = $value['id'];
                                                                            $code        = $value['code'];
                                                                            $name       = $value['name'];
                                                                            $html_code   = $value['html_entity'];
                                                                            $selected =  $value['selected'];

                                                                            echo '<option value="'.$id.'" '.$selected.' data-tokens="'.$name.'">'.$name.' ('.$html_code.')</option>';
                                                                        }

                                                                        ?>

                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <p>Language List <a href="/admin/languages_list.php" rel="noopener noreferrer" target="_blank">Click Here</a></p>
                                                                <select name="lang" id="lang" class="js-select2 form-control" style="width: 100%;">
                                                                    <?php
                                                                    $langs = array();

                                                                    if ($handle = opendir('../includes/lang/'))
                                                                    {
                                                                        while (false !== ($file = readdir($handle)))
                                                                        {
                                                                            if ($file != "." && $file != "..")
                                                                            {
                                                                                $lang2 = str_replace('.php','',$file);
                                                                                $lang2 = str_replace('lang_','',$lang2);

                                                                                $langs[] = $lang2;
                                                                            }
                                                                        }
                                                                        closedir($handle);
                                                                    }

                                                                    sort($langs);

                                                                    foreach ($langs as $key => $lang2)
                                                                    {
                                                                        if(get_option("lang") == $lang2)
                                                                        {
                                                                            echo '<option value="'.$lang2.'" selected>'.ucwords($lang2).'</option>';
                                                                        }
                                                                        else
                                                                        {
                                                                            echo '<option value="'.$lang2.'">'.ucwords($lang2).'</option>';
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                            <div class="panel-footer">
                                                                <button name="international" type="submit" class="btn btn-primary btn-radius save-changes">Save</button>
                                                                <button class="btn btn-default" type="reset">Reset</button>
                                                            </div>

                                                        </form>
                                                    </div>

                                                    <div class="tab-pane" id="markad_email">
                                                        <form method="post" action="ajax_sidepanel.php?action=SaveSettings" id="#markad_email">

                                                            <div class="form-group">
                                                                <label for="admin_email">Admin Email</label>
                                                                <div>
                                                                    <input name="admin_email" class="form-control" type="Text" id="admin_email" value="<?php echo get_option("admin_email");?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="email_template">E-mail Content Type </label>
                                                                <div>
                                                                    <select name="email_template" id="email_template" class="form-control">
                                                                        <option <?php if(get_option("email_template") == '0'){ echo "selected"; } ?> value="0">HTML</option>
                                                                        <option <?php if(get_option("email_template") == '1'){ echo "selected"; } ?> value="1">Text</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="email_engine">E-mail Engine </label>
                                                                <div>
                                                                    <select name="email_engine" id="email_engine" class="form-control">
                                                                        <option <?php if(get_option("email_engine") == 'phpmailer'){ echo "selected"; } ?> value="phpmailer">PHPMailer</option>
                                                                        <option <?php if(get_option("email_engine") == 'swiftmailer'){ echo "selected"; } ?> value="swiftmailer">Swift Mailer</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="email_type"></label>

                                                                <div>
                                                                    <select name="email_type" id="email_type" class="form-control">
                                                                        <option value="smtp" <?php if(get_option("email_type") == 'smtp'){ echo "selected"; } ?>>SMTP</option>
                                                                        <option value="mail" <?php if(get_option("email_type") == 'mail'){ echo "selected"; } ?>>PHPMail</option>
                                                                        <option value="aws" <?php if(get_option("email_type") == 'aws'){ echo "selected"; } ?>>Amazon SES</option>
                                                                        <option value="mandrill" <?php if(get_option("email_type") == 'mandrill'){ echo "selected"; } ?>>Mandrill</option>
                                                                        <option value="sendgrid" <?php if(get_option("email_type") == 'sendgrid'){ echo "selected"; } ?>>SendGrid</option>
                                                                    </select>
                                                                </div>
                                                            </div>



                                                            <div style="margin-top: 30px;">
                                                                <div class="mailMethod-smtp mailMethods" <?php if($config['email_type'] != 'smtp'){ echo 'style="display: none;"'; } ?>>
                                                                    <h4 class="text-warning">SMTP</h4><hr>
                                                                    <div class="form-group">
                                                                        <label for="smtp_host">SMTP Host</label>
                                                                        <div>
                                                                            <input name="smtp_host" type="Text" class="form-control" id="smtp_host" value="<?php echo get_option("smtp_host");?>">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="smtp_host">SMTP Port</label>
                                                                        <input name="smtp_port" type="Text" class="form-control" id="smtp_port" value="<?php echo get_option("smtp_port");?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="smtp_username">SMTP Username</label>
                                                                        <input name="smtp_username" class="form-control" type="Text" id="smtp_username" value="<?php echo get_option("smtp_username");?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="smtp_password">SMTP Password</label>
                                                                        <input name="smtp_password" type="password" class="form-control" id="smtp_password" value="<?php echo get_option("smtp_password");?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="smtp_secure">SMTP Encryption</label>
                                                                        <select name="smtp_secure" id="smtp_secure" class="form-control">
                                                                            <option value="0" <?php if(get_option("smtp_secure") == '0'){ echo "selected"; } ?>>Off</option>
                                                                            <option value="1" <?php if(get_option("smtp_secure") == '1'){ echo "selected"; } ?>>SSL</option>
                                                                            <option value="2" <?php if(get_option("smtp_secure") == '2'){ echo "selected"; } ?>>TLS</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="smtp_auth">SMTP Auth</label>
                                                                        <select name="smtp_auth" id="smtp_auth" class="form-control">
                                                                            <option value="true" <?php if(get_option("smtp_auth") == 'true'){ echo "selected"; } ?>>On</option>
                                                                            <option value="false" <?php if(get_option("smtp_auth") == 'false'){ echo "selected"; } ?>>Off</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="mailMethod-aws mailMethods" <?php if($config['email_type'] != 'aws'){ echo 'style="display: none;"'; } ?>>
                                                                    <h4 class="text-warning">Amazon SES</h4><hr>
                                                                    <div class="form-group">
                                                                        <label for="aws_host">AWS Region</label>
                                                                        <input name="aws_host" type="Text" class="form-control" id="aws_host" value="<?php echo get_option("aws_host");?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="aws_access_key">AWS SMTP Username</label>

                                                                        <input name="aws_access_key" class="form-control" type="Text" id="aws_access_key" value="<?php echo get_option("aws_access_key");?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="aws_secret_key">AWS SMTP Password</label>
                                                                        <input name="aws_secret_key" type="password" class="form-control" id="aws_secret_key" value="<?php echo get_option("aws_secret_key");?>">
                                                                    </div>

                                                                </div>
                                                                <div class="mailMethod-mandrill mailMethods" <?php if($config['email_type'] != 'mandrill'){ echo 'style="display: none;"'; } ?>>
                                                                    <h4 class="text-warning">Mandrill</h4><hr>
                                                                    <div class="form-group">
                                                                        <label for="mandrill_user">Mandrill Username</label>
                                                                        <input name="mandrill_user" class="form-control" type="Text" id="mandrill_user" value="<?php echo get_option("mandrill_user");?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="mandrill_key">Mandrill API Key</label>
                                                                        <input name="mandrill_key" type="Text" class="form-control" id="mandrill_key" value="<?php echo get_option("mandrill_key");?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mailMethod-sendgrid mailMethods" <?php if($config['email_type'] != 'sendgrid'){ echo 'style="display: none;"'; } ?>>
                                                                    <h4 class="text-warning">SendGrid</h4><hr>
                                                                    <div class="form-group">
                                                                        <label for="sendgrid_user">SendGrid Username</label>
                                                                        <input name="sendgrid_user" class="form-control" type="Text" id="sendgrid_user" value="<?php echo get_option("sendgrid_user");?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="sendgrid_pass">SendGrid Password</label>
                                                                        <input name="sendgrid_pass" type="password" class="form-control" id="sendgrid_pass" value="<?php echo get_option("sendgrid_pass");?>">
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="panel-footer">
                                                                <button name="email_setting" type="submit" class="btn btn-primary btn-radius save-changes">Save</button>
                                                                <button class="btn btn-default" type="reset">Reset</button>
                                                            </div>

                                                        </form>
                                                    </div>

                                                    <div class="tab-pane" id="markad_theme_setting">
                                                        <form method="post" action="ajax_sidepanel.php?action=SaveSettings" id="#markad_theme_setting">
                                                            <div class="form-group">
                                                                <label for="smtp_auth">Phone/Email Login user show/hide</label>
                                                                <select name="contact_validation" id="contact_validation" class="form-control">
                                                                    <option value="1" <?php if(get_option("contact_validation") == '1'){ echo "selected"; } ?>>Show Logged User</option>
                                                                    <option value="0" <?php if(get_option("contact_validation") == '0'){ echo "selected"; } ?>>Show Publicly</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group" hidden >
                                                                <label class="">Home Map Latitude:</label>
                                                                <div>
                                                                    <input name="home_map_latitude" type="text" class="form-control" value="<?php echo get_option("home_map_latitude"); ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" hidden >
                                                                <label class="">Home Map Longitude:</label>
                                                                <div>
                                                                    <input name="home_map_longitude" type="text" class="form-control" value="<?php echo get_option("home_map_longitude"); ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" hidden >
                                                                <label class="">Home Map Zoom:</label>
                                                                <div>
                                                                    <input name="home_map_zoom" type="text" class="form-control" value="<?php echo get_option("home_map_zoom"); ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" hidden >
                                                                <label class="">Theme Color:</label>
                                                                <div>
                                                                    <input name="theme_color" type="color" class="form-control" value="<?php echo get_option("theme_color"); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group" hidden >
                                                                <label class="">Map Color:</label>
                                                                <div>
                                                                    <input name="map_color" type="color" class="form-control" value="<?php echo get_option("map_color"); ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="">Meta Keywords:</label>
                                                                <div>
                                                                    <input name="meta_keywords" type="text" class="form-control" value="<?php echo get_option("meta_keywords"); ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="">Meta Description:</label>
                                                                <div>
                                                                    <input name="meta_description" type="text" class="form-control" value="<?php echo get_option("meta_description"); ?>">
                                                                </div>
                                                            </div>

                                                            
                                                            <div class="form-group">
                                                                <label class="">Contact Address:</label>
                                                                <div>
                                                                    <input name="contact_address" type="text" class="form-control" value="<?php echo get_option("contact_address"); ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="">Contact Map Latitude:</label>
                                                                <div>
                                                                    <input name="contact_latitude" type="text" class="form-control" value="<?php echo get_option("contact_latitude"); ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="">Contact Map Longitude:</label>
                                                                <div>
                                                                    <input name="contact_longitude" type="text" class="form-control" value="<?php echo get_option("contact_longitude"); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="">Contact Email:</label>
                                                                <div>
                                                                    <input name="contact_email" type="text" class="form-control" value="<?php echo get_option("contact_email"); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="">Contact Phone:</label>
                                                                <div>
                                                                    <input name="contact_phone" type="text" class="form-control" value="<?php echo get_option("contact_phone"); ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="">Copyright Text:</label>
                                                                <div>
                                                                    <input name="copyright_text" type="text" class="form-control" value="<?php echo get_option("copyright_text"); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="">Footer Text:</label>
                                                                <div>
                                                                    <textarea name="footer_text" class="form-control"><?php echo get_option("footer_text"); ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Footer Facebook Page Link:</label>
                                                                <div>
                                                                    <input name="facebook_link" type="text" class="form-control" value="<?php echo get_option("facebook_link"); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Footer Twitter Page Link:</label>
                                                                <div>
                                                                    <input name="twitter_link" type="text" class="form-control" value="<?php echo get_option("twitter_link"); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Footer Google+ Page Link:</label>
                                                                <div>
                                                                    <input name="googleplus_link" type="text" class="form-control" value="<?php echo get_option("googleplus_link"); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Footer Youtube Page/Video Link:</label>
                                                                <div>
                                                                    <input name="youtube_link" type="text" class="form-control" value="<?php echo get_option("youtube_link"); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>External Javascript or Css In header:</label>
                                                                <div>
                                                                    <textarea name="external_code" type="text" class="form-control" rows="5"><?php echo get_option("external_code"); ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="panel-footer">
                                                                <button name="theme_setting" type="submit" class="btn btn-primary btn-radius save-changes">Save</button>
                                                                <button class="btn btn-default" type="reset">Reset</button>
                                                            </div>

                                                        </form>
                                                    </div>

                                                    <div class="tab-pane" id="markad_frontend_submission">
                                                        <form method="post" action="ajax_sidepanel.php?action=SaveSettings" id="#markad_frontend_submission">
                                                            <div class="form-group">
                                                                <h4>Modify Post form fields</h4>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Post Without Login :</label>
                                                                <div>
                                                                    <select name="post_without_login" class="form-control">
                                                                        <option <?php if(get_option("post_without_login") == '1'){ echo "selected"; } ?> value="1">
                                                                            Enable (User can post without login.)
                                                                        </option>
                                                                        <option <?php if(get_option("post_without_login") == '0'){ echo "selected"; } ?> value="0">
                                                                            Disable (User required login to post ad.)
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Ads Auto Approve :</label>
                                                                <div>
                                                                    <select name="post_auto_approve" class="form-control">
                                                                        <option <?php if(get_option("post_auto_approve") == '1'){ echo "selected"; } ?> value="1">Enable</option>
                                                                        <option <?php if(get_option("post_auto_approve") == '0'){ echo "selected"; } ?> value="0">Disable</option>
                                                                    </select>
                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <label>Premium Listing Option :</label>
                                                                <div>
                                                                    <select name="post_premium_listing" class="form-control">
                                                                        <option <?php if(get_option("post_premium_listing") == '1'){ echo "selected"; } ?> value="1">Enable</option>
                                                                        <option <?php if(get_option("post_premium_listing") == '0'){ echo "selected"; } ?> value="0">Disable</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Max Image upload :</label>
                                                                <div>
                                                                    <input name="max_image_upload" type="number" class="form-control" value="<?php echo get_option("max_image_upload"); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group" hidden >
                                                                <label>Watermark :</label>
                                                                <div>
                                                                    <select name="post_watermark" class="form-control">
                                                                        <option <?php if(get_option("post_watermark") == '1'){ echo "selected"; } ?> value="1">Enable</option>
                                                                        <option <?php if(get_option("post_watermark") == '0'){ echo "selected"; } ?> value="0">Disable</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Description Editor :</label>
                                                                <div>
                                                                    <select name="post_desc_editor" class="form-control">
                                                                        <option <?php if(get_option("post_desc_editor") == '1'){ echo "selected"; } ?> value="1">Enable</option>
                                                                        <option <?php if(get_option("post_desc_editor") == '0'){ echo "selected"; } ?> value="0">Disable</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address Field :</label>
                                                                <div>
                                                                    <select name="post_address_mode" class="form-control">
                                                                        <option <?php if(get_option("post_address_mode") == '1'){ echo "selected"; } ?> value="1">Enable</option>
                                                                        <option <?php if(get_option("post_address_mode") == '0'){ echo "selected"; } ?> value="0">Disable</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tags Field :</label>
                                                                <div>
                                                                    <select name="post_tags_mode" class="form-control">
                                                                        <option <?php if(get_option("post_tags_mode") == '1'){ echo "selected"; } ?> value="1">Enable</option>
                                                                        <option <?php if(get_option("post_tags_mode") == '0'){ echo "selected"; } ?> value="0">Disable</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Term & Condition Page Link:</label>
                                                                <div>
                                                                    <input name="termcondition_link" type="text" class="form-control" value="<?php echo get_option("termcondition_link"); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Privacy Page Link:</label>
                                                                <div>
                                                                    <input name="privacy_link" type="text" class="form-control" value="<?php echo get_option("privacy_link"); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="panel-footer">
                                                                <button name="frontend_submission" type="submit" class="btn btn-primary btn-radius save-changes">Save</button>
                                                                <button class="btn btn-default" type="reset">Reset</button>
                                                            </div>

                                                        </form>
                                                    </div>

                                                    <div class="tab-pane" id="markad_social_login_setting">
                                                        <form method="post" action="ajax_sidepanel.php?action=SaveSettings" id="#markad_social_login_setting">
                                                            
                                                            <div class="form-group" hidden >
                                                                <label hidden >Facebook app id:</label>
                                                                <div>
                                                                    <input name="facebook_app_id" type="text" class="form-control" value="<?php echo get_option("facebook_app_id"); ?>">
                                                                </div>
                                                            </div>
                                                            

                                                            
                                                            <div class="form-group" hidden >
                                                                <label hidden >Facebook app secret:</label>
                                                                <div>
                                                                    <input name="facebook_app_secret" type="text" class="form-control" value="<?php echo get_option("facebook_app_secret"); ?>">
                                                                </div>
                                                            </div>
                                                            

                                                            
                                                            <div class="form-group" hidden >
                                                                <label hidden >Facebook callback url:</label>
                                                                <div>
                                                                    <input type="text" class="form-control" disabled value="<?php echo $config['site_url']; ?>includes/social_login/facebook/index.php">
                                                                </div>
                                                            </div>
                                                            

                                                            
                                                            <div class="form-group">
                                                                <label>Google+ app id:</label>
                                                                <div>
                                                                    <input name="google_app_id" type="text" class="form-control" value="<?php echo get_option("google_app_id"); ?>">
                                                                </div>
                                                            </div>
                                                            

                                                            
                                                            <div class="form-group">
                                                                <label>Google+ app secret:</label>
                                                                <div>
                                                                    <input name="google_app_secret" type="text" class="form-control" value="<?php echo get_option("google_app_secret"); ?>">
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="form-group">
                                                                <label>Google+ callback url:</label>
                                                                <div>
                                                                    <input type="text" class="form-control" disabled value="<?php echo $config['site_url']; ?>includes/social_login/google/index.php">
                                                                </div>
                                                            </div>
                                                            

                                                            <div class="panel-footer">
                                                                <button name="social_login_setting" type="submit" class="btn btn-primary btn-radius save-changes">Save</button>
                                                                <button class="btn btn-default" type="reset">Reset</button>
                                                            </div>

                                                        </form>
                                                    </div>

                                                    <div class="tab-pane" id="markad_recaptcha">
                                                        <form method="post" action="ajax_sidepanel.php?action=SaveSettings" id="#markad_recaptcha">
                                                            <div class="form-group">
                                                                <h4>Get reCAPTCHA API keys</h4>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>reCAPTCHA Enable/Disable:</label>
                                                                <div>
                                                                    <select name="recaptcha_mode" id="recaptcha_mode" class="form-control">
                                                                        <option <?php if(get_option("recaptcha_mode") == '1'){ echo "selected"; } ?> value="1">Enable</option>
                                                                        <option <?php if(get_option("recaptcha_mode") == '0'){ echo "selected"; } ?> value="0">Disable</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>reCAPTCHA Public Key:</label>
                                                                <div>
                                                                    <input name="recaptcha_public_key" type="text" class="form-control" value="<?php echo get_option("recaptcha_public_key"); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>reCAPTCHA Private Key:</label>
                                                                <div>
                                                                    <input name="recaptcha_private_key" type="text" class="form-control" value="<?php echo get_option("recaptcha_private_key"); ?>">
                                                                </div>
                                                            </div>

                                                            <div class="panel-footer">
                                                                <button name="recaptcha_setting" type="submit" class="btn btn-primary btn-radius save-changes">Save</button>
                                                                <button class="btn btn-default" type="reset">Reset</button>
                                                            </div>

                                                        </form>
                                                    </div>

                                                    <div class="tab-pane" id="markad_purchase_code">
                                                        <form method="post" action="ajax_sidepanel.php?action=SaveSettings" id="#markad_purchase_code">
                                                            
                                                            <div class="form-group">
                                                                <h4>Instructions</h4>
                                                            </div>
                                                            <?php
                                                            if(isset($config['purchase_key']) && $config['purchase_key'] != ""){
                                                                ?>
                                                                <div class="alert alert-success">
                                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                                    <strong>Success!</strong>   Purchase code verified.
                                                                </div>

                                                            <?php
                                                            }
                                                            ?>
                                                            <div class="form-group">
                                                                <label>markad Classified Purchase Code:</label>
                                                                <div>
                                                                    <input name="purchase_key" type="text" class="form-control" value="">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Buyer Email:</label>
                                                                <div>
                                                                    <input name="buyer_email" type="text" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                            <div class="panel-footer">
                                                                <button name="valid_purchase_setting" type="submit" class="btn btn-primary btn-radius save-changes">Save</button>
                                                                <button class="btn btn-default" type="reset">Reset</button>
                                                            </div>

                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                
            </div>
            
        </div>
        
        

    </div>
    
    

</main>


<?php include("footer.php"); ?>
<script src="assets/js/core/bootstrap.min.js"></script>
<script>
    var url = window.location.href;
    var activeTab = url.substring(url.indexOf("#") + 1);
    if(url.indexOf("#") > -1){
        if(activeTab.length > 0){
            $(".markad-nav-item").removeClass("active");
            $(".tab-pane").removeClass("active in");
            $("li[data-target = #"+activeTab+"]").addClass("active");
            $("#" + activeTab).addClass("active in");
            $('a[href="#'+ activeTab +'"]').tab('show')
        }
    }
</script>
<script>
    $(".save-changes").click(function(){
        $(".save-changes").addClass("bookme-progress");
    });
    // wait for the DOM to be loaded
    $(document).ready(function() {
        // bind 'myForm' and provide a simple callback function
        $('form').ajaxForm(function(data) {
            if (data == 0) {
                alertify.error("Unknown Error generated.");
            } else {
                data = JSON.parse(data);
                if (data.status == "success") {
                    alertify.success(data.message);
                }
                else {
                    alertify.error(data.message);
                }
            }
            $(".save-changes").removeClass('bookme-progress');
        });

        /* Mail Method Changer */
        $("#email_type").on('change',function(){
            $(".mailMethods").hide();
            $(".mailMethod-"+$(this).val()).fadeIn('fast');
        });
    });
</script>
<!-- Page JS Code -->
<script>
    $(function()
    {
        // Init page helpers (BS Datepicker + BS Colorpicker + Select2 + Masked Input + Tags Inputs plugins)
        App.initHelpers('select2');
    });
</script>
</body></html>