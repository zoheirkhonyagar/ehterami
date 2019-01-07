<section class="section section-md bg-white">
    <div class="shell shell-wide">
        <div class="range range-md-center">
            <div class="cell-lg-11">
                <!-- Section Header-->
                <div class="section__header">
                    <h2>اخبار</h2>
                    <div class="section__header-element"><a class="link link-arrow" href="{{ route('news-index') }}"><span>اخبار ما را بخوانید</span></a></div>
                </div>
                <div class="range range-30 range-flex">
                    @foreach ($posts as $post)
                        <div class="cell-sm-12 cell-lg-4">
                            <article class="post-modern">
                                <a class="post-modern__image-wrap" href="{{ route('show-single-post' , [ 'id' => $post->id ]) }}">
                                    <img class="post-modern__image" src="{{ asset('uploads') . '/' . $post->image }}" alt="{{ $post->title }}">
                                </a>
                                <div class="post-modern__main">
                                    <p class="post-modern__title"><a href="{{ route('show-single-post' , [ 'id' => $post->id ]) }}">{{ $post->title }}</a></p>
                                    {!! substr($post->body , 0 , 351) . ' ...' !!}
                                    <ul class="post-modern__meta">
                                        <li>
                                            <span class="icon icon-primary mdi mdi-clock"></span>
                                            <a href="{{ route('show-single-post' , [ 'id' => $post->id ]) }}">{{ jdate($post->created_at)->format('%d %B %Y') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
