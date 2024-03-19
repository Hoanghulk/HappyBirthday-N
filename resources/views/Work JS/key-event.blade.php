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
        <input type="text" class="input-name" placeholder="Hãy nhập tên của bạn!">
        <a href="" >Tôi không muốn nhập tin của mình.</a>
        <div id="thong-bao"></div>
    </div>
@endsection

@section('after-scripts-end')
    <script>
        $(document).ready(function () {
            $('.input-name').on('keyup', function () {
                let name = $(this).val()
                $('#thong-bao').text('Xin chào bạn '+name)
            })
        })
        $('a').on('click', function (event) {
            event.preventDefault();
            $('#thong-bao').text('OK! Không vấn đề.')
        })
    </script>
@endsection
