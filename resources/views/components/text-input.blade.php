@props(['field_name'=>'','disabled' => false])
@php
$extraClass =count($errors->get($field_name))>0 ? 'error-input':''
@endphp


<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => "border-gray-300 focus:border-indigo-500
focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full ".$extraClass]) !!}>