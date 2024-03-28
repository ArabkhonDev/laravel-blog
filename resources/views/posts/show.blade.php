<x-layouts.main>
    <x-slot:title>
        title
    </x-slot:title>
    <x-page-header>
        Post - {{ $post->id }}
    </x-page-header>
    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @auth
                        @canany(['update-post', 'delete-post'], $post)
                            
                            <div class="row mb-4">
                                <a class="btn mr-2 btn-sm btn-outline-dark"
                                    href="{{ route('posts.edit', ['post' => $post->id]) }}">O'zgartirish</a>
                                <form action="{{ route('posts.destroy', ['post' => $post->id]) }}"
                                    onsubmit="return confirm('Rostdan xam o\'chirish xoxlaysizmi?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" type="submit">
                                        O'chirish
                                    </button>
                                </form>
                            </div>
                        @endcanany
                    @endauth
                    <div class="mb-5">
                        <div class="mb-2" style="width: 640px">
                            @foreach ($post->tags as $tag)
                                <a class="text-secondary text-uppercase font-weight-medium">{{ $tag->name }}</a>
                                <span class="text-primary px-2">|</span>
                            @endforeach
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-secondary text-uppercase font-weight-medium">{{ $post->created_at }}</p>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="p-2 bg-secondary text-white rounded">{{ $post->category->name }}</p>
                        </div>
                        <h1 class="section-title mb-3">{{ $post->title }}</h1>
                    </div>

                    <div class="mb-5">
                        <img class="img-fluid rounded w-25 h-50 mb-4" src="{{ asset('storage/' . $post->photo) }}"
                            alt="Image">
                        <p>
                            {{ $post->content }}
                        </p>

                    </div>

                    <div class="mb-5 mt-2">
                        <h3 class="mb-4 section-title">{{ $post->comments()->count() }} - Comment</h3>
                        @foreach ($post->comments as $comment)
                            <div class="media mb-4">
                                <img src="/img/user.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1"
                                    style="width: 45px;">
                                <div class="media-body">
                                    <h6>{{ $comment->user->name }} <small></small></h6>
                                    <p>{{ $comment->body }}</p>
                                    <h6>
                                        <i>{{ $comment->created_at }}</i>
                                    </h6>
                                    <button class="btn btn-sm btn-light">Reply</button>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="bg-light rounded p-5">
                        <h3 class="mb-4 section-title">Izoh qoldirish</h3>
                        @auth
                            <form action="{{ route('comments.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="message">Habar </label>
                                    <textarea id="message" name="body" cols="30" rows="5" class="form-control"></textarea>
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Leave Comment" class="btn btn-primary">
                                </div>
                            </form>
                        @else
                            <div class="link">
                                Izoh qoldirish uchun <a class="btn btn-primary text-white"
                                    href="{{ route('login') }}">Kiring</a>
                            </div>
                        @endauth
                    </div>


                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="d-flex flex-column text-center bg-secondary rounded mb-5 py-5 px-4">
                        <img src="/img/user.jpg" class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px;">
                        <h3 class="text-white mb-3">John Doe</h3>
                        <p class="text-white m-0">Conset elitr erat vero dolor ipsum et diam, eos dolor lorem ipsum,
                            ipsum
                            ipsum sit no ut est. Guber ea ipsum erat kasd amet est elitr ea sit.</p>
                    </div>
                    <div class="mb-5">
                        <div class="w-100">
                            <div class="input-group">
                                <input type="text" class="form-control" style="padding: 25px;" placeholder="Keyword">
                                <div class="input-group-append">
                                    <button class="btn btn-primary px-4">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <h3 class="mb-4 section-title">Ketgoriyalar</h3>
                        <ul class="list-inline m-0">
                            @foreach ($categories as $category)
                                <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-secondary mr-2"></i>{{ $category->name }}</a>
                                    <span
                                        class="badge badge-primary badge-pill">{{ $category->posts()->count() }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="mb-5">
                        <h3 class="mb-4 section-title">Tag Cloud</h3>
                        <div class="d-flex flex-wrap m-n1">
                            @foreach ($tags as $tag)
                                <a class="btn btn-outline-secondary m-1">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-5">
                        <h3 class="mb-4 section-title">Recent Post</h3>
                        @foreach ($recent_posts as $post)
                            <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                                <img class="img-fluid rounded" src="{{ asset('storage/' . $post->photo) }}"
                                    style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                <div class="d-flex flex-column pl-3">
                                    <a class="text-dark mb-2"
                                        href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a>
                                    <div class="d-flex">
                                        <small><a class="text-secondary text-uppercase font-weight-medium"
                                                href="">Admin</a></small>
                                        <small class="text-primary px-2">|</small>
                                        <small><a class="text-secondary text-uppercase font-weight-medium"
                                                href="">{{ $post->tag }}</a></small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->
</x-layouts.main>
