<div class="contact-page">
	<div class="contact-page-inner">
		<hr id="hr1">
		<div class="contact-info">
			<p>
			<h1><b>—IF—</b><br></h1>
			31 bis, quai Fulchiron - 69005 LYON<br>
			T. 04 78 06 50 58 — F. 04 78 06 52 31<br>
			contact@ifcontemporain.com<br>
			Laurence / 06 15 05 33 22 — Catherine / 06 07 67 06 59<br>
			</p>
		</div>
		<hr id="hr2">

		<?php
		the_content();
		?>
		<!--
		<div class="contact-form">
			<form>
				<div class="form-group">

					<label for="inputEmail"><b>-</b> Votre adresse mail <b>-</b></label>
					<input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="">
				</div>

				<div class="form-group">
					<label for="inputTextarea"><b>-</b> Votre message <b>-</b></label>
					<textarea class="form-control" id="inputTextarea" rows="3"></textarea>
				</div>

				<button type="submit" class="btn btn-primary">Envoyer</button>

			</form>
		</div>
		-->
		<hr id="hr3">

		<p><b>-</b> Plan d'accès <b>-</b></p>

		<div class="map-container">
			<a href="https://www.google.fr/maps/place/31B+Quai+Fulchiron,+69005+Lyon/@45.7538438,4.8247249,16.13z/data=!4m8!1m2!2m1!1s31bis+Quai+Fulchiron,+69005+Lyon!3m4!1s0x47f4ebb23d25b15d:0x9d0d47f73970490d!8m2!3d45.7535647!4d4.8231288">
				<div id="map" style="background:
					url('<?php echo get_template_directory_uri()."/assets/images/plan.png"; ?>') no-repeat">
				</div>
			</a>
		</div>

	</div>
</div>