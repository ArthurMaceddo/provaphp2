<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashion Store</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header> 
        <img src="{{ asset('images/logo.png') }}" alt="Fashion Store Logo">
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('products.index') }}">Produtos</a></li>
                <li><a href="{{ route('products.create') }}">Adicionar Produto</a></li>
                <li><a href="{{ route('components.contactform') }}">Contato</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="container">
        @yield('content')
    </div>

    <footer>
        
    </footer>
    
    @yield('scripts')
</body>
</html>
