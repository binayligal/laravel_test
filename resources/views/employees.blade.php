<x-layout>
    <strong>

        Logged in User : {{$employee->full_name()}}
    </strong>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li><strong>{!! \Session::get('success') !!}</strong></li>
            </ul>
        </div>
    @endif
<form action="{{ url('employees/deleteBulk')}}" method = "POST">
    @csrf
    <table id="myTable" class="display" style="width:100%">            <thead>
            <tr>
                <td>Employee Code</td>
                <td>Full Name</td>
                <td>Department Name</td>
                <td>Actions</td>
            </tr>
        </thead>
        {{-- @dd($employees) --}}
    @foreach($employees as $employee)
         
                
            <tr>
                <td><input type ="checkbox" name = "employeeSelected[]" value = "{{ $employee->employee_id }}"> </td>
                <td>{{ $employee->first_name }} {{ $employee->middle_name }} {{ $employee->last_name }} </td>

                <td>{{ $employee->department->dept_name ?? "#ERROR#"}} </td>
                <td><a href="{{ url('/employee/edit/'.$employee->employee_id)}}">Edit</a>&nbsp;&nbsp; 
                <a href="{{ url('/employee/delete/'.$employee->employee_id)}}" onclick="return confirm('Are you sure you want to DELETE?')">Delete</a>&nbsp;&nbsp; </td>
            </tr>
            <p>
               {{-- By <a href ="/authors/{{$post->author->username}}">{{$post->author->name}} </a> in <a href="/categories/{{$post->category->slug}}">{{ $post->category->name  }}</a> --}}
            </p>
            <div>
                {{-- {{ $post->excerpt}} --}}
            </div>
    @endforeach
        </table>
        <button type="submit" onclick="return confirm('Delete all?')">Delete Selected</button>
 
</form>
<br>
<a href="{{url('logout')}}">Logout</a>
</x-layout>