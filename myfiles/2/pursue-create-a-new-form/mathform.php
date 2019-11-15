<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<title>Form</title>
</head>
<body class="bg-light">
	<div class="container">

		<!-- Review chapter 2 - Pursue - mathform.html -->

		<form action="form_handler.php" method="post">

			<fieldset><legend>Beregn din løn udbetaling</legend>

				<form action="handle_form.php" method="post">
					<!--
					<div class="form-group">
						<label for="indkomst_type">Example select</label>
						<select class="form-control" name="indkomst_type" id="indkomst_type">
							<option value="loen">Løn</option>
							<option value="pension">Pension</option>
							<option value="dagpenge_akasse_kontanthjaelp">Dagpenge (A-kasse) eller Kontanthjælp</option>
							<option value="su">SU</option>
							<option value="efterloen">Efterløn</option>
						</select>
					</div>
					-->

					<div class="form-group row">
						<label for="loen_foer_skat" class="col-sm-2 col-form-label">Indkomst pr. måned</label>
						<div class="col-sm-10">
							<input type="number" id="loen_foer_skat" name="loen_foer_skat" class="form-control form-control-lg" placeholder="Skriv beløb">
						</div>
					</div>
					<div class="form-group row">
						<label for="fradrag_pr_md" class="col-sm-2 col-form-label">Månedsfradrag</label>
						<div class="col-sm-10">
							<input type="number" id="fradrag_pr_md" name="fradrag_pr_md" class="form-control form-control-lg" placeholder="skriv beløb">
						</div>
					</div>
					<div class="form-group row">
						<label for="traekprocent" class="col-sm-2 col-form-label">Trækprocent</label>
						<div class="col-sm-10">
							<input type="number" id="traekprocent" name="traekprocent" class="form-control form-control-lg" placeholder="skiv beløb">
						</div>
					</div>
					<div class="form-group row">
						<label for="atp_pr_md" class="col-sm-2 col-form-label">ATP pr. md.</label>
						<div class="col-sm-10">
							<input type="number" id="atp_pr_md" name="atp_pr_md" class="form-control form-control-lg" placeholder="Skriv beløb">
						</div>
					</div>
				</fieldset>
				<button type="submit" name="submit" class="btn btn-primary">Beregn udbetaling</button>
			</form>

		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="bootstrap-4.3.1-dist/js/jquery-3.3.1.slim.min.js"><\/script>')</script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="bootstrap-4.3.1-dist/js/popper.min.js"><\/script>')</script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"><\/script>')</script>
	</body>
	</html>