@extends('layouts.app')

@section('content')
<div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.admin.sidebar')

    <passport-clients></passport-clients>
        
@endsection