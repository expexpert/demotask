@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
<form method="POST" action="{{ route('home') }}">
    @csrf
    <div class="form-group">
        <label for="option1">Select Option:</label>
        <select class="form-control" id="option1" name="option1">
            <option value="">Select Option</option>
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
        </select>
    </div>
    <div class="form-group">
        <label for="option2">Select Step:</label>
        <select class="form-control" id="option2" name="option2[]" multiple>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div id="selected-values"></div>


@if(isset($selectedValues))
<div class="card">
      <div><b>Selected Option:</b></div>
       <ul> <li>{{$selectedOption}}</li></ul>
    <div><b>Selected Values:</b></div>
    <ul>
        @foreach($selectedValues as $value)
            <li>{{ $value }}</li>
        @endforeach
    </ul>
     </div>
@endif
  </div>
    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){

        $('#option1').change(function(){
            var option = $(this).val();
            var steps = [];
            if(option === 'option1'){
                steps = ['step11', 'step12', 'step13', 'step14'];
            } else if(option === 'option2'){
                steps = ['step21', 'step22', 'step23', 'step24'];
            }
            $('#option2').empty();
            $.each(steps, function(i, step){
                $('#option2').append($('<option></option>').val(step).html(step));
            });
        });
    });
</script>

@endsection
