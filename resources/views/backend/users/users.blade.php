<div class="row row-sm">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
        <div class="card">
            <div class="card-header pb-0">
                <div class="col-2">
                    {{-- main-header-center mr-3 d-sm-none d-md-none d-lg-block --}}
                    <div class="mr-3 main-header-left">
                        <input class="form-control" placeholder="Search for anything..." type="search">
                    </div><!-- input-group -->
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive border-top userlist-table">
                    <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                        <thead>
                            <tr>
                                <th class="wd-lg-8p"><span>#</span></th>
                                <th class="wd-lg-8p"><span>User</span></th>
                                <th class="wd-lg-20p"><span></span></th>
                                <th class="wd-lg-20p"><span>Created</span></th>
                                <th class="wd-lg-20p"><span>Status</span></th>
                                <th class="wd-lg-20p"><span>Email</span></th>
                                <th class="wd-lg-20p">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $index=>$user)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <img alt="avatar" class="rounded-circle avatar-md mr-2"
                                            src="{{ asset('assets/backend/img/faces/') . '/' . $user->profile_photo }}">
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td class="text-center">
                                        <span class="label text-{{ $user->role->color }} d-flex">
                                            <div class="dot-label bg-{{ $user->role->color }} ml-1"></div>
                                            {{ $user->role->name }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{ $user->email }}">{{ $user->email }}</a>
                                    </td>
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
                {!! $users->appends(request()->all())->links() !!}
            </div>
        </div>
    </div><!-- COL END -->
</div>
