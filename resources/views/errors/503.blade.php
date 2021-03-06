@extends('layouts.PublicTemplate2')

@section('preTitle') Error 503 @endsection

@section('content')
    <section id="contact-page" class="container">
        <div class="row-fluid">
            
            <div class="span2">
            </div>

            <div class="span8">
                <h3>Error 503! Service Unavailable</h3>

                <div class="row-fluid">
                    <div class="span12 text-center alert alert-danger">
                        <span class="invalid-feedback" role="alert">
                            <strong>Error 503! Service Unavailable</strong>
                            <p>The Page you are looking is not available because service is unavailable.</p>
                        </span>
                    </div>
                </div>
        	</div>
            
            <div class="span2">
            </div>

        </div>
    </section>
@endsection
