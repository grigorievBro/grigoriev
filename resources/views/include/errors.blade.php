@if(count($errors))
    <div class="form-group">
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <ul>
                @foreach($errors->all() as $error)
                    <li><strong>{{$error}}</strong></li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
