@section('title', 'Lessons')
{{-- Header Section From Layouts-Header --}}
@include('backend.layouts.header')


{{-- Sidebar Section From Layouts-Sidebar --}}
@include('backend.layouts.sidebar')
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

              <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Lessons</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Lessons</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

<div class="card">
    <div class="card-body">
            <!-- Striped Rows -->
       <!-- Variants -->
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col" class="text-center">#</th>
            <th scope="col">Course Id</th>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Content</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lessons as $key => $lesson )
        <tr>
            <th scope="row" class="text-center">{{$key}}</th>
            <td>
                {{$lesson -> course_id}}
            </td>
            <td>
                {{$lesson -> name}}
            </td>
            <td>
                {{$lesson -> slug}}
            </td>
            <td>
                {{$lesson -> content}}
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
    </div>
</div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

@include('backend.layouts.footer')
