User
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 960px;
            margin-top: 50px;
        }
        .card {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            margin-bottom: 20px;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #dee2e6;
        }
        .card-body {
            padding: 15px;
        }
        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .btn-more-info {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Destinos</h1>
        <div class="d-flex flex-wrap justify-content-around">
            @foreach ($destinos as $destino)
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset($destino->imagen) }}" class="card-img-top" alt="{{ $destino->nombre }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $destino->nombre }}</h5>
                        <button type="button" class="btn btn-primary btn-more-info" data-bs-toggle="modal" data-bs-target="#destinoModal{{ $destino->id }}">
                            Más información
                        </button>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="destinoModal{{ $destino->id }}" tabindex="-1" aria-labelledby="destinoModalLabel{{ $destino->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">{{ $destino->nombre }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="lead">{{ $destino->descripcion }}</p>
                                <p class="fw-bold">Precio: ${{ $destino->precio }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>
