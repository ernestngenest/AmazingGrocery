@props(['item'])

<div class="" style="width: 18rem;">
    <img class="rounded-circle mb-2" style="height: 15em;width: 15em" src={{ $item->image }}>
    <div class="body">
      <h5 class="title">{{ $item->item_name }}</h5>
      <a href="/detail/{{ $item->id }}">Detail</a>
    </div>
</div>