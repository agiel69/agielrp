@extends('layouts.master')

@section('title', 'Home Page')

@section('content')
    <div style="text-align: center; margin-bottom: 30px;">
    <img src="{{ asset('images/logo-kai.JPG') }}" 
     alt="Logo Kereta Api Indonesia" 
     style="width: 180px; height: auto; display: block; margin: 0 auto 30px;">

    </div>

    <h1 style="font-size: 28px; margin-bottom: 10px;">Selamat Datang!</h1>
    <p style="font-size: 16px; margin-bottom: 30px;">
        DI TIKET ONLINE KERETA API INDONESIA.
    </p>

    <h2 style="font-size: 22px; margin-bottom: 15px;">Daftar Tiket Kereta Api</h2>
    
    <ul style="list-style: none; padding: 0;">
        <li style="padding: 10px 15px; margin-bottom: 10px; background-color: #fff; border-radius: 8px; box-shadow: 0 1px 4px rgba(0,0,0,0.1);">
            <strong>KA SENJA UTAMA SOLO</strong> — Pasar Senen → Klaten
        </li>
        <li style="padding: 10px 15px; margin-bottom: 10px; background-color: #fff; border-radius: 8px; box-shadow: 0 1px 4px rgba(0,0,0,0.1);">
            <strong>KA ARGO PARAHYANGAN</strong> — Gambir → Bandung
        </li>
        <li style="padding: 10px 15px; background-color: #fff; border-radius: 8px; box-shadow: 0 1px 4px rgba(0,0,0,0.1);">
            <strong>KA SENJA UTAMA JOGJA</strong> — Gambir → Lempuyangan
        </li>
    </ul>

    <a href="#" class="btn" style="margin-top: 20px; display: inline-block;">Lihat Jadwal Lengkap</a>
@endsection
