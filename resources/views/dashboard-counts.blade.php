<h1 style="text-align: center; font-size: 50px; font-weight: bold; color: #061e55; margin-top: 20px;">
    Picanteria Mar Azul "La Hueca"
</h1>
<!-- Contenedores de platillos y jugos centrados -->
<div style="display: flex; gap: 20px; justify-content: center; align-items: center; margin-top: 20px;">
    <div style="background-color: #E3F2FD; padding: 20px; border-radius: 8px; width: 200px; text-align: center; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
        <img src="{{ asset('images/icon.png') }}" alt="Platillos" style="width: 175px; height: 175px; margin-bottom: 10px;">
        <h3 style="color: #1E88E5; margin: 0;">Total de Platillos</h3>
        <p style="font-size: 24px; font-weight: bold; color: #1565C0; margin: 5px 0;">{{ $platillosCount }}</p>
    </div>
    <div style="background-color: #E3F2FD; padding: 20px; border-radius: 8px; width: 200px; text-align: center; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
        <img src="{{ asset('images/jugo.png') }}" alt="Jugos" style="width: 175px; height: 175px; margin-bottom: 10px;">
        <h3 style="color: #1E88E5; margin: 0;">Total de Jugos</h3>
        <p style="font-size: 24px; font-weight: bold; color: #1565C0; margin: 5px 0;">{{ $jugosCount }}</p>
    </div>
</div>