
@foreach ($sub_folders->unique('sub_folder') as $folder)

        @php $img = 'storage/'.$folder->img @endphp
            <a class="Card ard col-md-3" onClick="openMyGallery(1,'{{ $folder->sub_folder }}')" >
                <div class="Card-thumb">
                    <div class="Card-shadow"></div>
                    <div class="Card-shadow"></div>
                    <div class="Card-shadow"></div>
                    <div class="Card-image" style="background-image: url('{{ asset($img)}}')"></div>
                </div>
                <div class="Card-title"><span>{{ ucwords($folder->sub_folder) }}</span></div>
                <div class="Card-explore"><span>Explore more</span></div>
                <button class="Card-button view_all_images">View More</button>
            </a>
@endforeach


