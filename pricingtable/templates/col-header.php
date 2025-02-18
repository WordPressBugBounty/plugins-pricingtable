<?php

/*
* @Author 		pickplugins
* Copyright: 	2015 pickplugins
*/

if (! defined('ABSPATH')) exit;  // if direct access	

if (empty($pricingtable_cell_header_text[$j])) {
	$pricingtable_cell_header_text[$j] = '<span class="pt-cell-blank normal">&nbsp;</span>';
}



?><div style=" background-color:<?php if (isset($pricingtable_cell_header_bg_color[$j])) echo esc_attr($pricingtable_cell_header_bg_color[$j]);  ?>;color: <?php if (isset($pricingtable_cell_header_font_color[$j])) echo esc_attr($pricingtable_cell_header_font_color[$j]); ?>" class="column-item column-item-header">
	<span style="font-size:<?php if (isset($pricingtable_cell_header_text_font_size[$j])) echo esc_attr($pricingtable_cell_header_text_font_size[$j]);  ?>;" class="pricingtable-header-name"><?php if (isset($pricingtable_cell_header_text[$j])) echo esc_attr($pricingtable_cell_header_text[$j]);  ?></span>
	<?php
	if (!empty($pricingtable_cell_header_description[$j])) {
	?>
		<span class='pt-hd'><?php echo wp_kses_post($pricingtable_cell_header_description[$j]); ?></span>
	<?php
	}
	?>
</div>