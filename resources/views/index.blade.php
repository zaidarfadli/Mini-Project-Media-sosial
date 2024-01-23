<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    :root {
        --main_color: #EEEEEE;
        --main_color-2: black;
        --main_color-3: #3F979B;
        --main_color-4: #3F979B;
        --text-color: #D9D9D9;
    }

    * {
        /* border: 1px solid white; */
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    ::-webkit-scrollbar {
        width: 0px;
    }

    ::-webkit-scrollbar-thumb {
        background: black;
    }

    .sidebar {
        background-color: var(--main_color-2);
        position: fixed;
        z-index: 100;
        overflow: auto;
        overflow-x: hidden;
        height: 100%;
        width: 16rem;
        /* background: var(--main_color); */
        box-shadow: 1px 2px 1px rgba(256, 256, 256, 0.3);
        transition: all 0.5s ease;
    }

    .sidebar .detail_logo {
        height: 80px;
        display: flex;
        align-items: center;
    }

    .sidebar .detail_logo #usernameProfileAuthor {
        margin-top: 2px;
        font-size: 0.9rem;
        color: white;
        font-weight: 500;
    }

    .sidebar .detail_logo #namaProfileAuthor {
        font-size: 0.6rem;
        font-family: 'Poppins';
        font-weight: 300;
        color: var(--main_color);
    }

    .sidebar .detail_logo img {
        width: 37px;
        aspect-ratio: 1/1;
        padding: 2px;
        border-radius: 20px;
    }

    .sidebar .detail_logo a {
        text-decoration: none;
    }

    .sidebar .detail_logo i {
        font-size: 28px;
        font-weight: 500;
        color: white;
        min-width: 60px;
        text-align: center
    }

    .detail_logo .rowUsername {
        margin: 0px 0px 0px -15px;
    }

    .konten-home .card {
        max-width: 30rem;
        color: white;
        background-color: black;
        border: 1.8px solid rgba(220, 220, 220, 0.3);
        border-radius: 8px;
        padding: 0.7rem 1.3rem 1.2rem 1.2rem;
        margin-bottom: -1.3rem;
        transition: all 0.5s ease;
    }

    .card .card-text {
        font-size: 0.8rem;
        color: var(--text-color);
        margin-top: -0.7rem;
    }

    .rowUsername span {
        margin-top: -2px;
    }

    .sidebar .link-navigasi {
        margin-top: -8px;
    }

    .sidebar .link-navigasi .links_name {
        margin-top: 42px;
    }

    .sidebar .link-navigasi .sidebarActive i {
        color: #52D3D8;
    }

    .sidebar .link-navigasi .sidebarActive .links_name {
        color: #52D3D8;
        font-weight: 600;
        letter-spacing: 1;
    }

    .sidebar .link-navigasi li {
        position: relative;
        list-style: none;
        height: 45px;
    }

    .sidebar .link-navigasi li a {
        height: 100%;
        width: 10%;
        margin-left: -32px;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.4s ease;
    }

    .sidebar .link-navigasi li p {
        height: 100%;
        width: 10%;
        margin-top: 45px;
        transition: all 0.4s ease;
    }

    .sidebar .link-navigasi li i {
        min-width: 60px;
        text-align: center;
        font-size: 14px;
        color: var(--main_color-4);
    }

    .sidebar .link-navigasi li .links_name {
        color: white;
        font-size: 13px;
        font-weight: 400;
        white-space: nowrap;
    }

    .sidebar .link-navigasi .log_out {
        margin: 15px 0px 0px -32px;
        width: 100%;
    }

    .sidebar .link-navigasi .log_out button {
        border: unset;
        background: unset;
    }

    .sidebar .link-navigasi .log_out p {
        margin-top: -2px;
        color: white;
    }

    .sidebar .link-navigasi .SidebarBottomText {
        margin-left: -1rem;
        margin-right: 1rem;
        position: absolute;
        bottom: 10;
        font-size: 0.7rem;
    }

    .sidebar .link-navigasi .SidebarBottomText p {
        font-size: 0.2rem;
    }

    .logoHomepage {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .logoHomepage img {
        padding-top: 1rem;
        width: 2rem;
    }

    .navFilter {
        margin-left: -15rem;
    }

    .home-section {
        position: relative;
        width: calc(100% - 240px);
        left: 240px;
        top: 7rem;
        transition: all 0.5s ease;
    }

    .nav-section {
        position: relative;
        width: calc(100% - 60px);
        left: 280px;
        transition: all 0.5s ease;
    }

    .logoHomepage {
        margin-left: -15rem;
    }

    .sidebar.active~.home-section {
        width: calc(100% - 60px);
        left: 60px;
    }

    .home-section nav {
        display: flex;
        justify-content: space-between;
        height: 80px;
        background: #fff;
        display: flex;
        align-items: center;
        position: fixed;
        width: calc(100% - 240px);
        left: 240px;
        padding: 0 20px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        transition: all 0.5s ease;
    }

    .sidebar.active~.home-section nav {
        left: 60px;
        width: calc(100% - 60px);
    }

    .home-section .konten-home {
        position: relative;
        margin: 0rem 2rem 0rem 2rem;
    }

    .konten-home h3 {
        font-weight: 800;
        margin-bottom: 20px;
    }

    .navigasi {
        margin-right: 10rem;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .navigasi .navigasi-item a {
        font-size: 0.7rem;
        text-align: center;
        margin-right: 100px;
        text-decoration: none;
        color: white;
    }

    .navigasi-item .active p {
        font-weight: 600;
        letter-spacing: 1;
        padding-bottom: 5px;
        border-bottom: 2px solid var(--main_color-3);
        transition: all ease 0.3s;
    }

    .navigasi {
        font-family: 'DM Sans', sans-serif;
        list-style-type: none;
        display: flex;
        justify-content: center;
    }

    .navigasi a {
        color: black;
    }

    .profileAuthor {
        margin-left: -17px;
        display: flex;
    }

    .profileAuthor img {
        width: 60px;
        height: 60px;
        aspect-ratio: 1/1;
        margin-left: -10px;
        padding: 10px;
        border-radius: 50%;
        margin-top: -1rem;
    }

    .profileAuthor #usernamePosting {
        margin-top: -3px;
        font-size: 0.7rem;
        font-weight: 700;
        color: var(--main_color);
    }

    .profileAuthor #timePosting {
        color: var(--main_color);
        margin-top: -18px;
        font-size: 0.7rem;
    }

    .profileAuthor span {
        margin: 10px 0px 0px 5px;
    }

    .saveToBookmark {
        float: right;
        margin-right: -1rem;
        font-size: 1.3rem;
        color: var(--main_color);
        margin-top: -3rem;
        background-color: unset;
        border: unset;
    }

    .fiturPostingan p {
        margin: -1px 0px 0px 8px;
        color: var(--text-color);
        font-size: 0.9rem;
    }

    .fiturPostingan i {
        margin-left: 45px;
        color: var(--main_color);
        font-size: 1.2rem;
    }

    .fiturPostingan button {
        background-color: black;
        border: unset;
        width: 10%;
    }

    .home-section #SuggestFollowing #header-suggested {
        font-size: 1rem;
        font-family: 'Poppins';
        font-weight: 600;
        color: white;
    }

    .home-section #SuggestFollowing #child-header-suggested {
        font-size: 0.6rem;
        font-family: 'Poppins';
        font-weight: 600;
        color: grey;
        margin-top: 0.2rem;
    }

    @media (max-width: 991px) {

        .home-section #SuggestFollowing {
            display: none
        }

        .sidebar {
            width: 60px;
        }

        .rowUsername {
            display: none;
        }

        .link-navigasi p {
            display: none;
        }

        .sidebar.active {
            width: 220px;
        }

        .home-section,
        .nav-section {
            width: calc(100% - 60px);
            left: 60px;
        }

        .nav-section {
            position: relative;
            width: calc(100% - 60px);
            left: 80px;
            transition: all 0.5s ease;
        }

        .logoHomepage {
            margin-left: 0rem;
        }

        .navFilter {
            margin-left: 0rem;
        }

        .sidebar.active~.home-section {
            overflow: hidden;
            left: 220px;
        }

        .home-section nav {
            width: calc(100% - 60px);
            left: 60px;
        }

        .sidebar.active~.home-section nav {
            width: calc(100% - 220px);
            left: 220px;
        }
    }

    @media(width <=600px) {
        .fiturPostingan i {
            margin-right: -1.5rem;
            font-size: 1.4rem;
        }

        .fiturPostingan p {
            display: none;
        }
    }

    @media (max-width: 576px) {
        footer .row {
            margin-left: 0.5rem;
        }
    }

    @media (max-width: 560px) {
        .card {
            transform: translateX(-12%);
            width: 130%;
            transition: all 0.5s ease;
        }

        .profileAuthor .namaProfileAuthorPost p {
            font-size: 0.7rem;
        }

        .fiturPostingan i {
            margin-right: -1.5rem;
            font-size: 1.4rem;
        }

        .fiturPostingan p {
            display: none;
        }

        footer .row {
            margin-left: 0.5rem;
        }
    }

    @media(max-width: 462px) {
        .konten-home .card {
            padding: 0.6rem 1.2rem 1.2rem 1.2rem;
            transition: all 0.5s ease;
        }

        .card .card-text {
            margin-top: -1rem;
            font-size: 0.7rem;
        }

        .profileAuthor .container p {
            margin-top: -5px;
        }

        .profileAuthor img {
            width: 50px;
            height: 50px;
        }

        .fiturPostingan i {
            margin-right: -2rem;
            font-size: 1.2rem;
        }

        .fiturPostingan p {
            display: none;
        }

        .profileAuthor #usernamePosting {
            font-size: 0.7rem;
        }

        .profileAuthor #timePosting {
            font-size: 0.6rem;
        }

        .saveToBookmark {
            font-size: 1.3rem;
            transform: translateY(0.5rem);
        }
    }

    @media (max-width: 400px) {
        .card {
            transform: translateX(-12%);
            width: 150%;
            transition: all 0.5s ease;
        }

        .navigasi-item {
            width: 60%;
            font-size: 0.7rem;
        }

        .home-section nav {
            width: 100%;
            left: 70px;
        }
    }

    .sidebar .detail_logo #namaProfileAuthor,
    .suggestedFollowing,
    #timePosting,
    #usernamePosting {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card-text {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    footer {
        background-color: var(--main_color-3);
        bottom: 0;
        z-index: 101;
        position: fixed;
        width: 100%;
    }

    footer .column-text-footer {
        margin-top: 10px;
        justify-content: center;
    }

    footer #text-1 {
        padding-top: 10px;
        font-size: 1rem;
        font-weight: 600;
        color: white;
    }

    footer #text-2 {
        font-size: 0.7rem;
        font-weight: 500;
        color: white;
        margin-top: -10px;
    }

    footer .btn-login-footer {
        font-size: 0.9rem;
        margin-bottom: 24px;
        background-color: none;
        border: 1px solid white;
        margin-top: 20px;
        color: white;
        font-weight: 600;
        padding: 10px 30px 10px 30px;
        border-radius: 15px;
        margin-right: 20px;
    }

    footer .btn-login-footer:hover {
        color: white;
        box-shadow: 2px 1px 5px rgba(0, 0, 0, 0.4);
        transition: all ease 0.2s;
    }

    footer .btn-regist-footer:hover {
        box-shadow: 2px 1px 5px rgba(0, 0, 0, 0.4);
        transition: all ease 0.2s;
    }

    footer .btn-regist-footer {
        font-size: 0.9rem;
        margin-bottom: 24px;
        background-color: white;
        margin-top: 20px;
        color: black;
        font-weight: 600;
        padding: 10px 20px 10px 20px;
        border-radius: 15px;
    }

    .footer p {
        font-size: 0.6rem;
        color: grey;
        margin: 20px 20px 0px 0px;
    }

    .footer #copyright {
        margin: 20px 0px 20px 0px;
    }

    @keyframes animationBookmark {
        0% {
            transform: rotate(0deg)
        }

        30% {
            transform: rotate(-15deg)
        }

        70% {
            transform: scale(1.4);
        }

        100% {
            transform: rotate(0deg)
        }
    }

    .animationBookmark {
        animation: animationBookmark 1s ease;
    }

    @keyframes animationLikes {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.2);
        }

        100% {
            transform: scale(1);
        }
    }

    .animationLikes {
        animation: animationLikes 1s ease;
    }
