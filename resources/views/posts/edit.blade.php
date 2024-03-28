<x-layouts.main>
    <x-slot:title>
        Postni o'zgartirish #{{ $post->id }}
    </x-slot:title>
    <x-page-header>
        Postni o'zgartirish #{{ $post->id }}
    </x-page-header>
    <div class="container-fluid py-5">
        <div class="container mr-1 d-flex">
            <div>
                <div class="row align-items-end mb-4">
                    <div class="col-lg-6">
                        <h1 class=" mb-3 text-secondary font-weight-semi-bold">Postni o'zgartirish</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 mb-5 mb-lg-0">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form action="{{ route('posts.update', ['post' => $post->id]) }}"
                                onsubmit="return confirm('Rostdan xam o\'zgartirish xoxlaysizmi?')"
                                method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-row mb-4">
                                    <div class="col-sm-6 control-group">
                                        <label for="">Yangilik nomi
                                            <input type="text" class="form-control p-4" value="{{ $post->title }}"
                                                name="title" placeholder="yangilik nomi"
                                                data-validation-required-message="yangilik turi" />
                                        </label>
                                        @error('title')
                                            <p class="help-block text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 control-group">
                                        <label for="">chegirma oxirgi muxlati
                                            <input type="date" class="form-control p-4" name="deadline"
                                                value="{{ $post->deadline }}" placeholder="qachongacha amal qiladi"
                                                data-validation-required-message="oxirgi kun qaysi" />
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="col-sm-6 control-group">
                                        <label for="">chegirma foizi
                                            <input type="number" class="form-control p-4"
                                                value="{{ $post->discount }} " name="discount"
                                                placeholder="chegirma foizi"
                                                data-validation-required-message="yangilik turi" />
                                        </label>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="col-sm-6 control-group">
                                        <label for="">Rasm
                                            <input type="file" class="form-control p-4" value="{{ $post->photo }}"
                                                name="photo" data-validation-required-message="rasm" />
                                        </label>
                                        @error('photo')
                                            <p class="help-block text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="control-group mb-4">
                                    <input type="text" class="form-control p-4" value="{{ $post->short_content }}"
                                        name="short_content" placeholder="Qisqa malumot "
                                        data-validation-required-message="Please enter a subject" />
                                    @error('content')
                                        <p class="help-block text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="control-group mb-4">
                                    <textarea class="form-control p-4" rows="6" value="{{ $post->content }}" name="content"
                                        placeholder="toliq malumot" data-validation-required-message="Please enter your message"></textarea>
                                    @error('short_content')
                                        <p class="help-block text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="flex">
                                    <button class="btn btn-success py-3 px-5" type="submit"
                                        id="sendMessageButton">Saqlash</button>
                                    <a href="{{ route('posts.show', ['post'=> $post->id]) }}" class="btn btn-danger py-3 px-5"
                                        id="sendMessageButton">Bekor qilish</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4 mt-5 mt-lg-0">
                <div class="d-flex flex-column text-center rounded mb-5 py-5 px-4">
                    <button class="btn btn-sm btn-outline-danger" type="submit">
                       X
                    </button>
                    <img style="width: 300px; height: 350px; object-fit: cover;"
                    src="{{ asset('storage/' . $post->photo) }}" alt="rasm">
                </div>
            </div> --}}
        </div>

    </div>
</x-layouts.main>
