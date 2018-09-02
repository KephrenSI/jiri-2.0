@if($errors->any())
    <hr>
    <div class="alert alert-danger">
        <br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif