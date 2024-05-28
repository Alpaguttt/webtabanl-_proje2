<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kayıt Ol</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center">Kayıt Ol</h2>
      <form action="database.php" method="post">
        <div class="form-group">
          <label for="firstName">İsim:</label>
          <input type="text" class="form-control" id="firstName" name="firstName" placeholder="İsminizi girin">
        </div>
        <div class="form-group">
          <label for="lastName">Soyisim:</label>
          <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Soyisminizi girin">
        </div>
        <div class="form-group">
          <label for="birthDate">Doğum Tarihi:</label>
          <input type="date" class="form-control" id="birthDate" name="birthdate" >
        </div>
        <div class="form-group">
          <label for="email">E-posta:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="E-postanızı girin">
        </div>
        <div class="form-group">
          <label for="password">Şifre:</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Şifrenizi girin">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Kayıt Ol</button>
      </form>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
