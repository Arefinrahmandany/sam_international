@if ( $errors -> any() )
<p class="alert alert-danger alert-dismissible fade show" role="alert">{{ $errors -> first() }}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p></p>
@endif

@if ( Session::has('success-table') )
<p class="alert alert-success alert-dismissible fade show" role="alert">{{ Session::get('success-table') }}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p></p>
@endif

@if ( Session::has('warning-table') )
<p class="alert alert-warning alert-dismissible fade show" role="alert">{{ Session::get('warning-table') }}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p></p>
@endif

@if ( Session::has('danger-table') )
<p class="alert alert-danger alert-dismissible fade show" role="alert">{{ Session::get('danger-table') }}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p></p>
@endif

