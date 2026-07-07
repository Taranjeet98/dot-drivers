<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? config('app.name') }}</title>

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    .theaderone th {
    font-size: 13px;
    padding: 10px;
    color: #1d293d;
    
}
table td {
    color: #6a7282;
    font-size: 13px;
    padding: 10px;
}
.checkeroneTable {
    border: 1.5px solid #dfdfdf;
    padding: 1px 5px;
    border-radius: 40px;
}
.dftr {
    font-size: 13px;
    padding-top: 14px;
    color: #1d293d;
}
input,select, button{
    border-radius: 5px;
}
.badgedt.successone {
    background: #d2f4d2;
    color: #10b239;
    border-radius: 4px;
    margin-left: 6px;
    font-size: 14px;
}
.badgedt.warningone {
    background: #ffffc2;
    color: #e5de0f;
    border-radius: 4px;
    margin-left: 6px;
    font-size: 14px;
}
.badgedt.deleteone {
    background: #f4d2d2;
    color: #e70f0f;
    border-radius: 4px;
    margin-left: 6px;
    font-size: 14px;
}
</style>
@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
