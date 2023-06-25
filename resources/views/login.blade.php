<x-layout> 
@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
    <form action="{{ url('login')}}" method="POST">
        @csrf
    Employee Code:
   <input type="test" name="employee_code" > 
   <br>
    Password :
   <input type="password"  name="password" > 
   <br>
   <button type="submit">Login</button> 
    </form>

</x-layout>