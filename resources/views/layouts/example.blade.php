
            <form method="GET" action="registrarCliente">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

                    <div class="col-md-6">
                        <input id="first_name" type="text" class="form-control name="name">
                    </div>
                </div>

                
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                    <div class="col-md-6">
                        <input id="last_name" type="text" class="form-control name="name">
                    </div>
                </div>




                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                   
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                    <div class="col-md-6">
                        <input id="phone_number" type="text" class="form-control name="name">
                    </div>
                </div>

                
                <input id="id_category_customer" type="text" class="form-control name="name">



                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Registrar') }}
                        </button>
                    </div>
                </div>
            </form>