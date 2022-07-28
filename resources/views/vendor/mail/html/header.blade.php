<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else


@php

$publicLogo = public_path('image/logo.png');
$filelogo = file_get_contents( $publicLogo );
$b64 = base64_encode( $filelogo);
@endphp
<img style=" display: block ;margin: 0 auto; width: 300px; height: auto;" src="{{'data:image/png;base64,'.$b64}}" alt="">


{{ $slot }}
</div>


 
@endif
</a>
</td>
</tr>
