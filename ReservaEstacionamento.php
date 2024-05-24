<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Estacionamento</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <h1>Reserva de Estacionamento</h1>
        <form id="reservation-form">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name">
<!-- Acrescenta 'Alvez Pepereira' no campo nome -->
            <label for="car-model">Modelo do Carro:</label>
            <input type="text" id="car-model" name="car-model" required>

            <label for="license-plate">Placa do Carro:</label>
            <input type="text" id="license-plate" name="license-plate">
<!-- Altera a placa do carro -->
            <label for="date">Data:</label>
            <input type="date" id="date" name="date">

            <label for="time">Hora:</label>
            <input type="time" id="time" name="time" required>

            <button type="submit">Reservar</button>
        </form>
        <div id="confirmation"></div>
        <!-- Botão para nova reserva -->
        <button id="new-reservation" style="display:none;">Nova Reserva</button>
    </div>
    <script src="script.js"></script>
</body>
</html>