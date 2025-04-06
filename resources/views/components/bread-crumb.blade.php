<div>
   
    @php
    $segments = request()->segments();
    $breadcrumbs = generateBreadcrumbs($segments);
@endphp

<section aria-label="breadcrumb mt-5" >
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        @foreach ($breadcrumbs as $breadcrumb)
            <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}">
                @if (!$loop->last)
                    <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                @else
                    {{ $breadcrumb['name'] }}
                @endif
            </li>
        @endforeach
    </ol>
</section >

</div>