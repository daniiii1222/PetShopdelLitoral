

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
Swal.fire('Hola');
</script>

<script>
Swal.fire({
    title: 'Mensaje enviado',
    html: 'Hola <strong>{{ $nombre }}</strong>, qué bueno recibir tu mensaje.<br><br>Un miembro del equipo de ventas se pondrá en contacto con vos al correo: <strong>{{ $email }}</strong></br><br>¡Muchas gracias!',
    icon: 'success',
    confirmButtonText: 'Aceptar'
});
</script>