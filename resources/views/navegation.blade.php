<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    
    </head>
    <body class="antialiased">  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            
            <a class="navbar-brand" href="{{url('/')}}">Quiero mi Mascota</a>
            </li> 
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Perros
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{url('/Perros/catalogo')}}">Catalogo</a>
                
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Gatos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{url('/gatos/Catalogo')}}">Catalogo</a>
                
                </div>
            </li>
              
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/contacto')}}">Contactos<span class="sr-only">(current)</span></a>
            </li>       
            </ul>
        </div>
        </nav>
        </body>
</html>
