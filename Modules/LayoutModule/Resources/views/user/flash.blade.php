@if ($errors->any())
<div>
    <!-- <strong>{{ __('messages.Error') }} !</strong> -->
    <ul>
        @foreach ($errors->all() as $error)
        <input type="hidden" value="{{$error}}" id="message">
        <!-- <li>{{ $error }}</li> -->
        @push('scripts')
        <script>
            $(document).ready(function() {
                var message = $("#message").val();
                // alert(message)
                iziToast.error({
                    title: "Error",
                    message: message,
                    timeout: 5000,
                    position: 'topRight',
                    progressBar: true,

                })
            })
        </script>
        @endpush
        @endforeach
    </ul>
</div>
@endif


@if ($message = Session::get('success'))
<div>
    <input type="hidden" value="{{$message}}" id="message">
    <!-- <p>{{ $message }}</p> -->

    @push('scripts')
    <script>
        $(document).ready(function() {
            var message = $("#message").val();
            // alert(message)
            iziToast.success({
                title: '',
                message: message,
                position: 'topRight',
                progressBar: true,
            })
        })
    </script>
    @endpush
</div>
@endif