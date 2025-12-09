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

                        {{-- {(index == 0) ? (
                            websiteSections.map((section, index) => {
                                if (index == 3) {
                                    return (
                                        <div class="col" key={section.id}>
                                            <h5 class="text-white text-uppercase fw-bold">
                                                {section.title}
                                            </h5>
                                            <ul class="list-unstyled">
                                                {
                                                    section.content.map((item) => {
                                                        return (
                                                            <li key={item.id}>
                                                                <a href={item.link} class="text-decoration-none">
                                                                    {item.text}
                                                                </a>
                                                            </li>
                                                        )
                                                    })
                                                }
                                            </ul>
                                        </div>
                                    )
                                }
                            })
                        ) : ''} --}}
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>