</style>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Beranda</title>
    <link rel="icon" href="images/logo-medsos.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Edu+NSW+ACT+Foundation:wght@700&family=Kanit:wght@500&family=Mochiy+Pop+One&family=Montserrat:wght@200;600;800&family=Poppins:ital,wght@0,700;1,900&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>

<body style="background-color: black;">
    <div class="sidebar">
        <div class="detail_logo">
            <a href="{{ route('myProfile') }}" style="display: flex;">
                @auth
                    <i><img src="{{ asset('images/profile/' . $user->image) }}" alt="gambar postingan"></i>
                    <div class="container-fluid rowUsername">
                        <div class="row">
                            <span id="usernameProfileAuthor">{{ $user->username }}</span>
                        </div>
                        <div class="row">
                            <span id="namaProfileAuthor">{{ $user->name }}</span>
                        </div>
                    </div>
                @else
                    <i><img src="{{ asset('images/logo-medsos.png') }}" alt="gambar foto profile"></i>
                    <div class="container-fluid rowUsername">
                        <div class="row">
                            <span id="usernameProfileAuthor" style="margin-left: 0.2rem">Silahkan Login Dahulu</span>
                        </div>
                        <div class="row">
                            <span id="namaProfileAuthor" style="margin-left: 0.2rem">Ayo Login</span>
                        </div>
                    </div>
                @endauth
            </a>
        </div>
        <hr
            style="color: var(--main_color); opacity: 0.3; width: 100%; margin-top: -0px; height: 1.6px; justify-content: center;">
        <ul class="link-navigasi">
            <li class="sidebarActive">
                <a href="{{ route('home') }}">
                    <i class="fa-solid fa-house aktif"></i>
                    <p class="links_name" id="beranda">Beranda</p>
                </a>
            </li>
            <li>
                <a href="{{ route('explorePeople') }}">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <p class="links_name" id="explore">Explore</p>
                </a>
            </li>
            @auth

                <li>
                    <a href="{{ route('myNotifikasi') }}">
                        <i class="fa-solid fa-bell"></i>
                        <p class="links_name" id="notifikasi">Notifikasi</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('formPost') }}">
                        <i class="fa-solid fa-plus"></i>
                        <p class="links_name" id="posting">Posting</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('myBookmark') }}">
                        <i class="fa-solid fa-bookmark"></i>
                        <p class="links_name" id="bookmarks">Bookmarks</p>
                    </a>
                </li>
            @endauth
            @auth
                <li class="log_out">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="d-flex">
                            <i class="fa-solid fa-arrow-left"></i>
                            <p class="links_name">Log out</p>
                        </button>
                    </form>
                </li>
            @else
                <li class="login">
                    <a href="{{ route('login') }}">
                        <i class="fa-solid fa-arrow-left"></i>
                        <p class="links_name">Login</p>
                    </a>
                </li>
            @endauth

            <li class="SidebarBottomText">
                <p style="font-size: 0.48rem; width: 100%; color: grey; margin-top: 1rem;">
                    Terms of Service
                    Privacy Policy
                    Cookie Policy
                    Accessibility
                    Ads info
                    More
                    © 2024 Sosmed
                </p>
            </li>
        </ul>
    </div>
    <!-- <h1 style="transform: translateX(5rem); padding-top: 20px; margin-bottom: -0.4rem; letter-spacing: 3; color: var(--main_color-2); font-weight: 800;">Sosmed</h1> -->
    <section class="nav-section" style="z-index: 99; position: fixed; background-color: black;">
        <div class="container-fluid nav" style="background-color: black;">
            <div class="container" style="background-color: black; transform: translateX(-1rem);">
                <nav class="justify-content-center">
                    <div class="logoHomepage">
                        <img src="{{ asset('images/logo-medsos.png') }}" alt="logo homepage">
                    </div>
                    <div class="row">
                        <ul class="navigasi" style="margin-top: 10px; margin-bottom: 0;">
                            <li class="navigasi-item NavFilter">
                                <a class="navigasi-link pilihKategoriPostingan KategoriFollowers"
                                    href="{{ route('home') }}">
                                    <p>For You</p>
                                </a>
                            </li>
                            <li class="navigasi-item">
                                <a class="navigasi-link pilihKategoriPostingan KategoriFollowing"
                                    href="{{ route('home2') }}">
                                    <p>Following</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <section class="home-section" style="background-color: black;">
        <div class="container-fluid nav" style="background-color: black;">
            <div class="container-fluid container-xl">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="container container-lg">
                            @if (isset($message))
                                <p class="text-center text-light">Anda belum memfollow siapapun</p>
                            @elseif (isset($posts))
                                @foreach ($posts as $post)
                                    <a href="{{ route('seePost', ['post' => $post->id]) }}"
                                        style="text-decoration: none; color: black;">
                                        <div class="row" style="margin-bottom: 2rem;">
                                            <div class="col-12">
                                                <div class="konten-home">
                                                    <div class="row">
                                                        <div class="container-fluid">
                                                            <div class="card mx-auto">
                                                                <div class="card-body cardContent">
                                                                    <div class="profileAuthor">
                                                                        <a href="{{ route('seeProfile', ['people' => $post->user->id]) }}"
                                                                            style="display: flex; text-decoration: none;">
                                                                            <img class="imagesProfileAuthorPost"
                                                                                src="{{ asset('images/profile/' . $post->user->image) }}"
                                                                                alt="gambar profile">
                                                                            <div class="container"
                                                                                style="margin: 0rem 0rem 0rem -1.2rem;">
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <p id="UsernamePosting">
                                                                                            {{ $post->user->username }}
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <p id="timePosting">
                                                                                            {{ $post->created_at->diffForHumans() }}
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <form
                                                                        action="{{ route('addBookmark', ['post' => $post->id]) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @if ($post->isBookmarkedByUser())
                                                                            <button class="saveToBookmark"
                                                                                type="submit" name="saveToBookmark">
                                                                                <i
                                                                                    class="fa-solid fa-bookmark bookmarkPost"></i>
                                                                            </button>
                                                                        @else
                                                                            <button class="saveToBookmark"
                                                                                type="submit" name="saveToBookmark">
                                                                                <i
                                                                                    class="fa-regular fa-bookmark bookmarkPost"></i>
                                                                            </button>
                                                                        @endif
                                                                    </form>
                                                                </div>
                                                                <p class="card-text">{{ $post->content }}</p>
                                                                <img style="border-radius: 8px;"
                                                                    src="{{ $post->image }}" class="card-img-top"
                                                                    alt="Gambar Postingan">
                                                                <hr
                                                                    style="color: white; width: 100%; margin-top: 20px; height: 2px; justify-content: center;">
                                                                <div class="container fiturPostingan d-flex"
                                                                    style="margin-left: -4rem; font-size: 1rem;">
                                                                    <form
                                                                        action="{{ route('likePost', ['post' => $post->id]) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @if ($post->isLikedByUser())
                                                                            <button type="submit" class="btn-heart">
                                                                                <i class="fa-solid fa-heart"></i>
                                                                            </button>
                                                                        @else
                                                                            <button type="submit" class="btn-heart">
                                                                                <i class="fa-regular fa-heart"></i>
                                                                            </button>
                                                                        @endif
                                                                    </form>
                                                                    <p>{{ $post->likes_count }} Likes</p>
                                                                    <i class="fa-regular fa-comment"></i>
                                                                    <p>{{ $post->comments_count }} Comments</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row" style="position: fixed; max-width: 18rem; margin-left: -3rem;">
                            <div class="col-12" id="SuggestFollowing">
                                <div class="container"
                                    style="height: 50rem; width: 120%; margin-left: -2rem; border: 1px solid var(--main_color-2); border-radius: 10px;">
                                    <div class="row">
                                        <div class="col-12">
                                            <h1 id="header-suggested">
                                                Siapa yang harus diikuti
                                            </h1>
                                            <p id="child-header-suggested">
                                                Orang yang mungkin anda kenal
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row"
                                        style="max-height: 16rem; margin-bottom: 0.7rem; overflow: auto;">
                                        @foreach ($suggested as $people)
                                            <div class="row">
                                                <a href="{{ route('seeProfile', ['people' => $people->id]) }}"
                                                    style="text-decoration: none; display:flex; color: black;">
                                                    <div class="col-1">
                                                        <i><img src="{{ asset('images/profile/' . $people->image) }}"
                                                                alt="gambar postingan"
                                                                style="width: 2.5rem; height: 2.5rem; aspect-ratio: 1/1; background-color: white; border-radius: 50%;"></i>
                                                    </div>
                                                    <div class="col-9" style="margin-top: 4px;">
                                                        <div class="container" style="margin-left: 0.7rem;">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p style="font-weight: 700; margin-bottom: 2px; color: white; font-size: 0.8rem;"
                                                                        class="suggestedFollowing">
                                                                        {{ $people->username }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p style="font-weight: 400; margin-top: -2px; color: white; font-size: 0.5rem;"
                                                                        class="suggestedFollowing">
                                                                        {{ $people->name }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <form
                                                            action="{{ route('follow', ['people' => $people->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            <p>
                                                                <button type="submit" class="btn"
                                                                    style="font-weight: 700; margin-top: 7px; font-size: 0.7rem; color: var(--main_color-3); margin-left: -8px; ">{{ $people->is_follow ? 'Unfollow' : 'Follow' }}</button>
                                                            </p>
                                                        </form>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="row">
                                        <div class="col-12" style="margin-top: -25px;">
                                            <hr style="color: white;">
                                            <p
                                                style="font-size:0.6rem; width: 100%; color: grey; margin-top: -0.5rem;">
                                                Terms of Service
                                                Privacy Policy
                                                Cookie Policy
                                                Accessibility
                                                Ads info
                                                More
                                                © 2024 Sosmed
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>


@guest
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 column-text-footer">
                    <p id="text-1">Jangan ketinggalan berita terbaru</p>
                    <p id="text-2">login, untuk pengalaman yang baru</p>
                </div>
                <div class="col-lg-4 col-12 d-flex column-btn">
                    <a href="{{ route('login') }}" class="btn btn-login-footer">Login</a>
                    <a href="{{ route('registrasi') }}" class="btn btn-regist-footer">Register</a>
                </div>
            </div>
    </footer>
@endguest

</div>

</html>
<script>
    $('.bookmarkPost').on('click', function() {
        $(this).toggleClass('animationBookmark');
    });
    $('.fa-heart').on('click', function() {
        $(this).toggleClass('animationLikes')
    })
    $('.pilihKategoriPostingan').on('click', function() {
        $('.pilihKategoriPostingan').removeClass('active');
        $(this).addClass('active');
    });

    var currentUrl = window.location.href
    const elements1 = $('.KategoriFollowing')
    const elements2 = $('.KategoriFollowers')
    if (currentUrl.includes("home2")) {
        elements1.addClass("active")
    } else if (currentUrl.includes("home")) {
        elements2.addClass("active")
    }

    $('.sidebarActive').on('click', function() {
        $('.sidebarActive').removeClass('sidebarActive').$(this).addClass('sidebarActive');
    })
</script>
