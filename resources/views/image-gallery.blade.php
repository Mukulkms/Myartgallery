@extends('layouts.main')

@section('main-section')
    

    @push('title')
        <title>Myart</title>
    @endpush
  
    
    <link rel="stylesheet" href="{{ asset('css/image.css') }}">

<body>
    
  <x-app-layout> 
    
  </x-app-layout>


    <h3 class="heading">Image Gallery </h3>

<div class="container" >
    
    <div class="subcontainer">

        
        <form action="{{ url('image-gallery') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
            
            
            {!! csrf_field() !!}
            
            
            @if (count($errors) > 0)
            <div style="color:red;">
                <strong>Whoops! There were some problems with your input.</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            
            @if ($message = Session::get('success'))
            <div style="color: rgb(25, 218, 25);">
                <strong>{{ $message }}</strong>
            </div>
            @endif
            
            @if(session('error'))
            <div style="color: rgb(218, 25, 25);">
              <strong>{{ session('error') }}</strong>
          </div>
          
@endif

            
            <div class="fi">
                <div class="title">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                <div >
                    <strong>Image:</strong>
                    <input class="im" type="file" name="image" class="form-control">
                </div>
                <div >
                    
                    <button class="btn5" type="submit">Upload</button>
                </div>
            </div>
            
            
        </form> 
    </div> 
        
        
        <div class="row">
            <div class="image-gallery">
                @if($images->count())
                  @foreach($images as $image)
                    <div class="gallery-item">
                      <a href="/images/{{ $image->image }}" onclick="event.preventDefault(); showImage('{{ $image->image }}');">
                        <img class="gallery-image" alt="{{ $image->title }}" src="/images/{{ $image->image }}">
                      </a>
                      <div class="gallery-caption">
                        <p class="p4">{{ $image->title }}</p>
                        
                        <form action="{{ url('image-gallery',$image->id) }}" method="POST">
                          <input type="hidden" name="_method" value="delete">
                          <button type="submit">X</button>
                          {!! csrf_field() !!}
                        </form>
                      </div>
                    </div>
                  @endforeach
                @endif
              </div>
              <div id="image-container">
                <div id="image-wrapper">
                  <img id="full-image" src="">
                  <button id="close-button" onclick="hideImage()">X</button>
                </div>
              </div>
    </div> 

    <script>
        function showImage(filename) {
          var imagePath = "/images/" + filename;
          var fullImage = document.getElementById("full-image");
          fullImage.src = imagePath;
          fullImage.style.width = "100%";
          fullImage.style.height = "auto";
          var container = document.getElementById("image-container");
          container.style.display = "block";
        }
        
        function hideImage() {
          var container = document.getElementById("image-container");
          container.style.display = "none";
        }
        </script>
</body>



@endsection