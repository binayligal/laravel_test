<x-layout>
    <h1>Employee Edit Page</h1>
<form action="{{ url('employee/edit/').'/'.$employee->employee_id}}" method="POST">
@csrf
Please select the Employee
    Department:
    <br>
<select name="employee_id" >
@foreach ($employees as $e)
    <option value="{{$e->employee_id}}" {{($e->employee_id == $employee->employee_id)? "selected" : ""}}>{{ $e->full_name()  }}</option>
@endforeach
</select>

<br>
<br>
Please select the Department
<br>
<select name="dept_id" id="">


@foreach ($departments as $d)

    <option value="{{ $d->dept_id }}" {{($d->dept_id == $employee->depar_id)? "selected" : ""}}>{{ $d->dept_name}} </option>
@endforeach

</select>
<br>
<br>
<br>
<button type="submit">Click to Submit</button>
</form>

</x-layout>
