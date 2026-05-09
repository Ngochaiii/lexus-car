@isset($breadcrumbs)
    @if(is_array($breadcrumbs) && count($breadcrumbs) > 0)
        <section class="breadcrumb-section" aria-label="Breadcrumb">
            <div class="container">
                <ol class="breadcrumb-custom">
                    @foreach($breadcrumbs as $i => $b)
                        @php $isLast = $i === count($breadcrumbs) - 1; @endphp
                        @if($isLast)
                            <li class="current" aria-current="page">{{ $b['name'] }}</li>
                        @else
                            <li>
                                <a href="{{ $b['url'] ?? '#' }}">
                                    @if($i === 0)<i class="bi bi-house"></i> @endif{{ $b['name'] }}
                                </a>
                            </li>
                            <li class="sep" aria-hidden="true"><i class="bi bi-chevron-right"></i></li>
                        @endif
                    @endforeach
                </ol>
            </div>
        </section>
    @endif
@endisset
