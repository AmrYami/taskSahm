<!-- Name Field -->
@if($action == 'create')
<div class="form-group col-md-6 col-12">
    {!! Form::label('name', 'Full Name *:') !!}
    @if($errors->first('title'))
        <small class="text-danger">{{$errors->first('name')}}</small>
    @endif
    {!! Form::text('title', null,
        [
            'class' => 'form-control',
            'required'=>true,
            "placeholder" => 'title',
            'max' => 255,
            "min" => 3,
            "autocomplete" => "off"
        ])
    !!}
    @if ($errors->has('title'))
        <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
    @endif
</div>
<div class="form-group col-md-6 col-12">
    {!! Form::label('users', 'users *:') !!}
    @if($errors->first('users'))
        <br>
        <small class="text-danger">{{$errors->first('user')}}</small>
    @endif
    {!! Form::select('emp_id',  [Null=>__('select')]+$users,
        [
            'class' => 'form-control',
            'name'=>'user',
            'id'=>'exampleSelectd',
            'required'=>true,
        ])
    !!}
</div>
@else
    <div class="form-group col-md-6 col-12">
        {!! Form::label('state', 'state' . ':') !!}
        @if(isset($errors))
            <br>
            <small class="text-danger">{{$errors->first('state') ?? $errors->first('state')}}</small>
        @endif
        <select class="form-control" required
                name="status">
            <option>select</option>
            @foreach ($states as $key => $value)
                <option
                    value="{{ $key }}" {{ $key == $task->status  ? 'selected' : '' }}>
                    {{ $value }}
                </option>
            @endforeach
        </select>
    </div>
@endif
