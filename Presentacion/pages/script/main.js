document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('primoForm');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita el envío automático del formulario

        const numeroInput = document.getElementById('numero');
        const numero = parseInt(numeroInput.value);

        // Verificar si el número es primo
        if (esPrimo(numero)) {
            alert('El número es primo. Enviando formulario.');
            form.submit(); // Enviar el formulario si el número es primo
        } else {
            alert('El número no es primo. Intenta con otro número.');
        }
    });

    function esPrimo(num) {
        if (num <= 1) return false;
        if (num === 2) return true; // 2 es el único número par primo
        if (num % 2 === 0) return false; // Si es divisible por 2, no es primo
        for (let i = 3; i <= Math.sqrt(num); i += 2) {
            if (num % i === 0) return false;
        }
        return true;
    }
});
