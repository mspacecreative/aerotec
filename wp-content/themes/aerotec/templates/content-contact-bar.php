<div class="outer-container">
	<div class="contact-bar">
		<ul>
			<?php if ( get_field('linkedin', 'options') ): ?>
			<li><a href="<?php the_field('linkedin', 'options'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
			<?php endif; ?>
			<?php if ( get_field('twitter', 'options') ): ?>
			<li><a href="<?php the_field('twitter', 'options'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<?php endif; ?>
			<?php if ( get_field('facebook', 'options') ): ?>
			<li><a href="<?php the_field('facebook', 'options'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<?php endif; ?>
		</ul>
		<?php if ( get_field('phone_number', 'options') ): ?>
		<p class="phone-number"><a class="click-number" href="tel:+1<?php the_field('phone_number', 'options'); ?>"><span id="phoneNumber"><?php the_field('phone_number', 'options'); ?></span></a></p>
		<?php endif; ?>
		<ul class="cta-buttons">
			<?php if ( get_field('email_button', 'options') ): ?>
			<li>
				<a href="mailto:<?php the_field('email_button', 'options'); ?>"><?php echo esc_html_e('Email Us'); ?></a>
			</li>
			<?php endif; ?>
			<?php if ( get_field('quote_button', 'options') ): ?>
			<li>
				<a href="<?php the_field('quote_button', 'options'); ?>"><?php echo esc_html_e('Request a quote'); ?></a>
			</li>
			<?php endif; ?>
		</ul>
	</div>
</div>