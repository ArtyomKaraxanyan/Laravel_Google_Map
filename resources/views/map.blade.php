@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if (isset($message))

                        <p>  {{ $message}}  </p>

                    @endif

                    <form action="/search" method="POST" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" name="q"
                                   placeholder="Search Cities"> <span class="input-group-btn">
                                      <button type="submit"   class="btn btn-dark"><i class="fas fa-search"></i>
                                         <span class="glyphicon glyphicon-search"></span>
                                          </button>
                                              </span>
                        </div>
                    </form>


                        <div style="width: 800px; height: 600px;">
                            {!! Mapper::render() !!}
                        </div>

                </div>
            </div>
        </div>
    </div>
@endsection
