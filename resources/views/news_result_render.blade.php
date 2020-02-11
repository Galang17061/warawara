 
<div class="featured-video-posts">
    <div class="row">
        @foreach ($news as $index => $element)
            @php
                $link = preg_replace('/[^A-Za-z0-9\-]/','',$element->n_title); 
                $link = str_replace(' ','-',$element->n_title);
                $yr = date('Y',strtotime($element->n_created_at)) ;
                $mt = date('m',strtotime($element->n_created_at)) ;
                $dy = date('d',strtotime($element->n_created_at)) ;
            @endphp
            @if ($index == 0)
                <div class="col-12 col-lg-6" >
                    <div class="single-trending-post" style="margin-bottom: 10px">
                        <div class="post-thumbnail images_responsive">
                            <img src="{{ asset('storage/app/'.$element->n_image ) }}" class="imgg" alt="">
                        </div>
                        <div class="post-content">
                            <a href="{{ url('/news/news_detail/'.$yr.'/'.$mt.'/'.$dy.'/'.$element->n_id.'/'.$link) }}" class="post-cata ">{{ $element->m_category_news->cn_name }}</a>
                            <a href="{{ url('/news/news_detail/'.$yr.'/'.$mt.'/'.$dy.'/'.$element->n_id.'/'.$link) }}" class="post-title ">{{ $element->n_title }}</a>
                        </div>
                    </div>
                </div>
            @endif
            @if ($index == 1)
                <div class="col-12 col-lg-6" >
                    <div class="single-trending-post">
                        <div class="post-thumbnail images_responsive">
                            <img src="{{ asset('storage/app/'.$element->n_image ) }}" class="imgg" alt="">
                        </div>
                        <div class="post-content">
                            <a href="{{ url('/news/news_detail/'.$yr.'/'.$mt.'/'.$dy.'/'.$element->n_id.'/'.$link) }}" class="post-cata ">{{ $element->m_category_news->cn_name }}</a>
                            <a href="{{ url('/news/news_detail/'.$yr.'/'.$mt.'/'.$dy.'/'.$element->n_id.'/'.$link) }}" class="post-title ">{{ $element->n_title }}</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        
        <div class="col-12 col-lg-12">
        <div class="archive-posts-area bg-white pt-30 mb-30">
        @foreach ($news as $index => $element)
            @php
                $link = preg_replace('/[^A-Za-z0-9\-]/','',$element->n_title); 
                $link = str_replace(' ','-',$element->n_title);
                $yr = date('Y',strtotime($element->n_created_at)) ;
                $mt = date('m',strtotime($element->n_created_at)) ;
                $dy = date('d',strtotime($element->n_created_at)) ;
            @endphp
            @if ($index > 1 && $index < 5)
                <div class="single-catagory-post d-flex flex-wrap">
                    <div class="post-thumbnail bg-img images_responsive"  style="background-image: url({{ asset('storage/app/'.$element->n_image ) }}); !important">
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <a href="#">{{ date('d F Y',strtotime($element->n_created_at)) }}</a>
                            <a href="archive.html">{{ $element->m_category_news->cn_name }}</a>
                        </div>
                        <a href="{{ url('/news/news_detail/'.$yr.'/'.$mt.'/'.$dy.'/'.$element->n_id.'/'.$link) }}" class="post-title " style="font-size:20px !important">{{ $element->n_title }}</a>
                        <p>
                            {{ str_limit(strip_tags(html_entity_decode($element->n_content)), $limit = 150, $end = '...') }}
                        </p>
                        <br>
                        <div class="post-meta-2" >
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $element->n_views }}</a>
                            <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> {{ $element->d_news_like->count('dnl_id') }}</a>
                            <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> {{ $element->d_news_comment->count('dnc_id') }}</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

        <!-- Pagination -->
        {!! $news->links() !!}

    </div>
    </div>

       
    </div>
</div>
