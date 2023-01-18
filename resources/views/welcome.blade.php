<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@extends('layouts.an')

@section('content')
<div class="container-lg">
    <div class="row mt-3">
        <section class="bg-white dark:bg-gray-900">
            <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                        <form method="GET" action="{{ route('rand.generate') }}" accept-charset="UTF-8">
                            <div class="form-group mb-2">
                                <label class="sr-only">
                                    <h3>Рандомное число</h3>
                                </label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>{{ $rand }}</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Нажать</button>
                        </form>
                    </div>
                </div>
        </section>
    </div>
</div>
@endsection