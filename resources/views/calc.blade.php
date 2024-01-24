
@if ($errors -> any())
    @foreach ($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
@endif
    
<form action="{{route('kalkulacija')}}" method="POST">
    @csrf
<input type="number" name="broj1" >

<select name="operacija">
    <option value="zbrajanje">+</option>
    <option value="oduzimanje">-</option>
    <option value="mnozenje">*</option>
    <option value="dijeljenje">/</option>
</select>


<input type="number" name="broj2">
<button type="submit">Računaj</button>


</form>

<label for="rezultat">Rezultat:</label>
<input type="text" value="{{session('rezultat')}}">