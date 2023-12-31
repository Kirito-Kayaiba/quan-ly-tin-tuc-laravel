@extends('index')
@section('content')
<section id="article">
  <div class="container">
    <div class="page-container">
      <article class="card">
        <img src="{{$data->urlHinh}}" alt="photo">
        <h1 class='l-heading'>{{$data->tieuDe}}</h1>
        <div class="meta">
          <small>
            @php
            //lấy tên từ id_user trong bảng users
            $ten = DB::table('users')->where('id', $data->id_user)->value('name');
            //lấy veryfi từ id_user trong bảng users
            $veryfi = DB::table('users')->where('id', $data->id_user)->value('veryfi');
            @endphp
            @if ($veryfi == 1)
            <i class="fas fa-user"></i>Được viết bởi {{$ten}} <i class="fa-solid fa-circle-check"
              style="color: #3C91E6"></i> {{$data->created_at}}
            @else
            <i class="fas fa-user"></i>Được viết bởi {{$ten}} {{$data->created_at}}
            @endif
          </small>
          <div class="category category-ent">
            Giải trí
          </div>
        </div>
        <p>{{$data->noiDung}}</p>
      </article>
      <aside class="card bg-info">
        <h2>Tham Gia Group</h2>
        <p>Tham gia nhóm trên facebook để nhận hỗ trợ từ cộng đồng!</p>
        <a href="#" class='btn btn-info btn-block'>Tham gia ngay!</a>
      </aside>
      <aside id="categories" class="card">
        <h2>Danh Mục</h2>
        <ul class="list">
          @foreach ($danhmuc as $dm)
          <li><i class="fas fa-chevron-right"></i>&ensp;<a href="/danhmuc/{{$dm->idLT}}">{{$dm->ten}}</a></li>
          @endforeach
        </ul>
      </aside>
    </div>
  </div>
</section>
@endsection