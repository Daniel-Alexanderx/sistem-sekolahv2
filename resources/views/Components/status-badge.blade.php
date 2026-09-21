@props(['status'])

@php
    $styles = [
        'Aktif' => 'bg-green-50 text-green-700 border-green-200',
        'Tidak Aktif' => 'bg-red-50 text-red-700 border-red-200',
    ];

    $badgeStyle = $styles[$status] ?? 'bg-slate-50 text-slate-700 border-slate-200';
@endphp

<span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold {{ $badgeStyle }}">
    {{ $status }}
</span>