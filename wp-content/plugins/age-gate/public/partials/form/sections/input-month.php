<label class="age-gate-label" for="age-gate-m"><?php echo ($this->messages->labels->month) ? esc_html(strip_tags($this->messages->labels->month)) : __('Month', 'age-gate'); ?></label>
<input type="text" name="age_gate[m]" id="age-gate-m" class="age-gate-input" value="<?php echo(isset($age['m']) ? esc_html($age['m']) : '') ?>"  tabindex="1" placeholder="<?php _e('MM', 'age-gate'); ?>" required minlength="1" maxlength="2" pattern="[0-9]*" inputmode="numeric" autocomplete="off"<?php echo(isset($age['atts']['m']) ? esc_html($age['atts']['m']) : '') ?>>
