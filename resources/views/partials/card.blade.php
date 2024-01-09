<section id="card" class="bg-black">
    <div class="container py-5">
        <div class="row gx-6 gy-3 align-content-center">
            @foreach ($comics as $item)
                <div class="col-12 col-md-4 col-lg-3" v-for="(card, index) in cards" :key="index">
                    <a href="{{ route('comics.show', $item->id) }}" class="btn bnt-primary">
                        <div class="cards">
                            <div class="img-box">
                                <img src="{{ $item['thumb'] }}" :alt="title" />
                            </div>
                            <h5 class="text-white py-3 ">{{ $item['title'] }}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
