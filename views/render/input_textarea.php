<?php //phpcs:ignore WordPress.Files.FileName.NotHyphenatedLowercase
/**
 * Input text
 *
 * @category   Input text
 * @package    Mailtarget Form
 */

$setting = $row['setting'];

?>
<div class="mt-c-form__wrap">
	<div div class="mt-c-form__textarea">
		<?php if ( $setting['showTitle'] ) { ?>
			<label class="mt-o-label" v-if="setting.showTitle"><?php echo $setting['title']; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></label>
		<?php } ?>
		<textarea class="mt-o-textarea"
				name="mtin__<?php echo esc_html( $setting['name'] ); ?>"
			<?php
			if ( $setting['required'] ) {
				?>
				required="required" <?php } ?>
				placeholder="<?php echo esc_html( $setting['description'] ); ?>"></textarea>
	</div>
</div>
