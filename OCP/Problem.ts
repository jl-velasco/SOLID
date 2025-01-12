class NotificationSender {
    public send(type: string, message: string): void {
        if (type === 'email') {
            console.log(`Enviando email: ${message}`);
        } else if (type === 'sms') {
            console.log(`Enviando SMS: ${message}`);
        } else {
            console.log("Tipo de notificación no soportado.");
        }
    }
}

const sender = new NotificationSender();
sender.send('email', '¡Hola desde email!');
sender.send('sms', '¡Hola desde SMS!');