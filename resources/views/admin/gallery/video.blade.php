<div class="row el-element-overlay">
    @foreach ($galleries[1] as $gallery)
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <img src="{{ asset('upload/images/gallery/thumbnail/medium/'.$gallery->video_thumbnail) }}" style="height: 200px !important;"alt="user"/>
                        <div class="el-overlay">
                            <ul class="el-info">
                                <li>
                                    <a class="btn default btn-outline popup-youtube" href="{{ $gallery->video_link }}">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                     <!-- <a class="popup-youtube btn btn-danger text-white" href="www.youtube.com/watch?v=sK7riqg2mr4">Open YouTube video</a> -->
                                </li>
                                <li>
                                    <form action="{{ route('galleries.destroy',$gallery->id) }}" method="POST" id="delete_{{ $gallery->id }}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <a href="{{ route('galleries.destroy', $gallery->id) }}" class="btn default btn-outline sa-confirm" onclick="event.preventDefault(); document.getElementById('delete_'+{{ $gallery->id }}).submit();">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="box-title">{{ $gallery->branch->name }}</h4>
                        <p>{{ $gallery->category->title }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>