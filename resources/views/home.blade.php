@extends('layouts.app')

@section('content')
<div>
    <header>
      <div class="header-bg">
        <div class="container">
          <div class="header-content">
            <div class="header-text">
              <div class="logo-icon-container">
                <img class="logo-icon" src="/img/logo.png" alt="Logo" />
              </div>
              <h2 class="header-title">The Sneakersy Shop</h2>
              <p class="header-desc">
                <strong>Sneakersy shop</strong> - це дослідницька лабораторія, яка постійно відбирає найексклюзивніші кросівки по всьому світу.
              </p>
              <a href="./pages/product.html" class="default-button">Відкрийте для себе наші речі</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="container container-products">
      <h2 class="section-title">Кросівки</h2>
      <p class="section-desc">Замовляйте для себе чи для своїх коханих</p>
      <div class="sneaker-container">
        @foreach($products as $product)
          <a href="{{ url('/product/$product->id') }}">
            <div class="sneaker-item">
              <div class="sneaker-img">
                <a href="{{ url('/product/'.$product->id) }}">
                  <img src="data:image/png;base64,{{base64_encode($product->image)}}" alt="Converse CT All Star II" />
                </a>
              </div>
              <div class="sneaker-desc">
                <h3 class="sneaker-title">{{ $product->name }}</h3>
                <p class="sneaker-price">{{ $product->price }}$</p>
              </div>
            </div>
          </a>
        @endforeach
      </div>
    </section>
    <div class="grey-bg">
      <section class="container container-features">
        <div class="flex-row">
          <div>
            <h2 class="section-title-dark">Одягайтеся стильно та бюджетно</h2>
            <p class="section-desc-dark">Зробіть свій стиль разом з нами</p>
            <div class="features-img-mobile">
              <img src="img/sneaker.png" alt="Nike Jordan" />
            </div>
            <div class="features-desc">
              <ul class="features-list">
                <li class="features-list-item">Гарантовано найнижчі ціни</li>
                <li class="features-list-item">Доставка 5 днів по Європі</li>
                <li class="features-list-item">Гарантія повернення грошей</li>
                <li class="features-list-item">Цілодобова підтримка клієнтів</li>
              </ul>
            </div>
            <a href="#" class="default-button">Докладніше</a>
          </div>

          <div class="features-img">
            <img src="img/sneaker.png" alt="Nike Jordan" />
          </div>
        </div>
    </section>
    <section class="pink-bg">
        <div class="container">
          <div class="testimonials-container">
            <h2 class="section-title">Відгуки</h2>
            <p class="section-desc">Кілька слів від наших задоволених клієнтів</p>
            <div class="testimonials-cards">
                @foreach($feedbacks as $feedback)
                <div class="profile-card">
                    <div class="profile-img">
                        <img src="img/user.png" alt="People" />
                    </div>
                    <ul class="star-list">
                        @for( $i = 0; $i < $feedback->stars; $i++ )
                            <li class="star-list-item">
                                <img src="img/Star 1.png" alt="Star" />
                            </li>
                        @endfor
                    </ul>
                    <h3 class="feedback">
                        “{{ $feedback->feedback }}”
                    </h3>
                    <p class="author">{{ strlen($feedback->name) > 0 ? $feedback->name : "Покупець"}}</p>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          <div class='feedback-button'>
            <a href="{{ url('/feedback') }}" class="default-button">Залишити відгук</a>
          </div>
        </div>
    </section>
    <section class="container container-products">
        <h2 class="section-title">Популярне</h2>
        <p class="section-desc">Наш топ продуктів, який може вам сподобатися</p>
        <div class="sneaker-container">
          @for( $i = 0; $i < 4; $i++ )
            <a href="{{ url('/product/$most_popular[$i]->id') }}">
              <div class="sneaker-item">
                <div class="sneaker-img">
                  <a href="{{ url('/product/'.$most_popular[$i]->id) }}">
                    <img src="data:image/png;base64,{{base64_encode($most_popular[$i]->image)}}" alt="Converse CT All Star II" />
                  </a>
                </div>
                <div class="sneaker-desc">
                  <h3 class="sneaker-title">{{ $most_popular[$i]->name }}</h3>
                  <p class="sneaker-price">{{ $most_popular[$i]->price }}$</p>
                </div>
              </div>
            </a>
          @endfor
        </div>
    </section>
</div>
@endsection


