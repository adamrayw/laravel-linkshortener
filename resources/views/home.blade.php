@extends('layout.template')

@section('title', 'Shortku - Persingkat link anda dengan mudah!')

@section('content')
<section id="header" class="header-container">
    <div class="header">
        <div class="header-title">
            <h1>Copy, Paste, Short it!</h1>
        </div>
        <form action="/generate-link" method="POST">
            @csrf
            <div class="url-field">
                <label for="">
                    <input type="text" name="link" placeholder="Paste your link">
                </label>
            </div>
            <div class="short-btn">
                <button type="submit"><i class="fas fa-link fa-lg"></i> Short Now</button>
                <!-- <button type="submit"><i class="fas fa-link fa-lg"></i> Custom Link</button> -->
            </div>
        </form>
    </div>
    @if(Session::has('success'))
    <p style="text-align: center;">{{ Session::get('success') }}</p>
    @endif
    <div class="latest">
        <h1>The recently shorted links</h1>
        <hr>
        <section>
            <div class="data">
                @foreach ($link as $links)

                <a href="https://shortku.herokuapp.com/{{$links->code}}">https://shortku.herokuapp.com/{{$links->code}}</a><br>
                @endforeach
                @if(count($link) < 1) <p style="text-align: center; color: white;">No shortened links yet.</p>
                    @endif
            </div>
        </section>
    </div>
</section>
@endSection