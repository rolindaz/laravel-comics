@php
$navitems = config('navitems')
@endphp

        
        <header class='bg-white text-black text-uppercase'>
            <div class="container h-100 d-flex justify-content-between align-items-center">
                <div class="logo">
                    <Logo />
                </div>
                <nav class='h-100'>
                    <ul class='h-100 d-flex gap-4 list-unstyled mb-0 align-items-center'>
                        @foreach ($navitems as $navitem)
                        <li class='h-100' {{-- key={item.id} --}}>
                            <a class='h-100 d-block py-3 fw-bold text-decoration-none' {{-- status={item.dataStatus} --}} href="#" >
                               {{ $navitem['text'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </header >