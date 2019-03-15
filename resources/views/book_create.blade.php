@extends('app')

@section('content')
    <form method="post" action="{{ route('books.store') }}">
        {{ csrf_field() }}
        <div class="container" id="create">
                <div class="row">
                    <div class="col-md-6">
                        <p>Название: <input class="form-control form-control-lg" type="text" placeholder="книга" name="title"></p>
                        <p>Описание: <label for="exampleFormControlTextarea1"></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Краткое описание" name="description"></textarea></p>
                        <label for="exampleFormControlFile1">Выберите обложку</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="cover">
                        <button type="submit" class="btn btn-success" id="create">Опубликовать</button>
                    </div>
                    <div class="col-md-6">
                        <p>Год: <input class="form-control form-control-lg" type="text" placeholder="Год" name="publish_year"></p>
                        <p>Издательство: <input class="form-control form-control-lg" type="text" placeholder="Издательство"></p>
                    </div>
                    </div>
        </div>


    </form>
@endsection
