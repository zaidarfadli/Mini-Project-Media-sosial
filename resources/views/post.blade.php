<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    :root {
        --main_color: #EEEEEE;
        --main_color-2: black;
        --main_color-3: #3F979B;
        --main_color-4: #52D3D8;
        --text-color: #D9D9D9;
    }

    * {
        /* border: 1px solid white; */
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .sidebar {
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
        width <=30rem;
        color: white;
        background-color: black;
        border: 1.8px solid rgba(220, 220, 220, 0.3);
        border-radius: 15px;
        padding: 0.7rem 1.5rem 1.5rem 1.5rem;
        margin-bottom: -1.3rem;
        transition: all 0.5s ease;
    }

    .card .card-text {
        font-size: 0.8rem;
        color: white;
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
        color: var(--main_color-4);
    }

    .sidebar .link-navigasi .sidebarActive .links_name {
        color: var(--main_color-4);
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

    .sidebar .link-navigasi li a p {
        height: 100%;
        width: 10%;
        margin-top: 45px;
        transition: all 0.4s ease;
    }

    .sidebar .link-navigasi li i {
        min-width: 60px;
        text-align: center;
        font-size: 14px;
        color: var(--main_color-3);
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

    .nav-section {
        position: relative;
        width: calc(100% - 10px);
        left: 280px;
        transition: all 0.5s ease;
    }

    .nav-section .backRow {
        position: relative;
        width: calc(100% - 100px);
        left: -1rem;
        transition: all 0.5s ease;
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
        background-color: black;
        position: relative;
        width: calc(100% - 240px);
        left: 240px;
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

    .nav-section .konten-home {
        position: relative;
        margin: 0rem 2rem 0rem 2rem;
    }

    .nav-section #arrowLeft {
        color: var(--main_color);
        cursor: pointer;
        font-weight: 600;
        font-size: 1.5rem;
    }

    .nav-section #back {
        color: var(--main_color);
        cursor: pointer;
        font-weight: 600;
        font-size: 1rem;
        margin-top: 0.4rem;
        margin-left: 0.6rem;
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
        border-bottom: 2px solid var(--main_color);
        transition: all ease 0.3s;
    }

    .navigasi-item p {
        color: white;
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
        margin-right: -0.3rem;
        font-size: 1.3rem;
        color: var(--main_color);
        margin-top: -3rem;
        background-color: unset;
        border: unset;
    }

    .fiturPostingan p {
        margin: 2px 0px 10px 8px;
        color: var(--main_color);
        font-size: 0.9rem;
    }

    .fiturPostingan i {
        margin-left: 45px;
        color: var(--main_color);
        font-size: 1.2rem;
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

    @media (width <=991px) {
        .konten-postingan .card-postingan {
            margin-left: 0rem;
        }

        .home-section #SuggestFollowing {
            display: none;
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

        .nav-section .backRow {
            width: calc(100% - 60px);
            left: 20px;
        }

        .nav-section {
            width: calc(100% - 60px);
            left: 60px;
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

    @media (width <=580px) {
        .footer {
            display: none;
        }
    }

    @media (width <=576px) {

        footer .row {
            margin-left: 0.5rem;
        }
    }

    @media (width <=560px) {
        .card-postingan {
            width: 110%;
            transition: all 0.5s ease;
        }

        .profileAuthor .namaProfileAuthorPost p {
            font-size: 0.7rem;
        }

        #column-konten-postingan #teks-deskripsi-postingan {
            color: var(--text-color);
            letter-spacing: 0.3;
            font-size: 0.6rem;
            margin: 1rem 0rem 1rem 0rem
        }
    }

    @media(width <=462px) {
        .card-postingan {
            width: 120%;
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

        .profileAuthor #usernamePosting {
            font-size: 0.7rem;
        }

        .profileAuthor #timePosting {
            font-size: 0.6rem;
        }

        .fiturPostingan p {
            display: none;
        }

        .fiturPostingan i {
            margin-right: -2rem;
            font-size: 1rem;
        }

        .saveToBookmark {
            font-size: 1.3rem;
            transform: translateY(0.5rem);
        }

        #column-konten-postingan .profile-author img {
            width: 1.7rem;
            height: 1.7rem;
            transition: all ease 0.3s;
        }

        #column-konten-postingan .profile-author p {
            font-size: 0.8rem;
            transition: all ease 0.3s;
        }

        #column-konten-postingan #teks-deskripsi-postingan {
            color: var(--text-color);
            letter-spacing: 0.3;
            font-size: 0.5rem;
            margin: 1rem 0rem 1rem 0rem
        }
    }

    @media (width <=400px) {
        .card-postingan {
            width: 135%;
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

    .logoHomepage {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .logoHomepage img {
        padding-top: 1rem;
        width: 2rem;
    }

    .navigasi {
        margin-bottom: -10px;
        justify-content: center;
        display: flex;
        list-style-type: none;
    }

    .navigasi .navigasi-item a {
        margin-right: 100px;
        text-decoration: none;
        color: black;
        font-size: 0.7rem;
        text-align: center;
    }

    .navigasi-item .active p {
        font-weight: 600;
        letter-spacing: 1;
        padding-bottom: 5px;
        border-bottom: 2px solid var(--main_color-3);
        transition: all ease 0.3s;
    }

    .konten-postingan .card-postingan {
        margin-top: 6.5rem;
        margin-left: 1.5rem;
        background-color: black;
        border: 2px solid black;
        border: 1.8px solid rgba(220, 220, 220, 0.3);
        border-radius: 10px;
        padding: 1.5rem 2rem 2rem 0.7rem;
    }

    .card-postingan .profile-author img {
        border-radius: 50%;
        width: 2rem;
        height: 2rem;
    }

    .card-postingan .profile-author {
        display: flex;
    }

    .card-postingan .profile-author p {
        color: white;
        margin: 5px 0px 0px 10px;
        font-weight: 600;
        font-size: 1rem;
    }

    #teks-deskripsi-postingan {
        word-wrap: break-word;
        color: var(--text-color);
        letter-spacing: 0.3;
        font-size: 0.7rem;
        margin: 1rem 0rem;
    }

    .input-komentar .saveToBookmark {
        margin-top: -1.5rem;
        float: right;
        font-size: 1.3rem;
        color: var(--main_color-3);
        background-color: unset;
        border: unset;
    }

    .card-postingan #gambarKontenPostingan img {
        width: 100%;
    }

    .card-postingan #header-komentar {
        color: white;
        position: absolute;
        font-weight: 700;
        margin: 5px 0px 0px -10px;
        font-size: 1rem;
    }

    .card-postingan #header-komentar {
        justify-content: space-between;
    }

    .card-postingan #column-konten-postingan {
        overflow: auto;
        max-height: 100%;
    }

    .card-postingan #fiturKontenPostingan {
        display: flex;
    }

    .card-postingan #fiturKontenPostingan i {
        color: var(--main_color-3);
        padding: 10px 10px 0px 0px;
        font-size: 1.5rem;
    }

    .card-postingan #fiturKontenPostingan p {
        font-weight: 500;
        padding: 10px 10px 0px 0px;
        font-size: 1rem;
    }

    .card-postingan #isi-komentar {
        overflow: auto;
        overflow-x: hidden;
        max-height: 50%;
        margin-bottom: 5px;
    }

    #isi-komentar {
        color: white;
        margin: 3rem 0rem 2rem 0rem;
    }

    #isi-komentar #komentar {
        color: var(--text-color);
        font-size: 0.7rem;
    }

    #isi-komentar .reply {
        float: right;
        color: var(--main_color-3);
        font-size: 0.7rem;
        cursor: pointer;
    }

    .input-komentar #btnKirimKomentar {
        color: var(--main_color-3);
        border: none;
        margin: -0.7rem -0.5rem 0rem 1.2rem;
        font-size: 2rem;
        background: transparent;
    }

    .input-komentar .form-control {
        color: white;
        background-color: black;
        width: 90%;
        border: none;
        font-size: 0.6rem;
        border-radius: 5px;
        height: 1.7rem;
        padding: 0px 0px 0px -50px;
    }

    .input-komentar .form-control:focus {
        color: white;
        border: unset;
        background-color: black;
    }

    .input-komentar .fitur {
        margin: -5px 15px 0px 0px;
    }

    .input-komentar .fitur i {
        color: var(--main_color-3);
        margin: 5px 0px 0px 0px;
        font-size: 1.4rem;
    }

    .input-komentar p {
        color: white;
        font-weight: 600;
        margin: 7px 0px 0px 0px;
        font-size: 0.6rem;
    }

    .input-komentar .text-1 {
        color: white;
        font-weight: 600;
        font-size: 0.6rem;
    }

    .input-komentar .text-1:hover {
        cursor: pointer;
    }


    @keyframes biarModalnyaKeren {
        from {
            transform: translate(-20%, -50%);
        }

        to {
            transform: translate(-50%, -50%);
        }
    }

    @keyframes biarBayangannyaKeren {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .coverAll {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 99;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        animation: biarBayangannyaKeren 0.5s;
    }

    .wrapperModal {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 999;
        animation: biarModalnyaKeren 0.7s;
    }

    .modalnya {
        width: 30rem;
        background: var(--main_color-2);
        padding: 0.5rem 1rem 3rem 1rem;
        color: var(--main_color);
        border-radius: 13px;
    }

    .modalnya #likes {
        text-align: center;
        font-size: 1.2rem;
        margin-left: 2.2rem;
        margin-bottom: 0.8rem;
        font-weight: 600;
    }

    .modalnya #tutupModal {
        margin-top: 15px;
    }

    .modalnya #tutupModal:hover {
        cursor: pointer;
    }

    .containerWrapper {
        margin-top: 10px;
    }

    .containerWrapper i {
        font-size: 1.2rem;
    }

    .wrapperModal {
        z-index: 9999;
    }

    .listFollowers {
        margin: 0px 0px -15px 0px;
        max-height: 20rem;
        overflow: auto;
    }

    .listFollowers a {
        margin-bottom: 20px;
        text-decoration: none;
    }

    .listFollowers img {
        aspect-ratio: 1/1;
        width: 2.7rem;
        height: 2.7rem;
        padding: 2px;
        border-radius: 50%;
    }

    .listFollowers .usernameFollowers {
        font-size: 0.9rem;
        margin: 5px 0px 0px -10px;
        font-family: 'Poppins';
        font-weight: 600;
        color: var(--text-color);
    }

    .listFollowers .namaFollowers {
        font-size: 0.5rem;
        margin: 0px 0px 0px -10px;
        font-family: 'Poppins';
        font-weight: 300;
        color: var(--text-color);
    }

    #follow {
        font-weight: 600;
        color: var(--main_color-4);
        font-size: 0.7rem;
    }

    .input-komentar #text-2 {
        color: white;
        font-weight: 400;
        margin: 0px 0px 10px 0px;
        font-size: 0.5rem;
    }

    #profile-komentar p {
        font-size: 0.7rem;
        margin: 5px 0px 10px 10px;
        font-weight: 650;
    }

    #profile-komentar img {
        border-radius: 50%;
        width: 1.5rem;
        height: 1.5rem;
        aspect-ratio: 1/1;
    }

    .footer {
        max-width: 50rem;
    }

    .footer p {
        font-size: 0.6rem;
        color: white;
        margin: 20px 20px 0px 0px;
    }

    .footer #copyright {
        margin: 20px 0px 20px 0px;
    }

    .row .col-12 #replyComment {
        border: unset;
        border-bottom: 1.8px solid rgba(220, 220, 220, 0.3);
        color: var(--text-color);
        background-color: unset;
        outline: unset;
        width: 100%;
        color: var(--text-color);
        font-size: 0.7rem;
        padding-bottom: 5px;
    }

    .row .col-12 #replyComment:focus {
        outline: unset
    }
