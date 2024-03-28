<x-layouts.main>
    <x-slot:title>

    </x-slot:title>
    <x-page-header>
        Blog
    </x-page-header>
    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Oxirgi yangiliklar</h6>
                    <h1 class="section-title mb-3">Oxirgi yangiliklarimiz</h1>
                    <a class="btn btn-sm btn-primary py-2" href="{{ route('posts.create') }}">Yangilik qoshish</a>
                </div>
           
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-5"  >
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded w-50 h-50" src="{{ asset('storage/' . $post->photo) }}"
                                alt="post image">
                            <div class="blog-date rounded bg-primary text-white">{{ $post->discount }}
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <span class="font-weight-bold mb-n1">{{ $post->created_at }}</span>
                        </div>
                        <div class="mb-2" style="width: 290px">
                            @foreach ($post->tags as $tag)
                                <a class="text-secondary text-uppercase font-weight-medium">{{$tag->name}}</a>
                                <span class="text-primary px-2">|</span>
                            @endforeach
                        </div>
                        <div class="d-flex mb-2">
                            <p class="p-2 bg-secondary text-white rounded">{{ $post->category->name }}</p>
                        </div>
                        <h5 class="font-weight-medium mb-2">{{ $post->title }}</h5>
                        <p class="mb-4">{{ $post->short_content }}</p>
                        <a class="btn btn-sm btn-primary py-2" href="{{ route('posts.show', [$post->id]) }}">ko'proq
                            o'qish</a>
                    </div>
                @endforeach
            </div>
            {{ $posts->links() }}
        </div>
    </div>
    <!-- Blog End -->
</x-layouts.main>
