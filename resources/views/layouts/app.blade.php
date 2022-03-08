{{-- app.blade.php sarà il nostro template o timbro, il nosro modello.
creo nelle VIEW anche i partials che poi verranno inclusi con i layouts --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- nomino il mio segnaposto --}}
    <title>@yield('title')</title>
</head>
<body>
    {{-- utilizzo l'include, partials è la cartella .header è il file che vado a selezionare --}}
    @include('partials.header')

    @include('partials.footer')
    
</body>
</html>