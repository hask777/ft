@extends('main')
@section('content')

<div class="area_heading">
	<div class="text-center text-3xl flex items-center justify-center">
		<h2>{{ $competition['Name'] }}</h2>
		<div class="area_img">
			<img src="{{ asset('img/FIFA_logo_colored.png') }}" alt="" class="">	
		</div>
	</div>
	<div class="area_heading_description flex ">
		<ul class="flex justify-center items-center w-full p-0 m-0">
			<li class="mr-2">{{ $competition['AreaName'] }}</li> |
			<li class="ml-2 mr-2">{{ $competition['Name'] }}</li> |
			<li class="ml-2 mr-2">{{ $competition['Type'] }}</li> |
			<li class="ml-2 mr-2">{{ $competition['CurrentSeason']['Name'] }}</li>
		</ul>
	</div>
	<div class="competition_rounds">
		<ul class="flex bg-gray-400 text-white mt-2">
			@foreach($competition['CurrentSeason']['Rounds'] as $round)
				
				<li class="p-2 ml-2 mr-2">{{$round['Name']}}</li>
	
			@endforeach
			
		</ul>

		<div>
			<h2 class="text-3xl p-4">{{$group_a[0]['Group']}}</h2>
			@foreach ($group_a as $team)
					{{$team['Name']}} <br>
			@endforeach
		</div>
	</div>
</div>



<style>
	
	.area_img img{
		width: 100px;
		height: auto;
	}

</style>

{{-- <form action="{{ route('teams') }}" method="get">
    <input type="hidden" name="comp_id" value="{{ $comp_id }}">
    <button type="submit">Teams</button>
</form> --}}

{{-- <h1 class="mb-1 mt-1 text-4xl">Area:</h1>

<div>
    Area Id: {{$area_id}}
</div>

<div>
    Area: {{$area_name}}
</div> --}}






@endsection