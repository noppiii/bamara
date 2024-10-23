
<div class="container">
    <form id="payment-form">
        <input type="hidden" id="snap-token" value="{{ $snapToken }}">
    </form>

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var snapToken = document.getElementById('snap-token').value;
            snap.pay(snapToken, {
                onSuccess: function(result) {
                    alert('Payment success!');
                },
                onPending: function(result) {
                    alert('Waiting payment.');
                },
                onError: function(result) {
                    alert('Upsss something was error :(.');
                }
            });
        });
    </script>

</div>
