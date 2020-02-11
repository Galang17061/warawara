<div class="featured-video-posts">
    <div class="row">
        @foreach ($data as $element)
            <div class="col-12 col-lg-6 mb-30 pb-4" style="">
                <div class="single-featured-post box-shadow">
                    <!-- Thumbnail -->
                    <div class="post-thumbnail center-cropped mb-2">
                        <img src="{{ asset('/storage/app/'.$element->e_poster) }}" alt="" class="imgg">
                    </div>
                    <!-- Post Contetnt -->
                    <div class="post-content pl-3" style="min-height: 150px">
                        <a href="{{ route('event_detail',['id'=>$element->e_id]) }}" class="post-title " style="font-size:20px !important">{{ $element->e_title }}</a>
                        <div class="post-meta">
                            <a href="#">{{ date('d M Y',strtotime($element->e_created_at)) }}</a>
                            <a href="archive.html">{{ $element->m_category_event->ce_name }}</a>
                        </div>

                        <a style="color: grey"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{ $element->e_location }}</a>
                        <br>
                        <a style="color: grey"><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;{{ $element->e_phone }}</a>
                        
                    </div>
                    <br>
                </div>
            </div>
         @endforeach
    </div>
</div>  

 {!! $data->links() !!}

 <br>
 <br>
 <br>