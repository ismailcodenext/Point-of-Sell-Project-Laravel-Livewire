<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users List</h1>
                </div> <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-end align-items-center mb-2">

                        <div class="col-md-4 d-flex justify-content-end">
                            <button wire:click.prevent="addNewUser"
                                    class="btn btn-primary  btn-sm px-2"><i class="fa fa-plus-circle mr-2"></i> Add New
                                User
                            </button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">

                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <a href="" wire:click.prevent="edit({{ $user }})">
                                                <i class="fa fa-edit mr-2"></i>
                                            </a>
                                            <a href="">
                                                <i class="fa fa-trash text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="formUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
         wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        @if($showUserEditModel)
                            <span>Edit User</span>
                        @else
                            <span>Add New user</span>
                        @endif
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" wire:submit.prevent="{{ $showUserEditModel ? 'updateUser' : 'createUser'}}">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" wire:model.defer="state.name"
                                   class="form-control @error('name') is-invalid @enderror" id="name"
                                   aria-describedby="nameHelp"
                                   placeholder="Enter your full name">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message  }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" wire:model.defer="state.email"
                                   class="form-control @error('email') is-invalid @enderror" id="email"
                                   aria-describedby="emailHelp"
                                   placeholder="Enter Your email address">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" wire:model.defer="state.password"
                                   class="form-control @error('password') is-invalid @enderror" id="password"
                                   placeholder="Password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="passwordConfirmation">Confirm Password</label>
                            <input type="password" wire:model.defer="state.password_confirmation" class="form-control"
                                   id="passwordConfirmation"
                                   placeholder="Confirm Password">
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                            class="fa fa-times mr-1"></i>Cancle
                    </button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-1"></i>
                        @if($showUserEditModel)
                            <span>Save Change</span>
                        @else
                            <span>Save</span>
                        @endif
                    </button>
                </div>
            </div>
            </form>

        </div>
    </div>

</div>
