<x-layouts.main>
    <x-slot:title>
        Yangilik qo-shish - Mehrigiyo
    </x-slot:title>
    <x-page-header>
        Yangilik qo'shish
    </x-page-header>
    <div class="container-fluid py-5">
        <div class="container mr-4">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h1 class=" mb-3 text-secondary font-weight-semi-bold">Yangilik qo'shish</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="control-group mb-4">
                                    <input type="text" class="form-control p-4" value="{{ old('title') }}"
                                        name="title" placeholder="Yangilik nomi"
                                        data-validation-required-message="yangilik turi" />
                                @error('title')
                                    <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-row mb-4">
                                <div class="col-sm-6 control-group">
                                    <label for="">chegirma oxirgi muxlati
                                        <input type="date" class="form-control p-4" name="deadline"
                                            value="{{ old('deadline') }}" placeholder="qachongacha amal qiladi"
                                            data-validation-required-message="oxirgi kun qaysi" />
                                    </label>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <label for="">kategoriyalardan birini
                                        <select name="category_id" class="p-2 px-4 rounded">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <label for="">Yonalishlardan birini
                                        <select name="tags[]" class="p-2 px-4 rounded" multiple>
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="col-sm-6 control-group">
                                    <label for="">chegirma foizi
                                        <input type="number" class="form-control p-4" value="{{ old('discount') }} "
                                            name="discount"
                                            data-validation-required-message="yangilik turi" />
                                    </label>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <label for="">Rasm
                                        <input type="file" class="form-control p-4" value="{{ old('photo') }}"
                                            name="photo" data-validation-required-message="rasm" />
                                    </label>
                                    @error('photo')
                                        <p class="help-block text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group mb-4">
                                <input type="text" class="form-control p-4" value="{{ old('short_content') }}"
                                    name="short_content" placeholder="Qisqa malumot "
                                    data-validation-required-message="Please enter a subject" />
                                @error('content')
                                    <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group mb-4">
                                <textarea class="form-control p-4" rows="6" value="{{ old('content') }}" name="content"
                                    placeholder="toliq malumot" data-validation-required-message="Please enter your message"></textarea>
                                @error('short_content')
                                    <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit"
                                    id="sendMessageButton">Yangilik qo'shish</button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <iframe style="width: 100%; height: 100%; object-fit: cover;"
                            src="https://www.google.com/maps/place/MEHRIGIYO/@40.536939,70.987686,16z/data=!4m5!3m4!1s0x0:0x603cc83586e778d2!8m2!3d40.5369298!4d70.9876071?hl=ru&shorturl=1"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</x-layouts.main>
