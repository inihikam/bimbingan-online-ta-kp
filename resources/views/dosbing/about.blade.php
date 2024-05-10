@extends('dosbing.layouts.main')
@section('title', 'About')
@section('content')

<div class="text-center">
    <h1>
        Tentang Kami
    </h1>
</div>
<div class="row border rounded-5 p-3 bg-white shadow box-area content-about">
    <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est aspernatur voluptas nisi. Impedit distinctio voluptatibus, iure sapiente ex, reiciendis, vero debitis culpa est maiores nulla magni laboriosam doloremque maxime amet.</p>
</div>
<div class="text-center">
    <h4>
        Pojok Developer
    </h4>
    <div class="scroller" data-speed="fast">
        <ul class="tag-list scroller__inner">
            <li>
                <div class="nama">Clara Edrea Evelyna Sony Putri</div>
                <div class="nim">A11.2021.13374</div>
            </li>
            <li>
                <div class="nama">Muhammad Maulana Hikam</div>
                <div class="nim">A11.2021.13550</div>
            </li>
            <li>
                <div class="nama">Muhammad Rizal Pratama</div>
                <div class="nim">A11.2021.13329</div>
            </li>
            <li>
                <div class="nama">Muh Bagus Saputro</div>
                <div class="nim">A11.2021.13446</div>
            </li>
        </ul>
    </div>
</div>
<!--
<div class="scroller" data-direction="right" data-speed="slow">
    <div class="scroller__inner">
        <img src="https://i.pravatar.cc/150?img=1" alt="" />
        <img src="https://i.pravatar.cc/150?img=2" alt="" />
        <img src="https://i.pravatar.cc/150?img=3" alt="" />
        <img src="https://i.pravatar.cc/150?img=4" alt="" />
        <img src="https://i.pravatar.cc/150?img=5" alt="" />
        <img src="https://i.pravatar.cc/150?img=6" alt="" />
    </div>
</div>
-->
@endsection