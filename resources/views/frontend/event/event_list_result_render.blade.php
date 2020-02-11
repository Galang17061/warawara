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
                        @php
                            $link = preg_replace('/[^A-Za-z0-9\-]/','',$element->e_title); 
                            $link = str_replace(' ','-',$element->e_title);
                            $yr = date('Y',strtotime($element->e_created_at)) ;
                            $mt = date('m',strtotime($element->e_created_at)) ;
                            $dy = date('d',strtotime($element->e_created_at)) ;
                        @endphp
                        <a href="{{ url('/event/event_detail/'.$yr.'/'.$mt.'/'.$dy.'/'.$element->e_id.'/'.$link) }}" class="post-title " style="font-size:20px !important">{{ $element->e_title }}</a>
                        <div class="post-meta">
                            <a href="#">{{ date('d M Y',strtotime($element->e_created_at)) }}</a>
                            <a href="archive.html">{{ $element->m_category_event->ce_name }}</a>
                        </div>

                        <a style="color: grey" @if ($element->e_location == null) hidden="" @endif><i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{ $element->e_location }}</a>
                        <br>
                        <a style="color: grey" @if ($element->e_phone == null) hidden="" @endif><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;{{ $element->e_phone }}</a>
                        
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