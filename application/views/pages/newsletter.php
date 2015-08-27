<div class="content">
	<h1>Los Algodones Tourism Directory website will be launching soon!</h1>
	<div class="block">
		<div class="text">
		<p>With LosAlgodones.Co you will have all the information about the best services in Los Algodones and surrounded areas you can possibly need as a tourists, wether you are first time visitor or an expert tourist you can always find useful information to make this next visit the best one ever</p>
		</div>
		<div class="newsletter">
			<h2>Sign up below for news &amp; updates on launch</h2>
			<?= form_open('newsletter/send') ?>
				<?= form_input('name', '', 'placeholder="Full Name"') ?>
				<?= form_input('email', '', 'placeholder="Email"') ?>
				<?= form_submit('submit', 'Subscribe', 'class="submit"'); ?>
			<?= form_close() ?>
			
			<?= validation_errors('<p class="error">'); ?>
		</div>
	</div>
</div>

<? if(isset($msgAlert)): ?>
	<h3><?= $msgAlert; ?></h3>
<? endif; ?>