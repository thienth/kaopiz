@extends('layouts.admin.master')
@section('title', 'Trang quản trị')
@section('content')
    Hello {{Auth::user()->name}}
    
@endsection    