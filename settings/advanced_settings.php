<?php

  /**
   * Register the fields contained in the the "Advanced settings" section.
   */

  function wpan_register_advanced_settings_fields( $section, $displayed_values ) {

    $name = 'enhanced_link_attribution';
    $title = 'Enhanced Link Attribution';
    $desc = 'Enable <a href="https://support.google.com/analytics/answer/2558867">Enhanced Link Attribution</a>.';
    $desc .= 'Remember to enable the option in the property settings inside Google Analytics';
    add_settings_field(
      $name,
      $title,
      'wpan_display_' . $name,
      $section['page'],
      $section['name'],
      [
        'db_key'       => $section['db_key'],
        'options_vals' => $displayed_values,
        'name'         => $name,
        'desc'         => $desc,
        'section'      => $section,
        'value'        => $displayed_values[ $name ],
        'label_for'    => $name,
      ]
    );

    $name = 'cross_domain_support';
    $title = 'Cross Domain support';
    $desc = 'Enable support for cross-domain tracking as described in <a href="https://developers.google.com/analytics/devguides/collection/analyticsjs/linker#bi-directional_cross-domain_tracking">in Google\'s documentation</a>? This feature just loads the linker plugin: you need to call the \'autoLink\' function yourself using the Custom Code tab.';
    add_settings_field(
      $name,
      $title,
      'wpan_display_' . $name,
      $section['page'],
      $section['name'],
      [
        'db_key'       => $section['db_key'],
        'options_vals' => $displayed_values,
        'name'         => $name,
        'desc'         => $desc,
        'section'      => $section,
        'value'        => $displayed_values[ $name ],
        'label_for'    => $name,
      ]
    );

    $name = 'debug';
    $title = 'Debug mode';
    $desc = 'Print useful information to console';
    add_settings_field(
      $name,
      $title,
      'wpan_display_' . $name,
      $section['page'],
      $section['name'],
      [
        'db_key'       => $section['db_key'],
        'options_vals' => $displayed_values,
        'name'         => $name,
        'desc'         => $desc,
        'section'      => $section,
        'value'        => $displayed_values[ $name ],
        'label_for'    => $name,
      ]
    );

  }


  /**
   * Build the "Advanced settings" section.
   **/

  function wpan_display_advanced_settings_section () {

  }


  /**
   * Display the single fields in the "Advanced settings" section.
   */   

  function wpan_display_enhanced_link_attribution ( $args ) {

    wpan_display_checkbox_input ( $args );

  }

  function wpan_display_cross_domain_support ( $args ) {

    wpan_display_checkbox_input ( $args );

    ?>

    <script>

    /* Script to make sure that enhanced_link_attribution is turned on 
    (DISABLED) */
    // whenever the cross_domain_support is on */
    //
    // var vb_checkbox = jQuery('input#cross_domain_support');
    // var la_checkbox = jQuery('input#enhanced_link_attribution');
    //
    // vb_checkbox.click (function () {
    //
    //   if (vb_checkbox.is(':checked')) {
    //
    //     la_checkbox.prop('checked', true);
    //     la_checkbox.prop('readonly', true);
    //
    //   }
    //   else {
    //
    //     la_checkbox.prop('readonly', false);
    //
    //   }
    //
    // });
    //
    // la_checkbox.click (function() {
    //
    //   if (vb_checkbox.is(':checked')) {
    //     alert ('Enhanced Link Attribution cannot be disabled when Vertical Booking support is turned on');
    //     return false;
    //   }
    //
    // });

    </script>
    
    <?php

  }

  function wpan_display_debug ( $args ) {

    wpan_display_checkbox_input ( $args );

  }

?>