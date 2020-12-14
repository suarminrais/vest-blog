@extends('layouts.master')

@section('head')
<meta name="description"
    content="Platform permodalan pertanian berbasis digital yang dapat mempertemukan antara pemilik lahan, petani, pemodal, para ahli dan profesional dengan konsep sociopreneurship yang kolaboratif, transparan, profesional dan berintegritas." />
<meta name="title" content="Vestanesia - Platform Investasi Pertanian" />
<meta name="keywords" content="investasi, pertanian, pemodalan, budidaya, porang, pisang cavendish, kurma">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<title>Vestanesia - Blog</title>
@endsection

@section('content')
<div role="main" class="main">
  <section class="section border-0 m-0 pb-3">
    <div class="container container-lg">
      <div class="row pb-1">
        @foreach ($recents as $article)   
        <div class="col-sm-6 col-lg-4 mb-4 pb-2">
          <a href="/{{$article->url_prefix}}">
            <article>
              <div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                  <img src="https://dashboard.vestanesia.com/storage/{{$article->images[0]->image}}" class="img-fluid" alt="{{$article->images[0]->image_alt}}">
                  <div class="thumb-info-title bg-transparent p-4">
                    <div class="thumb-info-type bg-color-primary px-2 mb-1">{{$article->tags[0]->tag}}</div>
                    <div class="thumb-info-inner mt-1">
                      <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">{{$article->title}}</h2>
                    </div>
                    <div class="thumb-info-show-more-content">
                      <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">{!!$article->description!!}</p>
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <div class="container container-lg">
    <div class="row py-5">
      <div class="col-md-6 col-lg-4">
        <h3 class="font-weight-bold text-3 mb-0">Popular Posts</h3>
        <ul class="simple-post-list">
          @foreach ($populars as $article)
          <li>
            <article>
              <div class="post-image">
                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                  <a href="/{{$article->url_prefix}}">
                  <img src="https://dashboard.vestanesia.com/storage/{{$article->images[0]->compressed_image}}" class="border-radius-0" width="50" height="50" alt="{{$article->images[0]->image_alt}}">
                  </a>
                </div>
              </div>
              <div class="post-info">
                <h4 class="font-weight-normal text-3 line-height-4 mb-0"><a href="/{{$article->url_prefix}}" class="text-dark">{{$article->title}}</a></h4>
                <div class="post-meta">
                  {{date('F d, Y',strtotime($article->created_at))}}
                </div>
              </div>
            </article>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="col-md-6 col-lg-4">
        <h3 class="font-weight-bold text-3 mb-0 mt-4 mt-md-0">Recent Posts</h3>
        <ul class="simple-post-list">
          @foreach ($recents as $article)
          <li>
            <div class="post-image">
              <div class="img-thumbnail img-thumbnail-no-borders d-block">
                <a href="/{{$article->url_prefix}}">
                  <img src="https://dashboard.vestanesia.com/storage/{{$article->images[0]->compressed_image}}" class="border-radius-0" width="50" height="50" alt="{{$article->images[0]->image_alt}}">
                </a>
              </div>
            </div>
            <div class="post-info">
              <h4 class="font-weight-normal text-3 line-height-4 mb-0"><a href="/{{$article->url_prefix}}" class="text-dark">{{$article->title}}</a></h4>
              <div class="post-meta">
                {{date('F d, Y',strtotime($article->created_at))}}
              </div>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>

  <div class="container container-lg">
    <div class="row mt-5 pt-3">
      <div class="col-md-9">
        <div class="blog-posts">
          @foreach ($articles as $article)
          <article class="post post-large">
            <div class="post-image">
              <a href="/{{$article->url_prefix}}">
                <img src="https://dashboard.vestanesia.com/storage/{{$article->images[0]->image}}" class="img-fluid w-100 img-thumbnail img-thumbnail-no-borders rounded-0" alt="{{$article->images[0]->image_alt}}" />
              </a>
            </div>
            <div class="post-date text-1">
              <span class="day border-radius-0 text-4 text-dark">{{date('d',strtotime($article->created_at))}}</span>
              <span class="month border-radius-0 text-1 bg-color-dark">{{date('M',strtotime($article->created_at))}}</span>
            </div>
            <div class="post-content">
              <h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="/{{$article->url_prefix}}" class="text-dark">{{$article->title}}</a></h2>
              {!!$article->description!!}
              <div class="post-meta">
                <span><i class="far fa-user"></i> <a class="text-primary text-hover-primary">{{$article->author->name}}</a> </span>
                <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="/{{$article->url_prefix}}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
              </div>
            </div>
          </article>
          @endforeach
          <ul class="pagination float-right">
            {{$articles->links()}}
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <aside class="sidebar pb-4" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
          <h5 class="font-weight-bold pt-4 mb-2">Tags</h5>
          <div class="mb-3 pb-1">
            @foreach ($tags as $tag)
            <a><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">{{$tag->tag}}</span></a>
            @endforeach
          </div>
          <h5 class="font-weight-bold pt-4">Temukan Kami Di Facebook</h5>
          <div class="fb-page" data-href="https://www.facebook.com/vestanesiaindonesia/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/vestanesiaindonesia/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/vestanesiaindonesia/" target="_blank">Vestanesia</a></blockquote></div>
        </aside>
      </div>
    </div>
  </div>
</div>
@endsection