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
        <div class="sneaker-item">
          <div class="sneaker-img">
            <a href="./pages/product.html">
              <img src="img/converse-cta 1.png" alt="Converse CT All Star II" />
            </a>
          </div>
          <div class="sneaker-desc">
            <h3 class="sneaker-title">Converse CT All Star II</h3>
            <p class="sneaker-price">99.99$</p>
          </div>
        </div>

        <div class="sneaker-item">
          <div class="sneaker-img">
            <a href="./pages/product.html">
              <img
                src="img/adidas-ocm 1.png"
                alt="Adidas Originals Courtvantage Mesh"
              />
            </a>
          </div>
          <div class="sneaker-desc">
            <h3 class="sneaker-title">Adidas Originals Courtvantage Mesh</h3>
            <p class="sneaker-price">99.99$</p>
          </div>
        </div>

        <div class="sneaker-item">
          <div class="sneaker-img">
            <a href="./pages/product.html">
              <img src="img/asics-gel 1.png" alt="Asics GEL-Epirus" />
            </a>
          </div>
          <div class="sneaker-desc">
            <h3 class="sneaker-title">Asics GEL-Epirus</h3>
            <p class="sneaker-price">99.99$</p>
          </div>
        </div>

        <div class="sneaker-item">
          <div class="sneaker-img">
            <a href="./pages/product.html">
              <img src="img/adidas-oc1 1.png" alt="Adidas Original Climacool 1" />
            </a>
          </div>
          <div class="sneaker-desc">
            <h3 class="sneaker-title">Adidas Original Climacool 1</h3>
            <p class="sneaker-price">99.99$</p>
          </div>
        </div>

        <div class="sneaker-item">
          <div class="sneaker-img">
            <a href="./pages/product.html">
              <img src="img/adidas-pbc 1.png" alt="Adidas Protect Core 3C" />
            </a>
          </div>
          <div class="sneaker-desc">
            <h3 class="sneaker-title">Adidas Protect Core 3C</h3>
            <p class="sneaker-price">99.99$</p>
          </div>
        </div>

        <div class="sneaker-item">
          <div class="sneaker-img">
            <a href="./pages/product.html">
              <img src="img//puma-dwc 1.png" alt="Adidas Alphabounce 1M" />
            </a>
          </div>
          <div class="sneaker-desc">
            <h3 class="sneaker-title">Adidas Alphabounce 1M</h3>
            <p class="sneaker-price">99.99$</p>
          </div>
        </div>

        <div class="sneaker-item">
          <div class="sneaker-img">
            <a href="./pages/product.html">
              <img src="img/adidas-a1m 1.png" alt="Adidas Alphabounce 1M" />
            </a>
          </div>
          <div class="sneaker-desc">
            <h3 class="sneaker-title">Adidas Alphabounce 1M</h3>
            <p class="sneaker-price">99.99$</p>
          </div>
        </div>

        <div class="sneaker-item">
          <div class="sneaker-img">
            <a href="./pages/product.html">
              <img
                src="img/converse-bsb 1.png"
                alt="Converse Breakpoint Suede Blue"
              />
            </a>
          </div>
          <div class="sneaker-desc">
            <h3 class="sneaker-title">Converse Breakpoint Suede Blue</h3>
            <p class="sneaker-price">99.99$</p>
          </div>
        </div>
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
              <div class="profile-card">
                <div class="profile-img">
                  <img src="img/man1.png" alt="People" />
                </div>
                <ul class="star-list">
                  <li class="star-list-item">
                    <img src="img/Star 1.png" alt="Star" />
                  </li>
                  <li class="star-list-item">
                    <img src="img/Star 1.png" alt="Star" />
                  </li>
                  <li class="star-list-item">
                    <img src="img/Star 1.png" alt="Star" />
                  </li>
                  <li class="star-list-item">
                    <img src="img/Star 1.png" alt="Star" />
                  </li>
                  <li class="star-list-item">
                    <img src="img/Star 1.png" alt="Star" />
                  </li>
                </ul>
                <h3 class="feedback">
                  “Чудовий сервіс, найдійно та швидко.”
                </h3>
                <p class="author">Анна</p>
              </div>
              
              <div class="profile-card">
                <div class="profile-img">
                  <img src="img/man2.png" alt="People" />
                </div>
                <ul class="star-list">
                  <li class="star-list-item">
                    <img src="img/Star 1.png" alt="Star" />
                  </li>
                  <li class="star-list-item">
                    <img src="img/Star 1.png" alt="Star" />
                  </li>
                  <li class="star-list-item">
                    <img src="img/Star 1.png" alt="Star" />
                  </li>
                  <li class="star-list-item">
                    <img src="img/Star 1.png" alt="Star" />
                  </li>
                </ul>
                <h3 class="feedback">
                  “Все сподобалось.”
                </h3>
                <p class="author">Володимир</p>
              </div>

              <div class="profile-card">
                <div class="profile-img">
                  <img src="img/man3.png" alt="People" />
                </div>
                <ul class="star-list">
                  <li class="star-list-item">
                    <img src="img/Star 1.png" alt="Star" />
                  </li>
                  <li class="star-list-item">
                    <img src="img/Star 1.png" alt="Star" />
                  </li>
                  <li class="star-list-item">
                    <img src="img/Star 1.png" alt="Star" />
                  </li>
                  <li class="star-list-item">
                    <img src="img/Star 1.png" alt="Star" />
                  </li>
                  <li class="star-list-item">
                    <img src="img/Star 1.png" alt="Star" />
                  </li>
                </ul>
                <h3 class="feedback">
                  “Раджу всім, буду користуватися ще.”
                </h3>
                <p class="author">Олена</p>
              </div>
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
          <div class="sneaker-item">
            <div class="sneaker-img">
              <a href="./pages/product.html">
                <img
                  src="img/adidas-ocm 1.png"
                  alt="Adidas Originals Courtvantage Mesh"
                />
              </a>
            </div>
            <div class="sneaker-desc">
              <h3 class="sneaker-title">Adidas Originals Courtvantage Mesh</h3>
              <p class="sneaker-price">99.99$</p>
            </div>
          </div>
  
          <div class="sneaker-item">
            <div class="sneaker-img">
              <a href="./pages/product.html">
                <img src="img/adidas-oc1 1.png" alt="Adidas Original Climacool 1" />
              </a>
            </div>
            <div class="sneaker-desc">
              <h3 class="sneaker-title">Adidas Original Climacool 1</h3>
              <p class="sneaker-price">99.99$</p>
            </div>
          </div>
  
          <div class="sneaker-item">
            <div class="sneaker-img">
              <a href="./pages/product.html">
                <img src="img//puma-dwc 1.png" alt="Adidas Alphabounce 1M" />
              </a>
            </div>
            <div class="sneaker-desc">
              <h3 class="sneaker-title">Adidas Alphabounce 1M</h3>
              <p class="sneaker-price">99.99$</p>
            </div>
          </div>
  
          <div class="sneaker-item">
            <div class="sneaker-img">
              <a href="./pages/product.html">
                <img
                  src="img/converse-bsb 1.png"
                  alt="Converse Breakpoint Suede Blue"
                />
              </a>
            </div>
            <div class="sneaker-desc">
              <h3 class="sneaker-title">Converse Breakpoint Suede Blue</h3>
              <p class="sneaker-price">99.99$</p>
            </div>
          </div>
        </div>
    </section>
</div>
@endsection