</style>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Postingan</title>
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
        document.addEventListener('DOMContentLoaded', function() {
            document.documentElement.style.backgroundColor = '#fff';
            document.documentElement.style.color = '#fff';
        });
    </script>
</head>

<body style="background-color: black;">
    <div class="sidebar" style="background-color: black;">
        <div class="detail_logo" style="background-color: black;">
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
            <li>
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
    <section class="nav-section" style="z-index: 99; position: fixed; background-color: black;">
        <div class="container-fluid nav" style="background-color: black;">
            <div class="container" style="background-color: black; transform: translateX(-1rem); ">
                <nav class="justify-content-center">
                    <div class="logoHomepage">
                        <img src="{{ asset('images/logo-medsos.png') }}" alt="logo homepage">
                </nav>
                <div class="col-12 d-flex backRow">
                    <p id="arrowLeft">
                        < </p>
                            <p id="back">Back</p>
                </div>
            </div>
        </div>
    </section>
    <section class="home-section">
        <div class="container-fluid nav">
            <div class="container-fluid container-xl">
                <div class="row">
                    <div class="container-fluid konten-postingan">
                        <div class="container">
                            <div class="col-12">
                                <div class="row card-postingan">
                                    @if ($post->my_post)
                                        
                                    <div class="col-12">
                                        <form action="{{ route('deletePost',['post' => $post->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                style="background-color: unset; border:none; float: right; color: red; opacity: 0.8; margin-right: -1.4rem;">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                    @endif
                                    <div class="col-md-7" id="column-konten-postingan">
                                        <div class="row">
                                            <div class="col-12 profile-author">
                                                <img src="{{ $post->user->image }}" alt="ImageProfilePostingan">
                                                <p>{{ $post->user->username }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <p id="teks-deskripsi-postingan">
                                                    {{ $post->content }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row" id="gambarKontenPostingan">
                                            <img src="{{ asset('images/post/' . $post->image) }}"
                                                alt="gambar postingan">
                                        </div>
                                    </div>
                                    <div class="col-md-5" id="column-komentar-postingan"
                                        style="overflow-x: hidden; max-height: 52rem;">
                                        <div class="row" id="header-komentar">
                                            <div class="col-12 d-flex">
                                                <p>komentar</p>
                                                <hr style="margin-top: -15px; color: var(--main_color-3);">
                                            </div>
                                        </div>
                                        <div class="row" id="isi-komentar">
                                            @if (isset($message))
                                                <p
                                                    style="text-align: left; color: var(--text-color); margin-left: -10px; opacity: 0.7; font-size: 0.8rem;">
                                                    Belum ada komentar</p>
                                            @elseif(isset($post->comment))
                                                @foreach ($post->comment as $comment)
                                                    <span id="{{ $comment->id }}">
                                                        <div class="col-12">
                                                            <div class="row" id="profile-komentar">
                                                                <div class="col-12 d-flex">
                                                                    <img src="{{ asset('images/profile/' . $comment->user->image) }}"
                                                                        alt="ImageProfilKomentar">
                                                                    <p>{{ $comment->user->username }}</p>
                                                                </div>
                                                            </div>
                                                            <p id="komentar">{{ $comment->comment }}</p>
                                                        </div>
                                                        <div class="row idForm">
                                                            <div class="col-6">
                                                                <form
                                                                    action="{{ route('likeComment', ['post' => $post->id, 'comment' => $comment->id]) }}"
                                                                    style="display: flex;" method="post">
                                                                    @csrf
                                                                    @if ($comment->isLikedCommentByUser())
                                                                        <button
                                                                            style="background: unset; border: unset; padding: 5px;"
                                                                            type="submit"><i
                                                                                style="font-size: 1.2rem; margin-top: -8px; color: var(--main_color-3);"
                                                                                class="fa-solid fa-thumbs-up"
                                                                                id="btnLikes"></i></button>
                                                                    @else
                                                                        <button
                                                                            style="background: unset; border: unset; padding: 5px;"
                                                                            type="submit"><i
                                                                                style="font-size: 1.2rem; margin-top: -8px; color: var(--main_color-3);"
                                                                                class="fa-regular fa-thumbs-up"
                                                                                id="btnLikes"></i></button>
                                                                    @endif

                                                                    <p
                                                                        style="font-size: 0.7rem; margin: 0px 0px -12px 3px; font-weight: 500; color: var(--text-color);">
                                                                        {{ $comment->likes_count }} Likes</p>
                                                                </form>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="reply" id="{{ $comment->id }}">Reply</p>
                                                            </div>
                                                            <div class="row balasKomentar" style="display: none;">
                                                                <div class="col-12" style="margin-bottom: 0.8rem;">
                                                                    <form
                                                                        action="{{ route('sendReply', ['post' => $post->id, 'comment' => $comment->id]) }}"
                                                                        style="display: flex;" method="post">
                                                                        @csrf
                                                                        <input type="text" name="reply"
                                                                            placeholder="Balas komentar {{ $comment->user->username }}"
                                                                            id="replyComment">
                                                                        <button type="submit"
                                                                            style="color: var(--main_color-3); font-size: 0.7rem; padding: 5px 15px 5px 15px; background-color: unset; border: unset;">Kirim</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            @foreach ($comment->reply as $reply)
                                                                <div class="col-12"
                                                                    style="max-width: 20rem; margin-left: 2rem;">
                                                                    <div class="row" id="profile-komentar">
                                                                        <div class="col-12 d-flex">
                                                                            <img src="{{ asset('images/profile/' . $reply->user->image) }}"
                                                                                alt="ImageProfilKomentar">
                                                                            <p>{{ $reply->user->username }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <p id="komentar">{{ $reply->reply }}</p>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </span>
                                                    <hr style="width: 100%; color: white; margin-left: 22px;">
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="row justify-content-center">
                                            <hr style="width: 100%; color: white; margin-left: 22px;">
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="input-komentar">
                                                    <div class="row">
                                                        <div class="col-12 d-flex">
                                                            <div class="fitur d-flex">
                                                                <form
                                                                    action="{{ route('likePost', ['post' => $post->id]) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @if ($post->isLikedByUser())
                                                                        <button type="submit"
                                                                            style="background-color: unset; border: unset;"><i
                                                                                class="fa-solid fa-heart"></i></button>
                                                                    @else
                                                                        <button type="submit"
                                                                            style="background-color: unset; border: unset;"><i
                                                                                class="fa-regular fa-heart"></i></button>
                                                                    @endif
                                                                </form>

                                                            </div>
                                                            <div class="fitur d-flex">
                                                                <i class="fa-regular fa-comment"></i>
                                                            </div>
                                                            <div class="fitur d-flex">
                                                                <i class="fa-regular fa-paper-plane"></i>
                                                            </div>
                                                        </div>
                                                        <form
                                                            action="{{ route('addBookmark', ['post' => $post->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            @if ($post->isBookmarkedByUser())
                                                                <button class="saveToBookmark" type="submit"
                                                                    name="saveToBookmark">
                                                                    <i class="fa-regular fa-bookmark"></i>
                                                                </button>
                                                            @else
                                                                <button class="saveToBookmark" type="submit"
                                                                    name="saveToBookmark">
                                                                    <i class="fa-solid fa-bookmark"></i>
                                                                </button>
                                                            @endif
                                                        </form>
                                                        <p class="text-1" id="tombol-muncul">
                                                            {{ $post->likes_count }} Like</p>
                                                        <div class="coverAll">
                                                            <div class="wrapperModal">
                                                                <div class="modalnya">
                                                                    <div class="container containerWrapper">
                                                                        <div class="row">
                                                                            <div class="col-11">
                                                                                <p id="likes">Likes</p>
                                                                            </div>
                                                                            <div class="col-1">
                                                                                <i class="fa-solid fa-xmark"
                                                                                    id="tutupModal"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-12 listFollowers">
                                                                                @forelse ($likes as $like)
                                                                                    <a href="{{ $like->user->id }}"
                                                                                        style="display: flex;">
                                                                                        <i><img src="{{ $like->user->image }}"
                                                                                                alt="gambar postingan"></i>
                                                                                        <div class="container-fluid">
                                                                                            <div class="row">
                                                                                                <span
                                                                                                    class="usernameFollowers">{{ $like->user->username }}</span>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <span
                                                                                                    class="namaFollowers">{{ $like->user->name }}</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <form
                                                                                            action="{{ route('follow', ['people' => $like->user->id]) }}"
                                                                                            method="POST">
                                                                                            @csrf
                                                                                            <p>
                                                                                                @if ($like->user->is_follow)
                                                                                                    <button
                                                                                                        type="submit"
                                                                                                        class="btn"name="follow"
                                                                                                        id="follow"
                                                                                                        onclick="submitForm()">Unfollow</button>
                                                                                                @else
                                                                                                    <button
                                                                                                        type="submit"
                                                                                                        class="btn"
                                                                                                        name="follow"
                                                                                                        id="follow"
                                                                                                        onclick="submitForm()">Follow</button>
                                                                                                @endif
                                                                                            </p>
                                                                                        </form>
                                                                                    </a>
                                                                                @empty
                                                                                    <p
                                                                                        style="font-size: 0.8rem; font-weight: 400; text-align: center; color: var(--text-color); opacity: 0.7;">
                                                                                        awikwok ga ada yang nge like</p>
                                                                                @endforelse
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p id="text-2">2 hours ago</p>
                                                    </div>
                                                    <form action="{{ route('sendComment', ['post' => $post->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12 d-flex">
                                                                <input type="text" class="form-control"
                                                                    name="comment" id="isiKomentar"
                                                                    placeholder="Tambahkan komentar">
                                                                <button type="submit" name="kirimKomentar"
                                                                    id="btnKirimKomentar">
                                                                    <p>kirim</p>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid footer">
            <div class="row d-flex">
                <div class="col-sm-1 offset-sm-2">
                    <p>lorem</p>
                </div>
                <div class="col-sm-1">
                    <p>lorem</p>
                </div>
                <div class="col-sm-1">
                    <p>lorem</p>
                </div>
                <div class="col-sm-1">
                    <p>lorem</p>
                </div>
                <div class="col-sm-1">
                    <p>lorem</p>
                </div>
                <div class="col-sm-1">
                    <p>lorem</p>
                </div>
                <div class="col-sm-1">
                    <p>lorem</p>
                </div>
                <div class="col-sm-1">
                    <p>lorem</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <p id="copyright">Copyright 2023</p>
                </div>
            </div>
        </div>
    </section>

    @guest
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 column-text-footer">
                        <p id="text-1">Jangan ketinggalan berita terbaru</p>
                        <p id="text-2">login, untuk pengalaman yang baru</p>
                    </div>
                    <div class="col-lg-4 col-12 d-flex column-btn">
                        <a href="login" class="btn btn-login-footer">Login</a>
                        <a href="login" class="btn btn-regist-footer">Register</a>
                    </div>
                </div>
        </footer>
    @endguest
    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $('.balasKomentar').hide();
        $('.reply').on('click', function() {
            let idParent = $(this).attr('id')
            $('#' + idParent + ' .idForm .balasKomentar').toggle();
        });
        $('#tombol-muncul').on('click', function() {
            $('.coverAll').toggle();
            $('.wrapperModal').toggle();
        });
        $('.coverAll').on('click', function() {
            $('.coverAll').toggle();
            $('.wrapperModal').toggle();
        });
        $('#tutupModal').on('click', function() {
            $('.coverAll').toggle();
            $('.wrapperModal').toggle();
        });
        $('.pilihKategoriPostingan').on('click', function() {
            $('.pilihKategoriPostingan').removeClass('active');
            $(this).addClass('active');
        });
        $('.sidebarActive').on('click', function() {
            $('.sidebarActive').removeClass('sidebarActive').$(this).addClass('sidebarActive');
        });
    })
</script>
