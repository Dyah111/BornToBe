<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
<button id="pay-button">Bayar Sekarang</button>
<script>
    document.getElementById('pay-button').onclick = function () {
        snap.pay("{{ $snapToken }}", {
            onSuccess: function (result) {
                alert("Pembayaran berhasil!");
            },
            onPending: function (result) {
                alert("Menunggu pembayaran.");
            },
            onError: function (result) {
                alert("Pembayaran gagal.");
            }
        });
    };
</script>
