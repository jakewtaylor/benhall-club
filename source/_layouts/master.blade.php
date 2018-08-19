<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <title>{{ $page->getTitle() }}</title>
    </head>
    <body>
        <div class="sidebar">
            <div class="header">
                <h1>Benhall &amp; Sternfield Ex Servicemens Club</h1>
            </div>

            <ul class="menu">
                <li class="menu__item {{ $page->active('home') }}">
                    <a href="/">
                        <i class="fa fa-fw fa-home"></i>
                        Home
                    </a>
                </li>
                <li class="menu__item {{ $page->active('about') }}">
                    <a href="/about/">
                        <i class="fa fa-fw fa-info"></i>
                        About
                    </a>
                </li>
                <li class="menu__item {{ $page->active('room-hire') }}">
                    <a href="/room-hire/">
                        <i class="fa fa-fw fa-door-closed"></i>
                        Room Hire
                    </a>
                </li>
                <li class="menu__item {{ $page->active('events') }}">
                    <a href="/events/">
                        <i class="far fa-fw fa-calendar"></i>
                        Events
                    </a>
                </li>
                <li class="menu__item {{ $page->active('benhall-st-mary-fc') }}">
                    <a href="/benhall-st-mary-fc/">
                        <i class="fa fa-fw fa-futbol"></i>
                        Benhall St. Mary FC
                    </a>
                </li>
                <li class="menu__item {{ $page->active('membership') }}">
                    <a href="/membership/">
                        <i class="fa fa-fw fa-handshake"></i>
                        Membership
                    </a>
                </li>
                <li class="menu__item {{ $page->active('committee') }}">
                    <a href="/committee">
                        <i class="fa fa-fw fa-users"></i>
                        Committee
                    </a>
                </li>
                <li class="menu__item {{ $page->active('gallery') }}">
                    <a href="/gallery/">
                        <i class="fa fa-fw fa-image"></i>
                        Gallery
                    </a>
                </li>
            </ul>

            <div class="section">
                <h5>Opening Times</h5>
                <table>
                    <tbody>
                        @foreach ($page->info->openingHours as $day => $times)
                            <tr>
                                <td>{{ $day }}</td>
                                <td>{{ $times }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="section">
                <h5>Contact</h5>
                <p>Please feel free to ring us on <a href="tel:{{ $page->info->tel }}">{{ $page->info->tel }}</a>, or contact us via our <a href="{{ $page->info->facebook }}" target="_blank">Facebook page</a>.</p>
            </div>
        </div>

        <div class="page">
            <div class="card">
                @hasSection('splash')
                    <div class="card__splash">
                        <img src="@yield('splash')" alt="">
                    </div>
                @endif

                <div class="card__inner">
                    <h2 class="card__title">{{ $page->title }}</h2>
                    <div class="card__content">
                        @yield('body')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
