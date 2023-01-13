@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            {{-- @if (trim($slot) === 'Laravel') --}}
            {{-- <img src="https://files.fm/u/z52z95pup" class="logo" alt="Groceries Logo"> --}}
            {{-- @else --}}
            {{-- <img src="https://files.fm/u/z52z95pup" class="logo" alt="Groceries Logo"> --}}
            {{-- @endif --}}
            <h1 style="text-align: center">Groceries</h1>
        </a>
    </td>
</tr>