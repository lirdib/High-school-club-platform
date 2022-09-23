@extends('layouts.layout')


@section('content')

<div class="gridContainer-create-projects">
  <div class="club-card-preview">
    <div class="card">
      <div class="card-header">
        <img src="\img\no-image.jpeg" id="image-club-preview"/>
      </div>
      <div class="card-body">
        <h4 id="emri-club-preview">Tiltulli i klubit</h4>
        <p id="description-club-preview">Përshkrimi i klubit</p>
      </div>
  </div>

  </div>


  <div class="container">
      <form action="/klubet/c" enctype="multipart/form-data" method="post">
          @csrf
      <div class="col-8 offset-2">
          <h1>Krijoni një event</h1>
          <div class="form-group row pt-3">

              <label for="emri" class="col-md-4 col-form-label text-md-right mb-4">Emri</label>

              <div class="col-md-6">
                  <input
                  id="emri"
                  type="text"
                  class="form-control
                  @error('emri') is-invalid @enderror"
                  name="emri"
                  value="{{ old('emri') }}" required
                  autocomplete="emri"
                  autofocus
                  onchange="showemriCard()">

                  @error('emri')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <label for="description" class="col-md-4 col-form-label text-md-right mb-4">Description</label>

              <div class="col-md-6">
                  <textarea
                  id="description"
                  class="form-control"
                  name="description"
                  style="height:200px"
                  autofocus
                  onchange="showDescriptionCard()"></textarea>

              </div>

              <label for="image" class="col-md-4 col-form-label text-md-right">Imazh</label>

              <div class="col-md-6">
                    <input
                    id="image"
                    type="file"
                    class="form-control-file"
                    name="image">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
          <div class="row">
              <button class="btn btn-primary">Add new club</button>
          </div>
      </div>
      </form>

  </div>

</div>



<style>

.gridContainer-create-projects{
        display: grid;
        grid-template-columns: 50% 50%;
        grid-template-areas:
          "preview form";
  }

.club-card-preview{
  grid-area: preview;
  display: flex;
  width: 1040px;
  justify-content: space-evenly;
  flex-wrap: wrap;
  margin: auto;
}

.container{
  grid-area: form;
  margin: auto;
}

.card {
  margin: 10px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  width: 300px;
}
.card-header img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}
.card-body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding: 20px;
  min-height: 250px;
}

.tag {
  background: #cccccc;
  border-radius: 50px;
  font-size: 12px;
  margin: 0;
  color: #fff;
  padding: 2px 10px;
  text-transform: uppercase;
  cursor: pointer;
}
.tag-teal {
  background-color: #47bcd4;
}
.tag-purple {
  background-color: #5e76bf;
}
.tag-pink {
  background-color: #cd5b9f;
}

.card-body p {
  font-size: 13px;
  margin: 0 0 40px;
  white-space: normal;
}

</style>

<script>
  const image_input = document.querySelector("#image");
  const emri_input = document.querySelector("#emri");
  const des_input = document.querySelector("#description")
  var uploaded_image;

  image_input.addEventListener('change', function() {
    const reader = new FileReader();
    reader.addEventListener('load', () => {
      uploaded_image = reader.result;
      //document.querySelector("#display_image").style.backgroundImage = `url(${uploaded_image})`;
      document.getElementById("image-club-preview").src=`${uploaded_image}`;
    });
    reader.readAsDataURL(this.files[0]);
  });

  /*
  emri.input.addEventListener('change', function(){
    const reader = new FileReader();
  })*/
  function showemriCard(){
    const val = emri_input.value;
    document.getElementById("emri-club-preview").innerHTML = val;
  }

  function showDescriptionCard(){
    const val = des_input.value;
    document.getElementById("description-club-preview").innerHTML = val;
  }
</script>


@endsection