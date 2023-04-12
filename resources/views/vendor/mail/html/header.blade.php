@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Myart')
<img src="{{ asset('/images/logo.svg') }}" class="logo" >
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
