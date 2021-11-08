<script>
    $(function() {
        $('.educational-guidance-donation-edit-button').on('click', function() {
            let id = $(this).data('id');
            let url = "{{ url('spp') }}/" + id
            $.ajax({
                url: 'spp/json/' + id,
                success: function(data) {
                    $("#educational_guidance_donation_code_edit").val(data.data.educational_guidance_donation_code);
                    $("#name_edit").val(data.data.name)
                    $("#bill_edit").val(data.data.bill)

                    $('#educational-guidance-donation-edit-form').attr('action', url);
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