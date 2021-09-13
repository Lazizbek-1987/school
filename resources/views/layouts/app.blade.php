<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid bg-light" style="min-height: 500px;" >
    <div class="row">
        <div class="col mb-3 text-center">
            <nav class="navbar navbar-dark bg-info" style="height: 4rem;">
                <div class="container-fluid text-center">
                    <a class="navbar-brand text-center" href="#"><img class="text-center" src="/images/school.png" alt=""></a>
                </div>
            </nav>
        </div>
    </div>
    <div class="row justify-content-around mb-3">
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <img src="/images/news.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">So'nggi yangiliklar</h5>
                    <p class="card-text text-center">Bizning o'rta maktabimiz faoliyati haqidagi eng so'nggi yangiliklardan xabardor bo'ling.</p>
                    <a href="{{ route('news.index') }}" class="btn btn-primary">YANGILIKLAR</a>
                </div>
            </div>
        </div>

        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <img src="/images/useful.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Foydali manbalar</h5>
                    <p class="card-text text-center">Bu yerda siz bilimingizni oshirish uchun foydali manbalar bilan tanishishingiz mumkin.</p>
                    <a href="#" class="btn btn-primary">FOYDALI MANBALAR</a>
                </div>
            </div>
        </div>

        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <img src="/images/contact.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Biz bilan bog'laning</h5>
                    <p class="card-text text-center">Buz bilan bog'laning va sizni qiziqtirgan savollaringizni yozib qoldiring.</p>
                    <a href="#" class="btn btn-primary">BIZ BILAN BOG'LANING</a>
                </div>
            </div>
        </div>
    </div>
<div class="row min">

</div>
    @yield('content')

    <div class="row mt-5">
        <div class="col bg-dark" style="height: 5rem;">
            <h3 class="text-center text-light mt-3">FOOTER</h3>
        </div>
    </div>
</div>
</body>
</html>
