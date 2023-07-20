<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" value="{{ csrf_token() }}"/>
        <title>Laravel + Vue</title>
        
        <!-- CDNs de Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <!-- CDNs de Font-Awesome -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/v5-font-face.min.css" integrity="sha512-W+lqPhhunEwz9brBt8usGl0j+mtLGggjFC/9RHzyFyDKe/SSkCgQ08Y9ZZSNYez5biH7IhJU66+iUiQagtSm8w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/v5-font-face.min.css" integrity="sha512-W+lqPhhunEwz9brBt8usGl0j+mtLGggjFC/9RHzyFyDKe/SSkCgQ08Y9ZZSNYez5biH7IhJU66+iUiQagtSm8w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <a href="https://api.whatsapp.com/send?phone=96399204" 
        class="btn-wsp" target="_blank">
        <i class="fa fa-phone"></i>

        </a>
        <div id="app">
        
        </div>
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
<style>
    .btn-wsp{
        position: fixed;
        width: 55px;
        height:55px;
        line-height:55px;
        bottom:30px;
        right: 30px;
        background:#0df053;
        color:#fff;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        box-shadow:0px 1px 10px rgba(0,0,0,0.3);
        z-index:100;
    }
    .btn-wsp:hover{
        text-decoration:none;
        color:#0df053;
        background:#fff;
    }
</style>