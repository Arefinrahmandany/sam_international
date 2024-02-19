@if ( $errors -> any() )
<p class="alert alert-danger alert-dismissible fade show" role="alert">{{ $errors -> first() }}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p></p>
@endif

@if ( Session::has('success') )
<p class="alert alert-success alert-dismissible fade show" role="alert">{{ Session::get('success') }}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p></p>
@endif

@if ( Session::has('warning') )
<p class="alert alert-warning alert-dismissible fade show" role="alert">{{ Session::get('warning') }}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p></p>
@endif

@if ( Session::has('danger') )
<p class="alert alert-danger alert-dismissible fade show" role="alert">{{ Session::get('danger') }}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p></p>
@endif
