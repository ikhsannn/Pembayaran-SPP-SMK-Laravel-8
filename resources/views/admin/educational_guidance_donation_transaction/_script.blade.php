<script>
    $(function() {
        $('.educational-guidance-donation-transactions-edit-button').on('click', function() {
            let id = $(this).data('id');
            let url = "{{ url('transaksi') }}/" + id
            $.ajax({
                url: '/transaksi/json/' + id,
                success: function(data) {
                    const {
                        educational_guidance_donation_transaction: transaksi,
                        statuses
                    } = data.data;

                    myObj = {
                        "months": [
                            {"id":"1", "name":"Januari"},
                            {"id":"2", "name":"Februari"},
                            {"id":"3", "name":"Maret"},
                            {"id":"4", "name":"April"},
                            {"id":"5", "name":"Mei"},
                            {"id":"6", "name":"Juni"},
                            {"id":"7", "name":"Juli"},
                            {"id":"8", "name":"Agustus"},
                            {"id":"9", "name":"September"},
                            {"id":"10", "name":"Oktober"},
                            {"id":"11", "name":"November"},
                            {"id":"12", "name":"Desember"}
                        ]
                    }
                    $('#month_edit').empty();
                    $('#month_edit').append(`<option value="" selected>Pilih Bulan..</option>`)
                    // months.forEach(function(month) {
                    //     $('#month_edit').append(`<option value="${month.id}"${month.id === transaksi.month ? ' selected' : ''}>${month.name}</option>`)
                    // });
                    for(var i in myObj.months) {
                        // console.log(myObj.months[i].name)
                        $('#month_edit').append(`<option value="${myObj.months[i].id}"${myObj.months[i].id === transaksi.month ? ' selected' : ''}>${myObj.months[i].name}</option>`)
                    }

                    $('#is_paid_edit').empty();
                    $('#is_paid_edit').append(`<option value="">Pilih Status..</option>`)
                    statuses.forEach(function(status) {
                        $('#is_paid_edit').append(`<option value="${status === 'Lunas' ? 1 : 0}"${(transaksi.is_paid && status === 'Lunas') || (!transaksi.is_paid && status === 'Belum Lunas') ? ' selected' : ''}>${status}</option>`)
                    });

                    $('#student_identification_number_edit').val(data.data.student_identification_number);
                    $("#amount_paid_edit").val(transaksi.amount_paid);
                    $("#paid_date_edit").val(transaksi.paid_date);
                    $('#bill_edit').val(data.data.bill);

                    $('#educational-guidance-donation-transactions-edit-form').attr('action', url);
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