@extends('admin.layout')
@section('content')
    <div class="col-lg-12">
        <h3 class="text-center">Thông tin cá nhân</h3>
    </div>
    {!! Form::model($info, ['url' => route('admin.update'), 'files' => true]) !!}
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    {{ Form::label('role', 'Quyền') }}
                    {!! Form::text('role', ($info->role == -1) ? 'Super Admin' : 'Admin', ['class' => 'form-control', 'readonly' => true]) !!}
                </div>
                <div class="form-group">
                    {{ Form::label('password', 'Mật khẩu') }}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {{ Form::label('name', 'Họ tên') }}
                    {!! Form::text('name', $info->name, ['class' => 'form-control', 'required' => true]) !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    {{ Form::label('email', 'E-mail') }}
                    {!! Form::email('email', $info->email, ['class' => 'form-control', 'required' => true]) !!}
                </div>
                <div class="form-group">
                    {{ Form::label('phone', 'Số điện thoại') }}
                    {!! Form::text('phone', $info->phone, ['class' => 'form-control', 'required' => true]) !!}
                </div>
                <div class="form-group">
                    {{ Form::label('address', 'Địa chỉ') }}
                    {!! Form::text('address', $info->address, ['class' => 'form-control', 'required' => true]) !!}
                </div>
            </div>
        </div>
        <div class="col-lg-6 offset-3">
            {!! Form::submit('Cập nhật thông tin cá nhân', ['class' => 'btn btn-primary btn-block']) !!}
        </div>
    {!! Form::close() !!}
@endsection
