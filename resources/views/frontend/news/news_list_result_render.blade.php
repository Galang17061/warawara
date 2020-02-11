<div class="archive-posts-area bg-white p-30 mb-30 box-shadow">
    @foreach ($data as $element)
    <!-- Single Catagory Post -->
    <div class="single-catagory-post d-flex flex-wrap">
        <!-- Thumbnail -->
        <div class="post-thumbnail bg-img" style="background-image: url('{{ asset('storage/app/'.$element->n_image ) }}');">
        </div>

        <!-- Post Contetnt -->
        <div class="post-content">
            @php
                $link = preg_replace('/[^A-Za-z0-9\-]/','',$element->n_title); 
                $link = str_replace(' ','-',$element->n_title);
                $yr = date('Y',strtotime($element->n_created_at)) ;
                $mt = date('m',strtotime($element->n_created_at)) ;
                $dy = date('d',strtotime($element->n_created_at)) ;
            @endphp
            <div class="post-meta">
                <a href="#">{{ date('d F Y',strtotime($element->n_created_at)) }}</a>
                <a href="{{ url('/news/news_detail/'.$yr.'/'.$mt.'/'.$dy.'/'.$element->n_id.'/'.$link) }}" class="post-cata " >{{ $element->m_category_news->cn_name }}</a>
            </div>
            <a href="{{ url('/news/news_detail/'.$yr.'/'.$mt.'/'.$dy.'/'.$element->n_id.'/'.$link) }}" class="post-title " style="font-size:20px !important">{{ $element->n_title }}</a>
            <!-- Post Meta -->
            <div class="post-meta-2">
                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $element->n_views }}</a>
                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> {{ $element->d_news_like->count('dnl_id') }}</a>
                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> {{ $element->d_news_comment->count('dnc_id') }}</a>
            </div>
            <p>
                {{ str_limit(strip_tags(html_entity_decode($element->n_content)), $limit = 150, $end = '...') }}
            </p>
        </div>
    </div>
    @endforeach

    <!-- Pagination -->
</div>

 {!! $data->links() !!}

 <br>
 <br>
 <br>