@extends('layouts/main')

@section('title')
  My Courtyard
@endsection

@section('content')
<div class="homepage-block row">
    <span class="pulse animated welcomeMessage col-lg-12">My Courtyard</span>

    <div class="col-lg-3 col-lg-offset-3 fadein animated"><a href="#" data-toggle="modal" data-target="#registrationModal">Registration</a></div>
    <div class="col-lg-3 fadein animated"><a href="#">Login</a></div>
</div>
@endsection

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>