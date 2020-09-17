@extends('layouts.argon')

@section('content')
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Nuevo</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('configEmpresa.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-circle-left"></i> Volver</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="nombre">Nombre</label>
                                        <input type="text" id="" class="form-control" name="nombre" placeholder="Enter your nombre" value="">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="nit">Nit</label>
                                        <input type="text" id="" name="nit" class="form-control" placeholder="Escriba Nit">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="direccion">Direccion</label>
                                        <input type="text" id="" name="direccion" class="form-control" placeholder="Escriba Su Direccion">
                                    </div>
                            </div>
                                <div class="col-lg-6">
                                <div class="form-group">
                                        <label class="form-control-label" for="telefono">Telefono</label>
                                        <input type="number" id="" name="telefono" class="form-control" placeholder="Escriba Su Telefono">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="logo">Logo</label>
                                        <input type="file" id="" name="logo" class="form-control" placeholder="Inserte Su Logo">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <button class="btn btn-sm btn-success"><i class="fas fa-save"></i> Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            var permissions_box = $('#permissions_box');
            var permissions_ckeckbox_list = $('#permissions_ckeckbox_list');
            permissions_box.hide();

            $('#role').on('change', function() {
                var role = $(this).find(':selected');
                var role_id = role.data('role-id');
                var role_slug = role.data('role-slug');
                permissions_ckeckbox_list.empty();
                $.ajax({
                    url: "/user/create",
                    method: 'get',
                    dataType: 'json',
                    data: {
                        role_id: role_id,
                        role_slug: role_slug,
                    }
                }).done(function(data) {
                    permissions_box.show();
                    $.each(data, function(index, element){
                        $(permissions_ckeckbox_list).append(
                            '<div class="custom-control custom-checkbox">'+
                            '<input class="custom-control-input" type="checkbox" name="permissions[]" id="'+ element.slug +'" value="'+ element.id +'">' +
                            '<label class="custom-control-label" for="'+ element.slug +'">'+ element.nombre +'</label>'+
                            '</div>'
                        );
                    });
                });
            });
        });
    </script>
@endsection