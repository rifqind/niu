$("#storeUser").click(function (e) {
    e.preventDefault();
    // $('.loader').removeClass('d-none');
    var users = $('#formUser').serialize();
    console.log(users);
    $.ajax({
        type: "POST",
        url: store_URL.href,
        data: users,

        success: function (data) {
            // window.history.back();
            window.location.href = index_URL.href
            // Toast.fire({
            //     icon: 'success',
            //     title: 'Berhasil',
            //     text: 'Data berhasil disimpan.'
            // })
            // $('.loader').addClass('d-none')
            // fetchData()
            // alert(data);
        },
    });
});