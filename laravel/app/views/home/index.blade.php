@extends('layouts.master')

@section('css')
<style>
	ul
	{
	    list-style-type: none;
	    padding: 0;
	    margin: 0;
	}
	#home, #announcement, #sup{
		height: 500px;
		overflow:auto;

	}
	#foot{
		text-align: center;
		color: #fff;
		padding-top:15px;
	}
	#divfoot{
		opacity: .7;
		z-index: -1;
		background: #000;
	}

	.item{
		height: 400px;
		background: #333;
		text-align: center;
	}
	h2{
	    margin: 0;     
	    color: #666;
	    padding-top: 90px;
	    font-size: 52px;
	    font-family: "trebuchet ms", sans-serif;    
	}
	.container-fluid{
		margin-top: 5%;
	}
</style>
@stop

@section('nav')
	@include('common.navbar')
@stop

@section('content')
<div class="row">
	
	@include('common.leftnav')
	@include('common.main')
	@include('common.rightnav')
	@include('common.footer')

</div>

@stop