@extends('layouts.app')

@section('content')
<div class="container">
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
                        <div class="col-12 mt-5">
                          <div class="col-12 mb-5">
                            <div class="card h-100">
                              <img src="https://s2.glbimg.com/FDugWbYL26sM61TXgYr6dxX7mg0=/620x350/e.glbimg.com/og/ed/f/original/2019/07/19/20170721margaret_hamilton.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Conheça a história de Margaret Hamilton, a programadora que salvou a missão à Lua</h5>
                                <p class="card-text">Três minutos antes da missão Apollo 11 pousar na Lua, há 50 anos, o sistema de voo emitiu um alerta de emergência no qual avisava que o software estava sobrecarregado e não poderia completar todas as tarefas.</p>
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
                        </div>
                        <div class="col-12 mb-5">
                          <div class="card h-100">
                            <img src="https://img.olhardigital.com.br/wp-content/uploads/2020/09/20200914102221.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Microsoft recupera data center que estava embaixo d’água há dois anos</h5>
                              <p class="card-text">A Microsoft recuperou um data center que estava submerso há dois anos no fundo do oceano na costa de Orkney, na Escócia. O equipamento, desenvolvido para utilizar a baixa temperatura das águas profundas como sistema de refrigeração, foi removido para que sua eficiência energética pudesse ser testada.</p>
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
                              <p class="card-text">Está começando agora a sua carreira como programador? Ou então nem começou mas precisa de um “empurrãozinho” para dar o ponto de partida? Então da uma olhada nessas dicas que farão toda a diferença para você trilhar a sua jornada!</p>
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
@endsection
