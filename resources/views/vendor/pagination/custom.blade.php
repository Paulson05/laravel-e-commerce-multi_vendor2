
@if ($paginator->hasPages())
<div class="shop_pagination_area mt-30">
    <nav aria-label="Page navigation">
        <ul class="pagination pagination-sm justify-content-center">

            @if ($paginator->onFirstPage())
                <li class="disabled page-item" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a class="page-link" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active" aria-current="page">

                                    <a class="page-link" href="#">{{ $page }}</a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link"  href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach


                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a  class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                    </li>
                @else
                    <li class="disabled page-item" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </li>
                @endif


        </ul>
    </nav>
</div>
@endif
