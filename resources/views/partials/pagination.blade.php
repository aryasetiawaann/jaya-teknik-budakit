  @if ($paginator->hasPages())

        <ul class="pagination modal-1">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li><a class="prev disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">&laquo</a></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}#produk" rel="prev" aria-label="@lang('pagination.previous')" class="prev">&laquo</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><a>{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a class="active">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}#produk">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}#produk" class="next">&raquo;</a></li>
            @else
                <li><a class="next disabled">&raquo;</a></li>
            @endif
        </ul>

@endif
