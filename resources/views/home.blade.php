@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.flos9-1.fna.fbcdn.net/vp/3fa9ff9804250ee73c14eee32c2d1510/5D873735/t51.2885-19/s150x150/44380660_1907195609589123_1796428255473958912_n.jpg?_nc_ht=instagram.flos9-1.fna.fbcdn.net" class="rounded-circle" alt="">
        </div>
        <div class="col-9">
            <div><h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>217</strong> Posts</div>
                <div class="pr-5"><strong>400</strong> Followers</div>
                <div class="pr-5"><strong>137</strong> Following</div>
            </div>
            <div class="pt-4 font-weight-bold">Israel Iloba ☪</div>
            <div>ICO Marketing | Blockchain $tartup Advisor | Altcoin Trader | New Trend Embracer | I'm learning coding</div>
            <div><a href="#">juidev.io</a></div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4"><img src="https://instagram.flos9-1.fna.fbcdn.net/vp/156b5b89420b3192c9caacf77694ca62/5D81FDD6/t51.2885-15/e35/c0.129.1031.1031a/s150x150/47270522_606363746448114_5136884329461592604_n.jpg?_nc_ht=instagram.flos9-1.fna.fbcdn.net" class="w-100" alt=""></div>
        <div class="col-4"><img src="https://instagram.flos9-1.fna.fbcdn.net/vp/1a0ce3f1e1f2264a3f71fa663cf398f5/5D7DFDA6/t51.2885-15/e35/c0.119.1080.1080/s240x240/47031667_105404807106362_4496143296939222487_n.jpg?_nc_ht=instagram.flos9-1.fna.fbcdn.net" class="w-100" alt=""></div>
        <div class="col-4"><img src="https://instagram.flos9-1.fna.fbcdn.net/vp/6f262a0f84f8119fdcdda9498b54e5a0/5D9A01DE/t51.2885-15/e35/s240x240/46065153_344230443045629_5134211494124861737_n.jpg?_nc_ht=instagram.flos9-1.fna.fbcdn.net" class="w-100" alt=""></div>
    </div>
</div>
@endsection
