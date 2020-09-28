<!—Disimpan di resources/views/child.blade.php --> 

@extends('layouts.app')
@section('title', 'Profil')

@section('sidebar')
@parent
<p>Sidebar halaman Profil.</p>
@endsection 

@section('content')
<p>Ini adalah bagian konten. NIM - Nama</p> 
@endsection

@component("alert")
<b>Tulisan ini akan mengisi variabel $slot</b> 
@endcomponent

<!-- menggunakan alert pada component -->
@extends('layouts.app')
// kode...
@component("alert")
<b>Tulisan ini akan mengisi variabel $slot</b> 
@endcomponent