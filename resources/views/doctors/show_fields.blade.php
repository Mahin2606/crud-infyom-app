<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $doctor->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $doctor->email }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $doctor->phone }}</p>
</div>

<!-- Dob Field -->
<div class="col-sm-12">
    {!! Form::label('dob', 'Dob:') !!}
    <p>{{ $doctor->dob }}</p>
</div>

<!-- Gender Field -->
<div class="col-sm-12">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $doctor->gender }}</p>
</div>

<!-- Country Field -->
<div class="col-sm-12">
    {!! Form::label('country', 'Country:') !!}
    <p>{{ $doctor->country }}</p>
</div>

<!-- Has Experience Field -->
<div class="col-sm-12">
    {!! Form::label('has_experience', 'Has Experience:') !!}
    <p>{{ $doctor->has_experience }}</p>
</div>

<!-- No Of Years Field -->
<div class="col-sm-12">
    {!! Form::label('no_of_years', 'No Of Years:') !!}
    <p>{{ $doctor->no_of_years }}</p>
</div>

<!-- Bio Field -->
<div class="col-sm-12">
    {!! Form::label('bio', 'Bio:') !!}
    <p>{{ $doctor->bio }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $doctor->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $doctor->updated_at }}</p>
</div>

