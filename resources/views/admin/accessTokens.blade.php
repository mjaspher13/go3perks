@extends('layouts.app')

@section('content')
<div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.admin.sidebar')

    <passport-personal-access-tokens></passport-personal-access-tokens>
        
@endsection