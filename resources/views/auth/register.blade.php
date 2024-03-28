<x-layouts.auth>


    <div class="container ">
        <div class="row">
            <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3 mt-4">
                <div class="panel border bg-white">
                    <div class="panel-heading">
                        <h3 class="pt-3 font-weight-bold">Ro'yxatdan o'tish</h3>
                    </div>
                    <div class="panel-body p-3">
                        <form action="{{ route('register.store') }}" method="POST">
                            @csrf
                            <div class="form-group py-2">
                                <div class="input-field w-100">
                                    <span class="far fa-user p-2"></span>
                                    <input type="text" name="name" placeholder="First Name" required />
                                </div>
                            </div>
                            <div class="form-group py-2">
                                <div class="input-field w-100">
                                    <span class="far fa-user p-2"></span>
                                    <input type="text" name="email" placeholder="Email" required />
                                </div>
                            </div>
                            <div class="form-group py-1 pb-2">
                                <div class="input-field w-100">
                                    <span class="fas fa-lock px-2"></span>
                                    <input type="password" name="password" placeholder="Enter your Password" required />
                                </div>
                            </div>
                            <div class="form-group py-1 pb-2">
                                <div class="input-field w-100">
                                    <span class="fas fa-lock px-2"></span>
                                    <input type="password" name="confirm_password" placeholder="Confirm your Password"
                                        required />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-3">Ro'yxatdan o'tish</button>
                            <div class="text-center pt-4 text-muted">
                                Ro'yxatdan o'tganmisiz? <a href="{{ route('login') }}">Kirish</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.auth>
