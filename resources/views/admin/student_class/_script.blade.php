<script>
    $(function() {
        $('.student-class-edit-button').on('click', function() {
            let id = $(this).data('id');
            let url = "{{ url('kelas') }}/" + id
            $.ajax({
                url: 'kelas/json/' + id,
                success: function(data) {
                    $("#class_code_edit").val(data.data.class_code);
                    $("#name_edit").val(data.data.name)
                    $("#school_year_edit").val(data.data.school_year)
                    $("#homeroom_teacher_edit").val(data.data.homeroom_teacher)

                    $('#student-class-edit-form').attr('action', url);

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