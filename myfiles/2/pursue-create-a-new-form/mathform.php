<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<title>Form</title>
</head>
<body>
<div class="container">

<!-- Review chapter 2 - Pursue - mathform.html -->

<form action="handle_form.php" method="post">
<fieldset><legend>Beregn din løn</legend>
<p><label>Name: <input type="text" name="name" size="20" maxlength="40"></label></p>
<p><label>Email Address: <input type="email" name="email" size="40" maxlength="60"></label></p>
<p><label for="gender">Gender: </label><input type="radio" name="gender" value="M"> Male <input type="radio" name="gender" value="F"></p>
<p><label>Age:
<select name="age">
	<option value="0-30">Under 30</option>	
	<option value="30-60">Between 30-60</option>	
	<option value="60+">Over 60</option>	
</select></label></p>
<p><label>Comments: <textarea name="comments" rows="3" cols="40"></textarea></label></p>
</fieldset>
<p align="center"><input type="submit" name="submit" value="Submit My information"></p>
</form>

<form>
  <div class="form-group">
    <label for="formGroupExampleInput">Indkomst pr. måned.</label>
    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Skriv beløb">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Månedsfradrag</label>
    <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Skriv beløb">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Trækprocent</label>
    <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Skriv procent">
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
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