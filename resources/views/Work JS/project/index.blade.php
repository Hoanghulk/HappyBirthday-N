@extends('layouts.master')

@section('title')
    Index
@endsection

@section('after-style-end')
    <style>
        body {
            background-color: beige!important;
        }
        #admin-container {
            background-color: white;
            padding: 10px;
            margin: 10px;
            height: 100%;
        }
        #container {
            background-color: white;
            padding: 10px;
            margin: 10px;
            /*height: 100%;*/
        }
        .item {
            width: 200px;
            background-color: lightgoldenrodyellow;
            padding: 8px;
            margin: 5px;
            float: left;
        }
        .item img {
            width: 100%;
        }
        .item .name {
            font-size: 24px;
        }
        .view-more {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div id="tong-gia" class="w-100" style="background-color: #000000; color: #ffffff; height: 50px">
    </div>
    <div id="admin-container">
        <input type="text" id="input-item">
        <button id="btn-item">Thêm sản phẩm</button>
    </div>
    <div id="container">
        <div class="item">
            <div class="name">Gà</div>
            <img src="./resources/img/12.jpg" alt="">
            <div class="description">Responsive containers are new in Bootstrap v4.4. They allow you to specify a class that is 100% wide until the specified breakpoint is reached, after which we apply max-widths for each of the higher breakpoints.</div>
            <div class="price">22000</div>
            <button class="btn-add">Thêm vào giỏ hàng</button> <br>
            <button class="btn-del">Xóa</button> <br>
            <a class="btn-view-more" href="#">Xem thêm</a>
            <div class="view-more">Được dịch từ tiếng Anh-Mô tả là bất kỳ loại giao tiếp nào nhằm mục đích làm sinh động một địa điểm, đồ vật, con người, nhóm hoặc thực thể vật chất khác. Miêu tả là một trong bốn phương thức tu từ cùng với trình bày, biện luận và trần thuật</div>
        </div>
        <br style="clear: left"/>
    </div>
@endsection

@section('after-scripts-end')
    <script>
        let tong_gia = 0;

        $(document).ready(function () {
            $('#btn-item').on('click', function () {
                let ten = $('#input-item').val();
                $('#input-item').val('');

                let new_item = '';
                new_item += `<div class="item">
                    <div class="name">` + ten + `</div>
                    <img src="./resources/img/12.jpg" alt="">
                    <div class="description">Responsive containers are new in Bootstrap v4.4. They allow you to specify a class that is 100% wide until the specified breakpoint is reached, after which we apply max-widths for each of the higher breakpoints.</div>
                    <div class="price">22k</div>
                    <button class="btn-add">Thêm vào giỏ hàng</button> <br>
                    <button class="btn-del">Xóa</button> <br>
                    <a class="btn-view-more" href="#">Xem thêm</a>
                    <div class="view-more">Được dịch từ tiếng Anh-Mô tả là bất kỳ loại giao tiếp nào nhằm mục đích làm sinh động một địa điểm, đồ vật, con người, nhóm hoặc thực thể vật chất khác. Miêu tả là một trong bốn phương thức tu từ cùng với trình bày, biện luận và trần thuật</div>
                </div>`

                $('#container').append(new_item);
            })

            $('#container').on('click', '.btn-del', function () {
                $(this).parent().remove();
            })

            $('#container').on('click', '.btn-view-more', function () {
                event.preventDefault();
                // $(this).parent().find('.view-more').toggle(2000)
                // $(this).parent().find('.view-more').fadeToggle(2000)
                $(this).parent().find('.view-more').slideToggle(2000)

                $(this).animate({"opacity": 0, "margin-left": 30}, 'slow')
                $(this).animate({"opacity": 1, "margin-left": 0}, 'slow')
            })

            $.ajax('Jsjson.blade.php').done((res) => {
                if(res.success) {
                    console.log(res.success);
                } else {
                    console.log('loi');
                }
            })

            $('#container').on('click', '.btn-add', function () {
                let gia = Number($(this).parent().find('.price').text());
                tong_gia += gia;

                $('#tong-gia').text('Tong gia tien la: ' + tong_gia.toLocaleString() + ' vnd');
            })
        })
    </script>
@endsection
