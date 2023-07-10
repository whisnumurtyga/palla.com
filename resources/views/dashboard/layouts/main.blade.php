<!doctype html>
<html lang="en">
<head>
<title>Palla - Dashboard | Solution for Warehousing </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<!-- Custom styles for this template -->
<link href="/CSS/dashboard.css" rel="stylesheet">

{{-- Trix Editor --}}
<link rel="stylesheet" type="text/css" href="/css/trix.css">
<script type="text/javascript" src="/js/trix.js"></script>

<style>
    trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
    }
</style>

</head>

<body>

@include('dashboard/layouts/header')

<div class="container-fluid">
<div class="row">

    @include('dashboard/layouts/sidebar')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('container')
    </main>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="/js/dashboard.js"></script>
@include('sweetalert::alert')

</body>
</html>
