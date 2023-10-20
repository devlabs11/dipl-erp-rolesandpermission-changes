

{{$data['name']}}


@if($data['name']=='vishal1')
{{'fine'}}
@else
{{'no'}}
@endif

@for($i=0;$i<=5;$i++)
{{$i}}
@endfor

@foreach($data1 as $list)
{{$list}}
@endforeach

@foreach($data1 as $key=>$value)
{{$key}}
{{$value}}
@endforeach
