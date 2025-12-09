@php
    $websiteSections = config('websiteSections')
@endphp

<div class="footer-sitemap position-relative overflow-hidden">
            <div class="container py-4">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="Logo DC" class="z-3 position-absolute" />
                <div class="row">
                    @foreach ($websiteSections as $index => $section)
                    @if ($index != 3)
                        <div class="col">
                        <h5 class="text-white text-uppercase fw-bold">
                           {{ $section['title'] }}
                        </h5>
                        <ul class="list-unstyled">
                            @foreach ($section['content'] as $content)
                            <li>
                                <a href="{{ Vite::asset($content['link']) }}" class="text-decoration-none">
                                   {{ $content['text'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>

                        @if ($index == 0)
                        @foreach ($websiteSections as $index => $section)
                            @if ($index == 3)
                            <div class="col">
                                <h5 class="text-white text-uppercase fw-bold">
                                    {{ $section['title'] }}
                                </h5>
                                <ul class="list-unstyled">
                                    @foreach ($section['content'] as $content)
                            <li>
                                <a href="{{ Vite::asset($content['link']) }}" class="text-decoration-none">
                                   {{ $content['text'] }}
                                </a>
                            </li>
                            @endforeach
                                </ul>
                            </div>
                            @endif
                        @endforeach
                        @else <p></p>
                        @endif
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>