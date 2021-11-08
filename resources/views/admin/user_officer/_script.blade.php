<script>
    $(function() {
        $('.user-officer-edit-button').on('click', function() {
            let id = $(this).data('id');
            let url = "{{ url('petugas') }}/" + id
            $.ajax({
                url: 'petugas/json/' + id,
                success: function(data) {
                    $("#name_edit").val(data.data.user.name);
                    $("#email_edit").val(data.data.user.email);
                    $("#password_edit").val(data.data.user.password);

                    $('#role_id_edit').append(`<option value="" selected>Pilih Level..</option>`)
                    data.data.roles.forEach(function(role) {
                        $('#role_id_edit').append(`<option value="${role.id}"${role.id === data.data.user.role_id ? ' selected' : ''}>${role.name}</option>`);
                    });

                    $('#user-officer-edit-form').attr('action', url);
                },
                error: function(data) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Terjadi kesalahan, reload halaman ini atau lapor kepada administrator!'
                    });
                }
            })
        });
    });
</script>