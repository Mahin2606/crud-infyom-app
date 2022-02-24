<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 25]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Dob:') !!}
    {!! Form::text('dob', null, ['class' => 'form-control','id'=>'dob']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dob').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Gender Field -->
<div class="form-group col-sm-12">
    {!! Form::label('gender', 'Gender', ['class' => 'form-check-label']) !!}
    <label class="form-check">
    {!! Form::radio('gender', "male", null, ['class' => 'form-check-input']) !!} Male
</label>

<label class="form-check">
    {!! Form::radio('gender', "female", null, ['class' => 'form-check-input']) !!} Female
</label>

</div>


<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::select('country', ['USA' => 'USA', 'UK' => 'UK', 'Japan' => 'Japan', 'Canada' => 'Canada', 'Bangladesh' => 'Bangladesh'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Has Experience Field -->
<div class="form-group col-sm-12">
    {!! Form::label('has_experience', 'Has Experience', ['class' => 'form-check-label']) !!}
    <label class="form-check">
    {!! Form::radio('has_experience', "1", null, ['class' => 'form-check-input']) !!} Yes
</label>

<label class="form-check">
    {!! Form::radio('has_experience', "0", null, ['class' => 'form-check-input']) !!} No
</label>

</div>


<!-- No Of Years Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_of_years', 'No Of Years:') !!}
    {!! Form::number('no_of_years', null, ['class' => 'form-control']) !!}
</div>

<!-- Bio Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('bio', 'Bio:') !!}
    {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
</div>