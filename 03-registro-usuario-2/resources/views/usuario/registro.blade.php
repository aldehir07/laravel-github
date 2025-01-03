@extends("plantilla.template")
@section("titulo", "Registro de Usuario")
@section("contenido")

    <div id="contact-us" class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div class="row gy-5 gx-sm-5">
                <div class="col-12 col-xl-5 pt-4">
                    <div class="mx-auto max-w-2xl">
                        <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                            Registrate aqui!
                        </h2>
                        <p class="m-0 mt-2 text-body-emphasis text-3xl tracking-tight fw-bold">
                            Ingresa tus datos!
                        </p>
                    </div>

                    <div class="mx-auto max-w-2xl mt-6">
                        {{-- INICIO DEL FORMULARIO --}}
                        <form class="row g-4 needs-validation" id="myForm" novalidate action="{{route('usuario.guardar')}}" method="post">
                            @csrf
                            @if(session('status'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Excelente!</strong>{{session('status')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="col-md-6">
                                <label for="nameForm" class="form-label text-sm">
                                    Nombre Completo
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" name="nombre" value="{{old('nombre')}}" id="nameForm" required>
                                <div id="textHelp" class="form-text">{{$errors->first("nombre")}}</div>
                            </div>

                            <div class="col-md-6">
                                <label for="emailForm" class="form-label text-sm">
                                    Correo Electronico
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="email" class="form-control form-control-sm" name="email" value="{{old('email')}}" id="emailForm" required>
                                <div id="textHelp" class="form-text">{{$errors->first("email")}}</div>
                            </div>

                            <div class="col-md-6">
                                <label for="phoneForm" class="form-label text-sm">
                                    Password
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="password" class="form-control form-control-sm" name="password" value="{{old('password')}}" id="phoneForm" required>
                                <div id="textHelp" class="form-text">{{$errors->first("password")}}</div>
                            </div>

                            <div class="col-md-6">
                                <label for="subjectForm" class="form-label text-sm">
                                    Cofirmar Password
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="password" class="form-control form-control-sm" name="password_confirmation" id="subjectForm" required>
                                <div id="textHelp" class="form-text">{{$errors->first("password_confirmed")}}</div>
                            </div>

                            <div class="col-12 text-center pt-3">
                                <button type="submit" class="btn btn-lg btn-primary text-white text-sm fw-semibold" id="sendMessage">
                                    Enviar Datos
                                </button>
                            </div>

                            <!-- Alert message  -->
                            <div class="col-12" id="yourMessageIsSent"></div>
                        </form>
                    </div>
                </div>

                <div class="d-none d-xl-block col-12 col-xl-7" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                    <div class="h-100 position-relative ms-xxl-5">
                        <div class="position-absolute top-0 end-0 bottom-0 start-0 z-n1 rounded-5">
                            <img src="{{asset('./assets/img/bg/bg7.jpg')}}" class="w-100 h-100 rounded-3 object-fit-cover" loading="lazy" alt="Image description">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
