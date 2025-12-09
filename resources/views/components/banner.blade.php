    @php
        $iconcols = config('iconcols')
    @endphp
    
    <div class="banner text-white text-uppercase">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-around px-3">
                    @foreach ($iconcols as $iconcol)
                    <div class="col text-align-center">
                        <img class="h-100 me-2" src="{{ Vite::asset($iconcol['image']) }}" alt="{{ $iconcol['title'] }}" />
                        <span class="align-middle">
                           {{ $iconcol['title'] }}
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>