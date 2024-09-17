@extends('layouts.admin.app')
@section('content')

    <div class="card">
        <div class="card-body">
            <div class="text-end mb-5">
                <button class="btn btn-primary" data-toggle="modal" data-target="#my-modal">
                    Create Role
                </button>
            </div>
            <table class="table table-light" id="myTable">
                <thead class="thead-light">
                    <tr>
                        <td>Name</td>
                        <td>Action2</td>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($data) && count($data) > 0)
                        ;
                        @forelse ($data as $item)
                            <tr class='row-data' data-id="{{ $item->id }}">
                                <td>{{ $item->name }}</td>
                                <td>
                                    <button data-id="{{ $item->id }}" class="edit-button" data-toggle="modal"
                                        data-target="#my-modal"><i class="mdi mdi-eye menu-icon"></i></button>
                                    <a href="{{ url('/admin/delete/' . $item->id) }}"><i
                                            class="mdi mdi-delete menu-icon"></i></a>
                                </td>
                            </tr>
                        @empty
                            <h2>Data Not Found</h2>
                        @endforelse
                    @else
                        <h2>Data Not Found</h2>
                    @endif


                </tbody>

            </table>

            <div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="my-modal-title">Role</h5>
                            <button class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" id="role-button">submit</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(() => {
                var selected = null;
                $('#role-button').on('click', () => {
                    var name = $('#name').val();
                    const url = "{{ route('admin.roles.submit', ['id' => '__ID__']) }}".replace('__ID__',
                        selected);

                    $.ajax({
                        type: "post",
                        url: url,
                        data: {
                            "name": name
                        },
                        success: function(response) {
                            $('#my-modal').modal('hide');
                            if (!selected && response.status == "success") {
                                var newRow = $('<tr>').append(
                                    $('<td>').text(response.data.name),
                                    $('<td>').html(`<a href="/admin/.${response.data.id}"><i class="mdi mdi-eye menu-icon"></i></a>
                 <a href="/admin/delete/'.${response.data.id}"><i class="mdi mdi-delete menu-icon"></i></a>`)
                                );

                                $('#myTable tbody').append(newRow);
                            } else {
                                var row = document.querySelectorAll('.row-data');
                                row.forEach(rowItem => {
                                    value = rowItem.getAttribute('data-id');
                                    if (value == selected) {
                                        rowItem.innerHTML = `
                <td>${response.data.name}</td>
                <td>
                    <button data-id="${response.data.id}"  class="edit-button" data-toggle="modal" data-target="#my-modal"><i class="mdi mdi-eye menu-icon"></i></button>
                    <a href="/admin/delete/${response.data.id}"><i class="mdi mdi-delete menu-icon"></i></a>
                </td>
            `;
                                    }
                                });
                            }
                            console.log(response)
                        }
                    });
                })

                var editButton = document.querySelectorAll('.edit-button');
                editButton.forEach(button => {
                    button.addEventListener('click', async (e) => {
                        var id = e.target.getAttribute('data-id');
                        result = await getData(id);
                        $('#name').val(result.data.name);
                        selected = result.data.id;


                    })
                });
                // $('.edit-button').on('click',()=>{
                //     var dataId = $(this).data('id');
                //     alert(dataId);
                // })
                function getData(id = null) {
                    console.log(id, 'get');
                    let url = id ? `/roles/${id}` : '/roles';

                    return new Promise((resolve, reject) => {
                        $.ajax({
                            url: url,
                            type: 'GET',
                            dataType: 'json', // Expecting JSON response
                            success: function(data) {
                                resolve(data);
                            },
                            error: function(xhr, status, error) {
                                reject(new Error('Error fetching data: ' + error));
                            }
                        });
                    });
                }


            });
        </script>
    @endpush
@endsection
