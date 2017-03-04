<?php if(!isset($settings->exclude_wrapper)) : ?>
<div class="fl-icon-wrap">
<?php endif; ?>
	<span class="fl-icon">
		<?php if(!empty($settings->link)) : ?>
		<a href="<?php echo $settings->link; ?>" target="<?php echo $settings->link_target; ?>" <?php echo ($settings->icon_label != ''? "aria-label=\"$settings->icon_label\"":'') ?>>
		<?php endif; ?>

        <?php if( empty( $settings->link ) && !empty( $settings->icon_label ) ): ?>
            <i class="<?php echo $settings->icon; ?>" aria-hidden="true" title="<?php echo $settings->icon_label ?>"></i>
            <span class='fl-sr-only'><?php echo $settings->icon_label ?></span>
        <?php else: ?>
            <i class="<?php echo $settings->icon; ?>" <?php echo ($settings->icon_label != ''? 'aria-hidden="true"':'') ?>></i>
        <?php endif; ?>

		<?php if(!empty($settings->link)) : ?></a><?php endif; ?>
	</span>

	<?php if(!empty($settings->text)) : ?>
	<div class="fl-icon-text">
		<?php if(!empty($settings->link)) : ?>
		<a href="<?php echo $settings->link; ?>" target="<?php echo $settings->link_target; ?>">
		<?php endif; ?>
		<?php echo $settings->text; ?>
		<?php if(!empty($settings->link)) : ?></a><?php endif; ?>
	</div>
	<?php endif; ?>
<?php if(!isset($settings->exclude_wrapper)) : ?>
</div>
<?php endif; ?>
