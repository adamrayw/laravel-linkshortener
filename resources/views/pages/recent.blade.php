@extends('layout.template')

@section('title', 'Shortku | Recent')

@section('content')
<section>
    <div class="latest-container">
        <div class="latest">
            <h1>Recently Shorted Links</h1>
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
    </div>
</section>
@endSection