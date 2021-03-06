<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog Rockbuzz</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg static-top" style="background-color: #265b7e; font-size: 0.9rem; ">
    <div class="container">
        <a class="navbar-brand" href="#" style="color: white">
            <img src="https://res.cloudinary.com/programathor/image/upload/c_fit,h_200,w_200/v1633684929/vk4kouzkxw7uitotc6bg.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Blog Rockbuzz</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @auth
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link" style="color: white">Admin</a>
                    </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link" style="color: white">Login</a>
                        </li>

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link" style="color: white">Cadastro</a>
                            </li>
                        @endif
                        @endauth
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@include('includes.search')</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col-12 mb-5 mt-5">
                          <div class="card h-100">
                            <img src="https://s2.glbimg.com/FDugWbYL26sM61TXgYr6dxX7mg0=/620x350/e.glbimg.com/og/ed/f/original/2019/07/19/20170721margaret_hamilton.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Conhe??a a hist??ria de Margaret Hamilton, a programadora que salvou a miss??o ?? Lua</h5>
                              <p class="card-text">Tr??s minutos antes da miss??o Apollo 11 pousar na Lua, h?? 50 anos, o sistema de voo emitiu um alerta de emerg??ncia no qual avisava que o software estava sobrecarregado e n??o poderia completar todas as tarefas.</p>
                              <button type="button" class="btn btn-primary">Ler mais <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="24px" fill="white"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></button>
                            </div>
                            <div class="card-footer">
                              <small>
                                <svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V10h16v11zm0-13H4V5h16v3z"/></svg> 
                                  Last updated 3 mins ago
                                </small>
                                  <small>
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="17px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M3,21l3.75,0L17.81,9.94l-3.75-3.75L3,17.25L3,21z M5,18.08l9.06-9.06l0.92,0.92L5.92,19L5,19L5,18.08z"/></g><g><path d="M18.37,3.29c-0.39-0.39-1.02-0.39-1.41,0l-1.83,1.83l3.75,3.75l1.83-1.83c0.39-0.39,0.39-1.02,0-1.41L18.37,3.29z"/></g></g></g></svg>
                                    Margaret Hamilton 
                                </small>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 mb-5">
                          <div class="card h-100">
                            <img src="https://img.olhardigital.com.br/wp-content/uploads/2020/09/20200914102221.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Microsoft recupera data center que estava embaixo d?????gua h?? dois anos</h5>
                              <p class="card-text">A Microsoft recuperou um data center que estava submerso h?? dois anos no fundo do oceano na costa de Orkney, na Esc??cia. O equipamento, desenvolvido para utilizar a baixa temperatura das ??guas profundas como sistema de refrigera????o, foi removido para que sua efici??ncia energ??tica pudesse ser testada.</p>
                              <button type="button" class="btn btn-primary">Ler mais <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="24px" fill="white"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></button>
                            </div>
                            <div class="card-footer">
                              <small>
                                <svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V10h16v11zm0-13H4V5h16v3z"/></svg> 
                                  Last updated 1 day ago           
                                </small>
                                  <small>
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="17px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M3,21l3.75,0L17.81,9.94l-3.75-3.75L3,17.25L3,21z M5,18.08l9.06-9.06l0.92,0.92L5.92,19L5,19L5,18.08z"/></g><g><path d="M18.37,3.29c-0.39-0.39-1.02-0.39-1.41,0l-1.83,1.83l3.75,3.75l1.83-1.83c0.39-0.39,0.39-1.02,0-1.41L18.37,3.29z"/></g></g></g></svg>
                                    Allan Turing
                                </small>
                            </div>
                          </div>
                        </div>
                        <div class="col mb-5">
                          <div class="card h-100">
                            <img src="https://www.hostmidia.com.br/img/blog/upload/xg-como-aprender-a-programar.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">5 passos para aprender a programar</h5>
                              <p class="card-text">Est?? come??ando agora a sua carreira como programador? Ou ent??o nem come??ou mas precisa de um ???empurr??ozinho??? para dar o ponto de partida? Ent??o da uma olhada nessas dicas que far??o toda a diferen??a para voc?? trilhar a sua jornada!</p>
                              <button type="button" class="btn btn-primary">Ler mais <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="24px" fill="white"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></button>
                            </div>
                            <div class="card-footer">
                              <small>
                                <svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V10h16v11zm0-13H4V5h16v3z"/></svg> 
                                Last updated 5 days ago
                            </small>
                                <small>
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="17px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M3,21l3.75,0L17.81,9.94l-3.75-3.75L3,17.25L3,21z M5,18.08l9.06-9.06l0.92,0.92L5.92,19L5,19L5,18.08z"/></g><g><path d="M18.37,3.29c-0.39-0.39-1.02-0.39-1.41,0l-1.83,1.83l3.75,3.75l1.83-1.83c0.39-0.39,0.39-1.02,0-1.41L18.37,3.29z"/></g></g></g></svg>
                                    Ada Lovelance
                                </small>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

      
    <div class="row">
        <div class="col-lg-12">
            <div id="app">
                <posts></posts>
            </div>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" defer></script>
<script src="{{ asset('js/app.js') }}" defer></script>

</body>

</html>

