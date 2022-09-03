<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row my-2">
<div class="col-lg-12 d-flex justify-content-between align-items-center mx-auto">
<div>
<h2 class="text-primary">@yield('heading')</h2>
</div>
<div>
<a href="@yield('link')" class="btn btn-primary roundedpill">@yield('link_text')</a>
<a href="/" class="btn btn-success rounded-pill">Principal</a>
</div>
</div>
</div>
<hr class="my-2">
@yield('content')
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitterbootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
</body>
</html>