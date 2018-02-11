@extends('layouts.app')

@section('content')
	<edit-profile-component :user="{{ $user->toJson() }}"></edit-profile-component>
@endsection
