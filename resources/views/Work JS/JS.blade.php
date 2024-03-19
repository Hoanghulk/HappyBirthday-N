@extends('layouts.master')

@section('title')
    Javascript
@endsection

@section('after-style-end')
    <style>

    </style>
@endsection

@section('content')
    <div id="container">
        <select id="select-choice">
            <option value="free" data-time = '0'>Chọn món ăn</option>
            <option value="10k" data-time = '5'>Trà sữa</option>
            <option value="20k" data-time = '4'>Sữa tươi</option>
            <option value="40k" data-time = '7'>Phở</option>
            <option value="50k" data-time = '10'>Cơm sườn</option>
        </select>
        <div id="thong-bao"></div>
    </div>
@endsection

@section('after-scripts-end')
    <script>
        $(document).ready(function () {
            $('#select-choice').on('change', function () {
                let ten_mon = $('#select-choice option:selected').text();
                let gia_ca = $('#select-choice option:selected').val();
                let time = $('#select-choice option:selected').data('time');

                if(gia_ca) {
                    $('#thong-bao').text('Bạn đã chọn món: ' + ten_mon + ' với giá là ' + gia_ca + ', vui lòng chờ trong ' + time + ' phút.');
                }
            })
        })
    </script>
@endsection
