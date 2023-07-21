
@extends('layouts.mainLayout')
@section('title', 'Home')

        
@section('content')
<div class=" m-5">
    <h1 class="">home</h1>

    <h2>selamat datang {{$name}}. anda {{$role}}</h2>

    {{-- @if ($role == 'admin')
        <a href="">ke halaman admin</a>
    @elseif ($role == 'staf')
        <a href="">ke halaman staf</a>
    @else
       <a href="">ke hal whatever</a>
    @endif --}}

    {{-- switch case --}}
    {{-- @switch($role)
        @case($role == 'admin')
            <a href="">ke halaman admin</a>
            @break
        @case($role == 'staf')
            <a href="">ke halaman gudang</a>
            @break
        @default
        <a href="">ke halaman whatever</a>
    @endswitch --}}

    

    <table class="w-48 border-2 border-slate-950">
        <tr class=" border-2 border-slate-950">
            <th>No</th>
            <th>Nama</th>
        </tr>
        @foreach ($hobi as $data)
        <tr class="text-center">
            <td>{{$loop->iteration}}</td>
            <td>{{$data}}</td>
        </tr>
        @endforeach
   </table>
</div>
@endsection
