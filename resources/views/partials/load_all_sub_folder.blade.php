@if($sub_folders->count()>4 && $sub_folders->count()<=8)
   

<script>

document.getElementById("DynamicwidthOfGallary").style.height="562px";
</script>

@endif



@if($sub_folders->count()>8 && $sub_folders->count()<=12)
   

<script>

document.getElementById("DynamicwidthOfGallary").style.height="900px";
</script>

@endif
@foreach ($sub_folders as $folder)
    <a class="Card col-md-4" style="float: left;" onClick="openMyGallery(1,'{{ $folder->sub_folder }}')" >
        <div class="Card-thumb">
            <div class="Card-shadow"></div>
            <div class="Card-shadow"></div>
            <div class="Card-shadow"></div>
            <div class="Card-image" style="background-image: url(https://robohash.org/1)"></div>
        </div>
        <div class="Card-title"><span>{{ $folder->sub_folder }}</span></div>
        <div class="Card-explore"><span>Explore more</span></div>
        <button class="Card-button view_all_images">view more</button>
    </a>
@endforeach


