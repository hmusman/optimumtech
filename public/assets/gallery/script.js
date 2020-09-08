function openGallery(id,sub) {

  $.ajax({
      url:"{{ route('LoadSubFolderImages') }}",
      type:'get',
      data:{sub:sub},
      success:function(data)
      {
        $('#sub_folder_images').html("data");
      }
    });
  closeAll();
  const gallery = document.getElementById('gallery-' + id);
  const card = document.getElementById('card-' + id);
  gallery.classList.add('Gallery--active');
  // card.classList.add('Card--active');

  
}

function closeAll() {
  const galleryActv = document.querySelector('.Gallery--active');
  const cardActv = document.querySelector('.Card--active');
  if (galleryActv) {
    galleryActv.classList.remove('Gallery--active');
  }
  if (cardActv) {
    cardActv.classList.remove('Card--active');
  }
}