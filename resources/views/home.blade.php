@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
            <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F28%2F2020%2F01%2Fhawaii-december-EVRYMONTH1019.jpg" width="150" height="150" class="rounded-circle" >
       </div>
       <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">learnlaravel.org</div>
            <div>Maldives is the perfect holiday destination with luxury #hotels #resorts #beaches & amazing #underwater #world</div>
            <div><a href="noukula.com">noukula.com</a></div>
       </div>
</div>

<div class="row pt-5">
    <div class="col-4">
        <img src="https://instagram.fcjb3-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.117.1323.1323a/s640x640/104335552_144108747260257_8535448282470579854_n.jpg?_nc_ht=instagram.fcjb3-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=PxKQ4QYMgugAX9XaMWB&oh=7af5783dbd74c20ddf781a4c2b1e0f52&oe=5F6DDE48" class="w-100">
    </div>
    <div class="col-4">
        <img src="https://instagram.fcjb3-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/104298665_321126208912229_2300588394954250824_n.jpg?_nc_ht=instagram.fcjb3-1.fna.fbcdn.net&_nc_cat=105&_nc_ohc=n-9eiPUdhKMAX86OsaJ&oh=d7f02027218c6d35329ad96530103a4e&oe=5F6CF52B" class="w-100">
    </div>
    <div class="col-4">
        <img src="https://instagram.fcjb3-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/103941963_900554043761826_8527597907851057729_n.jpg?_nc_ht=instagram.fcjb3-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=KIxdNtviytkAX-3exsE&oh=52a81cbffd239381c0b76fa1c0bfe993&oe=5F6F06DC" class="w-100">
    </div>
</div>

</div>
@endsection
