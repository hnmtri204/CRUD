@extends('admin.layout')

@section('content')
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-10">
                <!-- basic form  -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="basicform">
                            <h3 class="section-title">Basic Form Elements</h3>
                        </div>
                        <div class="card">
                            <h5 class="card-header">Basic Form</h5>
                            <div class="card-body">
                                <form action=" {{ route('admin.categories.store') }} " method="post">
                                    {{ csrf_field('') }}
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Name</label>
                                        <input name="name"  id="inputText3" type="text" placeholder="Name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">Description</label>
                                        <input name="description"  id="inputEmail" type="text" placeholder="Description" class="form-control">
                                    </div>
                                    
                                 
                                    <button type="submit" class="btn btn-success">Create!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end basic form  -->
            </div>
        </div>
    </div>
</div>
@endsection