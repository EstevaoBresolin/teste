<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @bukStyles
    @bukScripts
</head>
<body>
    <header>
        <div class="header">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" id="Bold" viewBox="0 0 24 24" width="24" height="24"><path d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm8.941,11H17.463a18.368,18.368,0,0,0-2.289-7.411A9.013,9.013,0,0,1,20.941,11ZM9.685,14h4.63A16.946,16.946,0,0,1,12,19.9,16.938,16.938,0,0,1,9.685,14Zm-.132-3A16.246,16.246,0,0,1,12,4.1,16.241,16.241,0,0,1,14.447,11ZM8.826,3.589A18.368,18.368,0,0,0,6.537,11H3.059A9.013,9.013,0,0,1,8.826,3.589ZM3.232,14H6.641a18.906,18.906,0,0,0,2.185,6.411A9.021,9.021,0,0,1,3.232,14Zm11.942,6.411A18.884,18.884,0,0,0,17.359,14h3.409A9.021,9.021,0,0,1,15.174,20.411Z"/></svg>
                <span class="ml-3"><i class="fa fa-envelope"></i> Teste Site</span>
            </div>
                
            <div>
                <span><i class="fa fa-phone"></i> +55 123 456 789</span>
                <span class="ml-3"><i class="fa fa-envelope"></i> email@exemplo.com</span>
            </div>

            <div class="redes">
                    <a href="#"><i class=" fa fa-facebook"></i> Facebook</a>
                    <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                    <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
                    <a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a>
            </div>

        </div>
    
       
    </div>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Games</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('jogos') }}">jogos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        </nav>
    </header>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<footer class="bg-dark text-white pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>Sobre Nós</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel dolor sit amet neque euismod euismod non quis metus.</p>
                </div>
                <div class="col-md-3">
                    <h5>Links Úteis</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Home</a></li>
                        <li><a href="#" class="text-white">Serviços</a></li>
                        <li><a href="#" class="text-white">Contato</a></li>
                        <li><a href="#" class="text-white">Sobre Nós</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Contato</h5>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-map-marker"></i> Rua Exemplo, 123, Cidade, País</li>
                        <li><i class="fa fa-phone"></i> +55 123 456 789</li>
                        <li><i class="fa fa-envelope"></i> email@exemplo.com</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Redes Sociais</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white"><i class="fa fa-facebook"></i> Facebook</a></li>
                        <li><a href="#" class="text-white"><i class="fa fa-twitter"></i> Twitter</a></li>
                        <li><a href="#" class="text-white"><i class="fa fa-instagram"></i> Instagram</a></li>
                        <li><a href="#" class="text-white"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <p>&copy; 2024 Your Company. Todos os direitos reservados.</p>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>

<style>

    header{
        position: fixed;
        width: 100%;
        z-index: 2;
    }
    .header{

        display: flex;
        justify-content: space-between;
        padding: 1rem;
        background-color: white;

    }
    footer{

        bottom: 0;
        width: 100%;

    }
    .top-header {
            background-color: #f8f9fa;
            padding: 10px 0;
        }
        .top-header .contact-info {
            font-size: 14px;
        }
        .top-header .social-links a {
            color: #333;
            margin: 0 10px;
            text-decoration: none;
        }

        a{
            text-decoration:none;
            color:black;
        }
        .redes{
            display:flex;
            gap:1rem;
        }
</style>