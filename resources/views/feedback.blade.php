@extends('layouts.app')

@section('content')
<main class="container about-page">
      <h2>Відгуки</h2>
      <div class="about-page-container">
            <div class="card-body">
                <form method="POST" action="/feedback">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label">{{ __('Ваше ім\'я') }}</label>

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label">{{ __('Електронна адреса') }}</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" readonly required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="stars" class="col-md-4 col-form-label">{{ __('Кількість зірок ') }}<output id="amount" name="amount" for="stars">5</output></label>

                        <div class="col-md-12">
                            <input id="stars" type="range" class="custom-range" class="form-control @error('stars') is-invalid @enderror" name="stars"  min="1" max="5" step="1" value="5" required oninput="amount.value=stars.value">

                            @error('stars')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="feedback" class="col-md-4 col-form-label">{{ __('Відгук') }}</label>

                        <div class="col-md-12">
                            <textarea id="feedback" type="text" class="form-control @error('feedback') is-invalid @enderror" name="feedback" style="resize: none;" required></textarea>

                            @error('feedback')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-8">
                            <button type="submit" class="default-button">
                                {{ __('Відправити') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="all-feedbacks">
                <h2>
                    Усі відгуки
                </h2>
                <div class="feedbacks">
                    @foreach($feedbacks as $feedback)
                    <div class="profile-card profile-card--border">
                        <div class="profile-card-date">
                            {{ $feedback->created_at }}
                        </div>
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
    </main>
@endsection