<h1>tinh</h1>
<form method="post" action="/loan">
    @csrf 
    <div class="form-group">
        <input type="number" class="form-control" placehoder="số a" name="soA"> 

    </div>
    <br>
    <div class="form-group">
        <input type="number" class="form-control" placehoder="số b" name="soB"> 

    </div>
    <br>
    <button type="submit" class="btn btn-promary">Tính</button>
</form>

@if(isset($result))
<h1>ket qua: {{$result}}</h1>
@endif
