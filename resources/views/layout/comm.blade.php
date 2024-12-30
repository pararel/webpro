<div class="fitur komunitas px-4 py-2">
  <div class="mb-2">
    <form class="w-100 d-flex"
      action="{{ Auth::user()->is_admin === 'yes' ? route('adminCommunity') : route('community') }}" method="POST">
      @csrf
      <input type="text" class="textKomunitas w-100 me-2 rounded-2" id="content" name="content"
        placeholder="Ceritakan hari-harimu!" />
      <button type="submit" class="btn btn-primary rounded-5">
        <i class="fas fa-location-arrow"></i>
      </button>
    </form>
  </div>
  <div id="postContainerKomunitas" class="overflow-y-auto" style="height: 60vh">
    @if ($posts->isEmpty())
    <div class="d-flex justify-content-center">
      <p class="text-secondary">Belum ada postingan yang diunggah</p>
    </div>
  @else
  @foreach ($posts as $post)
    <div class="bg-white p-2 mt-2 me-1 shadow-sm">
    <div class="d-flex">
    <img src="{{ asset('images/profiles/' . $post->account->picture) }}" class="rounded-5 me-2"
      style="height: 20px; width: 20px; object-fit: cover;" />
    <h6>{{$post->account->username}}</h6>
    </div>
    <div class="">
    <p>{{$post->content}}</p>
    </div>
    <div class="mb-3 text-secondary">
    </div>
    <i class="likeExample fs-5 far fa-heart"></i>
    <i class="fs-5 ms-2 far fa-comment"></i><br>
    <div class="w-100 d-flex justify-content-between">
    <span class="text-secondary ">{{$post->created_at}}</span>
    @if ($post->account->username == Auth::user()->username)
    <span>
      <form method="POST" style="display:inline;"
      action="{{ Auth::user()->is_admin === 'yes' ? route('adminCommunityDelete', $post->id) : route('communityDelete', $post->id) }}">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-transparent"
      onclick="return confirm('Apakah anda yakin ingin menghapus unggahan ini?')" style="height:30px;">
      <i class="far fa-trash-alt"></i>
      </button>
      </form>
    </span>
  @endif
    </div>

    </div>
  @endforeach
@endif
  </div>
</div>