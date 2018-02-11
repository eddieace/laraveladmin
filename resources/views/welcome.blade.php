@extends('layouts.front')

@section('content')
<div class="wrapper wrapper-full-page">
    <div class="page-header header-filter" filter-color="black" style="background-image: url('{{ asset('images/register.jpeg') }}')">
    	<div class="container">
    		<div class="row text-center">
    			<div class="header-wrapper">
	    			<h1>Get started today</h1>
	    			<a href="/register" class="btn btn-rose">Get started</a>
    				
    			</div>
    		</div>
    	</div>
    </div>
    <div class="container">
		<div class="row">
			<h1>Ready for an adventure?</h1>
			<h4>- We will show you everything</h4>
		</div>
    </div>
</div>
@endsection
