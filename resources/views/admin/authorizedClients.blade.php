@extends('layouts.app')

@section('content')
<div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.admin.sidebar')

    <passport-authorized-clients></passport-authorized-clients>
        
@endsection