@extends('layouts.master')

@section('head')
  <meta name="description" content="{{removeTags($article->description)}}" />
  <meta name="title" content="{{$article->title}}" />
  <meta name="keywords" content="investasi, pertanian, pemodalan, budidaya, porang, pisang cavendish, kurma">
  <link rel="apple-touch-icon" href="https://dashboard.vestanesia.com/storage/{{$article->images[0]->compressed_image}}">
  <title>Vestanesia - Blog</title>
@endsection

@section('content')
<div role="main" class="main">
  <article>
    <div class="container py-5 container-lg">
      <div class="row">
        <img class="img-fluid mx-auto" src="https://dashboard.vestanesia.com/storage/{{$article->images[0]->image}}" width='1152px' height="547px;" alt="{{$article->images[0]->image_alt}}" />
        <div class="col-lg-8 offset-lg-2">
          <div class="container pt-5">
            <h1 class="h1">{{$article->title}}</h1>
            <p class="font-weight-light">
              {!!$article->content!!}
            </p>
            <div class="row px-3 justify-content-between">
              <div class="col-xs-6">
                <div class="row justify-content-between">
                  <div class="col-2">
                    <img class="blog-photo" src="https://dashboard.vestanesia.com/storage/{{$article->author->photo}}" alt="" />
                  </div>
                  <div class="col-9">
                    <p class="img-card-text"><strong>{{$article->author->name}}</strong></p>
                    <p class="img-card-capt">{{$article->author->job}}</p>
                  </div>
                </div>
              </div>
              <div class="col-6">
                {{-- <TwitterShareButton class="ml-1 float-right" url={`https://vestanesia.com${location.pathname}`}>
                  <TwitterIcon size={32} round={true} />
                </TwitterShareButton>
                <TelegramShareButton class="ml-1 float-right" url={`https://vestanesia.com${location.pathname}`}>
                  <TelegramIcon size={32} round={true} />
                </TelegramShareButton>
                <WhatsappShareButton class="ml-1 float-right" url={`https://vestanesia.com${location.pathname}`}>
                  <WhatsappIcon size={32} round={true} />
                </WhatsappShareButton>
                <FacebookShareButton class="ml-1 float-right" url={`https://vestanesia.com${location.pathname}`} >
                  <FacebookIcon size={32} round={true} />
                </FacebookShareButton> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="text-muted">
      <div class="row">
        <section>
          <div class="container container-lg">
            <div class="row m-auto">
              <h2 class="h1 mt-2 mb-4">Blog Terkait</h2>
            </div>
            <div class="row">
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
      </div>
    </div>
  </article>
</div>
@endsection