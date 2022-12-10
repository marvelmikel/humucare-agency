<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

@if(session()->has('notify'))
    @foreach(session('notify') as $msg)
        <script>
            "use strict";
            Swal.fire({
                icon: '{{ $msg[0] }}',
                title: '{{ ucfirst($msg[0]) }}',
                text: '{{ __($msg[1]) }}',
                showConfirmButton: false,
                showCancelButton: true,
                cancelButtonText: 'Close',
                cancelButtonColor: 'red',
            })
        </script>
    @endforeach
@endif

@if ($errors->any())
    @php
        $collection = collect($errors->all());
        $errors = $collection->unique();
    @endphp

    <script>
        "use strict";
        @foreach ($errors as $error)
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ __($error) }}',
                showConfirmButton: false,
                showCancelButton: true,
                cancelButtonText: 'Close',
                cancelButtonColor: 'red',
            })
        @endforeach
    </script>

@endif
<script>
"use strict";
    function notify(status,message) {
        Swal.fire({
            icon: status,
            title: status.charAt(0).toUpperCase() + status.slice(1),
            text: message,
            showConfirmButton: false,
            showCancelButton: true,
            cancelButtonText: 'Close',
            cancelButtonColor: 'red',
            // iconColor: 'black',
        })
    }
</script>