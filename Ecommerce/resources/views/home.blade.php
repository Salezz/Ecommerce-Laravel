<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/brands.min.css" integrity="sha512-bY7ts/i4iyl/je0MhtqKjEjoVa/duy8ImP9r1c/dgAQMIyNyl0iBjV7smhJIn+Arof7hPwMVoib9ndK+zPiBVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MyShop - Ecommerce</title>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
        <a href="#" class="navbar-brand">MyShop</a>
        <div class="colappse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link" href="#">Home</a>
                <a class="nav-link" href="#">Categorias</a>
                <a class="nav-link" href="#">Cadastrar</a>
            </div>
        </div>
        <a href="#" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
    </nav> 
    <div class="container">
        <div class="row">
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto1.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 1</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto2.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 2</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto3.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 3</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto4.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 4</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto5.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 5</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto6.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 6</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>