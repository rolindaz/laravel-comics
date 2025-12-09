@php
    $socialIcons = config('socialicons')
@endphp

<div class="footer-cta text-uppercase py-2">
            <div class="container h-100 d-flex justify-content-between align-items-center">
                <button class="btn border-2 rounded-0 text-uppercase text-white fw-bold">
                    Sign-up now!
                </button>
                <div class="d-flex gap-4 align-items-center">
                    <span class="text-uppercase fw-bold">
                        Follow us
                    </span>
                    <div class="d-flex gap-3">
                        @foreach ($socialIcons as $socialIcon)
                        <img src="{{ Vite::asset($socialIcon['image']) }}" alt="{{ $socialIcon['title'] }}" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>