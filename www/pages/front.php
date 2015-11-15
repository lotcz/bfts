<div class="inner cover">
	<p>
		<img src="bfas.jpg" alt="Born For A Storm (album cover)" />
	</p>
	<p><?= t('Enter your voucher code to claim your own digital copy of <b>Born For A Storm</b>:') ?></p>
	
	<form method="post" action="/download" class="code-form">		
		<?=t('Code')?>:
		<input type="text" name="voucher_code" maxlength="4" class="code-input" />
		<input type="submit" class="btn btn-success" value="TiNG">
	</form>
	<div class="error-message">
		<?php echo $message ?>
	</div>
</div>