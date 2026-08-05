@extends('layouts.app')

@section('title', 'Hunter x Hunter')

@section('content')

<!-- ==================== Intro Animada ==================== -->
<div id="splash-screen">
    <div class="splash-content">
        <img src="{{ asset('assets/images/hunter-x-hunter-logo.png') }}"
            class="logo-intro hxh-logo"
            alt="Logo Hunter x Hunter">

        <img src="{{ asset('assets/icons/hxh-512x512.png') }}"
            class="logo-intro hunter-logo"
            alt="Logo Caçadores">
    </div>
</div>

<!-- ================== Menu ================== -->
@include('components.menu')

<!-- ================= Conteúdo Principal ================== -->
<main class="main-content">

    <!-- ======================== HERO ======================== -->
    <section class="hero reveal">

        <div class="language-switch">
            <button data-lang="pt" onclick="setLang('pt')">PT</button>
            <button data-lang="en" onclick="setLang('en')">EN</button>
        </div>

        <div class="container-fluid hero-container">
            <div class="row align-items-center g-0">

                <!-- Imagem -->
                <div class="col-12 col-md-6 hero-image-col">
                    <div class="hero-image">
                        <img src="{{ asset('assets/images/imagem_principal.jpg') }}"
                            alt="Imagem Principal">
                    </div>
                </div>

                <!-- Texto -->
                <div class="col-12 col-md-6 hero-info-col">
                    <div class="hero-info">

                        <div class="logo-text">

                            <img class="logo-HxH"
                                src="{{ asset('assets/images/logo-preto-e-branco.png') }}"
                                alt="Hunter x Hunter">

                            <p data-i18n-html="hero.subtitle">
                                Entre luz e sombra, eu avanço.
                                <br>

                                Inspirado por
                                <a class="togashi-link"
                                    href="https://pt.wikipedia.org/wiki/Yoshihiro_Togashi"
                                    target="_blank">

                                    Yoshihiro Togashi

                                </a>.
                            </p>

                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- ================= Vídeo ================= -->

    <section class="video-section reveal" id="videoSection">

        <div class="video-preview">

            <div class="video-overlay">
                <div class="play-button"></div>
            </div>

            <video class="hero-video" autoplay muted loop playsinline>

                <source
                    src="{{ asset('assets/videos/Hunter x Hunter Trailer.mp4') }}"
                    type="video/mp4">

            </video>

        </div>

    </section>

    <!-- Modal -->

    <div class="video-modal">

        <button class="video-close"></button>

        <video class="modal-video" controls playsinline>

            <source
                src="{{ asset('assets/videos/Hunter x Hunter Trailer.mp4') }}"
                type="video/mp4">

        </video>

    </div>

    <!-- ================= Introdução ================= -->

    <section class="introduction-section reveal" id="introduction">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12">

                    <h2 class="introduction-title"
                        data-i18n="intro.title">

                        Introdução

                    </h2>

                    <p class="introduction-text"
                        data-i18n-html="intro.text">

                        Em um mundo vasto e perigoso, existem pessoas que dedicam suas vidas
                        a explorar o desconhecido.

                        Elas enfrentam feras lendárias, desvendam mistérios proibidos
                        e caçam tesouros que poucos ousariam procurar.

                        Essas pessoas são conhecidas como
                        <span class="hunter">Hunters</span>.

                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- Rodapé -->

    @include('components.footer')

</main>

@endsection