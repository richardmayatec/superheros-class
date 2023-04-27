@include('shared.head')

<div class="container py-4">
    <div class="row mb-4">
        <div class="col text-center">
            <header class="py-4 bg-primary">
                <h1 class="mb-0 text-white">{{ $page_title }}</h1>
            </header>
        </div>
    </div>
    
    @yield('botones')
    
    @yield('content')
</div>

@include('shared.footer')