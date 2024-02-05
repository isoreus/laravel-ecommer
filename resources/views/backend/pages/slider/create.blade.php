@extends('backend.layout.app')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Slider Ekle</h4>

                    @if ($errors)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif

                    @if (session()->get('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                    @endif
                    <p class="card-description">

                    </p>
                    <form action="{{route('panel.slider.store')}}" class="forms-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Başlık</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Slider Başlık">
                        </div>
                        <div class="form-group">
                            <label for="slogan">Slogan</label>
                            <textarea type="email" class="form-control" id="slogan" name="content" placeholder="Slider Slogan"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" id="link" name="link" placeholder="Slider Link">
                        </div>

                        {{-- <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="image" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <label for="durum">Durum</label>
                            <select name="status" id="status" class="form-control">
                                <option value="0">----</option>
                                <option value="1" selected>Aktif</option>
                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
