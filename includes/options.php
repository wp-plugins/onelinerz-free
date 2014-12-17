<?php
// Specify Hooks/Filters.
register_activation_hook(__FILE__, 'add_defaults_fn');
add_action('admin_init', 'onelinerz_init_fn' );
add_action('admin_menu', 'onelinerz_add_page_fn');

// Define default option settings.
function add_defaults_fn() {
  $tmp = get_option('plugin_options');
  if(($tmp['chkbox1']=='on')||(!is_array($tmp))) {
    $arr = array("dropdown1"=>"Orange", "dropdown2"=>"Tan", "dropdown3"=>"Top", "chkbox1" => "");
    update_option('plugin_options', $arr);
  }
}
// Register our settings. Add the settings section, and settings fields.
function onelinerz_init_fn(){
  register_setting('plugin_options', 'plugin_options', 'plugin_options_validate' );
  add_settings_section('main_section', 'Main Settings', 'section_text_fn', __FILE__);
  add_settings_field('drop_down1', 'Select Start Color', 'setting_dropdown_fn', __FILE__, 'main_section');
  add_settings_field('drop_down2', 'Select End Color', 'setting_dropdown2_fn', __FILE__, 'main_section');
  add_settings_field('drop_down3', 'Select Position', 'setting_dropdown3_fn', __FILE__, 'main_section');
  //add_settings_field('plugin_chk1', 'Restore Defaults Upon Reactivation?', 'setting_chk1_fn', __FILE__, 'main_section');
}

// Add sub page to the Settings Menu.
function onelinerz_add_page_fn() {
  // Add optiont to main settings panel.
  add_options_page('Onelinerz-free Settings', 'Onelinerz-free Settings', 'administrator', __FILE__, 'options_page_fn');
}

// ************************************************************************************************************
// Callback functions.
// Init plugin options to white list our options.
// Section HTML, displayed before the first option.
function section_text_fn() {
  echo '<p>Choose how you want Onelinerz-free to appear to your users.</p>';
}

// DROP-DOWN-BOX - Name: plugin_options[dropdown1].
function setting_dropdown_fn() {
  $options = get_option('plugin_options');
  $items = array("Red", "Green", "Blue", "Orange", "White", "Violet", "Yellow", "Tan", "Black", "Grey", "Creme", "Brown");
  echo "<select id='drop_down1' name='plugin_options[dropdown1]'>";
  foreach($items as $item) {
    $selected = ($options['dropdown1']==$item) ? 'selected="selected"' : '';
    echo "<option value='$item' $selected>$item</option>";
  }
  echo "</select>";
}

// DROP-DOWN-BOX - Name: plugin_options[dropdown1].
function setting_dropdown2_fn() {
  $options = get_option('plugin_options');
  $items = array("Red", "Green", "Blue", "Orange", "White", "Violet", "Yellow", "Tan", "Black", "Grey", "Creme", "Brown");
  echo "<select id='drop_down2' name='plugin_options[dropdown2]'>";
  foreach($items as $item) {
    $selected = ($options['dropdown2']==$item) ? 'selected="selected"' : '';
    echo "<option value='$item' $selected>$item</option>";
  }
  echo "</select>";
}

// DROP-DOWN-BOX2 - Name: plugin_options[dropdown2].
function setting_dropdown3_fn() {
  $options = get_option('plugin_options');
  $items = array("Top", "Middle", "Bottom");
  echo "<select id='drop_down3' name='plugin_options[dropdown3]'>";
  foreach($items as $item) {
    $selected = ($options['dropdown3']==$item) ? 'selected="selected"' : '';
    echo "<option value='$item' $selected>$item</option>";
  }
  echo "</select>";
}

// Sanitize and validate input. Accepts an array, return a sanitized array.
function wpet_validate_options($input) {
  // Sanitize textarea input (strip html tags, and escape characters)
  //$input['textarea_one'] = wp_filter_nohtml_kses($input['textarea_one']);
  //$input['textarea_two'] = wp_filter_nohtml_kses($input['textarea_two']);
  //$input['textarea_three'] = wp_filter_nohtml_kses($input['textarea_three']);
  return $input;
}

// Display the admin options page.
function options_page_fn() {
  ?>
  <table style="width:100%">
  <tr><td>
  <div class="wrap">
  <div class="icon32" id="icon-options-general"><br></div>
  <h2>Onelinerz-free Settings</h2>
  Special Settings for the Onelinerz-free Plugin
  <form action="options.php" method="post">
  <?php
  if ( function_exists('wp_nonce_field') )
  wp_nonce_field('plugin-name-action_' . "yep");
  ?>
  <?php settings_fields('plugin_options'); ?>
  <?php do_settings_sections(__FILE__); ?>
  <p class="submit">
  <input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
  </p>
  </form>
  </div>
  </td>
  <td>
  <?php include 'info.php'; ?>
  </td></tr>
  <?php
}

// Validate user data for some/all of your input fields.
function plugin_options_validate($input) {
  // Check our textbox option field contains no HTML tags - if so strip them out.
  $input['text_string'] = wp_filter_nohtml_kses($input['text_string']);
  return $input; // return validated input.
}
