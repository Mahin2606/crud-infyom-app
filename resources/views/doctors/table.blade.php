<div class="table-responsive">
    <table class="table" id="doctors-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Dob</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Experience</th>
            <th>No of Years</th>
            <th>Bio</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($doctors as $doctor)
            <tr>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->email }}</td>
                <td>{{ $doctor->phone }}</td>
                <td>{{ data_get($doctor, 'dob') ?? 'Not added yet' }}</td>
                <td>{{ $doctor->gender }}</td>
                <td>{{ $doctor->country }}</td>
                <td>{{ $doctor->has_experience == 1 ? 'Yes' : 'No' }}</td>
                <td>{{ data_get($doctor, 'no_of_years') ?? 'None' }}</td>
                <td>{{ data_get($doctor, 'bio') ?? 'Not added yet' }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['doctors.destroy', $doctor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('doctors.show', [$doctor->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('doctors.edit', [$doctor->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
