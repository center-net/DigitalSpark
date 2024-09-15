<div class="row row-sm">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
        <div class="card">
            <div class="card-header pb-0">
                <div class="col-2">
                    {{-- main-header-center mr-3 d-sm-none d-md-none d-lg-block --}}
                    <div class="mr-3 main-header-left">
                        <input class="form-control" placeholder="Search for anything..." type="search">
                            <button class="btn" style="right: 31px !important;"><i
                                class="fas fa-search d-none d-md-block"></i></button>
                    </div><!-- input-group -->
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive border-top userlist-table">
                    <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                        <thead>
                            <tr>
                                <th class="wd-lg-8p"><span>#</span></th>
                                <th class="wd-lg-8p"><span>name</span></th>
                                <th class="wd-lg-8p"><span>Products count</span></th>
                                <th class="wd-lg-20p"><span>parent</span></th>
                                <th class="wd-lg-20p"><span>Status</span></th>
                                <th class="wd-lg-20p">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($productcategories as $index=>$ProductCategory)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $ProductCategory->name }}</td>
                                    <td>{{ $ProductCategory->products->count() }}</td>
                                    <td>{{ $ProductCategory->parent_name  }}</td>
                                    <td>{{ $ProductCategory->status() }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="las la-search"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-info">
                                            <i class="las la-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger">
                                            <i class="las la-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                            @endforelse

                        </tbody>
                    </table>
                </div>
                {!! $productcategories->appends(request()->all())->links() !!}
            </div>
        </div>
    </div><!-- COL END -->
</div>
