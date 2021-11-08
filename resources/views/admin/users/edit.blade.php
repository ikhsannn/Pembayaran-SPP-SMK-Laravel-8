@extends('layouts.stisla.index', ['title' => 'Ubah Data ' . $user->name, 'section_header' => 'Ubah Data ' .
$user->name])

@section('content')
@include('layouts.flash-messages')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <form action="{{ route('admin.siswa.update', $user->id) }}" method="POST">
                @method('PUT')
                @csrf
                <table class="table">
                    <tr>
                        <td style="width: 145px;">NIS</td>
                        <td style="width: 10px;">:</td>
                        <td class="text-wrap">
                            <input type="text"
                                class="form-control{{ $errors->has('student_identification_number') ? ' is-invalid' : '' }}"
                                name="student_identification_number" id="student_identification_number"
                                value="{{ $user->student_information->student_identification_number }}" required>

                            @if($errors->has('student_identification_number'))
                            <div class="invalid-feedback font-weight-bold d-block">
                                {{ $errors->first('student_identification_number') }}
                            </div>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td class="text-wrap">
                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                name="name" id="name" value="{{ $user->name }}" required>

                            @if($errors->has('name'))
                            <div class="invalid-feedback font-weight-bold d-block">
                                {{ $errors->first('name') }}
                            </div>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td class="text-wrap">
                            <select class="form-control select2-select" name="gender" id="gender" required>
                                <option selected>Pilih Jenis Kelamin..</option>
                                <option value="Laki-laki"
                                    {{ $user->student_information->gender === 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                                </option>
                                <option value="Perempuan"
                                    {{ $user->student_information->gender === 'Perempuan' ? 'selected' : '' }}>Perempuan
                                </option>
                            </select>

                            @if($errors->has('gender'))
                            <div class="invalid-feedback font-weight-bold d-block">
                                {{ $errors->first('gender') }}
                            </div>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td class="text-wrap">
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                name="email" id="email" value="{{ $user->email }}" required>

                            @if($errors->has('email'))
                            <div class="invalid-feedback font-weight-bold d-block">
                                {{ $errors->first('email') }}
                            </div>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td class="text-wrap">
                            <input type="password"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                id="password" value="{{ $user->password }}" required>

                            @if($errors->has('password'))
                            <div class="invalid-feedback font-weight-bold d-block">
                                {{ $errors->first('password') }}
                            </div>
                            @endif
                        </td>
                    </tr>
                </table>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <table class="table">
                <tr>
                    <td style="width: 145px;">Kelas</td>
                    <td style="width: 10px;">:</td>
                    <td class="text-wrap">
                        <select class="form-control select2-select" name="student_class_id" id="student_class_id"
                            required>
                            <option value="" selected>Pilih Kelas..</option>
                            @foreach($student_classes as $key => $student_class)
                            <option value="{{ $student_class->id }}"
                                {{ $user->student_information->student_class_id === $student_class->id ? 'selected' : '' }}>
                                {{ $student_class->name }}</option>
                            @endforeach
                        </select>

                        @if($errors->has('student_class_id'))
                        <div class="invalid-feedback font-weight-bold d-block">
                            {{ $errors->first('student_class_id') }}
                        </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Jenis SPP</td>
                    <td>:</td>
                    <td class="text-wrap">
                        <select class="form-control select2-select" name="educational_guidance_donation_id"
                            id="educational_guidance_donation_id" required>
                            <option value="" selected>Pilih SPP..</option>
                            @foreach($educational_guidance_donations as $key => $educational_guidance_donation)
                            <option value="{{ $educational_guidance_donation->id }}"
                                {{ $user->student_information->educational_guidance_donation_id === $educational_guidance_donation->id ? 'selected' : '' }}>
                                {{ $educational_guidance_donation->name }}</option>
                            @endforeach
                        </select>

                        @if($errors->has('educational_guidance_donation_id'))
                        <div class="invalid-feedback font-weight-bold d-block">
                            {{ $errors->first('educational_guidance_donation_id') }}
                        </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Tahun Ajaran</td>
                    <td>:</td>
                    <td class="text-wrap">
                        <input type="number" class="form-control{{ $errors->has('school_year') ? ' is-invalid' : '' }}"
                            name="school_year" id="school_year" value="{{ $user->student_information->school_year }}"
                            required>

                        @if($errors->has('school_year'))
                        <div class="invalid-feedback font-weight-bold d-block">
                            {{ $errors->first('school_year') }}
                        </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Nomor Handphone</td>
                    <td>:</td>
                    <td class="text-wrap">
                        <input type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}"
                            name="phone_number" id="phone_number" value="{{ $user->student_information->phone_number }}"
                            required>

                        @if($errors->has('phone_number'))
                        <div class="invalid-feedback font-weight-bold d-block">
                            {{ $errors->first('phone_number') }}
                        </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td class="text-wrap">
                        <textarea class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address"
                            id="address" rows="3" style="height: 100px;"
                            required>{{ $user->student_information->address }}</textarea>

                        @if($errors->has('address'))
                        <div class="invalid-feedback font-weight-bold d-block">
                            {{ $errors->first('address') }}
                        </div>
                        @endif
                    </td>
                </tr>
            </table>
        </div>

        <div>
            <a href="{{ route('admin.siswa.index') }}" class="btn btn-primary">Kembali</a>
            <button type="submit" class="btn btn-success text-white">Simpan Perubahan</button>
        </div>

        </form>

    </div>
</div>
@endsection