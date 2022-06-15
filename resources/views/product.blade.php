@extends('layouts.app')

@section('content')
<main class="container product-page">
    <div class="row">
    <div class="row-left product-page-image">
        <img src="data:image/png;base64,{{base64_encode($product->image)}}" alt="{{ $product->name }}">
    </div>
    <div class="row-right">
        <h2 class="product-page-name">{{ $product->name }}</h2>
        <p class="product-page-price">$ {{ $product->price }}</p>
        <div class="box product-page-info">
        Гарантія. Обмін/повернення товару протягом 14 днів
        Гарантійні терміни товарів
        60 днів з дня продажу або з початку сезону.
        На сезонні товари гарантійний термін обчислюється з початку відповідного сезону
        - для зимового асортименту - з 15 листопада по 15 березня;
        - для весняно-осіннього асортименту - з 15 березня по 15 травня і з 15 вересня по 15 листопада;
        - для літнього асортименту - з 15 травня по 15 вересня. 
        </div>
        <form method="GET" action="{{ url('/buy/'.$product->id) }}">
            @csrf
            <button type="submit" class="default-button product-page-buy">Купити</button>
        </form>
        <p class="product-page-shipping">БЕЗКОШТОВНЕ ДОСТАВЛЕННЯ</p>
    </div>
    </div>
    <div class="box product-page-description">
        <ul class="product-page-list">
            {{ $product->description }}
        </ul>
    </div>
</main>
@endsection