@extends('layouts.app', ['title' => 'Wellcome'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-12 mx-auto py-5">
                <div class="card card-register">
                    <div class="card-header">
                        <div class="card-title">Register</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register.store') }}" method="POST">
                            @csrf
                            <div class="d-flex gap-3 flex-column">
                                <div>
                                    <label class="form-label" for="nama">Nama</label>
                                    <input placeholder="Ketikan nama anda" value="{{ old('nama') }}" name="nama" @class(['is-invalid' => $errors->has('nama'), 'form-control' => true])></input>
                                    @error('nama')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div>
                                <label class="form-label" for="email">Email</label>
                                <input placeholder="Ketikan email anda" value="{{ old('email') }}" name="email" @class(['is-invalid' => $errors->has('email'), 'form-control' => true])></input>
                                @error('email')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div>
                            <label class="form-label" for="nama">Password</label>
                            <input placeholder="Ketikan password baru anda" name="password" type="password" @class(['is-invalid' => $errors->has('password'), 'form-control' => true])></input>
                            @error('password')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                    </div>
                    <button class="btn btn-primary col-12">Register</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
