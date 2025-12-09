@php
    $comics = config('comics')
@endphp

<div class="container d-flex align-items-center h-100 pb-2 pt-4 position-relative flex-column justify-content-center gap-3">
                <div class='text-white text-uppercase fw-bold position-absolute top-0 translate-middle current-series py-2 px-3'>
                    Current series
                </div>
                <div class="row row-cols-sm-2 row-cols-md-4 row-cols-lg-6 h-100 justify-content-around py-3 row-gap-3">
                    @foreach ($comics as $comic)
                    <ComicCard key={id} src={thumb} alt={title} spanContent={series} />
                    @endforeach
                </div>
                <button class="border-0 rounded-0 text-white text-uppercase fw-bold py-2 px-4 mb-4">
                    Load more
                </button>
            </div>