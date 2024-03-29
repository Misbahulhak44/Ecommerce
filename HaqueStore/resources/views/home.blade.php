@extends('layouts.frontend')

@section('content')
<section style='padding-top:180px; '>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
              <section style='padding-bottom: 100px;'>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
              </section>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
