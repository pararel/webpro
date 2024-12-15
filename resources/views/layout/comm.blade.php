<div class="fitur komunitas px-4 py-2">
  <div class="mb-2">
    <form class="w-100 d-flex">
      <input type="text" class="textKomunitas w-100 me-3 rounded-2" placeholder="Ceritakan hari-harimu!" />
      <button type="button " class="btn btn-primary postKomunitas">
        Unggah
      </button>
    </form>
  </div>
  <div id="postContainerKomunitas" class="overflow-y-auto" style="height: 60vh">
    <div class="post bg-white p-2 my-2 rounded-2 me-1">
      <div class="d-flex mb-3">
        <img src="{{asset('images/guest.webp')}}" class="rounded-5 me-2" style="height: 30px" />
        <h5>orang.lain</h5>
      </div>
      <div class="mb-2">
        <p>Ini adalah postingan pertama aplikasi ini hahahaha</p>
      </div>
      <div class="mb-3 text-secondary">
        <span>12/12/2012 12:12:12</span>
      </div>
      <i class="likeExample fs-5 far fa-heart"></i>
      <i class="fs-5 ms-2 text-secondary far fa-comment"></i>
      <span class="ms-1 text-secondary">Komen dimatikan sementara</span>
    </div>
  </div>
</div>