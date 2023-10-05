<p x-data = "{ show: true}"
       x-init ="setTimeout(() => show = false,4000)"
       x-show = "show"
       class= "notification text-center p-2 bg-danger text-white border rounded"
       >

{{ $slot }}

</p>

{{-- <style>
       .notification{
         position: fixed;
         bottom: 80px;
         right: 100px;
         z-index: 999;
       }
</style> --}}