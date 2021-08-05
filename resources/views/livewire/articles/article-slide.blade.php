
<div class="container mb-3">
<div class="card card-image " style="background-image: url(/storage/article-img/{{$Article[0]->img_url ??''}}); background-size:cover">
  <div class="text-white text-center rgba-stylish-strong py-5 px-4">
    <div class="py-5">

      <!-- Content -->
      <h5 class="h5 orange-text bg-dark p-2"><i class="fas fa-camera-retro"></i> Post of the day</h5>
      <h2 class="card-title h2 my-4 py-2">{{$Article[0]->title ??''}}</h2>
      <div style="width:100%" class="myTruncate2 mb-4 pb-2 px-md-5 mx-md-5">{{$Article[0]->body ??''}}</div>
      <a class="btn btn-warning" href="/articles"><i class="fas fa-clone left"></i> View Articles</a>

    </div>
  </div>
</div>
</div>