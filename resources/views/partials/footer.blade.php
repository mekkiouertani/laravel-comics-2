{{-- SECTION BLUE ICONS --}}
<section id="blue-icons">
    <div id="all-top-main">
        <section id="bottom" class="p-3">
            <div class="container">
                {{--  <ul class="w-100">
                    @foreach ($blueicons as $item)
                        <li class="text-uppercase d-flex align-items-baseline align-content-center ">
                            <div class="box-item-logo">
                                <img src="{{ Vite::asset($item['img']) }}" alt="{{ $item['text'] }}" class="w-100" />
                            </div>
                            <p class="px-3 fs-6 fw-bold mt-4">{{ $item['text'] }}</p>
                        </li>
                    @endforeach
                </ul> --}}
            </div>
        </section>
    </div>
</section>
{{-- FOOTER LIST UL --}}
<section id="foot">
    <div class="container d-flex justify-content-between ">
        <div class="left">
            {{-- <ul class="mt-1 d-flex pb-5 " id="foot2">
                @foreach ($footer as $item)
                    <li id="lifoot">
                        <h4 class="text-uppercase"> {{ $item['title'] }}</h4>
                        <ul class="text-secondary list-unstyled ">
                            @foreach ($item['listItems'] as $listItem)
                                <li> {{ $listItem }}</li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul> --}}
        </div>
        {{--   <div class="right">
            <img src="{{ Vite::asset('../resources/img/dc-logo-bg.png') }}" alt="">
        </div> --}}
    </div>
</section>
