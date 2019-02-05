<div class="section-layout-aside">
    @foreach($slogans as $slogan)
        <div class="section-layout-aside__item">
            <a class="thumb-modern" href="#"><img class="thumb-modern__image" src="{{ asset('uploads') . '/' . $slogan->image }}" alt="" width="538" height="200">
                <div class="thumb-modern__caption">
                    <p class="thumb-modern__title">{{ $slogan->title }}</p>
                </div>
            </a>
        </div>
    @endforeach
</div>